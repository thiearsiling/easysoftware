<!-- MENU -->

<header>
	<div class = "navbar navbar-default navbar-static-top">
		<div class = "container">
			<div class = "navbar-header">
				<button type = "button" class="navbar-toggle" data-toggle = "collapse" data-target = "navbar-collapse">
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>					
				</button>
			</div>
			<div class = "navbar-collapse collapse">
				<ul class = "nav navbar-nav">
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><strong><?php echo $_SESSION["login"] ?></strong></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="../controller/p_sair.php">Sair</a></li>
</ul>
					<li><a href="index.php">Início</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><strong>Paciente</strong></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="../controller/p_cadpac.php">Cadastro de paciente</a></li>
							<li><a href="../controller/p_lista_pacientes.php">Consulta de paciente</a></li>
						</ul>
					</li>
										<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><strong>Administração</strong></a>
						<ul class="dropdown-menu" role="menu">
<li><a href="../controller/p_usuario.php">Usuários</a></li>
<li><a href="../controller/p_empresa.php">Empresas</a></li>
</ul>
</li>
				</ul>
			</div>			
		</div>	
	</div>
</header>



<!-- END MENU -->
