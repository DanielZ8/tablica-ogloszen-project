@extends('company.company_main')
@section('company_item')
    <div class="company-application">
        <h1>Zgłoszenia</h1>
        <div class="company-info-item">
            <h2>Nowe zgłoszenia</h2>
            <a href="single-ad.html" class="job-offer">
                <div class="span-job-offer-img"><img class="job-offer-img" src="{{ asset('img/employee2.png') }}"/></div>
                <div class="job-offer-wrapper">
                    <h2 class="job-offer-title">Marian Kowalski</h2>
                    <p class="job-offer-category">37 lat</p>
                    <p class="job-offer-location"><img src="{{ asset('img/location.png') }}"/>Kraków</p>
                    <p class="job-offer-description">Dzień dobry, jestem zainteresowany państwa ogłoszeniem o pracę</p>
                </div>
            </a>
        </div>
        <div class="company-info-item">
            <h2>Przyjęte zgłoszenia</h2>
            <a href="single-ad.html" class="job-offer ad-accepted">
                <div class="span-job-offer-img"><img class="job-offer-img" src="{{ asset('img/employee3.png') }}"/></div>
                <div class="job-offer-wrapper">
                    <h2 class="job-offer-title">Krystian Malinowski</h2>
                    <p class="job-offer-category">29 lat</p>
                    <p class="job-offer-location"><img src="{{ asset('img/location.png') }}"/>Warszawa</p>
                    <p class="job-offer-description">Dzień dobry, jestem zainteresowany państwa ogłoszeniem o pracę</p>
                </div>
            </a>
        </div>
        <div class="company-info-item">
            <h2>Odrzucone zgłoszenia</h2>
            <a href="single-ad.html" class="job-offer ad-denied">
                <div class="span-job-offer-img"><img class="job-offer-img" src="{{ asset('img/employee1.png') }}"/></div>
                <div class="job-offer-wrapper">
                    <h2 class="job-offer-title">Łukasz Kubiszyn</h2>
                    <p class="job-offer-category">23 lat</p>
                    <p class="job-offer-location"><img src="{{ asset('img/location.png') }}"/>Przemyśl</p>
                    <p class="job-offer-description">Dzień dobry, jestem studentem</p>
                </div>
            </a>
        </div>
    </div>
@endsection