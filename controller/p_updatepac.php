<?php
include("../infraestrutura/login.php");
$login=new login();

if (!isset($_POST["nm_paciente"]))
{
include("../view/p_updatepac.html.php");
}
else
{
include("../model/database.php");
$paciente=new database();
@$formataDTnascimento=explode("/",$_POST["dt_nascimento"]);
@$dt_nascimento=$formataDTnascimento[2].$formataDTnascimento[1].$formataDTnascimento[0];
$paciente->instrucao="select * from paciente where ";

if ($_POST["cd_paciente"]=="")
{$paciente->instrucao.=" cd_paciente in(select cd_paciente from paciente)";}
else
{$paciente->instrucao.=" cd_paciente=".$_POST["cd_paciente"];}


if ($_POST["dt_nascimento"]!="")
{$paciente->instrucao.=" and dt_nascimento='".$dt_nascimento."'";}


if ($_POST["nm_paciente"]!="")
{$paciente->instrucao.=" and nm_paciente like '%".$_POST["nm_paciente"]."%'";}

$paciente->select();

include("../view/p_updatepac.html.php");
}
?>