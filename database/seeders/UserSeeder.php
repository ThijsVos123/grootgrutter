<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $manager = User::firstOrCreate(
            ['email' => 'kees@example.com'],
            [
                'name' => 'Kees',
                'email_verified_at' => now(),
                'password' => Hash::make('admin'),
            ]
        );
        $manager->assignRole('Filiaalmanger');

        $medewerker = User::firstOrCreate(
            ['email' => 'piet@example.com'],
            [
                'name' => 'Piet',
                'email_verified_at' => now(),
                'password' => Hash::make('admin'),
            ]
        );
        $medewerker->assignRole('Magazijnmedewerker');
    }
}
