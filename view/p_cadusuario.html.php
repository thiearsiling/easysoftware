<!DOCTYPE html>
<html lang="pt-br" ng-app>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Easy Software</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="aplicativo para pedido de água mineral e gás de cosinha">
	<meta name="author" content="josé ricardo gomes de oliveira júnior">
    <link rel="stylesheet" href="../vendor/css/bootstrap.css">  
</head>

<body>

<?php
include("../view/menu.html.php");
?>

<main class="w-100 p-1 mb-3">
    <div class="container">
        <div class="col-10 offset-1">
            <div class="card">
                <div class="card-header">
                    <h3>Cadastro de Paciente</h3>
                </div>
                <div class="card-body">
                    <form name="form1" action="" method="post">
                        <div class="row">
                            <div class="col-10 offset-1">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input class="form-control" type="text" id="nm_usuario_id" name="nm_usuario" ng-model="usuario.nm_usuario" required>
						            <p class="text-muted small" ng-show="form1.nm_usuario.$error.required">Nome é obrigatório</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4 offset-1">
                                <label>Data de nascimento</label>
                                <input class="form-control" type="text" id="dt_nascimento_id" name="dt_nascimento" ng-model="usuario.dt_nascimento" onKeyPress="completaData()" required>
                                <p class="text-muted small" ng-show="form1.dt_nascimento.$error.required">Data de nascimento é obrigatório</p>
                            </div>
                            <div class="col-6">
                                <label>E-mail</label>
                                <input class="form-control" type="email" id="email_id" name="email" ng-model="usuario.email" required>
                                <p class="text-muted small" ng-show="form1.email.$error.required">E-mail é obrigatório</p>
                                <p class="text-muted small" ng-show="form1.email.$error.email">Formato de e-mail inválido. O formato deve ser example@example.com</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-10 offset-1">
                                <div class="form-group">
                                    <label>Perfil</label>
                                    <select class="form-control" id="cd_perfil_id" name="cd_perfil" ng-model="usuario.cd_perfil" required>
                                        <?php while($dados=MYSQLI_FETCH_ARRAY($database->queryi)){ ?>
                                            <option value="<?php echo $dados["cd_perfil"];?>"><?php echo $dados["nm_perfil"];?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-10 offset-1">
                                <div class="float-right">
                                    <input class="btn btn-warning" type="reset" value="Limpar dados">
                                    <input class="btn btn-success" id="btnOk" type="button" value="Ok" ng-disabled="!form1.$valid">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>


<!-- <h1 class="page-header">Cadastro de Usuário</h1>
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
	</div> -->

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