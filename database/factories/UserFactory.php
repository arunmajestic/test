<?php

namespace Database\Factories;

use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Users::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
			'username' => $this->faker->unique()->userName(),
            'email_verified_at' => now(),
            'password' => '$2y$12$0QU0UDT353chhkf1cr.61eWavhwWEHL6k3V4G1KiOI.1vMFKb3Fzu', // password admin#2021
            'remember_token' => Str::random(10),
        ];
    }
}
