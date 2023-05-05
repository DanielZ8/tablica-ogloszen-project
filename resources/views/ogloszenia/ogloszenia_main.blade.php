@extends('layouts.layout')
@section('content')
    <!-- ADS-MAIN-CONTAINER -->
    <div class="ads-main-container">
        <div class="sidebar-container">
            <h1 class="form-global-title">Wyszukaj ogłoszenia</h1>
            <form action="{{ route('search_ogloszenia') }}" class="form-global" method="GET">
                <input class="form-global-item" type="search" placeholder="Słowo klucz" name="search">
                <select class="form-global-item" name="kategoria">
                    <option value="">Kategoria</option>
                    @if ($kategorie -> count())
                        @foreach ($kategorie as $kategoria)
                            <option value="{{$kategoria->nazwa}}">{{$kategoria->nazwa}}</option>
                        @endforeach
                    @endif
                </select>
                <input class="form-global-item" type="number" placeholder="Stawka od" name="stawka">
                <input class="form-global-item" type="text" placeholder="Lokalizacja" name="lokalizacja">
                <button class="button-global-dark" type="submit">Wyszukaj</button>
            </form>
        </div>
        <main class="cards-content">
            @if ($ogloszenia -> count())
                @foreach ($ogloszenia as $ogloszenie)
                    <a href=" {{ route('ogloszenie', $ogloszenie -> id) }} " class="card">
                        <div class="span-card-img"><img class="card-img" src="{{ asset ($ogloszenie -> user -> photo)}}"/></div>
                        <div class="card-wrapper">
                            <h2 class="card-title">
                                {{$ogloszenie -> user -> nazwa_firmy }} - {{$ogloszenie -> naglowek}}
                            </h2>
                            <p class="card-item bold"><img src="{{ asset('img/'.$ogloszenie->kategoria.'.png') }}"/>{{ $ogloszenie -> kategoria}}</p>
                            <p class="card-item bold"><img src="{{ asset('img/cash.png') }}"/>{{ $ogloszenie -> stawka}}zł/miesiąc</p>
                            <p class="card-item bold"><img src="{{ asset('img/location.png') }}"/>{{ $ogloszenie -> lokalizacja}}</p>
                            <p class="card-item">{!! Str::limit($ogloszenie -> opis, 160, '...') !!}</p>
                        </div>
                    </a>
                @endforeach
                {{$ogloszenia ->links("pagination::semantic-ui")}}  
            @else
                <h1 style="color:#f3f3f3;">Brak ogłoszeń</h1>
            @endif
        </main>
    </div>
@endsection