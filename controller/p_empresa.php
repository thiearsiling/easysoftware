<?php
include("../infraestrutura/login.php");
$login=new login();

include("../model/database.php"); //Inclue modelo responsável por montar os dados proveniente das tabelas da base de dados.
$empresa=new database();
$empresa->exibirEmpresa(); //Executa a query.
include("../view/p_empresa.html.php");
?>