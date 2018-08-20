<!DOCTYPE html>
<html lang="pt-br" ng-app>
	<head>
   	<!-- Template  (Ricardo Gomes & Rodrigo Bruno) -->
		<meta charset="utf-8">
		<title>Easy Software</title>
		<meta http-equiv="content-language" content="pt-br">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Fundação Altino Ventura" />
        <meta name="keywords" content="Hospital, sus, doente, olhos, visão">
        <meta name="author" content="José Ricardo Gomes & Rodrigo Bruno de Moura Lima" />

		
		<link rel="stylesheet" href="../vendor/css/bootstrap.min.css">
		<link rel="stylesheet" href="../vendor/css/paper.css">
			</head>
<body>
<div class="container">
	<div class="row">
		
			<span>Para autenticar-se, favor informar e-mail e senha.</span>
		
	</div>

		<form name="form1" action="" method="post">
	<div class="row">
<div class="col-lg-9">
			<div class="form-group">
				<label class="control-label">e-mail:</label>
				<input class="form-control" type="email" name="email" ng-model="cliente.email" required>
				<p class="text-info" ng-show="form1.email.$error.required">E-mail é obrigatório</p>
				<p class="text-info" ng-show="form1.email.$error.email">Formato de e-mail inválido. O formato deve ser example@example.com</p>
			</div>
			<div class="form-group">
				<label class="control-label">Senha:</label>
				<input class="form-control" type="password" name="ds_password" ng-model="cliente.ds_password" ng-minlength="4" ng-maxlength="10" required>
				<p class="text-info" ng-show="form1.ds_password.$error.required">Você deve informar a senha</p>
				<p class="text-info" ng-show="form1.ds_password.$error.minlength">Senha deve conter pelo menos 4 caracteres</p>
				<p class="text-info" ng-show="form1.ds_password.$error.maxlength">Senha não pode conter mais de 10 caracteres</p>
			</div>
<div class="form-group">
<label class="control-label">Empresa</label>
<select class="form-control" name="empresa" ng-model="usuario.empresa" required>
<?php
while($dados=MYSQLI_FETCH_ARRAY($auth->queryi)){
print "<option value='".$dados["id"]."'>".$dados["nm_empresa"]."</option>";
}
?>
</select>
						<p class="text-info" ng-show="form1.empresa.$error.required">Selecione uma empresa</p>
</div>
			<button title="Entrar" type="submit" class="btn btn-success" ng-disabled="!form1.$valid"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Entrar</button>
	</div>
</div>
		</form>
</div>

<footer>
	<div class="container">
		<div class="row">
			<legend></legend>
		    ©<?php echo date('Y');?> Easy Software. Todos os direitos reservados.
		</div>
	</div>
</footer>

<script src="../vendor/script/angular.min.js"></script>
<script src="../vendor/script/jquery-3.1.1.min.js"></script>
<script src="../vendor/script/bootstrap.min.js"></script>
<script src="../vendor/script/loadingoverlay.js"></script>
<script src="../vendor/script/loader.js"></script>


</body>
</html>
