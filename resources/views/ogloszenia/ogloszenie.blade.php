@extends('layouts.layout')
@section('content')
    <div class="ads-main-container">
        <div id="sidebar">
            <h1>Wyszukaj ogłoszenia</h1>
            <form class="sidebar-form">
                <input class="form-item" type="text" placeholder="Search.." name="search">
                <select class="form-item">
                    <option>Java</option>
                    <option>C++</option>
                    <option>HTML</option>
                </select>
                <select class="form-item">
                    <option>Opcja 1</option>
                    <option>Opcja 2</option>
                    <option>Opcja 3</option>
                </select>
                <button type="submit" onclick="alert('Tu będzie wyszukiwanie')">Wyszukaj</button>
            </form>
        </div>
        <main class="content3">
            <div class="ad-offer">
                <div class="ad-offer-item1">
                    <img class="ad-offer-img" src="img/firma4.png"/>
                    <h2 class="ad-offer-title">Firma SemiSoft - Programista Python</h2>
                </div>
                <div class="ad-offer-item2">
                    <p class="ad-offer-category"><img src="img/python.png"/>Python</p>
                    <p class="ad-offer-salary"><img src="img/cash.png"/>6000zł/miesiąc</p>
                    <p class="ad-offer-location"><img src="img/location.png"/>Kraków</p>
                </div>
                <div class="ad-offer-item4">
                    <h3>Wymagania</h3>
                    <p class="ad-offer-requirements">- Python doświadczenie milion lat</p>
                    <p class="ad-offer-requirements">- Bycie super</p>
                    <p class="ad-offer-requirements">- Mile widziany hiszpański C1</p>
                </div>
                <div class="ad-offer-item3">
                    <h3>Opis</h3>
                    <p class="ad-offer-description">Poszukujemy doświadczonego programisty Python do pracy nad projektami dla klientów z branży finansowej. 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, doloribus hic aperiam sapiente dignissimos asperiores, minus sed quibusdam accusantium dolor consectetur! Repellat qui, suscipit mollitia enim optio deleniti expedita eum.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel dolore inventore nostrum culpa alias nihil, rerum corrupti ducimus libero quae voluptatibus atque eligendi saepe sapiente, perspiciatis nam! Officiis, quisquam eligendi.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas possimus reprehenderit saepe odio perferendis cumque ea non. Exercitationem explicabo, maiores odio labore nesciunt fugit fugiat qui sit nihil hic dolore.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur, atque excepturi. Praesentium eum vero deleniti ipsum hic? Dignissimos minus, alias vitae, perspiciatis unde architecto voluptatibus in nulla, quod corporis perferendis.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur, atque excepturi. Praesentium eum vero deleniti ipsum hic? Dignissimos minus, alias vitae, perspiciatis unde architecto voluptatibus in nulla, quod corporis perferendis.
                    </p>
                </div>
                <div class="ad-offer-item5">
                    <h3>Wyślij zgłoszenie</h3>
                    <form class="ad-offer-form">
                        <textarea placeholder="Napisz wiadmość do pracodawcy..."></textarea>
                        <button type="submit" onclick="alert('Tu będzie funckja aplikowania')">Aplikuj</button>
                    </form> 
                </div>
            </div>    
        </main>
    </div>
@endsection