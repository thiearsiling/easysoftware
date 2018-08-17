<?php
include("../infraestrutura/login.php");
$login=new login();

if (!isset($_POST["nm_usuario"]))
{include("../view/cadastro_usuario.html.php");}
else
{

include("../model/database.php");
$database=new database();
$nascimento=explode("/",$_POST["dt_nascimento"]);
$dt_nascimento=$nascimento[2]."-".$nascimento[1]."-".$nascimento[0];

$database->instrucao="insert into cadastro_usuario(nm_usuario,dt_nascimento,email,ds_password, tp_usuario)";
$database->instrucao.="values('".$_POST['nm_usuario']."', '".$dt_nascimento."', '".$_POST['email']."', '".$_POST['ds_senha']."', 'c')";
$database->inserir();
if ($database->status==1)
{print "Usuário cadastrado com êxito.";}
else
{print "Desculpe, algo deu errado. Por favor contatar o suporte.";}

}

?>