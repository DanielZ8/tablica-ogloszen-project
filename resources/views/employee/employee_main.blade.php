@extends('layouts.layout')
@section('content')
    <div class="company-main-container">
        <div class="company-nav">
            <a href="#"><h1>Panel Użytkownika</h1></a>
            <a href="{{ url('/employee') }}"><div class="company-nav-item">Informacje o profilu</div></a>
        </div>
        <div class="company-content">
            @yield('employee_item')
        </div>
    </div>
@endsection