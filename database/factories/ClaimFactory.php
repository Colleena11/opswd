<?php

namespace Database\Factories;

use App\Models\Claim;

use App\Models\Municipality;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClaimFactory extends Factory
{
    protected $model = Claim::class;

    public function definition(): array
    {
        return [
            'client_id' => \App\Models\Client::factory(),
            'client_assistance_id' => \App\Models\ClientAssistance::factory(),
            'status' => $this->faker->randomElement(['approved', 'disapproved']),
            'reason_of_disapprovement' => $this->faker->optional()->sentence,
            'amount_approved' => $this->faker->randomFloat(2, 1000, 10000),
            'date_cafoa_prepared' => $this->faker->optional()->date(),
            'date_pgo_received' => $this->faker->optional()->date(),
            'date_pto_received' => $this->faker->optional()->date(),
            'form_of_payment' => $this->faker->randomElement(['cash', 'check']),
            'confirmation' => $this->faker->randomElement(['check', 'cash']),
        ];
    }
}