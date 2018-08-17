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

<?php
if (isset($_GET["cd_paciente"])) //Verifica se a variável existe, para só então montar o HTML com os dados.
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
				while($dados=MYSQLI_FETCH_ARRAY($paciente->queryi)){ //Exibição dos dados.
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
}
				
?>
</div>
<!-- fim da coluna dos dados basicos -->
</div>

<!-- inicio da coluna da adição de arquivos -->
<div class="col-lg-4">
<button class="btn btn-default" type="button" value="Adicionar documento" data-toggle="modal" data-target="#modal-mensagem"></button>


<div class="modal fade" id="modal-mensagem">
   <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                <h4 class="modal-title">Adição de Documento</h4>
            </div>
            <div class="modal-body">
                <p>
				<form id="frm" action="../controller/adicarquivo.php" method="post" enctype="multipart/form-data">
				<input type="hidden" id="cd_paciente" name="cd_paciente" value="<?php echo $_GET['cd_paciente'] ?>">
				<div class="form-group">
				<label>Selecione o documento para este paciente</label>
				<input class="form-control" type="file" id="arquivo" name="arquivo">
				</div>
				<div class="form-group">
				<label>Descrição</label>
				<input class="form-control" type="text" id="ds_arquivo" name="ds_arquivo">
				</div>
				<div class="form-group">
				<input id="btnSalvar" class="btn btn-primary" type="submit" value="Ok">
				</div>
				</form>
				
				</p>
<span id="resultado" role="alert"></span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
	</div>
	<!-- fim da coluna da adição de arquivos -->
</div>
<!-- fim da linha dos dados básicos -->
</div>

<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Arquivos</h3>
</div>
<div class="panel-body">

<?php
$paciente->paciente_arquivo($_GET["cd_paciente"]);
print "<ul class='list-unstyled'>";
while($dados2=MYSQLI_FETCH_ARRAY($paciente->querya)){ //Exibição dos dados.

$dt_inclusao_arquivo=strtotime($dados2["dt_inclusao_arquivo"]);
print "<li>".$dados2["nm_arquivo"]." - incluso em ".date("d/m/Y h:i:s",$dt_inclusao_arquivo)." - ".$dados2["ds_arquivo"]."</li>";
print "<ul><li><a class='btn btn-link' href='../controller/download.php?arquivo=".$dados2["nm_arquivo"]."'>Baixar</a></li></ul>";
}

print "</ul>";
?>
</ul>
</div>

				<?php
				} //Fim da exibição dos dados.
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