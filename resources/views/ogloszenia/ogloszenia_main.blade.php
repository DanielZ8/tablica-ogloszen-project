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
            @if ($ogloszenia -> count())
                @foreach ($ogloszenia as $ogloszenie)
                    <a href="{{ url('/ogloszenie') }}" class="job-offer">
                        <div class="span-job-offer-img"><img class="job-offer-img" src="{{ $ogloszenie -> user -> photo}}"/></div>
                        <div class="job-offer-wrapper">
                            <h2 class="job-offer-title">
                                {{$ogloszenie -> user -> nazwa_firmy }} - {{$ogloszenie -> naglowek}}
                            </h2>
                            <p class="job-offer-category"><img src="img/{{ $ogloszenie -> kategoria}}.png"/>{{ $ogloszenie -> kategoria}}</p>
                            <p class="job-offer-salary"><img src="img/cash.png"/>{{ $ogloszenie -> stawka}}zł/miesiąc</p>
                            <p class="job-offer-location"><img src="img/location.png"/>{{ $ogloszenie -> lokalizacja}}</p>
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