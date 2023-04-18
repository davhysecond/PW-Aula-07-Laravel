<?php

namespace App\Http\Controllers;

use App\Models\agendamentos;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function store(Request $request) {
        $primeiroRegistro = new agendamentos();
        $primeiroRegistro->nome = $request->nome;
        $primeiroRegistro->telefone = $request->telefone;
        $primeiroRegistro->origem = $request->origem;
        $primeiroRegistro->data_contato = $request->data_contato;
        $primeiroRegistro->observacao = $request->observacao;
        $primeiroRegistro->save();

        return redirect('/consultar');
    }
}
