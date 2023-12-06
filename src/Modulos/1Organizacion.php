<?php include("../Includes/header.php"); ?>

<?php
// Inicia la sesión
include("../../bd.php");
// session_unset();
include("../../funciones.php");
$alerta = '';

if (isset($_POST['registrarNuevoFormulario'])) {

	$alerta = '<div class="alert alert-success" role="alert">
								Nuevo	Formulario.
						</div>';
						
	//habiltar checkbox
	// Inicializar un array con los nombres de las variables
	$checkNames = ['checkDisabled1', 'checkDisabled2', 'checkDisabled3', 'checkDisabled4', 'checkDisabled5', 'checkDisabled6', 'checkDisabled7', 'checkDisabled8', 'checkDisabled9'];

	// Establecer todas las variables de sesión a true
	foreach ($checkNames as $checkName) {
			$_SESSION[$checkName] = false;
	}
	// habilitar inputs
	// Inicializar un array con los nombres de las variables
	$inputNames = ['inputDisabled1', 'inputDisabled2', 'inputDisabled3', 'inputDisabled4','inputDisabled5','inputDisabled6','inputDisabled7','inputDisabled8','inputDisabled9','inputDisabled10'];

	// Recorrer el array y asignar los valores a las variables
	foreach ($inputNames as $inputName) {
			$_SESSION[$inputName] = false;
	}
	// habilitar boton
	// Inicializar un array con los nombres de las variables
	$botonNames = ['deshabilitarBoton1', 'deshabilitarBoton2', 'deshabilitarBoton3', 'deshabilitarBoton4', 'deshabilitarBoton5', 'deshabilitarBoton6', 'deshabilitarBoton7', 'deshabilitarBoton8', 'deshabilitarBoton9', 'deshabilitarBoton10', 'deshabilitarBoton11', 'deshabilitarBoton12', 'deshabilitarBoton13', 'deshabilitarBoton14', 'deshabilitarBoton15', 'deshabilitarBoton16', 'deshabilitarBoton17', 'deshabilitarBoton18', 'deshabilitarBoton19'];
	// Recorrer el array y asignar los valores a las variables
	foreach ($botonNames as $botonName) {
		$_SESSION[$botonName] = false;
	}


}


//deshabiltar checkbox
// Inicializar un array con los nombres de las variables
$checkNames = ['checkDisabled1', 'checkDisabled2', 'checkDisabled3', 'checkDisabled4', 'checkDisabled5', 'checkDisabled6', 'checkDisabled7', 'checkDisabled8', 'checkDisabled9', 'checkDisabled10'];

// Recorrer el array y asignar los valores a las variables
foreach ($checkNames as $index => $checkName) {
    ${"checkboxesDeshabilitadosForm" . ($index + 1)} = $_SESSION[$checkName] ?? true;
}

// deshabilitar inputs
// Inicializar un array con los nombres de las variables
$inputNames = ['inputDisabled1', 'inputDisabled2', 'inputDisabled3', 'inputDisabled4','inputDisabled5','inputDisabled6','inputDisabled7','inputDisabled8','inputDisabled9','inputDisabled10'];

// Recorrer el array y asignar los valores a las variables
foreach ($inputNames as $index => $inputName) {
    ${"inputsDeshabilitadosForm" . ($index + 1)} = $_SESSION[$inputName] ?? true;
}
// deshabilitar boton
// Inicializar un array con los nombres de las variables
$botonNames = ['deshabilitarBoton1', 'deshabilitarBoton2', 'deshabilitarBoton3', 'deshabilitarBoton4', 'deshabilitarBoton5', 'deshabilitarBoton6', 'deshabilitarBoton7', 'deshabilitarBoton8', 'deshabilitarBoton9', 'deshabilitarBoton10', 'deshabilitarBoton11', 'deshabilitarBoton12', 'deshabilitarBoton13', 'deshabilitarBoton14', 'deshabilitarBoton15', 'deshabilitarBoton16', 'deshabilitarBoton17', 'deshabilitarBoton18', 'deshabilitarBoton19'];
// Recorrer el array y asignar los valores a las variables
foreach ($botonNames as $index => $botonName) {
	${"botonDeshabilitado" . ($index + 1)} = $_SESSION[$botonName] ?? true;
}
// valores checkboxes
// Inicializar un array con los nombres de las variables

$opciones = [
		'check111' => 4, // Último número de cada grupo de checkboxes
		'check112' => 4,
		'check113' => 2,
		'check121' => 5,
		'check122' => 3,
		'check123' => 7,
		'check131' => 3,
		'check132' => 3,
		'check141' => 5,
		'check142' => 3,
];

