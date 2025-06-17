<?php

namespace Database\Factories;

use App\Models\CheckClaimsPayment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CheckClaimsPaymentFactory extends Factory
{
    protected $model = CheckClaimsPayment::class;

    public function definition(): array
    {
        return [
            'approved_claim_id' => \App\Models\Claim::factory(),
            'client_id' => \App\Models\Client::factory(),
            'date_prepared' => $this->faker->date(),
            'amount' => $this->faker->randomFloat(2, 1000, 10000),
            'check_number' => $this->faker->unique()->numerify('CHK#####'),
            'date_claimed' => $this->faker->optional()->date(),
            'status' => $this->faker->randomElement(['pending', 'claimed', 'cancelled']),
            'pending_due_to_payee_change' => $this->faker->boolean,
        ];
    }
}