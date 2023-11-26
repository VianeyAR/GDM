<?php include("../Includes/header.php"); ?>




    <!--Enlaces de los stilo CSS -->

	<!--<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />-->
	<link rel="stylesheet" href="../../assets/css/modulos.css" />



<!-- Modulo 3 Gestion del territorio-->

<!--Tema 3.1 -- Ingresos -->

<div class="jumbotron">

	<h2 class="display-7">3.1 Planeación Urbana</h2>
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
						<h6 class="display-15">3.1.1 Plan o Programa de Desarrollo Urbano Municipal (PDU)</h6></p>
					<hr class="my-2">

					<div class="form-group">
						<label>
						<input type="checkbox" name="prueba" value=""> a) Zonificación de los centros de población ubicados en todo el territorio municipal, cabecera
                                                                            municipal y localidades.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> b) Estrategias de conservación, mejoramiento y crecimiento de centros de población.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> c) Mencione sanciones administrativas a los infractores del marco normativo en la materia.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> d) Gaceta estatal en la que fue publicado el PDU o su actualización, con fecha no mayor a cinco años
                                                                            de antigüedad.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> e) Comprobante de inscripción del PDU o su actualización en el Registro Público de la Propiedad,
                                                                            con fecha no mayor a cinco años y medio de antigüedad.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> f) Documento que valide la congruencia del PDU o su actualización con la planeación urbana
																			estatal; ejemplo: dictamen de congruencia emitido por la dependencia responsable de la
																			planeación urbana del gobierno estatal.</label>
						</br>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">3.1.2 Emisión de licencias de construcción</h6></p>
						<hr class="my-2">
						<label>
						<input type="checkbox" name="prueba" value=""> a) Documento que describa el procedimiento para la emisión de licencias de construcción, que
																			señale claramente responsables y tiempos.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> b) Documento que describa el procedimiento de solicitud y conexión al servicio de agua potable y
																			drenaje o equivalente.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> c) Esquema de verificación del uso del inmueble, respecto a la licencia emitida.</label>
						</br>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">3.1.3 Unidad responsable de la planeación urbana</h6></p>
						<hr class="my-2">
						<label>
						<input type="checkbox" name="prueba" value=""> a) Comprobante de estudios, que muestre el perfil profesional del titular de la unidad de planeación
																			urbana municipal.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> b) Constancia de experiencia laboral del titular de la Unidad responsable de la planeación urbana
																			municipal.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> c) Constancia de capacitación del titular de la Unidad Administrativa de la planeación urbana
																			municipal (con una fecha de antigüedad no mayor a 12 meses)</label>
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
						<h6 class="display-15">3.1.4 Índice de Planeación Urbana</h6></p>
						<hr class="my-2">
						<p>Método de cálculo: (X1*20) + (X2*10) + (X3*20) + (X4*20) + (X5*10) + (X6*10) + (X7*10)</p>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>X1= Zonificación de la cabecera municipal y localidades.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>X2= Estrategias de conservación, mejoramiento y crecimiento</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>X3= Gaceta estatal con publicación del PDU o su actualización.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span></span>X4= Comprobante de inscripción del PDU o actualización en el RPP.</label></br>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>X5= Esquema de verificación del uso del inmueble, respecto a la licencia emitida.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span></span>X6= Constancia de experiencia laboral del titular</label></br>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span></span>X7= Constancia de capacitación del titular</label>
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
<br>
	<!--Tema 2 -- Planeacion-->

	<div class="jumbotron">

	<h2 class="display-7">3.2 Ordenamiento ecológico</h2>
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
						<h6 class="display-15">3.2.1 Reglamento o lineamientos municipales del ordenamiento ecológico local, con
 													las atribuciones siguientes:</h6></p>
					<hr class="my-2">

					<div class="form-group">
						<label>
						<input type="checkbox" name="prueba" value=""> a) Verificar la constitución y el funcionamiento del órgano ejecutivo y técnico de los comités de
																			POEL.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> b)Verificar que la bitácora ambiental incluye las minutas del comité ejecutivo y técnico y los
																			resultados de las evaluaciones de la ejecución del Programa.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> c) Revisar que los resultados cumplan con el reglamento de la LGEEPA en materia de
                                                                            ordenamiento.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> d) Modificar el Programa de Ordenamiento Ecológico.</label></br>
						<label>
						<input type="checkbox" name="prueba" value=""> e)  Gaceta estatal o municipal en la que fue publicado el reglamento o lineamientos municipales del
																				ordenamiento ecológico local. </label>
						</br>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">3.2.2 Programa de Ordenamiento Ecológico Local </h6></p>
						<hr class="my-2">
						<label>
						<input type="checkbox" name="prueba" value=""> a) Caracterización del territorio de ordenamiento ecológico local.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> b) Identificación de problemas ambientales en el diagnóstico del territorio de ordenamiento.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> c) Formulación del pronóstico del ordenamiento ecológico local.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> d) Evidencia de la participación ciudadana en su proceso de elaboración (listas de asistencia,
																			minutas con acuerdos o relación de compromisos).</label></br>
						<label>
						<input type="checkbox" name="prueba" value=""> e) Gaceta municipal o estatal con la publicación o actualización del “Programa de Ordenamiento
																			Ecológico Local” con una antigüedad no mayor a cinco años.</label></br>
						<label>
						<input type="checkbox" name="prueba" value=""> f) Documento en donde se encuentre el reporte y evaluación para el seguimiento al ordenamiento
																			ecológico con información del año en curso.</label>
						</br>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">3.2.3 Acciones para la implementación del Ordenamiento Ecológico</h6></p>
						<hr class="my-2">
						<label>
						<input type="checkbox" name="prueba" value=""> a) Bitácora Ambiental (local) con información correspondiente al año en curso.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> b) Informe de actividades, firmado por el titular de la instancia responsable y con información del
																			año en curso.</label>
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
						<h6 class="display-15">3.2.4 Índice de ordenamiento ecológico</h6></p>
						<p>Método de cálculo: (X1*20) + (X2*20) + (X3*20) + (X4*20) + (X5*20)</p>
						<hr class="my-2">
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>X1= Reglamento o lineamientos de ordenamiento ecológico local.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>X2= Identificación de problemas ambientales.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>X3= Formulación del pronóstico del ordenamiento ecológico local.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>X4= Bitácora Ambiental.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>X5= Informe de actividades.</span></label>
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
<br>


        
		<!--Tema 3 -- Contraloría-->

		<div class="jumbotron">

	<h2 class="display-7">3.3 Protección civil</h2>
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
						<h6 class="display-15">3.3.1 Reglamento de Protección Civil</h6></p>
					<hr class="my-2">

					<div class="form-group">
						<label>
						<input type="checkbox" name="prueba" value=""> a) Consideraciones generales</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> b) Atribuciones de las autoridades municipales en la materia.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> c) Organización y operación del Consejo Municipal de protección civil.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> d) Atribuciones de la Unidad Municipal de Protección Civil.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> e) De la elaboración del programa Municipal de Protección Civil.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> f) Participación de la sociedad en las políticas de protección civil.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> g) Prevención y control de siniestros.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> h) Medidas de seguridad y sanciones administrativas a los infractores del marco normativo en la
																			materia</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> i) Medios de defensa (los recursos establecidos para combatir las sanciones impuestas conforme
																			al Reglamento).</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> j) Gaceta en la que fue publicado de acuerdo con la legislación estatal.</label>
						</br>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">3.3.2 Unidad de protección civil</h6></p>
						<hr class="my-2">
						<label>
						<input type="checkbox" name="prueba" value=""> a) Organigrama de la administración en funciones.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> b) Manual de organización de la unidad de protección civil.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> c) Nombramiento oficial del titular de la unidad de protección civil.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> d) Constancia(s) de experiencia laboral del titular de la unidad de protección civil con mínimo tres
																			años de experiencia.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> e) Constancia de capacitación del titular de la unidad de protección civil (con una fecha de 
																			antigüedad no mayor a 12 meses)</label>
						</br>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">3.3.3 Consejo municipal de protección civil </h6></p>
						<hr class="my-2">
						<label>
						<input type="checkbox" name="prueba" value=""> a) Acta de instalación del Consejo Municipal de Protección Civil, firmada por todos los miembros
																			que integran dicho consejo.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> b) Acta(s) de reunión(es) del año en curso, firmadas por los asistentes.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> c) Acta del año en curso con acciones que disminuyen el riesgo ante el cambio climático.</label>
						</br>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">3.3.4 Atlas Municipal de riesgos</h6></p>
						<hr class="my-2">
						<label>
						<input type="checkbox" name="prueba" value=""> a)Mapa que identifique por fenómeno las zonas en donde hay riesgo respecto a un fenómeno con
																			intensidad máxima, media o mínima.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> b) Georreferenciado en los sistemas de información geográfica (SIG).</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> c) Documento que señale que fue elaborado conforme a las normas cromáticas para su
																			elaboración por el Centro Nacional de Prevención de Desastres (CENAPRED).</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> d) Publicado conforme lo establezca la normatividad estatal o municipal.</label>
						</br>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">3.3.5 Programa municipal de protección civil </h6></p>
						<hr class="my-2">
						<label>
						<input type="checkbox" name="prueba" value=""> a) Alineación con los objetivos del Plan Estatal y Municipal de Desarrollo</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> b) Objetivos, estrategias, líneas de acción, acciones y metas</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> c) Acciones para disminuir la ocupación de suelo en zonas de riesgo</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> d) Lista de obras para la reducción y mitigación de riesgos.</label>
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
						<h6 class="display-15">3.3.6 Tasa de crecimiento de asentamientos humanos en zonas de riesgo</h6></p>
						<p>((Extensión territorial (km2) de zonas de riesgo ocupadas por asentamientos humanos en el año evaluado
							- extensión territorial (Km2) de las mismas zonas, en el año previo al evaluado) / extensión territorial (Km2)
							de zonas de riesgo ocupadas por asentamientos humanos en el año previo al evaluado) * 100</p>
						<hr class="my-2">
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Extensión territorial (km2) de zonas de riesgo ocupadas por asentamientos
																													humanos en el año previo al evaluado.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Extensión territorial (km2) de zonas de riesgo ocupadas por asentamientos
																													humanos en el año evaluado.</span></label>
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
<br>

			<!--Tema 4 -- Capacitación-->

			<div class="jumbotron">

	<h2 class="display-7">3.4 Coordinación urbana</h2>
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
						<h6 class="display-15">3.4.1 Diagnóstico de la zona metropolitana</h6></p>
					<hr class="my-2">

					<div class="form-group">
						<label>
						<input type="checkbox" name="prueba" value=""> a) Identificación de los municipios que conforman la zona metropolitana donde se localiza el
																			municipio, de acuerdo con el Sistema Urbano Nacional (SUN).</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> b) Principales características demográficas de la zona metropolitana donde se localiza el
																			municipio.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> c)  Documento con una reseña del marco normativo de las zonas metropolitanas, que integre
																			mínimo: Ley general de Asentamientos Humanos, Ordenamiento Territorial y Desarrollo
																			Urbano; Ley de Desarrollo Urbano Estatal y Plan o Programa de Desarrollo Urbano Municipal..</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> d) Estudio que señale qué servicios públicos se ofrecerían de manera más eficiente si se contara
																			con una estrategia metropolitana.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> e) Identificación de la cuenca hidrológica en donde se localiza el municipio y la zona
																			metropolitana.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> f) Lista de espacios públicos con infraestructura verde instalados en el municipio.</label>
						</br>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">3.4.2 Gobernanza metropolitana</h6></p>
						<hr class="my-2">
						<label>
						<input type="checkbox" name="prueba" value=""> a) Documento que formalice la participación del municipio en un consejo o comisión con los
																			municipios de la zona metropolitana</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> b) Reglamento o Lineamientos de consejo o comisión de la zona metropolitana.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> c) Convenio de colaboración en materia ambiental con al menos un municipio de la zona
																			metropolitana.</label>
						</br>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">3.4.3 Programa de la zona metropolitana</h6></p>
						<hr class="my-2">
						<label>
						<input type="checkbox" name="prueba" value=""> a) Estrategia para el desarrollo integral de la Zona Metropolitana.</label>
						</br>	
						<label>
						<input type="checkbox" name="prueba" value=""> b) Delimitación de los centros de población con espacios geográficos de reserva para una
																			expansión ordenada a largo plazo, que considere estimaciones técnicas del crecimiento</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> c) Políticas e instrumentos para la reestructuración, localización, mejoramiento de la
																			infraestructura y los equipamientos del ámbito metropolitano.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> d) Previsiones y acciones prioritarias para conservar, proteger, acrecentar y mejorar el espacio público</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> e) Metodología o indicadores para dar seguimiento y evaluar la aplicación y el cumplimiento de los objetivos del programa de la Zona Metropolitana.</label>
						</br>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div></div>
	</div></br>




		
	<?php include("../Includes/footer.php"); ?>