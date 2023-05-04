<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kategorie>
 */
class KategorieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $kat = ['Python', 'Java', 'CPP', 'PHP'];
        static $number = 0;
        return [
            'nazwa' => $kat[$number++],
        ];
    }
}
