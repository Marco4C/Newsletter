<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
	<title>Newsletter</title>
</head>

<body>
	<form action="/novo_cadastro" method="post">
		<div class="container">
			<div class="row">
				<div class="col">
					<input class="form-control" type="text" name="nome" placeholder="Nome">
				</div>
				<div class="col">
					<input class="form-control" type="email" name="email" placeholder="email@email.com">
				</div>
			</div>
			<div class="row">
				<div class="col">
					<input class="form-control" type="tel" name="celular" placeholder="(99) 99999-9999">
				</div>
				<div class="col">
					<input class="form-control" type="text" name="empresa" placeholder="Empresa">
				</div>
			</div>
			<div class="row">
				<div class="col">
					<select class="form-control" name="cargo">
						<option value="">Desenvolvedor PHP</option>
					</select>
				</div>
				<div class="col">
					<select class="form-control" name="setor">
						<option value="Informatica">Informatica</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<input class="btn btn-primary" type="submit" value="Enviar">
				</div>
				<div class="col">
					<div>
						<input type="checkbox" name="Informacoes" checked>
						<span>Quero receber mais informações sobre esse tema</span>
					</div>
					<div>
						<input type="checkbox" name="newsLetter" checked>
						<span>Quero Receber a NewsLetter</span>
					</div>
					<div>
						<input type="checkbox" name="termosprivacidade" checked>
						<span>Aceito os termos de serviço e li a política de privacidade. Concordo em
							compartilhar meus dados com o organizador do evento e receber informações.</span>
					</div>
				</div>
			</div>
		</div>
	</form>
</body>

</html>
