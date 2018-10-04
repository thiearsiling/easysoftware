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

<main class="w-100 p-1 mb-5">
    <div class="container">
        <div class="col-10 offset-1">
            <div class="card">
                <div class="card-header">
                    <h3>Usuários</h3>
                </div>
                <div class="card-body">
                    <a class="btn btn-primary float-right mb-3" href="../controller/p_cadusuario.php">Novo Usuário</a>
                    <table class="table table-sm table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nome</th>
                                <th>Dt. Nascimento</th>
                                <th>E-Mail</th>
                                <th>Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($dados=MYSQLI_FETCH_ARRAY($database->queryi)){ ?>
                                <tr>
                                    <td><?php echo $dados["nm_usuario"]; ?></td>
                                    <td><?php echo date("d/m/Y", strtotime($dados["dt_nascimento"])); ?></td>
                                    <td><?php echo $dados["email"]; ?></td>
                                    <td><?php echo $dados["nm_perfil"]; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- <div class="container">
<div class="row">
<div class="col-lg-6">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Usuários</h3>
</div>
<div class="panel-body">
<div class="form-group">
<a class="btn btn-link" href="../controller/p_cadusuario.php">Novo usuário</a>
</div>
<div class="table-responsive">
<table class="table">
<thead>
<tr>
<th>Nome</th>
<th>Data de Nascimento</th>
<th>E-mail</th>
<th>Perfil</th>
<th>Opções</th>
</tr>
</thead>
<tbody>
<tr>
<?php
				while($dados=MYSQLI_FETCH_ARRAY($database->queryi)){ //laço com as empresas
echo "<td>".$dados["nm_usuario"]."</td>";
$dt_nascimento=strtotime($dados["dt_nascimento"]);
echo "<td>".date("d/m/Y",$dt_nascimento)."</td>";
echo "<td>".$dados["email"]."</td>";
echo "<td>".$dados["nm_perfil"]."</td>";
echo "<td><a class='btn btn-warning' href='#' onClick=javascript:resetarUsuario(".$dados["cd_usuario"].")>Resetar senha</a></td>";
echo "<td><a href='../controller/p_editausuario.php?cd_usuario=".$dados["cd_usuario"]."'>Editar</a></td>";
//Fim do laço com os usuários
				}
		
?>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>

</div> -->

<?php
include("../view/footer.html.php");
?>

<script src="../vendor/script/jquery-3.1.1.min.js"></script>
<script src="../vendor/script/bootstrap.min.js"></script>
<script src="../vendor/script/loadingoverlay.js"></script>
<script src="../vendor/script/loader.js"></script>
<script src="../script/usuario/salvar.js"></script>
</body>
</html>