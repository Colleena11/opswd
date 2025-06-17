<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
         MunicipalitySeeder::class,
        ClientSeeder::class,
        PayeeSeeder::class,
        ClientAssistanceSeeder::class,
        AssistanceTypeSeeder::class,
        AssistanceCategorySeeder::class,
        RequirementSeeder::class,
        ClaimSeeder::class,
        CheckClaimsPaymentSeeder::class,
        CashClaimsPaymentSeeder::class,
        CashDisbursementSeeder::class,
        LoginSeeder::class,
        ]);
    }
}
