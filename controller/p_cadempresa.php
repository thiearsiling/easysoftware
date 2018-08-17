<?php
include("../infraestrutura/login.php");
$login=new login();

if (!isset($_POST["nm_empresa"]))
{include("../view/p_cadempresa.html.php");}
else
{

include("../model/database.php");
$database=new database();

$database->cadastrarEmpresa($_POST["nr_cnpj"],$_POST["nm_empresa"],$_POST["ds_razaosocial"]);
if ($database->status==1)
{print "Empresa cadastrada com êxito";}
else
{print "Ouve um problema ao salvar os dados.";}
}
?>