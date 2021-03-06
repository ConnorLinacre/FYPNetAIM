<?php

namespace Database\Factories;

use App\Models\Campus;
use Illuminate\Database\Eloquent\Factories\Factory;

class CampusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Campus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName . ' ' . $this->faker->lastName . " Campus",
            'address' => $this->faker->randomNumber(2) . ' ' . $this->faker->streetName . ', ' . $this->faker->city . ', ' . $this->faker->postcode,
        ];
    }
}
