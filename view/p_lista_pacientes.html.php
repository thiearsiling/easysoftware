<!DOCTYPE html>
<html lang="pt-br" ng-app>
    
<head>
	<title>Sistema EasyCare</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../vendor/css/bootstrap.css">
</head>

<body>
    
<?php
include("../view/menu.html.php");
?>

<main class="w-100 p-1 mb-5">
    <div class="container">
        <div class="col-10 offset-1">
            <div class="card">
                <div class="card-header">
                    <h3>Consulta de Pacientes</h3>
                </div>
                <div class="card-body">
                    <form role="search" name="form1" action="" method="post">
                        <div class="row">
                            <div class="col-10 offset-1">
                                <div class="form-group">
                                    <label>Prontuário</label>
                                    <input class="form-control" type="text" name="cd_paciente">
                                </div>
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input class="form-control" type="text" name="nm_paciente">
                                </div>
                                <div class="form-group">
                                    <label>Data de nascimento</label>
                                    <input class="form-control" type="text" placeholder="dd/mm/aaaa" name="dt_nascimento">
                                </div>

                                <div class="float-right">
                                    <button class="btn btn-warning" type="reset">Limpar Dados</button>
                                    <button id="btnOk" class="btn btn-primary" type="submit"ng-disabled="!form1.$valid">Buscar</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <?php if (isset($_POST["cd_paciente"])){ ?>

                        <hr>
                        <div class="card">
                            <div class="card-header">Lista de Pacientes</div>
                            <div class="card-body">
                                <table class="table table-sm table-bordered table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center">Cód</th>
                                            <th class="text-left">Nome</th>
                                            <th class="text-left">Data de nascimento</th>
                                            <th>CPF</th>
                                            <!-- <th class="text-center">Sexo</th> -->
                                            <th>Tel. Fixo</th>
                                            <th>Celular</th>
                                            <!-- <th class="text-right">E-mail</th> -->
                                            <!-- <th class="text-right">Endereço</th> -->
                                            <th class="text-center">Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($dados=MYSQLI_FETCH_ARRAY($paciente->queryi)){
                                            echo "<tr>"; 
                                            echo "<td class='text-center'><a href='../controller/p_conspac.php?cd_paciente=".$dados["cd_paciente"]."'>".$dados["cd_paciente"]."</a></td>";
                                            echo "<td class='text-left'>".$dados["nm_paciente"]."</td>";
                                            $dt_nascimento=strtotime($dados["dt_nascimento"]);
                                            echo "<td class='text-left'>".date("d/m/Y",$dt_nascimento)."</td>";
                                            echo "<td>".$dados["nr_cpf"]."</td>";
                                            // echo "<td class='text-center'>".$dados["tp_sexo"]."</td>";
                                            echo "<td>".$dados["nr_ddd_telefone"]." ".$dados["nr_telefone"]."</td>";
                                            echo "<td>".$dados["nr_ddd_celular"]." ".$dados["nr_celular"]."</td>";
                                            // echo "<td class='text-right'>".$dados["email"]."</td>";
                                            // echo "<td class='text-right'>".$dados["ds_endereco"]." - ".$dados["nm_bairro"]." - ".$dados["nm_cidade"]." - ".$dados["nm_uf"]." - ".$dados["nr_cep"]."</td>";
                                            echo "<td class='text-center'><a class='btn btn-sm btn-secondary' href='../controller/p_editpac.php?nr_cpf=".$dados["nr_cpf"]."'>Editar</a></td>";//Fim do laço com os pacientes
                                            echo "</tr>";
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</main>
	
<?php
include("../view/footer.html.php");
?>

<script src="../vendor/script/jquery-3.1.1.min.js"></script>
<script src="../vendor/script/bootstrap.min.js"></script>
<script src="../vendor/script/loadingoverlay.js"></script>
<script src="../vendor/script/loader.js"></script>
<script src="../vendor/script/angular.min.js"></script>
<script src="../script/_global/completadata.js"></script>
<script src="../script/_global/ajax.js"></script>

</body>
</html>