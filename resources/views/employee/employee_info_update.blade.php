@extends('company.company_main')
@section('company_item')
    <div class="company-add-advert">
        <h1>Aktualizacja danych</h1>
        <form action="add" method="POST">
            @csrf
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li style="color: green;">{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif
            <div class="company-info-item">
                <h2>Logo firmy</h2>
                <input type="file" id="myFile" name="filename">
            </div>
            @error('imie')
                    <p style="color: red;">{{ $message }}</p>
            @enderror
            <div class="company-info-item">
                <h2>Nazwa firmy</h2>
                <input class="company-form-item" type="text" placeholder="Wpisz nazwę firmy" name="nazwa_firmy">
            </div>
            @error('imie')
                    <p style="color: red;">{{ $message }}</p>
            @enderror
            <div class="company-info-item">
                <h2>Imię przedstawiciela firmy</h2>
                <input class="company-form-item" type="text" placeholder="Wpisz imię" name="imie">
            </div>
            @error('imie')
                    <p style="color: red;">{{ $message }}</p>
            @enderror
            <div class="company-info-item">
                <h2>Nazwisko przedstawiciela firmy</h2>
                <input class="company-form-item" type="text" placeholder="Wpisz nazwisko" name="nazwisko">
            </div>
            @error('nazwisko')
                    <p style="color: red;">{{ $message }}</p>
            @enderror
            <div class="company-info-item">
                <h2>Wiek</h2>
                <input class="company-form-item" type="text" placeholder="Wpisz stawkę miesięczną" name="stawka">
            </div>
            @error('stawka')
                    <p style="color: red;">{{ $message }}</p>
            @enderror
            <div class="company-info-item"><h2>Opis firmy (będzie widoczny na ogłoszeniu)</h2>
                <textarea placeholder="Opis" name="opis"></textarea>
            </div>
            @error('opis')
                    <p style="color: red;">{{ $message }}</p>
            @enderror
            <button class="company-button" type="submit">Zatwierdź</button>
        </form>
    </div>
@endsection