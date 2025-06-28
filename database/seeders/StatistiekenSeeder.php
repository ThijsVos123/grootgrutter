<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatistiekenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('verkoopstatistieken')->insert([
            [
                'artikelgroep' => 'Aardappels, groente en fruit',
                'jaar' => 2025,
                'maand' => 4,
                'totaal_aantal' => 120,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'artikelgroep' => 'Aardappels, groente en fruit',
                'jaar' => 2025,
                'maand' => 5,
                'totaal_aantal' => 95,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'artikelgroep' => 'Zuivel',
                'jaar' => 2025,
                'maand' => 5,
                'totaal_aantal' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
