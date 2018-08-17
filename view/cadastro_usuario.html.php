<!DOCTYPE html>
<html lang="pt-br" ng-app>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Easy Software</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="aplicativo para pedido de água mineral e gás de cosinha">
	<meta name="author" content="josé ricardo gomes de oliveira júnior">
  <link rel="stylesheet" href="../vendor/css/bootstrap.min.css">
  <link rel="stylesheet" href="../vendor/css/paper.css">
</head>
<body>
	<div class="container">
		<ul class="list">
			<li><a href="index.php">Início</a></li>
		</ul>
	</div>

<h1 class="page-header">Cadastro de Usuário</h1>
	<div class="container">
		<span class="text-info">Os campos marcados com asterísco (*) são de preenchimento obrigatório</span>
<br>
		<form name="form1" action="" method="post">
			<div class="row">
				<div class="col-lg-3">
					<div class="form-group">
						<label>* Nome</label>
						<input class="form-control" type="text" id="nm_usuario_id" name="nm_usuario" ng-model="usuario.nm_usuario" required>
						<p class="text-info" ng-show="form1.nm_usuario.$error.required">Nome é obrigatório</p>
					</div>
</div>
<div class="col-lg-3">
					<div class="form-group">
						<label>* Data de nascimento</label>
						<input class="form-control" type="text" id="dt_nascimento_id" name="dt_nascimento" ng-model="usuario.dt_nascimento" onKeyPress="completaData()" required>
						<p class="text-info" ng-show="form1.dt_nascimento.$error.required">Data de nascimento é obrigatório</p>
					</div>
</div>
<div class="col-lg-3">
					<div class="form-group">
						<label>* E-mail</label>
						<input class="form-control" type="email" id="email_id" name="email" ng-model="usuario.email" required>
						<p class="text-info" ng-show="form1.email.$error.required">E-mail é obrigatório</p>
						<p class="text-info" ng-show="form1.email.$error.email">Formato de e-mail inválido. O formato deve ser example@example.com</p>
					</div>
</div>
<div class="col-lg-3">
					<div class="form-group">
						<label>* Crie uma senha</label>
						<input class="form-control" type="password" id="ds_senha_id" name="ds_senha" ng-model="usuario.ds_senha" ng-minlength="4" ng-maxlength="10" required>
						<p class="text-info" ng-show="form1.ds_senha.$error.required">Você deve criar uma senha</p>
						<p class="text-info" ng-show="form1.ds_senha.$error.minlength">Senha deve conter pelo menos 4 caracteres</p>
						<p class="text-info" ng-show="form1.ds_senha.$error.maxlength">Senha não pode conter mais de 10 caracteres</p>
					</div>
				</div>
</div>
			<div class="row">
				<div class="col-lg-9 pull-right">
					<div class="btn-group" role="group" aria-label="opções">
						<input class="btn btn-primary" type="reset" value="Limpar dados">
						<input class="btn btn-primary" id="btnOk" type="button" value="Ok" ng-disabled="!form1.$valid">
					</div>
				</div>
			</div>
		</form>
	</div>

<script src="../vendor/script/jquery-3.1.1.min.js"></script>
<script src="../vendor/script/bootstrap.min.js"></script>
<script src="../vendor/script/loadingoverlay.js"></script>
<script src="../vendor/script/loader.js"></script>
<script src="../vendor/script/angular.min.js"></script>
<script src="../script/_global/completadata.js"></script>
<script src="../script/_global/ajax.js"></script>
<script src="../script/usuario/salvar.js"></script>
</body>
</html>