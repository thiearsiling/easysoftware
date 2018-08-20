<?php
SESSION_START();
$_SESSION["login"]="";
header("location: ../controller/auth.php");
?>