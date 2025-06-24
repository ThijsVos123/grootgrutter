<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Medewerker;

class MedewerkerSeeder extends Seeder
{
    public function run(): void
    {
        Medewerker::factory()->create([
            'rol_id' => 1,
        ]);

        Medewerker::factory()->count(4)->create([
            'rol_id' => 2,
        ]);
    }
}
