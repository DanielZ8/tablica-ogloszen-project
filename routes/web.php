<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OgloszeniaController;
use App\Http\Controllers\ZgloszeniaController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Panels\PanelController;

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
Route::get('/company', [PanelController::class, 'private']) -> name ('inf') -> can('firma');

Route::get('/company/add', [PanelController::class, 'index_company_add']) -> name ('company_add') -> can('firma');

Route::post('/company/add', [OgloszeniaController::class, 'store']) -> can('firma'); 

Route::get('/company/info-update', function () {
    return view('company/company_info_update');
})-> can('firma');
Route::post('/company/info-update', [PanelController::class, 'store']) -> name('company-info-update') -> can('firma');


Route::get('/company/logo-update', [PanelController::class, 'index_logo_update']) -> name('company-logo-update') -> can('firma');
Route::post('/company/logo-update', [PanelController::class, 'store_logo']) -> can('firma');

Route::get('/company/active', [PanelController::class, 'index']) -> name ('active') -> can('firma');

Route::get('/company/zgloszenia', [PanelController::class, 'index_zgloszenia']) -> name ('company_zgloszenia') -> can('firma');
Route::get('/company/zgloszenia/oczekujace', [PanelController::class, 'index_zgloszenia_oczekujace']) -> name ('company_zgloszenia_oczekujace') -> can('firma');
Route::get('/company/zgloszenia/zaakceptowane', [PanelController::class, 'index_zgloszenia_zaakceptowane']) -> name ('company_zgloszenia_zaakceptowane') -> can('firma');
Route::get('/company/zgloszenia/odrzucone', [PanelController::class, 'index_zgloszenia_odrzucone']) -> name ('company_zgloszenia_odrzucone') -> can('firma');


//EMPLOYEE_PANEL
Route::get('/employee', function () {
    return view('employee/employee_info');
}) -> can('pracownik');

Route::get('/employee/info-update', function () {
    return view('employee/employee_info_update');
})-> can('pracownik');
Route::post('/employee/info-update', [PanelController::class, 'store']) -> name('employee-info-update') -> can('pracownik');

Route::get('/employee/logo-update', [PanelController::class, 'index_logo_update']) -> name('employee-logo-update') -> can('pracownik');
Route::post('/employee/logo-update', [PanelController::class, 'store_logo']) -> can('pracownik');

Route::get('/employee/zgloszenia', [PanelController::class, 'index_zgloszenia']) -> name ('employee_zgloszenia') -> can('pracownik');
Route::get('/employee/zgloszenia/oczekujace', [PanelController::class, 'index_zgloszenia_oczekujace']) -> name ('employee_zgloszenia_oczekujace') -> can('pracownik');
Route::get('/employee/zgloszenia/zaakceptowane', [PanelController::class, 'index_zgloszenia_zaakceptowane']) -> name ('employee_zgloszenia_zaakceptowane') -> can('pracownik');
Route::get('/employee/zgloszenia/odrzucone', [PanelController::class, 'index_zgloszenia_odrzucone']) -> name ('employee_zgloszenia_odrzucone') -> can('pracownik');



//OGLOSZENIA
Route::get('/ogloszenia', [OgloszeniaController::class, 'index']) -> name ('ogloszenia');
Route::get('/ogloszenia/search', [OgloszeniaController::class, 'search']) -> name ('search_ogloszenia');
Route::get('/ogloszenie/{id}', [OgloszeniaController::class, 'show']) -> name ('ogloszenie');
Route::post('/ogloszenie/{id}', [ZgloszeniaController::class, 'store']);
Route::get('/company/edit-ogloszenie', [OgloszeniaController::class, 'index_edit_ogloszenie']) -> name('company-edit-ogloszenie') -> can('firma');
Route::post('/company/edit-ogloszenie', [OgloszeniaController::class, 'edit_ogloszenie']) -> name('company-edit-ogloszenie') -> can('firma');
Route::post('/company/delete', [OgloszeniaController::class, 'delete_ogloszenie']) -> name('company-delete-ogloszenie') -> can('firma');


//AKTUALNOSCI
Route::get('/aktualnosci', function () {
    return view('aktualnosci');
});

//O_NAS
Route::get('/onas', function () {
    return view('onas');
});


//ZGLOSZENIE
Route::get('/zgloszenie/{id}', [ZgloszeniaController::class, 'show']) -> name ('zgloszenie');
Route::post('/zgloszenie/{id}', [ZgloszeniaController::class, 'update']);

//ZMIANA_DANYCH
Route::get('/change-password', [RegisterController::class, 'change_password_index'])->name ('change_password');
Route::post('/change-password', [RegisterController::class, 'change_password']);

Route::get('/change-email', [RegisterController::class, 'change_email_index'])->name ('change_email');
Route::post('/change-email', [RegisterController::class, 'change_email']);