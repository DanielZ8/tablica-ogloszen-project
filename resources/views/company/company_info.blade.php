@extends('company.company_main')
@section('company_item')
    <div class="company-info">
        <h1>Informacje o profilu</h1>
        <div class="company-info-item"><h2>Logo firmy</h2><img class="company-info-logo" src="{{ auth()->user()->photo}}"/></div>
        <div class="company-info-item"><h2>Imie</h2><p class="company-info-mail">{{ auth()->user()->imie }} </p></div>
        <div class="company-info-item"><h2>Nazwisko</h2><p class="company-info-mail">{{ auth()->user()->nazwisko }} </p></div>
        <div class="company-info-item"><h2>Nazwa firmy</h2><p class="company-info-name">{{ auth()->user()->nazwa_firmy}}</p></div>
        <div class="company-info-item"><h2>Mail kontaktowy</h2><p class="company-info-mail">{{ auth()->user()->email }} </p></div>
        <div class="company-info-item"><h2>Informacje ogólne</h2><p class="company-info-mail">{{ auth()->user()->opis }}</p></div>
    </div>
@endsection