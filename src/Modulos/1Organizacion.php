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
	$checkNames = ['checkDisabled1', 'checkDisabled2', 'checkDisabled3', 'checkDisabled4', 'checkDisabled5', 'checkDisabled6', 'checkDisabled7', 'checkDisabled8', 'checkDisabled9', 'checkDisabled10'];

	// Establecer todas las variables de sesión a true
	foreach ($checkNames as $checkName) {
			$_SESSION[$checkName] = false;
	}
	// habilitar inputs
	// Inicializar un array con los nombres de las variables
	$inputNames = ['inputDisabled1', 'inputDisabled2', 'inputDisabled3', 'inputDisabled4','inputDisabled5','inputDisabled6','inputDisabled7'];

	// Recorrer el array y asignar los valores a las variables
	foreach ($inputNames as $inputName) {
			$_SESSION[$inputName] = false;
	}
	// habilitar boton
	// Inicializar un array con los nombres de las variables
	$botonNames = ['deshabilitarBoton1', 'deshabilitarBoton2', 'deshabilitarBoton3', 'deshabilitarBoton4', 'deshabilitarBoton5', 'deshabilitarBoton6', 'deshabilitarBoton7', 'deshabilitarBoton8', 'deshabilitarBoton9', 'deshabilitarBoton10', 'deshabilitarBoton11', 'deshabilitarBoton12', 'deshabilitarBoton13', 'deshabilitarBoton14', 'deshabilitarBoton15', 'deshabilitarBoton16', 'deshabilitarBoton17'];
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
$inputNames = ['inputDisabled1', 'inputDisabled2', 'inputDisabled3', 'inputDisabled4','inputDisabled5','inputDisabled6','inputDisabled7'];

// Recorrer el array y asignar los valores a las variables
foreach ($inputNames as $index => $inputName) {
    ${"inputsDeshabilitadosForm" . ($index + 1)} = $_SESSION[$inputName] ?? true;
}
// deshabilitar boton
// Inicializar un array con los nombres de las variables
$botonNames = ['deshabilitarBoton1', 'deshabilitarBoton2', 'deshabilitarBoton3', 'deshabilitarBoton4', 'deshabilitarBoton5', 'deshabilitarBoton6', 'deshabilitarBoton7', 'deshabilitarBoton8', 'deshabilitarBoton9', 'deshabilitarBoton10', 'deshabilitarBoton11', 'deshabilitarBoton12', 'deshabilitarBoton13', 'deshabilitarBoton14', 'deshabilitarBoton15', 'deshabilitarBoton16', 'deshabilitarBoton17'];
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
	'form6' => ['txtNombre1331', 'txtNombre1332'],
	'form7' => ['txtNombre1431', 'txtNombre1432'],
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
	'alert121', 'alert122', 'alert123', 'alert124',
	'alert131', 'alert132', 'alert133',
	'alert141', 'alert142', 'alert143'
];

foreach ($alerts as $index => $alert) {
	${$alert} = $_SESSION[$alert] ?? '';
}

$estadoGeneral = '';

