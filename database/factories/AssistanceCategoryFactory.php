<?php

namespace Database\Factories;

use App\Models\AssistanceCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssistanceCategoryFactory extends Factory
{
    protected $model = AssistanceCategory::class;

    public function definition(): array
    {
        return [
            'assistance_type_id' => \App\Models\AssistanceType::factory(),
            'assistance_category' => $this->faker->word,
        ];
    }
}