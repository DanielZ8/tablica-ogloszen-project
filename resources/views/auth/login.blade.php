@extends('layouts.layout')
@section('content')
    <div class="forms-main-container">
        <div class="forms">
            <h1>Zaloguj się</h1>
            <form class="form-container">
                <input class="form-item" type="email" placeholder="Email" name="email">
                <input class="form-item" type="password" placeholder="Hasło" name="Password">
                <button type="submit" onclick="alert('Tu będzie logowanie')">Zaloguj</button>
            </form>
        </div>
    </div>
@endsection