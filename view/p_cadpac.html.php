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
<h1 class="page-header">Cadastro de Paciente</h1>
	<div class="container">
		<span class="text-info">Os campos marcados com asterísco (*) são de preenchimento obrigatório
		</span>
<br>
		<form name="form1" action="" method="post">
			<div class="row">
				<div class="col-lg-3">
<h1 class="page-header">Dados básicos</h1>
<br>
					<div class="form-group">
						<label>* Nome</label>
						<input class="form-control" type="text" name="nm_paciente" ng-model="paciente.nm_paciente" required>
						<p class="text-info" ng-show="form1.nm_paciente.$error.required">Nome é obrigatório</p>
					</div>
					<div class="form-group">
						<label>* CPF</label>
						<input class="form-control" type="text" name="nr_cpf" ng-model="paciente.nr_cpf" ng-minlength="11" ng-maxlength="11" required>
						<p class="text-info" ng-show="form1.nr_cpf.$error.required">CPF é obrigatório</p>
						<p class="text-info" ng-show="form1.nr_cpf.$error.minlength&&form1.nr_cpf.$dirty">CPF deve conter apenas 11 dígitos.</p>
						<p class="text-info" ng-show="form1.nr_cpf.$error.maxlength&&form1.nr_cpf.$dirty">CPF deve conter apenas 11 dígitos.</p>
					</div>

					<div class="form-group">
						<label>* Data de nascimento</label>
						<input class="form-control" type="text" name="dt_nascimento" ng-model="paciente.dt_nascimento" onKeyPress="completaData()" required>
						<p class="text-info" ng-show="form1.dt_nascimento.$error.required">Data de nascimento é obrigatória</p>
					</div>
					<div class="form-group">
						<label>* Sexo</label>
							<select class="form-control" name="tp_sexo" ng-model="paciente.tp_sexo" required>
								<option value="m">Masculino</option>
								<option value="f">Feminino</option>
							</select>
						<p class="text-info" ng-show="form1.tp_sexo.$error.required">Sexo é obrigatório</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
<h1 class="page-header">Contato</h1>
<br>
					<div class="form-group">
						<label>DDD Telefone</label>
						<input class="form-control" type="number" name="nr_ddd_telefone" ng-model="paciente.nr_ddd_telefone" min="11" max="99">
						<p class="text-info" ng-show="form1.nr_ddd_telefone.$invalid&&form1.nr_ddd_telefone.$dirty">DDD inválido</p>
					</div>
					<div class="form-group">
						<label>Telefone</label>
						<input class="form-control" type="number"  name="nr_telefone" ng-model="paciente.nr_telefone" ng-minlength="8" ng-maxlength="8">
						<p class="text-info" ng-show="form1.nr_telefone.$error.minlength&&form1.nr_telefone.$dirty">Telefone não pode conter menos de 8 dígitos.</p>
						<p class="text-info" ng-show="form1.nr_telefone.$error.maxlength&&form1.nr_telefone.$dirty">Telefone não pode conter mmais de 8 dígitos.</p>
					</div>
					<div class="form-group">
						<label>* DDD celular</label>
						<input class="form-control" type="number" min="11" max="99" name="nr_ddd_celular" ng-model="paciente.nr_ddd_celular" required>
						<p class="text-info" ng-show="form1.nr_ddd_celular.$error.required">DDD é obrigatório</p>
						<p class="text-info" ng-show="form1.nr_ddd_celular.$invalid&&form1.nr_ddd_celular.$dirty">DDD inválido</p>
					</div>
					<div class="form-group">
						<label>* Celular</label>
						<input class="form-control" type="number" name="nr_celular" ng-model="paciente.nr_celular" ng-minlength="9" ng-maxlength="9" required>
						<p class="text-info" ng-show="form1.nr_celular.$error.required">Celular é obrigatório</p>
						<p class="text-info" ng-show="form1.nr_celular.$error.minlength">Celular deve conter apenas 9 dígitos</p>
						<p class="text-info" ng-show="form1.nr_celular.$error.maxlength">Celular deve conter apenas 9 dígitos</p>
					</div>
					<div class="form-group">
						<label>E-mail</label>
						<input class="form-control" type="email" name="email" ng-model="paciente.email">
						<p class="text-info" ng-show="form1.email.$error.email">Formato de e-mail inválido. O formato deve ser example@example.com</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
<h1 class="page-header">Endereço</h1>
					<div class="form-group">
						<label>* CEP</label>
						<input class="form-control" type="text" name="nr_cep" onblur="completaCEP()" ng-model="paciente.nr_cep" required>
						<p class="text-info" ng-show="form1.nr_cep.$error.required">Favor preencher o CEP para encontrarmos o endereço correspondente</p>
							<legend>Não sabe o CEP?
														<a href="http://www.buscacep.correios.com.br/sistemas/buscacep/buscaCep.cfm" target="_blank">Consulte-o aqui</a>
							</legend>
					</div>
					<div class="form-group">
						<label>Endereço</label>
						<input class="form-control" type="text" name="ds_end">
					</div>
					<div class="form-group">
						<label>Bairro</label>
						<input class="form-control" type="text" name="nm_bairro">
					</div>
					<div class="form-group">
						<label>Cidade</label>
						<input class="form-control" type="text" name="nm_cidade">
					</div>
					<div class="form-group">
						<label>Estado</label>
							<select class="form-control" name="nm_uf">
								<option value="">Selecione...</option>
								<option value="AC">Acre</option> 
								<option value="AL">Alagoas</option> 
								<option value="AP">Amapá</option> 
								<option value="AM">Amazonas</option> 
								<option value="BA">Bahia</option> 
								<option value="CE">Ceará</option> 
								<option value="DF">Distrito Federal</option> 
								<option value="ES">Espírito Santo</option> 
								<option value="GO">Goiás</option> 
								<option value="MA">Maranhão</option> 
								<option value="MT">Mato Grosso</option> 
								<option value="MS">Mato Grosso do Sul</option> 
								<option value="MG">Minas Gerais</option> 
								<option value="PA">Pará</option> 
								<option value="PB">Paraíba</option> 
								<option value="PR">Paraná</option> 
								<option value="PE">Pernambuco</option> 
								<option value="PI">Piauí</option> 
								<option value="RJ">Rio de Janeiro</option> 
								<option value="RN">Rio Grande do Norte</option> 
								<option value="RS">Rio Grande do Sul</option> 
								<option value="RO">Rondônia</option> 
								<option value="RR">Roraima</option> 
								<option value="SC">Santa Catarina</option> 
								<option value="SP">São Paulo</option> 
								<option value="SE">Sergipe</option> 
								<option value="TO">Tocantins</option> 
							</select> 
					</div> 
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="btn-group" role="group" aria-label="opções">
						<input class="btn btn-primary" type="reset" value="Limpar dados">
						<input class="btn btn-primary" type="submit" value="Ok" ng-disabled="!form1.$valid">
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

</body>
</html>