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
if (isset($_GET["nr_cpf"])) //Verifica se a variável existe, para só então montar o HTML com os dados.
{
?>
<div class="container">
<!-- inicio da linha dos dados basicos -->
<div class="row">
<!-- inicio da coluna dos dados basicos -->
<div class="col-lg-4">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Dados Básicos</h3>
</div>
<div class="panel-body">

<?php
				$dados=MYSQLI_FETCH_ARRAY($paciente->queryi); //Exibição dos dados.
echo "<p>Código: ".$dados["cd_paciente"]."</p>";
echo "<p>Nome: ".$dados["nm_paciente"]."</p>";
$dt_nascimento=strtotime($dados["dt_nascimento"]);
echo "<p>Data de Nascimento: ".date("d/m/Y",$dt_nascimento)."</p>";
echo "<p>CPF: ".$dados["nr_cpf"]."</p>";
echo "<p>Sexo: ".$dados["tp_sexo"]."</p>";
echo "<p>Telefone Residencial: ".$dados["nr_ddd_telefone"]." ".$dados["nr_telefone"]."</p>";
echo "<p>Celular: ".$dados["nr_ddd_celular"]." ".$dados["nr_celular"]."</p>";
echo "<p>E-mail: ".$dados["email"]."</p>";
echo "<p>Endereço: ".$dados["ds_endereco"]." - ".$dados["nm_bairro"]." - ".$dados["nm_cidade"]." - ".$dados["nm_uf"]." - ".$dados["nr_cep"]."</p>";
		
?>
</div>
<!-- fim da coluna dos dados basicos -->
</div>
</div>
<!-- fim da linha dos dados básicos -->
</div>

<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Arquivos</h3>
</div>
<div class="panel-body">
<table class="table-responsive">
<tr>
<th>Arquivo</th>
<th>Data de adição</th>
<th>Descrição</th>
<th>Classificação</th>
<th>Opções</th>
</tr>
<tr>
<?php
$paciente->getPaciente_arquivo($dados["cd_paciente"]);
while($dados2=MYSQLI_FETCH_ARRAY($paciente->querya)){ //Exibição dos dados.

$dt_inclusao_arquivo=strtotime($dados2["dt_inclusao_arquivo"]);
print "<td>".$dados2["nm_arquivo"]."</td>";
print "<td>".date("d/m/Y h:i:s",$dt_inclusao_arquivo)."</td>";
print "<td>".$dados2["ds_arquivo"]."</td>";
print "<td>".$dados2["nm_classificacao"]."</td>";
print "<td><a class='btn btn-link' href='../controller/download.php?arquivo=".$dados2["nm_arquivo"]."'>Baixar</a></td>";
}

?>
</tr>
</table>
</div>
				<?php
				} //Fim da exibição dos dados.
				?>
				
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

</body>
</html>