function completaData(){
var dt_nascimento=document.form1.dt_nascimento.value.length;
if (dt_nascimento==2)
{document.form1.dt_nascimento.value=document.form1.dt_nascimento.value+"/"}
else
if (dt_nascimento==5)
{document.form1.dt_nascimento.value=document.form1.dt_nascimento.value+"/"}
}
