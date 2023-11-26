<?php include("../Includes/header.php"); ?>

<?php
// Inicia la sesión
include("../../bd.php");

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Evaluar y almacenar las opciones seleccionadas según el botón presionado
    if (isset($_POST['111'])) {
        $_SESSION['opcionesSeleccionadas111'] = $_POST['check111'] ?? [];
    } elseif (isset($_POST['112'])) {
        $_SESSION['opcionesSeleccionadas112'] = $_POST['check112'] ?? [];
    } elseif (isset($_POST['113'])) {
        $_SESSION['opcionesSeleccionadas113'] = $_POST['check113'] ?? [];
    }
  // Evaluar el estado general del formulario
  $estadoGeneral111 = 'rezago';  // Inicialmente, asume que no hay checkboxes seleccionados
  // Verifica si hay opciones seleccionadas para el conjunto 1
  $opcionesSeleccionadas111 = isset($_SESSION['opcionesSeleccionadas111']) ? $_SESSION['opcionesSeleccionadas111'] : [];
  if (count($opcionesSeleccionadas111) === 4) {
	  $estadoGeneral111 = 'optimo';  // Todos los checkboxes del conjunto 1 están seleccionados
  } elseif (count($opcionesSeleccionadas111) > 0) {
	  $estadoGeneral111 = 'proceso';  // Al menos 1 checkbox del conjunto 1 está seleccionado
  }
  $_SESSION['estadoGeneral111'] = $estadoGeneral111;  // Almacena el estado general en la sesión

  //112
  $estadoGeneral112 = 'rezago';  
   $opcionesSeleccionadas112 = isset($_SESSION['opcionesSeleccionadas112']) ? $_SESSION['opcionesSeleccionadas112'] : [];
   if (count($opcionesSeleccionadas112) === 4) {
	   $estadoGeneral112 = 'optimo';  
   } elseif (count($opcionesSeleccionadas112) > 0) {
	   $estadoGeneral112 = 'proceso';  
   }
   $_SESSION['estadoGeneral112'] = $estadoGeneral112; 

   //113
   $estadoGeneral113 = 'rezago';  
  $opcionesSeleccionadas113 = isset($_SESSION['opcionesSeleccionadas113']) ? $_SESSION['opcionesSeleccionadas113'] : [];
  if (count($opcionesSeleccionadas113) === 2) {
	  $estadoGeneral113 = 'optimo'; 
  } elseif (count($opcionesSeleccionadas113) > 0) {
	  $estadoGeneral113 = 'proceso'; 
  }
  $_SESSION['estadoGeneral113'] = $estadoGeneral113; 
  
  //114
 // Obtén los valores de los campos de texto
 $numUnidades114 = isset($_POST['txtNombre1141']) ? (int)$_POST['txtNombre1141'] : 0;
 $numUnidadesPromedio114 = isset($_POST['txtNombre1142']) ? (int)$_POST['txtNombre1142'] : 0;

// Verifica si el denominador es 0 antes de realizar la división
if ($numUnidadesPromedio114 != 0) {
    // Calcula el porcentaje
    $porcentaje114 = ($numUnidades114 / $numUnidadesPromedio114) * 100;

    // Evalúa el porcentaje y determina el estado
    if ($porcentaje114 <= 100) {
        $estado114 = 'Optimo';
    } elseif ($porcentaje114 > 100 && $porcentaje114 <= 115) {
        $estado114 = 'En Proceso';
    } else {
        $estado114 = 'Rezago';
    }

    // Almacena el estado en la sesión
    $_SESSION['estadoPorcentaje114'] = $estado114;
} else {
    // Manejar el caso donde el denominador es 0 (división por 0)
    $_SESSION['estadoPorcentaje114'] = 'Error: División por 0';
}

