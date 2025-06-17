<?php

namespace Database\Factories;

use App\Models\CashDisbursement;
use Illuminate\Database\Eloquent\Factories\Factory;

class CashDisbursementFactory extends Factory
{
    protected $model = CashDisbursement::class;

    public function definition(): array
    {
        return [
            'cash_claims_payment_id' => \App\Models\CashClaimsPayment::factory(),
            'client_id' => \App\Models\Client::factory(),
            'amount' => $this->faker->randomFloat(2, 1000, 10000),
            'confirmation_date' => $this->faker->optional()->date(),
            'date_received_claimed' => $this->faker->optional()->date(),
            'date_released_total' => $this->faker->optional()->date(),
            'amount_claimed' => $this->faker->optional()->randomFloat(2, 1000, 10000),
        ];
    }
}