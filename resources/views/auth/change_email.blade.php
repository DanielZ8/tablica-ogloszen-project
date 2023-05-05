@extends('layouts.layout')
@section('content')
    <div class="forms-main-container">
        <div class="forms">
            <h1 class="form-global-title">Zmień email</h1>
            <form class="form-global" action="{{ route('change_email') }}" method="post">
                @csrf
                @if (\Session::has('error')) 
                    <div class="error-alert">{!! \Session::get('error') !!}</div>   
                @endif

                @error('email')
                    <p class="error-message">{{ $message }}</p>
                @enderror

                <input class="form-global-item" type="email" placeholder="Aktualny email" name="email" value="{{ old('email') }}">
                
                @error('password')
                    <p class="error-message">{{ $message }}</p>
                @enderror
                <input class="form-global-item" type="password" placeholder="Hasło" name="password">
                
                @error('nowy_email')
                    <p class="error-message">{{ $message }}</p>
                @enderror
                <input class="form-global-item" type="email" placeholder="Nowy email" name="nowy_email" value="{{ old('nowy_email') }}">
                <button class="button-global-dark" type="submit">Zmień email</button>
            </form>
        </div>
    </div>
@endsection