<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\Auth\Authentification;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('registerform', [Authentification::class, 'registerform'])->name('registerform');

Route::get('/login', [Authentification::class, 'loginform'])->name('loginform');



Route::post('login', [Authentification::class, 'login'])->name('login');
Route::post('register', [Authentification::class, 'register'])->name('register');





Route::get('/home', [CalenderController::class, 'home'])->middleware(['auth'])->name('home');
Route::get('/calendar-event', [CalenderController::class, 'index'])->middleware(['auth'])->name('index');
Route::post('/calendar-crud-ajax', [CalenderController::class, 'calendarEvents'])->middleware(['auth'])->name('calendarEvents');

Route::middleware(['auth'])->group(function () {


    Route::get('logout', [Authentification::class, 'logout']);
});

