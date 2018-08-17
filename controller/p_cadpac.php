<?php
include("../infraestrutura/login.php");
$login=new login();

if (!isset($_POST["nm_paciente"]))
{include("../view/p_cadpac.html.php");}
else
{

include("../model/database.php");
$database=new database();
$ddd_telefone=$_POST["nr_ddd_telefone"];
$telefone=$_POST["nr_telefone"];
if ($ddd_telefone=="")
{$ddd_telefone='null';}

if ($telefone=="")
{$telefone='null';}

$nascimento=explode("/",$_POST["dt_nascimento"]);
$dt_nascimento=$nascimento[2]."-".$nascimento[1]."-".$nascimento[0];

$database->instrucao="insert into paciente(nm_paciente,dt_nascimento,tp_sexo,nr_ddd_telefone,nr_telefone,nr_ddd_celular,nr_celular,email,nr_cep,ds_endereco,nm_cidade,nm_bairro,nr_cpf,nm_uf,nr_endereco, cd_estabelecimento)";
$database->instrucao.="values('".$_POST['nm_paciente']."', '".$dt_nascimento."', '".$_POST['tp_sexo']."', ".$ddd_telefone.", ".$telefone.", ".$_POST['nr_ddd_celular'].", ".$_POST['nr_celular'].", '".$_POST['email']."', '".$_POST['nr_cep']."', '".$_POST['ds_end']."', '".$_POST['nm_cidade']."', '".$_POST['nm_bairro']."', '".$_POST['nr_cpf']."', '".$_POST["nm_uf"]."', ".$_POST["nr_endereco"].", $data->estabelecimento())";
$database->inserir();
/*$database->paciente($_POST["email"]);
$cd_paciente=MYSQLI_FETCH_ARRAY($database->queryi);
$paciente=$cd_paciente["cd_paciente"];
$database->instrucao="insert into endereco_cliente(cd_cliente,nr_cep,ds_endereco,nr_endereco,ds_referencia,nm_bairro,nm_cidade,cd_uf)";
$database->instrucao.="values(".$cliente.", '".$_POST['nr_cep']."', '".$_POST['ds_end']."', '".$_POST['nr_end']."', '".$_POST['ds_ref']."', '".$_POST['nm_bairro']."', '".$_POST['nm_cidade']."', '".$_POST['nm_uf']."')";
$database->inserir();*/
if ($database->status==1)
{print "<script> alert('Seu cadastro foi bem-sucedido.'); window.location='index.php' </script>";}

else
{print "<script> alert('Desculpe, estamos com problema em nossa base de dados nesse momento. Favor tentar novamente mais tarde.') </script>";}


}
?>