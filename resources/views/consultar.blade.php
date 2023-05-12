@extends('layouts.main')

@section('title', 'Formulario | Consultar')

@section('content')
    <div class="row">
    <div class="card mb-3 col-12 d-flex justify-content-center">
        <div class="card-body w-100 m-auto">
            <h4 class="card-title">Consultar - Contatos Agendados</h5>
            @if(session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <table class="w-100 table table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Origem</th>
                        <th scope="col">Contato</th>
                        <th scope="col">Observacão</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($agendamentos as $agendamento)
                        <tr class="cursor-pointer">
                            <th scope="row">{{ $agendamento->id }}</th>
                            <td>{{ $agendamento->nome }}</td>
                            <td>{{ $agendamento->telefone }}</td>
                            <td>{{ $agendamento->origem }}</td>
                            <td>{{ $agendamento->data_contato }}</td>
                            <td>{{ $agendamento->observacao }}</td>
                            <td class="d-flex">
                                <a class="text-dark" href="/editar/{{ $agendamento->id }}">
                                    <svg style="width: 20px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </a>
                                <form action="/client/{{ $agendamento->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn d-flex">
                                        <svg  style="width: 20px;" xmlns="http://www.w3.org/2000/svg" fill="auto" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
