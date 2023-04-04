@extends('company.company_main')
@section('company_item')
    <div class="company-active-advert">
        <h1>Aktywne ogłoszenia</h1>
        <div class="company-info-item">
            <a href="single-ad.html" class="job-offer">
                <div class="span-job-offer-img">
                    <img class="job-offer-img" src="{{ asset('img/firma4.png') }}"/>
                </div>
                <div class="job-offer-wrapper">
                    <h2 class="job-offer-title">Firma SemiSoft - Programista Python</h2>
                    <p class="job-offer-category"><img src="{{ asset('img/python.png') }}"/>Python</p>
                    <p class="job-offer-salary"><img src="{{ asset('img/cash.png') }}"/>6000zł/miesiąc</p>
                    <p class="job-offer-location"><img src="{{ asset('img/location.png') }}"/>Kraków</p>
                    <p class="job-offer-description">Poszukujemy doświadczonego programisty Python do pracy nad projektami dla klientów z branży finansowej.</p>
                </div>
            </a>
        </div>
    </div>
@endsection