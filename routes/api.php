<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalenderController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tablebordbyuser/{id}', [CalenderController::class, 'tablebordbyuser'])->name('tablebordbyuser');
Route::post('/updateprofiluser', [CalenderController::class, 'updateprofiluser']);
Route::post('/delete/{id}', [CalenderController::class, 'delete']);
