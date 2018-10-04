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
                    <h3>Classificação de Arquivos</h3>
                </div>
                <div class="card-body">
                    <a class="btn btn-primary float-right mb-3" href="../controller/p_cadclassificacao.php">Nova Classificação</a>
                    <table class="table table-sm table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Cód</th>
                                <th class="text-left">Nome</th>
                                <th class="text-left">Descrição</th>
                                <th>Ativo</th>
                                <th>Libera para Paciente</th>
                                <th class="text-center">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($dados=MYSQLI_FETCH_ARRAY($database->queryi)){ ?>
                                <tr>
                                    <td class="text-center"><?php echo $dados["cd_classificacao"]; ?></td>
                                    <td><?php echo $dados["nm_classificacao"]; ?></td>
                                    <td><?php echo $dados["ds_classificacao"]; ?></td>
                                    <td><?php echo $dados["sn_ativo"]; ?></td>
                                    <td><?php echo $dados["sn_libera_paciente"]; ?></td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-secondary" href='../controller/p_cadclassificacao.php?cd_classificacao=<?php echo $dados["cd_classificacao"];?>'>Editar</a>
                                    </td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
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
</body>
</html>