<?php include("../Includes/header.php"); ?>


      <!--Enlaces de los stilo CSS -->

	<!--<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />-->
	<link rel="stylesheet" href="../../assets/css/modulos.css" />

    <!-- Modulo 1 Organizacion-->

    <!--Tema 1 -- Estructura -->

	<div class="jumbotron">
	
		<h2 class="display-7">5.1 Preservación del
		ambiente</h2>
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
						<h6 class="display-15">5.1.1 Reglamento para el cuidado del medio ambiente</h6></p>
					<hr class="my-2">

					<div class="form-group">
					<?php
						$valueCheckNames = [
							'check5111', 'check5112', 'check5113', 'check5114', 'check5115'
						];

						$labels = [
							'a) Enlista las atribuciones del municipio en materia medioambiental.',
							'b) Reglamenta actividades para la protección y preservación del medio ambiente.',
							'c) Reglamenta actividades de restauración ambiental y aprovechamiento sustentable de recursos naturales.',
							'd) Cuenta con mecanismos de coordinación entre autoridades y sociedad civil para la formulación y ejecución de programas o proyectos.',
							'e) Gaceta en donde fue publicado conforme a la legislación estatal.',
						];
						?>

						<?php for ($i = 0; $i < count($valueCheckNames); $i++) : ?>
							<label>
								<input type="checkbox" name="<?= $valueCheckNames[$i] ?>" value="<?= $valueCheckNames[$i] ?>">
								<?= $labels[$i] ?>
							</label><br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15"> 5.1.2 Programa Municipal de Protección al Ambiente </h6></p>
						<hr class="my-2">
						<?php
							$valueCheckNames = [
								'check5121', 'check5122', 'check5123', 'check5124',
								'check5125', 'check5126', 'check5127', 'check5128', 'check5129'
							];

							$labels = [
								'a) Acta de cabildo que muestre que fue aprobado.',
								'b) Cuenta con un diagnóstico de las condiciones ambientales.',
								'c) Está alineado a la política estatal y nacional sobre temas referentes al cuidado y protección del ambiente.',
								'd) Define objetivos, estrategias y metas en el corto, mediano y largo plazo.',
								'e) Tiene identificadas posibles fuentes de financiamiento para ejecutar acciones para la protección de los recursos naturales y el ambiente.',
								'f) Asignación presupuestal específica para el cuidado del medio ambiente.',
								'g) Considera campañas de educación e información para la sensibilización de la población.',
								'h) Gaceta en donde fue publicado conforme a la legislación estatal.',
								'i) Informe que evalúa los objetivos y metas del programa de protección al medio ambiente.',
							];
							?>

							<?php for ($i = 0; $i < count($valueCheckNames); $i++) : ?>
								<label>
									<input type="checkbox" name="<?= $valueCheckNames[$i] ?>" value="<?= $valueCheckNames[$i] ?>">
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

	<!--Tema 2 -- Planeacion-->

	<div class="jumbotron">
		
			<h2 class="display-7">5.2 Cambio climático</h2>
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
						<h6 class="display-15">5.2.1. Atribuciones normativas en materia de cambio climático</h6></p>
					<hr class="my-2">

					<div class="form-group">
					<?php
						$valueCheckNames = [
							'check5211', 'check5212'
						];

						$labels = [
							'a) Funciones para la mitigación y adaptación al cambio climático establecidas a una unidad administrativa municipal responsable del cuidado del medio ambiente o equivalente.',
							'b) Presupuesto de egresos con asignación presupuestal específico para acciones o proyectos en materia de cambio climático.',
						];
						?>

						<?php for ($i = 0; $i < count($valueCheckNames); $i++) : ?>
							<label>
								<input type="checkbox" name="<?= $valueCheckNames[$i] ?>" value="<?= $valueCheckNames[$i] ?>">
								<?= $labels[$i] ?>
							</label><br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15"> 5.2.2. Programa o documento de adaptación y mitigación al cambio climático</h6></p>
						<hr class="my-2">
						<?php
							$valueCheckNames = [
								'check5221', 'check5222', 'check5223', 'check5224',
								'check5225', 'check5226', 'check5227'
							];

							$labels = [
								'a) Acta de cabildo que muestre que fue aprobado.',
								'b) Diagnóstico de impacto del cambio climático en el municipio.',
								'c) Identifica acciones puntuales de mitigación.',
								'd) Identifica acciones puntuales de adaptación.',
								'e) Tiene identificadas fuentes de financiamiento para ejecutar acciones de adaptación y mitigación ante el cambio climático.',
								'f) Señala una progresividad y continuidad de las acciones en el corto, mediano y largo plazo.',
								'g) Gaceta en donde fue publicado conforme a la legislación estatal.',
							];
							?>

							<?php for ($i = 0; $i < count($valueCheckNames); $i++) : ?>
								<label>
									<input type="checkbox" name="<?= $valueCheckNames[$i] ?>" value="<?= $valueCheckNames[$i] ?>">
									<?= $labels[$i] ?>
								</label><br>
							<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15"> 5.2.3 Acciones del municipio para disminuir la vulnerabilidad ante el cambio climático</h6></p>
						<hr class="my-2">
						<?php
								$valueCheckNames = [
									'check5231', 'check5232', 'check5233'
								];

								$labels = [
									'a) Lista de acciones municipales mencionadas en el atlas nacional o estatal o municipal de vulnerabilidad.',
									'b) Mapa de riesgos que incluye la información del atlas nacional o estatal o municipal de vulnerabilidad.',
									'c) Lista de proyectos para disminuir las vulnerabilidades identificadas.',
								];
								?>

								<?php for ($i = 0; $i < count($valueCheckNames); $i++) : ?>
									<label>
										<input type="checkbox" name="<?= $valueCheckNames[$i] ?>" value="<?= $valueCheckNames[$i] ?>">
										<?= $labels[$i] ?>
									</label><br>
								<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>


						<h6 class="display-15"> 5.2.4 Edificaciones</h6></p>
						<hr class="my-2">
						<?php
							$valueCheckNames = [
								'check5241', 'check5242', 'check5243'
							];

							$labels = [
								'a) Actualización al Reglamento de Construcción Municipal en los últimos cinco años, a partir de su publicación.',
								'b) Reglamento de Construcción Municipal que considere la NOM-008-ENER-2001 Eficiencia energética en edificaciones, envolvente de edificios no residenciales',
								'c) Reglamento de Construcción Municipal que considere la NOM-020-ENER-2011. Eficiencia energética en edificaciones, envolvente de edificios para su uso habitacional',
							];
							?>

							<?php for ($i = 0; $i < count($valueCheckNames); $i++) : ?>
								<label>
									<input type="checkbox" name="<?= $valueCheckNames[$i] ?>" value="<?= $valueCheckNames[$i] ?>">
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
	</div>
