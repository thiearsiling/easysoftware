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
<h1 class="page-header">Editar Usuário</h1>
	<div class="container">
				<form name="form1" action="" method="post">
<input type="hidden" id="cd_usuario_id" name="cd_usuario" value="<?php echo $_GET['cd_usuario'] ?>">
					<div class="form-group">
<label>* Perfil</label>
<select class="form-control" id="cd_perfil_id" name="cd_perfil" ng-model="usuario.cd_perfil" required>
<?php
while($dados=MYSQLI_FETCH_ARRAY($database->queryi)){
print "<option value='".$dados["cd_perfil"]."'>".$dados["nm_perfil"]."</option>";
}
?>
</select>
						<p class="text-info" ng-show="form1.cd_perfil.$error.required">Selecione um perfil</p>


					</div>

				<input id="btnEditar" class="btn btn-primary" type="button" value="Ok" ng-disabled="!form1.$valid">
				</form>
	</div>
<?php
include("../view/footer.html.php");
?>
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