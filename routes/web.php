<?php

use App\Http\Controllers\HotelController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('hotels')->group(function (){
    Route::get('/',[HotelController::class,"index"])->name("hotels.list");
    Route::get('/create',[HotelController::class,"create"])->name("hotels.create");
    Route::post('/create',[HotelController::class,"store"])->name("hotels.store");
    Route::get('/{id}/update',[HotelController::class,"edit"])->name("hotels.edit");
    Route::post('/{id}/update',[HotelController::class,"update"])->name("hotels.update");
    Route::get('/{id}/delete',[HotelController::class,"destroy"])->name("hotels.delete");
});
