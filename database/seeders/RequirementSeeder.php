<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Requirement;

class RequirementSeeder extends Seeder
{
    public function run(): void
    {
        Requirement::factory()->count(10)->create();
    }
}