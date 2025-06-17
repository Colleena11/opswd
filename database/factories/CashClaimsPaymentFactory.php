<?php

namespace Database\Factories;

use App\Models\CashClaimsPayment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CashClaimsPaymentFactory extends Factory
{
    protected $model = CashClaimsPayment::class;

    public function definition(): array
    {
        return [
            'approved_claim_id' => \App\Models\Claim::factory(),
            'client_id' => \App\Models\Client::factory(),
            'date_prepared' => $this->faker->date(),
            'confirmed_people_today' => json_encode([$this->faker->name, $this->faker->name]),
            'amount' => $this->faker->randomFloat(2, 1000, 10000),
            'total_amount' => $this->faker->randomFloat(2, 2000, 20000),
            'date_of_payout' => $this->faker->date(),
        ];
    }
}