$valueCheckNames111 = [
	'check1111', 'check1112', 'check1113', 'check1114',
];
$valueCheckNames112 = [
	'check1121', 'check1122', 'check1123', 'check1124',
];
$valueCheckNames113 = [
	'check1131', 'check1132',
];
$valueCheckNames121 = [
	'check1211', 'check1212', 'check1213', 'check1214', 'check1215'
];
$valueCheckNames122 = [
	'check1221', 'check1222', 'check1223', 
];
$valueCheckNames123 = [
	'check1231', 'check1232', 'check1233', 'check1234', 'check1235', 'check1236', 'check1237'
];
$valueCheckNames131 = [
	'check1311', 'check1312','check1313',  
];
$valueCheckNames132 = [
	'check1321', 'check1322', 'check1323',
];
$valueCheckNames141 = [
	'check1411', 'check1412', 'check1413', 'check1414', 'check1415'
];
$valueCheckNames142 = [
	'check1421', 'check1422', 'check1423'
];
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check111']; $i++) {
	${"opcion{$i}_form{$valueCheckNames111[$i]}"} = $_SESSION[$valueCheckNames111[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check112']; $i++) {
	${"opcion{$i}_form{$valueCheckNames112[$i]}"} = $_SESSION[$valueCheckNames112[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check113']; $i++) {
	${"opcion{$i}_form{$valueCheckNames113[$i]}"} = $_SESSION[$valueCheckNames113[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check121']; $i++) {
	${"opcion{$i}_form{$valueCheckNames121[$i]}"} = $_SESSION[$valueCheckNames121[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check122']; $i++) {
	${"opcion{$i}_form{$valueCheckNames122[$i]}"} = $_SESSION[$valueCheckNames122[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check123']; $i++) {
	${"opcion{$i}_form{$valueCheckNames123[$i]}"} = $_SESSION[$valueCheckNames123[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check131']; $i++) {
	${"opcion{$i}_form{$valueCheckNames131[$i]}"} = $_SESSION[$valueCheckNames131[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check132']; $i++) {
	${"opcion{$i}_form{$valueCheckNames132[$i]}"} = $_SESSION[$valueCheckNames132[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check141']; $i++) {
	${"opcion{$i}_form{$valueCheckNames141[$i]}"} = $_SESSION[$valueCheckNames141[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check142']; $i++) {
	${"opcion{$i}_form{$valueCheckNames142[$i]}"} = $_SESSION[$valueCheckNames142[$i]] ?? false;
}

// valores inputs
$variableNames = [
	'form1' => ['txtNombre1141', 'txtNombre1142'],
	'form2' => ['txtNombre1151', 'txtNombre1152'],
	'form3' => ['txtNombre1161', 'txtNombre1162'],
	'form4' => ['txtNombre1171', 'txtNombre1172'],
	'form5' => ['txtNombre1241', 'txtNombre1242', 'txtNombre1243', 'txtNombre1244', 'txtNombre1245', 'txtNombre1246', 'txtNombre1247'],
	'form6' => ['txtNombre2251', 'txtNombre2252', 'txtNombre2253', 'txtNombre2254',],
	'form7' => ['txtNombre2321', 'txtNombre2322'],
	'form8' => ['txtNombre2331', 'txtNombre2332'],
	'form9' => ['txtNombre2341'],
	'form10' => ['txtNombre2431', 'txtNombre2432']
];

// Recorrer el array y asignar los valores a las variables
// Recorrer el array y asignar los valores a las variables
foreach ($variableNames as $form => $inputNames) {
	foreach ($inputNames as $inputName) {
			${"opcion1_$form" . "_$inputName"} = $_SESSION[$inputName] ?? '';
	}
}

	
// Alerta para cada subtema
$alerts = [
	'alert111', 'alert112', 'alert113', 'alert114', 'alert115', 'alert116', 'alert117',
	'alert221', 'alert222', 'alert223', 'alert224', 'alert225',
	'alert231', 'alert232', 'alert233', 'alert234',
	'alert241', 'alert242', 'alert243'
];

foreach ($alerts as $index => $alert) {
	${$alert} = $_SESSION[$alert] ?? '';
}

$estadoGeneral = '';



// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$querySelect = mysqli_query($conexion, "SELECT `id_tema` FROM `tema` WHERE tema = 'Indicadores de Gestión'");
	$dataTema1 = mysqli_fetch_assoc($querySelect);
	$idTema1 = $dataTema1['id_tema'];

	$querySelect = mysqli_query($conexion, "SELECT `id_tema` FROM `tema` WHERE tema = 'Indicadores de Desempeño'");
	$dataTema2 = mysqli_fetch_assoc($querySelect);
	$idTema2 = $dataTema2['id_tema'];

    // Evaluar y almacenar las opciones seleccionadas según el botón presionado
  if (isset($_POST['111'])) {
		$_SESSION['completado1'] = true;
		$checkboxesDeshabilitadosForm1 = true;
		$_SESSION['checkDisabled1'] = $checkboxesDeshabilitadosForm1;
		$botonDeshabilitado1 = true;
		$_SESSION['deshabilitarBoton1'] = $botonDeshabilitado1;
		$count = 0;

		$check1 = 0;
		$check2 = 0;
		$check3 = 0;
		$check4 = 0;
		if(isset($_POST['check1111'])) {
			$opcion1_form1_value = isset($_POST['check1111']) ? $_POST['check1111'] : '';
			$_SESSION['check1111'] = $opcion1_form1_value;
			$check1 = 1;
			$count = $count + 1;
		}
		if(isset($_POST['check1112'])) {
			$opcion2_form1_value = isset($_POST['check1112']) ? $_POST['check1112'] : '';
			$_SESSION['check1112'] = $opcion2_form1_value;
			$check2 = 1;
			$count = $count + 1;
		}
		if(isset($_POST['check1113'])) {
			$opcion3_form1_value = isset($_POST['check1113']) ? $_POST['check1113'] : '';
			$_SESSION['check1113'] = $opcion3_form1_value;
			$check3 = 1;
			$count = $count + 1;
		}
		if(isset($_POST['check1114'])) {
			$opcion4_form1_value = isset($_POST['check1114']) ? $_POST['check1114'] : '';
			$_SESSION['check1114'] = $opcion4_form1_value;
			$check4 = 1;
			$count = $count + 1;
		}

		// Evaluar el estado general del formulario
		$estadoGeneral111 = 'rezago';  // Inicialmente, asume que no hay checkboxes seleccionados

		if ($count === 4) {
			$estadoGeneral111 = 'optimo';  // Todos los checkboxes del conjunto 1 están seleccionados
		} elseif ($count > 0) {
			$estadoGeneral111 = 'proceso';  // Al menos 1 checkbox del conjunto 1 está seleccionado
		}

		if ($estadoGeneral111 === "optimo") { 
			$alert111='<div class="alert alert-success" role="alert">
				¡Óptimo!
				</div>';
		} elseif ($estadoGeneral111 === "proceso") {
			$alert111='<div class="alert alert-warning" role="alert">
				En proceso
			</div>';
		} elseif ($estadoGeneral111 === "rezago") {
			$alert111='<div class="alert alert-danger" role="alert">
				¡Rezago!
			</div>';
		} elseif ($estadoGeneral111 === "") {

		} 

		$queryInsert = mysqli_query($conexion, "INSERT INTO `subtema` (`id_subtema`, `id_tema`, `subtema`) VALUES (NULL, '$idTema1', '1.1.1 Bando de Policía y Gobierno')");
		$querySelect = mysqli_query($conexion, "SELECT `id_subtema` FROM `subtema` WHERE subtema = '1.1.1 Bando de Policía y Gobierno'");
		$dataSubtema = mysqli_fetch_assoc($querySelect);
		$idSubtema = $dataSubtema['id_subtema'];
		
		$queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'a) Disposiciones normativas que regulan la organización y funcionamiento del Ayuntamiento.', $check1)");
		$queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'b) Disposiciones normativas de la Administración Pública Municipal.', $check2)");
		$queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'c) Documento que señale que fue avalado por la Administración o el Ayuntamiento en funciones, según corresponda.', $check3)");
		$queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'd) Publicado conforme a la legislación estatal.', $check4)");

		$_SESSION['alert111'] = $alert111;

	} elseif (isset($_POST['112'])) {

		$_SESSION['completado2'] = true;
    $checkboxesDeshabilitadosForm2 = true;
		$_SESSION['checkDisabled2'] = $checkboxesDeshabilitadosForm2;
		$botonDeshabilitado2 = true;
		$_SESSION['deshabilitarBoton2'] = $botonDeshabilitado2;
		$count = 0;

		$check1 = 0;
		$check2 = 0;
		$check3 = 0;
		$check4 = 0;
		if(isset($_POST['check1121'])) {
			$opcion1_form2_value = true;
			$_SESSION['check1121'] = $opcion1_form2_value;
			$check1 = 1;
			$count = $count + 1;
		}
		if(isset($_POST['check1122'])) {
			$opcion2_form2_value = true;
			$_SESSION['check1122'] = $opcion2_form2_value;
			$check2 = 1;
			$count = $count + 1;
		}
		if(isset($_POST['check1123'])) {
			$opcion3_form2_value = true;
			$_SESSION['check1123'] = $opcion3_form2_value;
			$check3 = 1;
			$count = $count + 1;
		}
		if(isset($_POST['check1124'])) {
			$opcion4_form2_value = true;
			$_SESSION['check1124'] = $opcion4_form2_value;
			$check4 = 1;
			$count = $count + 1;
		}

		$estadoGeneral112 = 'rezago';
		if ($count === 4) {
			$estadoGeneral112 = 'optimo';  
		} elseif ($count > 0) {
			$estadoGeneral112 = 'proceso';  
		}
		$_SESSION['estadoGeneral112'] = $estadoGeneral112;

		if ($estadoGeneral112 === "optimo") {
			$alert112='<div class="alert alert-success" role="alert">
				¡Óptimo!
				</div>';
		} elseif ($estadoGeneral112 === "proceso") {
			$alert112='<div class="alert alert-warning" role="alert">
				En proceso
			</div>';
		} elseif ($estadoGeneral112 === "rezago") {
			$alert112='<div class="alert alert-danger" role="alert">
				¡Rezago!
			</div>';
		}	elseif ($estadoGeneral112 === "")  {

		}


		$queryInsert = mysqli_query($conexion, "INSERT INTO `subtema` (`id_subtema`, `id_tema`, `subtema`) VALUES (NULL, '$idTema1', '1.1.2 Manuales de Organización')");
		$querySelect = mysqli_query($conexion, "SELECT `id_subtema` FROM `subtema` WHERE subtema = '1.1.2 Manuales de Organización'");
		$dataSubtema = mysqli_fetch_assoc($querySelect);
		$idSubtema = $dataSubtema['id_subtema'];
		
		$queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'a) Disposiciones normativas que regulan la organización y funcionamiento del Ayuntamiento.', $check1)");
		$queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'b) Disposiciones normativas de la Administración Pública Municipal.', $check2)");
		$queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'c) Documento que señale que fue avalado por la Administración o el Ayuntamiento en funciones, según corresponda.', $check3)");
		$queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'd) Publicado conforme a la legislación estatal.', $check4)");


		$_SESSION['alert112'] = $alert112;

  } elseif (isset($_POST['113'])) {

		$_SESSION['completado3'] = true;
		$checkboxesDeshabilitadosForm3 = true;
		$_SESSION['checkDisabled3'] = $checkboxesDeshabilitadosForm3;
		$botonDeshabilitado3 = true;
		$_SESSION['deshabilitarBoton3'] = $botonDeshabilitado3;
		$count = 0;

		$check1 = 0;
		$check2 = 0;
		if(isset($_POST['check1131'])) {
			$opcion1_form3_value = isset($_POST['check1131']) ? $_POST['check1131'] : '';
			$_SESSION['check1131'] = $opcion1_form3_value;
			$check1 = 1;
			$count = $count + 1;
		}
		if(isset($_POST['check1132'])) {
			$opcion2_form3_value = isset($_POST['check1132']) ? $_POST['check1132'] : '';
			$_SESSION['check1132'] = $opcion2_form3_value;
			$check2 = 1;
			$count = $count + 1;
		}
		//113
		$estadoGeneral113 = 'rezago';  
		$opcionesSeleccionadas113 = isset($_SESSION['opcionesSeleccionadas113']) ? $_SESSION['opcionesSeleccionadas113'] : [];
		if ($count === 2) {
			$estadoGeneral113 = 'optimo'; 
		} elseif ($count > 0) {
			$estadoGeneral113 = 'proceso'; 
		}
		
		$_SESSION['estadoGeneral113'] = $estadoGeneral113;

		if ($estadoGeneral113 === "optimo") {
			$alert113='<div class="alert alert-success" role="alert">
				¡Óptimo!
				</div>';
		} elseif ($estadoGeneral113 === "proceso") {
			$alert113='<div class="alert alert-warning" role="alert">
				En proceso
			</div>';
		} elseif ($estadoGeneral113 === "rezago") {
			$alert113='<div class="alert alert-danger" role="alert">
				¡Rezago!
			</div>';
		} elseif ($estadoGeneral113 === "") {

		}
		
		$queryInsert = mysqli_query($conexion, "INSERT INTO `subtema` (`id_subtema`, `id_tema`, `subtema`) VALUES (NULL, '$idTema1', '1.1.3 Tabulador de sueldos o documentos con la estructura salarial del personal de la administración pública municipal')");
		$querySelect = mysqli_query($conexion, "SELECT `id_subtema` FROM `subtema` WHERE subtema = '1.1.3 Tabulador de sueldos o documentos con la estructura salarial del personal de la administración pública municipal'");
		$dataSubtema = mysqli_fetch_assoc($querySelect);
		$idSubtema = $dataSubtema['id_subtema'];
		
		$queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'a) Disposiciones normativas que regulan la organización y funcionamiento del Ayuntamiento.', $check1)");
		$queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'b) Disposiciones normativas de la Administración Pública Municipal.', $check2)");


		$_SESSION['alert113'] = $alert113;

	} elseif (isset($_POST['114'])) {

		$_SESSION['completado4'] = true;
		$inputsDeshabilitadosForm4 = true;
		$_SESSION['inputDisabled4'] = $inputsDeshabilitadosForm4;
		$botonDeshabilitado4 = true;
		$_SESSION['deshabilitarBoton4'] = $botonDeshabilitado4;
		//114
		// Obtén los valores de los campos de texto
		$opcion1_form4_value = isset($_POST['txtNombre1141']) ? (int)$_POST['txtNombre1141'] : 0;
		$opcion2_form4_value = isset($_POST['txtNombre1142']) ? (int)$_POST['txtNombre1142'] : 0;

		$_SESSION['txtNombre1141'] = $opcion1_form4_value;
		$_SESSION['txtNombre1142'] = $opcion2_form4_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion2_form4_value != 0) {
				// Calcula el porcentaje
				$porcentaje114 = ($opcion1_form4_value / $opcion2_form4_value) * 100;

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
				$estadoGeneral114 = $estado114;
		} else {
				// Manejar el caso donde el denominador es 0 (división por 0)
				$_SESSION['estadoPorcentaje114'] = 'Error: División por 0';
				$estadoGeneral114 = 'Error: División por 0';
				
		}


		if ($estadoGeneral114 === 'Optimo') {

			$alert114 = '<div class="alert alert-success" role="alert">
											¡Optimo! El porcentaje es menor a 100.
									</div>';
		} elseif ($estadoGeneral114 === 'En Proceso')  {
				$alert114 = '<div class="alert alert-warning" role="alert">
												En proceso. El porcentaje es mayor a 100 pero menor o igual a 115.
										</div>';
		} elseif ($estadoGeneral114 === 'Error: División por 0') {
				$alert114 = '<div class="alert alert-danger" role="alert">
												Error: Se ha ingresado 0 en la división.
										</div>';
		} elseif ($estadoGeneral114 === '') {
		} else {
				$alert114 = '<div class="alert alert-danger" role="alert">
												¡Rezago! El porcentaje es mayor a 115.
										</div>';
		}
	

		$queryInsert = mysqli_query($conexion, "INSERT INTO `subtema` (`id_subtema`, `id_tema`, `subtema`) VALUES (NULL, '$idTema2', '1.1.4 Unidades administrativas existentes en función del número de unidades administrativas promedio')");
		$querySelect = mysqli_query($conexion, "SELECT `id_subtema` FROM `subtema` WHERE subtema = '1.1.4 Unidades administrativas existentes en función del número de unidades administrativas promedio'");
		$dataSubtema = mysqli_fetch_assoc($querySelect);
		$idSubtema = $dataSubtema['id_subtema'];
		
		$queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Número de unidades administrativas que conforman la administración.', $opcion1_form4_value)");
		$queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Número de unidades administrativas promedio nacional.', $opcion2_form4_value)");

		$_SESSION['alert114'] = $alert114;

	} elseif (isset($_POST['115'])) {

		$_SESSION['completado5'] = true;
		$inputsDeshabilitadosForm5 = true;
		$_SESSION['inputDisabled5'] = $inputsDeshabilitadosForm5;
		$botonDeshabilitado5 = true;
		$_SESSION['deshabilitarBoton5'] = $botonDeshabilitado5;
		//115
		// Obtén los valores de los campos de texto
		$opcion1_form5_value = isset($_POST['txtNombre1151']) ? (int)$_POST['txtNombre1151'] : 0;
		$opcion2_form5_value = isset($_POST['txtNombre1152']) ? (int)$_POST['txtNombre1152'] : 0;

		$_SESSION['txtNombre1151'] = $opcion1_form5_value;
		$_SESSION['txtNombre1152'] = $opcion2_form5_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion2_form5_value != 0) {
			// Calcula el porcentaje
			$porcentaje115 = ($opcion1_form5_value / $opcion2_form5_value) * 100;
		
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
			$estadoGeneral115 = $estado115;
		} else {
			// Manejar el caso donde el denominador es 0 (división por 0)
			$_SESSION['estadoPorcentaje115'] = 'Error: División por 0';
			$estadoGeneral115 = 'Error: División por 0';
		}

		if ($estadoGeneral115 === 'Optimo') {

			$alert115 = '<div class="alert alert-success" role="alert">
											¡Optimo! El porcentaje es menor a 100.
									</div>';
		} elseif ($estadoGeneral115 === 'En Proceso')  {
				$alert115 = '<div class="alert alert-warning" role="alert">
												En proceso. El porcentaje es mayor a 100 pero menor o igual a 115.
										</div>';
		} elseif ($estadoGeneral115 === 'Error: División por 0') {
				$alert115 = '<div class="alert alert-danger" role="alert">
												Error: Se ha ingresado 0 en la división.
										</div>';
		}  elseif ($estadoGeneral115 === '') {

		
		} else {
				$alert115 = '<div class="alert alert-danger" role="alert">
												¡Rezago! El porcentaje es mayor a 115.
										</div>';
		}
		

		$queryInsert = mysqli_query($conexion, "INSERT INTO `subtema` (`id_subtema`, `id_tema`, `subtema`) VALUES (NULL, '$idTema2', '1.1.5 Unidades administrativas existentes en función del número de unidades administrativas promedio')");
		$querySelect = mysqli_query($conexion, "SELECT `id_subtema` FROM `subtema` WHERE subtema = '1.1.5 Unidades administrativas existentes en función del número de unidades administrativas promedio'");
		$dataSubtema = mysqli_fetch_assoc($querySelect);
		$idSubtema = $dataSubtema['id_subtema'];
		
		$queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Número de unidades administrativas que conforman la administración.', $opcion1_form5_value)");
		$queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Número de unidades administrativas promedio nacional.', $opcion2_form5_value)");

		$_SESSION['alert115'] = $alert115;

	} elseif (isset($_POST['116'])) {

		$_SESSION['completado6'] = true;
		$inputsDeshabilitadosForm6 = true;
		$_SESSION['inputDisabled6'] = $inputsDeshabilitadosForm6;
		$botonDeshabilitado6 = true;
		$_SESSION['deshabilitarBoton6'] = $botonDeshabilitado6;
		//116
		// Obtén los valores de los campos de texto
		$opcion1_form6_value = isset($_POST['txtNombre1161']) ? (int)$_POST['txtNombre1161'] : 0;
		$opcion2_form6_value = isset($_POST['txtNombre1162']) ? (int)$_POST['txtNombre1162'] : 0;

		$_SESSION['txtNombre1161'] = $opcion1_form6_value;
		$_SESSION['txtNombre1162'] = $opcion2_form6_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion2_form6_value != 0) {
			// Calcula el porcentaje
			$porcentaje116 = ($opcion1_form6_value / $opcion2_form6_value) * 100;
		
		
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
			$estadoGeneral116 = $estado116;
		} else {
			// Manejar el caso donde el denominador es 0 (división por 0)
			$_SESSION['estadoPorcentaje116'] = 'Error: División por 0';
			$estadoGeneral116 = 'Error: División por 0';
		}

		if ($estadoGeneral116 === 'Optimo') {

			$alert116 = '<div class="alert alert-success" role="alert">
											¡Optimo! El porcentaje es menor a 100.
									</div>';
		} elseif ($estadoGeneral116 === 'En Proceso')  {
				$alert116 = '<div class="alert alert-warning" role="alert">
												En proceso. El porcentaje es mayor a 100 pero menor o igual a 115.
										</div>';
		} elseif ($estadoGeneral116 === 'Error: División por 0') {
				$alert116 = '<div class="alert alert-danger" role="alert">
												Error: Se ha ingresado 0 en la división.
										</div>';
		}  elseif ($estadoGeneral116 === '') {

		
		} else {
				$alert116 = '<div class="alert alert-danger" role="alert">
												¡Rezago! El porcentaje es mayor a 115.
										</div>';
		}

		$queryInsert = mysqli_query($conexion, "INSERT INTO `subtema` (`id_subtema`, `id_tema`, `subtema`) VALUES (NULL, '$idTema2', '1.1.6 Nivel salarial del Presidente(a) municipal')");
		$querySelect = mysqli_query($conexion, "SELECT `id_subtema` FROM `subtema` WHERE subtema = '1.1.6 Nivel salarial del Presidente(a) municipal'");
		$dataSubtema = mysqli_fetch_assoc($querySelect);
		$idSubtema = $dataSubtema['id_subtema'];
		
		$queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Puestos de mando medio y superior ocupados por mujeres.', $opcion1_form6_value)");
		$queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Total de puestos de mando medio y superior de la APM.', $opcion2_form6_value)");


		$_SESSION['alert116'] = $alert116;

	} elseif (isset($_POST['117'])) {

		$_SESSION['completado7'] = true;
		$inputsDeshabilitadosForm7 = true;
		$_SESSION['inputDisabled7'] = $inputsDeshabilitadosForm7;
		$botonDeshabilitado7 = true;
		$_SESSION['deshabilitarBoton7'] = $botonDeshabilitado7;
		//117
		// Obtén los valores de los campos de texto
		$opcion1_form7_value = isset($_POST['txtNombre1171']) ? (int)$_POST['txtNombre1171'] : 0;
		$opcion2_form7_value = isset($_POST['txtNombre1172']) ? (int)$_POST['txtNombre1172'] : 0;

		$_SESSION['txtNombre1171'] = $opcion1_form7_value;
		$_SESSION['txtNombre1172'] = $opcion2_form7_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion2_form7_value != 0) {
			// Calcula el porcentaje
			$porcentaje117 = ($opcion1_form7_value / $opcion2_form7_value) * 100;
		
		
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
				$estadoGeneral117 = $estado117;
			} else {
				// Manejar el caso donde el denominador es 0 (división por 0)
				$_SESSION['estadoPorcentaje117'] = 'Error: División por 0';
				$estadoGeneral117 = 'Error: División por 0';
			}
			
			if ($estadoGeneral117 === 'Optimo') {

				$alert117 = '<div class="alert alert-success" role="alert">
												¡Optimo! El porcentaje es menor a 100.
										</div>';
			} elseif ($estadoGeneral117 === 'En Proceso')  {
					$alert117 = '<div class="alert alert-warning" role="alert">
													En proceso. El porcentaje es mayor a 100 pero menor o igual a 115.
											</div>';
			} elseif ($estadoGeneral117 === 'Error: División por 0') {
					$alert117 = '<div class="alert alert-danger" role="alert">
													Error: Se ha ingresado 0 en la división.
											</div>';
			}  elseif ($estadoGeneral117 === '') {

			
			} else {
					$alert117 = '<div class="alert alert-danger" role="alert">
													¡Rezago! El porcentaje es mayor a 115.
											</div>';
			}
	
			$queryInsert = mysqli_query($conexion, "INSERT INTO `subtema` (`id_subtema`, `id_tema`, `subtema`) VALUES (NULL, '$idTema2', '1.1.7 Participación de las mujeres en puestos de mando medio y superior en la administración pública municipal')");
			$querySelect = mysqli_query($conexion, "SELECT `id_subtema` FROM `subtema` WHERE subtema = '1.1.7 Participación de las mujeres en puestos de mando medio y superior en la administración pública municipal'");
			$dataSubtema = mysqli_fetch_assoc($querySelect);
			$idSubtema = $dataSubtema['id_subtema'];
			
			$queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Número de unidades administrativas que conforman la administración.', $opcion1_form7_value)");
			$queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Número de unidades administrativas promedio nacional.', $opcion2_form7_value)");

			$_SESSION['alert117'] = $alert117;
	}
}
 
?>

	 <!--Enlaces de los stilos CSS -->

	
	<link rel="stylesheet" href="../../assets/css/modulos.css" />

	<img class="card-img-top" src="../../assets/img/Organizacion.png"
     alt="Gobierno Abierto" 
     style="width: 100px; height: 100px; display: block; margin: auto; max-width: 100%;">

	<div class="d-flex justify-content-between">
		<div class="btn-group" role="group" aria-label="">
		<form method="POST" enctype="multipart/form-data">
        <button type="submit" name="registrarNuevoFormulario" value="" class="btn btn-success">Registro nuevo</button>
		</form>
			
    </div>
		<div class="editar">
        <form method="post" action="">
							<div class="form-group d-flex align-items-center">
									<label for="opciones"><h5 class="m-3">Selecciona un Registro:</h5></label>
									<select class="form-control" name="opciones" id="opciones">
											<?php
													$resultado = mysqli_query($conexion , "SELECT * FROM `formulario`");
													while($formulario = mysqli_fetch_assoc($resultado)){?>
													<option id="formulario" value="<?php echo $formulario["id_formulario"]; ?>"> <?php echo $formulario["nombre"]; ?></option>
											<?php }?>
											<!-- Puedes agregar más opciones según sea necesario -->
									</select>
									<button type="submit" class="btn btn-primary m-2" name="submit">Enviar</button>
							</div>
        </form>

        <?php
        // Verificar si se ha enviado el formulario
        if (isset($_POST['submit'])) {
            // Obtener el valor seleccionado en el dropdown
            $opcionSeleccionada = $_POST['opciones'];

            // Mostrar la opción seleccionada
            echo "<p class='mt-3'>La opción seleccionada es: $opcionSeleccionada</p>";
            // Aquí puedes realizar cualquier otra acción con la opción seleccionada
        }
        ?>
    </div>
	</div>
		<?php echo isset($alerta) ? $alerta : ''; ?>

    <!-- Modulo 1 Organizacion-->

    <!--Tema 1 -- Estructura -->

	<div class="jumbotron">

	<h2 class="display-7">1.1 Estructura</h2>
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

				<form method="POST" enctype="multipart/form-data" >
					<p>
						<h6 class="display-15">1.1.1 Bando de Policía y Gobierno</h6></p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels111 = [
									'a) Disposiciones normativas que regulan la organización y funcionamiento del Ayuntamiento.',
									'b) Disposiciones normativas de la Administración Pública Municipal.',
									'c) Documento que señale que fue avalado por la Administración o el Ayuntamiento en funciones, 
									según corresponda.',
									'd) Publicado conforme a la legislación estatal',
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames111[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check111']; $i++) {
									${"opcion{$i}_form{$valueCheckNames111[$i]}"} = $_SESSION[$valueCheckNames111[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check111']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames111[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames111[$i] ?>" value="<?= $valueCheckNames111[$i] ?>" <?php if ($checkboxesDeshabilitadosForm1) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels111[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="111" value="" class="btn btn-success" <?php if ($botonDeshabilitado1) echo "disabled"; ?>>Guardar</button>
						</div>
						<?php echo isset($alert111) ? $alert111 : ''; ?>
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data" >
					<p>
						<h6 class="display-15">1.1.2 Manuales de Organización</h6>
					</p>
					<hr class="my-2">
					<div class="form-group">
						<?php
							
							$labels112 = [
									'a) Documento por unidad administrativa con organigrama (dirección o secretaría, ya sea bajo un 
									esquema administrativo centralizado, desconcentrado, descentralizado, paramunicipal o 
									autónomo), que describa las funciones y perfil de puesto de la estructura autorizada.',
									'b) Organigrama general de la administración pública municipal.',
									'c) Catálogo de puestos avalado por la Administración o el Ayuntamiento en funciones, según 
									corresponda.',
									'd) Documento que señale que fue avalado por la Administración o el Ayuntamiento en funciones, 
									según corresponda.',
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames112[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check112']; $i++) {
									${"opcion{$i}_form{$valueCheckNames112[$i]}"} = $_SESSION[$valueCheckNames112[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check112']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames112[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames112[$i] ?>" value="<?= $valueCheckNames112[$i] ?>" <?php if ($checkboxesDeshabilitadosForm2) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels112[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="112" value="" class="btn btn-success" <?php if ($botonDeshabilitado2) echo "disabled"; ?>>Guardar</button>
						</div>
						<?php echo isset($alert112) ? $alert112 : ''; ?>
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data" >
					<p>
						<h6 class="display-15">1.1.3 Tabulador de sueldos o documentos con la estructura salarial del personal de la administración pública municipal</h6>
					</p>
					<hr class="my-2">
					<div class="form-group">

							<?php
								
								$labels113 = [
										'a) Publicado conforme a la legislación estatal correspondiente.',
										'b) Documento que señale que fue avalado por la Administración o el Ayuntamiento en funciones, 
										según corresponda.',
								];

								if (isset($_POST['submit'])) {
									$idFormulario = $_POST['opciones'];
									$valor = editarCheckBox($idFormulario);
									
									for ($i = 0; $i < count($valor); $i++) {
										${"opcion{$i}_form{$valueCheckNames113[$i]}"} = $valor[$i];
									}
								} else {
									for ($i = 0; $i < $opciones['check113']; $i++) {
										${"opcion{$i}_form{$valueCheckNames113[$i]}"} = $_SESSION[$valueCheckNames113[$i]] ?? false;
									}
								}

							?>
							<?php for ($i = 0; $i < $opciones['check113']; $i++) : ?>
								<?php 
									$valor_variable = ${"opcion{$i}_form{$valueCheckNames113[$i]}"};
								?>
									<label>
											<input type="checkbox" name="<?= $valueCheckNames113[$i] ?>" value="<?= $valueCheckNames113[$i] ?>" <?php if ($checkboxesDeshabilitadosForm3) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
											<?= $labels113[$i] ?>
									</label>
									<br>
							<?php endfor; ?>

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="113" value="" class="btn btn-success" <?php if ($botonDeshabilitado3) echo "disabled"; ?>>Guardar</button>
							</div>
							<?php echo isset($alert113) ? $alert113 : ''; ?>
						
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
							
						<?php

							$labels114 = [
								'Número de unidades administrativas que conforman la administración.',
								'Gasto corriente en el año evaluado',
							];

							$valoresForm1 = [
								$opcion1_form1_value ?? '',
								$opcion2_form1_value ?? ''
							];
							foreach ($variableNames['form1'] as $index => $fieldName) {
								${"opcion" . ($index + 1) . "_form1_value"} = $_SESSION[$fieldName] ?? '';
							}			
						?>
						<?php foreach($variableNames['form1'] as  $index => $fieldName) : ?>
							<?php 
								$valor_variable = ${"opcion" . ($index + 1) . "_form1_value"};
							?>
							<label for="txtNombre" class="text1">
								<input type="text" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm1) echo "disabled"; ?> required><span><?= $labels114[$index] ?></span>
							</label>
						<?php endforeach; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="114" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado4) echo "disabled"; ?>>Guardar</button>
						</div>
						<?php echo isset($alert114) ? $alert114 : ''; ?>
			
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data">
					<div class="form-group">
					<h6 class="display-15">1.1.5 Unidades administrativas existentes en función del número de unidades administrativas promedio</h6>
					<hr class="my-2">
					
						<?php

							$labels115 = [
								'Número de servidoras y servidores públicos municipales.',
								'Población total (INEGI, 2020).',
							];

							$valoresForm2 = [
								$opcion1_form2_value ?? '',
								$opcion2_form2_value ?? ''
							];
							foreach ($variableNames['form2'] as $index => $fieldName) {
								${"opcion" . ($index + 1) . "_form2_value"} = $_SESSION[$fieldName] ?? '';
							}			
						?>
						<?php foreach($variableNames['form2'] as  $index => $fieldName) : ?>
							<?php 
								$valor_variable = ${"opcion" . ($index + 1) . "_form2_value"};
							?>
							<label for="txtNombre" class="text1">
								<input type="text" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm2) echo "disabled"; ?> required><span><?= $labels115[$index] ?></span>
							</label>
						<?php endforeach; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="115" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado5) echo "disabled"; ?>>Guardar</button>
						</div>
						<?php echo isset($alert115) ? $alert115 : ''; ?>
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data">
					<div class="form-group">		
					<h6 class="display-15">1.1.6 Nivel salarial del Presidente(a) municipal </h6></p>
					<hr class="my-2">
							
					<?php

						$labels116 = [
							'Salario neto mensual recibido por la/el presidenta(e) municipal',
							'Salario sugerido en función del tamaño poblacional.',
						];

						$valoresForm3 = [
							$opcion1_form3_value ?? '',
							$opcion2_form3_value ?? ''
						];
						foreach ($variableNames['form3'] as $index => $fieldName) {
							${"opcion" . ($index + 1) . "_form3_value"} = $_SESSION[$fieldName] ?? '';
						}			
					?>
					<?php foreach($variableNames['form3'] as  $index => $fieldName) : ?>
						<?php 
							$valor_variable = ${"opcion" . ($index + 1) . "_form3_value"};
						?>
						<label for="txtNombre" class="text1">
							<input type="text" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm3) echo "disabled"; ?> required><span><?= $labels116[$index] ?></span>
						</label>
					<?php endforeach; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="116" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado6) echo "disabled"; ?>>Guardar</button>
						</div>
						<?php echo isset($alert116) ? $alert116 : ''; ?>
					</div>
					</form>
					<form method="POST" enctype="multipart/form-data">
     				<div class="form-group">
						<h6 class="display-15">1.1.7 Participación de las mujeres en puestos de mando medio y superior en la
                        administración pública municipal </h6></p>
						<hr class="my-2">
							<?php

								$labels117 = [
									'Puestos de mando medio y superior ocupados por mujeres.',
									'Total de puestos de mando medio y superior de la APM.',
								];

								$valoresForm4 = [
									$opcion1_form4_value ?? '',
									$opcion2_form4_value ?? ''
								];
								foreach ($variableNames['form4'] as $index => $fieldName) {
									${"opcion" . ($index + 1) . "_form4_value"} = $_SESSION[$fieldName] ?? '';
								}			
							?>
							<?php foreach($variableNames['form4'] as  $index => $fieldName) : ?>
								<?php 
									$valor_variable = ${"opcion" . ($index + 1) . "_form4_value"};
								?>
								<label for="txtNombre" class="text1">
									<input type="text" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm4) echo "disabled"; ?> required><span><?= $labels117[$index] ?></span>
								</label>
							<?php endforeach; ?>

								<div class="btn-group" role="group" aria-label="">
									<button type="submit" name="117" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado7) echo "disabled"; ?>>Guardar</button>
								</div>
								<?php echo isset($alert117) ? $alert117 : ''; ?>
						</div>
					</form>
			</div>
		</div>
	</div>

	</div>
</br>

	
	<!--Tema 2 -- Planeacion-->

	<div class="jumbotron">

	<h2 class="display-7">1.2 Planeación</h2>
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

				<form method="POST" enctype="multipart/form-data" >
					<p>
						<h6 class="display-15">1.2.1 Lineamientos de planeación municipal</h6></p>
					<hr class="my-2">

					<div class="form-group">
						<?php
							
							$labels121 = [
									'a) Funciones de la dependencia municipal responsable de la planeación.',
									'b) Instrumentos de planeación municipal.',
									'c) De los planes, programas e informes producto de la planeación municipal.',
									'd) Mecanismos de participación ciudadana en el proceso de planeación municipal.',
									'e) Documento que señale que fue avalado por la Administración o el Ayuntamiento en funciones, 
									según corresponda.',
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames121[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check121']; $i++) {
									${"opcion{$i}_form{$valueCheckNames121[$i]}"} = $_SESSION[$valueCheckNames121[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check121']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames121[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames121[$i] ?>" value="<?= $valueCheckNames121[$i] ?>" <?php if ($checkboxesDeshabilitadosForm4) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels121[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="121" value="" class="btn btn-success" <?php if ($botonDeshabilitado8) echo "disabled"; ?>>Guardar</button>
						</div>
						<?php echo isset($alert121) ? $alert121 : ''; ?>
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data" >
					<p>
						<h6 class="display-15">1.2.2 Comité o cuerpo colegiado de planeación municipal </h6>
					</p>
					<hr class="my-2">
					<div class="form-group">
						
						<?php
							
							$labels122 = [
									'a) Acta de instalación de dicho Comité o cuerpo colegiado.',
									'b) Calendario anual de sesiones.',
									'c) Minutas fechadas y firmadas de las sesiones celebradas del año en curso de acuerdo con el 
									calendario anual de trabajo.',
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames122[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check122']; $i++) {
									${"opcion{$i}_form{$valueCheckNames122[$i]}"} = $_SESSION[$valueCheckNames122[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check122']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames122[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames122[$i] ?>" value="<?= $valueCheckNames122[$i] ?>" <?php if ($checkboxesDeshabilitadosForm5) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels122[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="122" value="" class="btn btn-success" <?php if ($botonDeshabilitado9) echo "disabled"; ?>>Guardar</button>
						</div>
						<?php echo isset($alert122) ? $alert122 : ''; ?>
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data" >
					<p>
						<h6 class="display-15">1.2.3 Plan Municipal de Desarrollo</h6>
					</p>
					<hr class="my-2">
					<div class="form-group">

						<?php
							
							$labels123 = [
									'a) Objetivos, estrategias y metas.',
									'b) Con un enfoque inclusivo (que considere a los grupos de población en situación de 
									vulnerabilidad).',
									'c) Con un enfoque resiliente (que integre acciones orientadas a mejorar su capacidad para 
									afrontar eventos naturales o sociales que atenten contra la integridad de la población).',
									'd) Que sea sostenible (que integre el crecimiento económico, desarrollo social y el cuidado del 
									medio ambiente).',
									'e) Líneas de acción vinculadas con el Plan Nacional de Desarrollo y el Plan Estatal de Desarrollo.',
									'f) Estrategia de coordinación y vinculación con instancias gubernamentales y no 
									gubernamentales.',
									'g) Ficha técnica de los indicadores de seguimiento y cumplimiento de las metas establecidas en 
									el Plan Municipal de Desarrollo.'
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames123[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check123']; $i++) {
									${"opcion{$i}_form{$valueCheckNames123[$i]}"} = $_SESSION[$valueCheckNames123[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check123']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames123[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames123[$i] ?>" value="<?= $valueCheckNames123[$i] ?>" <?php if ($checkboxesDeshabilitadosForm6) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels123[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="123" value="" class="btn btn-success" <?php if ($botonDeshabilitado10) echo "disabled"; ?>>Guardar</button>
						</div>
						<?php echo isset($alert123) ? $alert123 : ''; ?>
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
						<h6 class="display-15">1.2.4 Índice de Planeación Municipal</h6>
						<hr class="my-2">

							<?php

								$labels124 = [
									'X1= Lineamientos de planeación municipal con todos los elementos',
									'X2= Comité o cuerpo colegiado de planeación municipal con todos los elementos',
									'X3= Con objetivos, estrategias y metas',
									'X4= Con enfoque inclusivo',
									'X5= Con enfoque resiliente',
									'X6= Que sea sostenible',
									'X7= Fichas de indicadores del Plan Municipal de Desarrollo',
								];

								$valoresForm5 = [
									$opcion1_form5_value ?? '',
									$opcion2_form5_value ?? '',
									$opcion3_form5_value ?? '',
									$opcion4_form5_value ?? '',
									$opcion5_form5_value ?? '',
									$opcion6_form5_value ?? '',
									$opcion7_form5_value ?? '',
								];
								foreach ($variableNames['form5'] as $index => $fieldName) {
									${"opcion" . ($index + 1) . "_form5_value"} = $_SESSION[$fieldName] ?? '';
								}			
							?>
							<?php foreach($variableNames['form5'] as  $index => $fieldName) : ?>
								<?php 
									$valor_variable = ${"opcion" . ($index + 1) . "_form5_value"};
								?>
								<label for="txtNombre" class="text1">
									<input type="number" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm5) echo "disabled"; ?> required><span><?= $labels124[$index] ?></span>
								</label>
							<?php endforeach; ?>

								<div class="btn-group" role="group" aria-label="">
									<button type="submit" name="124" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado11) echo "disabled"; ?>>Guardar</button>
								</div>
								<?php echo isset($alert124) ? $alert124 : ''; ?>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</br>

	<!--Tema 3 -- Contraloria-->

	<div class="jumbotron">

	<h2 class="display-7">1.3 Contraloría</h2>
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

				<form method="POST" enctype="multipart/form-data" >
					<p>
						<h6 class="display-15">1.3.1 Programa anual de auditoría interna </h6></p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels131 = [
									'a) Calendario con fechas, actividades y responsables del año en curso.',
									'b) Procesos, programas o acciones que serán auditados.',
									'c) Reporte de seguimiento a las auditorías internas realizadas (con fecha no mayor a un año).',
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames131[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check131']; $i++) {
									${"opcion{$i}_form{$valueCheckNames131[$i]}"} = $_SESSION[$valueCheckNames131[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check131']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames131[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames131[$i] ?>" value="<?= $valueCheckNames131[$i] ?>" <?php if ($checkboxesDeshabilitadosForm7) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels131[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="131" value="" class="btn btn-success" <?php if ($botonDeshabilitado12) echo "disabled"; ?>>Guardar</button>
						</div>
						<?php echo isset($alert131) ? $alert131 : ''; ?>

					</div>
				</form>
				<form method="POST" enctype="multipart/form-data" >
					<p>
						<h6 class="display-15">1.3.2 Lineamientos para la entrega - recepción de la administración pública Municipal</h6>
					</p>
					<hr class="my-2">
					<div class="form-group">
						
						<?php
							
							$labels132 = [
									'a) Responsabilidades y tiempos establecidos.',
									'b) Sanciones.',
									'c) Publicado conforme a la legislación estatal.',
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames132[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check132']; $i++) {
									${"opcion{$i}_form{$valueCheckNames132[$i]}"} = $_SESSION[$valueCheckNames132[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check132']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames132[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames132[$i] ?>" value="<?= $valueCheckNames132[$i] ?>" <?php if ($checkboxesDeshabilitadosForm8) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels132[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="132" value="" class="btn btn-success" <?php if ($botonDeshabilitado14) echo "disabled"; ?>>Guardar</button>
						</div>
						<?php echo isset($alert132) ? $alert132 : ''; ?>
						
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
						<h6 class="display-15">1.3.3 Tasa de observaciones documentadas en las auditorías internas</h6>
						<hr class="my-2">
						
							<?php

								$labels124 = [
									'Número de observaciones a diciembre del año anterior inmediato.',
									'Número de observaciones del año en curso.',
								];

								$valoresForm5 = [
									$opcion1_form5_value ?? '',
									$opcion2_form5_value ?? '',
									$opcion3_form5_value ?? '',
									$opcion4_form5_value ?? '',
									$opcion5_form5_value ?? '',
									$opcion6_form5_value ?? '',
									$opcion7_form5_value ?? '',
								];
								foreach ($variableNames['form5'] as $index => $fieldName) {
									${"opcion" . ($index + 1) . "_form5_value"} = $_SESSION[$fieldName] ?? '';
								}			
							?>
							<?php foreach($variableNames['form5'] as  $index => $fieldName) : ?>
								<?php 
									$valor_variable = ${"opcion" . ($index + 1) . "_form5_value"};
								?>
								<label for="txtNombre" class="text1">
									<input type="number" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm5) echo "disabled"; ?> required><span><?= $labels124[$index] ?></span>
								</label>
							<?php endforeach; ?>

								<div class="btn-group" role="group" aria-label="">
									<button type="submit" name="124" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado11) echo "disabled"; ?>>Guardar</button>
								</div>
								<?php echo isset($alert124) ? $alert124 : ''; ?>



					</div>
				</form>

							<?php echo isset($alert133) ? $alert133 : ''; ?>
			</div>
		</div>
	</div>
</div>
</br>

	<!--Tema 4 -- Capacitación-->

	<div class="jumbotron">

	<h2 class="display-7">1.4 Capacitación</h2>
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

				<form method="POST" enctype="multipart/form-data" >
					<p>
						<h6 class="display-15">1.4.1 Programa anual de capacitación para servidores públicos municipales</h6></p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels141 = [
									'a) Mecanismos para la detección de necesidades en las unidades administrativas.',
									'b) Reporte con la identificación de necesidades de capacitación por unidad administrativa.',
									'c) Objetivos de la capacitación (temas prioritarios).',
									'd) Calendarización de las acciones de capacitación.',
									'e) Mecanismos para brindar o facilitar acciones de capacitación a servidores públicos.'
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames141[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check141']; $i++) {
									${"opcion{$i}_form{$valueCheckNames141[$i]}"} = $_SESSION[$valueCheckNames141[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check141']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames141[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames141[$i] ?>" value="<?= $valueCheckNames141[$i] ?>" <?php if ($checkboxesDeshabilitadosForm8) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels141[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="141" value="" class="btn btn-success" <?php if ($botonDeshabilitado15) echo "disabled"; ?>>Guardar</button>
						</div>
						<?php echo isset($alert141) ? $alert141 : ''; ?>

					</div>
				</form>
				<form method="POST" enctype="multipart/form-data" >
					<p>
						<h6 class="display-15">1.4.2 Evaluación de la capacitación</h6>
					</p>
					<hr class="my-2">
					<div class="form-group">
						
					<?php
							
							$labels142 = [
									'a) Relación de servidores públicos municipales capacitados, por tema y unidad administrativa.',
									'b) Informe de evaluación de cumplimiento de los objetivos establecidos en el programa de capacitación.',
									'c) Análisis de las áreas de oportunidad identificadas para mejorar el programa y acciones de 
									capacitación del siguiente año.',
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames142[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check142']; $i++) {
									${"opcion{$i}_form{$valueCheckNames142[$i]}"} = $_SESSION[$valueCheckNames142[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check142']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames142[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames142[$i] ?>" value="<?= $valueCheckNames142[$i] ?>" <?php if ($checkboxesDeshabilitadosForm9) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels142[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="142" value="" class="btn btn-success" <?php if ($botonDeshabilitado16) echo "disabled"; ?>>Guardar</button>
						</div>
						<?php echo isset($alert142) ? $alert142 : ''; ?>
						
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
    <h6 class="display-15">1.4.3 Servidoras y Servidores públicos capacitado(as) </h6>
    <hr class="my-2">
    <label for="txtNombre1431" class="text1">
        <input type="number" class="form-control" name="txtNombre1431" id="txtNombre1431" placeholder="" inputmode="numeric" pattern="[0-9]+" title="Ingrese solo números enteros" value="<?php echo $opcion1_form43_value; ?>"  <?php if ($inputsDeshabilitadosForm43) echo "disabled"; ?>>
        <span>Número de servidores(as) públicos municipales capacitados(as).</span>
    </label>
    <label for="txtNombre1432" class="text2">
        <input type="number" class="form-control" name="txtNombre1432" id="txtNombre1432" placeholder="" inputmode="numeric" pattern="[0-9]+" title="Ingrese solo números enteros" value="<?php echo $opcion2_form43_value; ?>"  <?php if ($inputsDeshabilitadosForm43) echo "disabled"; ?>>
        <span>Total de servidores(as) públicos municipales.</span>
    </label>
    <div class="btn-group" role="group" aria-label="">
        <button type="submit" name="143" value="Agregar143" class="btn btn-success" <?php if ($botonDeshabilitado43) echo "disabled"; ?>>Guardar</button>
    </div>
							</div>
							</form>

							<?php echo isset($alert143) ? $alert143 : ''; ?>
			</div>
		</div>
	</div>
</div>
</br>


		
	<?php include "../Includes/footer.php"; ?>