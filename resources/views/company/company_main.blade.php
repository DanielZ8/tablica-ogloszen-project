@extends('layouts.layout')
@section('content')
    @guest
        <div class="company-main-container">
            TESTOWANIE
        </div>
    @endguest
    @auth
    <div class="company-main-container">
        <div class="company-nav">
            <a href="#"><h1>Panel Firmy</h1></a>
            <a href="{{ url('/company') }}"><div class="company-nav-item">Informacje o profilu</div></a>
            <a href="{{ url('/company/add') }}"><div class="company-nav-item">Dodaj ogłoszenie</div></a>
            <a href="{{ url('/company/active') }}"><div class="company-nav-item">Aktywne ogłoszenia</div></a>
            <a href="{{ url('/company/zgloszenia') }}"><div class="company-nav-item">Zgłoszenia</div></a>
        </div>
        <div class="company-content">
            @yield('company_item')
        </div>
    </div>
    @endauth
@endsection