@extends('layouts.layout')
@section('content')
    <div class="forms-main-container">
        <div class="forms">
            <h1 class="form-global-title">Zmień hasło</h1>
            <form class="form-global" action="{{ route('change_password') }}" method="post">
                @csrf
                @if (\Session::has('error')) 
                <div class="error-alert">{!! \Session::get('error') !!}</div>   
                @endif
                @error('email')
                    <p class="error-message">{{ $message }}</p>
                @enderror
                <input class="form-global-item" type="email" placeholder="Email" name="email" value="{{ old('email') }}">
                @error('stare_hasło')
                    <p class="error-message">{{ $message }}</p>
                @enderror
                <input class="form-global-item" type="password" placeholder="Stare hasło" name="stare_hasło">
                @error('password')
                    <p class="error-message">{{ $message }}</p>
                @enderror
                <input class="form-global-item" type="password" placeholder="Nowe hasło" name="password">
                <input class="form-global-item" type="password" placeholder="Powtórz nowe hasło" name="password_confirmation">
                <button class="button-global-dark" type="submit">Zmień hasło</button>
            </form>
        </div>
    </div>
@endsection