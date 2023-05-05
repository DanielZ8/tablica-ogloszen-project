@extends('layouts.layout')
@section('content')
    <div class="zgloszenie-main-container">
        @if (auth()-> user()->id == $zgloszenie -> nadawca_id OR auth()-> user()->id == $zgloszenie -> odbiorca_id )
        <main class="panel-card-container">
        <div class="panel-card-wrapper">
            <div class="panel-card-big-header">
                <img src="{{ asset ($zgloszenie -> nadawca -> photo)}}"/>
                <h1>{{$zgloszenie -> nadawca -> imie }} {{$zgloszenie -> nadawca -> nazwisko}}
                    @if($zgloszenie -> status == "oczekujace")
                    <span class ="oczekujace">(OCZEKUJĄCE)</span>
                    @elseif ($zgloszenie -> status == "zaakceptowane")
                    <span class ="zaakceptowane">(ZAAKCEPTOWANE)</span>
                    @elseif ($zgloszenie -> status == "odrzucone")
                    <span class ="odrzucone">(ODRZUCONE)</span>
                    @endif
                    
                </h1>
            </div>
            <div class="panel-card-section">
                <h3 class="panel-card-section-title">Informacje</h3>
                <p class="panel-card-section-p bold">Wiek: {{$zgloszenie -> nadawca -> wiek}}</p>
                <p class="panel-card-section-p bold">Miejsce zamieszkania: MIASTO</p>
            </div>
            <div class="panel-card-section">
                <h3 class="panel-card-section-title">Opis</h3>
                <p class="panel-card-section-p">{{ $zgloszenie -> nadawca -> opis}}</p>
            </div>
            <div class="panel-card-section">
            <h2 class="panel-item-h2">Aplikuje na ogłoszenie</h2>
                <a href="{{ route('ogloszenie', $zgloszenie -> ogloszenie -> id) }} " class="card">
                    <div class="span-card-img"><img class="card-img" src="{{ asset ($zgloszenie-> ogloszenie -> user -> photo)}}"/></div>
                    <div class="card-wrapper">
                        <h2 class="card-title">{{ $zgloszenie -> ogloszenie -> user -> nazwa_firmy}} - {{ $zgloszenie -> ogloszenie -> naglowek}}</h2>
                        <p class="card-item bold"><img src="{{ asset('img/'.$zgloszenie->ogloszenie->kategoria.'.png') }}"/>{{ $zgloszenie ->ogloszenie -> kategoria}}</p>
                        <p class="card-item bold"><img src="{{ asset('img/cash.png') }}"/>{{ $zgloszenie ->ogloszenie -> stawka}}zł/miesiąc</p>
                        <p class="card-item bold"><img src="{{ asset('img/location.png') }}"/>{{ $zgloszenie ->ogloszenie -> lokalizacja}}</p>
                        <p class="card-item">{!! Str::limit($zgloszenie->ogloszenie -> opis, 160, '...') !!}</p>
                    </div>
                </a>
            </div>
            @if($zgloszenie -> status == "oczekujace")
            <div class="panel-card-section ad-waiting-static">
            @else
            <div class="panel-card-section message-darker">
            @endif
                <h3 class="panel-card-section-title">Wiadomość do pracodawcy</h3>
                <p class="panel-card-section-p bold">{{$zgloszenie -> nadawca -> imie}}{{$zgloszenie -> nadawca -> nazwisko}}:</p>
                <p class="panel-card-section-p">{{$zgloszenie -> wiadomosc}}</p>
            </div>
            @if (!$zgloszenie -> wiadomosc_zwrotna == null)
            @if($zgloszenie -> status == "odrzucone")
            <div class="panel-card-section ad-denied-static">
            @else
            <div class="panel-card-section ad-accepted-static">
            @endif
                <h3 class="panel-card-section-title">Wiadomość zwrotna</h3>
                <p class="panel-card-section-p bold">{{$zgloszenie -> odbiorca -> imie}} {{$zgloszenie -> odbiorca -> nazwisko}} (Przedstawiciel firmy):</p>
                <p class="panel-card-section-p">{{ $zgloszenie -> wiadomosc_zwrotna}}</p>
            </div>
            @endif
            @can('firma')
            @if ($zgloszenie -> wiadomosc_zwrotna == null)
            @error('wiadomosc_zwrotna')
                <p class="error-alert">{{ $message }}</p>
            @enderror
            <div class="panel-card-section dark">
                <h3 class="panel-card-section-title title-white">Wiadomość zwrotna</h3>
                <form class="card-inside-form" action="{{ route('zgloszenie', $zgloszenie -> id) }}" method="post">
                    @csrf
                    <input name="zgloszenie_id" type="hidden" value="{{$zgloszenie -> id}}">
                    <textarea placeholder="Napisz wiadmość do pracodawcy..." name="wiadomosc_zwrotna"></textarea>
                    <button class="button-global-bright accept-button" type="submit" name="status" value="zaakceptowane">Zaakceptuj</button>
                    <button class="button-global-bright deny-button" type="submit" name="status" value="odrzucone">Odrzuć</button>
                </form> 
            </div>
            @endif
            @endcan
        </div>
        <main>
        @else
        
        @endif
    </div>
@endsection


<!-- {{ $zgloszenie -> nadawca -> imie}}
{{ $zgloszenie -> odbiorca -> imie}}
{{ $zgloszenie -> ogloszenie -> naglowek}} -->