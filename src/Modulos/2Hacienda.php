<?php include("../Includes/header.php"); ?>

<?php 
	// Inicia la sesión
	include("../../bd.php");
	// session_unset();

	$alerta = '';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registrarNuevoFormulario'])){

	$estaCompletado1 = $_SESSION['completado1'] ?? false;
	$estaCompletado2 = $_SESSION['completado2'] ?? false;
	$estaCompletado3 = $_SESSION['completado3'] ?? false;
	$estaCompletado4 = $_SESSION['completado4'] ?? false;
	$estaCompletado5 = $_SESSION['completado5'] ?? false;
	$estaCompletado6 = $_SESSION['completado6'] ?? false;
	$estaCompletado7 = $_SESSION['completado7'] ?? false;
	$estaCompletado8 = $_SESSION['completado8'] ?? false;
	$estaCompletado9 = $_SESSION['completado9'] ?? false;
	$estaCompletado10 = $_SESSION['completado10'] ?? false;
	$estaCompletado11 = $_SESSION['completado11'] ?? false;
	$estaCompletado12 = $_SESSION['completado12'] ?? false;
	$estaCompletado13 = $_SESSION['completado13'] ?? false;
	$estaCompletado14 = $_SESSION['completado14'] ?? false;
	$estaCompletado15 = $_SESSION['completado15'] ?? false;
	$estaCompletado16 = $_SESSION['completado16'] ?? false;
	$estaCompletado17 = $_SESSION['completado17'] ?? false;
	$estaCompletado18 = $_SESSION['completado18'] ?? false;
	$estaCompletado19 = $_SESSION['completado19'] ?? false;

	$valores = [
    $estaCompletado1,
    $estaCompletado2,
    $estaCompletado3,
    $estaCompletado4,
    $estaCompletado5,
    $estaCompletado6,
    $estaCompletado7,
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
		$alerta = '<div class="alert alert-warninig" role="alert">
									Formulario Anual Registrado.
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

	} elseif ($alMenosUnoTrue !== $todosTrue) {

		$alerta = '<div class="alert alert-warning" role="alert">
									Formulario Actual En Curso
							</div>';
	} else {
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
			
			// $queryInsert = mysqli_query($conexion, "INSERT INTO `formulario` (`id_formulario`, `nombre`, `fecha`) VALUES (NULL, ' REGISTRO.$fechaCompleta', '$fechaActual')");
			// $querySelect = mysqli_query($conexion, "SELECT `id_formulario` FROM `formulario` WHERE fecha = '$nuevafecha'");
			// $dataFormulario = mysqli_fetch_assoc($querySelect);
			// $idFormulario = $dataFormulario['id_formulario'];
			
			// $queryInsert = mysqli_query($conexion, "INSERT INTO `modulo` (`id_modulo`, `id_formulario`, `modulo`) VALUES (NULL, '$idFormulario', '1.1 ESTRUCTURA')");

			// $querySelect = mysqli_query($conexion, "SELECT `id_modulo` FROM `modulo` WHERE modulo = '1.1 ESTRUCTURA'");
			// $dataModulo = mysqli_fetch_assoc($querySelect);
			// $idModulo = $dataModulo['id_modulo'];
			// $queryInsert = mysqli_query($conexion, "INSERT INTO `tema` (`id_tema`, `id_modulo`, `tema`) VALUES (NULL, '$idModulo', 'Indicadores de Gestión')");
			// $queryInsert = mysqli_query($conexion, "INSERT INTO `tema` (`id_tema`, `id_modulo`, `tema`) VALUES (NULL, '$idModulo', 'Indicadores de Desempeño')");

		}
	}
}

//deshabiltar checkbox
// Inicializar un array con los nombres de las variables
$checkNames = ['checkDisabled1', 'checkDisabled2', 'checkDisabled3', 'checkDisabled4', 'checkDisabled5', 'checkDisabled6', 'checkDisabled7', 'checkDisabled8', 'checkDisabled9'];

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
		'check211' => 6, // Último número de cada grupo de checkboxes
		'check212' => 5,
		'check213' => 3,
		'check221' => 2,
		'check222' => 3,
		'check223' => 3,
		'check231' => 2,
		'check241' => 5,
		'check242' => 2,
];

