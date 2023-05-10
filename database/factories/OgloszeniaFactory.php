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
        static $kat = ['Python', 'Java', 'CPP', 'PHP', 'JS', 'HTML', 'CSS'];
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
        static $opis = ['Oferujemy pracę w najbardziej popularnym Polskim markecie z modułami do PrestaShop - x13.pl.

        Przez 12 lat działalności stworzyliśmy kilkaset rozwiązań z czego znaczną część dostępna jest do kupienia w naszym sklepie.
        Stworzyliśmy kilka bestsellerowych modułów oraz integracji, takich jak integrację PrestaShop z Allegro, importer XML/CSV czy moduł exportu pod Google Marchant Center.
        Dodatkowo tworzymy sklepy oraz rozwiązujemy problemy klientów korzystających z tego systemu.
        
        Z naszych najpopularniejszych rozwiązań codziennie korzystają tysiące sklepów zbudowanych na PrestaShop - masz szanse uczestnictwa w tworzeniu kolejnych takich modułów i integracji.
        
        Skupiamy się na dostarczeniu najlepszej jakości rozwiązań, które realnie ułatwiają pracę sprzedawcom mającym sklepy na systemie PrestaShop.',
        
        'Jeśli chciałbyś rozwijać swoje kompetencje zgodnie z nowoczesnymi trendami w firmie o ugruntowanej pozycji na rynku i uczestniczyć w ciekawych projektach informatycznych w branży telekomunikacyjnej realizowanych w kraju i za granicą, zapraszamy do naszego zespołu. Aktualnie poszukujemy osób do pracy na stanowisku:Młodszy Specjalista ds. wdrożeń systemów IT/OSS
        Jeśli chciałbyś pracować w firmie, która doceni Twoje umiejętności, umożliwi skupienie się na jednym systemie z którą będziesz mógł wspólnie przygotować rozwiązanie które trafi do setek sklepów a nie jednego klienta jak w typowej agencji koniecznie odezwij się do nas!',

        'We are looking for a Computer Vision Scientist to join our team in Poland. 
        Our customer is a global e-commerce leader based in California, one of the most popular and successful websites on the Internet. It provides inspiring services by connecting millions of sellers and buyers in more than 190 markets around the world. ',


        'We are looking for experienced Python Engineers to join our Exness Technology team. The role will be focused on the implementation of complex business logic inside the web stack in the area of financial markets. Working side-by-side with Product Managers, connecting ideas to the customers in the most optimal way. We are looking for a person who will extend, optimize, and support the production of the existing software solutions, ensuring we capture as much value from the market as possible. You will research and innovate new ideas in highly reliable, low-latency, and high-load computing in financial markets. ',

        'We are looking for an experienced Frontend Developer with Javascript and SharePoint Platform experience to empower one of our client’s projects. In this role, you will be responsible for developing and maintaining web applications using SharePoint and various JavaScript frameworks. You will be working on both client-side and server-side code and must be able to communicate effectively with both technical and non-technical team members.',
    ];

        static $wymagania = [
            '- Software development.
            - Highload and highly available web stack services to support various customer journeys (Identity Management, Billing Management).
            - Trading interfaces (trading terminals) and APIs.
            - Supporting and back-office interfaces (Personal Area, Payment Solutions, Back Office and Core Banking).',

            '- Integrowanie systemów informatycznych dostarczanych przez Suntech z systemami zewnętrznymi.
            - Uczestnictwo we wdrożeniu systemów BSS/OSS u klientów polskich i zagranicznych
            - Opracowywanie raportów, procedur i skryptów migracyjnych w środowisku Microsoft (MS SQL, SSRS, SSIS)
            - Analizowanie wymagań klientów i opracowywanie koncepcji technicznych rozwiązań informatycznych',
            
            '- min. 2 lata doświadczenia na podobnym stanowisku
            - bardzo dobra znajomość Pythona, SQL, GIT, Linux (terminal), Tableau
            - znajomość technologii REST API
            - umiejętność analitycznego myślenia, wnioskowania w oparciu o dane i ilościowe wyniki badań',

        ];
        
        return [
            'naglowek' => $naglowek[fake()->numberBetween(0,74)],
            'kategoria' => $kat[fake()->numberBetween(0,6)],
            'stawka' => $stawka[fake()->numberBetween(0,13)],
            'lokalizacja' => $miasta[fake()->numberBetween(0,17)],
            'wymagania' => $wymagania[fake()->numberBetween(0,2)],
            'opis' => $opis[fake()->numberBetween(0,4)],
            'status' => 'aktualne',
            'user_id' => $number++,
        ];
    }
}
