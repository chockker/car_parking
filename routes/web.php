<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParkController;

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
Route::get('/park',[ParkController::class,'index'])->name('park');
Route::get('/park/rent/{id}',[ParkController::class,'rent'])->name('rent');
Route::post('/park/update/{id}',[ParkController::class,'update'])->name('updateRent');
