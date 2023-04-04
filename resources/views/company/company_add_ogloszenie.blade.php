@extends('company.company_main')
@section('company_item')
    <div class="company-add-advert">
        <h1>Dodaj ogłoszenie</h1>
        <form>
            <div class="company-info-item">
                <h2>Nagłówek</h2>
                <input class="company-form-item" type="text" placeholder="Wpisz nagłówek" name="search">
            </div>
            <div class="company-info-item"><h2>Kategoria</h2>
                <select class="company-form-item">
                    <option>Java</option>
                    <option>C++</option>
                    <option>HTML</option>
                </select></div>
            <div class="company-info-item">
                <h2>Stawka miesięczna</h2>
                <input class="company-form-item" type="text" placeholder="Wpisz stawkę miesięczną" name="search">
            </div>
            <div class="company-info-item">
                <h2>Lokalizacja (jeśli praca jest zdalna wpisz ONLINE)</h2>
                <input class="company-form-item" type="text" placeholder="Wpisz lokalizację" name="search">
            </div>
            <div class="company-info-item"><h2>Wymagania</h2>
                <textarea placeholder="Napisz wiadmość do pracodawcy..."></textarea>
            </div>
            <div class="company-info-item"><h2>Opis</h2>
                <textarea placeholder="Napisz wiadmość do pracodawcy..."></textarea>
            </div>
            <button class="company-button" type="submit" onclick="alert('Tu będzie funckja dodawania ogłoszenia')">Dodaj ogłoszenie</button>
        </form>
    </div>
@endsection