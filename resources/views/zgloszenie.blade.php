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
                <img src="{{ asset ($zgloszenie -> nadawca -> photo)}}"/>
                <h1>{{$zgloszenie -> nadawca -> imie }} - {{$zgloszenie -> nadawca -> nazwisko}}</h1>
            </div>
            <div class="panel-card-section">
                <h3 class="panel-card-section-title">Informacje</h3>
                <p class="panel-card-section-p bold">Wiek: {{$zgloszenie -> nadawca -> wiek}}</p>
                <p class="panel-card-section-p bold">Miejsce zamieszkania: MIASTO</p>
            </div>
            <div class="panel-card-section">
                <h3 class="panel-card-section-title">Opis</h3>
                <p class="panel-card-section-p">
                {{ $zgloszenie -> nadawca -> opis}}
                </p>
            </div>
            <div class="panel-card-section">
                <h3 class="panel-card-section-title">Wiadomość</h3>
                <p class="panel-card-section-p">
                {{ $zgloszenie -> wiadomosc}}
                </p>
            </div>
            @if (!$zgloszenie -> wiadomosc_zwrotna == null)
            <div class="panel-card-section">
                <h3 class="panel-card-section-title">Wiadomość zwrotna</h3>
                <p class="panel-card-section-p">
                {{ $zgloszenie -> wiadomosc_zwrotna}}
                </p>
            </div>
            @endif
            <div class="panel-card-section">
            <h2 class="panel-item-h2">Powiązane ogłoszenie</h2>
                <a href="{{ route('ogloszenie', $zgloszenie -> ogloszenie -> id) }} " class="card">
                    <div class="span-card-img"><img class="card-img" src="{{ asset ($zgloszenie-> ogloszenie -> user -> photo)}}"/></div>
                    <div class="card-wrapper">
                        <h2 class="card-title">{{ $zgloszenie -> ogloszenie -> user -> nazwa_firmy}} - {{ $zgloszenie -> ogloszenie -> naglowek}}</h2>
                        <p class="card-item bold"><img src="{{ asset('img/'.$zgloszenie->ogloszenie->kategoria.'.png') }}"/>{{ $zgloszenie ->ogloszenie -> kategoria}}</p>
                        <p class="card-item bold"><img src="{{ asset('img/cash.png') }}"/>{{ $zgloszenie ->ogloszenie -> stawka}}zł/miesiąc</p>
                        <p class="card-item bold"><img src="{{ asset('img/location.png') }}"/>{{ $zgloszenie ->ogloszenie -> lokalizacja}}</p>
                        <p class="card-item">{{ $zgloszenie ->ogloszenie -> opis}}</p>
                    </div>
                </a>
            </div>
            @if ($zgloszenie -> wiadomosc_zwrotna == null)
            <div class="panel-card-section dark">
                <h3 class="panel-card-section-title title-white">Wyślij zgłoszenie</h3>
                <form class="card-inside-form" action="{{ route('zgloszenie', $zgloszenie -> id) }}" method="post">
                    @csrf
                    <input name="zgloszenie_id" type="hidden" value="{{$zgloszenie -> id}}">
                    <textarea placeholder="Napisz wiadmość do pracodawcy..." name="wiadomosc_zwrotna"></textarea>
                    <button class="button-global-bright" type="submit" name="status" value="zaakceptowane">Zaakceptuj</button>
                    <button class="button-global-bright" type="submit" name="status" value="odrzucone">Odrzuć</button>
                </form> 
            </div>
            @endif
        </div>
        <main>
    </div>
@endsection


<!-- {{ $zgloszenie -> nadawca -> imie}}
{{ $zgloszenie -> odbiorca -> imie}}
{{ $zgloszenie -> ogloszenie -> naglowek}} -->