<?php include("../Includes/header.php"); ?>

<?php
// Inicia la sesión
include("../../bd.php");

	$alerta = '';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registrarNuevoFormulario'])){

	$estaCompletado1 = $_SESSION['completado1'] ?? false;
	$estaCompletado2 = $_SESSION['completado2'] ?? false;
	$estaCompletado3 = $_SESSION['completado3'] ?? false;
	$estaCompletado4 = $_SESSION['completado4'] ?? false;
	$estaCompletado5 = $_SESSION['completado5'] ?? false;
	$estaCompletado6 = $_SESSION['completado6'] ?? false;
	$estaCompletado7 = $_SESSION['completado7'] ?? false;

	$valores = [
    $estaCompletado1,
    $estaCompletado2,
    $estaCompletado3,
    $estaCompletado4,
    $estaCompletado5,
    $estaCompletado6,
    $estaCompletado7
	];

		// Verificar si todos los valores son true
	$todosTrue = array_reduce($valores, function($resultado, $valor) {
			return $resultado && $valor;
	}, true);

	// Verificar si al menos uno de los valores es true
	$alMenosUnoTrue = in_array(true, $valores);

	if ($todosTrue) {
		// elimina la sesion
		session_unset();
		$alerta = '<div class="alert alert-success" role="alert">
									Nuevo	Formulario.
							</div>';
		$_SESSION['checkDisabled1'] = false;
		$_SESSION['checkDisabled2'] = false;
		$_SESSION['checkDisabled3'] = false;
		// deshabilitar inputs
		$_SESSION['inputDisabled4'] = false;
		$_SESSION['inputDisabled5'] = false;
		$_SESSION['inputDisabled6'] = false;
		$_SESSION['inputDisabled7'] = false;

		$_SESSION['deshabilitarBoton1'] = false;
		$_SESSION['deshabilitarBoton2'] = false;
		$_SESSION['deshabilitarBoton3'] = false;
		$_SESSION['deshabilitarBoton4'] = false;
		$_SESSION['deshabilitarBoton5'] = false;
		$_SESSION['deshabilitarBoton6'] = false;
		$_SESSION['deshabilitarBoton7'] = false;

	} elseif ($alMenosUnoTrue !== $todosTrue) {
		$alerta = '<div class="alert alert-warning" role="alert">
									Formulario Actual En Curso
							</div>';
	} else {
		$alerta = '<div class="alert alert-success" role="alert">
									Nuevo	Formulario.
							</div>';
			//deshabiltar checkbox
		$_SESSION['checkDisabled1'] = false;
		$_SESSION['checkDisabled2'] = false;
		$_SESSION['checkDisabled3'] = false;
		// deshabilitar inputs
		$_SESSION['inputDisabled4'] = false;
		$_SESSION['inputDisabled5'] = false;
		$_SESSION['inputDisabled6'] = false;
		$_SESSION['inputDisabled7'] = false;

		$_SESSION['deshabilitarBoton1'] = false;
		$_SESSION['deshabilitarBoton2'] = false;
		$_SESSION['deshabilitarBoton3'] = false;
		$_SESSION['deshabilitarBoton4'] = false;
		$_SESSION['deshabilitarBoton5'] = false;
		$_SESSION['deshabilitarBoton6'] = false;
		$_SESSION['deshabilitarBoton7'] = false;

		// Obtener el año actual
		$anoActual = date("Y");
		// Obtener el mes actual
		$mesActual = date("m");
		// Obtener el día actual
		$diaActual = date("d");	
		// Concatenar los tres valores
		$fechaCompleta = $anoActual . '-' . $mesActual . '-' . $diaActual;
		// Obtener la fecha y hora actual
		$fechaActual = date("Y-m-d H:i:s");
		$nuevafecha = substr($fechaActual,0,10);

		$querySelect = mysqli_query($conexion, "SELECT `fecha` FROM `formulario` WHERE fecha = '$nuevafecha'");
		
		if (!mysqli_fetch_assoc($querySelect)) {
			
			$queryInsert = mysqli_query($conexion, "INSERT INTO `formulario` (`id_formulario`, `nombre`, `fecha`) VALUES (NULL, ' REGISTRO.$fechaCompleta', '$fechaActual')");
			$querySelect = mysqli_query($conexion, "SELECT `id_formulario` FROM `formulario` WHERE fecha = '$nuevafecha'");
			$dataFormulario = mysqli_fetch_assoc($querySelect);
			$idFormulario = $dataFormulario['id_formulario'];
			
			$queryInsert = mysqli_query($conexion, "INSERT INTO `modulo` (`id_modulo`, `id_formulario`, `modulo`) VALUES (NULL, '$idFormulario', '1.1 ESTRUCTURA')");

			$querySelect = mysqli_query($conexion, "SELECT `id_modulo` FROM `modulo` WHERE modulo = '1.1 ESTRUCTURA'");
			$dataModulo = mysqli_fetch_assoc($querySelect);
			$idModulo = $dataModulo['id_modulo'];
			$queryInsert = mysqli_query($conexion, "INSERT INTO `tema` (`id_tema`, `id_modulo`, `tema`) VALUES (NULL, '$idModulo', 'Indicadores de Gestión')");
			$queryInsert = mysqli_query($conexion, "INSERT INTO `tema` (`id_tema`, `id_modulo`, `tema`) VALUES (NULL, '$idModulo', 'Indicadores de Desempeño')");

		}
	}
}

