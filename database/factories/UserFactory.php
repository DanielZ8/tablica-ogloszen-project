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

            static $opis =[
                'Firma specjalizująca się w tworzeniu i wdrażaniu kompleksowych systemów informatycznych dedykowanych dla firm z sektora telekomunikacyjnego poszukuje do pracy na stanowisku: Młodszy programista .NET (Junior .NET Developer).',
                'We are a global leader of iLottery solutions and services to the national and state-regulated lotteries.
                We empower our customers to create the most successful iLottery programs with a complete solution that includes industry-leading omnichannel platforms, an innovative portfolio of the best-performing interactive games, and a full suite of business and technology services.  ',
                'Jesteśmy bankiem cyfrowym. Nasi specjaliści IT tworzą rozwiązania, z których korzystają miliony użytkowników. Projektują i rozwijają nowoczesne aplikacje dla każdego z obszarów naszej działalności, stanowiąc technologiczne DNA banku.',
                'Jesteśmy polską firmą programistyczną specjalizującą się w tworzeniu aplikacji webowych i mobilnych. Tworzymy rozwiązania dla klientów z całego świata. Na rynku działamy od 2012 roku. Dołącz już dziś do najlepszego Software Houseu w Polsce!'
            ]; 

            static $path = 'img/logo (';
        return [
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'photo' => $path.fake()->numberBetween(1,18).').svg',
            'rola' => 'firma',
            'imie' => fake() -> Firstname(),
            'nazwisko' => fake() ->lastName(),
            'wiek' => fake() -> numberBetween(22, 60),
            'opis' => $opis[fake()->numberBetween(0,3)],
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
