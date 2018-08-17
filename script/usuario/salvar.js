$(document).on("click", "#btnOk", salvar);
   function salvar(){
      createRequest();
      var url = "../controller/cadastro_usuario.php";
var form="nm_usuario="+document.getElementById("nm_usuario_id").value+"&dt_nascimento="+document.getElementById("dt_nascimento_id").value;
form+="&email="+document.getElementById("email_id").value+"&ds_senha="+document.getElementById("ds_senha_id").value;
      request.open("POST", url, true);
      request.onreadystatechange = salvaDados;
request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      request.send(form);
   } 
function salvaDados() {
   if (request.readyState == 4)
 {     var resultado= request.responseText;
alert(resultado);
window.location="../controller/p_usuario.php";}
}


