<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Weight_log;
use App\Models\User;

class Weight_logFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Weight_log::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'date' => $this->faker->date(),
            'weight' => $this->faker->numberBetween(40, 80),
            'calories' => $this->faker->numberBetween(1000, 3000),
            'exercise_time' => $this->faker->time(),
            'exercise_content' => $this->faker->country(),
        ];
    }
}
