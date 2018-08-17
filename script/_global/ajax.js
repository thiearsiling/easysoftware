    var request = null;
      function createRequest() {
      try {        request = new XMLHttpRequest();      } catch (trymicrosoft) {        try {          request = new ActiveXObject("Msxml2.XMLHTTP");        } catch (othermicrosoft) {          try {            request = new ActiveXObject("Microsoft.XMLHTTP");          } catch (failed) {            request = null;          }        }      }        if (request == null)        alert("Error creating request object!");    }  





   function completaCEP(){
      createRequest();
var valor=document.form1.nr_cep.value;
if (valor=="")
{valor=0}
      var url = "logradouro.php?nr_cep="+valor+"";
      request.open("GET", url, true);
      request.onreadystatechange = atualizaPagina;
      request.send(null);
   } 
function atualizaPagina() {
   if (request.readyState == 4)
 {     var resultado= request.responseText;
document.form1.ds_end.value=resultado;
bairro();}
}

   function bairro(){
      createRequest();
var valor=document.form1.nr_cep.value;
if (valor=="")
{valor=0}
      var url = "bairro.php?nr_cep="+valor+"";
      request.open("GET", url, true);
      request.onreadystatechange = atualizaPagina2;
      request.send(null);
   } 
function atualizaPagina2() {
   if (request.readyState == 4)
 {     var resultado= request.responseText;
document.form1.nm_bairro.value=resultado;
cidade();}
}


   function cidade(){
      createRequest();
var valor=document.form1.nr_cep.value;
if (valor=="")
{valor=0}
      var url = "cidade.php?nr_cep="+valor+"";
      request.open("GET", url, true);
      request.onreadystatechange = atualizaPagina3;
      request.send(null);
   } 
function atualizaPagina3() {
   if (request.readyState == 4)
 {     var resultado= request.responseText;
document.form1.nm_cidade.value=resultado;
uf()}
}



   function uf(){
      createRequest();
var valor=document.form1.nr_cep.value;
if (valor=="")
{valor=0}
      var url = "uf.php?nr_cep="+valor+"";
      request.open("GET", url, true);
      request.onreadystatechange = atualizaPagina4;
      request.send(null);
   } 
function atualizaPagina4() {
   if (request.readyState == 4)
 {     var resultado= request.responseText;
document.form1.nm_uf.value=resultado;}

}

   function gravarArquivo(){
      createRequest();
      var url = "adicarquivo.php";
var form="cd_paciente="+document.getElementById("cd_paciente").value+"&arquivo="+document.getElementById("arquivo").value;
form+="&ds_arquivo="+document.getElementById("ds_arquivo").value;
      request.open("POST", url, true);
      request.onreadystatechange = enviaArquivo;
request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      request.send(form);
   } 
function enviaArquivo() {
   if (request.readyState == 4)
 {     var resultado= request.responseText;
alert(resultado);}
}


