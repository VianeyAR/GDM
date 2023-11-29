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
		$botonNames = ['deshabilitarBoton1', 'deshabilitarBoton2', 'deshabilitarBoton3', 'deshabilitarBoton4', 'deshabilitarBoton5', 'deshabilitarBoton6', 'deshabilitarBoton7'];
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
		$botonNames = ['deshabilitarBoton1', 'deshabilitarBoton2', 'deshabilitarBoton3', 'deshabilitarBoton4', 'deshabilitarBoton5', 'deshabilitarBoton6', 'deshabilitarBoton7'];
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
$botonNames = ['deshabilitarBoton1', 'deshabilitarBoton2', 'deshabilitarBoton3', 'deshabilitarBoton4', 'deshabilitarBoton5', 'deshabilitarBoton6', 'deshabilitarBoton7'];
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
		'check223' => 3,
		'check231' => 2,
		'check241' => 5,
		'check242' => 2
];

$valueCheckNames211 = [
	'check2111', 'check2112', 'check2113', 'check2114', 'check2115', 'check2116'
];
$valueCheckNames212 = [
	'check2111', 'check2122', 'check2123', 'check2124', 'check2125',
];
$valueCheckNames213 = [
	'check2131', 'check2132', 'check2133', 
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

// valores inputs
$variableNames = [
	'form1' => ['txtNombre2141', 'txtNombre2142'],
	'form2' => ['txtNombre2151', 'txtNombre2152'],
	'form3' => ['txtNombre2161', 'txtNombre2162'],
	'form4' => ['txtNombre2171', 'txtNombre2172'],
	'form5' => ['txtNombre2241', 'txtNombre2242'],
	'form6' => ['txtNombre2251', 'txtNombre2252'],
	'form7' => ['txtNombre2321', 'txtNombre2322'],
	'form8' => ['txtNombre2331', 'txtNombre2332'],
	'form9' => ['txtNombre2341', 'txtNombre2342'],
	'form10' => ['txtNombre2431', 'txtNombre2432']
];

// Recorrer el array y asignar los valores a las variables
foreach ($variableNames as $form => $sessionNames) {
	${"opcion1_$form\_value"} = $_SESSION[$sessionNames[0]] ?? '';
	${"opcion2_$form\_value"} = $_SESSION[$sessionNames[1]] ?? '';
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

		$_SESSION['completado4'] = true;
		$inputsDeshabilitadosForm4 = true;
		$_SESSION['inputDisabled4'] = $inputsDeshabilitadosForm4;
		$botonDeshabilitado4 = true;
		$_SESSION['deshabilitarBoton4'] = $botonDeshabilitado4;
		//214
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form1'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form1_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre2141'] = $opcion1_form1_value;
		$_SESSION['txtNombre2142'] = $opcion2_form1_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion2_form1_value != 0) {
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

				$estadoGeneral = $estado;
		} else {
				// Manejar el caso donde el denominador es 0 (división por 0)
				$estadoGeneral = 'Error: División por 0';
				
		}
			echo $estadoGeneral;
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

		$_SESSION['completado5'] = true;
		$inputsDeshabilitadosForm5 = true;
		$_SESSION['inputDisabled5'] = $inputsDeshabilitadosForm5;
		$botonDeshabilitado5 = true;
		$_SESSION['deshabilitarBoton5'] = $botonDeshabilitado5;
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

	} elseif (isset($_POST['217'])) {

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
    <!--Enlaces de los stilo CSS -->

	<!--<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />-->
	<link rel="stylesheet" href="../../assets/css/modulos.css" />



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
									</label><br>
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
									<input type="text" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm4) echo "disabled"; ?>><span><?= $labels214[$index] ?></span>
								</label>
							<?php endforeach; ?>

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="214" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado4) echo "disabled"; ?>>Guardar</button>
							</div>
							<?php echo isset($alert214) ? $alert214 : ''; ?>
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
									<input type="text" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm5) echo "disabled"; ?>><span><?= $labels215[$index] ?></span>
								</label>

							<?php endforeach; ?>

							<div class="btn-group" role="group" aria-label="">
									<button type="submit" name="215" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado5) echo "disabled"; ?>>Guardar</button>
								</div>
								<?php echo isset($alert215) ? $alert215 : ''; ?>
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