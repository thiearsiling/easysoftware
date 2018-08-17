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
<h1 class="page-header">Cadastro de Empresa</h1>
	<div class="container">
		<span class="text-info">Os campos marcados com asterísco (*) são de preenchimento obrigatório
		</span>
<br>
		<form name="form1" action="" method="post">
			<div class="row">
				<div class="col-lg-3">
					<div class="form-group">
						<label>* Nome</label>
						<input class="form-control" type="text" id="nm_empresa_id" name="nm_empresa" required>
<p id="nm_empresa" class="text-info" style="display: none">Nome é obrigatório</p>
					</div>
</div>
				<div class="col-lg-3">
					<div class="form-group">
						<label>* CNPJ</label>
						<input class="form-control" type="text" id="nr_cnpj_id" name="nr_cnpj" required>
<p id="nr_cnpj_invalido" class="text-info">CNPJ inválido</p>



					</div>
</div>
				<div class="col-lg-3">
					<div class="form-group">
						<label>* Razão Social</label>
						<input class="form-control" type="text" id="ds_razaosocial_id" name="ds_razaosocial" required>
<p id="ds_razaosocial" class="text-info" style="display: none">Razão social é obrigatório</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-9">
					<div class="btn-group" role="group" aria-label="opções">
						<input class="btn btn-primary" type="reset" value="Limpar dados">
						<input id="btnOk" class="btn btn-primary" type="button" value="Ok" disabled=true>
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
<script src="../vendor/script/sweetalert.min.js"></script>
<script src="../script/_global/completadata.js"></script>
<script src="../script/_global/ajax.js"></script>
<script src="../script/_global/validacnpj.js"></script>
<script src="../script/empresa/validarcnpj.js"></script>
<script src="../script/empresa/salvar.js"></script>

</body>
</html>