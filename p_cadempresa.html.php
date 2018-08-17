<!DOCTYPE html>
<html lang="pt-br" ng-app>
<head>
	<title>Sistema EasyCare</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../vendor/css/bootstrap.min.css">
  <link rel="stylesheet" href="../vendor/css/paper.css">
</head>
<body>
<?php
include("../view/menu.html.php");
?>
<h1 class="page-header">Cadastro de Empresa</h1>
	<div class="container">
		<span class="text-info">Os campos marcados com asterísco (*) são de preenchimento obrigatório
		</span>
<br>
		<form name="form1" action="" method="post">
			<div class="row">
				<div class="col-lg-3">
					<div class="form-group">
						<label>* Nome</label>
						<input class="form-control" type="text" name="nm_empresa" ng-model="empresa.nm_empresa" required>
						<p class="text-info" ng-show="form1.nm_empresa.$error.required">Nome é obrigatório</p>
					</div>
</div>
				<div class="col-lg-3">
					<div class="form-group">
						<label>* CNPJ</label>
						<input class="form-control" type="text" name="nr_cnpj" ng-model="empresa.nr_cnpj" ng-minlength="11" ng-maxlength="14" required ng-length>
<p class="text-info" ng-show="!form1.nr_cnpj.$valid">Número inválido</p>
						<p class="text-info" ng-show="form1.nr_cnpj.$error.required">CNPJ é obrigatório</p>
						<p class="text-info" ng-show="form1.nr_cnpj.$error.minlength&&form1.nr_cnpj.$dirty">CNPJ deve conter pelo menos 11 dígitos.</p>
						<p class="text-info" ng-show="form1.nr_cnpj.$error.maxlength&&form1.nr_cnpj.$dirty">CNPJ deve conter no m?mo 14 dígitos.</p>
					</div>
</div>
				<div class="col-lg-3">
					<div class="form-group">
						<label>* Razão Social</label>
						<input class="form-control" type="text" name="ds_razaosocial" ng-model="empresa.ds_razaosocial" required>
						<p class="text-info" ng-show="form1.ds_razaosocial.$error.required">Razão Social é obrigatório</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-9">
					<div class="btn-group" role="group" aria-label="opções">
						<input class="btn btn-primary" type="reset" value="Limpar dados">
						<input id="btnOk" class="btn btn-primary" type="submit" value="Ok" ng-disabled="!form1.$valid" onFocus="validarCnpj()">
					</div>
				</div>
			</div>
		</form>
	</div>

<script src="../vendor/script/jquery-3.1.1.min.js"></script>
<script src="../vendor/script/bootstrap.min.js"></script>
<script src="../vendor/script/loadingoverlay.js"></script>
<script src="../vendor/script/loader.js"></script>
<script src="../vendor/script/angular.min.js"></script>
<script src="../script/_global/completadata.js"></script>
<script src="../script/_global/ajax.js"></script>
<script src="../script/_global/validacnpj.js"></script>
<script>
(function(){
'use strict';
angular
.module('app')
.directive('ngLength',NgLength);
functionNgLength(){
return{
restrict:'A',
require:'ngModel',
link:function($scope,$element,$attrs,ngModel){
$scope.$watch($attrs.ngModel,function(value){
var isValid=(value.length===2);
ngModel.$setValidity($attrs.ngModel,isValid);
});
}
}
}
})();

</script>
</body>
</html>