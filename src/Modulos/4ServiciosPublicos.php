<?php include("../Includes/header.php"); ?>


       <!--Enlaces de los stilo CSS -->

	<!--<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />-->
	<link rel="stylesheet" href="../../assets/css/modulos.css" />

    <!-- Modulo 1 Organizacion-->

    <!--Tema 1 -- Estructura -->

	<div class="jumbotron">
		<h2 class="display-7">4.1 Marco normativo</h2>
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
						<h6 class="display-15">4.1.1 Reglamentación municipal para la prestación de los servicios públicos</h6></p>
					<hr class="my-2">

					<div class="form-group">
					<?php
					$valueCheckNames = [
						'check4111', 'check4112', 'check4113', 'check4114',
						'check4115', 'check4116', 'check4117', 'check4118',
						'check4119', 'check4110', 'check4111', 'check4112',
						'check4113', 'check41114'
					];

					$labels = [
						'a) Disposiciones generales (servicios que administra el municipio y sus alcances).',
						'b) Autoridades municipales encargadas de la prestación y sus facultades.',
						'c) Derechos de los usuarios respecto a los servicios públicos.',
						'd) Sanciones a las que puede hacerse acreedor un usuario.',
						'e) Medios de impugnación y órganos encargados de dirimir controversias.',
						'f) Reglamenta el servicio de agua potable, drenaje y alcantarillado.',
						'g) Reglamenta el tratamiento y disposición de aguas residuales.',
						'h) Reglamenta el servicio de alumbrado público.',
						'i) Reglamenta el servicio de limpia y recolección.',
						'j) Reglamenta el traslado, tratamiento y disposición final de residuos.',
						'k) Reglamenta el servicio de panteones.',
						'l) Reglamenta el servicio de mercados públicos.',
						'm) Reglamenta el servicio de calles, parques y jardines.',
						'n) Publicado conforme a la legislación estatal.'
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

						<h6 class="display-15"> 4.1.2 Estructura administrativa para la prestación de los servicios públicos</h6></p>
						<hr class="my-2">
						<?php
							$valueCheckNames = [
								'check4121', 'check4122', 'check4123', 'check4124'
							];

							$labels = [
								'a) Unidad(es) administrativa(s) de servicios públicos en el organigrama de la administración pública municipal.',
								'b) Manual de organización de cada unidad administrativa responsable de la prestación de los servicios públicos.',
								'c) Nombramiento oficial del director o directores responsables.',
								'd) Presupuesto del año en curso aprobado por cabildo de la Ley de Egresos Municipal exclusivo para proyectos en servicios públicos (sin considerar gasto corriente).',
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
<br>
	
	<!--Tema 2 -- Diagnostico-->

	<div class="jumbotron">
			<h2 class="display-7">4.2 Diagnóstico</h2>
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
						<h6 class="display-15">4.2.1 Situación del agua potable, drenaje, alcantarillado, tratamiento y disposición
                                                de sus aguas residuales</h6></p>
					<hr class="my-2">

					<div class="form-group">
					<?php
					$valueCheckNames = [
						'check4211', 'check4212', 'check4213', 'check4214',
						'check4215', 'check4216', 'check4217', 'check4218', 'check4219'
					];

					$labels = [
						'a) Número de viviendas particulares habitadas.',
						'b) Número de viviendas conectadas a un sistema de agua.',
						'c) Número de viviendas sin toma de agua potable en el año evaluado.',
						'd) Número de viviendas conectadas a un sistema de drenaje.',
						'e) Número de viviendas sin drenaje en el año evaluado.',
						'f) Número de tramos de calle.',
						'g) Número de tramos de calle sin alcantarillado en el año evaluado.',
						'h) Volumen de aguas residuales.',
						'i) Volumen de aguas tratadas.',
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

						<h6 class="display-15">4.2.2 Situación del Alumbrado público</h6></p>
						<hr class="my-2">
						<?php
							$valueCheckNames = [
								'check4221', 'check4222', 'check4223', 'check4224',
								'check4225', 'check4226', 'check4227'
							];

							$labels = [
								'a) Número de tramos de calle.',
								'b) Número de tramos de calle con alumbrado público.',
								'c) Número de tramos de calle con alumbrado público funcionando.',
								'd) Número de tramos de calle sin alumbrado público.',
								'e) Número de parques y jardines en el municipio.',
								'f) Número de parques y jardines que cuentan con alumbrado público funcionando.',
								'g) Cuantificación del consumo de energía utilizada por concepto del servicio de alumbrado público.',
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

						<h6 class="display-15">4.2.3 Situación de limpia, recolección, traslado, tratamiento y disposición final de
                                               residuos </h6></p>
						<hr class="my-2">
						<?php
							$valueCheckNames = [
								'check4231', 'check4232', 'check4233', 'check4234',
								'check4235', 'check4236', 'check4237', 'check4238'
							];

							$labels = [
								'a) Número de tramos de calle.',
								'b) Número de tramos de calle que disponen del servicio de limpia.',
								'c) Número de parques y jardines en el municipio.',
								'd) Número de parques y jardines que carecen del servicio de limpia.',
								'e) Número de tiraderos a cielo abierto operando en el municipio.',
								'f) Número de sitios de disposición final de residuos sólidos con autorización del gobierno del estado.',
								'g) Número de toneladas de residuos sólidos que se generan en el municipio.',
								'h) Número de toneladas de residuos sólidos dispuestas en un sitio que cumple con lo establecido en la NOM-083.',
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

						<h6 class="display-15">4.2.4 Situación de Mercados (centrales de abasto) y panteones </h6></p>
						<hr class="my-2">
						<?php
							$valueCheckNames = [
								'check4241', 'check4242', 'check4243', 'check4244',
								'check4245'
							];

							$labels = [
								'a) Número de mercados públicos municipales.',
								'b) Número de mercados ambulantes (tianguis) en el municipio.',
								'c) Número de centrales de abastos en el municipio.',
								'd) Número de panteones municipales.',
								'e) Número de espacios disponibles para depósito de restos humanos registrados por el municipio en el año evaluado.',
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
</div></br>
		<!--Tema 3 -- Contraloría-->

		<div class="jumbotron">
				<h2 class="display-7">4.3 Acciones</h2>
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
						<h6 class="display-15">4.3.1 Programa operativo anual para la prestación de los servicios públicos</h6></p>
					<hr class="my-2">

					<div class="form-group">
					<?php
						$valueCheckNames = [
							'check4311', 'check4312', 'check4313', 'check4314',
							'check4315', 'check4316', 'check4317', 'check4318',
							'check4319', 'check43110', 'check43111', 'check43112'
						];

						$labels = [
							'a) Objetivos.',
							'b) Responsables.',
							'c) Calendario de actividades.',
							'd) Resultados esperados.',
							'e) Metas del servicio de agua potable, drenaje y alcantarillado.',
							'f) Metas del servicio de tratamiento y disposición de aguas residuales.',
							'g) Metas del servicio de alumbrado público.',
							'h) Metas del servicio de limpia y recolección.',
							'i) Metas del servicio de traslado, tratamiento y disposición final de residuos.',
							'j) Metas del servicio de panteones.',
							'k) Metas del servicio de mercados públicos.',
							'l) Metas del servicio de calles, parques y jardines.',
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

						


						<h6 class="display-15">4.3.2 Cartera de proyectos para mejorar la prestación de los servicios públicos</h6></p>
						<hr class="my-2">
						<div class="form-group">
						<?php
							$valueCheckNames = [
								'check8181', 'check8182', 'check8183', 'check8184',
								'check8185', 'check8186', 'check8187', 'check8188'
							];

							$labels = [
								'a) Nombre (de cada proyecto).',
								'b) Objetivo (de cada proyecto).',
								'c) Unidad administrativa responsable (de cada proyecto).',
								'd) Cronograma (calendario de actividades de cada proyecto).',
								'e) Alcance (entregables o productos de cada proyecto).',
								'f) Costo (presupuesto de cada proyecto).',
								'g) Ficha de indicadores de seguimiento (de cada proyecto).',
								'h) Presenta por lo menos un proyecto de cinco servicios públicos diferentes.',
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
				</form>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
</br>

	

			<!--Tema 4 -- Capacitación-->

			<div class="jumbotron">
				
					<h2 class="display-7">4.4 Evaluación</h2>
				<hr class="my-2">
</div>

	<!--Indicadores de desempeño -->
	<div class="container">
	<div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				Indicadores de Desempeño
			</div>
			<div class="card-body">

				<form method="POST" enctype="multipart/form-data">

					<div class="form-group">
						<h6 class="display-15">4.4.1 Tasa de abatimiento de calles sin revestimiento </h6></p>
						<hr class="my-2">
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Metros lineales de calles sin revestimiento en el año previo al evaluado.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Metros lineales de calles sin revestimiento en el año evaluado.</span></label>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">4.4.2 Tasa de abatimiento de la carencia de servicio de agua entubada en las viviendas </h6></p>
						<hr class="my-2">
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Viviendas sin toma de agua entubada en el año previo al evaluado.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Viviendas sin toma de agua entubada en el año evaluado.</span></label></br>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">4.4.3 Tasa de abatimiento del déficit del servicio de drenaje en viviendas particulares  </h6></p>
						<hr class="my-2">
						<p>Método de cálculo:
							((Viviendas sin drenaje en el año evaluado – viviendas sin drenaje en el año previo al evaluado) / Viviendas
							sin drenaje en el año previo al evaluado) * - 100</p>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Viviendas sin drenaje en el año previo al evaluado.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Viviendas sin drenaje en el año evaluado.</span></label>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">4.4.4 Tasa de abatimiento del déficit del servicio de alcantarillado en arterias viales  </h6></p>
						<hr class="my-2">
						<p>Método de cálculo:
							((Tramos de calle sin alcantarillado en el año evaluado – tramos de calle sin alcantarillado en el año previo
							al evaluado) / tramos de calle sin alcantarillado en el año previo al evaluado) * - 100</p>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Tramos de calle sin alcantarillado en el año previo al evaluado.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Tramos de calle sin alcantarillado en el año evaluado.</span></label>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">4.4.5 Porcentaje de agua tratada </h6></p>
						<hr class="my-2">
						<p>Método de cálculo:
							(Metros cúbicos (m3) de agua tratada en el año evaluado / metros cúbicos (m3) totales de aguas residuales
							en el año evaluado) * 100</p>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Metros cúbicos (m3) de agua tratada en el año evaluado.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Metros cúbicos (m3) totales de aguas residuales en el año evaluado.</span></label>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>


						<h6 class="display-15">4.4.6 Cobertura del servicio de recolección de residuos sólidos  </h6></p>
						<hr class="my-2">
						<p>Método de cálculo:
							(Viviendas particulares habitadas que reciben el servicio de recolección de residuos en el año evaluado /
							total de viviendas particulares habitadas del municipio en el año evaluado) * 100</p>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Viviendas particulares habitadas que reciben el servicio de recolección de
																														residuos en el año evaluado.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Total de viviendas particulares habitadas del municipio en el año evaluado.</span></label>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">4.4.7 Tasa de crecimiento anual del índice de áreas verdes y recreativas per cápita   </h6></p>
						<hr class="my-2">
						<p>Método de cálculo:
							((Áreas verdes y recreativas per cápita en el año evaluado - áreas verdes y recreativas per cápita en el año
							previo al evaluado) / áreas verdes y recreativas per cápita en el año previo al evaluado) * 100</p>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Áreas verdes y recreativas per cápita en el año previo al evaluado.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Áreas verdes y recreativas per cápita en el año evaluado.</span></label>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>
						<p>¿Cómo obtener el área verde y recreativa per cápita?</p>
						<p>La fórmula es la siguiente:</p>
						<p>(total de m² de áreas verdes y recreativas / número de habitantes).</p>
						</div>

						<h6 class="display-15">4.4.8 Cobertura en el servicio de alumbrado público  </h6></p>
						<hr class="my-2">
						<p>Método de cálculo:
							(Tramos de calles y espacios públicos que disponen del servicio de alumbrado público con luminarias
							funcionando en el año evaluado / tramos de calles y espacios públicos del municipio en el año evaluado)
							* 100</p>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Tramos de calles y espacios públicos que disponen del servicio de alumbrado
						público con luminarias funcionando en el año evaluado.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Tramos de calles y espacios públicos del municipio en el año evaluado.</span></label>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>


						<h6 class="display-15">4.4.9 Cobertura en el servicio de mercados públicos per cápita </h6></p>
						<hr class="my-2">
						<p>Método de cálculo:
							(Total de mercados públicos municipales en el año evaluado / total de habitantes en el año evaluado)*
							100,000</p>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Total de mercados públicos municipales en el año evaluado.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Total de habitantes (INEGI 2020)</span></label>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15"> 4.4.10 Cobertura en el servicio de panteones </h6></p>
						<hr class="my-2">
						<p>Método de cálculo:
							Número de espacios disponibles para depósito de restos humanos registrados por el municipio en el año
							evaluado / demanda potencial de espacios para el depósito de restos humanos.</p>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Número de espacios disponibles para depósito de restos humanos registrados
																													por el municipio en el año evaluado.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Demanda potencial de espacios para el depósito de restos humanos*.</span></label>
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