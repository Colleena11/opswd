<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CashClaimsPayment;

class CashClaimsPaymentSeeder extends Seeder
{
    public function run(): void
    {
        CashClaimsPayment::factory()->count(5)->create();
    }
}