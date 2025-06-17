<?php

namespace Database\Factories;

use App\Models\Payee;
use Illuminate\Database\Eloquent\Factories\Factory;

class PayeeFactory extends Factory
{
    protected $model = Payee::class;

    public function definition(): array
    {
        return [
            'client_id' => \App\Models\Client::factory(),
            'first_name' => $this->faker->firstName,
            'middle_name' => $this->faker->optional()->firstName,
            'last_name' => $this->faker->lastName,
            'relationship' => $this->faker->word,
            'proof_of_relationship' => $this->faker->word,
            'update_to_new_payee' => $this->faker->boolean,
            'previous_payee_name' => $this->faker->optional()->name,
        ];
    }
}