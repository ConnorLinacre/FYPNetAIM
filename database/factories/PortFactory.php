<?php

namespace Database\Factories;

use App\Models\Port;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Date;

class PortFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Port::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'port_number' => $this->faker->numberBetween(1,10),
            'access_point' => "T".$this->faker->numberBetween(1,4)."-".$this->faker->randomNumber(4),
            'installed_by' => $this->faker->name,
            'installed_on' => now(),
        ];
    }
}
