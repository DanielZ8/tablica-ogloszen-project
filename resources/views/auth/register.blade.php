@extends('layouts.layout')
@section('content')
    <div class="forms-main-container">
        <div class="forms">
            <h1 class="form-global-title">Zarejestruj się</h1>
            <form class="form-global" action="{{ route('register') }}" method="post">
                @csrf
                @error('imie')
                    <p style="color: red; margin:0; padding: 0;">{{ $message }}</p>
                @enderror
                <input class="form-global-item" type="text" placeholder="Imie" name="imie" value="{{ old('imie') }}">
                @error('nazwisko')
                    <p style="color: red; margin:0; padding: 0;">{{ $message }}</p>
                @enderror
                <input class="form-global-item" type="text" placeholder="Nazwisko" name="nazwisko" value="{{ old('nazwisko') }}">
                @error('email')
                    <p style="color: red; margin:0; padding: 0;">{{ $message }}</p>
                @enderror
                <input class="form-global-item" type="email" placeholder="Email" name="email" value="{{ old('email') }}">
                @error('password')
                    <p style="color: red; margin:0; padding: 0;">{{ $message }}</p>
                @enderror
                <input class="form-global-item" type="password" placeholder="Hasło" name="password">
                <input class="form-global-item" type="password" placeholder="Powtórz hasło" name="password_confirmation">
                <select class="form-global-item" name="rola">
                    <option value="pracownik">Pracownik</option>
                    <option value="firma">Firma</option>
                </select>
                <button class="button-global-dark" type="submit">Zarejestruj się</button>
            </form>
        </div>
    </div>
@endsection