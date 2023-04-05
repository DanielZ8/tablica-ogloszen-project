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
                <div class="ad-offer-item5">
                    <h3>Wyślij zgłoszenie</h3>
                    <form class="ad-offer-form">
                        <textarea placeholder="Napisz wiadmość do pracodawcy..."></textarea>
                        <button type="submit" onclick="alert('Tu będzie funckja aplikowania')">Aplikuj</button>
                    </form> 
                </div>
            </div>    
        </main>
    </div>
@endsection