if (isset($_POST['guardarFormulario'])) {
	
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

	$querySelect = mysqli_query($conexion, "SELECT * FROM `formulario` f INNER JOIN modulo m ON f.id_formulario = m.id_formulario WHERE f.fecha = '$nuevafecha' and m.modulo = 'Organización'");
	
	if (!mysqli_fetch_assoc($querySelect)) {
		$idFormulario = registrarFormularioNuevo($fechaCompleta, $fechaActual, $nuevafecha);
		$idModulo = registrarModulo($idFormulario, 'Organización');
		$idTema1 = registrarTema($idModulo, "1.1 Estructura");
		$_SESSION['idTema1'] = $idTema1;
		$idTema2 = registrarTema($idModulo, "1.2 Planeación");
		$_SESSION['idTema2'] = $idTema2;
		$idTema3 = registrarTema($idModulo, "1.3 Contraloría");
		$_SESSION['idTema3'] = $idTema3;
		$idTema4 = registrarTema($idModulo, "1.4 Capacitación");
		$_SESSION['idTema4'] = $idTema4;

		$enunciados1 = $_SESSION['enunciados1'];
		$valor_checkbox1 = $_SESSION['valorcheck1'];
		registrarIndicadoresCheckboxes($valueCheckNames111, $valor_checkbox1, $enunciados1, $idTema1, '1.1.1 Bando de Policía y Gobierno', 1);
		$enunciados2 = $_SESSION['enunciados2'];
		$valor_checkbox2 = $_SESSION['valorcheck2'];
		registrarIndicadoresCheckboxes($valueCheckNames112, $valor_checkbox2, $enunciados2, $idTema1, '1.1.2 Manuales de Organización', 1);
		$enunciados3 = $_SESSION['enunciados3'];
		$valor_checkbox3 = $_SESSION['valorcheck3'];
		registrarIndicadoresCheckboxes($valueCheckNames113, $valor_checkbox3, $enunciados3, $idTema1, '1.1.3 Tabulador de sueldos o documentos con la estructura salarial del personal de la administración pública municipal', 1);
		$enunciados4 = $_SESSION['enunciados4'];
		$valor_input1 = $_SESSION['valorinput1'];
		registrarIndicadoresInputs($valor_input1, $enunciados4, $idTema1, "1.1.4 Unidades administrativas existentes en función del número de unidades administrativas promedio", 2);
		$enunciados5 = $_SESSION['enunciados5'];
		$valor_input2 = $_SESSION['valorinput2'];
		registrarIndicadoresInputs($valor_input2, $enunciados5, $idTema1, "1.1.5 Unidades administrativas existentes en función del número de unidades administrativas promedio", 2);
		$enunciados6 = $_SESSION['enunciados6'];
		$valor_input3 = $_SESSION['valorinput3'];
		registrarIndicadoresInputs($valor_input3, $enunciados6, $idTema1, "1.1.6 Nivel salarial del Presidente(a) municipal", 2);
		$enunciados7 = $_SESSION['enunciados7'];
		$valor_input4 = $_SESSION['valorinput4'];
		registrarIndicadoresInputs($valor_input4, $enunciados7, $idTema1, "1.1.7 Participación de las mujeres en puestos de mando medio y superior en la administración pública municipal", 2);
		$enunciados8 = $_SESSION['enunciados8'];
		$valor_checkbox4 = $_SESSION['valorcheck4'];
		registrarIndicadoresCheckboxes($valueCheckNames121, $valor_checkbox4, $enunciados8, $idTema2, '1.2.1 Lineamientos de planeación municipal', 1);
		$enunciados9 = $_SESSION['enunciados9'];
		$valor_checkbox5 = $_SESSION['valorcheck5'];
		registrarIndicadoresCheckboxes($valueCheckNames122, $valor_checkbox5, $enunciados9, $idTema2, '1.2.2 Comité o cuerpo colegiado de planeación municipal', 1);
		$enunciados10 = $_SESSION['enunciados10'];
		$valor_checkbox6 = $_SESSION['valorcheck6'];
		registrarIndicadoresCheckboxes($valueCheckNames123, $valor_checkbox6, $enunciados10, $idTema2, '1.2.3 Plan Municipal de Desarrollo', 1);
		$enunciados11 = $_SESSION['enunciados11'];
		$valor_input5 = $_SESSION['valorinput5'];
		registrarIndicadoresInputs($valor_input5, $enunciados11, $idTema2, "1.2.4 Índice de Planeación Municipal", 2);
		$enunciados12 = $_SESSION['enunciados12'];
		$valor_checkbox7 = $_SESSION['valorcheck7'];
		registrarIndicadoresCheckboxes($valueCheckNames131, $valor_checkbox7, $enunciados12, $idTema3, '1.3.1 Programa anual de auditoría interna', 1);
		$enunciados13 = $_SESSION['enunciados13'];
		$valor_checkbox8 = $_SESSION['valorcheck8'];
		registrarIndicadoresCheckboxes($valueCheckNames132, $valor_checkbox8, $enunciados13, $idTema3, '1.3.2 Lineamientos para la entrega - recepción de la administración pública Municipal', 1);
		$enunciados14 = $_SESSION['enunciados14'];
		$valor_input6 = $_SESSION['valorinput6'];
		registrarIndicadoresInputs($valor_input6, $enunciados14, $idTema3, "1.3.3 Tasa de observaciones documentadas en las auditorías internas", 2);
		$enunciados15 = $_SESSION['enunciados15'];
		$valor_checkbox9 = $_SESSION['valorcheck9'];
		registrarIndicadoresCheckboxes($valueCheckNames141, $valor_checkbox9, $enunciados15, $idTema4, '1.4.1 Programa anual de capacitación para servidores públicos municipales', 1);
		$enunciados16 = $_SESSION['enunciados16'];
		$valor_checkbox10 = $_SESSION['valorcheck10'];
		registrarIndicadoresCheckboxes($valueCheckNames142, $valor_checkbox10, $enunciados16, $idTema4, '1.4.2 Evaluación de la capacitación', 1);
		$enunciados17 = $_SESSION['enunciados17'];
		$valor_input7 = $_SESSION['valorinput7'];
		registrarIndicadoresInputs($valor_input7, $enunciados17, $idTema4, "1.4.3 Servidoras y Servidores públicos capacitado(as)", 2);
		
	}


}

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (isset($_POST['111'])) {
		$checkboxesDeshabilitadosForm1 = true;
		$_SESSION['checkDisabled1'] = $checkboxesDeshabilitadosForm1;
		$botonDeshabilitado1 = true;
		$_SESSION['deshabilitarBoton1'] = $botonDeshabilitado1;
		$count = 0;
		$valor_checkbox1 = array();
		foreach ($valueCheckNames111 as $index => $name) {
			// Verificar si el checkbox está marcado
			if (isset($_POST[$name])) {
					$valor_checkbox1[$index] = $_POST[$name];
					$_SESSION[$name] = true;
					$count = $count + 1;
			} else {
					$valor_checkbox1[$index] = "";
					$_SESSION[$name] = false;
			}
		}
		$_SESSION['valorcheck1'] = $valor_checkbox1;
		$enunciados = [
			'a) Disposiciones normativas que regulan la organización y funcionamiento del Ayuntamiento.',
			'b) Disposiciones normativas de la Administración Pública Municipal.',
			'c) Documento que señale que fue avalado por la Administración o el Ayuntamiento en funciones, 
			según corresponda.',
			'd) Publicado conforme a la legislación estatal',
		];
		$_SESSION['enunciados1'] = $enunciados;
		

		// Evaluar el estado general del formulario
		$alert111 = evaluarEstadoAlertaCheck($count, 4);
		$_SESSION['alert111'] = $alert111;

	} elseif (isset($_POST['112'])) {
    $checkboxesDeshabilitadosForm2 = true;
		$_SESSION['checkDisabled2'] = $checkboxesDeshabilitadosForm2;
		$botonDeshabilitado2 = true;
		$_SESSION['deshabilitarBoton2'] = $botonDeshabilitado2;
		$count = 0;
		$valor_checkbox2 = array();
		foreach ($valueCheckNames112 as $index  => $name) {
			// Verificar si el checkbox está marcado
			if (isset($_POST[$name])) {
					// El checkbox está marcado, puedes hacer lo que necesites con el valor
					$valor_checkbox2[$index] = $_POST[$name];
					$_SESSION[$name] = true;
					$count = $count + 1;
			} else {
				$valor_checkbox2[$index] = "";
					$_SESSION[$name] = false;
			}
		}
		$_SESSION['valorcheck2'] = $valor_checkbox2;
		$enunciados = [
			'a) Documento por unidad administrativa con organigrama (dirección o secretaría, ya sea bajo un 
			esquema administrativo centralizado, desconcentrado, descentralizado, paramunicipal o 
			autónomo), que describa las funciones y perfil de puesto de la estructura autorizada.',
			'b) Organigrama general de la administración pública municipal.',
			'c) Catálogo de puestos avalado por la Administración o el Ayuntamiento en funciones, según 
			corresponda.',
			'd) Documento que señale que fue avalado por la Administración o el Ayuntamiento en funciones, 
			según corresponda.',
		];
		$_SESSION['enunciados2'] = $enunciados;
		$alert112 = evaluarEstadoAlertaCheck($count, 4);
		$_SESSION['alert112'] = $alert112;

  } elseif (isset($_POST['113'])) {
		$checkboxesDeshabilitadosForm3 = true;
		$_SESSION['checkDisabled3'] = $checkboxesDeshabilitadosForm3;
		$botonDeshabilitado3 = true;
		$_SESSION['deshabilitarBoton3'] = $botonDeshabilitado3;
		$count = 0;
		$valor_checkbox3 = array();
		foreach ($valueCheckNames113 as $index => $name) {
			// Verificar si el checkbox está marcado
			if (isset($_POST[$name])) {
					// El checkbox está marcado, puedes hacer lo que necesites con el valor
					$valor_checkbox3[$index] = $_POST[$name];
					$_SESSION[$name] = true;
					$count = $count + 1;
			} else {
				$valor_checkbox3[$index] = "";
					$_SESSION[$name] = false;
			}
		}
		$_SESSION['valorcheck3'] = $valor_checkbox3;
		$enunciados = [
			'a) Publicado conforme a la legislación estatal correspondiente.',
			'b) Documento que señale que fue avalado por la Administración o el Ayuntamiento en funciones, 
			según corresponda.',
		];
		$_SESSION['enunciados3'] = $enunciados;
		$alert113 = evaluarEstadoAlertaCheck($count, 2);
		$_SESSION['alert113'] = $alert113;

	} elseif (isset($_POST['114'])) {

		//114
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form1'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form1_value"} = $_POST[$fieldName] ?? '';
		}
		$_SESSION['txtNombre1141'] = $opcion1_form1_value;
		$_SESSION['txtNombre1142'] = $opcion2_form1_value;
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
				$inputsDeshabilitadosForm1 = true;
				$_SESSION['inputDisabled1'] = $inputsDeshabilitadosForm1;
				$botonDeshabilitado4 = true;
				$_SESSION['deshabilitarBoton4'] = $botonDeshabilitado4;
				$estadoGeneral = $estado;

				$enunciados = [
					'Número de unidades administrativas que conforman la administración.',
					'Gasto corriente en el año evaluado',
				];
				$_SESSION['enunciados4'] = $enunciados;
				$valor_input1 = [
					$opcion1_form1_value,
					$opcion2_form1_value,
				];
				$_SESSION['valorinput1'] = $valor_input1;
		} else {
				// Manejar el caso donde el denominador es 0 (división por 0)
				$estadoGeneral = 'Error: División por 0';
				
		}

		
		$alert114 = evaluarEstadoAlertaInputs($estadoGeneral);
		$_SESSION['alert114'] = $alert114;

	} elseif (isset($_POST['115'])) {

		//115
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form2'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form2_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre1151'] = $opcion1_form2_value;
		$_SESSION['txtNombre1152'] = $opcion2_form2_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion2_form2_value != 0) {
			// Calcula el porcentaje
			$porcentaje = ($opcion1_form2_value / $opcion2_form2_value) * 100;
		
			// Evalúa el porcentaje y determina el estado
			if ($porcentaje <= 8) {
				$estado = 'Optimo';
			} elseif ($porcentaje >= 9 && $porcentaje <= 10) {
				$estado = 'En Proceso';
			} else {
				$estado = 'Rezago';
			}

			$inputsDeshabilitadosForm2 = true;
			$_SESSION['inputDisabled2'] = $inputsDeshabilitadosForm2;
			$botonDeshabilitado5 = true;
			$_SESSION['deshabilitarBoton5'] = $botonDeshabilitado5;
			$estadoGeneral = $estado;

			$enunciados = [
				'Número de servidoras y servidores públicos municipales.',
				'Población total (INEGI, 2020).',
			];
			$_SESSION['enunciados5'] = $enunciados;
			$valor_input2 = [
				$opcion1_form2_value,
				$opcion2_form2_value,
			];
			$_SESSION['valorinput2'] = $valor_input2;
		} else {
			$estadoGeneral = 'Error: División por 0';
		}
		$alert115 = evaluarEstadoAlertaInputs($estadoGeneral);
		$_SESSION['alert115'] = $alert115;

	} elseif (isset($_POST['116'])) {

		//116
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form3'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form3_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre1161'] = $opcion1_form3_value;
		$_SESSION['txtNombre1162'] = $opcion2_form3_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion2_form3_value != 0) {
			// Calcula el porcentaje
			$porcentaje = ($opcion1_form3_value / $opcion2_form3_value) * 100;
		
		
			// Evalúa el porcentaje y determina el estado
			if ($porcentaje <= 1) {
				$estado = 'Optimo';
			} elseif ($porcentaje > 1 && $porcentaje <= 1.5) {
				$estado = 'En Proceso';
			} else {
				$estado = 'Rezago';
			}
			$inputsDeshabilitadosForm3 = true;
			$_SESSION['inputDisabled3'] = $inputsDeshabilitadosForm3;
			$botonDeshabilitado6 = true;
			$_SESSION['deshabilitarBoton6'] = $botonDeshabilitado6;
			$estadoGeneral = $estado;

			$enunciados = [
				'Salario neto mensual recibido por la/el presidenta(e) municipal',
				'Salario sugerido en función del tamaño poblacional.',
			];
			$_SESSION['enunciados6'] = $enunciados;
			$valor_input3 = [
				$opcion1_form3_value,
				$opcion2_form3_value,
			];
			$_SESSION['valorinput3'] = $valor_input3;
		} else {
			$estadoGeneral = 'Error: División por 0';
		}

		$alert116 = evaluarEstadoAlertaInputs($estadoGeneral);
		$_SESSION['alert116'] = $alert116;

	} elseif (isset($_POST['117'])) {

		//117
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form4'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form4_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre1171'] = $opcion1_form4_value;
		$_SESSION['txtNombre1172'] = $opcion2_form4_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion2_form4_value != 0) {
			// Calcula el porcentaje
			$porcentaje = ($opcion1_form4_value / $opcion2_form4_value) * 100;
		
			// Evalúa el porcentaje y determina el estado
			if ($porcentaje >= 50) {
				$estado = 'Optimo';
			} elseif ($porcentaje < 50 && $porcentaje >= 30) {
				$estado = 'En Proceso';
			} else {
				$estado = 'Rezago';
			}
				$inputsDeshabilitadosForm4 = true;
				$_SESSION['inputDisabled4'] = $inputsDeshabilitadosForm4;
				$botonDeshabilitado7 = true;
				$_SESSION['deshabilitarBoton7'] = $botonDeshabilitado7;
				$estadoGeneral = $estado;

				$enunciados = [
					'Puestos de mando medio y superior ocupados por mujeres.',
					'Total de puestos de mando medio y superior de la APM.',
				];
				
				$_SESSION['enunciados7'] = $enunciados;
				$valor_input4 = [
					$opcion1_form4_value,
					$opcion2_form4_value,
				];
				$_SESSION['valorinput4'] = $valor_input4;
			} else {
				$estadoGeneral = 'Error: División por 0';
			}
			
			$alert117 = evaluarEstadoAlertaInputs($estadoGeneral);
			$_SESSION['alert117'] = $alert117;
	} elseif (isset($_POST['121'])) {
		$checkboxesDeshabilitadosForm4 = true;
		$_SESSION['checkDisabled4'] = $checkboxesDeshabilitadosForm4;
		$botonDeshabilitado8 = true;
		$_SESSION['deshabilitarBoton8'] = $botonDeshabilitado8;
		$count = 0;
		$valor_checkbox4 = array();
		foreach ($valueCheckNames121 as $index => $name) {
			// Verificar si el checkbox está marcado
			if (isset($_POST[$name])) {
					// El checkbox está marcado, puedes hacer lo que necesites con el valor
					$valor_checkbox4[$index] = $_POST[$name];
					$_SESSION[$name] = true;
					$count = $count + 1;
			} else {
				$valor_checkbox4[$index] = "";
					$_SESSION[$name] = false;
			}
		}
		$_SESSION['valorcheck4'] = $valor_checkbox4;
		$enunciados = [
			'a) Funciones de la dependencia municipal responsable de la planeación.',
			'b) Instrumentos de planeación municipal.',
			'c) De los planes, programas e informes producto de la planeación municipal.',
			'd) Mecanismos de participación ciudadana en el proceso de planeación municipal.',
			'e) Documento que señale que fue avalado por la Administración o el Ayuntamiento en funciones, 
			según corresponda.',
		];
		$_SESSION['enunciados8'] = $enunciados;
		$alert121 = evaluarEstadoAlertaCheck($count, 5);
		$_SESSION['alert121'] = $alert121;

	} elseif (isset($_POST['122'])) {
		$checkboxesDeshabilitadosForm5 = true;
		$_SESSION['checkDisabled5'] = $checkboxesDeshabilitadosForm5;
		$botonDeshabilitado9 = true;
		$_SESSION['deshabilitarBoton9'] = $botonDeshabilitado9;
		$count = 0;
		$valor_checkbox5 = array();
		foreach ($valueCheckNames122 as $index => $name) {
			// Verificar si el checkbox está marcado
			if (isset($_POST[$name])) {
					// El checkbox está marcado, puedes hacer lo que necesites con el valor
					$valor_checkbox5[$index] = $_POST[$name];
					$_SESSION[$name] = true;
					$count = $count + 1;
			} else {
				$valor_checkbox5[$index] = "";
					$_SESSION[$name] = false;
			}
		}
		$_SESSION['valorcheck5'] = $valor_checkbox5;
		$enunciados = [
			'a) Acta de instalación de dicho Comité o cuerpo colegiado.',
			'b) Calendario anual de sesiones.',
			'c) Minutas fechadas y firmadas de las sesiones celebradas del año en curso de acuerdo con el 
			calendario anual de trabajo.',
		];
		$_SESSION['enunciados9'] = $enunciados;
		$alert122 = evaluarEstadoAlertaCheck($count, 3);
		$_SESSION['alert122'] = $alert122;

	} elseif (isset($_POST['123'])) {
		$checkboxesDeshabilitadosForm6 = true;
		$_SESSION['checkDisabled6'] = $checkboxesDeshabilitadosForm6;
		$botonDeshabilitado10 = true;
		$_SESSION['deshabilitarBoton10'] = $botonDeshabilitado10;
		$count = 0;
		$valor_checkbox6 = array();
		foreach ($valueCheckNames123 as $index => $name) {
			// Verificar si el checkbox está marcado
			if (isset($_POST[$name])) {
					// El checkbox está marcado, puedes hacer lo que necesites con el valor
					$valor_checkbox6[$index] = $_POST[$name];
					$_SESSION[$name] = true;
					$count = $count + 1;
			} else {
				$valor_checkbox6[$index] = "";
					$_SESSION[$name] = false;
			}
		}
		$_SESSION['valorcheck6'] = $valor_checkbox6;
		$enunciados = [
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
		$_SESSION['enunciados10'] = $enunciados;
		$alert123 = evaluarEstadoAlertaCheck($count, 7);
		$_SESSION['alert123'] = $alert123;

	} elseif (isset($_POST['124'])) {

		//124
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form5'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form5_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre1241'] = $opcion1_form5_value;
		$_SESSION['txtNombre1242'] = $opcion2_form5_value;
		$_SESSION['txtNombre1243'] = $opcion3_form5_value;
		$_SESSION['txtNombre1244'] = $opcion4_form5_value;
		$_SESSION['txtNombre1245'] = $opcion5_form5_value;
		$_SESSION['txtNombre1246'] = $opcion6_form5_value;
		$_SESSION['txtNombre1247'] = $opcion7_form5_value;
		

			// Calcula el porcentaje
			$porcentaje = ($opcion1_form5_value*15) + ($opcion2_form5_value*15) + ($opcion3_form5_value*20) + ($opcion4_form5_value*20) + ($opcion5_form5_value*10) + ($opcion6_form5_value*10) + ($opcion7_form5_value*10);
		
		
			// Evalúa el porcentaje y determina el estado
			if ($porcentaje >= 80) {
				$estado = 'Optimo';
			} elseif ($porcentaje < 80 && $porcentaje >= 50) {
				$estado = 'En Proceso';
			} else {
				$estado = 'Rezago';
			}
				$inputsDeshabilitadosForm5 = true;
				$_SESSION['inputDisabled5'] = $inputsDeshabilitadosForm5;
				$botonDeshabilitado11 = true;
				$_SESSION['deshabilitarBoton11'] = $botonDeshabilitado11;
				$estadoGeneral = $estado;
				$enunciados = [
					'X1= Lineamientos de planeación municipal con todos los elementos',
					'X2= Comité o cuerpo colegiado de planeación municipal con todos los elementos',
					'X3= Con objetivos, estrategias y metas',
					'X4= Con enfoque inclusivo',
					'X5= Con enfoque resiliente',
					'X6= Que sea sostenible',
					'X7= Fichas de indicadores del Plan Municipal de Desarrollo',
				];

				$_SESSION['enunciados11'] = $enunciados;
				$valor_input5 = [
					$opcion1_form5_value,
					$opcion2_form5_value,
					$opcion3_form5_value,
					$opcion4_form5_value,
					$opcion5_form5_value,
					$opcion6_form5_value,
					$opcion7_form5_value,
				];
				$_SESSION['valorinput5'] = $valor_input5;
			
			$alert124 = evaluarEstadoAlertaInputs($estadoGeneral);
			$_SESSION['alert124'] = $alert124;
	} elseif (isset($_POST['131'])) {
		$checkboxesDeshabilitadosForm7 = true;
		$_SESSION['checkDisabled7'] = $checkboxesDeshabilitadosForm7;
		$botonDeshabilitado12 = true;
		$_SESSION['deshabilitarBoton12'] = $botonDeshabilitado12;
		$count = 0;
		$valor_checkbox7 = array();
		foreach ($valueCheckNames131 as $index => $name) {
			// Verificar si el checkbox está marcado
			if (isset($_POST[$name])) {
					// El checkbox está marcado, puedes hacer lo que necesites con el valor
					$valor_checkbox7[$index] = $_POST[$name];
					$_SESSION[$name] = true;
					$count = $count + 1;
			} else {
				$valor_checkbox7[$index] = "";
					$_SESSION[$name] = false;
			}
		}
		$_SESSION['valorcheck7'] = $valor_checkbox7;
		$enunciados = [
			'a) Calendario con fechas, actividades y responsables del año en curso.',
			'b) Procesos, programas o acciones que serán auditados.',
			'c) Reporte de seguimiento a las auditorías internas realizadas (con fecha no mayor a un año).',
		];
		$_SESSION['enunciados12'] = $enunciados;
		$alert131 = evaluarEstadoAlertaCheck($count, 3);
		$_SESSION['alert131'] = $alert131;

	} elseif (isset($_POST['132'])) {
		$checkboxesDeshabilitadosForm8 = true;
		$_SESSION['checkDisabled8'] = $checkboxesDeshabilitadosForm8;
		$botonDeshabilitado13 = true;
		$_SESSION['deshabilitarBoton13'] = $botonDeshabilitado13;
		$count = 0;
		$valor_checkbox8 = array();
		foreach ($valueCheckNames132 as $index => $name) {
			// Verificar si el checkbox está marcado
			if (isset($_POST[$name])) {
					// El checkbox está marcado, puedes hacer lo que necesites con el valor
					$valor_checkbox8[$index] = $_POST[$name];
					$_SESSION[$name] = true;
					$count = $count + 1;
			} else {
				$valor_checkbox8[$index] = "";
					$_SESSION[$name] = false;
			}
		}
		$_SESSION['valorcheck8'] = $valor_checkbox8;
		$enunciados = [
			'a) Responsabilidades y tiempos establecidos.',
			'b) Sanciones.',
			'c) Publicado conforme a la legislación estatal.',
		];
		$_SESSION['enunciados13'] = $enunciados;
		$alert132 = evaluarEstadoAlertaCheck($count, 3);
		$_SESSION['alert132'] = $alert132;

	} elseif (isset($_POST['133'])) {

		//133
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form6'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form6_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre1331'] = $opcion1_form6_value;
		$_SESSION['txtNombre1332'] = $opcion2_form6_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion2_form6_value != 0) {
			// Calcula el porcentaje
			$porcentaje = ($opcion1_form6_value / $opcion2_form6_value) * 100;
		
		
			// Evalúa el porcentaje y determina el estado
			if ($porcentaje < 0) {
				$estado = 'Optimo';
			} elseif ($porcentaje = 0 && $porcentaje > 0) {
				$estado = 'En Proceso';
			} else {
				$estado = 'Rezago';
			}
				$inputsDeshabilitadosForm6 = true;
				$_SESSION['inputDisabled6'] = $inputsDeshabilitadosForm6;
				$botonDeshabilitado14 = true;
				$_SESSION['deshabilitarBoton14'] = $botonDeshabilitado14;
				$estadoGeneral = $estado;
				$enunciados = [
					'Número de observaciones a diciembre del año anterior inmediato.',
					'Número de observaciones del año en curso.',
				];
				
				$_SESSION['enunciados14'] = $enunciados;
				$valor_input6 = [
					$opcion1_form6_value,
					$opcion2_form6_value,
				];
				$_SESSION['valorinput6'] = $valor_input6;
			} else {
				$estadoGeneral = 'Error: División por 0';
			}
			
			$alert133 = evaluarEstadoAlertaInputs($estadoGeneral);
			$_SESSION['alert133'] = $alert133;
	} elseif (isset($_POST['141'])) {
		$checkboxesDeshabilitadosForm9 = true;
		$_SESSION['checkDisabled9'] = $checkboxesDeshabilitadosForm9;
		$botonDeshabilitado15 = true;
		$_SESSION['deshabilitarBoton15'] = $botonDeshabilitado15;
		$count = 0;
		$valor_checkbox9 = array();
		foreach ($valueCheckNames141 as $index => $name) {
			// Verificar si el checkbox está marcado
			if (isset($_POST[$name])) {
					// El checkbox está marcado, puedes hacer lo que necesites con el valor
					$valor_checkbox9[$index] = $_POST[$name];
					$_SESSION[$name] = true;
					$count = $count + 1;
			} else {
				$valor_checkbox9[$index] = "";
					$_SESSION[$name] = false;
			}
		}
		$_SESSION['valorcheck9'] = $valor_checkbox9;
		$enunciados = [
			'a) Mecanismos para la detección de necesidades en las unidades administrativas.',
			'b) Reporte con la identificación de necesidades de capacitación por unidad administrativa.',
			'c) Objetivos de la capacitación (temas prioritarios).',
			'd) Calendarización de las acciones de capacitación.',
			'e) Mecanismos para brindar o facilitar acciones de capacitación a servidores públicos.'
		];
		$_SESSION['enunciados15'] = $enunciados;
		$alert141 = evaluarEstadoAlertaCheck($count, 5);
		$_SESSION['alert141'] = $alert141;

	} elseif (isset($_POST['142'])) {
		$checkboxesDeshabilitadosForm10 = true;
		$_SESSION['checkDisabled10'] = $checkboxesDeshabilitadosForm10;
		$botonDeshabilitado16 = true;
		$_SESSION['deshabilitarBoton16'] = $botonDeshabilitado16;
		$count = 0;
		$valor_checkbox10 = array();
		foreach ($valueCheckNames142 as $index => $name) {
			// Verificar si el checkbox está marcado
			if (isset($_POST[$name])) {
					// El checkbox está marcado, puedes hacer lo que necesites con el valor
					$valor_checkbox10[$index] = $_POST[$name];
					$_SESSION[$name] = true;
					$count = $count + 1;
			} else {
				$valor_checkbox10[$index] = "";
					$_SESSION[$name] = false;
			}
		}
		$_SESSION['valorcheck10'] = $valor_checkbox10;
		$enunciados = [
			'a) Relación de servidores públicos municipales capacitados, por tema y unidad administrativa.',
			'b) Informe de evaluación de cumplimiento de los objetivos establecidos en el programa de capacitación.',
			'c) Análisis de las áreas de oportunidad identificadas para mejorar el programa y acciones de 
			capacitación del siguiente año.',
		];
		$_SESSION['enunciados16'] = $enunciados;
		$alert142 = evaluarEstadoAlertaCheck($count, 3);
		$_SESSION['alert142'] = $alert142;

	} elseif (isset($_POST['143'])) { 

		//143
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form7'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form7_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre1431'] = $opcion1_form7_value;
		$_SESSION['txtNombre1432'] = $opcion2_form7_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion2_form7_value != 0) {
			// Calcula el porcentaje
			$porcentaje = ($opcion1_form7_value / $opcion2_form7_value) * 100;
		
		
			// Evalúa el porcentaje y determina el estado
			if ($porcentaje >= 80) {
				$estado = 'Optimo';
			} elseif ($porcentaje < 80 && $porcentaje >= 50) {
				$estado = 'Rezago';
			} else {
				$estado = 'En Proceso';
			}
				$inputsDeshabilitadosForm7 = true;
				$_SESSION['inputDisabled7'] = $inputsDeshabilitadosForm7;
				$botonDeshabilitado17 = true;
				$_SESSION['deshabilitarBoton17'] = $botonDeshabilitado17;
				$estadoGeneral = $estado;
				$enunciados = [
					'Número de servidores(as) públicos municipales capacitados(as).',
					'Total de servidores(as) públicos municipales.',
				];
				$_SESSION['enunciados17'] = $enunciados;
				$valor_input7 = [
					$opcion1_form7_value,
					$opcion2_form7_value,
				];
				$_SESSION['valorinput7'] = $valor_input7;
			} else {
				$estadoGeneral = 'Error: División por 0';
			}
			$alert143 = evaluarEstadoAlertaInputs($estadoGeneral);
			$_SESSION['alert143'] = $alert143;

	}
}
?>

 
    <!--Enlaces de los stilo CSS -->

	<!--<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />-->
	<link rel="stylesheet" href="../../assets/css/modulos.css" />

	<img class="card-img-top" src="../../assets/img/Organizacion.png"
     alt="Gobierno Abierto" 
     style="width: 100px; height: 100px; display: block; margin: auto; max-width: 100%;">

	<div class="d-flex justify-content-between">
		<div class="btn-group" role="group" aria-label="">
		<form method="POST" enctype="multipart/form-data">
        <button type="submit" name="registrarNuevoFormulario" value="" class="btn btn-danger">Registro nuevo</button>
		</form>
			
    </div>
		<div class="btn-group" role="group" aria-label="">
		<form method="POST" enctype="multipart/form-data">
        <button type="submit" name="guardarFormulario" value="" class="btn btn-danger">Guardar Formulario</button>
		</form>
			
    </div>
	
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
							<button type="submit" name="111" value="" class="btn btn-success" <?php if ($botonDeshabilitado1) echo "disabled"; ?>>Evaluar</button>
						</div>
						<div class="input-group mb-3">
							<input type="file" class="form-control" id="inputGroupFile02">
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
							<button type="submit" name="112" value="" class="btn btn-success" <?php if ($botonDeshabilitado2) echo "disabled"; ?>>Evaluar</button>
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
								<button type="submit" name="113" value="" class="btn btn-success" <?php if ($botonDeshabilitado3) echo "disabled"; ?>>Evaluar</button>
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
							<button type="submit" name="114" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado4) echo "disabled"; ?>>Evaluar</button>
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
							<button type="submit" name="115" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado5) echo "disabled"; ?>>Evaluar</button>
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
							<button type="submit" name="116" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado6) echo "disabled"; ?>>Evaluar</button>
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
									<button type="submit" name="117" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado7) echo "disabled"; ?>>Evaluar</button>
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
							<button type="submit" name="121" value="" class="btn btn-success" <?php if ($botonDeshabilitado8) echo "disabled"; ?>>Evaluar</button>
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
							<button type="submit" name="122" value="" class="btn btn-success" <?php if ($botonDeshabilitado9) echo "disabled"; ?>>Evaluar</button>
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
							<button type="submit" name="123" value="" class="btn btn-success" <?php if ($botonDeshabilitado10) echo "disabled"; ?>>Evaluar</button>
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
									<button type="submit" name="124" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado11) echo "disabled"; ?>>Evaluar</button>
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
							<button type="submit" name="131" value="" class="btn btn-success" <?php if ($botonDeshabilitado12) echo "disabled"; ?>>Evaluar</button>
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
							<button type="submit" name="132" value="" class="btn btn-success" <?php if ($botonDeshabilitado13) echo "disabled"; ?>>Evaluar</button>
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

								$labels133 = [
									'Número de observaciones a diciembre del año anterior inmediato.',
									'Número de observaciones del año en curso.',
								];

								$valoresForm6 = [
									$opcion1_form6_value ?? '',
									$opcion2_form6_value ?? '',
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
									<input type="number" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm6) echo "disabled"; ?> required><span><?= $labels133[$index] ?></span>
								</label>
							<?php endforeach; ?>

								<div class="btn-group" role="group" aria-label="">
									<button type="submit" name="133" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado14) echo "disabled"; ?>>Evaluar</button>
								</div>
								<?php echo isset($alert133) ? $alert133 : ''; ?>
					</div>
				</form>

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
										<input type="checkbox" name="<?= $valueCheckNames141[$i] ?>" value="<?= $valueCheckNames141[$i] ?>" <?php if ($checkboxesDeshabilitadosForm9) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels141[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="141" value="" class="btn btn-success" <?php if ($botonDeshabilitado15) echo "disabled"; ?>>Evaluar</button>
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
										<input type="checkbox" name="<?= $valueCheckNames142[$i] ?>" value="<?= $valueCheckNames142[$i] ?>" <?php if ($checkboxesDeshabilitadosForm10) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels142[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="142" value="" class="btn btn-success" <?php if ($botonDeshabilitado16) echo "disabled"; ?>>Evaluar</button>
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
							
						<?php

							$labels143 = [
								'Número de servidores(as) públicos municipales capacitados(as).',
								'Total de servidores(as) públicos municipales.',
							];

							$valoresForm7 = [
								$opcion1_form7_value ?? '',
								$opcion2_form7_value ?? '',
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
								<input type="number" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm7) echo "disabled"; ?> required><span><?= $labels143[$index] ?></span>
							</label>
						<?php endforeach; ?>

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="143" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado17) echo "disabled"; ?>>Evaluar</button>
							</div>
							<?php echo isset($alert143) ? $alert143 : ''; ?>
					
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</br>


		
	<?php include "../Includes/footer.php"; ?>