</br>
	

        
		<!--Tema 3 -- Contraloría-->

		<div class="jumbotron">
			<p>
				<h2 class="display-7">5.3 Servicios públicos
sustentables</h2></p>
			<hr class="my-2">
			<br>
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
						<h6 class="display-15">5.3.1. Eficiencia en servicio de agua potable</h6></p>
					<hr class="my-2">

					<div class="form-group">
					<?php
						$valueCheckNames = [
							'check5311', 'check5312'
						];

						$labels = [
							'a) Consumo de energía (kWh) y presupuesto erogado (monto) para mantener el servicio de agua potable y tratamiento de aguas residuales en los últimos dos años.',
							'b) Diagnóstico energético del sistema de bombeo de agua potable y planta de aguas residuales.',
						];
						?>

						<?php for ($i = 0; $i < count($valueCheckNames); $i++) : ?>
							<label>
								<input type="checkbox" name="<?= $valueCheckNames[$i] ?>" value="<?= $valueCheckNames[$i] ?>">
								<?= $labels[$i] ?>
							</label><br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">5.3.2. Eficiencia en Alumbrado público</h6></p>
						<hr class="my-2">
						<?php
							$valueCheckNames = [
								'check5321', 'check5322'
							];

							$labels = [
								'a) Diagnóstico del alumbrado público en el que identifique cobertura y tipo de energía utilizada.',
								'b) Lista de acciones de sustitución de equipos existentes por tecnologías eficientes.',
							];
							?>

							<?php for ($i = 0; $i < count($valueCheckNames); $i++) : ?>
								<label>
									<input type="checkbox" name="<?= $valueCheckNames[$i] ?>" value="<?= $valueCheckNames[$i] ?>">
									<?= $labels[$i] ?>
								</label><br>
							<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">5.3.3 Mejora en el uso de la flota vehicular del municipio </h6></p>
						<hr class="my-2">
						<?php
						$valueCheckNames = [
							'check5331', 'check5332', 'check5333'
						];

						$labels = [
							'a) Padrón de los vehículos que integran la flota vehicular del municipio.',
							'b) Consumo de combustible (litros) y presupuesto erogado (gasolinas) para mantener la flota vehicular del municipio en los últimos doce meses.',
							'c) Acciones de capacitación en temas de ahorro de combustibles dirigida a los operadores de las unidades que integran la flota vehicular del municipio.',
						];
						?>

						<?php for ($i = 0; $i < count($valueCheckNames); $i++) : ?>
							<label>
								<input type="checkbox" name="<?= $valueCheckNames[$i] ?>" value="<?= $valueCheckNames[$i] ?>">
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
						<h6 class="display-15">5.3.4. Abatimiento del costo promedio por luminaria</h6></p>
						<hr class="my-2">
						<p>Método de cálculo:
							((Costo promedio por luminaria del año evaluado – costo promedio por luminaria en el año previo al
							evaluado) / costo promedio por luminaria en el año previo al evaluado) * -100</p>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Costo promedio por luminaria en el año previo al evaluado.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Costo promedio por luminaria en el año evaluado.</span></label>
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