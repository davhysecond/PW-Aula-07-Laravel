<?php

namespace App\Http\Controllers;

use App\Models\agendamentos;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() {
        $agendamentos = agendamentos::all();
        return view('consultar', ['agendamentos' => $agendamentos]);
    }

    public function store(Request $request) {
        $agendamentos = new agendamentos();
        $agendamentos->nome = $request->nome;
        $agendamentos->telefone = $request->telefone;
        $agendamentos->origem = $request->origem;
        $agendamentos->data_contato = $request->data_contato;
        $agendamentos->observacao = $request->observacao;
        $agendamentos->save();

        return redirect('/consultar');
    }
}
