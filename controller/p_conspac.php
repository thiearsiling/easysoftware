<?php
include("../infraestrutura/login.php");
$login=new login();
if (!isset($_GET["cd_paciente"])) //Verifica se a variável existe. Se não existir, mostra a view para busca.
{
include("../view/p_conspac.html.php");
}
else
{
include("../model/database.php"); //Inclue modelo responsável por montar os dados proveniente das tabelas da base de dados.
//Nas próximas linhas, será montada a query de busca.
$paciente=new database(); //instancia a classe para começar a busca.
@$formataDTnascimento=explode("/",$_GET["dt_nascimento"]);
@$dt_nascimento=$formataDTnascimento[2].$formataDTnascimento[1].$formataDTnascimento[0];
$paciente->instrucao="select * from paciente where ";

if ($_GET["cd_paciente"]=="")
{$paciente->instrucao.=" cd_paciente in(select cd_paciente from paciente)";}
else
{$paciente->instrucao.=" cd_paciente=".$_GET["cd_paciente"];}


$paciente->select(); //Executa a query.

include("../view/p_conspac.html.php"); //Inclue view para mostrar os dados trazidos na query recém-montada.
}
?>