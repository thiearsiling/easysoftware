<?php
include("../infraestrutura/login.php");
$login=new login();

 $arquivo ="../outros/exames/".$_GET["arquivo"];

//      header("Content-Type: ".$tipo); // informa o tipo do arquivo ao navegador
      header("Content-Length: ".filesize($arquivo)); // informa o tamanho do arquivo ao navegador
      header("Content-Disposition: attachment; filename=".basename($arquivo)); // informa ao navegador que � tipo anexo e faz abrir a janela de download, tambem informa o nome do arquivo
      readfile($arquivo); // l� o arquivo
      exit; // aborta p�s-a��es
 
?>
 