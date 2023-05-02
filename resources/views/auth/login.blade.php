@extends('layouts.layout')
@section('content')
    <div class="forms-main-container">
        <div class="forms">
            <h1 class="form-global-title">Zaloguj się</h1>
            <form class="form-global" action="{{ route('login') }}" method="post">
                @csrf
                @if (session('status'))
                <p class="error-message">{{ session('status') }}</p>
                @endif
                @error('email')
                    <p class="error-message">{{ $message }}</p>
                @enderror
                <input class="form-global-item" type="email" placeholder="Email" name="email">
                @error('password')
                    <p class="error-message">{{ $message }}</p>
                @enderror
                <input class="form-global-item" type="password" placeholder="Hasło" name="password">
                <button class="button-global-dark" type="submit">Zaloguj</button>
            </form>
        </div>
    </div>
@endsection