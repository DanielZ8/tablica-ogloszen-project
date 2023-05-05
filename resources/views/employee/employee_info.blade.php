@extends('employee.employee_main')
@section('employee_item')
    <div class="panel-section">
        <h1 class="panel-section-h1">Informacje o profilu</h1>
            <a href="{{ url('/employee/info-update') }}"><button class="button-global-dark">Edytuj informacje</button><a>
            @if(!auth()->user()->photo == null)
                <a href="{{ url('/employee/logo-update') }}"><button class="button-global-dark">Zmień Avatar</button><a>
            @endif
            <a href="{{ route('change_password') }}"><button class="button-global-dark">Zmień hasło</button><a>
            <a href="{{ route('change_email') }}"><button class="button-global-dark">Zmień email</button><a>
            @if (\Session::has('success')) 
                <div class="success-alert">{!! \Session::get('success') !!}</div>   
            @endif
        <div class="panel-item">
            <h2 class="panel-item-h2">Avatar</h2>
            @if(auth()->user()->photo == null)
                <p class="panel-item-p">Brak avataru</p>
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