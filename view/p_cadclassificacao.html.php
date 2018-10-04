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

<main class="w-100 p-1 mb-5">
    <div class="container">
        <div class="col-10 offset-1">
            <div class="card">
                <div class="card-header">
                    <h3>Cadastro de Classificações</h3>
                </div>
                <div class="card-body">
		            <form name="form1" action="" method="post">
                        <div class="row">
                            <div class="col-10 offset-1">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input class="form-control" type="text" id="nm_classificacao_id" name="nm_classificacao" ng-model="classificacao.nm_classificacao" required>
						            <p class="text-muted small" ng-show="form1.nm_classificacao.$error.required">Nome da classificação é obrigatório</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-10 offset-1">
                                <div class="form-group">
                                    <label>Descrição</label>
                                    <input class="form-control" type="text" id="ds_classificacao_id" name="ds_classificacao" ng-model="classificacao.ds_classificacao" required>
						            <p class="text-muted small" ng-show="form1.ds_classificacao.$error.required">Descrição da classificação é obrigatório</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 offset-1">
                                <div class="form-group">
                                    <label>Ativo?</label>
                                    <select class="custom-select" id="sn_ativo_id" name="sn_ativo" ng-model="classificacao.sn_ativo" required>
                                        <option value="s">Sim</option>
                                        <option value="n">Não</option>
                                    </select>
                                    <p class="text-muted small" ng-show="form1.sn_ativo.$error.required">Selecione a situação</p>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="form-group">
                                    <label>Libera para Paciente?</label>
                                    <select class="form-control" id="sn_libera_paciente_id" name="sn_libera_paciente" ng-model="classificacao.sn_libera_paciente" required>
                                        <option value="s">Sim</option>
                                        <option value="n">Não</option>
                                    </select>
                                    <p class="text-muted small" ng-show="form1.sn_libera_paciente.$error.required">Selecione se os arquivos pertensentes a esta classificação serão liberados para o paciente</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-10 offset-1">
                                <div class="form-group float-right">
                                    <input class="btn btn-warning" type="reset" value="Limpar dados">
						            <input class="btn btn-success" id="btnOk" type="button" value="Salvar" ng-disabled="!form1.$valid">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<!-- <h1 class="page-header">Cadastro de Classificação</h1>
	<div class="container">
		<span class="text-info">Os campos marcados com asterísco (*) são de preenchimento obrigatório</span>
<br>
		<form name="form1" action="" method="post">
<input type="hidden" id="cd_classificacao_id" name="cd_classificacao" value="<?php echo @$_GET['cd_classificacao'] ?>">
			<div class="row">
				<div class="col-lg-3">
					<div class="form-group">
						<label>* Nome</label>
						<input class="form-control" type="text" id="nm_classificacao_id" name="nm_classificacao" ng-model="classificacao.nm_classificacao" required>
						<p class="text-info" ng-show="form1.nm_classificacao.$error.required">Nome da classificação é obrigatório</p>
					</div>
</div>
<div class="col-lg-3">
					<div class="form-group">
						<label>* Descrição</label>
						<input class="form-control" type="text" id="ds_classificacao_id" name="ds_classificacao" ng-model="classificacao.ds_classificacao" required>
						<p class="text-info" ng-show="form1.ds_classificacao.$error.required">Descrição da classificação é obrigatório</p>
					</div>
</div>
<div class="col-lg-3">
					<div class="form-group">
<label>* Ativo</label>
<select class="form-control" id="sn_ativo_id" name="sn_ativo" ng-model="classificacao.sn_ativo" required>
<option value="s">Sim</option>
<option value="n">Não</option>
</select>
						<p class="text-info" ng-show="form1.sn_ativo.$error.required">Selecione a situação</p>
					</div>
				</div>
<div class="col-lg-3">
					<div class="form-group">
<label>* Libera para paciente</label>
<select class="form-control" id="sn_libera_paciente_id" name="sn_libera_paciente" ng-model="classificacao.sn_libera_paciente" required>
<option value="s">Sim</option>
<option value="n">Não</option>
</select>
						<p class="text-info" ng-show="form1.sn_libera_paciente.$error.required">Selecione se os arquivos pertensentes a esta classificação serão liberados para o paciente</p>
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
    
    </div>
</main>
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
<script src="../script/classificacao/salvar.js"></script>
</body>
</html>