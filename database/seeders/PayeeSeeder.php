<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payee;

class PayeeSeeder extends Seeder
{
    public function run(): void
    {
        Payee::factory()->count(10)->create();
    }
}