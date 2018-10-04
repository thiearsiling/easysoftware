<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Sistema EasyCare</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../vendor/css/bootstrap.css">
</head>

<body>
<main class="w-100 p-1 mb-5">
    <div class="container mt-5">
        <div class="col-10 offset-1">
            <div class="card">
                <div class="card-header">
                    <h3>Altere sua Senha</h3>
                </div>
                <div class="card-body">
                    <form name="form1" action="" method="post">
                        <div class="row">
                            <div class="col-10 offset-1">
                                <div class="form-group">
                                    <label class="control-label">Digite a nova senha:</label>
                                    <input class="form-control" type="password" name="ds_senha" id="ds_senha_id" required>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success float-right" type="input" id="btnAlteraSenha">Salvar</button>
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
<script src="../script/_global/ajax.js"></script>
<script src="../script/compartpaciente/validador.js"></script>
<script src="../script/usuario/salvar.js"></script>

</body>
</html>