<?php include("../Includes/header.php"); ?>


       <!--Enlaces de los stilo CSS -->

	<!--<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />-->
	<link rel="stylesheet" href="../../assets/css/modulos.css" />

    <!-- Modulo 1 Organizacion-->

    <!--Tema 1 -- Estructura -->

	<div class="jumbotron">
		<h2 class="display-7">8.1 Transparencia</h2>
	<hr class="my-2">
    </div>

	<!--Indicadores de Gestion-->
	<div class="container">
	<div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				Indicadores de Gestión
			</div>
			<div class="card-body">

				<form method="POST" enctype="multipart/form-data">
					<p>
						<h6 class="display-15">8.1.1 Reglamento municipal de transparencia y acceso a la información pública,
                                              incorpora los elementos siguientes:</h6></p>
					<hr class="my-2">

					<div class="form-group">
					<?php
						$valueCheckNames = [
								'check8111', 'check8112', 'check8113', 'check8114', 'check8115',
								 'check8116', 'check8117', 'check8118', 'check8119', 'check81110'
						];

						$labels = [
						 'a) Ámbito de validez.',
						 'b) Fundamentación y motivación.',												
						 'c) Objetivo de la norma (principios de máxima publicidad, gratuidad, sujetos obligados e información de oficio).',												
						 'd) Clasificación de información.',												
						 'e) Protección de datos personales',												
						 'f) Conservación de documentos. ',												
						 'g)  Sanciones administrativas.',												
						 'h) Medios de defensa (garantía de audiencia).',												
						 'i) Normas transitorias (artículos).',												
						 'j) Gaceta o medio oficial en la que se haya publicado.'

						];
						?>
						<?php for ($i = 0; $i < count($valueCheckNames); $i++) : ?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames[$i] ?>" value="<?= $valueCheckNames[$i] ?>" >
										<?= $labels[$i] ?>
								</label><br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">8.1.2 Programa de transparencia y acceso a la información pública</h6></p>
						<hr class="my-2">
						<?php
						$checkboxNames = [
							'prueba1', 'prueba2', 'prueba3', 'prueba4', 'prueba5', 'prueba6'
						];

						$labels = [
							'a) Objetivos, metas y líneas de acción para garantizar la transparencia y el acceso a la información pública para la ciudadanía',
							'b) Procedimiento interno para que todas las unidades de la administración pública municipal proporcionen la información solicitada.',
							'c) Portal web con una sección específica de transparencia y acceso a la información pública (ya sea del municipio o en algún servidor del gobierno estatal).',
							'd) Responsables',
							'e) Presupuesto asignado para la operación del programa.',
							'f) Informe anual, firmados por la funcionaria o funcionario responsable.'
						];
						?>

						<?php for ($i = 0; $i < count($checkboxNames); $i++) : ?>
							<label>
								<input type="checkbox" name="<?= $checkboxNames[$i] ?>" value="<?= $checkboxNames[$i] ?>">
								<?= $labels[$i] ?>
							</label><br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<!--Indicadores de desempeño -->
	
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				Indicadores de Desempeño
			</div>
			<div class="card-body">

				<form method="POST" enctype="multipart/form-data">

					<div class="form-group">
						<h6 class="display-15">8.1.3 Eficacia en la atención de solicitudes de acceso a la información</h6></p>
						<hr class="my-2">
						<p>Método de cálculo:
							(Solicitudes de acceso a la información recurridas ante el órgano garante del derecho y falladas en
							contra del municipio / total de solicitudes de información presentadas) * 100</p>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Total de solicitudes de acceso a las informaciones recurridas ante el órgano
                          garante del derecho y falladas en contra del municipio.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Total de solicitudes de información presentadas.</span></label>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">8.1.4 Cumplimiento de obligaciones de transparencia</h6></p>
						<hr class="my-2">
						<p>Método de cálculo:
							(Número de obligaciones de transparencia disponibles y actualizadas / total de obligaciones de
							transparencia establecidas en la legislación) * 100.</p>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Número de obligaciones de transparencia, disponibles y actualizadas</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Total de obligaciones de transparencia establecidas en la legislación.</span></label></br>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>						
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
	</div></br>

	<!--Tema 2 -- Planeacion-->

	<div class="jumbotron">
			<h2 class="display-7">8.2 Participación ciudadana</h2>
		<hr class="my-2">
