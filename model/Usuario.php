<?php
include("../model/database.php");
public class Usuario extends database{

public function logar($email){
$this->conectar();
MYSQLI_QUERY($this->conecte,"SET NAMES 'utf8'");
MYSQLI_QUERY($this->conecte,'SET character_set_connection=utf8');
MYSQLI_QUERY($this->conecte,'SET character_set_client=utf8');
MYSQLI_QUERY($this->conecte,'SET character_set_results=utf8');
$this->queryi=MYSQLI_QUERY($this->conecte,"select cd_cliente from cadastro_cliente where email='".$email."' order by cd_cliente desc limit 1");

}

}

