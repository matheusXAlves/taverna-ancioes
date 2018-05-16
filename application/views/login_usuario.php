<form class="form-horizontal" method="post" action="<?= base_url('login/usuario/logar') ?>">
	<fieldset>
		<!-- Text input-->
		<div class="form-group">
			<label class=" control-label" for="LOGIN_USUARIO">Nome do Grupo:</label>  
			<div class="">
				<input id="LOGIN_USUARIO" name="login_usuario" type="text" placeholder="Nome do Grupo" class="form-control input-md">
			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class=" control-label" for="SENHA_USUARIO">Nome do Grupo:</label>  
			<div class="">
				<input id="SENHA_USUARIO" name="senha_usuario" type="password" placeholder="Senha" class="form-control input-md">
			</div>
		</div>


		<!-- Button -->
		<div class="form-group">
			<label class=" control-label" for="Cadastrar"></label>
			<div class="">
				<button class="Botão5 btn btn-success" type="submit">Logar</button>
			</div>
		</div>
	</fieldset>
</form>