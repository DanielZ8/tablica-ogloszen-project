@extends('company.company_main')
@section('company_item')
    <div class="panel-section">
        <h1 class="panel-section-h1">Dodaj ogłoszenie</h1>
        <form action="add" method="POST">
            @csrf
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li style="color: green;">{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif
            <div class="panel-item">
                <h2 class="panel-item-h2">Nagłówek</h2>
                <input class="form-global-item" type="text" placeholder="Wpisz nagłówek" name="naglowek">
            </div>
            @error('naglowek')
                    <p style="color: red;">{{ $message }}</p>
            @enderror
            <div class="panel-item">
                <h2 class="panel-item-h2">Kategoria</h2>
                <select class="form-global-item" name="kategoria">
                    <option value="Java">Java</option>
                    <option value="CPP">CPP(C++)</option>
                    <option value="PHP">PHP</option>
                    <option value="Python">Python</option>
                </select>
            </div>
            <div class="panel-item">
                <h2 class="panel-item-h2">Stawka miesięczna</h2>
                <input class="form-global-item" type="text" placeholder="Wpisz stawkę miesięczną" name="stawka">
            </div>
            @error('stawka')
                    <p style="color: red;">{{ $message }}</p>
            @enderror
            <div class="panel-item">
                <h2 class="panel-item-h2">Lokalizacja (jeśli praca jest zdalna wpisz ONLINE)</h2>
                <input class="form-global-item" type="text" placeholder="Wpisz lokalizację" name="lokalizacja">
            </div>
            @error('lokalizacja')
                    <p style="color: red;">{{ $message }}</p>
            @enderror
            <div class="panel-item">
                <h2 class="panel-item-h2">Wymagania</h2>
                <textarea placeholder="Wymagania" name="wymagania"></textarea>
            </div>
            @error('wymagania')
                    <p style="color: red;">{{ $message }}</p>
            @enderror

            <div class="panel-item">
                <h2 class="panel-item-h2">Opis</h2>
                <textarea placeholder="Opis" name="opis"></textarea>
            </div>
            @error('opis')
                    <p style="color: red;">{{ $message }}</p>
            @enderror
            <button class="button-global-dark" type="submit">Dodaj ogłoszenie</button>
        </form>
    </div>
@endsection