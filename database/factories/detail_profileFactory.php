<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\detail_profile>
 */
class detail_profileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'address' => fake()->address,
            'nomor_tlp' => fake()->phoneNumber,
            'ttl' => fake()->date(),
            'foto' => fake()->imageUrl()
        ];
    }
}