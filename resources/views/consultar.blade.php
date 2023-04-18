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
				<div class="card-body w-50 m-auto">
                    <h5 class="card-title">Consultar - Contatos Agendados</h5>
                    <table class="w-100">
                        <thead class="bg-primary">
                            <tr>
                                <th class="p-3">Nome</th>
                                <th class="p-3">Telefone</th>
                                <th class="p-3">Origem</th>
                                <th class="p-3">Contato</th>
                                <th class="p-3">Observacão</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($agendamentos as $agendamento)
                                <tr>
                                    <td class="border border-secondary p-2">{{ $agendamento->nome }}</td>
                                    <td class="border border-secondary p-2">{{ $agendamento->telefone }}</td>
                                    <td class="border border-secondary p-2">{{ $agendamento->origem }}</td>
                                    <td class="border border-secondary p-2">{{ $agendamento->data_contato }}</td>
                                    <td class="border border-secondary p-2">{{ $agendamento->observacao }}</td>
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