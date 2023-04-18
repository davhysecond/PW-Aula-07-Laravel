<?php

use App\Models\agendamentos;
use App\Http\Controllers\Controller;
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

Route::get('/consultar', function () {
    $primeiroRegistro = new agendamentos();
    $primeiroRegistro->nome = "Rodrigo Alves";
    $primeiroRegistro->telefone = "(11)98522-9966";
    $primeiroRegistro->origem = "Whatsapp";
    $primeiroRegistro->data_contato = "2023-03-28";
    $primeiroRegistro->observacao = "Entrou em contato no dia 10.03.2023 interessado em um orçamento para formatação e instalação do Sistema Operacional Windows 10";
    $primeiroRegistro->save();
    return view('consultar');
});

Route::get('/', function () {
    return view('index');
});

Route::post('/post', [Controller::class, 'store']);