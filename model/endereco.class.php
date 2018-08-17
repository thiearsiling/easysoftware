<?php
class endereco{
public $host="127.0.0.1";
public $usuario="root";
public $senha="";
public $banco="softapp";
private function conectar(){
$this->conecte=MYSQLI_CONNECT($this->host,$this->usuario,$this->senha,$this->banco);
if (!$this->conecte)
{echo "<script> alert('Ouve um erro ao conectar-se a base de dados. Para mais informações entre em contato com o administrador do sistema.') </script>";}
}
public function logradouro($nr_cep){
$this->conectar();
MYSQLI_QUERY($this->conecte,"SET NAMES 'utf8'");
MYSQLI_QUERY($this->conecte,'SET character_set_connection=utf8');
MYSQLI_QUERY($this->conecte,'SET character_set_client=utf8');
MYSQLI_QUERY($this->conecte,'SET character_set_results=utf8');
$this->queryi=MYSQLI_QUERY($this->conecte,"select l.log_nome as logradouro from log_logradouro l, log_bairro b where l.bai_nu_sequencial_ini=b.bai_nu_sequencial and l.cep='".$nr_cep."'");

}

public function bairro($nr_cep){
$this->conectar();
MYSQLI_QUERY($this->conecte,"SET NAMES 'utf8'");
MYSQLI_QUERY($this->conecte,'SET character_set_connection=utf8');
MYSQLI_QUERY($this->conecte,'SET character_set_client=utf8');
MYSQLI_QUERY($this->conecte,'SET character_set_results=utf8');
$this->queryi=MYSQLI_QUERY($this->conecte,"select b.bai_no as nm_bairro from log_logradouro l, log_bairro b where l.bai_nu_sequencial_ini=b.bai_nu_sequencial and l.cep='".$nr_cep."'");

}

public function cidade($nr_cep){
$this->conectar();
MYSQLI_QUERY($this->conecte,"SET NAMES 'utf8'");
MYSQLI_QUERY($this->conecte,'SET character_set_connection=utf8');
MYSQLI_QUERY($this->conecte,'SET character_set_client=utf8');
MYSQLI_QUERY($this->conecte,'SET character_set_results=utf8');
$this->queryi=MYSQLI_QUERY($this->conecte,"select l.loc_no as nm_cidade from log_localidade l, log_logradouro lg where lg.loc_nu_sequencial=l.loc_nu_sequencial and lg.cep='".$nr_cep."'");

}




public function uf($nr_cep){
$this->conectar();
MYSQLI_QUERY($this->conecte,"SET NAMES 'utf8'");
MYSQLI_QUERY($this->conecte,'SET character_set_connection=utf8');
MYSQLI_QUERY($this->conecte,'SET character_set_client=utf8');
MYSQLI_QUERY($this->conecte,'SET character_set_results=utf8');
$this->queryi=MYSQLI_QUERY($this->conecte,"select b.ufe_sg as nm_uf from log_logradouro l, log_bairro b where l.bai_nu_sequencial_ini=b.bai_nu_sequencial and l.cep='".$nr_cep."'");

}

}