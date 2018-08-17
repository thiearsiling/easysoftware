$(document).on("click", "#btnOk", salvar);
   function salvar(){
      createRequest();
      var url = "../controller/p_cadempresa.php";
var form="nm_empresa="+document.getElementById("nm_empresa_id").value+"&nr_cnpj="+document.getElementById("nr_cnpj_id").value;
form+="&ds_razaosocial="+document.getElementById("ds_razaosocial_id").value;
      request.open("POST", url, true);
      request.onreadystatechange = salvaDados;
request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      request.send(form);
   } 
function salvaDados() {
   if (request.readyState == 4)
 {     var resultado= request.responseText;
alert(resultado);
window.location="../controller/p_empresa.php";}
}


