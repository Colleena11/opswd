<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AssistanceCategory;

class AssistanceCategorySeeder extends Seeder
{
    public function run(): void
    {
        AssistanceCategory::factory()->count(5)->create();
    }
}