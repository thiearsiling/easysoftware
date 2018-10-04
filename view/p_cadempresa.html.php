<!DOCTYPE html>
<html lang="pt-br" ng-app>

<head>
	<title>Sistema EasyCare</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
                                    <input class="form-control" type="text" id="nm_empresa_id" name="nm_empresa" required>
                                    <p id="nm_empresa" class="text-muted small" style="display: none">Nome é obrigatório</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-10 offset-1">
                                <div class="form-group">
                                    <label>CNPJ</label>
						            <input class="form-control" type="text" id="nr_cnpj_id" name="nr_cnpj" required>
                                    <p id="nr_cnpj_invalido" class="text-muted small">CNPJ inválido</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-10 offset-1">
                                <div class="form-group">
                                    <label>Razão Social</label>
                                    <input class="form-control" type="text" id="ds_razaosocial_id" name="ds_razaosocial" required>
                                    <p id="ds_razaosocial" class="text-muted small" style="display: none">Razão social é obrigatório</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-10 offset-1">
                                <div class="form-group float-right">
                                    <input class="btn btn-warning" type="reset" value="Limpar dados">
                                    <input id="btnOk" class="btn btn-success" type="button" value="Ok" disabled=true>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
<script src="../vendor/script/sweetalert.min.js"></script>
<script src="../script/_global/completadata.js"></script>
<script src="../script/_global/ajax.js"></script>
<script src="../script/_global/validacnpj.js"></script>
<script src="../script/empresa/validarcnpj.js"></script>
<script src="../script/empresa/salvar.js"></script>

</body>
</html>