//115
 // Obtén los valores de los campos de texto
 $numUnidades115 = isset($_POST['txtNombre1151']) ? (int)$_POST['txtNombre1151'] : 0;
 $numUnidadesPromedio115 = isset($_POST['txtNombre1152']) ? (int)$_POST['txtNombre1152'] : 0;
 
 // Verifica si el denominador es 0 antes de realizar la división
 if ($numUnidadesPromedio115 != 0) {
	 // Calcula el porcentaje
	 $porcentaje115 = ($numUnidades115 / $numUnidadesPromedio115) * 100;
 
	 // Evalúa el porcentaje y determina el estado
	 if ($porcentaje115 <= 100) {
		 $estado115 = 'Optimo';
	 } elseif ($porcentaje115 > 100 && $porcentaje115 <= 115) {
		 $estado115 = 'En Proceso';
	 } else {
		 $estado115 = 'Rezago';
	 }
 
	 // Almacena el estado en la sesión
	 $_SESSION['estadoPorcentaje115'] = $estado115;
 } else {
	 // Manejar el caso donde el denominador es 0 (división por 0)
	 $_SESSION['estadoPorcentaje115'] = 'Error: División por 0';
 }

 //116
 // Obtén los valores de los campos de texto
 $numUnidades116 = isset($_POST['txtNombre1161']) ? (int)$_POST['txtNombre1161'] : 0;
 $numUnidadesPromedio116 = isset($_POST['txtNombre1162']) ? (int)$_POST['txtNombre1162'] : 0;
 
 // Verifica si el denominador es 0 antes de realizar la división
 if ($numUnidadesPromedio116 != 0) {
	 // Calcula el porcentaje
	 $porcentaje116 = ($numUnidades116 / $numUnidadesPromedio116) * 100;
 
	 // Evalúa el porcentaje y determina el estado
	 if ($porcentaje116 <= 100) {
		 $estado116 = 'Optimo';
	 } elseif ($porcentaje116 > 100 && $porcentaje116 <= 115) {
		 $estado116 = 'En Proceso';
	 } else {
		 $estado116 = 'Rezago';
	 }
 
	 // Almacena el estado en la sesión
	 $_SESSION['estadoPorcentaje116'] = $estado116;
 } else {
	 // Manejar el caso donde el denominador es 0 (división por 0)
	 $_SESSION['estadoPorcentaje116'] = 'Error: División por 0';
 }

 //117
 // Obtén los valores de los campos de texto
 $numUnidades117 = isset($_POST['txtNombre1171']) ? (int)$_POST['txtNombre1171'] : 0;
 $numUnidadesPromedio117 = isset($_POST['txtNombre1172']) ? (int)$_POST['txtNombre1172'] : 0;
 
 // Verifica si el denominador es 0 antes de realizar la división
 if ($numUnidadesPromedio117 != 0) {
	 // Calcula el porcentaje
	 $porcentaje117 = ($numUnidades117 / $numUnidadesPromedio117) * 100;
 
	 // Evalúa el porcentaje y determina el estado
	 if ($porcentaje117 <= 100) {
		 $estado117 = 'Optimo';
	 } elseif ($porcentaje117 > 100 && $porcentaje117 <= 115) {
		 $estado117 = 'En Proceso';
	 } else {
		 $estado117 = 'Rezago';
	 }
 
	 // Almacena el estado en la sesión
	 $_SESSION['estadoPorcentaje117'] = $estado117;
 } else {
	 // Manejar el caso donde el denominador es 0 (división por 0)
	 $_SESSION['estadoPorcentaje117'] = 'Error: División por 0';
 }
    
}
 
?>

	 <!--Enlaces de los stilos CSS -->

	
	<link rel="stylesheet" href="../../assets/css/modulos.css" />

    <!-- Modulo 1 Organizacion-->

    <!--Tema 1 -- Estructura -->

	<div class="jumbotron">

	<h2 class="display-7">1.1 Estructura</h2>
	<hr class="my-2">


