@extends('company.company_main')
@section('company_item')
    <div class="panel-section">
        <h1 class="panel-section-h1">Dodaj ogłoszenie</h1>
        <form action="add" method="POST">
            @csrf
            @if (\Session::has('success')) 
                <div class="success-alert">{!! \Session::get('success') !!}</div>   
            @endif
            <div class="panel-item">
                <h2 class="panel-item-h2">Nagłówek</h2>
                <input class="form-global-item" type="text" placeholder="Wpisz nagłówek" name="naglowek" value="{{ old('naglowek') }}">
                @error('naglowek')
                    <p class="error-message">{{ $message }}</p>
                @enderror            
            </div>
            <div class="panel-item">
                <h2 class="panel-item-h2">Kategoria</h2>
                <select class="form-global-item" name="kategoria">
                    @if ($kategorie -> count())
                        @foreach ($kategorie as $kategoria)
                            <option value="{{$kategoria->nazwa}}">{{$kategoria->nazwa}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="panel-item">
                <h2 class="panel-item-h2">Stawka miesięczna</h2>
                <input class="form-global-item" type="text" placeholder="Wpisz stawkę miesięczną" name="stawka" value="{{ old('stawka') }}">
                @error('stawka')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <div class="panel-item">
                <h2 class="panel-item-h2">Lokalizacja (jeśli praca jest zdalna wpisz ONLINE)</h2>
                <input class="form-global-item" type="text" placeholder="Wpisz lokalizację" name="lokalizacja" value="{{ old('lokalizacja') }}">
                @error('lokalizacja')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <div class="panel-item">
                <h2 class="panel-item-h2">Wymagania</h2>
                <textarea placeholder="Wymagania" name="wymagania">{{ old('wymagania') }}</textarea>
                @error('wymagania')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <div class="panel-item">
                <h2 class="panel-item-h2">Opis</h2>
                <textarea placeholder="Opis" name="opis">{{ old('opis') }}</textarea>
                @error('opis')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <button class="button-global-dark" type="submit">Dodaj ogłoszenie</button>
        </form>
    </div>
@endsection