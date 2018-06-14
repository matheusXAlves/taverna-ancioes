	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavBar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?= base_url('home') ?>">Taverna Dos Anciões</a>    
			</div>
			<div class="collapse navbar-collapse" id="MyNavBar">
				<ul class="nav navbar-nav navbar-right">
					<li class="nav-item">
						<a href="<?= base_url('grupos') ?>">GRUPOS</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('eventos') ?>">EVENTOS</a>
					</li>
					<li class="nav-item">
						<?php if(!$this->session->userdata("usuario_logado")) { ?>
						    <a href="<?= base_url('cadastro-login') ?>">LOGIN</a>
					  	<?php } ?>
					</li>
					<li class="nav-item">
						<?php if($this->session->userdata("usuario_logado")) { ?>
					    	<a class="btn btn-danger" href="<?= base_url('login/usuario/deslogar') ?>" role="button">SAIR</a>
					    <?php } ?>
					</li>
				</ul>
			</div>
		</div>
	</nav>