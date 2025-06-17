<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;

class MunicipalitySeeder extends Seeder
{
    public function run(): void
    {
        $municipalities = [
            ['name' => 'Municipality A'],
            ['name' => 'Municipality B'],
            ['name' => 'Municipality C'],
            ['name' => 'Municipality D'],
            ['name' => 'Municipality E'],
        ];

        foreach ($municipalities as $municipality) {
            Municipality::create($municipality);
        }
    }
}