</div>
<div class="btn-group" role="group" aria-label="">
        <button type="submit" name="" value="" class="btn btn-success">Registro nuevo</button>
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
						<h6 class="display-15">1.1.1 Bando de Policía y Gobierno</h6></p>
					<hr class="my-2">

					<div class="form-group">
						
						<label>
						<input type="checkbox" name="check111[]" value=""> a) Disposiciones normativas que regulan la organización y funcionamiento del Ayuntamiento.</label>
						</br>
						<label>
						<input type="checkbox" name="check111[]" value=""> b) Disposiciones normativas de la Administración Pública Municipal.</label>
						</br>
						<label>
						<input type="checkbox" name="check111[]" value=""> c) Documento que señale que fue avalado por la Administración o el Ayuntamiento en funciones,
                        según corresponda.</label>
						</br>
						<label>
						<input type="checkbox" name="check111[]" value=""> d) Publicado conforme a la legislación estatal</label>
						</br>
						<div class="btn-group" role="group1" aria-label="">
							<button type="submit" name="111" value="Agregar111" class="btn btn-success">Guardar</button>
							
						</div>

							<div>
							<?php if ($_SESSION["estadoGeneral111"] === "optimo"): ?>
								<div class="alert alert-success" role="alert">
									¡Óptimo!
								</div>
							<?php elseif ($_SESSION["estadoGeneral111"] === "proceso"): ?>
								<div class="alert alert-warning" role="alert">
									En proceso
								</div>
							<?php else: ?>
								<div class="alert alert-danger" role="alert">
									¡Rezago!
								</div>
							<?php endif; ?>

							</div>

						<h6 class="display-15">1.1.2 Manuales de Organización</h6></p>
						<hr class="my-2">
						<label>
						<input type="checkbox" name="check112[]" value=""> a) Disposiciones normativas que regulan la organización y funcionamiento del Ayuntamiento.</label>
						</br>
						<label>
						<input type="checkbox" name="check112[]" value=""> b) Disposiciones normativas de la Administración Pública Municipal.</label>
						</br>
						<label>
						<input type="checkbox" name="check112[]" value=""> c) Documento que señale que fue avalado por la Administración o el Ayuntamiento en funciones,
                        según corresponda.</label>
						</br>
						<label>
						<input type="checkbox" name="check112[]" value=""> d) Publicado conforme a la legislación estatal</label>
						</br>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="112" value="Agregar112" class="btn btn-success">Guardar</button>
						</div>
						<div>
						<?php if ($_SESSION["estadoGeneral112"] === "optimo"): ?>
								<div class="alert alert-success" role="alert">
									¡Óptimo!
								</div>
							<?php elseif ($_SESSION["estadoGeneral112"] === "proceso"): ?>
								<div class="alert alert-warning" role="alert">
									En proceso
								</div>
							<?php else: ?>
								<div class="alert alert-danger" role="alert">
									¡Rezago!
								</div>
							<?php endif; ?>
						</div>

						<h6 class="display-15">1.1.3 Tabulador de sueldos o documentos con la estructura salarial del personal de
                        la administración pública municipal</h6></p>
						<hr class="my-2">
						<label>
						<input type="checkbox" name="check113[]" value=""> a) Disposiciones normativas que regulan la organización y funcionamiento del Ayuntamiento.</label>
						</br>
						<label>
						<input type="checkbox" name="check113[]" value=""> b) Disposiciones normativas de la Administración Pública Municipal.</label>
						</br>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="113" value="Agregar113" class="btn btn-success">Guardar</button>
						</div>
						<?php if ($_SESSION["estadoGeneral113"] === "optimo"): ?>
								<div class="alert alert-success" role="alert">
									¡Óptimo!
								</div>
							<?php elseif ($_SESSION["estadoGeneral113"] === "proceso"): ?>
								<div class="alert alert-warning" role="alert">
									En proceso
								</div>
							<?php else: ?>
								<div class="alert alert-danger" role="alert">
									¡Rezago!
								</div>
							<?php endif; ?>

						
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

				<div class="form-group" >
    <h6 class="display-15">1.1.4 Unidades administrativas existentes en función del número de unidades administrativas promedio</h6>
    <hr class="my-2">
    <label for="txtNombre1141" class="text1">
        <input type="text" class="form-control" name="txtNombre1141" id="txtNombre1141" placeholder="" inputmode="numeric" pattern="[0-9]+" title="Ingrese solo números enteros">
        <span>Número de unidades administrativas que conforman la administración.</span>
    </label>
    <label for="txtNombre1142" class="text2">
        <input type="text" class="form-control" name="txtNombre1142" id="txtNombre1142" placeholder="" inputmode="numeric" pattern="[0-9]+" title="Ingrese solo números enteros">
        <span>Número de unidades administrativas promedio nacional.</span>
    </label>
    <div class="btn-group" role="group" aria-label="">
        <button type="submit" name="114" value="Agregar114" class="btn btn-success">Guardar</button>
    </div>
							</div>
							</form>


						
