<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ogloszenia>
 */
class OgloszeniaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition(): array
    {
        static $number = 1;
        return [
            'naglowek' => fake()->jobTitle(),
            'kategoria' => 'Python',
            'stawka' => fake()->numberBetween(6000, 15000),
            'lokalizacja' => fake()->city(),
            'wymagania' => 'wymagania',
            'opis' => fake()->catchPhrase() ,
            'status' => 'aktualne',
            'user_id' => $number++,
        ];
    }
}
