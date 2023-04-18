<?php

namespace App\Http\Controllers;

use App\Models\agendamentos;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function store(Request $request) {
        $primeiroRegistro = new agendamentos();
        $primeiroRegistro->nome = $request->nome;
        $primeiroRegistro->telefone = $request->telefone;
        $primeiroRegistro->origem = $request->origem;
        $primeiroRegistro->data_contato = $request->data_contato;
        $primeiroRegistro->observacao = $request->observacao;
        $primeiroRegistro->save();

        return redirect('/');
    }
}
