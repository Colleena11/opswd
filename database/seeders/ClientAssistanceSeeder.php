<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClientAssistance;

class ClientAssistanceSeeder extends Seeder
{
    public function run(): void
    {
        ClientAssistance::factory()->count(10)->create();
    }
}