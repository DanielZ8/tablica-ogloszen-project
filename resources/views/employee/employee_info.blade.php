@extends('employee.employee_main')
@section('employee_item')
    <div class="panel-section">
        <h1 class="panel-section-h1">Informacje o profilu</h1>
            <a href="{{ url('/employee/info-update') }}"><button class="button-global-dark">Edytuj informacje</button><a>
            @if(!auth()->user()->photo == null)
            <a href="{{ url('/employee/logo-update') }}"><button class="button-global-dark">Zmień Avatar</button><a>
            @endif
            <button class="button-global-dark">Zmień hasło</button> 
            <button class="button-global-dark">Zmień email</button> 
        <div class="panel-item">
            <h2 class="panel-item-h2">Avatar</h2>
            <img class="card-img" src="{{ asset (auth()-> user() -> photo)}}"/>
        </div>
        <div class="panel-item">
            <h2 class="panel-item-h2">Imie</h2>
            <p class="panel-item-p">{{ auth()->user()->imie }}</p>
        </div>
        <div class="panel-item">
            <h2 class="panel-item-h2">Nazwisko</h2>
            <p class="panel-item-p">{{ auth()->user()->nazwisko }}</p>
        </div>
        <div class="panel-item">
            <h2 class="panel-item-h2">Mail kontaktowy</h2>
            <p class="panel-item-p">{{ auth()->user()->email }}</p>
        </div>
        <div class="panel-item">
            <h2 class="panel-item-h2">Informacje ogólne</h2>
            <p class="panel-item-p">{{ auth()->user()->opis }}</p>
        </div>
    </div>
@endsection