@extends('company.company_main')
@section('company_item')
    <div class="panel-section">
        <h1 class="panel-section-h1">Informacje o profilu</h1>
            <a href="{{ url('/company/info-update') }}"><button class="button-global-dark">Edytuj informacje</button><a>
            @if(!auth()->user()->photo == null)
                <a href="{{ url('/company/logo-update') }}"><button class="button-global-dark">Zmień Logo firmy</button><a>
            @endif
            <button class="button-global-dark">Zmień hasło</button> 
            <button class="button-global-dark">Zmień email</button> 
        <div class="panel-item">
            <h2 class="panel-item-h2">Logo firmy</h2>
            @if(auth()->user()->photo == null)
                <p class="panel-item-p">Brak logo</p>
            @else
                <img class="card-img" src="{{ asset (auth()-> user() -> photo)}}"/>
            @endif
        </div>
        <div class="panel-item">
            <h2 class="panel-item-h2">Imie</h2>
            <p class="panel-item-p">
                @if (auth()->user()->imie == null) 
                    Brak informacji 
                @else 
                    {{ auth()->user()->imie }} 
                @endif
            </p>
        </div>
        <div class="panel-item">
            <h2 class="panel-item-h2">Nazwisko</h2>
            <p class="panel-item-p">
                @if (auth()->user()->nazwisko == null) 
                    Brak informacji 
                @else 
                    {{ auth()->user()->nazwisko }} 
                @endif
            </p>
        </div>
        <div class="panel-item">
            <h2 class="panel-item-h2">Nazwa firmy</h2>
            <p class="panel-item-p">
                @if (auth()->user()->nazwa_firmy == null) 
                    Brak informacji 
                @else 
                    {{ auth()->user()->nazwa_firmy }} 
                @endif
            </p>
        </div>
        <div class="panel-item">
            <h2 class="panel-item-h2">Mail kontaktowy</h2>
            <p class="panel-item-p">
                @if (auth()->user()->email == null) 
                    Brak informacji 
                @else 
                    {{ auth()->user()->email }} 
                @endif
            </p>
        </div>
        <div class="panel-item">
            <h2 class="panel-item-h2">Informacje ogólne</h2>
            <p class="panel-item-p">
                @if (auth()->user()->opis == null) 
                    Brak informacji 
                @else 
                    {{ auth()->user()->opis }} 
                @endif
            </p>
        </div>
    </div>
@endsection