<?php

$nr_cep=$_GET["nr_cep"];
include("../model/endereco.class.php");
$exibe=new endereco();
$exibe->uf($nr_cep);
$dados=MYSQLI_FETCH_ARRAY($exibe->queryi);
print $dados["nm_uf"];

?>