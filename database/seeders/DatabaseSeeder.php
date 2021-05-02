<?php

namespace Database\Seeders;

use App\Models\Building;
use App\Models\Campus;
use App\Models\NetworkSwitch;
use App\Models\Port;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    private $user = null;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create()->each(function ($user) {
            $campuses = Campus::factory(2)->make();

            $user->campuses()->saveMany($campuses);
            $this->user = $user;

            $campuses->each(function ($campus) {
                $buildings = Building::factory(2)->make(['user_id' => $this->user->id,]);

                $campus->buildings()->saveMany($buildings);
                $buildings->each(function ($building) {
                    $switches = NetworkSwitch::factory(2)->make(['user_id' => $this->user->id,]);

                    $building->switches()->saveMany($switches);
                    $switches->each(function ($netswitch) {
                        $ports = Port::factory(2)->make(['user_id' => $this->user->id,]);
                        $netswitch->ports()->saveMany($ports);
                    });
                });
            });
        });
    }
}
