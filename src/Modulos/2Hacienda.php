<?php include("../Includes/header.php"); ?>


    <!--Enlaces de los stilo CSS -->

	<!--<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />-->
	<link rel="stylesheet" href="../../assets/css/modulos.css" />



<!-- Modulo 1 Hacienda-->

<!--Tema 1 -- Ingresos -->

<div class="jumbotron">
	<h2 class="display-7">2.1 Ingresos</h2>
	<hr class="my-2">
</div>

<!--Indicadores de Gestion-->
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h5><b>Indicadores de Gestión</b></h5>
				</div>
				<div class="card-body ">
					<form method="POST" enctype="multipart/form-data">

						<p>
							<h6 class="display-15 text-center"><b>2.1.1 Ley de Ingresos Municipal del año en curso</b></h6></p>
						<hr class="my-2">
						<div class="form-group">

							<label><input type="checkbox" name="" value="">a) Con Acuse de recibo por parte del Congreso Local.</label>

							<label><input type="checkbox" name="" value="">b) Gaceta del gobierno estatal en la que fue publicada.</label>

							<label><input type="checkbox" name="" value="">c) Objetivos, estrategias y metas</label>

							<label><input type="checkbox" name="" value="">d) Descripción de los riesgos relevantes para las finanzas públicas.</label>

							<label><input type="checkbox" name="" value="">e) Proyección de las finanzas públicas un año (si la población del municipio es igual o menor a
						200 mil habitantes) o a tres años (si la población del municipio es mayor a 200 habitantes)).</label>

							<label><input type="checkbox" name="" value="">f) Resultados de las finanzas públicas de dos años anteriores.</label>
							

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="" value="" class="btn btn-success">Guardar</button>
							</div>
							<!--Salto de parrafo 2.1.1-->
						</div>


						<p>
							<h6 class="display-15 text-center"><b>2.1.2 Ley de Ingresos Municipal del año en curso</b></h6></p>
						<hr class="my-2">
						<div class="form-group">

							<label><input type="checkbox" name="" value="">a) Con tabla de zonificación y valores.</label>

							<label><input type="checkbox" name="" value="">b) Proceso de inspección del cumplimiento de los usos de suelo.</label>

							<label><input type="checkbox" name="" value="">c) Apartado de sanciones por el incumplimiento de los usos de suelo.</label>

							<label><input type="checkbox" name="" value="">d) Medios de impugnación.</label>

							<label><input type="checkbox" name="" value="">e) Gaceta o periódico en el que fue publicado.</label>
							

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="" value="" class="btn btn-success">Guardar</button>
							</div>
							<!--Salto de parrafo 2.1.2-->
						</div>

						<p>
							<h6 class="display-15 text-center"><b>2.1.3 Ley de Ingresos Municipal del año en curso</b></h6></p>
						<hr class="my-2">
						<div class="form-group">

							<label><input type="checkbox" name="" value="">a) Base de datos actualizada de inmuebles inscritos en el padrón catastral.</label>

							<label><input type="checkbox" name="" value="">b) Cartografía a nivel predio, vinculada al padrón alfanumérico.</label>

							<label><input type="checkbox" name="" value="">c) Listado de valores unitarios actualizados.</label>
							

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="" value="" class="btn btn-success">Guardar</button>
							</div>
							<!--Salto de parrafo 2.1.2-->
						</div>

					</form>

				</div>
			</div>
		</div>

		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h5><b>Indicadores de Desempeño</b></h5>
				</div>
				<div class="card-body">
					<form method="POST" enctype="multipart/form-data">

						<div class="form-group">
							<p>
								<h6 class="display-15"><b>2.1.4 Capacidad financiera</b></h6></p>
							<hr class="my-2">
							<label for="txtNombre" class="text1">
	<input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Monto de ingresos propios en el año evaluado</span></label>
							<label for="txtNombre" class="text1">
	<input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Gasto corriente en el año evaluado</span></label>
							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
							</div>

							<p><b><h6 class="display-15">2.1.5 Tasa de crecimiento real anual de la recaudación del impuesto predial</h6></p></b>
								<hr class="my-2">
								<label for="txtNombre" class="text1">
	<input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Monto del impuesto predial recaudado en el año previo evaluado.</span></label>
								<label for="txtNombre" class="text1">
	<input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Monto del impuesto predial recaudado en el año evaluado.</span></label>
								<div class="btn-group" role="group" aria-label="">
									<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
								</div>

								<p><b><h6 class="display-15">2.1.6 Tasa de crecimiento real anual de la recaudación por derecho de agua</h6></p></b>
									<hr class="my-2">
									<label for="txtNombre" class="text1">
	<input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Monto del derecho de agua recaudado el año previo evaluado.</span></label>
									<label for="txtNombre" class="text1">
	<input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Monto del derecho de agua recaudado en el año evaluado.</span></label>
									<div class="btn-group" role="group" aria-label="">
										<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
									</div>

									<p><b><h6 class="display-15">2.1.7 Tasa de crecimiento real anual de la recaudación de otros ingresos propios</h6></p></b>
										<hr class="my-2">
										<label for="txtNombre" class="text1">
	<input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Otros ingresos propios reales recaudados en el año previo evaluado.</span></label>
										<label for="txtNombre" class="text1">
	<input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Otros ingresos propios reales recaudados en el año evaluado.</span></label>
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



