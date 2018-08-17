<?php
class login{
public function __construct(){
session_start();
if ($_SESSION["login"]=="")
{header("location: ../controller/auth.php");
exit;}
}
}
?>