@extends('layouts.layout')
@section('content')
    <div class="ads-main-container">
        <div class="sidebar-container">
            <h1 class="form-global-title">Wyszukaj ogłoszenia</h1>
            <form action="{{ route('search_ogloszenia') }}" class="form-global" method="GET">
                <input class="form-global-item" type="search" placeholder="Słowo klucz" name="search">
                <select class="form-global-item" name="kategoria">
                    <option value="">Kategoria</option>
                    <option value="Java">Java</option>
                    <option value="Python">Python</option>
                    <option value="PHP">PHP</option>
                    <option value="CPP">CPP(C++)</option>
                </select>
                <input class="form-global-item" type="number" placeholder="Stawka od" name="stawka">
                <input class="form-global-item" type="text" placeholder="Lokalizacja" name="lokalizacja">
                <button class="button-global-dark" type="submit">Wyszukaj</button>
            </form>
        </div>
        <main class="panel-card-container">
            <div class="panel-card-wrapper">
                <div class="panel-card-big-header">
                    <img src="{{ asset ($ogloszenie -> user -> photo)}}"/>
                    <h1>{{$ogloszenie -> user -> nazwa_firmy }} - {{$ogloszenie -> naglowek}}</h1>
                </div>
                <div class="panel-card-items">
                    <p><img src="{{ asset ('img/'.$ogloszenie -> kategoria  .'.png') }}"/>{{ $ogloszenie -> kategoria}}</p>
                    <p><img src="{{asset ('img/cash.png')}}"/>{{ $ogloszenie -> stawka}}zł/miesiąc</p>
                    <p><img src="{{asset ('img/location.png')}}"/>{{ $ogloszenie -> lokalizacja}}</p>
                </div>
                <div class="panel-card-section">
                    <h3 class="panel-card-section-title">Wymagania</h3>
                    <p class="panel-card-section-p bold">- {{$ogloszenie -> wymagania}}</p>
                    <p class="panel-card-section-p bold">- {{$ogloszenie -> wymagania}}</p>
                    <p class="panel-card-section-p bold">- {{$ogloszenie -> wymagania}}</p>
                </div>
                <div class="panel-card-section">
                    <h3 class="panel-card-section-title">Opis</h3>
                    <p class="panel-card-section-p">
                    {{ $ogloszenie -> opis}}
                    </p>
                </div>
                @guest
                <div class="panel-card-section dark">
                    <h3 class="panel-card-section-title title-white">Aby wysłać zgłoszenie zaloguj lub zarejestruj się!</h3> 
                </div>
                @endguest
                @auth
                @can('pracownik')
                <div class="panel-card-section dark">
                    <h3 class="panel-card-section-title title-white">Wyślij zgłoszenie</h3>
                    <form class="card-inside-form" action="{{ route('ogloszenie', $ogloszenie -> id) }}" method="post">
                        @csrf
                        <input name="ogloszenie_id" type="hidden" value="{{$ogloszenie -> id}}">
                        <input name="odbiorca_id" type="hidden" value="{{$ogloszenie -> user-> id}}">
                        <textarea placeholder="Napisz wiadmość do pracodawcy..." name="wiadomosc"></textarea>
                        <button class="button-global-bright" type="submit">Aplikuj</button>
                    </form> 
                </div>
                @endcan
                @endauth
            </div>    
        </main>
    </div>
@endsection