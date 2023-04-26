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
        <main class="content3">
            <div class="ad-offer">
                <div class="ad-offer-item1">
                    <img class="ad-offer-img" src="{{ $ogloszenie -> user -> photo}}"/>
                    <h2 class="ad-offer-title">{{$ogloszenie -> user -> nazwa_firmy }} - {{$ogloszenie -> naglowek}}</h2>
                </div>
                <div class="ad-offer-item2">
                    <p class="ad-offer-category"><img src="{{ asset ('img/'.$ogloszenie -> kategoria  .'.png') }}"/>{{ $ogloszenie -> kategoria}}</p>
                    <p class="ad-offer-salary"><img src="{{asset ('img/cash.png')}}"/>{{ $ogloszenie -> stawka}}zł/miesiąc</p>
                    <p class="ad-offer-location"><img src="{{asset ('img/location.png')}}"/>{{ $ogloszenie -> lokalizacja}}</p>
                </div>
                <div class="ad-offer-item4">
                    <h3>Wymagania</h3>
                    <p class="ad-offer-requirements">- {{$ogloszenie -> wymagania}}</p>
                    <p class="ad-offer-requirements">- {{$ogloszenie -> wymagania}}</p>
                    <p class="ad-offer-requirements">- {{$ogloszenie -> wymagania}}</p>
                </div>
                <div class="ad-offer-item3">
                    <h3>Opis</h3>
                    <p class="ad-offer-description">
                    {{ $ogloszenie -> opis}}
                    </p>
                </div>
                @guest
                <div class="ad-offer-item5">
                    <h3>Aby wysłać zgłoszenie zaloguj lub zarejestruj się!</h3> 
                </div>
                @endguest
                @auth
                @can('pracownik')
                <div class="ad-offer-item5">
                    <h3>Wyślij zgłoszenie</h3>
                    <form class="ad-offer-form">
                        <textarea placeholder="Napisz wiadmość do pracodawcy..."></textarea>
                        <button type="submit" onclick="alert('Tu będzie funckja aplikowania')">Aplikuj</button>
                    </form> 
                </div>
                @endcan
                @endauth
            </div>    
        </main>
    </div>
@endsection