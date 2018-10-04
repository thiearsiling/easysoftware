<!-- MENU -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container-fluid">
            <a href="#" class="navbar-brand"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Expandir">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item pr-5">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle text-white" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["login"]." (".$_SESSION["perfil"]." do sistema)" ?></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href="../controller/p_sair.php" class="dropdown-item">Sair</a>
                                <a href="../controller/p_alterasenhausuario.php" target="_blank" class="dropdown-item">Alterar sua senha</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item pr-5">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle text-white" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Paciente</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href="../controller/p_cadpac.php" class="dropdown-item">Cadastro de paciente</a>
                                <a href="../controller/p_lista_pacientes.php"class="dropdown-item">Consulta de paciente</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item pr-5">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle text-white" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Arquivo</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href="../controller/p_classificacao.php" class="dropdown-item">Classificação</a>
                                <a href="../controller/p_logarquivos.php" class="dropdown-item">Log de Exclusões</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item pr-5">
                        <div class="dropdown">
                            <?php
                            if ($_SESSION["perfil"] == "Administrador"){?>
                            <a href="#" class="dropdown-toggle text-white" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administração</a>
                            <?php }else{?>
                            <a href="#" class="dropdown-toggle text-white" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" disabled>Administração</a>
                            <?php }?>
                            <div class="dropdown-menu">
                                <a href="../controller/p_usuario.php" class="dropdown-item">Usuários</a>
                                <a href="../controller/p_empresa.php" class="dropdown-item">Empresas</a>
                            </div>
                        </div>
                    </li>
                </ul>  
            </div>

        </div>
    </nav>
</header>
<!-- END MENU -->
