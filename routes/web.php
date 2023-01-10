<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalenderController;
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

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [CalenderController::class, 'loginform'])->name('loginform');

Route::middleware(['auth'])->group(function () {

    Route::get('/calendar-event', [CalenderController::class, 'index'])->name('index');

    Route::post('/calendar-crud-ajax', [CalenderController::class, 'calendarEvents'])->name('calendarEvents');

    Route::get('logout', [CalenderController::class, 'logout'])->name('logout');
    Route::get('bord', [CalenderController::class, 'bord'])->name('bord');
    Route::get('tablebord', [CalenderController::class, 'tablebord'])->name('tablebord');

     Route::get('updateprofil/{id}', [CalenderController::class, 'updateprofil'])->name('updateprofil');
     Route::post('/updateprofiluser', [CalenderController::class, 'updateprofiluser']);

     Route::get('/delete/{id}', [CalenderController::class, 'delete']);

});

