<!DOCTYPE html>
<html>
<head>
	<meta name="format-detection" content="telephone=no">
	<meta name="msapplication-tap-highlight" content="no">
	<meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
	<meta name="color-scheme" content="light dark"> 
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css"> 
	<link rel="stylesheet" href="css/estilo.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="js/funcoes.js"></script>
	<title>Formulario | Consultar</title>

    <!-- Styles -->
    @vite([
        'resources/js/app.js',
        'resources/css/app.css',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])

</head> 
<body> 
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary col-12">
                <div class="container">
                    <a class="navbar-brand" href="#">SISTEMA WEB</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Cadastrar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/consultar">Consultar</a>
                            </li>
                        </ul>
                    </div>
                </div>
			</nav>
		</div>
		<div class="row">
			<div class="card mb-3 col-12 d-flex justify-content-center">
				<div class="card-body w-100 m-auto">
                    <h4 class="card-title">Consultar - Contatos Agendados</h5>
                    <table class="w-100 table table-striped mt-4">
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
                            @foreach ($agendamentos as $agendamento)
                                <tr class="cursor-pointer">
                                    <th scope="row">{{ $agendamento->id }}</th>
                                    <td>{{ $agendamento->nome }}</td>
                                    <td>{{ $agendamento->telefone }}</td>
                                    <td>{{ $agendamento->origem }}</td>
                                    <td>{{ $agendamento->data_contato }}</td>
                                    <td>{{ $agendamento->observacao }}</td>
                                    <td>
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
	</div>
</body>
</html>