$valueCheckNames211 = [
	'check2111', 'check2112', 'check2113', 'check2114', 'check2115', 'check2116'
];
$valueCheckNames212 = [
	'check2121', 'check2122', 'check2123', 'check2124', 'check2125',
];
$valueCheckNames213 = [
	'check2131', 'check2132', 'check2133', 
];
$valueCheckNames221 = [
	'check2211', 'check2212',
];
$valueCheckNames222 = [
	'check2221', 'check2222', 'check2223', 
];
$valueCheckNames223 = [
	'check2231', 'check2232', 'check2233', 
];
$valueCheckNames231 = [
	'check2311', 'check2312', 
];
$valueCheckNames241 = [
	'check2411', 'check2412', 'check2413', 'check2414', 'check2415',
];
$valueCheckNames242 = [
	'check2421', 'check2422', 
];
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check211']; $i++) {
	${"opcion{$i}_form{$valueCheckNames211[$i]}"} = $_SESSION[$valueCheckNames211[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check212']; $i++) {
	${"opcion{$i}_form{$valueCheckNames212[$i]}"} = $_SESSION[$valueCheckNames212[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check213']; $i++) {
	${"opcion{$i}_form{$valueCheckNames213[$i]}"} = $_SESSION[$valueCheckNames213[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check221']; $i++) {
	${"opcion{$i}_form{$valueCheckNames221[$i]}"} = $_SESSION[$valueCheckNames221[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check222']; $i++) {
	${"opcion{$i}_form{$valueCheckNames222[$i]}"} = $_SESSION[$valueCheckNames222[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check223']; $i++) {
	${"opcion{$i}_form{$valueCheckNames223[$i]}"} = $_SESSION[$valueCheckNames223[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check231']; $i++) {
	${"opcion{$i}_form{$valueCheckNames231[$i]}"} = $_SESSION[$valueCheckNames231[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check241']; $i++) {
	${"opcion{$i}_form{$valueCheckNames241[$i]}"} = $_SESSION[$valueCheckNames241[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check242']; $i++) {
	${"opcion{$i}_form{$valueCheckNames242[$i]}"} = $_SESSION[$valueCheckNames242[$i]] ?? false;
}

// valores inputs
$variableNames = [
	'form1' => ['txtNombre2141', 'txtNombre2142'],
	'form2' => ['txtNombre2151', 'txtNombre2152'],
	'form3' => ['txtNombre2161', 'txtNombre2162'],
	'form4' => ['txtNombre2171', 'txtNombre2172'],
	'form5' => ['txtNombre2241', 'txtNombre2242'],
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
	'alert211', 'alert212', 'alert213', 'alert214', 'alert215', 'alert216', 'alert217',
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
	
	// $querySelect = mysqli_query($conexion, "SELECT `id_tema` FROM `tema` WHERE tema = 'Indicadores de Gestión'");
	// $dataTema1 = mysqli_fetch_assoc($querySelect);
	// $idTema1 = $dataTema1['id_tema'];

	// $querySelect = mysqli_query($conexion, "SELECT `id_tema` FROM `tema` WHERE tema = 'Indicadores de Desempeño'");
	// $dataTema2 = mysqli_fetch_assoc($querySelect);
	// $idTema2 = $dataTema2['id_tema'];

  // Evaluar y almacenar las opciones seleccionadas según el botón presionado
  if (isset($_POST['211'])) {
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

		foreach ($valueCheckNames211 as $name) {
			// Verificar si el checkbox está marcado
			if (isset($_POST[$name])) {
					// El checkbox está marcado, puedes hacer lo que necesites con el valor
					$valor_checkbox = $_POST[$name];
					$_SESSION[$name] = true;
					$count = $count + 1;
			} else {
					$_SESSION[$name] = false;
			}
		}

		// Evaluar el estado general del formulario
		$estadoGeneral = 'rezago';  // Inicialmente, asume que no hay checkboxes seleccionados

		if ($count === 6) {
			$estadoGeneral = 'optimo';  // Todos los checkboxes del conjunto 1 están seleccionados
		} elseif ($count > 0) {
			$estadoGeneral = 'proceso';  // Al menos 1 checkbox del conjunto 1 está seleccionado
		}

		if ($estadoGeneral === "optimo") { 
			$alert211 ='<div class="alert alert-success" role="alert">
				¡Óptimo!
				</div>';
		} elseif ($estadoGeneral === "proceso") {
			$alert211='<div class="alert alert-warning" role="alert">
				En proceso
			</div>';
		} elseif ($estadoGeneral === "rezago") {
			$alert211='<div class="alert alert-danger" role="alert">
				¡Rezago!
			</div>';
		} elseif ($estadoGeneral === "") {

		} 
		$estadoGeneral = '';
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `subtema` (`id_subtema`, `id_tema`, `subtema`) VALUES (NULL, '$idTema1', '1.1.1 Bando de Policía y Gobierno')");
		// $querySelect = mysqli_query($conexion, "SELECT `id_subtema` FROM `subtema` WHERE subtema = '1.1.1 Bando de Policía y Gobierno'");
		// $dataSubtema = mysqli_fetch_assoc($querySelect);
		// $idSubtema = $dataSubtema['id_subtema'];
		
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'a) Disposiciones normativas que regulan la organización y funcionamiento del Ayuntamiento.', $check1)");
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'b) Disposiciones normativas de la Administración Pública Municipal.', $check2)");
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'c) Documento que señale que fue avalado por la Administración o el Ayuntamiento en funciones, según corresponda.', $check3)");
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'd) Publicado conforme a la legislación estatal.', $check4)");

		$_SESSION['alert211'] = $alert211;

	} elseif (isset($_POST['212'])) {

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

		foreach ($valueCheckNames212 as $name) {
			// Verificar si el checkbox está marcado
			if (isset($_POST[$name])) {
					// El checkbox está marcado, puedes hacer lo que necesites con el valor
					$valor_checkbox = $_POST[$name];
					$_SESSION[$name] = true;
					$count = $count + 1;
			} else {
					$_SESSION[$name] = false;
			}
		}

		$estadoGeneral = 'rezago';
		if ($count === 5) {
			$estadoGeneral = 'optimo';  
		} elseif ($count > 0) {
			$estadoGeneral = 'proceso';  
		}

		if ($estadoGeneral === "optimo") {
			$alert212='<div class="alert alert-success" role="alert">
				¡Óptimo!
				</div>';
		} elseif ($estadoGeneral === "proceso") {
			$alert212='<div class="alert alert-warning" role="alert">
				En proceso
			</div>';
		} elseif ($estadoGeneral === "rezago") {
			$alert212='<div class="alert alert-danger" role="alert">
				¡Rezago!
			</div>';
		}	elseif ($estadoGeneral === "")  {

		}

		$estadoGeneral = '';

		// $queryInsert = mysqli_query($conexion, "INSERT INTO `subtema` (`id_subtema`, `id_tema`, `subtema`) VALUES (NULL, '$idTema1', '1.1.2 Manuales de Organización')");
		// $querySelect = mysqli_query($conexion, "SELECT `id_subtema` FROM `subtema` WHERE subtema = '1.1.2 Manuales de Organización'");
		// $dataSubtema = mysqli_fetch_assoc($querySelect);
		// $idSubtema = $dataSubtema['id_subtema'];
		
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'a) Disposiciones normativas que regulan la organización y funcionamiento del Ayuntamiento.', $check1)");
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'b) Disposiciones normativas de la Administración Pública Municipal.', $check2)");
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'c) Documento que señale que fue avalado por la Administración o el Ayuntamiento en funciones, según corresponda.', $check3)");
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'd) Publicado conforme a la legislación estatal.', $check4)");


		$_SESSION['alert212'] = $alert212;

  } elseif (isset($_POST['213'])) {

		$_SESSION['completado3'] = true;
		$checkboxesDeshabilitadosForm3 = true;
		$_SESSION['checkDisabled3'] = $checkboxesDeshabilitadosForm3;
		$botonDeshabilitado3 = true;
		$_SESSION['deshabilitarBoton3'] = $botonDeshabilitado3;
		$count = 0;

		$check1 = 0;
		$check2 = 0;
		foreach ($valueCheckNames213 as $name) {
			// Verificar si el checkbox está marcado
			if (isset($_POST[$name])) {
					// El checkbox está marcado, puedes hacer lo que necesites con el valor
					$valor_checkbox = $_POST[$name];
					$_SESSION[$name] = true;
					$count = $count + 1;
			} else {
					$_SESSION[$name] = false;
			}
		}
		//113
		$estadoGeneral = 'rezago'; 

		if ($count === 3) {
			$estadoGeneral = 'optimo'; 
		} elseif ($count > 0) {
			$estadoGeneral = 'proceso'; 
		}

		if ($estadoGeneral === "optimo") {
			$alert213='<div class="alert alert-success" role="alert">
				¡Óptimo!
				</div>';
		} elseif ($estadoGeneral === "proceso") {
			$alert213='<div class="alert alert-warning" role="alert">
				En proceso
			</div>';
		} elseif ($estadoGeneral === "rezago") {
			$alert213='<div class="alert alert-danger" role="alert">
				¡Rezago!
			</div>';
		} elseif ($estadoGeneral === "") {

		}
		
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `subtema` (`id_subtema`, `id_tema`, `subtema`) VALUES (NULL, '$idTema1', '1.1.3 Tabulador de sueldos o documentos con la estructura salarial del personal de la administración pública municipal')");
		// $querySelect = mysqli_query($conexion, "SELECT `id_subtema` FROM `subtema` WHERE subtema = '1.1.3 Tabulador de sueldos o documentos con la estructura salarial del personal de la administración pública municipal'");
		// $dataSubtema = mysqli_fetch_assoc($querySelect);
		// $idSubtema = $dataSubtema['id_subtema'];
		
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'a) Disposiciones normativas que regulan la organización y funcionamiento del Ayuntamiento.', $check1)");
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'b) Disposiciones normativas de la Administración Pública Municipal.', $check2)");


		$_SESSION['alert213'] = $alert213;

	} elseif (isset($_POST['214'])) {

		//214
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form1'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form1_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre2141'] = $opcion1_form1_value;
		$_SESSION['txtNombre2142'] = $opcion2_form1_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion2_form1_value != 0) {
			echo $opcion2_form1_value;
				// Calcula el porcentaje
				$porcentaje = ($opcion1_form1_value / $opcion2_form1_value) * 100;

				// Evalúa el porcentaje y determina el estado
				if ($porcentaje <= 100) {
						$estado = 'Optimo';
				} elseif ($porcentaje > 100 && $porcentaje <= 115) {
						$estado = 'En Proceso';
				} else {
						$estado = 'Rezago';
				}

				$_SESSION['completado4'] = true;
				$inputsDeshabilitadosForm1 = true;
				$_SESSION['inputDisabled1'] = $inputsDeshabilitadosForm1;
				$botonDeshabilitado4 = true;
				$_SESSION['deshabilitarBoton4'] = $botonDeshabilitado4;
				$estadoGeneral = $estado;
		} else {
				// Manejar el caso donde el denominador es 0 (división por 0)
				$estadoGeneral = 'Error: División por 0';
				
		}

		if ($estadoGeneral === 'Optimo') {

			$alert214 = '<div class="alert alert-success" role="alert">
											¡Optimo! El porcentaje es menor a 100.
									</div>';
		} elseif ($estadoGeneral === 'En Proceso')  {
				$alert214 = '<div class="alert alert-warning" role="alert">
												En proceso. El porcentaje es mayor a 100 pero menor o igual a 115.
										</div>';
		} elseif ($estadoGeneral === 'Error: División por 0') {
				$alert214 = '<div class="alert alert-danger" role="alert">
												Error: Se ha ingresado 0 en la división.
										</div>';
		} elseif ($estadoGeneral === '') {
		} else {
				$alert214 = '<div class="alert alert-danger" role="alert">
												¡Rezago! El porcentaje es mayor a 115.
										</div>';
		}
	

		// $queryInsert = mysqli_query($conexion, "INSERT INTO `subtema` (`id_subtema`, `id_tema`, `subtema`) VALUES (NULL, '$idTema2', '1.1.4 Unidades administrativas existentes en función del número de unidades administrativas promedio')");
		// $querySelect = mysqli_query($conexion, "SELECT `id_subtema` FROM `subtema` WHERE subtema = '1.1.4 Unidades administrativas existentes en función del número de unidades administrativas promedio'");
		// $dataSubtema = mysqli_fetch_assoc($querySelect);
		// $idSubtema = $dataSubtema['id_subtema'];
		
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Número de unidades administrativas que conforman la administración.', $opcion1_form4_value)");
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Número de unidades administrativas promedio nacional.', $opcion2_form4_value)");

		$_SESSION['alert214'] = $alert214;

	} elseif (isset($_POST['215'])) {

		//115
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form2'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form2_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre2151'] = $opcion1_form2_value;
		$_SESSION['txtNombre2152'] = $opcion2_form2_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion2_form2_value != 0) {
			// Calcula el porcentaje
			$porcentaje = ($opcion1_form2_value / $opcion2_form2_value) * 100;
		
			// Evalúa el porcentaje y determina el estado
			if ($porcentaje <= 100) {
				$estado = 'Optimo';
			} elseif ($porcentaje > 100 && $porcentaje <= 115) {
				$estado = 'En Proceso';
			} else {
				$estado = 'Rezago';
			}

			$_SESSION['completado5'] = true;
			$inputsDeshabilitadosForm2 = true;
			$_SESSION['inputDisabled2'] = $inputsDeshabilitadosForm2;
			$botonDeshabilitado5 = true;
			$_SESSION['deshabilitarBoton5'] = $botonDeshabilitado5;
			$estadoGeneral = $estado;
		} else {
			$estadoGeneral = 'Error: División por 0';
		}

		if ($estadoGeneral === 'Optimo') {

			$alert215 = '<div class="alert alert-success" role="alert">
											¡Optimo! El porcentaje es menor a 100.
									</div>';
		} elseif ($estadoGeneral === 'En Proceso')  {
				$alert215 = '<div class="alert alert-warning" role="alert">
												En proceso. El porcentaje es mayor a 100 pero menor o igual a 115.
										</div>';
		} elseif ($estadoGeneral === 'Error: División por 0') {
				$alert215 = '<div class="alert alert-danger" role="alert">
												Error: Se ha ingresado 0 en la división.
										</div>';
		}  elseif ($estadoGeneral === '') {

		
		} else {
				$alert215 = '<div class="alert alert-danger" role="alert">
												¡Rezago! El porcentaje es mayor a 115.
										</div>';
		}
		

		// $queryInsert = mysqli_query($conexion, "INSERT INTO `subtema` (`id_subtema`, `id_tema`, `subtema`) VALUES (NULL, '$idTema2', '1.1.5 Unidades administrativas existentes en función del número de unidades administrativas promedio')");
		// $querySelect = mysqli_query($conexion, "SELECT `id_subtema` FROM `subtema` WHERE subtema = '1.1.5 Unidades administrativas existentes en función del número de unidades administrativas promedio'");
		// $dataSubtema = mysqli_fetch_assoc($querySelect);
		// $idSubtema = $dataSubtema['id_subtema'];
		
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Número de unidades administrativas que conforman la administración.', $opcion1_form5_value)");
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Número de unidades administrativas promedio nacional.', $opcion2_form5_value)");

		$_SESSION['alert215'] = $alert215;

	} elseif (isset($_POST['216'])) {

		//116
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form3'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form3_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre2161'] = $opcion1_form3_value;
		$_SESSION['txtNombre2162'] = $opcion2_form3_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion2_form3_value != 0) {
			// Calcula el porcentaje
			$porcentaje = ($opcion1_form3_value / $opcion2_form3_value) * 100;
		
		
			// Evalúa el porcentaje y determina el estado
			if ($porcentaje <= 100) {
				$estado = 'Optimo';
			} elseif ($porcentaje > 100 && $porcentaje <= 115) {
				$estado = 'En Proceso';
			} else {
				$estado = 'Rezago';
			}
			$_SESSION['completado6'] = true;
			$inputsDeshabilitadosForm3 = true;
			$_SESSION['inputDisabled3'] = $inputsDeshabilitadosForm3;
			$botonDeshabilitado6 = true;
			$_SESSION['deshabilitarBoton6'] = $botonDeshabilitado6;
			$estadoGeneral = $estado;
		} else {
			$estadoGeneral = 'Error: División por 0';
		}

		if ($estadoGeneral === 'Optimo') {

			$alert216 = '<div class="alert alert-success" role="alert">
											¡Optimo! El porcentaje es menor a 100.
									</div>';
		} elseif ($estadoGeneral === 'En Proceso')  {
				$alert216 = '<div class="alert alert-warning" role="alert">
												En proceso. El porcentaje es mayor a 100 pero menor o igual a 115.
										</div>';
		} elseif ($estadoGeneral === 'Error: División por 0') {
				$alert216 = '<div class="alert alert-danger" role="alert">
												Error: Se ha ingresado 0 en la división.
										</div>';
		}  elseif ($estadoGeneral === '') {

		
		} else {
				$alert216 = '<div class="alert alert-danger" role="alert">
												¡Rezago! El porcentaje es mayor a 115.
										</div>';
		}

		// $queryInsert = mysqli_query($conexion, "INSERT INTO `subtema` (`id_subtema`, `id_tema`, `subtema`) VALUES (NULL, '$idTema2', '1.1.6 Nivel salarial del Presidente(a) municipal')");
		// $querySelect = mysqli_query($conexion, "SELECT `id_subtema` FROM `subtema` WHERE subtema = '1.1.6 Nivel salarial del Presidente(a) municipal'");
		// $dataSubtema = mysqli_fetch_assoc($querySelect);
		// $idSubtema = $dataSubtema['id_subtema'];
		
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Puestos de mando medio y superior ocupados por mujeres.', $opcion1_form6_value)");
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Total de puestos de mando medio y superior de la APM.', $opcion2_form6_value)");


		$_SESSION['alert216'] = $alert216;

	} elseif (isset($_POST['217'])) {

		//217
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form4'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form4_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre2171'] = $opcion1_form4_value;
		$_SESSION['txtNombre2172'] = $opcion2_form4_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion2_form4_value != 0) {
			// Calcula el porcentaje
			$porcentaje = ($opcion1_form4_value / $opcion2_form4_value) * 100;
		
		
			// Evalúa el porcentaje y determina el estado
			if ($porcentaje <= 100) {
				$estado = 'Optimo';
			} elseif ($porcentaje > 100 && $porcentaje <= 115) {
				$estado = 'En Proceso';
			} else {
				$estado = 'Rezago';
			}
				$_SESSION['completado7'] = true;
				$inputsDeshabilitadosForm4 = true;
				$_SESSION['inputDisabled4'] = $inputsDeshabilitadosForm4;
				$botonDeshabilitado7 = true;
				$_SESSION['deshabilitarBoton7'] = $botonDeshabilitado7;
				$estadoGeneral = $estado;
			} else {
				$estadoGeneral = 'Error: División por 0';
			}
			
			if ($estadoGeneral === 'Optimo') {

				$alert217 = '<div class="alert alert-success" role="alert">
												¡Optimo! El porcentaje es menor a 100.
										</div>';
			} elseif ($estadoGeneral === 'En Proceso')  {
					$alert217 = '<div class="alert alert-warning" role="alert">
													En proceso. El porcentaje es mayor a 100 pero menor o igual a 115.
											</div>';
			} elseif ($estadoGeneral === 'Error: División por 0') {
					$alert217 = '<div class="alert alert-danger" role="alert">
													Error: Se ha ingresado 0 en la división.
											</div>';
			}  elseif ($estadoGeneral === '') {

			
			} else {
					$alert217 = '<div class="alert alert-danger" role="alert">
													¡Rezago! El porcentaje es mayor a 115.
											</div>';
			}
	
			// $queryInsert = mysqli_query($conexion, "INSERT INTO `subtema` (`id_subtema`, `id_tema`, `subtema`) VALUES (NULL, '$idTema2', '1.1.7 Participación de las mujeres en puestos de mando medio y superior en la administración pública municipal')");
			// $querySelect = mysqli_query($conexion, "SELECT `id_subtema` FROM `subtema` WHERE subtema = '1.1.7 Participación de las mujeres en puestos de mando medio y superior en la administración pública municipal'");
			// $dataSubtema = mysqli_fetch_assoc($querySelect);
			// $idSubtema = $dataSubtema['id_subtema'];
			
			// $queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Número de unidades administrativas que conforman la administración.', $opcion1_form7_value)");
			// $queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Número de unidades administrativas promedio nacional.', $opcion2_form7_value)");

			$_SESSION['alert217'] = $alert217;
	} elseif (isset($_POST['221'])) {

		$_SESSION['completado8'] = true;
		$checkboxesDeshabilitadosForm4 = true;
		$_SESSION['checkDisabled4'] = $checkboxesDeshabilitadosForm4;
		$botonDeshabilitado8 = true;
		$_SESSION['deshabilitarBoton8'] = $botonDeshabilitado8;
		$count = 0;

		$check1 = 0;
		$check2 = 0;
		foreach ($valueCheckNames221 as $name) {
			// Verificar si el checkbox está marcado
			if (isset($_POST[$name])) {
					// El checkbox está marcado, puedes hacer lo que necesites con el valor
					$valor_checkbox = $_POST[$name];
					$_SESSION[$name] = true;
					$count = $count + 1;
			} else {
					$_SESSION[$name] = false;
			}
		}
		//221
		$estadoGeneral = 'rezago'; 

		if ($count === 2) {
			$estadoGeneral = 'optimo'; 
		} elseif ($count > 0) {
			$estadoGeneral = 'proceso'; 
		}

		if ($estadoGeneral === "optimo") {
			$alert221='<div class="alert alert-success" role="alert">
				¡Óptimo!
				</div>';
		} elseif ($estadoGeneral === "proceso") {
			$alert221='<div class="alert alert-warning" role="alert">
				En proceso
			</div>';
		} elseif ($estadoGeneral === "rezago") {
			$alert221='<div class="alert alert-danger" role="alert">
				¡Rezago!
			</div>';
		} elseif ($estadoGeneral === "") {

		}
		
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `subtema` (`id_subtema`, `id_tema`, `subtema`) VALUES (NULL, '$idTema1', '1.1.3 Tabulador de sueldos o documentos con la estructura salarial del personal de la administración pública municipal')");
		// $querySelect = mysqli_query($conexion, "SELECT `id_subtema` FROM `subtema` WHERE subtema = '1.1.3 Tabulador de sueldos o documentos con la estructura salarial del personal de la administración pública municipal'");
		// $dataSubtema = mysqli_fetch_assoc($querySelect);
		// $idSubtema = $dataSubtema['id_subtema'];
		
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'a) Disposiciones normativas que regulan la organización y funcionamiento del Ayuntamiento.', $check1)");
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'b) Disposiciones normativas de la Administración Pública Municipal.', $check2)");


		$_SESSION['alert221'] = $alert221;

	} elseif (isset($_POST['222'])) {

		$_SESSION['completado9'] = true;
		$checkboxesDeshabilitadosForm5 = true;
		$_SESSION['checkDisabled5'] = $checkboxesDeshabilitadosForm5;
		$botonDeshabilitado9 = true;
		$_SESSION['deshabilitarBoton9'] = $botonDeshabilitado9;
		$count = 0;

		$check1 = 0;
		$check2 = 0;
		foreach ($valueCheckNames222 as $name) {
			// Verificar si el checkbox está marcado
			if (isset($_POST[$name])) {
					// El checkbox está marcado, puedes hacer lo que necesites con el valor
					$valor_checkbox = $_POST[$name];
					$_SESSION[$name] = true;
					$count = $count + 1;
			} else {
					$_SESSION[$name] = false;
			}
		}
		//222
		$estadoGeneral = 'rezago'; 

		if ($count === 3) {
			$estadoGeneral = 'optimo'; 
		} elseif ($count > 0) {
			$estadoGeneral = 'proceso'; 
		}

		if ($estadoGeneral === "optimo") {
			$alert222='<div class="alert alert-success" role="alert">
				¡Óptimo!
				</div>';
		} elseif ($estadoGeneral === "proceso") {
			$alert222='<div class="alert alert-warning" role="alert">
				En proceso
			</div>';
		} elseif ($estadoGeneral === "rezago") {
			$alert222='<div class="alert alert-danger" role="alert">
				¡Rezago!
			</div>';
		} elseif ($estadoGeneral === "") {

		}
		
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `subtema` (`id_subtema`, `id_tema`, `subtema`) VALUES (NULL, '$idTema1', '1.1.3 Tabulador de sueldos o documentos con la estructura salarial del personal de la administración pública municipal')");
		// $querySelect = mysqli_query($conexion, "SELECT `id_subtema` FROM `subtema` WHERE subtema = '1.1.3 Tabulador de sueldos o documentos con la estructura salarial del personal de la administración pública municipal'");
		// $dataSubtema = mysqli_fetch_assoc($querySelect);
		// $idSubtema = $dataSubtema['id_subtema'];
		
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'a) Disposiciones normativas que regulan la organización y funcionamiento del Ayuntamiento.', $check1)");
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'b) Disposiciones normativas de la Administración Pública Municipal.', $check2)");


		$_SESSION['alert222'] = $alert222;

	} elseif (isset($_POST['223'])) {

		$_SESSION['completado10'] = true;
		$checkboxesDeshabilitadosForm6 = true;
		$_SESSION['checkDisabled6'] = $checkboxesDeshabilitadosForm6;
		$botonDeshabilitado10 = true;
		$_SESSION['deshabilitarBoton10'] = $botonDeshabilitado10;
		$count = 0;

		$check1 = 0;
		$check2 = 0;
		foreach ($valueCheckNames223 as $name) {
			// Verificar si el checkbox está marcado
			if (isset($_POST[$name])) {
					// El checkbox está marcado, puedes hacer lo que necesites con el valor
					$valor_checkbox = $_POST[$name];
					$_SESSION[$name] = true;
					$count = $count + 1;
			} else {
					$_SESSION[$name] = false;
			}
		}
		//223
		$estadoGeneral = 'rezago'; 

		if ($count === 3) {
			$estadoGeneral = 'optimo'; 
		} elseif ($count > 0) {
			$estadoGeneral = 'proceso'; 
		}

		if ($estadoGeneral === "optimo") {
			$alert223='<div class="alert alert-success" role="alert">
				¡Óptimo!
				</div>';
		} elseif ($estadoGeneral === "proceso") {
			$alert223='<div class="alert alert-warning" role="alert">
				En proceso
			</div>';
		} elseif ($estadoGeneral === "rezago") {
			$alert223='<div class="alert alert-danger" role="alert">
				¡Rezago!
			</div>';
		} elseif ($estadoGeneral === "") {

		}
		
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `subtema` (`id_subtema`, `id_tema`, `subtema`) VALUES (NULL, '$idTema1', '1.1.3 Tabulador de sueldos o documentos con la estructura salarial del personal de la administración pública municipal')");
		// $querySelect = mysqli_query($conexion, "SELECT `id_subtema` FROM `subtema` WHERE subtema = '1.1.3 Tabulador de sueldos o documentos con la estructura salarial del personal de la administración pública municipal'");
		// $dataSubtema = mysqli_fetch_assoc($querySelect);
		// $idSubtema = $dataSubtema['id_subtema'];
		
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'a) Disposiciones normativas que regulan la organización y funcionamiento del Ayuntamiento.', $check1)");
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'b) Disposiciones normativas de la Administración Pública Municipal.', $check2)");


		$_SESSION['alert223'] = $alert223;

	} elseif (isset($_POST['224'])) {

		//224
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form5'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form5_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre2241'] = $opcion1_form5_value;
		$_SESSION['txtNombre2242'] = $opcion2_form5_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion2_form5_value != 0) {
			// Calcula el porcentaje
			$porcentaje = ($opcion1_form5_value / $opcion2_form5_value) * 100;
		
		
			// Evalúa el porcentaje y determina el estado
			if ($porcentaje <= 100) {
				$estado = 'Optimo';
			} elseif ($porcentaje > 100 && $porcentaje <= 115) {
				$estado = 'En Proceso';
			} else {
				$estado = 'Rezago';
			}
				$_SESSION['completado11'] = true;
				$inputsDeshabilitadosForm5 = true;
				$_SESSION['inputDisabled5'] = $inputsDeshabilitadosForm5;
				$botonDeshabilitado11 = true;
				$_SESSION['deshabilitarBoton11'] = $botonDeshabilitado11;
				$estadoGeneral = $estado;
			} else {
				$estadoGeneral = 'Error: División por 0';
			}
			
			if ($estadoGeneral === 'Optimo') {

				$alert224 = '<div class="alert alert-success" role="alert">
												¡Optimo! El porcentaje es menor a 100.
										</div>';
			} elseif ($estadoGeneral === 'En Proceso')  {
					$alert224 = '<div class="alert alert-warning" role="alert">
													En proceso. El porcentaje es mayor a 100 pero menor o igual a 115.
											</div>';
			} elseif ($estadoGeneral === 'Error: División por 0') {
					$alert224 = '<div class="alert alert-danger" role="alert">
													Error: Se ha ingresado 0 en la división.
											</div>';
			}  elseif ($estadoGeneral === '') {

			
			} else {
					$alert224 = '<div class="alert alert-danger" role="alert">
													¡Rezago! El porcentaje es mayor a 115.
											</div>';
			}
	
			// $queryInsert = mysqli_query($conexion, "INSERT INTO `subtema` (`id_subtema`, `id_tema`, `subtema`) VALUES (NULL, '$idTema2', '1.1.7 Participación de las mujeres en puestos de mando medio y superior en la administración pública municipal')");
			// $querySelect = mysqli_query($conexion, "SELECT `id_subtema` FROM `subtema` WHERE subtema = '1.1.7 Participación de las mujeres en puestos de mando medio y superior en la administración pública municipal'");
			// $dataSubtema = mysqli_fetch_assoc($querySelect);
			// $idSubtema = $dataSubtema['id_subtema'];
			
			// $queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Número de unidades administrativas que conforman la administración.', $opcion1_form7_value)");
			// $queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Número de unidades administrativas promedio nacional.', $opcion2_form7_value)");

			$_SESSION['alert224'] = $alert224;
	} elseif (isset($_POST['225'])) {

		//225
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form6'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form6_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre2251'] = $opcion1_form6_value;
		$_SESSION['txtNombre2252'] = $opcion2_form6_value;
		$_SESSION['txtNombre2253'] = $opcion3_form6_value;
		$_SESSION['txtNombre2254'] = $opcion4_form6_value;

		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion2_form6_value != 0 || $opcion4_form6_value != 0) {
			// Calcula el porcentaje
			$porcentaje = ($opcion1_form6_value / $opcion2_form6_value) / ($opcion3_form6_value / $opcion4_form6_value) * 100;
		
		
			// Evalúa el porcentaje y determina el estado
			if ($porcentaje <= 100) {
				$estado = 'Optimo';
			} elseif ($porcentaje > 100 && $porcentaje <= 115) {
				$estado = 'En Proceso';
			} else {
				$estado = 'Rezago';
			}
				$_SESSION['completado12'] = true;
				$inputsDeshabilitadosForm6 = true;
				$_SESSION['inputDisabled6'] = $inputsDeshabilitadosForm6;
				$botonDeshabilitado12 = true;
				$_SESSION['deshabilitarBoton12'] = $botonDeshabilitado12;
				$estadoGeneral = $estado;

			} else {
				$estadoGeneral = 'Error: División por 0';
			}
			
			if ($estadoGeneral === 'Optimo') {

				$alert225 = '<div class="alert alert-success" role="alert">
												¡Optimo! El porcentaje es menor a 100.
										</div>';
			} elseif ($estadoGeneral === 'En Proceso')  {
					$alert225 = '<div class="alert alert-warning" role="alert">
													En proceso. El porcentaje es mayor a 100 pero menor o igual a 115.
											</div>';
			} elseif ($estadoGeneral === 'Error: División por 0') {
					$alert225 = '<div class="alert alert-danger" role="alert">
													Error: Se ha ingresado 0 en la división.
											</div>';
			}  elseif ($estadoGeneral === '') {

			
			} else {
					$alert225 = '<div class="alert alert-danger" role="alert">
													¡Rezago! El porcentaje es mayor a 115.
											</div>';
			}
	
			// $queryInsert = mysqli_query($conexion, "INSERT INTO `subtema` (`id_subtema`, `id_tema`, `subtema`) VALUES (NULL, '$idTema2', '1.1.7 Participación de las mujeres en puestos de mando medio y superior en la administración pública municipal')");
			// $querySelect = mysqli_query($conexion, "SELECT `id_subtema` FROM `subtema` WHERE subtema = '1.1.7 Participación de las mujeres en puestos de mando medio y superior en la administración pública municipal'");
			// $dataSubtema = mysqli_fetch_assoc($querySelect);
			// $idSubtema = $dataSubtema['id_subtema'];
			
			// $queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Número de unidades administrativas que conforman la administración.', $opcion1_form7_value)");
			// $queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Número de unidades administrativas promedio nacional.', $opcion2_form7_value)");

			$_SESSION['alert225'] = $alert225;
	} elseif (isset($_POST['231'])) {

		$_SESSION['completado13'] = true;
		$checkboxesDeshabilitadosForm7 = true;
		$_SESSION['checkDisabled7'] = $checkboxesDeshabilitadosForm7;
		$botonDeshabilitado13 = true;
		$_SESSION['deshabilitarBoton13'] = $botonDeshabilitado13;
		$count = 0;

		$check1 = 0;
		$check2 = 0;
		foreach ($valueCheckNames231 as $name) {
			// Verificar si el checkbox está marcado
			if (isset($_POST[$name])) {
					// El checkbox está marcado, puedes hacer lo que necesites con el valor
					$valor_checkbox = $_POST[$name];
					$_SESSION[$name] = true;
					$count = $count + 1;
			} else {
					$_SESSION[$name] = false;
			}
		}
		//231
		$estadoGeneral = 'rezago'; 

		if ($count === 2) {
			$estadoGeneral = 'optimo'; 
		} elseif ($count > 0) {
			$estadoGeneral = 'proceso'; 
		}

		if ($estadoGeneral === "optimo") {
			$alert231='<div class="alert alert-success" role="alert">
				¡Óptimo!
				</div>';
		} elseif ($estadoGeneral === "proceso") {
			$alert231='<div class="alert alert-warning" role="alert">
				En proceso
			</div>';
		} elseif ($estadoGeneral === "rezago") {
			$alert231='<div class="alert alert-danger" role="alert">
				¡Rezago!
			</div>';
		} elseif ($estadoGeneral === "") {

		}
		
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `subtema` (`id_subtema`, `id_tema`, `subtema`) VALUES (NULL, '$idTema1', '1.1.3 Tabulador de sueldos o documentos con la estructura salarial del personal de la administración pública municipal')");
		// $querySelect = mysqli_query($conexion, "SELECT `id_subtema` FROM `subtema` WHERE subtema = '1.1.3 Tabulador de sueldos o documentos con la estructura salarial del personal de la administración pública municipal'");
		// $dataSubtema = mysqli_fetch_assoc($querySelect);
		// $idSubtema = $dataSubtema['id_subtema'];
		
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'a) Disposiciones normativas que regulan la organización y funcionamiento del Ayuntamiento.', $check1)");
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'b) Disposiciones normativas de la Administración Pública Municipal.', $check2)");


		$_SESSION['alert231'] = $alert231;

	} elseif (isset($_POST['232'])) {

		//232
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form7'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form7_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre2321'] = $opcion1_form7_value;
		$_SESSION['txtNombre2322'] = $opcion2_form7_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion2_form7_value != 0) {
			// Calcula el porcentaje
			$porcentaje = ($opcion1_form7_value / $opcion2_form7_value) * 100;
		
		
			// Evalúa el porcentaje y determina el estado
			if ($porcentaje <= 100) {
				$estado = 'Optimo';
			} elseif ($porcentaje > 100 && $porcentaje <= 115) {
				$estado = 'En Proceso';
			} else {
				$estado = 'Rezago';
			}
				$_SESSION['completado14'] = true;
				$inputsDeshabilitadosForm7 = true;
				$_SESSION['inputDisabled7'] = $inputsDeshabilitadosForm7;
				$botonDeshabilitado14 = true;
				$_SESSION['deshabilitarBoton14'] = $botonDeshabilitado14;
				$estadoGeneral = $estado;
			} else {
				$estadoGeneral = 'Error: División por 0';
			}
			
			if ($estadoGeneral === 'Optimo') {

				$alert232 = '<div class="alert alert-success" role="alert">
												¡Optimo! El porcentaje es menor a 100.
										</div>';
			} elseif ($estadoGeneral === 'En Proceso')  {
					$alert232 = '<div class="alert alert-warning" role="alert">
													En proceso. El porcentaje es mayor a 100 pero menor o igual a 115.
											</div>';
			} elseif ($estadoGeneral === 'Error: División por 0') {
					$alert232 = '<div class="alert alert-danger" role="alert">
													Error: Se ha ingresado 0 en la división.
											</div>';
			}  elseif ($estadoGeneral === '') {

			
			} else {
					$alert232 = '<div class="alert alert-danger" role="alert">
													¡Rezago! El porcentaje es mayor a 115.
											</div>';
			}
	
			// $queryInsert = mysqli_query($conexion, "INSERT INTO `subtema` (`id_subtema`, `id_tema`, `subtema`) VALUES (NULL, '$idTema2', '1.1.7 Participación de las mujeres en puestos de mando medio y superior en la administración pública municipal')");
			// $querySelect = mysqli_query($conexion, "SELECT `id_subtema` FROM `subtema` WHERE subtema = '1.1.7 Participación de las mujeres en puestos de mando medio y superior en la administración pública municipal'");
			// $dataSubtema = mysqli_fetch_assoc($querySelect);
			// $idSubtema = $dataSubtema['id_subtema'];
			
			// $queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Número de unidades administrativas que conforman la administración.', $opcion1_form7_value)");
			// $queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Número de unidades administrativas promedio nacional.', $opcion2_form7_value)");

			$_SESSION['alert232'] = $alert232;
	} elseif (isset($_POST['233'])) { 

		//233
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form8'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form8_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre2331'] = $opcion1_form8_value;
		$_SESSION['txtNombre2332'] = $opcion2_form8_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion2_form8_value != 0) {
			// Calcula el porcentaje
			$porcentaje = ($opcion1_form8_value / $opcion2_form8_value) * 100;
		
		
			// Evalúa el porcentaje y determina el estado
			if ($porcentaje <= 100) {
				$estado = 'Optimo';
			} elseif ($porcentaje > 100 && $porcentaje <= 115) {
				$estado = 'En Proceso';
			} else {
				$estado = 'Rezago';
			}
				$_SESSION['completado15'] = true;
				$inputsDeshabilitadosForm8 = true;
				$_SESSION['inputDisabled8'] = $inputsDeshabilitadosForm8;
				$botonDeshabilitado15 = true;
				$_SESSION['deshabilitarBoton15'] = $botonDeshabilitado15;
				$estadoGeneral = $estado;
			} else {
				$estadoGeneral = 'Error: División por 0';
			}
			
			if ($estadoGeneral === 'Optimo') {

				$alert233 = '<div class="alert alert-success" role="alert">
												¡Optimo! El porcentaje es menor a 100.
										</div>';
			} elseif ($estadoGeneral === 'En Proceso')  {
					$alert233 = '<div class="alert alert-warning" role="alert">
													En proceso. El porcentaje es mayor a 100 pero menor o igual a 115.
											</div>';
			} elseif ($estadoGeneral === 'Error: División por 0') {
					$alert233 = '<div class="alert alert-danger" role="alert">
													Error: Se ha ingresado 0 en la división.
											</div>';
			}  elseif ($estadoGeneral === '') {

			
			} else {
					$alert233 = '<div class="alert alert-danger" role="alert">
													¡Rezago! El porcentaje es mayor a 115.
											</div>';
			}
	
			// $queryInsert = mysqli_query($conexion, "INSERT INTO `subtema` (`id_subtema`, `id_tema`, `subtema`) VALUES (NULL, '$idTema2', '1.1.7 Participación de las mujeres en puestos de mando medio y superior en la administración pública municipal')");
			// $querySelect = mysqli_query($conexion, "SELECT `id_subtema` FROM `subtema` WHERE subtema = '1.1.7 Participación de las mujeres en puestos de mando medio y superior en la administración pública municipal'");
			// $dataSubtema = mysqli_fetch_assoc($querySelect);
			// $idSubtema = $dataSubtema['id_subtema'];
			
			// $queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Número de unidades administrativas que conforman la administración.', $opcion1_form7_value)");
			// $queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Número de unidades administrativas promedio nacional.', $opcion2_form7_value)");

			$_SESSION['alert233'] = $alert233;
	} elseif (isset($_POST['234'])) { 

		//234
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form9'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form9_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre2341'] = $opcion1_form9_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if (isset($opcion1_form9_value)) {

			if ($opcion1_form9_value == "Endeudamiento sostenible.") {
				$estado = 'Optimo';
			} elseif ($opcion1_form9_value == "Endeudamiento en observación.") {
				$estado = 'En Proceso';
			} else {
				$estado = 'Rezago';
			}
				$_SESSION['completado16'] = true;
				$inputsDeshabilitadosForm9 = true;
				$_SESSION['inputDisabled9'] = $inputsDeshabilitadosForm9;
				$botonDeshabilitado16 = true;
				$_SESSION['deshabilitarBoton16'] = $botonDeshabilitado16;
				$estadoGeneral = $estado;
			} else {
				$estadoGeneral = 'Error: Sin Selección';
			}
			
			if ($estadoGeneral === 'Optimo') {

				$alert234 = '<div class="alert alert-success" role="alert">
												¡Optimo!
										</div>';
			} elseif ($estadoGeneral === 'En Proceso')  {
					$alert234 = '<div class="alert alert-warning" role="alert">
													En proceso.
											</div>';
			} elseif ($estadoGeneral === 'Error: Sin Selección') {
					$alert234 = '<div class="alert alert-danger" role="alert">
													Error: No se ha Seleccionado ninguna opción.
											</div>';
			}  elseif ($estadoGeneral === '') {

			
			} else {
					$alert234 = '<div class="alert alert-danger" role="alert">
													¡Rezago!
											</div>';
			}
	
			// $queryInsert = mysqli_query($conexion, "INSERT INTO `subtema` (`id_subtema`, `id_tema`, `subtema`) VALUES (NULL, '$idTema2', '1.1.7 Participación de las mujeres en puestos de mando medio y superior en la administración pública municipal')");
			// $querySelect = mysqli_query($conexion, "SELECT `id_subtema` FROM `subtema` WHERE subtema = '1.1.7 Participación de las mujeres en puestos de mando medio y superior en la administración pública municipal'");
			// $dataSubtema = mysqli_fetch_assoc($querySelect);
			// $idSubtema = $dataSubtema['id_subtema'];
			
			// $queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Número de unidades administrativas que conforman la administración.', $opcion1_form7_value)");
			// $queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Número de unidades administrativas promedio nacional.', $opcion2_form7_value)");

			$_SESSION['alert234'] = $alert234;
	} elseif (isset($_POST['241'])) {

		$_SESSION['completado17'] = true;
		$checkboxesDeshabilitadosForm8 = true;
		$_SESSION['checkDisabled8'] = $checkboxesDeshabilitadosForm8;
		$botonDeshabilitado17 = true;
		$_SESSION['deshabilitarBoton17'] = $botonDeshabilitado17;
		$count = 0;

		$check1 = 0;
		$check2 = 0;
		foreach ($valueCheckNames241 as $name) {
			// Verificar si el checkbox está marcado
			if (isset($_POST[$name])) {
					// El checkbox está marcado, puedes hacer lo que necesites con el valor
					$valor_checkbox = $_POST[$name];
					$_SESSION[$name] = true;
					$count = $count + 1;
			} else {
					$_SESSION[$name] = false;
			}
		}
		//241
		$estadoGeneral = 'rezago'; 

		if ($count === 5) {
			$estadoGeneral = 'optimo'; 
		} elseif ($count > 0) {
			$estadoGeneral = 'proceso'; 
		}

		if ($estadoGeneral === "optimo") {
			$alert241='<div class="alert alert-success" role="alert">
				¡Óptimo!
				</div>';
		} elseif ($estadoGeneral === "proceso") {
			$alert241='<div class="alert alert-warning" role="alert">
				En proceso
			</div>';
		} elseif ($estadoGeneral === "rezago") {
			$alert241='<div class="alert alert-danger" role="alert">
				¡Rezago!
			</div>';
		} elseif ($estadoGeneral === "") {

		}
		
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `subtema` (`id_subtema`, `id_tema`, `subtema`) VALUES (NULL, '$idTema1', '1.1.3 Tabulador de sueldos o documentos con la estructura salarial del personal de la administración pública municipal')");
		// $querySelect = mysqli_query($conexion, "SELECT `id_subtema` FROM `subtema` WHERE subtema = '1.1.3 Tabulador de sueldos o documentos con la estructura salarial del personal de la administración pública municipal'");
		// $dataSubtema = mysqli_fetch_assoc($querySelect);
		// $idSubtema = $dataSubtema['id_subtema'];
		
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'a) Disposiciones normativas que regulan la organización y funcionamiento del Ayuntamiento.', $check1)");
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'b) Disposiciones normativas de la Administración Pública Municipal.', $check2)");


		$_SESSION['alert241'] = $alert241;

	} elseif (isset($_POST['242'])) {

		$_SESSION['completado18'] = true;
		$checkboxesDeshabilitadosForm9 = true;
		$_SESSION['checkDisabled9'] = $checkboxesDeshabilitadosForm9;
		$botonDeshabilitado18 = true;
		$_SESSION['deshabilitarBoton18'] = $botonDeshabilitado18;
		$count = 0;

		$check1 = 0;
		$check2 = 0;
		foreach ($valueCheckNames242 as $name) {
			// Verificar si el checkbox está marcado
			if (isset($_POST[$name])) {
					// El checkbox está marcado, puedes hacer lo que necesites con el valor
					$valor_checkbox = $_POST[$name];
					$_SESSION[$name] = true;
					$count = $count + 1;
			} else {
					$_SESSION[$name] = false;
			}
		}
		//242
		$estadoGeneral = 'rezago'; 

		if ($count === 2) {
			$estadoGeneral = 'optimo'; 
		} elseif ($count > 0) {
			$estadoGeneral = 'proceso'; 
		}

		if ($estadoGeneral === "optimo") {
			$alert242='<div class="alert alert-success" role="alert">
				¡Óptimo!
				</div>';
		} elseif ($estadoGeneral === "proceso") {
			$alert242='<div class="alert alert-warning" role="alert">
				En proceso
			</div>';
		} elseif ($estadoGeneral === "rezago") {
			$alert242='<div class="alert alert-danger" role="alert">
				¡Rezago!
			</div>';
		} elseif ($estadoGeneral === "") {

		}
		
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `subtema` (`id_subtema`, `id_tema`, `subtema`) VALUES (NULL, '$idTema1', '1.1.3 Tabulador de sueldos o documentos con la estructura salarial del personal de la administración pública municipal')");
		// $querySelect = mysqli_query($conexion, "SELECT `id_subtema` FROM `subtema` WHERE subtema = '1.1.3 Tabulador de sueldos o documentos con la estructura salarial del personal de la administración pública municipal'");
		// $dataSubtema = mysqli_fetch_assoc($querySelect);
		// $idSubtema = $dataSubtema['id_subtema'];
		
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'a) Disposiciones normativas que regulan la organización y funcionamiento del Ayuntamiento.', $check1)");
		// $queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'b) Disposiciones normativas de la Administración Pública Municipal.', $check2)");


		$_SESSION['alert242'] = $alert242;

	} elseif (isset($_POST['243'])) { 

		//243
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form10'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form10_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre2431'] = $opcion1_form10_value;
		$_SESSION['txtNombre2432'] = $opcion2_form10_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion2_form10_value != 0) {
			// Calcula el porcentaje
			$porcentaje = ($opcion1_form10_value / $opcion2_form10_value) * 100;
		
		
			// Evalúa el porcentaje y determina el estado
			if ($porcentaje <= 100) {
				$estado = 'Optimo';
			} elseif ($porcentaje > 100 && $porcentaje <= 115) {
				$estado = 'En Proceso';
			} else {
				$estado = 'Rezago';
			}
				$_SESSION['completado19'] = true;
				$inputsDeshabilitadosForm10 = true;
				$_SESSION['inputDisabled10'] = $inputsDeshabilitadosForm10;
				$botonDeshabilitado19 = true;
				$_SESSION['deshabilitarBoton19'] = $botonDeshabilitado19;
				$estadoGeneral = $estado;
			} else {
				$estadoGeneral = 'Error: División por 0';
			}
			
			if ($estadoGeneral === 'Optimo') {

				$alert243 = '<div class="alert alert-success" role="alert">
												¡Optimo! El porcentaje es menor a 100.
										</div>';
			} elseif ($estadoGeneral === 'En Proceso')  {
					$alert243 = '<div class="alert alert-warning" role="alert">
													En proceso. El porcentaje es mayor a 100 pero menor o igual a 115.
											</div>';
			} elseif ($estadoGeneral === 'Error: División por 0') {
					$alert243 = '<div class="alert alert-danger" role="alert">
													Error: Se ha ingresado 0 en la división.
											</div>';
			}  elseif ($estadoGeneral === '') {

			
			} else {
					$alert243 = '<div class="alert alert-danger" role="alert">
													¡Rezago! El porcentaje es mayor a 115.
											</div>';
			}
	
			// $queryInsert = mysqli_query($conexion, "INSERT INTO `subtema` (`id_subtema`, `id_tema`, `subtema`) VALUES (NULL, '$idTema2', '1.1.7 Participación de las mujeres en puestos de mando medio y superior en la administración pública municipal')");
			// $querySelect = mysqli_query($conexion, "SELECT `id_subtema` FROM `subtema` WHERE subtema = '1.1.7 Participación de las mujeres en puestos de mando medio y superior en la administración pública municipal'");
			// $dataSubtema = mysqli_fetch_assoc($querySelect);
			// $idSubtema = $dataSubtema['id_subtema'];
			
			// $queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Número de unidades administrativas que conforman la administración.', $opcion1_form7_value)");
			// $queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_subtema`, `enunciado`, `valor`) VALUES (NULL, '$idSubtema', 'Número de unidades administrativas promedio nacional.', $opcion2_form7_value)");

			$_SESSION['alert243'] = $alert243;
	}
}
?>
    <!--Enlaces de los stilo CSS -->

	<!--<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />-->
	<link rel="stylesheet" href="../../assets/css/modulos.css" />

	<script type="text/javascript">
    window.onbeforeunload = function() {
        return "¡Atención! Estás a punto de abandonar esta página. ¿Estás seguro?";
    };
	</script>

