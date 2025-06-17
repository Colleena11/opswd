<?php

namespace Database\Factories;

use App\Models\Login;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoginFactory extends Factory
{
    protected $model = Login::class;

    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'login_timestamp' => $this->faker->dateTime(),
            'logout_timestamp' => $this->faker->optional()->dateTime(),
        ];
    }
}