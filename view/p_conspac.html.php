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

<?php
if (isset($_GET["cd_paciente"])) //Verifica se a variável existe, para só então montar o HTML com os dados.
{
?>

<main class="w-100 p-1 mb-5">
    <div class="container">
        <div class="col-10 offset-1">
            <div class="card">
                <div class="card-header">
                    <h3>Consulta de Pacientes</h3>
                </div>
                <div class="card-body"></div>
            </div>
        </div>
    





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
				<form id="form1" name="form1" id="frm" action="" method="post" enctype="multipart/form-data">
				<input type="hidden" id="cd_paciente" name="cd_paciente" value="<?php echo $_GET['cd_paciente'] ?>">
				<div class="form-group">
				<label>Selecione o documento para este paciente</label>
				<input class="form-control" type="file" id="arquivo" name="arquivo" required>
				</div>
				<div class="form-group">
				<label>Descrição</label>
				<input class="form-control" type="text" id="ds_arquivo" name="ds_arquivo" ng-model="arquivo.ds_arquivo" required>
						<p class="text-info" ng-show="form1.ds_arquivo.$error.required">Informe uma descrição clara para o documento</p>
				</div>
<div class="form-group">
<label>Classificação</label>
<select class="form-control" id="cd_classificacao" name="cd_classificacao" ng-model="arquivo.cd_classificacao" required>
<?php
while($dados2=MYSQLI_FETCH_ARRAY($paciente->queryi2)){
print "<option value='".$dados2["cd_classificacao"]."'>".$dados2["nm_classificacao"]."</option>";
}
?>
</select>
						<p class="text-info" ng-show="form1.cd_classificacao.$error.required">Selecione uma classificação para o documento</p>
</div>
				<div class="form-group">
				<input id="btnSalvar" class="btn btn-primary" type="button" value="Ok" ng-disabled="!form1.$valid">
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
$paciente->paciente_arquivo($_GET["cd_paciente"]);
$paciente->getPerfil($_SESSION["login"]);
while($dados2=MYSQLI_FETCH_ARRAY($paciente->querya)){ //Exibição dos dados.

$dt_inclusao_arquivo=strtotime($dados2["dt_inclusao_arquivo"]);
print "<td>".$dados2["nm_arquivo"]."</td>";
print "<td>".date("d/m/Y h:i:s",$dt_inclusao_arquivo)."</td>";
print "<td>".$dados2["ds_arquivo"]."</td>";
print "<td>".$dados2["nm_classificacao"]."</td>";
print "<td><a class='btn btn-link' href='../controller/download.php?arquivo=".$dados2["nm_arquivo"]."'>Baixar</a></td>";
print "<td><a href='#' onClick=excluirArquivo('".$dados2["nm_arquivo"]."',".$paciente->result["cd_usuario"].")>Excluir</a></td>";

}

?>
</tr>
</table>
<a class="btn btn-link" href="../controller/p_compartpaciente.php?cd_paciente=<?php echo $_GET['cd_paciente'] ?>" target="_blank">Liberar documentos para paciente</a>
</div>
				<?php
				} //Fim da exibição dos dados.
				?>
				
</div>

</div>
            </main>
<?php
include("../view/footer.html.php");
?>

<script src="../vendor/script/jquery-3.1.1.min.js"></script>
<script src="../vendor/script/jquery.form.min.js"></script>
<script src="../vendor/script/bootstrap.min.js"></script>
<script src="../vendor/script/loadingoverlay.js"></script>
<script src="../vendor/script/loader.js"></script>
<script src="../vendor/script/angular.min.js"></script>
<script src="../script/_global/completadata.js"></script>
<script src="../script/_global/ajax.js"></script>

<script src="../script/paciente/salvar.js"></script>

</body>
</html>