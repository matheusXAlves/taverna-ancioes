<div class="container-fluid bg-2 text-center">
	<h2>Crie seu Proprio Evento</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

	<div class="row">
		<div class="col-md-3"></div>

		<div class="col-md-6">
			<form class="form-horizontal" method="post" action="<?= base_url('eventos/criar-eventos/add') ?>">
				<fieldset>
					<!-- Text input-->
					<div class="form-group">
						<label class=" control-label" for="NME_EVENTO">Nome do Evento:</label>  
						<div class="">
							<input id="NME_EVENTO" name="nme_evento" type="text" placeholder="Nome do Evento" class="form-control input-md">
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<!-- Text input-->
							<div class="form-group">
								<label class=" control-label" for="DTA_EVENTO">Data do Evento:</label>  
								<div class="">
									<input id="DTA_EVENTO" name="dta_evento" type="text" placeholder="DD/MM/AAAA" class="form-control input-md">
								</div>
							</div>

							<!-- Text input-->
							<div class="form-group">
								<label class=" control-label" for="HORARIO_EVENTO">Hora do Evento:</label>  
								<div class="">
									<input id="HORARIO_EVENTO" name="HORARIO_EVENTO" type="text" placeholder="HH:MM" class="form-control input-md">
								</div>
							</div>
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

					<!-- Select Basic -->
					<div class="form-group">
						<label class=" control-label" for="IND_PUBLICO_PRIVADO">O evento será:</label>
						<div class="">
							<select id="IND_PUBLICO_PRIVADO" name="ind_publico_privado" class="form-control">
								<option value="Publico">Público</option>
								<option value="Privado">Privado</option>
							</select>
						</div>
					</div>

					<!-- Select Basic 
					<div class="form-group">
						<label class=" control-label" for="IND_PUBLICO_PRIVADO">Escolha um grupo seu para o evento:</label>
						<div class="">
							<select id="IND_PUBLICO_PRIVADO" name="ind_publico_privado" class="form-control">
								<option value="Publico">Público</option>
								<option value="Privado">Privado</option>
							</select>
						</div>
					</div> -->

					<!-- Text Area -->
					<div class="form-group">
						<label class=" control-label" for="INFO_EVENTO">Informações do Grupo:</label> 
						<div class="">
							<textarea class="form-control input-md rounded-0" id="INFO_EVENTO" name="info_evento" type="text" placeholder="Coloque aqui as informações do seu evento!" rows="5"></textarea>
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