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
						<label>
						<input type="checkbox" name="prueba" value=""> a) Ámbito de validez.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> b) Fundamentación y motivación.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> c) Objetivo de la norma (principios de máxima publicidad, gratuidad, sujetos obligados e información de oficio).</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> d) Clasificación de información.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> e) Protección de datos personales</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> f) Conservación de documentos. </label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> g)  Sanciones administrativas.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> h) Medios de defensa (garantía de audiencia).</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> i) Normas transitorias (artículos).</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> j) Gaceta o medio oficial en la que se haya publicado.</label>
						</br>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">8.1.2 Programa de transparencia y acceso a la información pública</h6></p>
						<hr class="my-2">
						<label>
						<input type="checkbox" name="prueba" value=""> a) Objetivos, metas y líneas de acción para garantizar la transparencia y el acceso a la
                                                                           información pública para la ciudadanía</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> b) Procedimiento interno para que todas las unidades de la administración pública municipal
                                                                            proporcionen la información solicitada.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> c) Portal web con una sección específica de transparencia y acceso a la información
                                                                            pública (ya sea del municipio o en algún servidor del gobierno estatal).</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> d) Responsables</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> e) Presupuesto asignado para la operación del programa.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> f) Informe anual, firmados por la funcionaria o funcionario responsable.</label>
						</br>
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
						<label>
						<input type="checkbox" name="prueba" value=""> a) Mecanismos de contacto (procedimiento o instrumento) publicado y documentado que
                                                                             funcione para que la ciudadanía incida en las acciones municipales.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> b) Medio de difusión de los mecanismos, avalado por la Administración en turno para atender las
                                                                            propuestas ciudadanas.</label>
						</br>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">8.2.2 Seguimiento y atención de las propuestas ciudadanas</h6></p>
						<hr class="my-2">
						<label>
						<input type="checkbox" name="prueba" value=""> a) Esquema para que la propuesta sea considerada por el equipo directivo del municipio.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> b) Mecanismo o procedimiento para que la propuesta sea considerada en un proceso institucional.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> c) Informe de resultados, que señale el número de propuestas atendidas en el año en curso.</label>
						</br>
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
						<label>
						<input type="checkbox" name="prueba" value=""> a) Disposiciones generales.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> b) Principios y valores del servicio público.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> c) Compromisos con el servicio público.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> d) Publicado conforme a la legislación estatal</label>
						</br>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">8.3.2. Difusión y capacitación sobre el Código de ética </h6></p>
						<hr class="my-2">
						<label>
						<input type="checkbox" name="prueba" value=""> a) Acciones de capacitación a sus servidores públicos sobre el Código de Ética.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> b) Mecanismos para la difusión del Código de Ética entre su personal.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> c)  Informe de evaluación de su cumplimiento de las acciones del año en curso.</label>
						</br>
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