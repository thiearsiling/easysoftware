<?php
SESSION_START();
include("../model/auth.php");
$auth=new auth();
$auth->exibirEmpresa(); //Executa a query.

if (!isset($_POST["email"]))
{include("../view/auth.html.php");}
else
{

$email=$_POST["email"];
$ds_password=$_POST["ds_password"];
$auth->login($email,$ds_password);
if ($auth->existeLogin>0)
{$_SESSION["login"]=$email;
$_SESSION["empresa"]=$_POST["empresa"];
print "<script> window.location='../controller/index.php' </script>";}
else
{print "<script> alert('Dados de login incorretos.'); history.back() </script>";}
}
?>