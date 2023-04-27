<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OgloszeniaController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Panels\CompanyPanelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//STRONA GLOWNA
Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['guest']], function () {
    //only guest users can access these routes

    //LOGIN
    Route::get('/login', [LoginController::class,  'index']) -> name('login');
    Route::post('/login', [LoginController::class, 'store']);

    //REGISTER
    Route::get('/register', [RegisterController::class, 'index']) -> name('register') ;
    Route::post('/register', [RegisterController::class, 'store']);
});


//LOGOUT
Route::post('/logout', [LogoutController::class, 'logout']) -> name('logout');


//COMPANY_PANNEL
Route::get('/company', [CompanyPanelController::class, 'private']) -> name ('inf') -> can('firma');

Route::get('/company/add', function () {
    return view('company/company_add_ogloszenie');
}) -> can('firma');

Route::post('/company/add', [OgloszeniaController::class, 'store']) -> can('firma'); 

Route::get('/company/info-update', function () {
    return view('company/company_info_update');
})-> can('firma');

Route::get('/company/active', [CompanyPanelController::class, 'index']) -> name ('active') -> can('firma');

Route::get('/company/zgloszenia', function () {
    return view('company/company_zgloszenia');
}) -> can('firma');

//EMPLOYEE_PANEL
Route::get('/employee', function () {
    return view('employee/employee_info');
}) -> can('pracownik');

//OGLOSZENIA
Route::get('/ogloszenia', [OgloszeniaController::class, 'index']) -> name ('ogloszenia');
Route::get('/ogloszenia/search', [OgloszeniaController::class, 'search']) -> name ('search_ogloszenia');
Route::get('/ogloszenie/{id}', [OgloszeniaController::class, 'show']) -> name ('ogloszenie');


//AKTUALNOSCI
Route::get('/aktualnosci', function () {
    return view('aktualnosci');
});

//O_NAS
Route::get('/onas', function () {
    return view('onas');
});