</div>

<!--Indicadores de Gestion-->
<div class="container">
	<div class="row">
<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				Indicadores de Gestión
			</div>
			<div class="card-body">

				<form method="POST" enctype="multipart/form-data">
					<p>
						<h6 class="display-15">8.2.1 Mecanismo para atender las propuestas ciudadanas</h6></p>
					<hr class="my-2">

					<div class="form-group">
					<?php
					$valueCheckNames = [
						'check8211', 'check8212'
					];

					$labels = [
						'a) Mecanismos de contacto (procedimiento o instrumento) publicado y documentado que funcione para que la ciudadanía incida en las acciones municipales.',
						'b) Medio de difusión de los mecanismos, avalado por la Administración en turno para atender las propuestas ciudadanas.'
					];
					?>
					<?php for ($i = 0; $i < count($valueCheckNames); $i++) : ?>
							<label>
									<input type="checkbox" name="<?= $valueCheckNames[$i] ?>" value="<?= $valueCheckNames[$i] ?>" >
									<?= $labels[$i] ?>
							</label><br>
					<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">8.2.2 Seguimiento y atención de las propuestas ciudadanas</h6></p>
						<hr class="my-2">
						<?php
						$valueCheckNames = [
								'check8221', 'check8222', 'check8223'
						];

						$labels = [
							'a) Esquema para que la propuesta sea considerada por el equipo directivo del municipio.',
							'b) Mecanismo o procedimiento para que la propuesta sea considerada en un proceso institucional.',
							'c) Informe de resultados, que señale el número de propuestas atendidas en el año en curso.'
						];
						?>
						<?php for ($i = 0; $i < count($valueCheckNames); $i++) : ?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames[$i] ?>" value="<?= $valueCheckNames[$i] ?>" >
										<?= $labels[$i] ?>
								</label><br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
	</div></br>



        
		<!--Tema 3 -- Contraloría-->

		<div class="jumbotron">
				<h2 class="display-7">8.3 Ética pública</h2>
			<hr class="my-2">
</div>

<!--Indicadores de Gestion-->
<div class="container">
<div class="row">
<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				Indicadores de Gestión
			</div>
			<div class="card-body">

				<form method="POST" enctype="multipart/form-data">
					<p>
						<h6 class="display-15">8.3.1. Código de ética de los servidores públicos municipales</h6></p>
					<hr class="my-2">

					<div class="form-group">
					<?php
						$valueCheckNames = [
								'check8311', 'check8312', 'check8313', 'check8314'
					];

					$labels = [
						'a) Disposiciones generales.',
						'b) Principios y valores del servicio público.',
						'c) Compromisos con el servicio público.',
						'd) Publicado conforme a la legislación estatal'
					];
					?>
					<?php for ($i = 0; $i < count($valueCheckNames); $i++) : ?>
							<label>
									<input type="checkbox" name="<?= $valueCheckNames[$i] ?>" value="<?= $valueCheckNames[$i] ?>" >
									<?= $labels[$i] ?>
							</label><br>
					<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">8.3.2. Difusión y capacitación sobre el Código de ética </h6></p>
						<hr class="my-2">
						<?php
						$valueCheckNames = [
								'check8321', 'check8322', 'check8323'
						];

						$labels = [
							'a) Acciones de capacitación a sus servidores públicos sobre el Código de Ética.',
							'b) Mecanismos para la difusión del Código de Ética entre su personal.',
							'c) Informe de evaluación de su cumplimiento de las acciones del año en curso.'
						];
						?>
						<?php for ($i = 0; $i < count($valueCheckNames); $i++) : ?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames[$i] ?>" value="<?= $valueCheckNames[$i] ?>" >
										<?= $labels[$i] ?>
								</label><br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
	</div></br>


			

		
	<?php include("../Includes/footer.php"); ?>