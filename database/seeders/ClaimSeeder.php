<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Claim;

class ClaimSeeder extends Seeder
{
    public function run(): void
    {
        Claim::factory()->count(10)->create();
    }
}