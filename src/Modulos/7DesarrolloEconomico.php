<?php include("../Includes/header.php"); ?>


     <!--Enlaces de los stilo CSS -->

	<!--<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />-->
	<link rel="stylesheet" href="../../assets/css/modulos.css" />

    <!-- Modulo 1 Organizacion-->

    <!--Tema 1 -- Estructura -->

	<div class="jumbotron">
		<h2 class="display-7">7.1 Mejora regulatoria</h2>
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
						<h6 class="display-15">7.1.1 Reglamento publicado del Consejo Municipal de Mejora Regulatoria, con las
 						atribuciones siguientes: </h6></p>
					<hr class="my-2">

					<div class="form-group">
					<?php
						$valueCheckNames = [
							'check7111',
							'check7112',
							'check7113',
							'check7114',
							'check7115',
							'check7116',
							'check7117'
						];

						$labels = [
							'a) Establecer bases y principios para la efectiva coordinación entre órganos de gobierno municipal.',
							'b) Definir mecanismos de suministro, intercambio, sistematización y actualización de información.',
							'c) Aprobar lineamientos administrativos, a propuesta de los integrantes de la Comisión.',
							'd) Conocer los informes e indicadores.',
							'e) Promover el uso de metodologías, instrumentos, programas nacionales e internacionales.',
							'f) Identificar problemáticas regulatorias que incidan en la competitividad o el desarrollo económico y social.',
							'g) Establecer lineamientos para el diseño, fundamentación y resolución de trámites y procedimientos administrativos.'
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

						<h6 class="display-15">7.1.2 Consejo Municipal de Mejora Regulatoria</h6></p>
						<hr class="my-2">
						<?php
						$valueCheckNames = [
							'check7121',
							'check7122',
							'check7123',
							'check7124',
							'check7125',
						];

						$labels = [
							'a) Acta de instalación del Consejo Municipal de Mejora Regulatoria.',
							'b) Minutas de las sesiones del Consejo, firmadas y fechadas en el año en curso (mínimo dos minutas).',
							'c) Las minutas están firmadas por un representante del sector privado.',
							'd) Las minutas están firmadas por un representante del sector social.',
							'e) Las minutas están firmadas por un representante del sector académico.'
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

						<h6 class="display-15">7.1.3 Apertura de una unidad económica de bajo riesgo</h6></p>
						<hr class="my-2">
						<?php
						$valueCheckNames = [
							'check7131',
							'check7132',
							'check7133',
						];

						$labels = [
							'a) Decreto por medio del cual se crea la “ventanilla única”.',
							'b) Procedimiento para la apertura de la unidad económica, avalada por Cabildo.',
							'c) Acciones de difusión del procedimiento entre la ciudadanía.'
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
						<h6 class="display-15">7.1.4 Atracción y retención de inversión de todas las actividades económicas existentes </h6></p>
						<hr class="my-2">
						<p>Método de cálculo:
							((Número de unidades de todas las actividades económicas existentes en el año evaluado - número de
							unidades de todas las actividades económicas existentes en el año previo al evaluado) / número de
							unidades de todas las actividades económicas existentes en el año previo al evaluado) * 100</p>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Número de unidades de todas las actividades económicas existentes en el año previo al evaluado.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Número de unidades de todas las actividades económicas existentes en el año evaluado</span></label>
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

	<!--Tema 2 -- Planeacion-->

	<div class="jumbotron">
			<h2 class="display-7">7.2 Vocación productiva</h2>
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
						<h6 class="display-15">7.2.1 Diagnóstico del sector:</h6></p>
					<hr class="my-2">

					<div class="form-group">
					<?php
					$valueCheckNames = [
						'check7211',
						'check7212',
						'check7213',
						'check7214',
						'check7215',
					];

					$labels = [
						'a) Estado que presenta el sector en su entidad federativa.',
						'b) Padrón de unidades en el año evaluado.',
						'c) Padrón de unidades en el año previo al evaluado.',
						'd) Detección de las principales demandas del sector.',
						'e) Análisis de las causas del cierre y apertura de unidades de dicho sector.',
					];
					?>

					<?php for ($i = 0; $i < count($valueCheckNames); $i++) : ?>
						<label>
							<input type="checkbox" name="<?= $valueCheckNames[$i] ?>" value="<?= $valueCheckNamesPadronSector[$i] ?>">
							<?= $labels[$i] ?>
						</label><br>
					<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">7.2.2 Programa de fomento del sector:</h6></p>
						<hr class="my-2">
						<?php
						$valueCheckNames = [
							'check7221',
							'check7222',
							'check7223',
							'check7224',
							'check7225',
						];

						$labels = [
							'a) Objetivo(s).',
							'b) Metas por año.',
							'c) Líneas de acción.',
							'd) Esquema de coordinación y vinculación.',
							'e) Calendario de actividades del año en curso.',
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
						<h6 class="display-15">7.2.3 Atracción y retención de inversión en el sector: </h6></p>
						<hr class="my-2">
						<p>Método de cálculo:
							((Número de unidades del sector en el año evaluado - Número de unidades del sector en el año previo al
							evaluado) / Número de unidades del sector en el año previo al evaluado) * 100</p>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Número de unidades del sector en el año previo al evaluado.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Número de unidades del sector en el año evaluado.</span></label>
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
				<h2 class="display-7">7.3 Fomento económico</h2>
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
						<h6 class="display-15">7.3.1 Reglamento de desarrollo económico, con las atribuciones siguientes: </h6></p>
					<hr class="my-2">

					<div class="form-group">
					<?php
					$valueCheckNames = [
						'check7311',
						'check7312',
						'check7313',
					];

					$labels = [
						'a) Promover la inversión productiva en el municipio a través de programas de incentivos, apoyos, orientación o difusión.',
						'b) Generar información estadística relativa a las actividades y capacidades productivas y comerciales en el municipio.',
						'c) Promover, gestionar y evaluar, en coordinación con las autoridades estatales o federales, el financiamiento de proyectos productivos.',
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

						<h6 class="display-15">7.3.2 Programa municipal de fomento económico</h6></p>
						<hr class="my-2">
						<?php
						$valueCheckNames = [
							'check7321',
							'check7322',
							'check7323',
							'check7324',
						];

						$labels = [
							'a) Personal capacitado para brindar servicios de información y asesoría.',
							'b) Estrategia de vinculación con sectores económicos e Instituciones de Educación Superior.',
							'c) Estrategia de especialización sectorial.',
							'd) Diagnóstico por sector',
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

						<h6 class="display-15">7.3.3 Vinculación para el fomento económico</h6></p>
						<hr class="my-2">
						<?php
						$valueCheckNames = [
							'check7331',
							'check7332',
							'check7333',
						];

						$labels = [
							'a) Convenio de colaboración vigente con por lo menos una Cámara o consejo empresarial municipal o regional, en materia económica.',
							'b) Convenio de colaboración vigente con por lo menos una institución de educación superior del municipio, estado o región, en materia económica.',
							'c) Convenio de colaboración vigente con por lo menos un municipio o estado, en materia económica.',
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


				
			<?php include("../Includes/footer.php"); ?>