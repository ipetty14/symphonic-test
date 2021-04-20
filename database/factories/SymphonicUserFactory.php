<?php

namespace Database\Factories;

use App\Models\SymphonicUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class SymphonicUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SymphonicUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->userName,
            'email' => $this->faker->safeEmail
        ];
    }
}
