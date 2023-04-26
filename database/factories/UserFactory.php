<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $firmy = [
            'Consult Red', 'Commerzbank AG', 
            'DACHSER GmbH & Co. KG ', 'NetArch', 'IBA POLAND sp. z o.o.', 
            'Salve Medica Sp. z o.o. Sp. k.', 'Opera Software International AS ', 
            'SKILLS MATTER', 'VSTORM sp. z o.o.', 'Robert Bosch Sp. z o.o.', 
            'AstraZeneca Pharma', 'Cyclad', 'Diehl Controls Polska', 'Ework Group',
            'G-CORE INNOVATIONS SOCIÉTÉ A RESPONSABILITÉ LIMITÉE ', 'XPERI Poland', 'ZF Group', 
            'Cyfrowy Polsat S.A.', 'Centrum Rozwoju Szkół Wyższych TEB Akademia', 'Fiserv Polska S.A. ', 
            'BCF Software Sp. z o.o.', 'IT CONNECT Sp. z o.o. Sp.k.', 
            'Prime Engineering Poland', 'Leroy Merlin Polska Sp. z o.o.', 'e-Xim IT S.A.', 
            'MSD Poland', 'apreel sp. z o.o.', 'Samsung R&D Institute Poland', 'Signal Group sp. z o.o. sp.k.', 'KOTRAK S.A.', 
            'NOVACURA POLAND sp. z o.o.', 'Nokia', 'TRUMPF Huettinger Sp. z o.o.', 'Dolfi 1920 Sp. z. o.o.', 
            'Sieć Badawcza Łukasiewicz – Instytut Lotnictwa', '6CONNEX INTERNATIONAL', 'ITFS sp. z o.o.', 
            'Antal IT Sales/ Tech', 'Cloud Services Sp. z o.o.'];
        return [
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'photo' => fake()->imageUrl(400, 400),
            'rola' => 'firma',
            'imie' => fake() -> Firstname(),
            'nazwisko' => fake() ->lastName(),
            'wiek' => fake() -> numberBetween(22, 60),
            'opis' => fake() -> sentence(),
            'nazwa_firmy' => $firmy[fake()->numberBetween(0,38)], 
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
