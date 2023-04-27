@extends('layouts.layout')
@section('content')
    @guest
        <div class="panel-main-container">
            TESTOWANIE
        </div>
    @endguest
    @auth
    <div class="panel-main-container">
        <div class="panel-nav">
            <a href="#"><h1>Panel Firmy</h1></a>
            <a href="{{ url('/company') }}"><div class="panel-nav-item">Informacje o profilu</div></a>
            <a href="{{ url('/company/add') }}"><div class="panel-nav-item">Dodaj ogłoszenie</div></a>
            <a href="{{ url('/company/active') }}"><div class="panel-nav-item">Aktywne ogłoszenia</div></a>
            <a href="{{ url('/company/zgloszenia') }}"><div class="panel-nav-item">Zgłoszenia</div></a>
        </div>
        <div class="panel-content">
            @yield('company_item')
        </div>
    </div>
    @endauth
@endsection