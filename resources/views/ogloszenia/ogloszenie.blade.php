@extends('layouts.layout')
@section('content')
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
        <main class="panel-card-container">
            <div class="panel-card-wrapper">
                <div class="panel-card-big-header">
                    <img src="{{ asset ($ogloszenie -> user -> photo)}}"/>
                    <h1>{{$ogloszenie -> user -> nazwa_firmy }} - {{$ogloszenie -> naglowek}}</h1>
                </div>
                @can('firma')
                @if(auth()->user()->id == $ogloszenie->user->id)
                <div class="panel-card-items">
                    <form action="{{ url('/company/edit-ogloszenie') }}" method="get">
                        <input name="ogloszenie_id" type="hidden" value="{{$ogloszenie -> id}}">
                        <button class="button-global-bright ad-waiting" type="submit" style="margin-right: 3px;">Edytuj</button>
                    </form>
                    <form action="{{ url('/company/delete') }}" method="post">
                        @csrf
                        <input name="ogloszenie_id" type="hidden" value="{{$ogloszenie -> id}}">
                        <button class="button-global-bright deny-button" type="submit" style="margin-right: 3px;">Usuń</button>
                    </form>
                </div>
                @endif
                @endcan
                <div class="panel-card-items">
                    <p><img src="{{ asset ('img/'.$ogloszenie -> kategoria  .'.png') }}"/>{{ $ogloszenie -> kategoria}}</p>
                    <p><img src="{{asset ('img/cash.png')}}"/>{{ $ogloszenie -> stawka}}zł/miesiąc</p>
                    <p><img src="{{asset ('img/location.png')}}"/>{{ $ogloszenie -> lokalizacja}}</p>
                </div>
                <div class="panel-card-section">
                    <h3 class="panel-card-section-title">Opis firmy</h3>
                    <p class="panel-card-section-p">{{ $ogloszenie -> user -> opis}}</p>
                </div>
                <div class="panel-card-section">
                    <h3 class="panel-card-section-title">Wymagania</h3>
                    <p class="panel-card-section-p bold">{{$ogloszenie -> wymagania}}</p>
                </div>
                <div class="panel-card-section">
                    <h3 class="panel-card-section-title">Opis ogłoszenia</h3>
                    <p class="panel-card-section-p">{{ $ogloszenie -> opis}}</p>
                </div>
                @guest
                    <div class="panel-card-section dark">
                        <h3 class="panel-card-section-title title-white">Aby wysłać zgłoszenie zaloguj lub zarejestruj się!</h3> 
                    </div>
                @endguest
                @auth
                @can('pracownik')
                    @error('wiadomosc')
                        <p class="error-alert">{{ $message }}</p>
                    @enderror
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