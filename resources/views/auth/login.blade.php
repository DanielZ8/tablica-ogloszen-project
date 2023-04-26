@extends('layouts.layout')
@section('content')
    <div class="forms-main-container">
        <div class="forms">
            <h1>Zaloguj się</h1>
            <form class="form-container" action="{{ route('login') }}" method="post">
                @csrf
                @if (session('status'))
                    <p style="color: red; margin:0; padding: 0;">{{ session('status') }}</p>
                @endif
                @error('email')
                    <p style="color: red; margin:0; padding: 0;">{{ $message }}</p>
                @enderror
                <input class="form-item" type="email" placeholder="Email" name="email">
                @error('password')
                    <p style="color: red; margin:0; padding: 0;">{{ $message }}</p>
                @enderror
                <input class="form-item" type="password" placeholder="Hasło" name="password">
                <button type="submit">Zaloguj</button>
            </form>
        </div>
    </div>
@endsection