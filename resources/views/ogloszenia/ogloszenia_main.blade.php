@extends('layouts.layout')
@section('content')
    <div class="ads-main-container">
        <div id="sidebar">
            <h1>Wyszukaj ogłoszenia</h1>
            <form class="sidebar-form">
                <input class="form-item" type="text" placeholder="Search.." name="search">
                <select class="form-item">
                    <option>Java</option>
                    <option>C++</option>
                    <option>HTML</option>
                </select>
                <select class="form-item">
                    <option>Opcja 1</option>
                    <option>Opcja 2</option>
                    <option>Opcja 3</option>
                </select>
                <button type="submit" onclick="alert('Tu będzie wyszukiwanie')">Wyszukaj</button>
            </form>
        </div>
        <main class="content2">
            <a href="{{ url('/ogloszenie') }}" class="job-offer">
                <div class="span-job-offer-img"><img class="job-offer-img" src="img/firma4.png"/></div>
                <div class="job-offer-wrapper">
                    <h2 class="job-offer-title">Firma SemiSoft - Programista Python</h2>
                    <p class="job-offer-category"><img src="img/python.png"/>Python</p>
                    <p class="job-offer-salary"><img src="img/cash.png"/>6000zł/miesiąc</p>
                    <p class="job-offer-location"><img src="img/location.png"/>Kraków</p>
                    <p class="job-offer-description">Poszukujemy doświadczonego programisty Python do pracy nad projektami dla klientów z branży finansowej.</p>
                </div>
            </a>
            <a href="{{ url('/ogloszenie') }}" class="job-offer">
                <div class="span-job-offer-img"><img class="job-offer-img" src="img/firma1.png"/></div>
                <div class="job-offer-wrapper">
                    <h2 class="job-offer-title">GamingSpec - Programista C++</h2>
                    <p class="job-offer-category"><img src="img/cplus.png"/>C++</p>
                    <p class="job-offer-salary"><img src="img/cash.png"/>8200zł/miesiąc</p>
                    <p class="job-offer-location"><img src="img/location.png"/>Online</p>
                    <p class="job-offer-description">Poszukujemy junior programisty C++ do pracy nad projektami z braży gier.</p>
                </div>
            </a>
            <a href="{{ url('/ogloszenie') }}" class="job-offer">
                <div class="span-job-offer-img"><img class="job-offer-img" src="img/firma3.png"/></div>
                <div class="job-offer-wrapper">
                    <h2 class="job-offer-title">WebDev - Programista PHP</h2>
                    <p class="job-offer-category"><img src="img/php.png"/>PHP</p>
                    <p class="job-offer-salary"><img src="img/cash.png"/>7200zł/miesiąc</p>
                    <p class="job-offer-location"><img src="img/location.png"/>Online</p>
                    <p class="job-offer-description">Frima WebDev pilnie poszukuje programisty PHP do pracy nad projektami z zakresu aplikacji webowych.</p>
                </div>
            </a>
            <a href="{{ url('/ogloszenie') }}" class="job-offer">
                <div class="span-job-offer-img"><img class="job-offer-img" src="img/firma4.png"/></div>
                <div class="job-offer-wrapper">
                    <h2 class="job-offer-title">Firma SemiSoft - Programista Python</h2>
                    <p class="job-offer-category"><img src="img/python.png"/>Python</p>
                    <p class="job-offer-salary"><img src="img/cash.png"/>6000zł/miesiąc</p>
                    <p class="job-offer-location"><img src="img/location.png"/>Kraków</p>
                    <p class="job-offer-description">Poszukujemy doświadczonego programisty Python do pracy nad projektami dla klientów z branży finansowej.</p>
                </div>
            </a>
            <a href="{{ url('/ogloszenie') }}" class="job-offer">
                <div class="span-job-offer-img"><img class="job-offer-img" src="img/firma1.png"/></div>
                <div class="job-offer-wrapper">
                    <h2 class="job-offer-title">GamingSpec - Programista C++</h2>
                    <p class="job-offer-category"><img src="img/cplus.png"/>C++</p>
                    <p class="job-offer-salary"><img src="img/cash.png"/>8200zł/miesiąc</p>
                    <p class="job-offer-location"><img src="img/location.png"/>Online</p>
                    <p class="job-offer-description">Poszukujemy junior programisty C++ do pracy nad projektami z braży gier.</p>
                </div>
            </a>
            <a href="{{ url('/ogloszenie') }}" class="job-offer">
                <div class="span-job-offer-img"><img class="job-offer-img" src="img/firma3.png"/></div>
                <div class="job-offer-wrapper">
                    <h2 class="job-offer-title">WebDev - Programista PHP</h2>
                    <p class="job-offer-category"><img src="img/php.png"/>PHP</p>
                    <p class="job-offer-salary"><img src="img/cash.png"/>7200zł/miesiąc</p>
                    <p class="job-offer-location"><img src="img/location.png"/>Online</p>
                    <p class="job-offer-description">Frima WebDev pilnie poszukuje programisty PHP do pracy nad projektami z zakresu aplikacji webowych.</p>
                </div>
            </a>  
        </main>
    </div>
@endsection