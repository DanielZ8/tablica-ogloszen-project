@extends('layouts.layout')
@section('content')
    <div class="forms-main-container">
        <div class="forms">
            <h1>Zarejestruj się</h1>
            <form class="form-container">
                <input class="form-item" type="email" placeholder="Email" name="email">
                <input class="form-item" type="password" placeholder="Hasło" name="Password">
                <input class="form-item" type="password" placeholder="Powtórz hasło" name="R_Password">
                <select class="form-item">
                    <option>Klient</option>
                    <option>Firma</option>
                </select>
                <button type="submit" onclick="alert('Tu będzie rejestracja')">Zarejestruj się</button>
            </form>
        </div>
    </div>
@endsection