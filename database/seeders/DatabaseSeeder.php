<?php

namespace Database\Seeders;

use App\Models\Building;
use App\Models\Campus;
use App\Models\NetworkSwitch;
use App\Models\Port;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Campus::factory(3)->create()->each(function($campus) {
            $buildings = Building::factory(3)->make();

            $campus->buildings()->saveMany($buildings);
            $buildings->each(function($building) {
                $switches = NetworkSwitch::factory(3)->make();

                $building->switches()->saveMany($switches);
                $switches->each(function($netswitch) {
                    $ports = Port::factory(3)->make();
                    $netswitch->ports()->saveMany($ports);
                });
            });
        });
    }
}
