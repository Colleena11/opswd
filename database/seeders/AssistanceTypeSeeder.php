<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AssistanceType;

class AssistanceTypeSeeder extends Seeder
{
    public function run(): void
    {
        AssistanceType::factory()->count(5)->create();
    }
}