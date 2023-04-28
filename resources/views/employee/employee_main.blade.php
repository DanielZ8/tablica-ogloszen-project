@extends('layouts.layout')
@section('content')
    <div class="panel-main-container">
        <div class="panel-nav">
            <a href="#"><h1>Panel Użytkownika</h1></a>
            <a href="{{ url('/employee') }}"><div div class="panel-nav-item">Informacje o profilu</div></a>
            <a href="{{ url('/employee/zgloszenia') }}"><div div class="panel-nav-item">Zgłoszenia</div></a>
        </div>
        <div class="panel-content">
            @yield('employee_item')
        </div>
    </div>
@endsection