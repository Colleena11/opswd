<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CheckClaimsPayment;

class CheckClaimsPaymentSeeder extends Seeder
{
    public function run(): void
    {
        CheckClaimsPayment::factory()->count(5)->create();
    }
}