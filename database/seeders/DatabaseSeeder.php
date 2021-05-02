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
        /*
         * Since multiple relationships are on a single child
         * generation of fake data had to be done in a multistage fashion
         *
         * First, the user is generated, and then stored in a private class variable
         * this is a workaround since function variables are not passed down the chain
         *
         * After that, the child models are seeded, each being created from the parent,
         * with the user id passed through from the private class variable.
         */
        User::factory(3)->create()->each(function ($user) {
            $campuses = Campus::factory(2)->make(); // Generate campuses

            $user->campuses()->saveMany($campuses); // Save them to the user
            $this->user = $user;

            $campuses->each(function ($campus) {
                $buildings = Building::factory(2)->make(['user_id' => $this->user->id,]); // Generate the buildings with the user id

                $campus->buildings()->saveMany($buildings); // Save them to the campus
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
