<?php

namespace Database\Factories;


use App\Models\Client;
use App\Models\Municipality;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    protected $model = Client::class;

    public function definition(): array
    {
       
    return [
        'first_name' => $this->faker->firstName,
        'middle_name' => $this->faker->optional()->firstName,
        'last_name' => $this->faker->lastName,
        'sex' => $this->faker->randomElement(['male', 'female']),
        'age' => $this->faker->numberBetween(18, 90),
        'address' => $this->faker->address,
        'contact_number' => $this->faker->phoneNumber,
        'municipality_id' => Municipality::inRandomOrder()->first()->id,
        'valid_id' => $this->faker->uuid,
        // Remove 'email' if not in your table
    ];
    }
}