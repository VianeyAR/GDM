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
					<?php
					
					$labels311 = [
						'a) Zonificación de los centros de población ubicados en todo el territorio municipal, cabecera municipal y localidades.',
						'b) Estrategias de conservación, mejoramiento y crecimiento de centros de población.',
						'c) Mencione sanciones administrativas a los infractores del marco normativo en la materia.',
						'd) Gaceta estatal en la que fue publicado el PDU o su actualización, con fecha no mayor a cinco años de antigüedad.',
						'e) Comprobante de inscripción del PDU o su actualización en el Registro Público de la Propiedad, con fecha no mayor a cinco años y medio de antigüedad.',
						'f) Documento que valide la congruencia del PDU o su actualización con la planeación urbana estatal; ejemplo: dictamen de congruencia emitido por la dependencia responsable de la planeación urbana del gobierno estatal.',
					];
					
								// Crear variables dinámicas
							for ($i = 0; $i < $opciones['check311']; $i++) {
								${"opcion{$i}_form{$valueCheckNames311[$i]}"} = $_SESSION[$valueCheckNames311[$i]] ?? false;
							}
						?>
						<?php for ($i = 0; $i < $opciones['check311']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames311[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames311[$i] ?>" value="<?= $valueCheckNames311[$i] ?>" <?php if ($checkboxesDeshabilitadosForm1) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels311[$i] ?>
								</label><br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="311" value="" class="btn btn-success" <?php if ($botonDeshabilitado1) echo "disabled"; ?>>Guardar</button>
							</div>
							<?php echo isset($alert311) ? $alert311 : ''; ?>
							<!--Salto de parrafo 2.1.2-->
						</div>


						<h6 class="display-15">3.1.2 Emisión de licencias de construcción</h6></p>
						<hr class="my-2">
						<div class="form-group">
						<?php
						
						$labels312 = [
							'a) Documento que describa el procedimiento para la emisión de licencias de construcción, que señale claramente responsables y tiempos.',
							'b) Documento que describa el procedimiento de solicitud y conexión al servicio de agua potable y drenaje o equivalente.',
							'c) Esquema de verificación del uso del inmueble, respecto a la licencia emitida.',
						];
							// Crear variables dinámicas
							for ($i = 0; $i < $opciones['check312']; $i++) {
								${"opcion{$i}_form{$valueCheckNames312[$i]}"} = $_SESSION[$valueCheckNames312[$i]] ?? false;
							}
						?>
						<?php for ($i = 0; $i < $opciones['check312']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames312[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames312[$i] ?>" value="<?= $valueCheckNames312[$i] ?>" <?php if ($checkboxesDeshabilitadosForm2) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels312[$i] ?>
								</label><br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="312" value="" class="btn btn-success" <?php if ($botonDeshabilitado1) echo "disabled"; ?>>Guardar</button>
							</div>
							<?php echo isset($alert312) ? $alert312 : ''; ?>
							<!--Salto de parrafo 2.1.2-->
						</div>

						<h6 class="display-15">3.1.3 Unidad responsable de la planeación urbana</h6></p>
						<hr class="my-2">
						<div class="form-group">
						<?php
				
						$labels = [
							'a) Comprobante de estudios, que muestre el perfil profesional del titular de la unidad de planeación urbana municipal.',
							'b) Constancia de experiencia laboral del titular de la Unidad responsable de la planeación urbana municipal.',
							'c) Constancia de capacitación del titular de la Unidad Administrativa de la planeación urbana municipal (con una fecha de antigüedad no mayor a 12 meses).',
						];
						// Crear variables dinámicas
						for ($i = 0; $i < $opciones['check313']; $i++) {
							${"opcion{$i}_form{$valueCheckNames313[$i]}"} = $_SESSION[$valueCheckNames313[$i]] ?? false;
						}
					?>
					<?php for ($i = 0; $i < $opciones['check313']; $i++) : ?>
						<?php 
							$valor_variable = ${"opcion{$i}_form{$valueCheckNames313[$i]}"};
						?>
							<label>
									<input type="checkbox" name="<?= $valueCheckNames313[$i] ?>" value="<?= $valueCheckNames313[$i] ?>" <?php if ($checkboxesDeshabilitadosForm3) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
									<?= $labels313[$i] ?>
							</label><br>
					<?php endfor; ?>

					<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="313" value="" class="btn btn-success" <?php if ($botonDeshabilitado3) echo "disabled"; ?>>Guardar</button>
						</div>
						<?php echo isset($alert313) ? $alert313 : ''; ?>
						<!--Salto de parrafo 2.1.2-->
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
						<h6 class="display-15">3.1.4 Índice de Planeación Urbana</h6>
						<hr class="my-2">
						<p>Método de cálculo: (X1*20) + (X2*10) + (X3*20) + (X4*20) + (X5*10) + (X6*10) + (X7*10)</p>

						<?php
						$labels314 = [
							'X1= Zonificación de la cabecera municipal y localidades.',
							'X2= Estrategias de conservación, mejoramiento y crecimiento',
							'X3= Gaceta estatal con publicación del PDU o su actualización.',
							'X4= Comprobante de inscripción del PDU o actualización en el RPP.',
							'X5= Esquema de verificación del uso del inmueble, respecto a la licencia emitida.',
							'X6= Constancia de experiencia laboral del titular',
							'X7= Constancia de capacitación del titular',
						];

						$valoresForm1 = [
							$opcion1_form1_value ?? '',
							$opcion2_form1_value ?? '',
							$opcion3_form1_value ?? '',
							$opcion4_form1_value ?? '',
							$opcion5_form1_value ?? '',
							$opcion6_form1_value ?? '',
							$opcion7_form1_value ?? '',
						];

						foreach ($variableNames['form1'] as $index => $fieldName) {
							${"opcion" . ($index + 1) . "_form1_value"} = $_SESSION[$fieldName] ?? '';
						}
						?>

						<?php foreach($variableNames['form1'] as $index => $fieldName) : ?>
							<?php $valor_variable = ${"opcion" . ($index + 1) . "_form1_value"}; ?>
							<label for="<?= $fieldName ?>" class="text1">
								<input type="text" class="form-control" name="<?= $fieldName ?>" id="<?= $fieldName ?>" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm1) echo "disabled"; ?> required>
								<span><?= $labels314[$index] ?></span>
							</label></br>
						<?php endforeach; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="314" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado4) echo "disabled"; ?>>Guardar</button>
						</div>
						<?php echo isset($alert314) ? $alert314 : ''; ?>
					</div>

					
				</form>
				</div>
		</div>
	</div>
	</div>
	</div></div></br>

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
					<?php
					
					$labels321 = [
						'a) Verificar la constitución y el funcionamiento del órgano ejecutivo y técnico de los comités de POEL.',
						'b) Verificar que la bitácora ambiental incluye las minutas del comité ejecutivo y técnico y los resultados de las evaluaciones de la ejecución del Programa.',
						'c) Revisar que los resultados cumplan con el reglamento de la LGEEPA en materia de ordenamiento.',
						'd) Modificar el Programa de Ordenamiento Ecológico.',
						'e) Gaceta estatal o municipal en la que fue publicado el reglamento o lineamientos municipales del ordenamiento ecológico local.',
					];
						// Crear variables dinámicas
						for ($i = 0; $i < $opciones['check321']; $i++) {
							${"opcion{$i}_form{$valueCheckNames321[$i]}"} = $_SESSION[$valueCheckNames321[$i]] ?? false;
						}
					?>
					<?php for ($i = 0; $i < $opciones['check321']; $i++) : ?>
						<?php 
							$valor_variable = ${"opcion{$i}_form{$valueCheckNames321[$i]}"};
						?>
							<label>
									<input type="checkbox" name="<?= $valueCheckNames321[$i] ?>" value="<?= $valueCheckNames321[$i] ?>" <?php if ($checkboxesDeshabilitadosForm4) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
									<?= $labels321[$i] ?>
							</label><br>
					<?php endfor; ?>

					<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="321" value="" class="btn btn-success" <?php if ($botonDeshabilitado1) echo "disabled"; ?>>Guardar</button>
						</div>
						<?php echo isset($alert321) ? $alert321 : ''; ?>
						<!--Salto de parrafo 2.1.2-->
					</div>

						<h6 class="display-15">3.2.2 Programa de Ordenamiento Ecológico Local </h6></p>
						<hr class="my-2">
						<div class="form-group">
						<?php
						
						$labels322 = [
							'a) Caracterización del territorio de ordenamiento ecológico local.',
							'b) Identificación de problemas ambientales en el diagnóstico del territorio de ordenamiento.',
							'c) Formulación del pronóstico del ordenamiento ecológico local.',
							'd) Evidencia de la participación ciudadana en su proceso de elaboración (listas de asistencia, minutas con acuerdos o relación de compromisos).',
							'e) Gaceta municipal o estatal con la publicación o actualización del “Programa de Ordenamiento Ecológico Local” con una antigüedad no mayor a cinco años.',
							'f) Documento en donde se encuentre el reporte y evaluación para el seguimiento al ordenamiento ecológico con información del año en curso.'
						];
						// Crear variables dinámicas
						for ($i = 0; $i < $opciones['check322']; $i++) {
							${"opcion{$i}_form{$valueCheckNames322[$i]}"} = $_SESSION[$valueCheckNames322[$i]] ?? false;
						}
					?>
					<?php for ($i = 0; $i < $opciones['check322']; $i++) : ?>
						<?php 
							$valor_variable = ${"opcion{$i}_form{$valueCheckNames322[$i]}"};
						?>
							<label>
									<input type="checkbox" name="<?= $valueCheckNames322[$i] ?>" value="<?= $valueCheckNames322[$i] ?>" <?php if ($checkboxesDeshabilitadosForm5) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
									<?= $labels322[$i] ?>
							</label><br>
					<?php endfor; ?>

					<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="322" value="" class="btn btn-success" <?php if ($botonDeshabilitado1) echo "disabled"; ?>>Guardar</button>
						</div>
						<?php echo isset($alert322) ? $alert322 : ''; ?>
						<!--Salto de parrafo 2.1.2-->
					</div>


						<h6 class="display-15">3.2.3 Acciones para la implementación del Ordenamiento Ecológico</h6></p>
						<hr class="my-2">
						<div class="form-group">
						<?php
						

						$labels323 = [
							'a) Bitácora Ambiental (local) con información correspondiente al año en curso.',
							'b) Informe de actividades, firmado por el titular de la instancia responsable y con información del año en curso.'
						];
							// Crear variables dinámicas
							for ($i = 0; $i < $opciones['check323']; $i++) {
								${"opcion{$i}_form{$valueCheckNames323[$i]}"} = $_SESSION[$valueCheckNames323[$i]] ?? false;
							}
						?>
						<?php for ($i = 0; $i < $opciones['check323']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames323[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames323[$i] ?>" value="<?= $valueCheckNames323[$i] ?>" <?php if ($checkboxesDeshabilitadosForm6) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels323[$i] ?>
								</label><br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="323" value="" class="btn btn-success" <?php if ($botonDeshabilitado1) echo "disabled"; ?>>Guardar</button>
							</div>
							<?php echo isset($alert323) ? $alert323 : ''; ?>
							<!--Salto de parrafo 2.1.2-->
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
						<h6 class="display-15">3.2.4 Índice de ordenamiento ecológico</h6>
						<p>Método de cálculo: (X1*20) + (X2*20) + (X3*20) + (X4*20) + (X5*20)</p>
						<hr class="my-2">

						<?php
						$labels324 = [
							'X1= Reglamento o lineamientos de ordenamiento ecológico local.',
							'X2= Identificación de problemas ambientales.',
							'X3= Formulación del pronóstico del ordenamiento ecológico local.',
							'X4= Bitácora Ambiental.',
							'X5= Informe de actividades.',
						];

						$valoresForm2 = [
							$opcion1_form2_value ?? '',
							$opcion2_form2_value ?? '',
							$opcion3_form2_value ?? '',
							$opcion4_form2_value ?? '',
							$opcion5_form2_value ?? '',
						];

						foreach ($variableNames['form2'] as $index => $fieldName) {
							${"opcion" . ($index + 1) . "_form2_value"} = $_SESSION[$fieldName] ?? '';
						}
						?>

						<?php foreach($variableNames['form2'] as $index => $fieldName) : ?>
							<?php $valor_variable = ${"opcion" . ($index + 1) . "_form2_value"}; ?>
							<label for="<?= $fieldName ?>" class="text1">
								<input type="text" class="form-control" name="<?= $fieldName ?>" id="<?= $fieldName ?>" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm4) echo "disabled"; ?> required>
								<span><?= $labels324[$index] ?></span>
							</label>
						<?php endforeach; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="324" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado2) echo "disabled"; ?>>Guardar</button>
						</div>
						<?php echo isset($alert324) ? $alert324 : ''; ?>
					</div>

						</form>


		</div>
		</div>
	</div>
	</div>
	</div></br>

        
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
					<?php
						
						$labels331 = [
							'a) Consideraciones generales',
							'b) Atribuciones de las autoridades municipales en la materia.',
							'c) Organización y operación del Consejo Municipal de protección civil.',
							'd) Atribuciones de la Unidad Municipal de Protección Civil.',
							'e) De la elaboración del programa Municipal de Protección Civil.',
							'f) Participación de la sociedad en las políticas de protección civil.',
							'g) Prevención y control de siniestros.',
							'h) Medidas de seguridad y sanciones administrativas a los infractores del marco normativo en la materia',
							'i) Medios de defensa (los recursos establecidos para combatir las sanciones impuestas conforme al Reglamento).',
							'j) Gaceta en la que fue publicado de acuerdo con la legislación estatal.'
						];
							// Crear variables dinámicas
							for ($i = 0; $i < $opciones['check331']; $i++) {
								${"opcion{$i}_form{$valueCheckNames331[$i]}"} = $_SESSION[$valueCheckNames331[$i]] ?? false;
							}
						?>
						<?php for ($i = 0; $i < $opciones['check331']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames331[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames331[$i] ?>" value="<?= $valueCheckNames331[$i] ?>" <?php if ($checkboxesDeshabilitadosForm7) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels331[$i] ?>
								</label><br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="331" value="" class="btn btn-success" <?php if ($botonDeshabilitado1) echo "disabled"; ?>>Guardar</button>
							</div>
							<?php echo isset($alert331) ? $alert331 : ''; ?>
							<!--Salto de parrafo 2.1.2-->
						</div>


						<h6 class="display-15">3.3.2 Unidad de protección civil</h6></p>
						<hr class="my-2">
						<div class="form-group">
						<?php
						
						$labels332 = [
							'a) Consideraciones generales',
							'b) Atribuciones de las autoridades municipales en la materia.',
							'c) Organización y operación del Consejo Municipal de protección civil.',
							'd) Atribuciones de la Unidad Municipal de Protección Civil.',
							'e) De la elaboración del programa Municipal de Protección Civil.',
							'f) Participación de la sociedad en las políticas de protección civil.',
							'g) Prevención y control de siniestros.',
							'h) Medidas de seguridad y sanciones administrativas a los infractores del marco normativo en la materia',
							'i) Medios de defensa (los recursos establecidos para combatir las sanciones impuestas conforme al Reglamento).',
							'j) Gaceta en la que fue publicado de acuerdo con la legislación estatal.'
						];
							// Crear variables dinámicas
							for ($i = 0; $i < $opciones['check332']; $i++) {
								${"opcion{$i}_form{$valueCheckNames332[$i]}"} = $_SESSION[$valueCheckNames332[$i]] ?? false;
							}
						?>
						<?php for ($i = 0; $i < $opciones['check332']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames332[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames332[$i] ?>" value="<?= $valueCheckNames332[$i] ?>" <?php if ($checkboxesDeshabilitadosForm8) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels332[$i] ?>
								</label><br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="332" value="" class="btn btn-success" <?php if ($botonDeshabilitado1) echo "disabled"; ?>>Guardar</button>
							</div>
							<?php echo isset($alert332) ? $alert332 : ''; ?>
							<!--Salto de parrafo 2.1.2-->
						</div>



						<h6 class="display-15">3.3.3 Consejo municipal de protección civil </h6></p>
						<hr class="my-2">
						<div class="form-group">
						<?php
						
						$labels333 = [
							'a) Acta de instalación del Consejo Municipal de Protección Civil, firmada por todos los miembros que integran dicho consejo.',
							'b) Acta(s) de reunión(es) del año en curso, firmadas por los asistentes.',
							'c) Acta del año en curso con acciones que disminuyen el riesgo ante el cambio climático.'
						];
							// Crear variables dinámicas
							for ($i = 0; $i < $opciones['check333']; $i++) {
								${"opcion{$i}_form{$valueCheckNames333[$i]}"} = $_SESSION[$valueCheckNames333[$i]] ?? false;
							}
						?>
						<?php for ($i = 0; $i < $opciones['check333']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames333[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames333[$i] ?>" value="<?= $valueCheckNames333[$i] ?>" <?php if ($checkboxesDeshabilitadosForm9) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels333[$i] ?>
								</label><br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="333" value="" class="btn btn-success" <?php if ($botonDeshabilitado1) echo "disabled"; ?>>Guardar</button>
							</div>
							<?php echo isset($alert333) ? $alert333 : ''; ?>
							<!--Salto de parrafo 2.1.2-->
						</div>



						<h6 class="display-15">3.3.4 Atlas Municipal de riesgos</h6></p>
						<hr class="my-2">
						<div class="form-group">
						<?php
				
							$labels334 = [
								'a) Mapa que identifique por fenómeno las zonas en donde hay riesgo respecto a un fenómeno con intensidad máxima, media o mínima.',
								'b) Georreferenciado en los sistemas de información geográfica (SIG).',
								'c) Documento que señale que fue elaborado conforme a las normas cromáticas para su elaboración por el Centro Nacional de Prevención de Desastres (CENAPRED).',
								'd) Publicado conforme lo establezca la normatividad estatal o municipal.'
							];
								// Crear variables dinámicas
								for ($i = 0; $i < $opciones['check334']; $i++) {
									${"opcion{$i}_form{$valueCheckNames334[$i]}"} = $_SESSION[$valueCheckNames334[$i]] ?? false;
								}
							?>
							<?php for ($i = 0; $i < $opciones['check334']; $i++) : ?>
								<?php 
									$valor_variable = ${"opcion{$i}_form{$valueCheckNames334[$i]}"};
								?>
									<label>
											<input type="checkbox" name="<?= $valueCheckNames334[$i] ?>" value="<?= $valueCheckNames334[$i] ?>" <?php if ($checkboxesDeshabilitadosForm1) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
											<?= $labels334[$i] ?>
									</label><br>
							<?php endfor; ?>
	
							<div class="btn-group" role="group" aria-label="">
									<button type="submit" name="334" value="" class="btn btn-success" <?php if ($botonDeshabilitado1) echo "disabled"; ?>>Guardar</button>
								</div>
								<?php echo isset($alert334) ? $alert334 : ''; ?>
								<!--Salto de parrafo 2.1.2-->
							</div>

						
						
						<h6 class="display-15">3.3.5 Programa municipal de protección civil </h6></p>
						<hr class="my-2">
						<div class="form-group">
						<?php
					
						$labels335 = [
							'a) Alineación con los objetivos del Plan Estatal y Municipal de Desarrollo',
							'b) Objetivos, estrategias, líneas de acción, acciones y metas',
							'c) Acciones para disminuir la ocupación de suelo en zonas de riesgo',
							'd) Lista de obras para la reducción y mitigación de riesgos.'
						];
							// Crear variables dinámicas
							for ($i = 0; $i < $opciones['check335']; $i++) {
								${"opcion{$i}_form{$valueCheckNames335[$i]}"} = $_SESSION[$valueCheckNames335[$i]] ?? false;
							}
						?>
						<?php for ($i = 0; $i < $opciones['check335']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames335[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames335[$i] ?>" value="<?= $valueCheckNames335[$i] ?>" <?php if ($checkboxesDeshabilitadosForm1) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels335[$i] ?>
								</label><br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="335" value="" class="btn btn-success" <?php if ($botonDeshabilitado1) echo "disabled"; ?>>Guardar</button>
							</div>
							<?php echo isset($alert335) ? $alert335 : ''; ?>
							<!--Salto de parrafo 2.1.2-->
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
							<h6 class="display-15">3.3.6 Tasa de crecimiento de asentamientos humanos en zonas de riesgo</h6>
							<p>((Extensión territorial (km2) de zonas de riesgo ocupadas por asentamientos humanos en el año evaluado
								- extensión territorial (Km2) de las mismas zonas, en el año previo al evaluado) / extensión territorial (Km2)
								de zonas de riesgo ocupadas por asentamientos humanos en el año previo al evaluado) * 100</p>
							<hr class="my-2">

							<?php
							$labels336 = [
								'Extensión territorial (km2) de zonas de riesgo ocupadas por asentamientos humanos en el año previo al evaluado.',
								'Extensión territorial (km2) de zonas de riesgo ocupadas por asentamientos humanos en el año evaluado.',
							];

							$valoresForm4 = [
								$opcion1_form4_value ?? '',
								$opcion2_form4_value ?? '',
							];

							foreach ($variableNames['form4'] as $index => $fieldName) {
								${"opcion" . ($index + 1) . "_form4_value"} = $_SESSION[$fieldName] ?? '';
							}
							?>

							<?php foreach($variableNames['form4'] as $index => $fieldName) : ?>
								<?php $valor_variable = ${"opcion" . ($index + 1) . "_form4_value"}; ?>
								<label for="<?= $fieldName ?>" class="text1">
									<input type="text" class="form-control" name="<?= $fieldName ?>" id="<?= $fieldName ?>" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm4) echo "disabled"; ?> required>
									<span><?= $labels336[$index] ?></span>
								</label>
							<?php endforeach; ?>

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="336" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado4) echo "disabled"; ?>>Guardar</button>
							</div>
							<?php echo isset($alert336) ? $alert336 : ''; ?>
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
					<?php

					$labels341 = [
						'a) Identificación de los municipios que conforman la zona metropolitana donde se localiza el municipio, de acuerdo con el Sistema Urbano Nacional (SUN).',
						'b) Principales características demográficas de la zona metropolitana donde se localiza el municipio.',
						'c) Documento con una reseña del marco normativo de las zonas metropolitanas, que integre mínimo: Ley general de Asentamientos Humanos, Ordenamiento Territorial y Desarrollo Urbano; Ley de Desarrollo Urbano Estatal y Plan o Programa de Desarrollo Urbano Municipal.',
						'd) Estudio que señale qué servicios públicos se ofrecerían de manera más eficiente si se contara con una estrategia metropolitana.',
						'e) Identificación de la cuenca hidrológica en donde se localiza el municipio y la zona metropolitana.',
						'f) Lista de espacios públicos con infraestructura verde instalados en el municipio.'
					];
					
								// Crear variables dinámicas
								for ($i = 0; $i < $opciones['check341']; $i++) {
									${"opcion{$i}_form{$valueCheckNames341[$i]}"} = $_SESSION[$valueCheckNames341[$i]] ?? false;
								}
							?>
							<?php for ($i = 0; $i < $opciones['check341']; $i++) : ?>
								<?php 
									$valor_variable = ${"opcion{$i}_form{$valueCheckNames341[$i]}"};
								?>
									<label>
											<input type="checkbox" name="<?= $valueCheckNames341[$i] ?>" value="<?= $valueCheckNames341[$i] ?>" <?php if ($checkboxesDeshabilitadosForm1) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
											<?= $labels341[$i] ?>
									</label><br>
							<?php endfor; ?>
	
							<div class="btn-group" role="group" aria-label="">
									<button type="submit" name="341" value="" class="btn btn-success" <?php if ($botonDeshabilitado1) echo "disabled"; ?>>Guardar</button>
								</div>
								<?php echo isset($alert341) ? $alert341 : ''; ?>
								<!--Salto de parrafo 2.1.2-->
							</div>


						<h6 class="display-15">3.4.2 Gobernanza metropolitana</h6></p>
						<hr class="my-2">
						<div class="form-group">
						<?php
						

						$labels342 = [
							'a) Documento que formalice la participación del municipio en un consejo o comisión con los municipios de la zona metropolitana.',
							'b) Reglamento o Lineamientos de consejo o comisión de la zona metropolitana.',
							'c) Convenio de colaboración en materia ambiental con al menos un municipio de la zona metropolitana.'
						];
						// Crear variables dinámicas
						for ($i = 0; $i < $opciones['check342']; $i++) {
							${"opcion{$i}_form{$valueCheckNames342[$i]}"} = $_SESSION[$valueCheckNames342[$i]] ?? false;
						}
					?>
					<?php for ($i = 0; $i < $opciones['check342']; $i++) : ?>
						<?php 
							$valor_variable = ${"opcion{$i}_form{$valueCheckNames342[$i]}"};
						?>
							<label>
									<input type="checkbox" name="<?= $valueCheckNames342[$i] ?>" value="<?= $valueCheckNames342[$i] ?>" <?php if ($checkboxesDeshabilitadosForm1) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
									<?= $labels342[$i] ?>
							</label><br>
					<?php endfor; ?>

					<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="342" value="" class="btn btn-success" <?php if ($botonDeshabilitado1) echo "disabled"; ?>>Guardar</button>
						</div>
						<?php echo isset($alert342) ? $alert342 : ''; ?>
						<!--Salto de parrafo 2.1.2-->
					</div>


						<h6 class="display-15">3.4.3 Programa de la zona metropolitana</h6></p>
						<hr class="my-2">
						<div class="form-group">
						<?php
						

						$labels343 = [
							'a) Estrategia para el desarrollo integral de la Zona Metropolitana.',
							'b) Delimitación de los centros de población con espacios geográficos de reserva para una expansión ordenada a largo plazo, que considere estimaciones técnicas del crecimiento',
							'c) Políticas e instrumentos para la reestructuración, localización, mejoramiento de la infraestructura y los equipamientos del ámbito metropolitano.',
							'd) Previsiones y acciones prioritarias para conservar, proteger, acrecentar y mejorar el espacio público',
							'e) Metodología o indicadores para dar seguimiento y evaluar la aplicación y el cumplimiento de los objetivos del programa de la Zona Metropolitana.'
						];
						// Crear variables dinámicas
						for ($i = 0; $i < $opciones['check343']; $i++) {
							${"opcion{$i}_form{$valueCheckNames343[$i]}"} = $_SESSION[$valueCheckNames343[$i]] ?? false;
						}
					?>
					<?php for ($i = 0; $i < $opciones['check343']; $i++) : ?>
						<?php 
							$valor_variable = ${"opcion{$i}_form{$valueCheckNames343[$i]}"};
						?>
							<label>
									<input type="checkbox" name="<?= $valueCheckNames343[$i] ?>" value="<?= $valueCheckNames343[$i] ?>" <?php if ($checkboxesDeshabilitadosForm1) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
									<?= $labels343[$i] ?>
							</label><br>
					<?php endfor; ?>

					<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="343" value="" class="btn btn-success" <?php if ($botonDeshabilitado1) echo "disabled"; ?>>Guardar</button>
						</div>
						<?php echo isset($alert343) ? $alert343 : ''; ?>
						<!--Salto de parrafo 2.1.2-->
					</div>

				</form>
			</
			</div>
		</div>
	</div>
	</div>
	</div></br>




		
	<?php include("../Includes/footer.php"); ?>