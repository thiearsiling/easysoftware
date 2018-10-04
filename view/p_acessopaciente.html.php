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

    
    <link rel="stylesheet" href="../vendor/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="../vendor/css/paper.css"> -->
</head>
<body class="bg-dark">
<div class="container mt-5">

    <div class="col-10 offset-1">
        <div class="card">
            <div class="card-header">Para autenticar-se, favor informar e-mail e senha.</div>
            <div class="card-body">
                <form name="form1" action="" method="post">
                    <div class="row">
                        <div class="col-10 offset-1">
                            <div class="form-group">
                                <label class="control-label">CPF:</label>
                                <input class="form-control" type="text" name="nr_cpf" ng-model="cliente.nr_cpf" required>
                                <p class="small text-warning" ng-show="form1.nr_cpf.$error.required">Número do CPF é obrigatório</p>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Senha:</label>
                                <input class="form-control" type="password" name="ds_password" ng-model="cliente.ds_password" ng-minlength="4" ng-maxlength="10" required>
                                <p class="small text-warning" ng-show="form1.ds_password.$error.required">Você deve informar a senha</p>
                                <p class="small text-warning" ng-show="form1.ds_password.$error.minlength">Senha deve conter pelo menos 4 caracteres</p>
                                <p class="small text-warning" ng-show="form1.ds_password.$error.maxlength">Senha não pode conter mais de 10 caracteres</p>
                            </div>
			                <button title="Entrar" type="submit" class="btn btn-success float-right" ng-disabled="!form1.$valid"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Entrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
	<!-- <div class="row">
		
			<span>Para autenticar-se, favor informar o número do CPF e senha recebida por e-mail.</span>
		
	</div>

		<form name="form1" action="" method="post">
	<div class="row">
<div class="col-lg-9">
			<div class="form-group">
				<label class="control-label">CPF:</label>
				<input class="form-control" type="text" name="nr_cpf" ng-model="cliente.nr_cpf" required>
				<p class="text-info" ng-show="form1.nr_cpf.$error.required">Número do CPF é obrigatório</p>
			</div>
			<div class="form-group">
				<label class="control-label">Senha:</label>
				<input class="form-control" type="password" name="ds_password" ng-model="cliente.ds_password" ng-minlength="4" ng-maxlength="10" required>
				<p class="text-info" ng-show="form1.ds_password.$error.required">Você deve informar a senha</p>
				<p class="text-info" ng-show="form1.ds_password.$error.minlength">Senha deve conter pelo menos 4 caracteres</p>
				<p class="text-info" ng-show="form1.ds_password.$error.maxlength">Senha não pode conter mais de 10 caracteres</p>
			</div>
			<button title="Entrar" type="submit" class="btn btn-success" ng-disabled="!form1.$valid"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Entrar</button>
	</div>
</div>
		</form>
</div> -->
<?php
include("../view/footer.html.php");
?>

<script src="../vendor/script/angular.min.js"></script>
<script src="../vendor/script/jquery-3.1.1.min.js"></script>
<script src="../vendor/script/bootstrap.min.js"></script>
<script src="../vendor/script/loadingoverlay.js"></script>
<script src="../vendor/script/loader.js"></script>


</body>
</html>
