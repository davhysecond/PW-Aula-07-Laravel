<?php

use App\Models\agendamentos;
use App\Http\Controllers\ClientController;
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


Route::get('/consultar', [ClientController::class, 'index']);

Route::get('/', function () {
    return view('index');
});

Route::post('/client', [ClientController::class, 'store']);