//deshabiltar checkbox
$checkboxesDeshabilitadosForm1 = $_SESSION['checkDisabled1'] ?? true;
$checkboxesDeshabilitadosForm2 = $_SESSION['checkDisabled2'] ?? true;
$checkboxesDeshabilitadosForm3 = $_SESSION['checkDisabled3'] ?? true;
// deshabilitar inputs
$inputsDeshabilitadosForm4 = $_SESSION['inputDisabled4'] ?? true;
$inputsDeshabilitadosForm5 = $_SESSION['inputDisabled5'] ?? true;
$inputsDeshabilitadosForm6 = $_SESSION['inputDisabled6'] ?? true;
$inputsDeshabilitadosForm7 = $_SESSION['inputDisabled7'] ?? true;

$botonDeshabilitado1 = $_SESSION['deshabilitarBoton1'] ?? true;
$botonDeshabilitado2 = $_SESSION['deshabilitarBoton2'] ?? true;
$botonDeshabilitado3 = $_SESSION['deshabilitarBoton3'] ?? true;
$botonDeshabilitado4 = $_SESSION['deshabilitarBoton4'] ?? true;
$botonDeshabilitado5 = $_SESSION['deshabilitarBoton5'] ?? true;
$botonDeshabilitado6 = $_SESSION['deshabilitarBoton6'] ?? true;
$botonDeshabilitado7 = $_SESSION['deshabilitarBoton7'] ?? true;
// variables checkbox 111 
$opcion1_form1_value = $_SESSION['check1111'] ?? false;
$opcion2_form1_value = $_SESSION['check1112'] ?? false;
$opcion3_form1_value = $_SESSION['check1113'] ?? false;
$opcion4_form1_value = $_SESSION['check1114'] ?? false;
// variables checkbox 112
$opcion1_form2_value = $_SESSION['check1121'] ?? false;
$opcion2_form2_value = $_SESSION['check1122'] ?? false;
$opcion3_form2_value = $_SESSION['check1123'] ?? false;
$opcion4_form2_value = $_SESSION['check1124'] ?? false;
// variables checkbox 113
$opcion1_form3_value = $_SESSION['check1131'] ?? false;
$opcion2_form3_value = $_SESSION['check1132'] ?? false;

$opcion1_form4_value = $_SESSION['txtNombre1141'] ?? '';
$opcion2_form4_value = $_SESSION['txtNombre1142'] ?? '';

$opcion1_form5_value = $_SESSION['txtNombre1151'] ?? '';
$opcion2_form5_value = $_SESSION['txtNombre1152'] ?? '';

