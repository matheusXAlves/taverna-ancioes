<form class="form-horizontal" method="post" action="<?= base_url('cadastro/usuario/add') ?>">
	<fieldset>
		<!-- Text input-->
		<div class="form-group">
			<label class=" control-label" for="NME_USUARIO">Nome Completo</label>  
			<div class="">
				<input id="NME_USUARIO" name="nme_usuario" type="text" placeholder="Nome Completo" class="form-control input-md">
			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class=" control-label" for="EMAIL_USUARIO">Email</label>  
			<div class="">
				<input id="EMAIL_USUARIO" name="email_usuario" type="text" placeholder="Email" class="form-control input-md">
			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class=" control-label" for="LOGIN_USUARIO">Usuario</label>  
			<div class="">
				<input id="LOGIN_USUARIO" name="login_usuario" type="text" placeholder="Usuario" class="form-control input-md">
			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class=" control-label" for="SENHA_USUARIO">Senha</label>  
			<div class="">
				<input id="SENHA_USUARIO" name="senha_usuario" type="password" placeholder="Senha" class="form-control input-md">
			</div>
		</div>

		<!-- Button -->
		<div class="form-group">
			<label class=" control-label" for="Cadastrar"></label>
			<div class="">
				<button class="Botão5 btn btn-success" type="submit">Cadastrar</button>
			</div>
		</div>
	</fieldset>
</form>