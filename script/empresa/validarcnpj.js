$(document).on("blur", "#nm_empresa_id", validarNm_Empresa);
$(document).on("blur", "#nm_empresa_id", desativaBotao);
$(document).on("blur", "#ds_razaosocial_id", validarRazaoSocial);
$(document).on("blur", "#ds_razaosocial_id", desativaBotao);
$(document).on("blur", "#nr_cnpj_id", validarCnpj);
$(document).on("blur", "#nr_cnpj_id", desativaBotao);
var empresaIsValid=0;
var razaoSocialIsValid=0;
var cnpjIsValid=0;
function validarNm_Empresa(){
if (document.form1.nm_empresa.value=="")
{document.getElementById("nm_empresa").style.display="block";
empresaIsValid=0}
else
{document.getElementById("nm_empresa").style.display="none";
empresaIsValid=1}
}
function validarRazaoSocial(){
if (document.form1.ds_razaosocial.value=="")
{document.getElementById("ds_razaosocial").style.display="block";
razaoSocialIsValid=0}
else
{document.getElementById("ds_razaosocial").style.display="none";
razaoSocialIsValid=1}
}

function validarCnpj(){
if (validaCnpj(document.form1.nr_cnpj.value)==0)
{document.getElementById("nr_cnpj_invalido").style.display="block";
cnpjIsValid=0}
else
{document.getElementById("nr_cnpj_invalido").style.display="none";
cnpjIsValid=1}
}
function desativaBotao(){
if (empresaIsValid==0||razaoSocialIsValid==0||cnpjIsValid==0)
{document.form1.btnOk.disabled=true}
else
{document.form1.btnOk.disabled=false}
}

