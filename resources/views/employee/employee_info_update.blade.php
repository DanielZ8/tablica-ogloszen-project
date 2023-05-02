@extends('employee.employee_main')
@section('employee_item')
    <div class="panel-section">
        @if (auth()->user()->photo == null || auth()->user()->nazwa_firmy == null || auth()->user()->imie == null || auth()->user()->nazwisko == null || auth()->user()->opis == null)
        <h1 class="panel-section-h1">Zaaktualizuj dane aby móc aplikować na ogłoszenia</h1>
        @else
        <h1 class="panel-section-h1">Aktualizacja danych</h1>
        @endif
        <form action="{{ route('employee-info-update') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li style="color: green;">{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif
            @if (\Session::has('error_add'))
                <div class="alert alert-error">
                    <ul>
                        <li style="color: red;">{!! \Session::get('error_add') !!}</li>
                    </ul>
                </div>
            @endif
            @if (\Session::has('error_zgloszenia'))
                <div class="alert alert-error">
                    <ul>
                        <li style="color: red;">{!! \Session::get('error_zgloszenia') !!}</li>
                    </ul>
                </div>
            @endif
            @if (auth()->user()->photo == null)
            <div class="panel-item">
                <h2 class="panel-item-h2">Avatar</h2>
                <input type="file" class="logo_upload" name="logo" value="auth()->user()->photo">
            </div>
            @endif
            @error('logo')
                    <p style="color: red;">{{ $message }}</p>
            @enderror
            <div class="panel-item">
                <h2 class="panel-item-h2">Imię</h2>
                <input class="form-global-item" type="text" placeholder="Wpisz imię" name="imie" value="{{ auth()->user()->imie }}">
            </div>
            @error('imie')
                    <p style="color: red;">{{ $message }}</p>
            @enderror
            <div class="panel-item">
                <h2 class="panel-item-h2">Nazwisko</h2>
                <input class="form-global-item" type="text" placeholder="Wpisz nazwisko" name="nazwisko" value="{{ auth()->user()->nazwisko }}">
            </div>
            @error('nazwisko')
                    <p style="color: red;">{{ $message }}</p>
            @enderror
            <div class="panel-item">
                <h2 class="panel-item-h2">Wiek</h2>
                <input class="form-global-item" type="text" placeholder="Podaj swój wiek" name="wiek" value="{{ auth()->user()->wiek }}">
            </div>
            @error('wiek')
                    <p style="color: red;">{{ $message }}</p>
            @enderror
            <div class="panel-item">
                <h2 class="panel-item-h2">Opis profilu(będzie widoczny w zgłoszeniach)</h2>
                <textarea placeholder="Opis" name="opis">{{ auth()->user()->opis }}</textarea>
            </div>
            @error('opis')
                    <p style="color: red;">{{ $message }}</p>
            @enderror
            <button class="button-global-dark" type="submit">Zatwierdź</button>
        </form>
    </div>
@endsection