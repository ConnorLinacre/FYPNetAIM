<?php

namespace Database\Factories;

use App\Models\NetworkSwitch;
use Illuminate\Database\Eloquent\Factories\Factory;

class NetworkSwitchFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NetworkSwitch::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $floor = $this->faker->numberBetween(0,5);
        $floor = $floor == 0 ? 'G' : '' . $floor;
        $model = $this->faker->randomNumber(4) . '-' . $this->faker->randomNumber(4);
        return [
            'name' => 'T' . $floor . '-' . $this->faker->numberBetween(1,3) . '-' . $model,
            'floor' => 'Floor ' . $floor == 'G' ? "Ground" : $floor,
            'model' => $model,
        ];
    }
}
