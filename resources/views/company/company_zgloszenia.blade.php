@extends('company.company_main')
@section('company_item')
    <div class="panel-section">
        <h1 class="panel-section-h1">Zgłoszenia</h1>
        <div class="panel-item">
            <h2 class="panel-item-h2">Nowe zgłoszenia</h2>
            <a href="single-ad.html" class="card">
                <div class="span-card-img"><img class="card-img" src="{{ asset('img/employee2.png') }}"/></div>
                <div class="card-wrapper">
                    <h2 class="card-title">Marian Kowalski</h2>
                    <p class="card-item bold">37 lat</p>
                    <p class="card-item bold"><img src="{{ asset('img/location.png') }}"/>Kraków</p>
                    <p class="card-item">Dzień dobry, jestem zainteresowany państwa ogłoszeniem o pracę</p>
                </div>
            </a>
        </div>
        <div class="panel-item">
            <h2 class="panel-item-h2">Przyjęte zgłoszenia</h2>
            <a href="single-ad.html" class="card ad-accepted">
                <div class="span-card-img"><img class="card-img" src="{{ asset('img/employee3.png') }}"/></div>
                <div class="card-wrapper">
                    <h2 class="card-title">Krystian Malinowski</h2>
                    <p class="card-item bold">29 lat</p>
                    <p class="card-item bold"><img src="{{ asset('img/location.png') }}"/>Warszawa</p>
                    <p class="card-item">Dzień dobry, jestem zainteresowany państwa ogłoszeniem o pracę</p>
                </div>
            </a>
        </div>
        <div class="panel-item">
            <h2 class="panel-item-h2">Odrzucone zgłoszenia</h2>
            <a href="single-ad.html" class="card ad-denied">
                <div class="span-job-offer-img"><img class="card-img" src="{{ asset('img/employee1.png') }}"/></div>
                <div class="card-wrapper">
                    <h2 class="card-title">Łukasz Kubiszyn</h2>
                    <p class="card-item bold">23 lat</p>
                    <p class="card-item bold"><img src="{{ asset('img/location.png') }}"/>Przemyśl</p>
                    <p class="card-item">Dzień dobry, jestem studentem</p>
                </div>
            </a>
        </div>
    </div>
@endsection