<?php if (isset($_SESSION['estadoPorcentaje114'])) : ?>
    <?php if ($_SESSION['estadoPorcentaje114'] === 'Optimo') : ?>
        <div class="alert alert-success" role="alert">
            ¡Optimo! El porcentaje es menor a 100.
        </div>
    <?php elseif ($_SESSION['estadoPorcentaje114'] === 'En Proceso') : ?>
        <div class="alert alert-warning" role="alert">
            En proceso. El porcentaje es mayor a 100 pero menor o igual a 115.
        </div>
    <?php elseif ($_SESSION['estadoPorcentaje114'] === 'Error: División por 0') : ?>
        <div class="alert alert-danger" role="alert">
            Error: Se ha ingresado 0 en la división.
        </div>
    <?php else : ?>
        <div class="alert alert-danger" role="alert">
            ¡Rezago! El porcentaje es mayor a 115.
        </div>
    <?php endif; ?>
<?php endif; ?>


	<form method="POST" enctype="multipart/form-data">
     <div class="form-group">
    <h6 class="display-15">1.1.5 Unidades administrativas existentes en función del número de unidades administrativas promedio</h6>
    <hr class="my-2">
    <label for="txtNombre1151" class="text1">
        <input type="text" class="form-control" name="txtNombre1151" id="txtNombre1151" placeholder="" inputmode="numeric" pattern="[0-9]+" title="Ingrese solo números enteros">
        <span>Número de unidades administrativas que conforman la administración.</span>
    </label>
    <label for="txtNombre1152" class="text2">
        <input type="text" class="form-control" name="txtNombre1152" id="txtNombre1152" placeholder="" inputmode="numeric" pattern="[0-9]+" title="Ingrese solo números enteros">
        <span>Número de unidades administrativas promedio nacional.</span>
    </label>
    <div class="btn-group" role="group" aria-label="">
        <button type="submit" name="115" value="Agregar115" class="btn btn-success">Guardar</button>
    </div>
	</div>
	</form>

												
					<?php if (isset($_SESSION['estadoPorcentaje115'])) : ?>
						<?php if ($_SESSION['estadoPorcentaje115'] === 'Optimo') : ?>
							<div class="alert alert-success" role="alert">
								¡Optimo! El porcentaje es menor a 100.
							</div>
						<?php elseif ($_SESSION['estadoPorcentaje115'] === 'En Proceso') : ?>
							<div class="alert alert-warning" role="alert">
								En proceso. El porcentaje es mayor a 100 pero menor o igual a 115.
							</div>
						<?php elseif ($_SESSION['estadoPorcentaje115'] === 'Error: División por 0') : ?>
							<div class="alert alert-danger" role="alert">
								Error: Se ha ingresado 0 en la división.
							</div>
						<?php else : ?>
							<div class="alert alert-danger" role="alert">
								¡Rezago! El porcentaje es mayor a 115.
							</div>
						<?php endif; ?>
					<?php endif; ?>

					<form method="POST" enctype="multipart/form-data">
     				<div class="form-group">		
						<h6 class="display-15">1.1.6 Nivel salarial del Presidente(a) municipal </h6></p>
						<hr class="my-2">
						<label for="txtNombre116" class="text1">
                        <input type="text" class="form-control" name="txtNombre1161" id="txtNombre1161" placeholder="" inputmode="numeric" pattern="[0-9]+" title="Ingrese solo números enteros">
						<span>Puestos de mando medio y superior ocupados por mujeres.</span></label>
						<label for="txtNombre116" class="text2">
                        <input type="text" class="form-control" name="txtNombre1162" id="txtNombre1162" placeholder="" inputmode="numeric" pattern="[0-9]+" title="Ingrese solo números enteros">
						<span>Total de puestos de mando medio y superior de la APM.</span></label>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="116" value="Agregar116" class="btn btn-success">Guardar</button>
						</div>
						</div>
						</form>

													
					<?php if (isset($_SESSION['estadoPorcentaje116'])) : ?>
						<?php if ($_SESSION['estadoPorcentaje116'] === 'Optimo') : ?>
							<div class="alert alert-success" role="alert">
								¡Optimo! El porcentaje es menor a 100.
							</div>
						<?php elseif ($_SESSION['estadoPorcentaje116'] === 'En Proceso') : ?>
							<div class="alert alert-warning" role="alert">
								En proceso. El porcentaje es mayor a 100 pero menor o igual a 115.
							</div>
						<?php elseif ($_SESSION['estadoPorcentaje116'] === 'Error: División por 0') : ?>
							<div class="alert alert-danger" role="alert">
								Error: Se ha ingresado 0 en la división.
							</div>
						<?php else : ?>
							<div class="alert alert-danger" role="alert">
								¡Rezago! El porcentaje es mayor a 115.
							</div>
						<?php endif; ?>
					<?php endif; ?>
					<form method="POST" enctype="multipart/form-data">
     				<div class="form-group">
						<h6 class="display-15">1.1.7 Participación de las mujeres en puestos de mando medio y superior en la
                        administración pública municipal </h6></p>
						<hr class="my-2">
						<label for="txtNombre117" class="text1">
                        <input type="text" class="form-control" name="txtNombre1171" id="txtNombre1171" placeholder="" inputmode="numeric" pattern="[0-9]+" title="Ingrese solo números enteros">
						<span>Número de unidades administrativas que conforman la administración.</span></label>
						<label for="txtNombre117" class="text2">
                        <input type="text" class="form-control" name="txtNombre1172" id="txtNombre1172" placeholder="" inputmode="numeric" pattern="[0-9]+" title="Ingrese solo números enteros">
						<span>Número de unidades administrativas promedio nacional.</span></label>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="117" value="Agregar117" class="btn btn-success">Guardar</button>
						</div>
						</div>
						</form>
													
					<?php if (isset($_SESSION['estadoPorcentaje117'])) : ?>
						<?php if ($_SESSION['estadoPorcentaje117'] === 'Optimo') : ?>
							<div class="alert alert-success" role="alert">
								¡Optimo! El porcentaje es menor a 100.
							</div>
						<?php elseif ($_SESSION['estadoPorcentaje117'] === 'En Proceso') : ?>
							<div class="alert alert-warning" role="alert">
								En proceso. El porcentaje es mayor a 100 pero menor o igual a 115.
							</div>
						<?php elseif ($_SESSION['estadoPorcentaje117'] === 'Error: División por 0') : ?>
							<div class="alert alert-danger" role="alert">
								Error: Se ha ingresado 0 en la división.
							</div>
						<?php else : ?>
							<div class="alert alert-danger" role="alert">
								¡Rezago! El porcentaje es mayor a 115.
							</div>
						<?php endif; ?>
					<?php endif; ?>
					
				
			</div>
		</div>
	</div>
	</div>
						</br>

	
	<!--Tema 2 -- Planeacion-->

		
	<?php include "../Includes/footer.php"; ?>