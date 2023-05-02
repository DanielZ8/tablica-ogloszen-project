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
                <div class="success-alert">{!! \Session::get('success') !!}</div>   
            @endif
            @if (\Session::has('error_add'))
                <div class="error-alert">{!! \Session::get('error_add') !!}</div>
            @endif
            @if (\Session::has('error_zgloszenia'))
                <div class="error-alert">{!! \Session::get('error_zgloszenia') !!}</div>
            @endif
            @if (auth()->user()->photo == null)
            <div class="panel-item">
                <h2 class="panel-item-h2">Avatar</h2>
                <div class="logo_wrapper">
                    <label for="files" class="logo_label">Zalecane równe proporcje obrazka (np. 800px x 800px)</label>
                    <input type="file" class="logo_upload" name="logo" value="auth()->user()->photo">
                </div>
                @error('logo')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            @endif
            <div class="panel-item">
                <h2 class="panel-item-h2">Imię</h2>
                <input class="form-global-item" type="text" placeholder="Wpisz imię" name="imie" value="{{ auth()->user()->imie }}">
                @error('imie')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <div class="panel-item">
                <h2 class="panel-item-h2">Nazwisko</h2>
                <input class="form-global-item" type="text" placeholder="Wpisz nazwisko" name="nazwisko" value="{{ auth()->user()->nazwisko }}">
                @error('nazwisko')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <div class="panel-item">
                <h2 class="panel-item-h2">Wiek</h2>
                <input class="form-global-item" type="text" placeholder="Podaj swój wiek" name="wiek" value="{{ auth()->user()->wiek }}">
                @error('wiek')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <div class="panel-item">
                <h2 class="panel-item-h2">Opis profilu(będzie widoczny w zgłoszeniach)</h2>
                <textarea placeholder="Opis" name="opis">{{ auth()->user()->opis }}</textarea>
                @error('opis')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <button class="button-global-dark" type="submit">Zatwierdź</button>
        </form>
    </div>
@endsection