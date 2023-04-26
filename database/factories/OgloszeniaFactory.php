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
        static $kat = ['Python', 'Java', 'CPP', 'PHP'];
        static $miasta = [
            'Warszawa', 'Kraków', 'Wrocław', 
            'Poznań', 'Białystok', 'Bielsko-Biała', 
            'Bydgoszcz', 'Częstochowa', 'Kielce', 
            'Rzeszów', 'Łódź', 'Toruń', 'Zielona Góra',
            'Lublin', 'Opole', 'Gdańsk', 'Szczecin', 'ONLINE'];
        static $naglowek = [
            'Engineering Lead', '.NET Developer with Oracle DB', 
            'Software Engineer (m/w/d) Web- and App-Development', 'Mid Web Developer', 
            'Software Engineer (m/w/d) Transport Management System Road', 'Digital Analyst', 
            'Senior React Developer', 'Manager ds. IT', 'MacOS Developer (C++)', 
            'C++ Developer (PC Browser Engine Team)', 'Android Developer', 'Azure Cloud Expert', 
            'Senior Embedded C++ Engineer for Computer Vision (Robotics)', 
            'Associate Director, Specialist Programmer – Clinical Data Insight', 
            'Specialist Programmer, Clinical Data and Insights', 'Software Quality Assurance Engineer', 
            'Test & Validation Engineer', 'ServiceNow Front-end/UI Developer', 
            'C# Azure Developer', 'Fullstack Java Developer', 'Senior UX Designer / Software Developer', 
            'Lead Full-stack Engineer - JAMstack/Website', 'Senior Android Software Engineer', 
            'Inżynier oprogramowania (język C/C++)', 'Programista (systemy wbudowane)', 
            'Engineering Lead', '.NET Developer with Oracle DB', 'Software Engineer (m/w/d) Web- and App-Development', 
            'Mid Web Developer', 'Software Engineer (m/w/d) Transport Management System Road', 'Digital Analyst', 
            'Senior React Developer', 'Manager ds. IT', 'MacOS Developer (C++)', 
            'C++ Developer (PC Browser Engine Team)', 'Android Developer', 'Azure Cloud Expert', 
            'Senior Embedded C++ Engineer for Computer Vision (Robotics)', 
            'Associate Director, Specialist Programmer – Clinical Data Insight', 
            'Specialist Programmer, Clinical Data and Insights', 'Software Quality Assurance Engineer', 
            'Test & Validation Engineer', 'ServiceNow Front-end/UI Developer', 'C# Azure Developer', 
            'Fullstack Java Developer', 'Senior UX Designer / Software Developer', 
            'Lead Full-stack Engineer - JAMstack/Website', 'Senior Android Software Engineer', 
            'Inżynier oprogramowania (język C/C++)', 'Programista (systemy wbudowane)', 
            'Programista PHP / PHP Developer', 'Inżynier Aplikacji POS (K/M)', 'Embedded Cyber Security Engineer', 
            'Analityk Biznesowo-Systemowy', 'Programista C/C++ systemu Linux', '.NET Developer', 
            'Senior React Frontend Developer', 'Service Desk Consultant', 
            'DRAM Engineer with C – Automotive', 'GPU Engineer – Automotive', 'WordPress Technical Specialist', 
            'C++ Developer', 'Fullstack Developer (Java+Angular)', 
            'Internship - Natural Language Processing Intern in Artificial Intelligence Team', 
            'Software Project Manager', 'Programista Fullstack', 'Senior Frontend Developer', 
            'Working Student - Software Engineer C/C++', 
            'Płatny Staż w Jednym z Zespołów Programistów RnD, Digitalizacji lub IT (k/m)', 
            'SalesForce Developer', 'Embedded Software Developer', 'Technical Support Specialist', 
            'C++ Developer', 'Power Software Engineer', 'Front-end Developer'];
        static $stawka = [5000, 8500, 9000, 1000, 10500, 7000, 7250, 15000, 30000, 27000, 5500, 6600, 8300, 2600];
        static $number = 1;
        
        return [
            'naglowek' => $naglowek[fake()->numberBetween(0,74)],
            'kategoria' => $kat[fake()->numberBetween(0,3)],
            'stawka' => $stawka[fake()->numberBetween(0,13)],
            'lokalizacja' => $miasta[fake()->numberBetween(0,17)],
            'wymagania' => 'wymagania',
            'opis' => fake()->catchPhrase() ,
            'status' => 'aktualne',
            'user_id' => $number++,
        ];
    }
}
