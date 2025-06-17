<?php

namespace Database\Factories;

use App\Models\ClientAssistance;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientAssistanceFactory extends Factory
{
    protected $model = ClientAssistance::class;

    public function definition(): array
    {
        return [
            'client_id' => \App\Models\Client::factory(),
            'assistance_type_id' => \App\Models\AssistanceType::factory(),
            'source_of_fund' => $this->faker->word,
            'date_received_request' => $this->faker->date(),
            'status' => $this->faker->randomElement(['approved', 'disapproved']),
            'date_status_changed' => $this->faker->optional()->dateTime(),
            'payee_id' => \App\Models\Payee::factory(),
        ];
    }
}