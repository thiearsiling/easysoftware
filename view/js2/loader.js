$(document).ready(function(){
  //Quando qualquer formulário for enviado, levanta a tela de loading
  $("*").submit(function(){
    $.LoadingOverlay("show")
  });
});
