<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Sistema EasyCare</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../vendor/css/bootstrap.min.css">
  <link rel="stylesheet" href="../vendor/css/paper.css">
</head>
<body>
<h1 class="page-header">Compartilhamento de Arquivo</h1>
	<div class="container">
		<span class="text-info">Você deverá informar uma senha para que o destino possa acessar os documentos.</span>

<br>
		<form name="form1" action="" method="post">
<input type="hidden" id="cd_paciente_id" name="cd_paciente" value="<?php echo $_GET['cd_paciente'] ?>">
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label>* E-mail</label>
						<input class="form-control" type="email" id="ds_email_id" name="ds_email" value="<?php echo $result['email'] ?>" required>
<p id="ds_email" class="text-info" style="display: none">O e-mail não pode ficar em branco e deve estar no formato example@example.com</p>

					</div>
</div>
				<div class="col-lg-6">
					<div class="form-group">
						<label>* Crie uma senha</label>
						<input class="form-control" type="password" id="ds_senha_id" name="ds_senha" required>
<p id="ds_senha" class="text-info" style="display: none">Você deve digitar uma senha que tenha no mínimo 8 caracteres</p>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-9">
					<div class="btn-group" role="group" aria-label="opções">
						<input class="btn btn-primary" type="reset" value="Limpar dados">
						<input id="btnOk" class="btn btn-primary" type="button" value="Ok" disabled >
					</div>
				</div>
			</div>
		</form>
	</div>
<?php
include("../view/footer.html.php");
?>

<script src="../vendor/script/jquery-3.1.1.min.js"></script>
<script src="../vendor/script/bootstrap.min.js"></script>
<script src="../vendor/script/loadingoverlay.js"></script>
<script src="../vendor/script/loader.js"></script>
<script src="../script/_global/ajax.js"></script>
<script src="../script/compartpaciente/validador.js"></script>
<script src="../script/compartpaciente/salvar.js"></script>

</body>
</html>