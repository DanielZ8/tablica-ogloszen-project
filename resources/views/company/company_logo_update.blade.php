@extends('company.company_main')
@section('company_item')
    <div class="panel-section">
        <h1 class="panel-section-h1">Zmień logo firmy</h1>
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li style="color: green;">{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif
        <div class="panel-item">
            <h2 class="panel-item-h2">Aktualne logo firmy</h2>
            <img class="card-img" src="{{ asset (auth()-> user() -> photo)}}"/>
        </div>
        <form action="{{ route('company-logo-update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="panel-item">
                <h2 class="panel-item-h2">Wybierz plik z logo</h2>
                <input type="file" class="logo_upload" name="logo" value="auth()->user()->photo">
            </div>
            @error('logo')
                    <p style="color: red;">{{ $message }}</p>
            @enderror
            <button class="button-global-dark" type="submit">Zatwierdź</button>
        </form>
    </div>
@endsection