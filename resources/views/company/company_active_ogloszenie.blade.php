@extends('company.company_main')
@section('company_item')
    <div class="panel-section">
        <h1 class="panel-section-h1">Aktywne ogłoszenia</h1>
        <div class="panel-item">
            @if ($ogloszenia -> count())
                @foreach ($ogloszenia as $ogloszenie)
                    <a href=" {{ route('ogloszenie', $ogloszenie -> id) }}  " class="card">
                        <div class="span-card-img"><img class="card-img" src="{{ $ogloszenie -> user -> photo}}"/></div>
                        <div class="card-wrapper">
                            <h2 class="card-title">
                                {{$ogloszenie -> user -> nazwa_firmy }} - {{$ogloszenie -> naglowek}}
                            </h2>
                            <p class="card-item bold"><img src="{{ asset('img/'.$ogloszenie->kategoria.'.png') }}"/>{{ $ogloszenie -> kategoria}}</p>
                            <p class="card-item bold"><img src="{{ asset('img/cash.png') }}"/>{{ $ogloszenie -> stawka}}zł/miesiąc</p>
                            <p class="card-item bold"><img src="{{ asset('img/location.png') }}"/>{{ $ogloszenie -> lokalizacja}}</p>
                            <p class="card-item">{{ $ogloszenie -> opis}}</p>
                        </div>
                    </a>
                @endforeach
                {{$ogloszenia ->links("pagination::semantic-ui")}}  
            @else
                <h1 class="panel-section-h1">Brak aktywnych ogłoszeń</h1>
            @endif
        </div>
    </div>
@endsection
