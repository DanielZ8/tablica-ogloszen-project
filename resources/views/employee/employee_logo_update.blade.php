@extends('employee.employee_main')
@section('employee_item')
    <div class="panel-section">
        <h1 class="panel-section-h1">Zmień avatar</h1>
        @if (\Session::has('success')) 
            <div class="success-alert">{!! \Session::get('success') !!}</div>   
        @endif
        <div class="panel-item">
            <h2 class="panel-item-h2">Aktualny avatar</h2>
            <img class="card-img" src="{{ asset (auth()-> user() -> photo)}}"/>
        </div>
        <form action="{{ route('employee-logo-update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="panel-item">
                <h2 class="panel-item-h2">Wybierz plik z avatarem</h2>
                <div class="logo_wrapper">
                    <label for="files" class="logo_label">Zalecane równe proporcje obrazka (np. 800px x 800px)</label>
                    <input type="file" class="logo_upload" name="logo" value="auth()->user()->photo">
                </div>
                @error('logo')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <button class="button-global-dark" type="submit">Zatwierdź</button>
        </form>
    </div>
@endsection