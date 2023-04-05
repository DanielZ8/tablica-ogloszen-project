<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OgloszeniaController;

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

//LOGIN
Route::get('/login', function () {
    return view('auth/login');
});

//REGISTER
Route::get('/register', function () {
    return view('auth/register');
});

//COMPANY_PANNEL
Route::get('/company', function () {
    return view('company/company_info');
});

Route::get('/company/add', function () {
    return view('company/company_add_ogloszenie');
});

Route::get('/company/active', function () {
    return view('company/company_active_ogloszenie');
});

Route::get('/company/zgloszenia', function () {
    return view('company/company_zgloszenia');
});

//EMPLOYEE_PANEL
Route::get('/employee', function () {
    return view('employee/employee_info');
});

//OGLOSZENIA
Route::get('/ogloszenia', [OgloszeniaController::class, 'index']) -> name ('ogloszenia');
Route::get('/ogloszenie/{id}', [OgloszeniaController::class, 'show']) -> name ('ogloszenie');

/* Route::get('/ogloszenie', function(){
    return view('ogloszenia/ogloszenie');
});
 */
//CLIENT_PANNEL
Route::get('/client', function () {
    return view('company/company_info');
});

//AKTUALNOSCI
Route::get('/aktualnosci', function () {
    return view('aktualnosci');
});

//O_NAS
Route::get('/onas', function () {
    return view('onas');
});