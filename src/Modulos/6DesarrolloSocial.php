<?php include("../Includes/header.php"); ?>



    <!--Enlaces de los stilo CSS -->

	<!--<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />-->
	<link rel="stylesheet" href="../../assets/css/modulos.css" >

    <!-- Modulo 1 Organizacion -->

    <!--Tema 1 -- Estructura -->
	<div class="jumbotron">
	<h2 class="display-7">6.1 Educación<h2>
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
						<h6 class="display-15">6.1.1 Diagnóstico de educación básica</h6></p>
					<hr class="my-2">

					<div class="form-group">
					<?php
						$valueCheckNames = [
							'check6111',
							'check6112',
							'check6113',
							'check6114',
							'check6115',
							'check6116'
						];

						$labels = [
							'a) Matrícula escolar en nivel básico (preescolar, primaria y secundaria).',
							'b) Infraestructura (número de escuelas de educación básica)',
							'c) Inventario de escuelas de nivel básico (preescolar, primaria y secundaria) que cuentan con sanitarios en funcionamiento.',
							'd) Inventario de escuelas de nivel básico (preescolar, primaria y secundaria) que no cuentan con sanitarios en funcionamiento.',
							'e) Análisis de las condiciones y necesidades de las escuelas públicas.',
							'f) Listado de escuelas públicas de educación básica que tienen acceso a internet.'
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

						<h6 class="display-15">6.1.2 Acciones anuales de apoyo a la educación básica</h6></p>
						<hr class="my-2">
						<?php
						$valueCheckNames = [
							'check6121',
							'check6122',
							'check6123',
							'check6124',
							'check6125'
						];

						$labels = [
							'a) Actividades de promoción de la educación básica (preescolar, primaria y secundaria).',
							'b) Acciones que contribuyan a abatir el analfabetismo.',
							'c) Proyectos y programas que apoyen la permanencia escolar de niñas, niños y adolescentes.',
							'd) Lista de acciones de mantenimiento en escuelas de educación básica (preescolar, primaria y secundaria).',
							'e) Informe de resultados, firmados por la funcionaria o funcionario responsable.'
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

						<h6 class="display-15">6.1.3 Coordinación para promover la educación básica en el municipio</h6></p>
						<hr class="my-2">
						<?php
						$valueCheckNames = [
							'check6131',
							'check6132',
							'check6133'
						];

						$labels = [
							'a) Listado de escuelas de educación básica (preescolar, primaria y secundaria) que cuentan con Comités Escolares de Administración Participativa o Consejos Municipales de Participación.',
							'b) Convenio vigente con organizaciones de la sociedad civil, escuelas o iniciativa privada, cuyo propósito sea apoyar la educación básica.',
							'c) Convenio vigente y/o acuerdos de colaboración, con alguna instancia del gobierno federal, estatal u otro municipio, con el propósito de apoyar la educación básica.'
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
			<h2 class="display-7">6.2 Salud</h2>
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
						<h6 class="display-15">6.2.1 Diagnóstico en materia de salud</h6></p>
					<hr class="my-2">

					<div class="form-group">
					
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">6.2.2 Acciones anuales de fomento y cuidado de la salud </h6></p>
						<hr class="my-2">
						<?php
						$valueCheckNames = [
							'check6221',
							'check6222',
							'check6223',
							'check6224',
							'check6225',
							'check6226',
							'check6227'
						];

						$labels = [
							'a) Campaña de difusión hacia la población sobre problemas prioritarios de salud.',
							'b) Acciones en temas de salud sexual y reproductiva.',
							'c) Acciones para promover hábitos alimenticios saludables (nutrición).',
							'd) Acciones de prevención de mortalidad materna y perinatal.',
							'e) Actividades para la prevención y combate de adicciones.',
							'f) Acciones encaminadas a la prevención de enfermedades de transmisión sexual.',
							'g) Informe de resultados, firmados por la funcionaria o funcionario responsable.'
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

						<h6 class="display-15">6.2.3 Coordinación en materia de salud </h6></p>
						<hr class="my-2">
						<?php
						$valueCheckNames = [
							'check6231',
							'check6232'
						];

						$labels = [
							'a) Convenio vigente con organizaciones de la sociedad civil, centros de salud, hospitales o instancias privadas, cuyo propósito sea promover el cuidado de la salud.',
							'b) Convenio vigente y/o acuerdos de colaboración, con alguna instancia del gobierno federal, estatal u otro municipio, con el propósito de promover el cuidado de la salud.'
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

	
        
		<!--Tema 3 -- Contraloría-->

		<div class="jumbotron">
		<h2 class="display-7">6.3 Grupos Vulnerables</h2></p>
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
						<h6 class="display-15">6.3.1 Diagnóstico de grupos vulnerables</h6></p>
					<hr class="my-2">

					<div class="form-group">
					<?php
						$valueCheckNames = [
							'check6311',
							'check6312'
						];

						$labels = [
							'a) Convenio vigente con organizaciones de la sociedad civil, centros de salud, hospitales o instancias privadas, cuyo propósito sea promover el cuidado de la salud.',
							'b) Convenio vigente y/o acuerdos de colaboración, con alguna instancia del gobierno federal, estatal u otro municipio, con el propósito de promover el cuidado de la salud.'
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

						<h6 class="display-15">6.3.2 Acciones anuales para la atención de grupos vulnerables </h6></p>
						<hr class="my-2">
						<?php
						$valueCheckNames = [
							'check6321',
							'check6322',
							'check6323',
							'check6324',
							'check6325'
						];

						$labels = [
							'a) Objetivos.',
							'b) Metas.',
							'c) Estrategias y líneas de acción.',
							'd) Proyectos o programas específicos que atiendan a grupos vulnerables.',
							'e) Informes de avances y resultados, firmados por la funcionaria o funcionario responsable.'
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

			<!--Tema 4 -- Capacitación-->

			<div class="jumbotron">
			<h2 class="display-7">6.4 Igualdad de Género</h2>
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
						<h6 class="display-15">6.4.1 Instancia municipal responsable de promover la igualdad de género</h6></p>
					<hr class="my-2">
					<div class="form-group">
					<?php
					$valueCheckNames = [
						'check6411',
						'check6412',
						'check6413'
					];

					$labels = [
						'a) Organigrama de la administración municipal, con la unidad administrativa responsable de promover la igualdad de género',
						'b) Manual de organización de la unidad administrativa responsable de promover la igualdad de género que especifique objetivo, puestos y funciones.',
						'c) Programa Operativo Anual con objetivos, metas y resultados esperados.'
					];
					?>

					<?php for ($i = 0; $i < count($valueCheckNames); $i++) : ?>
						<label>
							<input type="checkbox" name="<?= $valueCheckNames[$i] ?>" value="<?= $valueCheckNames[$i] ?>">
							<?= $labels[$i] ?>
						</label><br>
					<?php endfor; ?>


						<h6 class="display-15">6.4.2 Diagnóstico de igualdad de género</h6></p>
					<div class="form-group">
					<?php
					$valueCheckNames = [
						'check6421',
						'check6422',
						'check6423',
						'check6424',
						'check6425',
						'check6426',
						'check6427',
						'check6428',
						'check6429',
						'check64210',
						'check64211'
					];

					$labels = [
						'a) Análisis de las disposiciones normativas federales, estatales y municipales en materia de igualdad de género.',
						'b) Situación del acceso de las mujeres y niñas a la educación',
						'c) Situación del acceso de las mujeres y adolescentes a la salud sexual y reproductiva',
						'd) Situación del acceso de las mujeres y niñas a la seguridad social.',
						'e) Situación del acceso de las mujeres al trabajo remunerado.',
						'f) Situación del acceso de las mujeres a la participación política.',
						'g) Número de mujeres jefa de hogar y en condición de pobreza.',
						'h) Número de mujeres adolescentes embarazadas.',
						'i) Situación de violencia contra las mujeres, niñas y adolescentes en todos los ámbitos de convivencia (público, familiar, escolar, laboral, comunitario e institucional).',
						'j) Situación de programas para el cuidado de infantes y otros familiares que requieren atención.',
						'k) Recursos humanos, materiales y financieros con los que cuenta la unidad responsable en el municipio para la promoción de la igualdad de género'
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

						<h6 class="display-15">6.4.3 Acciones anuales para la promoción de la igualdad de género</h6></p>
						<hr class="my-2">
						<?php
						$valueCheckNames = [
							'check6431',
							'check6432',
							'check6433',
							'check6434',
							'check6435',
							'check6436',
							'check6437',
							'check6438',
							'check6439'
						];

						$labels = [
							'a) Capacitaciones en materia de igualdad entre mujeres y hombres, dirigida a funcionarias y funcionarios de la administración pública municipal.',
							'b) Acciones de promoción para mujeres dentro de la administración pública municipal, en puestos de alto nivel y responsabilidad.',
							'c) Apoyo para financiamiento de proyectos productivos de mujeres, ya sea en forma individual o colectiva, del municipio o en coordinación con el gobierno estatal o federal.',
							'd) Protocolo de atención de casos de violencia contra las mujeres.',
							'e) Campaña para fomentar el acceso y permanencia de mujeres, niñas y adolescentes en el sistema educativo.',
							'f) Vinculación con programas para el cuidado de infantes y otros familiares que requieren atención.',
							'g) Acciones para asistir a que las mujeres cuenten con acceso a la seguridad social.',
							'h) Acciones de inclusión de la perspectiva de género en la elaboración de presupuestos.',
							'i) Informes de avances y resultados, firmados por la funcionaria o funcionario responsable.'
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

						<h6 class="display-15">6.4.4 Coordinación para la promoción de igualdad de género</h6></p>
						<hr class="my-2">
						<?php
						$valueCheckNames = [
							'check6441',
							'check6442'
						];

						$labels = [
							'a) Convenio vigente con organizaciones de la sociedad civil, centros de asistencia o instancias privadas, cuyo propósito sea promover la igualdad de género.',
							'b) Convenio vigente y/o acuerdos de colaboración, con alguna instancia del gobierno federal, estatal u otro municipio, cuyo propósito sea promover la igualdad de género.'
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



	<!--Tema 5 -- Capacitación-->

	<div class="jumbotron">
					<h2 class="display-7">6.5 Juventud</h2>
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
						<h6 class="display-15">6.5.1 Diagnóstico de juventud </h6></p>
					<hr class="my-2">

					<div class="form-group">
					<?php
					$valueCheckNames = [
						'check6511',
						'check6512',
						'check6513',
						'check6514',
						'check6515',
						'check6516',
						'check6517'
					];

					$labels = [
						'a) Análisis de las disposiciones normativas federales, estatales y municipales en materia de juventud.',
						'b) Número de mujeres y hombres en edad joven (12 a 29 años).',
						'c) Esquemas de participación de la juventud en salud y educación.',
						'd) Mecanismos de participación de las personas jóvenes en actividades políticas, cívicas, culturales y deportivas.',
						'e) Número de personas en edad joven sin ocupación laboral formal.',
						'f) Jóvenes en situación de adicción.',
						'g) Recursos humanos, materiales y financieros con los que cuenta la unidad responsable del municipio para la atención de la juventud.'
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

						<h6 class="display-15">6.5.2 Acciones anuales orientadas a la juventud</h6></p>
						<hr class="my-2">
						<?php
						$valueCheckNames = [
							'check6521',
							'check6522',
							'check6523',
							'check6524',
							'check6525',
							'check6526',
							'check6527',
							'check6528'
						];

						$labels = [
							'a) Acciones para fomentar la participación social de la juventud.',
							'b) Acciones para promover el acceso y permanencia de las y los jóvenes en la educación, por medio de estímulos y apoyos para la población en situación de vulnerabilidad.',
							'c) Campañas de orientación vocacional de la juventud.',
							'd) Acciones orientadas a capacitación o acceso al empleo formal de las personas jóvenes.',
							'e) Campañas de difusión de información sobre salud sexual y reproductiva, nutrición, adicciones y prevención de enfermedades.',
							'f) Acciones para fomentar la participación de la juventud en temas de ciencia y tecnología.',
							'g) Programas o proyectos para apoyo a la juventud emprendedora.',
							'h) Informes de avances y resultados, firmados por la funcionaria o funcionario responsable.'
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


	<!--Tema 6 -- Capacitación-->

	<div class="jumbotron">
	<h2 class="display-7">6.6 Deporte y Recreación</h2>
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
						<h6 class="display-15">6.6.1 Diagnóstico de deporte y recreación</h6></p>
					<hr class="my-2">

					<div class="form-group">
					<?php
					$valueCheckNames = [
						'check6611',
						'check6612',
						'check6613',
						'check6614',
						'check6615',
						'check6616',
						'check6617'
					];

					$labels = [
						'a) Análisis de las disposiciones normativas federales, estatales y municipales en materia de juventud.',
						'b) Número de espacios diseñados para deporte y recreación.',
						'c) Número de actividades deportivas.',
						'd) Número de actividades recreativas.',
						'e) Situación y requerimientos de mantenimiento de la infraestructura utilizada para realizar actividades deportivas y recreativas.',
						'f) Personal capacitado para el fomento del deporte y la recreación.',
						'g) Recursos humanos, materiales y financieros con los que se cuenta para la promoción del deporte y la recreación.'
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

						<h6 class="display-15">6.6.2 Acciones anuales para promover el deporte y recreación</h6></p>
						<hr class="my-2">
						<?php
						$valueCheckNames = [
							'check6621',
							'check6622',
							'check6623',
							'check6624',
							'check6625',
							'check6626'
						];

						$labels = [
							'a) Acciones para promover el deporte y la recreación de manera incluyente.',
							'b) Programas de actividad física y deporte, diferenciados para atender a los distintos grupos de población.',
							'c) Programa de mantenimiento de instalaciones y espacios públicos destinados al deporte y la recreación.',
							'd) Acciones para fomentar la recreación en todos los grupos de población.',
							'e) Capacitación del personal dedicado a promover el deporte y la recreación.',
							'f) Informes de avances y resultados, firmados por la funcionaria o funcionario responsable.'
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