$opcion1_form6_value = $_SESSION['txtNombre1161'] ?? '';
$opcion2_form6_value = $_SESSION['txtNombre1162'] ?? '';

$opcion1_form7_value = $_SESSION['txtNombre1171'] ?? '';
$opcion2_form7_value = $_SESSION['txtNombre1172'] ?? '';

// Alerta para cada subtema
$alert111 = $_SESSION['alert111'] ?? '';
$alert112 = $_SESSION['alert112'] ?? '';
$alert113 = $_SESSION['alert113'] ?? '';
$alert114 = $_SESSION['alert114'] ?? '';
$alert115 = $_SESSION['alert115'] ?? '';
$alert116 = $_SESSION['alert116'] ?? '';
$alert117 = $_SESSION['alert117'] ?? '';

$estadoGeneral111 = empty($estadoGeneral111) ? '' : $estadoGeneral111;
$estadoGeneral112 = empty($estadoGeneral112) ? '' : $estadoGeneral112;
$estadoGeneral113 = empty($estadoGeneral113) ? '' : $estadoGeneral113;
$estadoGeneral114 = empty($estadoGeneral114) ? '' : $estadoGeneral114;
$estadoGeneral115 = empty($estadoGeneral115) ? '' : $estadoGeneral115;
$estadoGeneral116 = empty($estadoGeneral116) ? '' : $estadoGeneral116;
$estadoGeneral117 = empty($estadoGeneral117) ? '' : $estadoGeneral117;

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

    <!-- Modulo 1 Organizacion-->

    <!--Tema 1 -- Estructura -->

	<div class="jumbotron">

	<h2 class="display-7">1.1 Estructura</h2>
	<hr class="my-2">


