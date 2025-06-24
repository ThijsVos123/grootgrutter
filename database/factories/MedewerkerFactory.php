<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medewerker>
 */
class MedewerkerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'inlognaam' => $this->faker->name(),
            'wachtwoord' => $this->faker->password(),
            'rol_id' => '1',
        ];
    }
}
