@extends('company.company_main')
@section('company_item')
    <div class="panel-section">
        <h1 class="panel-section-h1">Zgłoszenia</h1>
        <a href="{{ url('/company/zgloszenia/oczekujace') }}"><button class="button-global-dark">Oczekujące</button><a>
        <a href="{{ url('/company/zgloszenia/zaakceptowane') }}"><button class="button-global-dark">Zaakceptowane</button><a>
        <a href="{{ url('/company/zgloszenia/odrzucone') }}"><button class="button-global-dark">Odrzucone</button><a>
        @if (\Session::has('success')) 
            <div class="success-alert">{!! \Session::get('success') !!}</div>   
        @endif
        <div class="panel-item">
            <h2 class="panel-item-h2">Wszystkie zgłoszenia</h2>
            @if ($zgloszenia -> count())
                @foreach($zgloszenia as $zgloszenie)
                @if ($zgloszenie -> status == "oczekujace")
                <a href="{{ route('zgloszenie', $zgloszenie -> id) }}" class="card ad-waiting">
                    <div class="span-card-img"><img class="card-img" src="{{ asset ($zgloszenie-> nadawca -> photo)}}"/></div>
                    <div class="card-wrapper">
                        <h2 class="card-title">{{$zgloszenie -> nadawca-> imie}} {{$zgloszenie -> nadawca-> nazwisko}}</h2>
                        <p class="card-item bold oczekujace">(Oczekujące)</p>
                        <p class="card-item bold">{{$zgloszenie -> nadawca-> wiek}} lat</p>
                        <p class="card-item bold"><img src="{{ asset('img/location.png') }}"/>Kraków</p>
                        <p class="card-item">Data zgłoszenia: {{$zgloszenie -> created_at}}</p>
                        <p class="card-item">{{$zgloszenie -> nadawca-> opis}}</p>
                    </div>
                </a>
                @elseif ($zgloszenie -> status == "zaakceptowane")
                <a href="{{ route('zgloszenie', $zgloszenie -> id) }}" class="card ad-accepted">
                    <div class="span-card-img"><img class="card-img" src="{{ asset ($zgloszenie-> nadawca -> photo)}}"/></div>
                    <div class="card-wrapper">
                        <h2 class="card-title">{{$zgloszenie -> nadawca-> imie}} {{$zgloszenie -> nadawca-> nazwisko}}</h2>
                        <p class="card-item bold zaakceptowane">(Zaakceptowane)</p>
                        <p class="card-item bold">{{$zgloszenie -> nadawca-> wiek}} lat</p>
                        <p class="card-item bold"><img src="{{ asset('img/location.png') }}"/>Kraków</p>
                        <p class="card-item">Data zgłoszenia: {{$zgloszenie -> created_at}}</p>
                        <p class="card-item">{{$zgloszenie -> nadawca-> opis}}</p>
                    </div>
                </a>
                @else ($zgloszenie -> status == "odrzucone")
                <a href="{{ route('zgloszenie', $zgloszenie -> id) }}" class="card ad-denied">
                    <div class="span-card-img"><img class="card-img" src="{{ asset ($zgloszenie-> nadawca -> photo)}}"/></div>
                    <div class="card-wrapper">
                        <h2 class="card-title">{{$zgloszenie -> nadawca-> imie}} {{$zgloszenie -> nadawca-> nazwisko}}</h2>
                        <p class="card-item bold odrzucone">(Odrzucone)</p>
                        <p class="card-item bold">{{$zgloszenie -> nadawca-> wiek}} lat</p>
                        <p class="card-item bold"><img src="{{ asset('img/location.png') }}"/>Kraków</p>
                        <p class="card-item">Data zgłoszenia: {{$zgloszenie -> created_at}}</p>
                        <p class="card-item">{{$zgloszenie -> nadawca-> opis}}</p>
                    </div>
                </a>
                @endif
               @endforeach
               {{$zgloszenia ->links("pagination::semantic-ui")}}  
            @else
                <h3>Brak zgłoszeń</h3>
            @endif
        </div>
    </div>
@endsection