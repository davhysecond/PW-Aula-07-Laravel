@extends('layouts.main')

@section('title', 'Formulario | Editar')

@section('content')
    <div class="row">
        <div class="card mb-3 col-12">
            <div class="card-body">
                <h5 class="card-title">Editar Agendamento do cliente</h5>
                <p class="card-text">Sistema utilizado para agendamento de serviços.</p>
        <form method="POST" action="/atualizar/{{ $agendamento->id }}" id="form" name="form">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleFormControlInput1">Nome:</label>
                <input value="{{ $agendamento->nome }}" type="text" class="form-control" name="nome" required id="txtNome">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Telefone:</label>
                <input value="{{ $agendamento->telefone }}" type="tel" class="form-control" required name="telefone" id="txtTelefone" placeholder="(xx)xxxxx-xxxx">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Origem:</label>
                <select class="form-control" required name="origem" id="txtOrigem">
                    <option>Celular</option>
                    <option {{ $agendamento->origem === 'Fixo' ? "selected" : '' }}>Fixo</option>
                    <option {{ $agendamento->origem === 'Whatsapp' ? "selected" : '' }}>Whatsapp</option>
                    <option {{ $agendamento->origem === 'Facebook' ? "selected" : '' }}>Facebook</option>
                    <option {{ $agendamento->origem === 'Instagram' ? "selected" : '' }}>Instagram</option>
                    <option {{ $agendamento->origem === 'Google Meu Negocio' ? "selected" : '' }}>Google Meu Negocio</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Data do Contato:</label>
                <input value="{{ $agendamento->data_contato }}" type="date" class="form-control" required name="data_contato" id="txtDataContato">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Observação</label>
                <textarea class="form-control" name="observacao" id="txtObservacao" rows="3">{{ $agendamento->observacao }}"</textarea>
            </div>
            <br>
            <button type="submit" id="btnInserir" class="btn btn-primary">Atualizar</button>
        </form>
            </div>
        </div>
    </div>
@endsection