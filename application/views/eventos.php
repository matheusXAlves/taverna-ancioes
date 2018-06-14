	<div class="container-fluid bg-3 text-center">
		<div class="container-fluid bg-4 text-center">
			<h2>Encontre Eventos Para Participar</h2>
			<h3>ou</h3>
			<a href="<?= base_url('eventos/criar-eventos') ?>" class="Botão4 btn btn-default btn-lg">
				<strong>Crie um Evento</strong>
			<span class="glyphicon glyphicon-pencil"></span>
		</a>
	   	</div>

		<br>

		<?php
			//Columns must be a factor of 12 (1,2,3,4,6,12)
			$numOfCols = 3;
			$rowCount = 0;
		?>

		<div class="row">
			<?php foreach ($eventos as $indice => $evento) :?>
			<div class="col-md-4">
				<div class="card text-center">
					<img src="https://dnd35.files.wordpress.com/2013/08/thelastthreshold_2560x1600_wallpaper.jpg?w=683&h=426" class="img-rounded img-responsive img-thumbnail" alt="Image" width="400" height="300">
					<h3 class="card-header">
						<?=$evento['nme_evento']?>
					</h3>
					<div class="card-body">
						<p class="card-text" style="word-wrap: break-word;">
							Descrição do evento: <?=$evento['info_evento']?>
						</p>
						<p class="card-text"">
							Data do Evento: <?=date('d/m/Y', strtotime($evento['dta_evento']));?>
							<br>
							Tipo de Jogo: <?=$evento['tipo_jogo']?>
						</p>
						<a href="#" class="Botão3 btn btn-success btn-lg">
							<span class="glyphicon glyphicon-ok"></span> Participar 
						</a>
					</div>
				</div>
			</div>
			<?php
			    $rowCount++;
			    if($rowCount % $numOfCols == 0) echo '</div><br><br><div class="row">';
			?>
			<?php endforeach ?>
		</div>

	</div>