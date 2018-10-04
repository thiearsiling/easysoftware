<?php
$dados=MYSQLI_FETCH_ARRAY($database->queryi);
?>
<!DOCTYPE html>
<html lang="pt-br" ng-app>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Easy Software</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="aplicativo para pedido de água mineral e gás de cosinha">
	<meta name="author" content="josé ricardo gomes de oliveira júnior">
    <link rel="stylesheet" href="../vendor/css/bootstrap.css">
</head>
<body onLoad="getDados()">

<?php
include("../view/menu.html.php");
?>

<main class="w-100 p-1 mb-3">
    <div class="container">
        <div class="col-10 offset-1">
            <div class="card">
                <div class="card-header">
                    <h3>Editar Paciente</h3>
                </div>
                <div class="card-body">
                    <form role="search" name="form1" action="" method="post">
                        
                        <div class="row">
                            <div class="col-10 offset-1">
                                <legend class="text-info border-bottom border-info pb-2 font-weight-bold text-center">Contato</legend>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-2 offset-1">
                                <div class="form-group">
                                    <label>DDD</label>
                                    <input class="form-control" type="number" id="nr_ddd_celular" name="nr_ddd_celular" min="11" max="99" required>
                                    <p id="nr_ddd_celular_id" class="text-info small" style="display: none;">DDD deve ser preenchido e deve estar entre 11 e 99</p>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group">
                                    <label>Celular</label>
                                    <input class="form-control" type="number"  id="nr_celular" name="nr_celular" required>
                                    <p id="nr_celular_id" class="text-info small" style="display: none;">Número do celular deve ser preenchido e deve conter 9 dígitos</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-2 offset-1">
                                <div class="form-group">
                                    <label>DDD</label>
                                    <input class="form-control" type="number" min="11" max="99" id="nr_ddd_telefone" name="nr_ddd_telefone">
                                    <p id="nr_ddd_telefone_id" class="text-info small" style="display: none;">DDD deve estar entre 11 e 99</p>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group">
                                    <label>Telefone Fixo</label>
                                    <input class="form-control" type="number" id="nr_telefone" name="nr_telefone">
                                    <p id="nr_telefone_id" class="text-info small" style="display: none;">Número do telefone deve conter 8 dígitos</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-10 offset-1">
                                <div class="form-group">
                                    <label>E-Mail</label>
                                    <input class="form-control" type="email" id="email" name="email" required>
                                    <p id="email_id" class="text-info small" style="display: none;">E-mail deve ser preenchido e deve estar no formato example@example.com</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-10 offset-1">
                                <legend class="text-info border-bottom border-info pb-2 font-weight-bold text-center">Endereço</legend>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-2 offset-1">
                                <div class="form-group">
                                    <label>CEP</label>
                                    <input class="form-control text-center" type="text" id="nr_cep" name="nr_cep" onblur="completaCEP()" required>
                                    <p id="nr_cep_id" class="text-info" style="display: none;">CEP deve ser preenchido</p>
                                    <small>
                                        <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/buscaCep.cfm" target="_blank">Consultar o CEP</a>
                                    </small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Logradouro</label>
                                    <input class="form-control" type="text" name="ds_endereco">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label>Número</label>
                                    <input class="form-control" type="text" name="nr_endereco">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label>Complemento</label>
                                    <input class="form-control" type="text" name="nr_endereco">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3 offset-1">
                                <div class="form-group">
                                    <label>Bairro</label>
                                    <input class="form-control" type="text" name="nm_bairro">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Ciade</label>
                                    <input class="form-control" type="text" name="nm_cidade">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>UF</label>
                                    <select class="custom-select" name="nm_uf">
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
                        <div class="col-10 offset-1">
                            <div class="float-right">
                                <button class="btn btn-warning" type="reset">Limpar Dados</button>
                                <button id="btnOk" class="btn btn-success" type="submit"ng-disabled="!form1.$valid">Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</main>



<script src="../vendor/script/jquery-3.1.1.min.js"></script>
<script src="../vendor/script/bootstrap.min.js"></script>
<script src="../vendor/script/loadingoverlay.js"></script>
<script src="../vendor/script/loader.js"></script>
<script src="../script/_global/completadata.js"></script>
<script src="../script/_global/ajax.js"></script>
<script src="../script/editpac/salvar.js"></script>
<script>
function getDados(){
document.form1.cd_paciente.value="<?php echo $dados['cd_paciente'] ?>";
document.form1.nr_ddd_celular.value="<?php echo $dados['nr_ddd_celular'] ?>";
document.form1.nr_celular.value="<?php echo $dados['nr_celular'] ?>";
document.form1.nr_ddd_telefone.value="<?php echo $dados['nr_ddd_telefone'] ?>";
document.form1.nr_telefone.value="<?php echo $dados['nr_telefone'] ?>";
document.form1.nr_ddd_celular.value="<?php echo $dados['nr_ddd_celular'] ?>";
document.form1.email.value="<?php echo $dados['email'] ?>";
document.form1.nr_cep.value="<?php echo $dados['nr_cep'] ?>";
document.form1.ds_endereco.value="<?php echo $dados['ds_endereco'] ?>";
document.form1.nm_bairro.value="<?php echo $dados['nm_bairro'] ?>";
document.form1.nm_cidade.value="<?php echo $dados['nm_cidade'] ?>";
document.form1.nm_uf.value="<?php echo $dados['nm_uf'] ?>";
document.form1.nr_endereco.value="<?php echo $dados['nr_endereco'] ?>";
}
</script>
</body>
</html>