</div>
		<div class="btn-group" role="group" aria-label="">
		<form method="POST" enctype="multipart/form-data">
        <button type="submit" name="registrarNuevoFormulario" value="" class="btn btn-success">Registro nuevo</button>
		</form>
    </div>
		<?php echo isset($alerta) ? $alerta : ''; ?>
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
						
						<label>
						<input type="checkbox" name="check1111" value="check111 1" <?php if ($checkboxesDeshabilitadosForm1) echo "disabled"; ?> <?php if ($opcion1_form1_value) echo "checked"; ?>> a) Disposiciones normativas que regulan la organización y funcionamiento del Ayuntamiento.</label>
						</br>
						<label>
						<input type="checkbox" name="check1112" value="check111 2" <?php if ($checkboxesDeshabilitadosForm1) echo "disabled"; ?> <?php if ($opcion2_form1_value ) echo "checked"; ?>> b) Disposiciones normativas de la Administración Pública Municipal.</label>
						</br>
						<label>
						<input type="checkbox" name="check1113" value="check111 3" <?php if ($checkboxesDeshabilitadosForm1) echo "disabled"; ?> <?php if ($opcion3_form1_value) echo "checked"; ?>> c) Documento que señale que fue avalado por la Administración o el Ayuntamiento en funciones,
                        según corresponda.</label>
						</br>
						<label>
						<input type="checkbox" name="check1114" value="check111 4" <?php if ($checkboxesDeshabilitadosForm1) echo "disabled"; ?> <?php if ($opcion4_form1_value) echo "checked"; ?>> d) Publicado conforme a la legislación estatal</label>
						</br>
						<div class="btn-group" role="group1" aria-label="">
							<button type="submit" name="111" value="Agregar111" class="btn btn-success" <?php if ($botonDeshabilitado1) echo "disabled"; ?>>Guardar</button>
							
						</div>
				
						<?php echo isset($alert111) ? $alert111 : ''; ?>
							
						<h6 class="display-15">1.1.2 Manuales de Organización</h6></p>
						<hr class="my-2">
						<label>
						<input type="checkbox" name="check1121" value="check112 1" <?php if ($checkboxesDeshabilitadosForm2) echo "disabled"; ?> <?php if ($opcion1_form2_value) echo "checked"; ?>> a) Disposiciones normativas que regulan la organización y funcionamiento del Ayuntamiento.</label>
						</br>
						<label>
						<input type="checkbox" name="check1122" value="check112 2" <?php if ($checkboxesDeshabilitadosForm2) echo "disabled"; ?> <?php if ($opcion2_form2_value) echo "checked"; ?>> b) Disposiciones normativas de la Administración Pública Municipal.</label>
						</br>
						<label>
						<input type="checkbox" name="check1123" value="check112 3" <?php if ($checkboxesDeshabilitadosForm2) echo "disabled"; ?> <?php if ($opcion3_form2_value) echo "checked"; ?>> c) Documento que señale que fue avalado por la Administración o el Ayuntamiento en funciones,
                        según corresponda.</label>
						</br>
						<label>
						<input type="checkbox" name="check1124" value="check112 4" <?php if ($checkboxesDeshabilitadosForm2) echo "disabled"; ?> <?php if ($opcion4_form2_value) echo "checked"; ?>> d) Publicado conforme a la legislación estatal</label>
						</br>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="112" value="Agregar112" class="btn btn-success" <?php if ($botonDeshabilitado2) echo "disabled"; ?>>Guardar</button>
						</div>
						<?php echo isset($alert112) ? $alert112 : ''; ?>

						<h6 class="display-15">1.1.3 Tabulador de sueldos o documentos con la estructura salarial del personal de
                        la administración pública municipal</h6></p>
						<hr class="my-2">
						<label>
						<input type="checkbox" name="check1131" value="check113 1" <?php if ($checkboxesDeshabilitadosForm3) echo "disabled"; ?> <?php if ($opcion1_form3_value) echo "checked"; ?>> a) Disposiciones normativas que regulan la organización y funcionamiento del Ayuntamiento.</label>
						</br>
						<label>
						<input type="checkbox" name="check1132" value="check113 2" <?php if ($checkboxesDeshabilitadosForm3) echo "disabled"; ?> <?php if ($opcion2_form3_value) echo "checked"; ?>> b) Disposiciones normativas de la Administración Pública Municipal.</label>
						</br>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="113" value="Agregar113" class="btn btn-success" <?php if ($botonDeshabilitado3) echo "disabled"; ?>>Guardar</button>
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
    <label for="txtNombre1141" class="text1">
        <input type="number" class="form-control" name="txtNombre1141" id="txtNombre1141" placeholder="" inputmode="numeric" pattern="[0-9]+" title="Ingrese solo números enteros" value="<?php echo $opcion1_form4_value; ?>"  <?php if ($inputsDeshabilitadosForm4) echo "disabled"; ?>>
        <span>Número de unidades administrativas que conforman la administración.</span>
    </label>
    <label for="txtNombre1142" class="text2">
        <input type="number" class="form-control" name="txtNombre1142" id="txtNombre1142" placeholder="" inputmode="numeric" pattern="[0-9]+" title="Ingrese solo números enteros" value="<?php echo $opcion2_form4_value; ?>"  <?php if ($inputsDeshabilitadosForm4) echo "disabled"; ?>>
        <span>Número de unidades administrativas promedio nacional.</span>
    </label>
    <div class="btn-group" role="group" aria-label="">
        <button type="submit" name="114" value="Agregar114" class="btn btn-success" <?php if ($botonDeshabilitado4) echo "disabled"; ?>>Guardar</button>
    </div>
							</div>
							</form>


						
							<?php echo isset($alert114) ? $alert114 : ''; ?>


	<form method="POST" enctype="multipart/form-data">
     <div class="form-group">
    <h6 class="display-15">1.1.5 Unidades administrativas existentes en función del número de unidades administrativas promedio</h6>
    <hr class="my-2">
    <label for="txtNombre1151" class="text1">
        <input type="number" class="form-control" name="txtNombre1151" id="txtNombre1151" placeholder="" inputmode="numeric" pattern="[0-9]+" title="Ingrese solo números enteros" value="<?php echo $opcion1_form5_value; ?>"  <?php if ($inputsDeshabilitadosForm5) echo "disabled"; ?>>
        <span>Número de unidades administrativas que conforman la administración.</span>
    </label>
    <label for="txtNombre1152" class="text2">
        <input type="number" class="form-control" name="txtNombre1152" id="txtNombre1152" placeholder="" inputmode="numeric" pattern="[0-9]+" title="Ingrese solo números enteros" value="<?php echo $opcion2_form5_value; ?>"  <?php if ($inputsDeshabilitadosForm5) echo "disabled"; ?>>
        <span>Número de unidades administrativas promedio nacional.</span>
    </label>
    <div class="btn-group" role="group" aria-label="">
        <button type="submit" name="115" value="Agregar115" class="btn btn-success" <?php if ($botonDeshabilitado5) echo "disabled"; ?>>Guardar</button>
    </div>
	</div>
	</form>

												
		<?php echo isset($alert115) ? $alert115 : ''; ?>

					<form method="POST" enctype="multipart/form-data">
     				<div class="form-group">		
						<h6 class="display-15">1.1.6 Nivel salarial del Presidente(a) municipal </h6></p>
						<hr class="my-2">
						<label for="txtNombre116" class="text1">
                        <input type="number" class="form-control" name="txtNombre1161" id="txtNombre1161" placeholder="" inputmode="numeric" pattern="[0-9]+" title="Ingrese solo números enteros" value="<?php echo $opcion1_form6_value; ?>"  <?php if ($inputsDeshabilitadosForm6) echo "disabled"; ?>>
						<span>Puestos de mando medio y superior ocupados por mujeres.</span></label>
						<label for="txtNombre116" class="text2">
                        <input type="number" class="form-control" name="txtNombre1162" id="txtNombre1162" placeholder="" inputmode="numeric" pattern="[0-9]+" title="Ingrese solo números enteros" value="<?php echo $opcion2_form6_value; ?>"  <?php if ($inputsDeshabilitadosForm6) echo "disabled"; ?>>
						<span>Total de puestos de mando medio y superior de la APM.</span></label>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="116" value="Agregar116" class="btn btn-success" <?php if ($botonDeshabilitado6) echo "disabled"; ?>>Guardar</button>
						</div>
						</div>
						</form>

													
						<?php echo isset($alert116) ? $alert116 : ''; ?>

					<form method="POST" enctype="multipart/form-data">
     				<div class="form-group">
						<h6 class="display-15">1.1.7 Participación de las mujeres en puestos de mando medio y superior en la
                        administración pública municipal </h6></p>
						<hr class="my-2">
						<label for="txtNombre117" class="text1">
                        <input type="number" class="form-control" name="txtNombre1171" id="txtNombre1171" placeholder="" inputmode="numeric" pattern="[0-9]+" title="Ingrese solo números enteros" value="<?php echo $opcion1_form7_value; ?>"  <?php if ($inputsDeshabilitadosForm7) echo "disabled"; ?>>
						<span>Número de unidades administrativas que conforman la administración.</span></label>
						<label for="txtNombre117" class="text2">
                        <input type="number" class="form-control" name="txtNombre1172" id="txtNombre1172" placeholder="" inputmode="numeric" pattern="[0-9]+" title="Ingrese solo números enteros" value="<?php echo $opcion2_form7_value; ?>"  <?php if ($inputsDeshabilitadosForm7) echo "disabled"; ?>>
						<span>Número de unidades administrativas promedio nacional.</span></label>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="117" value="Agregar117" class="btn btn-success" <?php if ($botonDeshabilitado7) echo "disabled"; ?>>Guardar</button>
						</div>
						</div>
						</form>
													
						<?php echo isset($alert117) ? $alert117 : ''; ?>
					
				
			</div>
		</div>
	</div>

	</div>
						</br>

	
	<!--Tema 2 -- Planeacion-->

		
	<?php include "../Includes/footer.php"; ?>