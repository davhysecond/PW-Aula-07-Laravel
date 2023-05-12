@extends('layouts.main')

@section('title', 'Formulario | Cadastrar')

@section('content')
    <div class="row">
        <div class="card mb-3 col-12">
            <div class="card-body">
                <h5 class="card-title">Cadastrar - Agendamento de Potenciais Clientes</h5>
                <p class="card-text">Sistema utilizado para agendamento de serviços.</p>
                <form method="post" action="/client" id="form" name="form">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nome:</label>
                        <input type="text" class="form-control" name="nome" required id="txtNome">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Telefone:</label>
                        <input type="tel" class="form-control" required name="telefone" id="txtTelefone" placeholder="(xx)xxxxx-xxxx">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Origem:</label>
                        <select class="form-control" required name="origem" id="txtOrigem">
                            <option>Celular</option>
                            <option>Fixo</option>
                            <option>Whatsapp</option>
                            <option>Facebook</option>
                            <option>Instagram</option>
                            <option>Google Meu Negocio</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Data do Contato:</label>
                        <input type="date" class="form-control" required name="data_contato" id="txtDataContato">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Observação</label>
                        <textarea class="form-control" name="observacao" id="txtObservacao" rows="3"></textarea>
                    </div>
                    <br>
                    <button type="submit" id="btnInserir" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection