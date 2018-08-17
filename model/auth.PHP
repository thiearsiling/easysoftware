<?php
include("../model/database.php");
class auth extends database{
public function login($email,$password){
$this->conectar();
MYSQLI_QUERY($this->conecte,"SET NAMES 'utf8'");
MYSQLI_QUERY($this->conecte,'SET character_set_connection=utf8');
MYSQLI_QUERY($this->conecte,'SET character_set_client=utf8');
MYSQLI_QUERY($this->conecte,'SET character_set_results=utf8');
$this->queryi=MYSQLI_QUERY($this->conecte,"select * from cadastro_usuario where email='".$email."' and ds_password='".$password."'");
$this->existeLogin=MYSQLI_num_rows($this->queryi);
$this->login=MYSQLI_FETCH_ARRAY($this->queryi);

}
}
?>