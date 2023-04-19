@extends('layouts.layout')
@section('content')
    <div class="ads-main-container">
        <div id="sidebar">
            <h1>Wyszukaj ogłoszenia</h1>
            <form action="{{ route('search_ogloszenia') }}" class="sidebar-form" method="GET">
                <input class="form-item" type="search" placeholder="Słowo klucz" name="search">
                <select class="form-item" name="kategoria">
                    <option value="">Kategoria</option>
                    <option value="Java">Java</option>
                    <option value="Python">Python</option>
                    <option value="PHP">PHP</option>
                    <option value="CPP">CPP(C++)</option>
                </select>
                <input class="form-item" type="number" placeholder="Stawka od" name="stawka">
                <input class="form-item" type="text" placeholder="Lokalizacja" name="lokalizacja">
                <button type="submit">Wyszukaj</button>
            </form>
        </div>
        <main class="content2">
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
                <h1>Brak ogłoszeń</h1>
            @endif
        </main>
    </div>
@endsection