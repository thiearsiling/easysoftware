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
<h1 class="page-header">Consulta de Paciente</h1>

<!-- inicio do container da pagina de busca -->
	<div class="container">
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
	</div>
<!-- fim do container de busca -->





<?php
if (isset($_POST["cd_paciente"])) //Verifica se a variável existe, para só então montar o HTML com os dados.
{
?>

<div class="container">
<!-- inicio da linha dos dados basicos -->
<div class="row">
<!-- inicio da coluna dos dados basicos -->
<div class="col-lg-4">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Lista de Pacientes</h3>
</div>
<div class="panel-body">
<div class="table-responsive">
<table class="table">
<thead>
<tr>
<td class="text-left">Código</td>
<td class="text-left">Nome</td>
<td class="text-left">Data de nascimento</td>
<td class="text-center">CPF</td>
<td class="text-center">Sexo</td>
<td class="text-center">Telefone residencial</td>
<td class="text-right">Telefone celular</td>
<td class="text-right">E-mail</td>
<td class="text-right">Endereço</td>
</tr>
</thead>
<tbody>
<tr>
<?php
				while($dados=MYSQLI_FETCH_ARRAY($paciente->queryi)){ //Exibição dos dados.
echo "<td class='text-left'><a class='btn btn-link' href='../controller/p_conspac.php?cd_paciente=".$dados["cd_paciente"]."'>".$dados["cd_paciente"]."</a></td>";
echo "<td class='text-left'>".$dados["nm_paciente"]."</td>";
$dt_nascimento=strtotime($dados["dt_nascimento"]);
echo "<td class='text-left'>".date("d/m/Y",$dt_nascimento)."</td>";
echo "<td class='text-center'>".$dados["nr_cpf"]."</td>";
echo "<td class='text-center'>".$dados["tp_sexo"]."</td>";
echo "<td class='text-center'>".$dados["nr_ddd_telefone"]." ".$dados["nr_telefone"]."</td>";
echo "<td class='text-right'>".$dados["nr_ddd_celular"]." ".$dados["nr_celular"]."</td>";
echo "<td class='text-right'>".$dados["email"]."</td>";
echo "<td class='text-right'>".$dados["ds_endereco"]." - ".$dados["nm_bairro"]." - ".$dados["nm_cidade"]." - ".$dados["nm_uf"]." - ".$dados["nr_cep"]."</td>";
//Fim do laço com os pacientes
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

				<?php
								//fim da exibição dos dados}
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