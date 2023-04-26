@extends('company.company_main')
@section('company_item')
    <div class="company-active-advert">
        <h1>Aktywne ogłoszenia</h1>
        <div class="company-info-item">
            @if ($ogloszenia -> count())
                @foreach ($ogloszenia as $ogloszenie)
                    <a href=" {{ route('ogloszenie', $ogloszenie -> id) }}  " class="job-offer">
                        <div class="span-job-offer-img"><img class="job-offer-img" src="{{ $ogloszenie -> user -> photo}}"/></div>
                        <div class="job-offer-wrapper">
                            <h2 class="job-offer-title">
                                {{$ogloszenie -> user -> nazwa_firmy }} - {{$ogloszenie -> naglowek}}
                            </h2>
                            <p class="job-offer-category"><img src="{{ asset('img/'.$ogloszenie->kategoria.'.png') }}"/>{{ $ogloszenie -> kategoria}}</p>
                            <p class="job-offer-salary"><img src="{{ asset('img/cash.png') }}"/>{{ $ogloszenie -> stawka}}zł/miesiąc</p>
                            <p class="job-offer-location"><img src="{{ asset('img/location.png') }}"/>{{ $ogloszenie -> lokalizacja}}</p>
                            <p class="job-offer-description">{{ $ogloszenie -> opis}}</p>
                        </div>
                    </a>
                @endforeach
                {{$ogloszenia ->links("pagination::semantic-ui")}}  
            @else
                <h2>Brak aktywnych ogłoszeń</h2>
            @endif
        </div>
    </div>
@endsection
