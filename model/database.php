<?php
class database{
public $host="localhost";
public $usuario="root";
public $senha="";
public $banco="softapp";
public $instrucao;
public $status;
public function conectar(){
$this->conecte=MYSQLI_CONNECT($this->host,$this->usuario,$this->senha,$this->banco);
if (!$this->conecte)
{echo "<script> alert('Ouve um erro ao conectar-se a base de dados. Para mais informações entre em contato com o administrador do sistema.') </script>";}
}

public function inserir(){
$this->conectar();
MYSQLI_AUTOCOMMIT($this->conecte,false);
MYSQLI_QUERY($this->conecte,"SET NAMES 'utf8'");
MYSQLI_QUERY($this->conecte,'SET character_set_connection=utf8');
MYSQLI_QUERY($this->conecte,'SET character_set_client=utf8');
MYSQLI_QUERY($this->conecte,'SET character_set_results=utf8');

$this->query=MYSQLI_QUERY($this->conecte,$this->instrucao);
if ($this->query)
{MYSQLI_COMMIT($this->conecte);
$this->status=1;}
}

public function paciente($cpf){
$this->conectar();
MYSQLI_QUERY($this->conecte,"SET NAMES 'utf8'");
MYSQLI_QUERY($this->conecte,'SET character_set_connection=utf8');
MYSQLI_QUERY($this->conecte,'SET character_set_client=utf8');
MYSQLI_QUERY($this->conecte,'SET character_set_results=utf8');
$this->queryi=MYSQLI_QUERY($this->conecte,"select cd_paciente from paciente where nr_cpf='".$cpf."' order by cd_paciente desc limit 1");

}



public function paciente_arquivo($paciente)
{
$this->conectar();
MYSQLI_QUERY($this->conecte,"SET NAMES 'utf8'");
MYSQLI_QUERY($this->conecte,'SET character_set_connection=utf8');
MYSQLI_QUERY($this->conecte,'SET character_set_client=utf8');
MYSQLI_QUERY($this->conecte,'SET character_set_results=utf8');
$this->querya=MYSQLI_QUERY($this->conecte,"select * from arquivo_paciente where cd_paciente=".$paciente);

}


public function select(){
$this->conectar();
MYSQLI_QUERY($this->conecte,"SET NAMES 'utf8'");
MYSQLI_QUERY($this->conecte,'SET character_set_connection=utf8');
MYSQLI_QUERY($this->conecte,'SET character_set_client=utf8');
MYSQLI_QUERY($this->conecte,'SET character_set_results=utf8');
$this->queryi=MYSQLI_QUERY($this->conecte,$this->instrucao);
}

public function cliente($email){
$this->conectar();
MYSQLI_QUERY($this->conecte,"SET NAMES 'utf8'");
MYSQLI_QUERY($this->conecte,'SET character_set_connection=utf8');
MYSQLI_QUERY($this->conecte,'SET character_set_client=utf8');
MYSQLI_QUERY($this->conecte,'SET character_set_results=utf8');
$this->queryi=MYSQLI_QUERY($this->conecte,"select cd_cliente from cadastro_cliente where email='".$email."' order by cd_cliente desc limit 1");

}

public function exibirEmpresa(){
$this->conectar();
MYSQLI_QUERY($this->conecte,"SET NAMES 'utf8'");
MYSQLI_QUERY($this->conecte,'SET character_set_connection=utf8');
MYSQLI_QUERY($this->conecte,'SET character_set_client=utf8');
MYSQLI_QUERY($this->conecte,'SET character_set_results=utf8');
$this->queryi=MYSQLI_QUERY($this->conecte,"select * from empresa");
}

public function cadastrarEmpresa($Cnpj,$Nome,$RazaoSocial){
$this->conectar();
MYSQLI_QUERY($this->conecte,"SET NAMES 'utf8'");
MYSQLI_QUERY($this->conecte,'SET character_set_connection=utf8');
MYSQLI_QUERY($this->conecte,'SET character_set_client=utf8');
MYSQLI_QUERY($this->conecte,'SET character_set_results=utf8');
$this->query=MYSQLI_QUERY($this->conecte,"insert into empresa (nr_cnpj, nm_empresa, ds_razaosocial) values('".$Cnpj."', '".$Nome."', '".$RazaoSocial."')");
if ($this->query)
{MYSQLI_COMMIT($this->conecte);
$this->status=1;}
}



}
?>