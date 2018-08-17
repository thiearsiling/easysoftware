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
<div class="container">
<!-- inicio da linha dos dados da empresa -->
<div class="row">
<!-- inicio da coluna dos dados da empresa -->
<div class="col-lg-6">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Lista de Empresas</h3>
</div>
<div class="panel-body">
<div class="form-group">
<a class="btn btn-link" href="../controller/p_cadempresa.php">Nova empresa</a>
</div>
<div class="table-responsive">
<table class="table">
<thead>
<tr>
<td>Nome</td>
<td>CNPJ</td>
<td>Razão Social</td>
</tr>
</thead>
<tbody>
<tr>
<?php
				while($dados=MYSQLI_FETCH_ARRAY($empresa->queryi)){ //laço com as empresas
echo "<td>".$dados["nm_empresa"]."</td>";
echo "<td>".$dados["nr_cnpj"]."</td>";
echo "<td>".$dados["ds_razaosocial"]."</td>";
//Fim do laço com as empresas
				}
		
?>
</tr>
</tbody>
</table>
</div>
</div>
<!-- fim da coluna dos dados basicos -->
</div>
</div>

</div>

<script src="../vendor/script/jquery-3.1.1.min.js"></script>
<script src="../vendor/script/bootstrap.min.js"></script>
<script src="../vendor/script/loadingoverlay.js"></script>
<script src="../vendor/script/loader.js"></script>


</body>
</html>