<!-- Modulo 1 Hacienda-->

<!--Tema 2 -- Egresos -->

<div class="jumbotron">

	<h2 class="display-7">2.2 Egresos</h2>
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
						<h6 class="display-15">2.2.1 Presupuesto de egresos municipal</h6></p>
					<hr class="my-2">

					<div class="form-group">
						<label>
						<input type="checkbox" name="prueba" value=""> a) Acta de Cabildo con acuerdo que mencione que fue aprobado.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> b) Gaceta o periódico del gobierno estatal en el que fue publicado.</label>
						</br>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">2.2.2 Armonización contable</h6></p>
						<hr class="my-2">
						<label>
						<input type="checkbox" name="prueba" value=""> a) Reportes de los últimos dos años.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> b) Evidencia que pruebe que el sistema está operando actualmente.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> c) Liga del portal de transparencia donde pueden ser consultados los reportes.</label>
						</br>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">2.2.3 Cuenta Pública </h6></p>
						<hr class="my-2">
						<label>
						<input type="checkbox" name="prueba" value=""> a) Cuenta Pública auditada del año previo al evaluado.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> b) Comprobante de que la Cuenta Pública del año evaluado ya fue entregada a la Entidad Superior
                        de Fiscalización del Estado (Acuse de recibo).</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> c) Publicación del comprobante de que la Cuenta Pública del año evaluado ya fue entregada a la
                        Entidad Superior de Fiscalización del Estado, en el portal web (acuse de recibo).</label>
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
						<h6 class="display-15">2.2.4 Costo de operación</h6></p>
						<hr class="my-2">
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Gasto corriente en el año evaluado.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Gasto total anual en el año evaluado*.</span></label>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">2.2.5 Capacidad de Inversión </h6></p>
						<hr class="my-2">
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Gasto inversión en el año evaluado.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Gasto Total anual en el año evaluado*</span></label></br>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Gasto inversión en el año previo al evaluado</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Gasto Total anual en el año previo al evaluado.</span></label></br>
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



<!-- Modulo 1 Hacienda-->

<!--Tema 2 -- Egresos -->

<div class="jumbotron">

	<h2 class="display-7">2.3 Disciplina Financiera</h2>
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
						<h6 class="display-15">2.3.1 Programa para minimizar el peso de la deuda pública en los ingresos
                                                municipales</h6></p>
					<hr class="my-2">

					<div class="form-group">
						<label>
						<input type="checkbox" name="prueba" value=""> a)  Metas establecidas para los próximos tres años.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> b) Líneas de acción para minimizar el peso de la deuda pública en los ingresos municipales.</label>
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
						<h6 class="display-15">2.3.2 Proporción de Adeudos de Ejercicios Fiscales Anteriores (ADEFAS)</h6></p>
						<hr class="my-2">
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Monto total anual destinado al pago de ADEFAS en el año evaluado.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Ingreso total anual en el año evaluado*</span></label>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">2.3.3 Balance presupuestario sostenible </h6></p>
						<hr class="my-2">
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Ingreso total anual en el año evaluado*</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Gasto total anual en el año evaluado (excepto amortización de la deuda).</span></label></br>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15"> 2.3.4 Nivel de endeudamiento municipal </h6></p>
						<hr class="my-2">
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Endeudamiento sostenible.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Endeudamiento en observación</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Endeudamiento elevado.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Información no entregada o insuficiente.</span></label></br>
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



<!-- Modulo 1 Hacienda-->

<!--Tema 2 -- Egresos -->

<div class="jumbotron">

	<h2 class="display-7">2.4 Patrimonio</h2>
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
						<h6 class="display-15">2.4.1 Disposición normativa en materia de patrimonio municipal </h6></p>
					<hr class="my-2">

					<div class="form-group">
						<label>
						<input type="checkbox" name="prueba" value=""> a) Relación de los bienes muebles e inmuebles de propiedad municipal.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> b)  Autoridad competente para llevar el control de los bienes muebles e inmuebles.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> c) Registro, control y verificación de los bienes muebles e inmuebles.</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> d) Proceso de incorporación y desincorporación de los bienes muebles e inmuebles</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> e) Gaceta o periódico en el que fue publicado.</label>
						</br>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="Accion" value="Agregar" class="btn btn-success">Guardar</button>
						</div>

						<h6 class="display-15">2.4.2 Inventario de bienes muebles e inmuebles</h6></p>
						<hr class="my-2">
						<label>
						<input type="checkbox" name="prueba" value=""> a) Listado de los bienes muebles e inmuebles registrados con número de folio (de manera física o
                                                                            electrónica).</label>
						</br>
						<label>
						<input type="checkbox" name="prueba" value=""> b) Facturas y documentos comprobatorios que acrediten que los bienes muebles e inmuebles en
                                                                            el inventario son propiedad del municipio.</label>
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
						<h6 class="display-15">2.4.3 Administración de bienes muebles e inmuebles patrimonio del municipio.</h6></p>
						<hr class="my-2">
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Bienes muebles e inmuebles en inventario.</span></label>
						<label for="txtNombre" class="text1">
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder=""><span>Bienes muebles e inmuebles existentes.</span></label>
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






	



	<?php include("../Includes/footer.php"); ?>