<!-- Modulo 1 Hacienda-->

<!--Tema 1 -- Ingresos -->

<div class="jumbotron">
	<h2 class="display-7">2.1 Ingresos</h2>
	<hr class="my-2">
</div>

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
        // if (isset($_POST['submit'])) {
        //     // Obtener el valor seleccionado en el dropdown
        //     $opcionSeleccionada = $_POST['opciones'];

        //     // Mostrar la opción seleccionada
        //     echo "<p class='mt-3'>La opción seleccionada es: $opcionSeleccionada</p>";
        //     // Aquí puedes realizar cualquier otra acción con la opción seleccionada
        // }
        ?>
    </div>
	</div>
		<?php echo isset($alerta) ? $alerta : ''; ?>

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
							<?php
							
								$labels211 = [
										'a) Con Acuse de recibo por parte del Congreso Local.',
										'b) Gaceta del gobierno estatal en la que fue publicada.',
										'c) Objetivos, estrategias y metas.',
										'd) Descripción de los riesgos relevantes para las finanzas públicas.',
										'e) Proyección de las finanzas públicas.',
										'f) Resultados de las finanzas públicas de dos años anteriores.'
								];

								// Crear variables dinámicas
								for ($i = 0; $i < $opciones['check211']; $i++) {
									${"opcion{$i}_form{$valueCheckNames211[$i]}"} = $_SESSION[$valueCheckNames211[$i]] ?? false;
								}
							?>
							<?php for ($i = 0; $i < $opciones['check211']; $i++) : ?>
								<?php 
									$valor_variable = ${"opcion{$i}_form{$valueCheckNames211[$i]}"};
								?>
									<label>
											<input type="checkbox" name="<?= $valueCheckNames211[$i] ?>" value="<?= $valueCheckNames211[$i] ?>" <?php if ($checkboxesDeshabilitadosForm1) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
											<?= $labels211[$i] ?>
									</label>
									<br>
							<?php endfor; ?>

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="211" value="" class="btn btn-success" <?php if ($botonDeshabilitado1) echo "disabled"; ?>>Guardar</button>
							</div>
							<?php echo isset($alert211) ? $alert211 : ''; ?>
							<!--Salto de parrafo 2.1.1-->
						</div>


						<p>
							<h6 class="display-15 text-center"><b>2.1.2 Ley de Ingresos Municipal del año en curso</b></h6></p>
						<hr class="my-2">
						<div class="form-group">

							<?php
							
								$labels212 = [
										'a) Con tabla de zonificación y valores.',
										'b) Proceso de inspección del cumplimiento de los usos de suelo.',
										'c) Apartado de sanciones por el incumplimiento de los usos de suelo.',
										'd) Medios de impugnación.',
										'e) Gaceta o periódico en el que fue publicado.'
								];

								// Crear variables dinámicas
								for ($i = 0; $i < $opciones['check212']; $i++) {
									${"opcion{$i}_form{$valueCheckNames212[$i]}"} = $_SESSION[$valueCheckNames212[$i]] ?? false;
								}
							?>
							<?php for ($i = 0; $i < $opciones['check212']; $i++) : ?>
								<?php 
									$valor_variable = ${"opcion{$i}_form{$valueCheckNames212[$i]}"};
								?>
									<label>
											<input type="checkbox" name="<?= $valueCheckNames212[$i] ?>" value="<?= $valueCheckNames212[$i] ?>" <?php if ($checkboxesDeshabilitadosForm2) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
											<?= $labels212[$i] ?>
									</label><br>
							<?php endfor; ?>
							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="212" value="" class="btn btn-success" <?php if ($botonDeshabilitado2) echo "disabled"; ?>>Guardar</button>
							</div>
							<?php echo isset($alert212) ? $alert212 : ''; ?>
							<!--Salto de parrafo 2.1.2-->
						</div>

						<p>
							<h6 class="display-15 text-center"><b>2.1.3 Ley de Ingresos Municipal del año en curso</b></h6></p>
						<hr class="my-2">
						<div class="form-group">
							<?php
								
								$labels213 = [
										'a) Base de datos actualizada de inmuebles inscritos en el padrón catastral.',
										'b) Cartografía a nivel predio, vinculada al padrón alfanumérico.',
										'c) Listado de valores unitarios actualizados.',
								];

								// Crear variables dinámicas
								for ($i = 0; $i < $opciones['check213']; $i++) {
									${"opcion{$i}_form{$valueCheckNames213[$i]}"} = $_SESSION[$valueCheckNames213[$i]] ?? false;
								}
							?>
							<?php for ($i = 0; $i < $opciones['check213']; $i++) : ?>
								<?php 
									$valor_variable = ${"opcion{$i}_form{$valueCheckNames213[$i]}"};
								?>
									<label>
											<input type="checkbox" name="<?= $valueCheckNames213[$i] ?>" value="<?= $valueCheckNames213[$i] ?>" <?php if ($checkboxesDeshabilitadosForm3) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
											<?= $labels213[$i] ?>
									</label><br>
							<?php endfor; ?>

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="213" value="" class="btn btn-success" <?php if ($botonDeshabilitado3) echo "disabled"; ?>>Guardar</button>
							</div>
							<?php echo isset($alert213) ? $alert213 : ''; ?>
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
								<h6 class="display-15"><b>2.1.4 Capacidad financiera</b></h6>
							</p>
							<hr class="my-2">
							<?php

								$labels214 = [
									'Monto de ingresos propios en el año evaluado',
									'Monto de ingresos propios en el año evaluado',
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
									<input type="text" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm1) echo "disabled"; ?> required><span><?= $labels214[$index] ?></span>
								</label>
							<?php endforeach; ?>

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="214" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado4) echo "disabled"; ?>>Guardar</button>
							</div>
							<?php echo isset($alert214) ? $alert214 : ''; ?>
						</div>
					</form>
					<form method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<p><b><h6 class="display-15">2.1.5 Tasa de crecimiento real anual de la recaudación del impuesto predial</h6></p></b>
								<hr class="my-2">
								<?php

								$labels215 = [
									'Monto del impuesto predial recaudado en el año previo evaluado.',
									'Monto del impuesto predial recaudado en el año evaluado.',
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
									<input type="text" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm2) echo "disabled"; ?> required ><span><?= $labels215[$index] ?></span>
								</label>

							<?php endforeach; ?>

							<div class="btn-group" role="group" aria-label="">
									<button type="submit" name="215" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado5) echo "disabled"; ?>>Guardar</button>
								</div>
								<?php echo isset($alert215) ? $alert215 : ''; ?>
						</div>
					</form>
					<form method="POST" enctype="multipart/form-data">
						<div class="form-group">
								<p><b><h6 class="display-15">2.1.6 Tasa de crecimiento real anual de la recaudación por derecho de agua</h6></p></b>
									<hr class="my-2">

								<?php

									$labels216 = [
										'Monto del derecho de agua recaudado el año previo evaluado.',
										'Monto del derecho de agua recaudado en el año evaluado.',
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
										<input type="text" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm3) echo "disabled"; ?> required><span><?= $labels216[$index] ?></span>
									</label>

								<?php endforeach; ?>
									
									<div class="btn-group" role="group" aria-label="">
										<button type="submit" name="216" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado6) echo "disabled"; ?>>Guardar</button>
									</div>
									<?php echo isset($alert216) ? $alert216 : ''; ?>
						</div>
					</form>
					<form method="POST" enctype="multipart/form-data">
						<div class="form-group">
									<p><b><h6 class="display-15">2.1.7 Tasa de crecimiento real anual de la recaudación de otros ingresos propios</h6></p></b>
										<hr class="my-2">

										<?php

											$labels217 = [
												'Otros ingresos propios reales recaudados en el año previo evaluado.',
												'Otros ingresos propios reales recaudados en el año evaluado.',
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
												<input type="text" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm4) echo "disabled"; ?> required><span><?= $labels217[$index] ?></span>
											</label>

										<?php endforeach; ?>
										<div class="btn-group" role="group" aria-label="">
											<button type="submit" name="217" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado7) echo "disabled"; ?>>Guardar</button>
										</div>
											<?php echo isset($alert217) ? $alert217 : ''; ?>
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
						<?php
							
							$labels221 = [
									'a) Acta de Cabildo con acuerdo que mencione que fue aprobado.',
									'b) Gaceta o periódico del gobierno estatal en el que fue publicado.',
							];

							// Crear variables dinámicas
							for ($i = 0; $i < $opciones['check221']; $i++) {
								${"opcion{$i}_form{$valueCheckNames221[$i]}"} = $_SESSION[$valueCheckNames221[$i]] ?? false;
							}
						?>
						<?php for ($i = 0; $i < $opciones['check221']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames221[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames221[$i] ?>" value="<?= $valueCheckNames221[$i] ?>" <?php if ($checkboxesDeshabilitadosForm4) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels221[$i] ?>
								</label><br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="221" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado8) echo "disabled"; ?>>Guardar</button>
						</div>
							<?php echo isset($alert221) ? $alert221 : ''; ?>
						<h6 class="display-15">2.2.2 Armonización contable</h6></p>
						<hr class="my-2">
							<?php
								
								$labels222 = [
										'a) Reportes de los últimos dos años.',
										'b) Evidencia que pruebe que el sistema está operando actualmente.',
										'c) Liga del portal de transparencia donde pueden ser consultados los reportes.',
								];
								// Crear variables dinámicas
								for ($i = 0; $i < $opciones['check222']; $i++) {
									${"opcion{$i}_form{$valueCheckNames222[$i]}"} = $_SESSION[$valueCheckNames222[$i]] ?? false;
								}
							?>
							<?php for ($i = 0; $i < $opciones['check222']; $i++) : ?>
								<?php 
									$valor_variable = ${"opcion{$i}_form{$valueCheckNames222[$i]}"};
								?>
									<label>
											<input type="checkbox" name="<?= $valueCheckNames222[$i] ?>" value="<?= $valueCheckNames222[$i] ?>" <?php if ($checkboxesDeshabilitadosForm5) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
											<?= $labels222[$i] ?>
									</label><br>
							<?php endfor; ?>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="222" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado9) echo "disabled"; ?>>Guardar</button>
						</div>
						<?php echo isset($alert222) ? $alert222 : ''; ?>
						<h6 class="display-15">2.2.3 Cuenta Pública </h6></p>
						<hr class="my-2">
						<?php
							
							$labels223 = [
									'a) Cuenta Pública auditada del año previo al evaluado.',
									'b) Comprobante de que la Cuenta Pública del año evaluado ya fue entregada a la Entidad Superior
									de Fiscalización del Estado (Acuse de recibo).',
									'c) Publicación del comprobante de que la Cuenta Pública del año evaluado ya fue entregada a la
									Entidad Superior de Fiscalización del Estado, en el portal web (acuse de recibo).',
							];
							// Crear variables dinámicas
							for ($i = 0; $i < $opciones['check223']; $i++) {
								${"opcion{$i}_form{$valueCheckNames223[$i]}"} = $_SESSION[$valueCheckNames223[$i]] ?? false;
							}
						?>
						<?php for ($i = 0; $i < $opciones['check223']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames223[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames223[$i] ?>" value="<?= $valueCheckNames223[$i] ?>" <?php if ($checkboxesDeshabilitadosForm6) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels223[$i] ?>
								</label><br>
						<?php endfor; ?>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="223" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado10) echo "disabled"; ?>>Guardar</button>
						</div>
						<?php echo isset($alert223) ? $alert223 : ''; ?>
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
						<?php

								$labels224 = [
									'Gasto corriente en el año evaluado.',
									'Gasto total anual en el año evaluado.',
								];

								$valoresForm5 = [
									$opcion1_form5_value ?? '',
									$opcion2_form5_value ?? ''
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
									<input type="text" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm5) echo "disabled"; ?> required><span><?= $labels224[$index] ?></span>
								</label>
							<?php endforeach; ?>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="224" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado11) echo "disabled"; ?>>Guardar</button>
						</div>
							<?php echo isset($alert224) ? $alert224 : ''; ?>
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<h6 class="display-15">2.2.5 Capacidad de Inversión </h6></p>
						<hr class="my-2">
							<?php

									$labels225 = [
										'Gasto inversión en el año evaluado.',
										'Gasto Total anual en el año evaluado',
										'Gasto inversión en el año previo al evaluado',
										'Gasto Total anual en el año previo al evaluado.'
									];

									$valoresForm6 = [
										$opcion1_form6_value ?? '',
										$opcion2_form6_value ?? ''
									];
									foreach ($variableNames['form6'] as $index => $fieldName) {
										${"opcion" . ($index + 1) . "_form6_value"} = $_SESSION[$fieldName] ?? '';
									}			
								?>
								<?php foreach($variableNames['form6'] as  $index => $fieldName) : ?>
									<?php 
										$valor_variable = ${"opcion" . ($index + 1) . "_form6_value"};
									?>
									<label for="txtNombre" class="text1">
										<input type="text" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm6) echo "disabled"; ?> required><span><?= $labels225[$index] ?></span>
									</label>
							<?php endforeach; ?>
						
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="225" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado12) echo "disabled"; ?>>Guardar</button>
						</div>
						<?php echo isset($alert225) ? $alert225 : ''; ?>
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

						<?php
							
							$labels231 = [
									'a) Metas establecidas para los próximos tres años.',
									'b) Líneas de acción para minimizar el peso de la deuda pública en los ingresos municipales.',
							];
							// Crear variables dinámicas
							for ($i = 0; $i < $opciones['check231']; $i++) {
								${"opcion{$i}_form{$valueCheckNames231[$i]}"} = $_SESSION[$valueCheckNames231[$i]] ?? false;
							}
						?>
						<?php for ($i = 0; $i < $opciones['check231']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames231[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames231[$i] ?>" value="<?= $valueCheckNames231[$i] ?>" <?php if ($checkboxesDeshabilitadosForm7) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels231[$i] ?>
								</label><br>
						<?php endfor; ?>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="231" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado13) echo "disabled"; ?>>Guardar</button>
						</div>
							<?php echo isset($alert231) ? $alert231 : ''; ?>
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

						<?php

							$labels232 = [
								'Monto total anual destinado al pago de ADEFAS en el año evaluado.',
								'Ingreso total anual en el año evaluado*',
							];

							$valoresForm7 = [
								$opcion1_form7_value ?? '',
								$opcion2_form7_value ?? ''
							];
							foreach ($variableNames['form7'] as $index => $fieldName) {
								${"opcion" . ($index + 1) . "_form7_value"} = $_SESSION[$fieldName] ?? '';
							}			
						?>
						<?php foreach($variableNames['form7'] as  $index => $fieldName) : ?>
						<?php 
								$valor_variable = ${"opcion" . ($index + 1) . "_form7_value"};
						?>
							<label for="txtNombre" class="text1">
								<input type="text" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm7) echo "disabled"; ?> required><span><?= $labels232[$index] ?></span>
							</label>
						<?php endforeach; ?>

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="232" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado14) echo "disabled"; ?>>Guardar</button>
							</div>
								<?php echo isset($alert232) ? $alert232 : ''; ?>
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<h6 class="display-15">2.3.3 Balance presupuestario sostenible </h6></p>
						<hr class="my-2">
							<?php

								$labels233 = [
									'Monto total anual destinado al pago de ADEFAS en el año evaluado.',
									'Ingreso total anual en el año evaluado*',
								];

								$valoresForm8 = [
									$opcion1_form8_value ?? '',
									$opcion2_form8_value ?? ''
								];
								foreach ($variableNames['form8'] as $index => $fieldName) {
									${"opcion" . ($index + 1) . "_form8_value"} = $_SESSION[$fieldName] ?? '';
								}			
							?>
							<?php foreach($variableNames['form8'] as  $index => $fieldName) : ?>
							<?php 
									$valor_variable = ${"opcion" . ($index + 1) . "_form8_value"};
							?>
								<label for="txtNombre" class="text1">
									<input type="text" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm8) echo "disabled"; ?> required><span><?= $labels233[$index] ?></span>
								</label>
							<?php endforeach; ?>

								<div class="btn-group" role="group" aria-label="">
									<button type="submit" name="233" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado15) echo "disabled"; ?>>Guardar</button>
								</div>
									<?php echo isset($alert233) ? $alert233 : ''; ?>
						</div>
					</form>
					<form method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<h6 class="display-15"> 2.3.4 Nivel de endeudamiento municipal </h6></p>
							<hr class="my-2">
							<?php

								$labels234 = [
									'Seleccione una opcion:',
								];

								$valoresForm9 = [
									$opcion1_form9_value ?? '',
								];
								foreach ($variableNames['form9'] as $index => $fieldName) {
									${"opcion" . ($index + 1) . "_form9_value"} = $_SESSION[$fieldName] ?? '';
								}			
							?>
							<?php foreach($variableNames['form9'] as  $index => $fieldName) : ?>
							<?php 
								$valor_variable = ${"opcion" . ($index + 1) . "_form9_value"};
							?>
								
								<label for="exampleDataList" class="form-label" name="txtNombre2341"><span><?= $labels234[$index] ?></span></label>
								<input class="form-control" list="datalistOptions" name="<?= $fieldName?>" id="exampleDataList" placeholder="Selecciona una opción..." value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm9) echo "disabled"; ?> required>
								<datalist id="datalistOptions">
									<option value="Endeudamiento sostenible.">
									<option value="Endeudamiento en observación.">
									<option value="Endeudamiento elevado.">
									<option value="Información no entregada o insuficiente.">
								</datalist>
							<?php endforeach; ?>
									</br>
									<div class="btn-group" role="group" aria-label="">
									<button type="submit" name="234" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado16) echo "disabled"; ?>>Guardar</button>
								</div>
									<?php echo isset($alert234) ? $alert234 : ''; ?>
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

						<?php
								
								$labels241 = [
										'a) Relación de los bienes muebles e inmuebles de propiedad municipal.',
										'b) Autoridad competente para llevar el control de los bienes muebles e inmuebles.',
										'c) Registro, control y verificación de los bienes muebles e inmuebles.',
										'd) Proceso de incorporación y desincorporación de los bienes muebles e inmuebles.',
										'e) Gaceta o periódico en el que fue publicado.'
								];
								// Crear variables dinámicas
								for ($i = 0; $i < $opciones['check241']; $i++) {
									${"opcion{$i}_form{$valueCheckNames241[$i]}"} = $_SESSION[$valueCheckNames241[$i]] ?? false;
								}
							?>
							<?php for ($i = 0; $i < $opciones['check241']; $i++) : ?>
								<?php 
									$valor_variable = ${"opcion{$i}_form{$valueCheckNames241[$i]}"};
								?>
									<label>
											<input type="checkbox" name="<?= $valueCheckNames241[$i] ?>" value="<?= $valueCheckNames241[$i] ?>" <?php if ($checkboxesDeshabilitadosForm8) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
											<?= $labels241[$i] ?>
									</label><br>
							<?php endfor; ?>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="241" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado17) echo "disabled"; ?>>Guardar</button>
						</div>
							<?php echo isset($alert241) ? $alert241 : ''; ?>

						<h6 class="display-15">2.4.2 Inventario de bienes muebles e inmuebles</h6></p>
						<hr class="my-2">
							<?php
								
								$labels242 = [
										'a) Listado de los bienes muebles e inmuebles registrados con número de folio (de manera física o
										electrónica).',
										'b) Facturas y documentos comprobatorios que acrediten que los bienes muebles e inmuebles en
										el inventario son propiedad del municipio.',
								];
								// Crear variables dinámicas
								for ($i = 0; $i < $opciones['check242']; $i++) {
									${"opcion{$i}_form{$valueCheckNames242[$i]}"} = $_SESSION[$valueCheckNames242[$i]] ?? false;
								}
							?>
							<?php for ($i = 0; $i < $opciones['check242']; $i++) : ?>
								<?php 
									$valor_variable = ${"opcion{$i}_form{$valueCheckNames242[$i]}"};
								?>
									<label>
											<input type="checkbox" name="<?= $valueCheckNames242[$i] ?>" value="<?= $valueCheckNames242[$i] ?>" <?php if ($checkboxesDeshabilitadosForm9) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
											<?= $labels242[$i] ?>
									</label><br>
							<?php endfor; ?>
						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="242" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado18) echo "disabled"; ?>>Guardar</button>
						</div>
							<?php echo isset($alert242) ? $alert242 : ''; ?>
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
							<?php

								$labels243 = [
									'Monto total anual destinado al pago de ADEFAS en el año evaluado.',
									'Ingreso total anual en el año evaluado*',
								];

								$valoresForm10 = [
									$opcion1_form10_value ?? '',
									$opcion2_form10_value ?? ''
								];
								foreach ($variableNames['form10'] as $index => $fieldName) {
									${"opcion" . ($index + 1) . "_form10_value"} = $_SESSION[$fieldName] ?? '';
								}			
							?>
							<?php foreach($variableNames['form10'] as  $index => $fieldName) : ?>
							<?php 
									$valor_variable = ${"opcion" . ($index + 1) . "_form10_value"};
							?>
								<label for="txtNombre" class="text1">
									<input type="text" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm10) echo "disabled"; ?> required><span><?= $labels243[$index] ?></span>
								</label>
							<?php endforeach; ?>

								<div class="btn-group" role="group" aria-label="">
									<button type="submit" name="243" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado19) echo "disabled"; ?>>Guardar</button>
								</div>
									<?php echo isset($alert243) ? $alert243 : ''; ?>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
</div>
<br>

	<?php include("../Includes/footer.php"); ?>