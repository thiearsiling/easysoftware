<!DOCTYPE html>
<html lang="pt-br" ng-app>
<head>
	<title>Sistema EasyCare</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../vendor/css/bootstrap.min.css">
  <link rel="stylesheet" href="../vendor/css/paper.css">
</head>
<body>
<?php
include("../view/menu.html.php");
?>
<h1 class="page-header">Edição de Paciente</h1>
	<div class="container">
<?php
if (!isset($_POST["cd_paciente"]))
{
?>

		<form role="search" name="form1" action="" method="post">
			<div class="form-group">
				<label>Prontuário</label>
				<input class="form-control" type="text" name="cd_paciente">
			</div>
			<div class="form-group">
				<label>Nome</label>
				<input class="form-control" type="text" name="nm_paciente">
			</div>
			<div class="form-group">
				<label>Data de nascimento</label>
				<input class="form-control" type="text" placeholder="formato dd/mm/aaaa" name="dt_nascimento">
			</div>
			<div class="btn-group" role="group" aria-label="opções">
				<input class="btn btn-primary" type="reset" value="Limpar dados">
				<input class="btn btn-primary" type="submit" value="Ok" ng-disabled="!form1.$valid">
			</div>
		</form>
<?
}
?>
	</div>

<script src="../vendor/script/jquery-3.1.1.min.js"></script>
<script src="../vendor/script/bootstrap.min.js"></script>
<script src="../vendor/script/loadingoverlay.js"></script>
<script src="../vendor/script/loader.js"></script>
<script src="../vendor/script/angular.min.js"></script>
<script src="../script/_global/completadata.js"></script>
<script src="../script/_global/ajax.js"></script>

</body>
</html>