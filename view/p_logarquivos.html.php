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
                    <h3>Log de Exclusão dos Documentos</h3>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-bordered table-hover">
                        <thead class="thead-dark">
                            <th>Nome do Arquivo</th>
                            <th>Descrição</th>
                            <th>Data da Exclusão</th>
                            <th>Usuário</th>
                        </thead>
                        <tbody>
                            <?php while($dados=MYSQLI_FETCH_ARRAY($database->queryi)){ ?>
                                <td><?php echo $dados["nm_arquivo"]; ?></td>
                                <td><?php echo $dados["ds_arquivo"]; ?></td>
                                <td><?php echo date("d/m/Y", strtotime($dados["dt_exclusao"])); ?></td>
                                <td><?php echo $dados["nm_usuario"]; ?></td>
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
<h3 class="panel-title">Log de Exclusão dos Documentos</h3>
</div>
<div class="panel-body">
<div class="table-responsive">
<table class="table">
<thead>
<tr>
<th>Nome do arquivo</th>
<th>Descrição</th>
<th>Data da Exclusão</th>
<th>Usuário que Excluiu</th>
</tr>
</thead>
<tbody>
<tr>
<?php
				while($dados=MYSQLI_FETCH_ARRAY($database->queryi)){
echo "<td>".$dados["nm_arquivo"]."</td>";
echo "<td>".$dados["ds_arquivo"]."</td>";
$data=strtotime($dados["dt_exclusao"]);
echo "<td>".date("d/m/Y h:i:s",$data)."</td>";
echo "<td>".$dados["nm_usuario"]."</td>";
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
</body>
</html>