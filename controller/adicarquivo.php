<?php
$cd_paciente=$_POST["cd_paciente"];
$extencao=substr($_FILES["arquivo"]["name"],-4);
$nomeArquivo=$cd_paciente." ".date("d-m-Y - h-i-s").$extencao;
$ds_arquivo=$_POST["ds_arquivo"];
if (isset($_FILES["arquivo"]))
{
	if ($extencao==".pdf" or $extencao==".jpg" or $extencao==".gif" or $extencao==".png" or $extencao==".doc" or $extencao==".xls" or $extencao==".ppt")
	{if (move_uploaded_file($_FILES["arquivo"]["tmp_name"],"../outros/exames/".$nomeArquivo))
		{include("../model/database.php");
$arquivoDatabase=new database();
$arquivoDatabase->instrucao="insert into arquivo_paciente (cd_paciente, nm_arquivo, ds_arquivo, dt_inclusao_arquivo)";
$arquivoDatabase->instrucao.="values(".$cd_paciente.", '".$nomeArquivo."', '".$ds_arquivo."', now())";
$arquivoDatabase->inserir();
if ($arquivoDatabase->status==1)
{print "<script> alert('Documento adicionado com sucesso'); history.go(-1) </script>";}
else
{print "<script> alert('Ouve um erro desconhecido ao tentar gravar o documento. Favor contatar o suporte.'); history.go(-1) </script>";}
	}
	}
	else
	{print "<script> alert('Extenção do arquivo é inválida. Só são aceitos arquivos do tipo PDF, JPG, GIF, PNG, DOC, DOCX, XLS, XLSX, PPT e PPTX'); history.go(-1) </script>";}
}
?>