<?php

use App\Http\Controllers\RoomController;
use App\Http\Controllers\HoutelController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\CityController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home.index');
});

Route::get('/city', [CityController::class, 'index']);
Route::get('/bank', [BankController::class, 'index']);
Route::get('/houtel', [HoutelController::class, 'index']);
Route::get('/room', [RoomController::class, 'index']);

// City
Route::get('city/tambah', [CityController::class, 'create']); //tambah data
Route::post('city/store', [CityController::class, 'store']); //tambah post

// Houtel
Route::get('houtel/tambah', [HoutelController::class, 'create']); //tambah data
Route::post('houtel/store', [HoutelController::class, 'store']); //tambah post

// Bank
Route::get('bank/tambah', [BankController::class, 'create']); //tambah data
Route::post('bank/store', [BankController::class, 'store']); //tambah post

// Room
Route::get('room/tambah', [RoomController::class, 'create']); //tambah data
Route::post('room/store', [RoomController::class, 'store']); //tambah post
