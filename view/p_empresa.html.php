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

<main class="w-100 p-1 mb-3">
    <div class="container">
        <div class="col-10 offset-1">
            <div class="card">
                <div class="card-header">
                    <h3>Empresas</h3>
                </div>
                <div class="card-body">
                    <a class="btn btn-primary float-right mb-3" href="../controller/p_cadempresa.php">Nova Empresa</a>
                    <table class="table table-sm table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>CNPJ</th>
                                <th>Nome</th>
                                <th>Razão Social</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($dados=MYSQLI_FETCH_ARRAY($empresa->queryi)){ ?>
                                <tr>
                                    <td><?php echo $dados["nr_cnpj"];?></td>
                                    <td><?php echo $dados["nm_empresa"];?></td>
                                    <td><?php echo $dados["ds_razaosocial"];?></td>
                                </tr>
                            <?php } ?>
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