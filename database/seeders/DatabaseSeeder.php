<?php

namespace Database\Seeders;

use Product;
use Database\Seeders\RolSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\MedewerkerSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolSeeder::class,
            MedewerkerSeeder::class,
            ProductSeeder::class,

        ]);
    }
}
