<?php

namespace Database\Factories;

use App\Models\Requirement;
use Illuminate\Database\Eloquent\Factories\Factory;

class RequirementFactory extends Factory
{
    protected $model = Requirement::class;

    public function definition(): array
    {
        return [
            'assistance_type_id' => \App\Models\AssistanceType::factory(),
            'requirement_name' => $this->faker->word,
        ];
    }
}