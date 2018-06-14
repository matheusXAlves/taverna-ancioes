<div class="container-fluid bg-2 text-center">
	<h2>Crie seu Proprio Grupo</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

	<div class="row">
		<div class="col-md-3"></div>

		<div class="col-md-6">
			<form class="form-horizontal" method="post" action="<?= base_url('grupos/criar-grupo/add') ?>">
				<fieldset>
					<!-- Text input-->
					<div class="form-group">
						<label class=" control-label" for="NME_GRUPO">Nome do Grupo:</label>  
						<div class="">
							<input id="NME_GRUPO" name="nme_grupo" type="text" placeholder="Nome do Grupo" class="form-control input-md">
						</div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
						<label class=" control-label" for="NME_JOGO">Jogo Base:</label>
						<div class="">
							<select id="NME_JOGO" name="nme_jogo" class="form-control">
								<option value="TORMENTA">Tormenta</option>
								<option value="DD">D&D</option>
								<option value="CALLOFCHUTHULU">Call of Chuthulu</option>
								<option value="CYBERPUNK">Cyberpunk</option>
							</select>
						</div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
						<label class=" control-label" for="TIPO_JOGO">Tipo de Jogo:</label>
						<div class="">
							<select id="TIPO_JOGO" name="tipo_jogo" class="form-control">
								<option value="VISUAL">Visual</option>
								<option value="AUDIO">Audio</option>
								<option value="AUDIOVISUAL">Audio/Visual</option>
								<option value="TEXTO">Texto</option>
							</select>
						</div>
					</div>

					<!-- Select Basic 
					<div class="form-group">
						<label class=" control-label" for="UF">Idiomas:</label>
						<div class="">
							<select id="UF" name="UF" class="form-control">
								<option value="INGLES">Inglês</option>
								<option value="PORTUGUES">Portugues</option>
								<option value="ESPANHOL">Espanhol</option>
								<option value="FRANCES">Francês</option>
							</select>
						</div>
					</div> -->
					
					<!-- Field 
					<div class="form-group">
						<div class="">
							<?php //echo form_open_multipart('upload/do_upload');?>
							<label class=" control-label" for="FOTO_ANIMAL">Imagem do Grupo</label>
							<br /> 
							<input type = "file" name = "userfile" size = "20" />
						</div>
					</div> -->

					<!-- Text Area -->
					<div class="form-group">
						<label class=" control-label" for="INFO_GRUPO">Informações do Grupo:</label> 
						<div class="">
							<textarea class="form-control input-md rounded-0" id="INFO_GRUPO" name="info_grupo" type="text" placeholder="Coloque aqui as informações do seu grupo!" rows="5"></textarea>
						</div>
					</div>

					<!-- Button -->
					<div class="form-group">
						<label class=" control-label" for="Cadastrar"></label>
						<div class="">
							<button class="Botão5 btn btn-success" type="submit">Criar</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>

		<div class="col-md-3"></div>
	</div>
</div>
