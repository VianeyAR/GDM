<?php include("../Includes/header.php"); 


// Inicia la sesión
include("../../bd.php");
// session_unset();
include("../../funciones.php");
$alerta = '';
include("../../pdf.php");

if (isset($_POST['registrarNuevoFormulario'])) {

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

	$querySelect = mysqli_query($conexion, "SELECT * FROM `formulario` f INNER JOIN modulo m ON f.id_formulario = m.id_formulario WHERE f.fecha = '$nuevafecha' and m.modulo = 'Medio Ambiente'");
	
	if (!mysqli_fetch_assoc($querySelect)) {

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
		$inputNames = ['inputDisabled1' ];

		// Recorrer el array y asignar los valores a las variables
		foreach ($inputNames as $inputName) {
				$_SESSION[$inputName] = false;
		}
		// habilitar boton
		// Inicializar un array con los nombres de las variables
		$botonNames = ['deshabilitarBoton1', 'deshabilitarBoton2', 'deshabilitarBoton3', 'deshabilitarBoton4', 'deshabilitarBoton5', 'deshabilitarBoton6', 'deshabilitarBoton7', 'deshabilitarBoton8', 'deshabilitarBoton9', 'deshabilitarBoton10'];
		// Recorrer el array y asignar los valores a las variables
		foreach ($botonNames as $botonName) {
			$_SESSION[$botonName] = false;
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

$inputNames = ['inputDisabled1',  ];
foreach ($inputNames as $index => $inputName) {
	${"inputsDeshabilitadosForm" . ($index + 1)} = $_SESSION[$inputName] ?? true;
}

// deshabilitar boton
// Inicializar un array con los nombres de las variables
$botonNames = ['deshabilitarBoton1', 'deshabilitarBoton2', 'deshabilitarBoton3', 'deshabilitarBoton4', 'deshabilitarBoton5', 'deshabilitarBoton6', 'deshabilitarBoton7', 'deshabilitarBoton8', 'deshabilitarBoton9', 'deshabilitarBoton10'];
// Recorrer el array y asignar los valores a las variables
foreach ($botonNames as $index => $botonName) {
${"botonDeshabilitado" . ($index + 1)} = $_SESSION[$botonName] ?? true;
}

// valores checkboxes
// Inicializar un array con los nombres de las variables

$opciones = [
	'check511' => 5, // Último número de cada grupo de checkboxes
	'check512' => 9,
	'check521' => 2,
	'check522' => 7,
	'check523' => 3,
	'check524' => 3,
	'check531' => 2,
	'check532' => 2,
	'check533' => 3,
];

$valueCheckNames511 = [
'check5111', 'check5112', 'check5113', 'check5114', 'check5115',
];
$valueCheckNames512 = [
'check5121', 'check5122', 'check5123', 'check5124', 'check5125','check5126','check5127', 'check5128','check5129',
];
$valueCheckNames521 = [
'check5211', 'check5212',
];
$valueCheckNames522 = [
'check5221', 'check5222', 'check5223', 'check5224', 'check5225','check5226','check5227',
];
$valueCheckNames523 = [
'check5231', 'check5232', 'check5233',
];
$valueCheckNames524 = [
'check5241', 'check5242', 'check5242',
];
$valueCheckNames531 = [
	'check5311', 'check5312', 
];
$valueCheckNames532 = [
	'check5321', 'check5322',
];
$valueCheckNames533 = [
	'check5331', 'check5332', 'check5333',
];


// Crear variables dinámicas
for ($i = 0; $i < $opciones['check511']; $i++) {
${"opcion{$i}_form{$valueCheckNames511[$i]}"} = $_SESSION[$valueCheckNames511[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check512']; $i++) {
${"opcion{$i}_form{$valueCheckNames512[$i]}"} = $_SESSION[$valueCheckNames512[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check521']; $i++) {
${"opcion{$i}_form{$valueCheckNames521[$i]}"} = $_SESSION[$valueCheckNames521[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check522']; $i++) {
${"opcion{$i}_form{$valueCheckNames522[$i]}"} = $_SESSION[$valueCheckNames522[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check523']; $i++) {
${"opcion{$i}_form{$valueCheckNames523[$i]}"} = $_SESSION[$valueCheckNames523[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check524']; $i++) {
${"opcion{$i}_form{$valueCheckNames524[$i]}"} = $_SESSION[$valueCheckNames524[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check531']; $i++) {
${"opcion{$i}_form{$valueCheckNames531[$i]}"} = $_SESSION[$valueCheckNames531[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check532']; $i++) {
${"opcion{$i}_form{$valueCheckNames532[$i]}"} = $_SESSION[$valueCheckNames532[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check533']; $i++) {
${"opcion{$i}_form{$valueCheckNames533[$i]}"} = $_SESSION[$valueCheckNames533[$i]] ?? false;
}

// valores inputs
$variableNames = [
	'form1' => ['txtNombre5341', 'txtNombre5342'],
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
'alert511', 'alert512',
'alert521', 'alert522','alert523','alert524',
'alert531', 'alert532','alert533', 'alert534',
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

	$querySelect = mysqli_query($conexion, "SELECT * FROM `formulario` f INNER JOIN modulo m ON f.id_formulario = m.id_formulario WHERE f.fecha = '$nuevafecha' and m.modulo = 'Medio Ambiente'");
	
	if (!mysqli_fetch_assoc($querySelect)) {
		$idFormulario = registrarFormularioNuevo($fechaCompleta, $fechaActual, $nuevafecha);
		$idModulo = registrarModulo($idFormulario, 'Medio Ambiente');
		$idTema1 = registrarTema($idModulo, "5.1 Preservación del ambiente");
		$_SESSION['idTema1'] = $idTema1;
		$idTema2 = registrarTema($idModulo, "5.2 Cambio climático");
		$_SESSION['idTema2'] = $idTema2;
		$idTema3 = registrarTema($idModulo, "5.3 Servicios públicos sustentables");

		$enunciados1 = $_SESSION['enunciados1'];
		$valor_checkbox1 = $_SESSION['valorcheck1'];
		registrarIndicadoresCheckboxes($valueCheckNames511, $valor_checkbox1, $enunciados1, $idTema1, '5.1.1 Reglamento para el cuidado del medio ambiente', 1);
		$enunciados2 = $_SESSION['enunciados2'];
		$valor_checkbox2 = $_SESSION['valorcheck2'];
		registrarIndicadoresCheckboxes($valueCheckNames512, $valor_checkbox2, $enunciados2, $idTema1, '5.1.2 Programa Municipal de Protección al Ambiente', 1);
		$enunciados3 = $_SESSION['enunciados3'];
		$valor_checkbox3 = $_SESSION['valorcheck3'];
		registrarIndicadoresCheckboxes($valueCheckNames521, $valor_checkbox3, $enunciados3, $idTema2, '5.2.1. Atribuciones normativas en materia de cambio climático', 1);
		$enunciados4 = $_SESSION['enunciados4'];
		$valor_checkbox4 = $_SESSION['valorcheck4'];
		registrarIndicadoresCheckboxes($valueCheckNames522, $valor_checkbox4, $enunciados4, $idTema2, '5.2.2. Programa o documento de adaptación y mitigación al cambio climático', 1);
		$enunciados5 = $_SESSION['enunciados5'];
		$valor_checkbox5 = $_SESSION['valorcheck5'];
		registrarIndicadoresCheckboxes($valueCheckNames523, $valor_checkbox5, $enunciados5, $idTema2, '5.2.3 Acciones del municipio para disminuir la vulnerabilidad ante el cambio climático', 1);
		$enunciados6 = $_SESSION['enunciados6'];
		$valor_checkbox6 = $_SESSION['valorcheck6'];
		registrarIndicadoresCheckboxes($valueCheckNames524, $valor_checkbox6, $enunciados6, $idTema2, '5.2.4 Edificaciones', 1);
		$enunciados7 = $_SESSION['enunciados7'];
		$valor_checkbox7 = $_SESSION['valorcheck7'];
		registrarIndicadoresCheckboxes($valueCheckNames531, $valor_checkbox7, $enunciados7, $idTema3, '5.3.1. Eficiencia en servicio de agua potable', 1);
		$enunciados8 = $_SESSION['enunciados8'];
		$valor_checkbox8 = $_SESSION['valorcheck8'];
		registrarIndicadoresCheckboxes($valueCheckNames532, $valor_checkbox8, $enunciados8, $idTema3, '5.3.2. Eficiencia en Alumbrado público', 1);
		$enunciados9 = $_SESSION['enunciados9'];
		$valor_checkbox9 = $_SESSION['valorcheck9'];
		registrarIndicadoresCheckboxes($valueCheckNames533, $valor_checkbox9, $enunciados9, $idTema3, '5.3.3 Mejora en el uso de la flota vehicular del municipio', 1);
		$enunciados10 = $_SESSION['enunciados10'];
		$valor_input1 = $_SESSION['valorinput1'];
		registrarIndicadoresInputs($valor_input1, $enunciados10, $idTema3, '5.3.4. Abatimiento del costo promedio por luminaria', 2);
		session_unset();
		$alerta = '<div class="alert alert-success" role="alert">
								Guardado
						</div>';
	} else {
		$alerta = '<div class="alert alert-warning" role="alert">
								Ya Registrado.
						</div>';
	}
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (isset($_POST['511'])) {
		$checkboxesDeshabilitadosForm1 = true;
		$_SESSION['checkDisabled1'] = $checkboxesDeshabilitadosForm1;
		$botonDeshabilitado1 = true;
		$_SESSION['deshabilitarBoton1'] = $botonDeshabilitado1;
		$count = 0;
		$valor_checkbox1 = array();
		foreach ($valueCheckNames511 as $index => $name) {
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
			'a) Enlista las atribuciones del municipio en materia medioambiental.',
			'b) Reglamenta actividades para la protección y preservación del medio ambiente.',
			'c) Reglamenta actividades de restauración ambiental y aprovechamiento sustentable de recursos naturales.',
			'd) Cuenta con mecanismos de coordinación entre autoridades y sociedad civil para la formulación y ejecución de programas o proyectos.',
			'e) Gaceta en donde fue publicado conforme a la legislación estatal.',
		];
		$_SESSION['enunciados1'] = $enunciados;
		

		// Evaluar el estado general del formulario
		$alert511 = evaluarEstadoAlertaCheck($count, 5);
		$_SESSION['alert511'] = $alert511;

	} elseif (isset($_POST['512'])) {
    $checkboxesDeshabilitadosForm2 = true;
		$_SESSION['checkDisabled2'] = $checkboxesDeshabilitadosForm2;
		$botonDeshabilitado2 = true;
		$_SESSION['deshabilitarBoton2'] = $botonDeshabilitado2;
		$count = 0;
		$valor_checkbox2 = array();
		foreach ($valueCheckNames512 as $index  => $name) {
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
			'a) Acta de cabildo que muestre que fue aprobado.',
			'b) Cuenta con un diagnóstico de las condiciones ambientales.',
			'c) Está alineado a la política estatal y nacional sobre temas referentes al cuidado y protección del ambiente.',
			'd) Define objetivos, estrategias y metas en el corto, mediano y largo plazo.',
			'e) Tiene identificadas posibles fuentes de financiamiento para ejecutar acciones para la protección de los recursos naturales y el ambiente.',
			'f) Asignación presupuestal específica para el cuidado del medio ambiente.',
			'g) Considera campañas de educación e información para la sensibilización de la población.',
			'h) Gaceta en donde fue publicado conforme a la legislación estatal.',
			'i) Informe que evalúa los objetivos y metas del programa de protección al medio ambiente.',
		];
		$_SESSION['enunciados2'] = $enunciados;
		$alert512 = evaluarEstadoAlertaCheck($count, 9);
		$_SESSION['alert512'] = $alert512;

  } elseif (isset($_POST['521'])) {
		$checkboxesDeshabilitadosForm3 = true;
		$_SESSION['checkDisabled3'] = $checkboxesDeshabilitadosForm3;
		$botonDeshabilitado3 = true;
		$_SESSION['deshabilitarBoton3'] = $botonDeshabilitado3;
		$count = 0;
		$valor_checkbox3 = array();
		foreach ($valueCheckNames521 as $index => $name) {
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
			'a) Funciones para la mitigación y adaptación al cambio climático establecidas a una unidad administrativa municipal responsable del cuidado del medio ambiente o equivalente.',
			'b) Presupuesto de egresos con asignación presupuestal específico para acciones o proyectos en materia de cambio climático.',
		];
		$_SESSION['enunciados3'] = $enunciados;
		$alert521 = evaluarEstadoAlertaCheck($count, 2);
		$_SESSION['alert521'] = $alert521;

	} elseif (isset($_POST['522'])) {
		$checkboxesDeshabilitadosForm4 = true;
		$_SESSION['checkDisabled4'] = $checkboxesDeshabilitadosForm4;
		$botonDeshabilitado4 = true;
		$_SESSION['deshabilitarBoton4'] = $botonDeshabilitado4;
		$count = 0;
		$valor_checkbox4 = array();
		foreach ($valueCheckNames522 as $index => $name) {
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
			'a) Acta de cabildo que muestre que fue aprobado.',
			'b) Diagnóstico de impacto del cambio climático en el municipio.',
			'c) Identifica acciones puntuales de mitigación.',
			'd) Identifica acciones puntuales de adaptación.',
			'e) Tiene identificadas fuentes de financiamiento para ejecutar acciones de adaptación y mitigación ante el cambio climático.',
			'f) Señala una progresividad y continuidad de las acciones en el corto, mediano y largo plazo.',
			'g) Gaceta en donde fue publicado conforme a la legislación estatal.',
		];
		$_SESSION['enunciados4'] = $enunciados;
		$alert522 = evaluarEstadoAlertaCheck($count, 7);
		$_SESSION['alert522'] = $alert522;

	} elseif (isset($_POST['523'])) {
		$checkboxesDeshabilitadosForm5 = true;
		$_SESSION['checkDisabled5'] = $checkboxesDeshabilitadosForm5;
		$botonDeshabilitado5 = true;
		$_SESSION['deshabilitarBoton5'] = $botonDeshabilitado5;
		$count = 0;
		$valor_checkbox5 = array();
		foreach ($valueCheckNames523 as $index => $name) {
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
			'a) Lista de acciones municipales mencionadas en el atlas nacional o estatal o municipal de vulnerabilidad.',
			'b) Mapa de riesgos que incluye la información del atlas nacional o estatal o municipal de vulnerabilidad.',
			'c) Lista de proyectos para disminuir las vulnerabilidades identificadas.',
		];
		$_SESSION['enunciados5'] = $enunciados;
		$alert523 = evaluarEstadoAlertaCheck($count, 3);
		$_SESSION['alert523'] = $alert523;

	} elseif (isset($_POST['524'])) {
		$checkboxesDeshabilitadosForm6 = true;
		$_SESSION['checkDisabled6'] = $checkboxesDeshabilitadosForm6;
		$botonDeshabilitado6 = true;
		$_SESSION['deshabilitarBoton6'] = $botonDeshabilitado6;
		$count = 0;
		$valor_checkbox6 = array();
		foreach ($valueCheckNames524 as $index => $name) {
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
			'a) Actualización al Reglamento de Construcción Municipal en los últimos cinco años, a partir de su publicación.',
			'b) Reglamento de Construcción Municipal que considere la NOM-008-ENER-2001 Eficiencia energética en edificaciones, envolvente de edificios no residenciales',
			'c) Reglamento de Construcción Municipal que considere la NOM-020-ENER-2011. Eficiencia energética en edificaciones, envolvente de edificios para su uso habitacional',
		];
		$_SESSION['enunciados6'] = $enunciados;
		$alert524 = evaluarEstadoAlertaCheck($count, 3);
		$_SESSION['alert524'] = $alert524;

	} elseif (isset($_POST['531'])) {
		$checkboxesDeshabilitadosForm7 = true;
		$_SESSION['checkDisabled7'] = $checkboxesDeshabilitadosForm7;
		$botonDeshabilitado7 = true;
		$_SESSION['deshabilitarBoton7'] = $botonDeshabilitado7;
		$count = 0;
		$valor_checkbox7 = array();
		foreach ($valueCheckNames531 as $index => $name) {
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
			'a) Consumo de energía (kWh) y presupuesto erogado (monto) para mantener el servicio de agua potable y tratamiento de aguas residuales en los últimos dos años.',
			'b) Diagnóstico energético del sistema de bombeo de agua potable y planta de aguas residuales.',
		];
		$_SESSION['enunciados7'] = $enunciados;
		$alert531 = evaluarEstadoAlertaCheck($count, 2);
		$_SESSION['alert531'] = $alert531;

	} elseif (isset($_POST['532'])) {
		$checkboxesDeshabilitadosForm8 = true;
		$_SESSION['checkDisabled8'] = $checkboxesDeshabilitadosForm8;
		$botonDeshabilitado8 = true;
		$_SESSION['deshabilitarBoton8'] = $botonDeshabilitado8;
		$count = 0;
		$valor_checkbox8 = array();
		foreach ($valueCheckNames532 as $index => $name) {
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
			'a) Diagnóstico del alumbrado público en el que identifique cobertura y tipo de energía utilizada.',
			'b) Lista de acciones de sustitución de equipos existentes por tecnologías eficientes.',
		];
		$_SESSION['enunciados8'] = $enunciados;
		$alert532 = evaluarEstadoAlertaCheck($count, 2);
		$_SESSION['alert532'] = $alert532;

	} elseif (isset($_POST['533'])) {
		$checkboxesDeshabilitadosForm9 = true;
		$_SESSION['checkDisabled9'] = $checkboxesDeshabilitadosForm9;
		$botonDeshabilitado9 = true;
		$_SESSION['deshabilitarBoton9'] = $botonDeshabilitado9;
		$count = 0;
		$valor_checkbox9 = array();
		foreach ($valueCheckNames533 as $index => $name) {
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
			'a) Padrón de los vehículos que integran la flota vehicular del municipio.',
			'b) Consumo de combustible (litros) y presupuesto erogado (gasolinas) para mantener la flota vehicular del municipio en los últimos doce meses.',
			'c) Acciones de capacitación en temas de ahorro de combustibles dirigida a los operadores de las unidades que integran la flota vehicular del municipio.',
		];
		$_SESSION['enunciados9'] = $enunciados;
		$alert533 = evaluarEstadoAlertaCheck($count, 3);
		$_SESSION['alert533'] = $alert533;

	} elseif (isset($_POST['534'])) {

		//534
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form1'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form1_value"} = $_POST[$fieldName] ?? '';
		}
		$_SESSION['txtNombre5341'] = $opcion1_form1_value;
		$_SESSION['txtNombre5342'] = $opcion2_form1_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion1_form1_value != 0) {
				// Calcula el porcentaje
				$porcentaje = (($opcion2_form1_value - $opcion1_form1_value) / $opcion1_form1_value) * - 100;

				// Evalúa el porcentaje y determina el estado
				if ($porcentaje > 0) {
						$estado = 'Optimo';
				} elseif ($porcentaje = 0) {
						$estado = 'En Proceso';
				} else {
						$estado = 'Rezago';
				}
				$inputsDeshabilitadosForm1 = true;
				$_SESSION['inputDisabled1'] = $inputsDeshabilitadosForm1;
				$botonDeshabilitado10 = true;
				$_SESSION['deshabilitarBoton10'] = $botonDeshabilitado10;
				$estadoGeneral = $estado;

				$enunciados = [
					'Costo promedio por luminaria en el año previo al evaluado.',
					'Costo promedio por luminaria en el año evaluado.',
				];
				$_SESSION['enunciados10'] = $enunciados;
				$valor_input1 = [
					$opcion1_form1_value,
					$opcion2_form1_value,
				];
				$_SESSION['valorinput1'] = $valor_input1;
		} else {
				// Manejar el caso donde el denominador es 0 (división por 0)
				$estadoGeneral = 'Error: División por 0';
				
		}

		
		$alert534 = evaluarEstadoAlertaInputs($estadoGeneral);
		$_SESSION['alert534'] = $alert534;

	}
}
?>


   <!--Enlaces de los stilo CSS -->

	<!--<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />-->
	<link rel="stylesheet" href="../../assets/css/modulos.css" />

	<img class="card-img-top" src="../../assets/img/MedioAmbiente.png"
     alt="Gobierno Abierto" 
     style="width: 100px; height: 100px; display: block; margin: auto; max-width: 100%;">

	<div class="d-flex justify-content-between">
		<div class="btn-group" role="group" aria-label="">
		<form method="POST" enctype="multipart/form-data">
        <button type="submit" name="registrarNuevoFormulario" value="" class="btn btn-success">Registro nuevo</button>
	
                   	
	</form>
			
    </div>
		<div class="btn-group" role="group" aria-label="">
		<form method="POST" enctype="multipart/form-data">
        <button type="submit" name="guardarFormulario" value="" class="btn btn-success">Guardar Formulario</button>
	
                  	
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
	
		<h2 class="display-7">5.1 Preservación del
		ambiente</h2>
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
						<h6 class="display-15">5.1.1 Reglamento para el cuidado del medio ambiente</h6></p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels511 = [
								'a) Enlista las atribuciones del municipio en materia medioambiental.',
								'b) Reglamenta actividades para la protección y preservación del medio ambiente.',
								'c) Reglamenta actividades de restauración ambiental y aprovechamiento sustentable de recursos naturales.',
								'd) Cuenta con mecanismos de coordinación entre autoridades y sociedad civil para la formulación y ejecución de programas o proyectos.',
								'e) Gaceta en donde fue publicado conforme a la legislación estatal.',
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames511[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check511']; $i++) {
									${"opcion{$i}_form{$valueCheckNames511[$i]}"} = $_SESSION[$valueCheckNames511[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check511']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames511[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames511[$i] ?>" value="<?= $valueCheckNames511[$i] ?>" <?php if ($checkboxesDeshabilitadosForm1) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels511[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="511" value="" class="btn btn-success" <?php if ($botonDeshabilitado1) echo "disabled"; ?>>Evaluar</button>
						</div>
						
						<?php echo isset($alert511) ? $alert511 : ''; ?>
					</div>
				
                    <form action="5MedioAmbiente.php" method="post" enctype="multipart/form-data">

                        <input type="file" name="pdf_file" id="pdf_file">
                        <br>
                        <label for="nuevo_nombre">Nuevo nombre:</label>
                        <input type="text" name="nuevo_nombre" placeholder="No. Indicador_Año">
                        <br>
                        <input type="submit" value="Subir PDF" name="subirpdf">
                    </form>
                    </br>
				</form>
				<form method="POST" enctype="multipart/form-data" >
					<p>
						<h6 class="display-15"> 5.1.2 Programa Municipal de Protección al Ambiente</h6></p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels512 = [
								'a) Acta de cabildo que muestre que fue aprobado.',
								'b) Cuenta con un diagnóstico de las condiciones ambientales.',
								'c) Está alineado a la política estatal y nacional sobre temas referentes al cuidado y protección del ambiente.',
								'd) Define objetivos, estrategias y metas en el corto, mediano y largo plazo.',
								'e) Tiene identificadas posibles fuentes de financiamiento para ejecutar acciones para la protección de los recursos naturales y el ambiente.',
								'f) Asignación presupuestal específica para el cuidado del medio ambiente.',
								'g) Considera campañas de educación e información para la sensibilización de la población.',
								'h) Gaceta en donde fue publicado conforme a la legislación estatal.',
								'i) Informe que evalúa los objetivos y metas del programa de protección al medio ambiente.',
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames512[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check512']; $i++) {
									${"opcion{$i}_form{$valueCheckNames512[$i]}"} = $_SESSION[$valueCheckNames512[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check512']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames512[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames512[$i] ?>" value="<?= $valueCheckNames512[$i] ?>" <?php if ($checkboxesDeshabilitadosForm2) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels512[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="512" value="" class="btn btn-success" <?php if ($botonDeshabilitado2) echo "disabled"; ?>>Evaluar</button>
						</div>
						
						<?php echo isset($alert512) ? $alert512 : ''; ?>
					</div>
				
                    <form action="5MedioAmbiente.php" method="post" enctype="multipart/form-data">

                        <input type="file" name="pdf_file" id="pdf_file">
                        <br>
                        <label for="nuevo_nombre">Nuevo nombre:</label>
                        <input type="text" name="nuevo_nombre" placeholder="No. Indicador_Año">
                        <br>
                        <input type="submit" value="Subir PDF" name="subirpdf">
                    </form>
                    </br>
				</form>
			</div>
		</div>
	</div>
	</div>
	</div></br>

	<!--Tema 2 -- Planeacion-->

	<div class="jumbotron">
		
			<h2 class="display-7">5.2 Cambio climático</h2>
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
						<h6 class="display-15">5.2.1. Atribuciones normativas en materia de cambio climático</h6></p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels521 = [
								'a) Funciones para la mitigación y adaptación al cambio climático establecidas a una unidad administrativa municipal responsable del cuidado del medio ambiente o equivalente.',
								'b) Presupuesto de egresos con asignación presupuestal específico para acciones o proyectos en materia de cambio climático.',
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames521[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check521']; $i++) {
									${"opcion{$i}_form{$valueCheckNames521[$i]}"} = $_SESSION[$valueCheckNames521[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check521']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames521[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames521[$i] ?>" value="<?= $valueCheckNames521[$i] ?>" <?php if ($checkboxesDeshabilitadosForm3) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels521[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="521" value="" class="btn btn-success" <?php if ($botonDeshabilitado3) echo "disabled"; ?>>Evaluar</button>
						</div>
						
						<?php echo isset($alert521) ? $alert521 : ''; ?>
					</div>
				
                    <form action="5MedioAmbiente.php" method="post" enctype="multipart/form-data">

                        <input type="file" name="pdf_file" id="pdf_file">
                        <br>
                        <label for="nuevo_nombre">Nuevo nombre:</label>
                        <input type="text" name="nuevo_nombre" placeholder="No. Indicador_Año">
                        <br>
                        <input type="submit" value="Subir PDF" name="subirpdf">
                    </form>
                    </br>
				</form>
				<form method="POST" enctype="multipart/form-data" >
					<p>
						<h6 class="display-15">5.2.2. Programa o documento de adaptación y mitigación al cambio climático</h6></p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels522 = [
								'a) Acta de cabildo que muestre que fue aprobado.',
								'b) Diagnóstico de impacto del cambio climático en el municipio.',
								'c) Identifica acciones puntuales de mitigación.',
								'd) Identifica acciones puntuales de adaptación.',
								'e) Tiene identificadas fuentes de financiamiento para ejecutar acciones de adaptación y mitigación ante el cambio climático.',
								'f) Señala una progresividad y continuidad de las acciones en el corto, mediano y largo plazo.',
								'g) Gaceta en donde fue publicado conforme a la legislación estatal.',
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames522[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check522']; $i++) {
									${"opcion{$i}_form{$valueCheckNames522[$i]}"} = $_SESSION[$valueCheckNames522[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check522']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames522[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames522[$i] ?>" value="<?= $valueCheckNames522[$i] ?>" <?php if ($checkboxesDeshabilitadosForm4) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels522[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="522" value="" class="btn btn-success" <?php if ($botonDeshabilitado4) echo "disabled"; ?>>Evaluar</button>
						</div>
						
						<?php echo isset($alert522) ? $alert522 : ''; ?>
					</div>
				
                    <form action="5MedioAmbiente.php" method="post" enctype="multipart/form-data">

                        <input type="file" name="pdf_file" id="pdf_file">
                        <br>
                        <label for="nuevo_nombre">Nuevo nombre:</label>
                        <input type="text" name="nuevo_nombre" placeholder="No. Indicador_Año">
                        <br>
                        <input type="submit" value="Subir PDF" name="subirpdf">
                    </form>
                    </br>
				</form>
				<form method="POST" enctype="multipart/form-data" >
					<p>
						<h6 class="display-15">5.2.3 Acciones del municipio para disminuir la vulnerabilidad ante el cambio climático</h6></p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels523 = [
								'a) Lista de acciones municipales mencionadas en el atlas nacional o estatal o municipal de vulnerabilidad.',
								'b) Mapa de riesgos que incluye la información del atlas nacional o estatal o municipal de vulnerabilidad.',
								'c) Lista de proyectos para disminuir las vulnerabilidades identificadas.',
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames523[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check523']; $i++) {
									${"opcion{$i}_form{$valueCheckNames523[$i]}"} = $_SESSION[$valueCheckNames523[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check523']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames523[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames523[$i] ?>" value="<?= $valueCheckNames523[$i] ?>" <?php if ($checkboxesDeshabilitadosForm5) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels523[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="523" value="" class="btn btn-success" <?php if ($botonDeshabilitado5) echo "disabled"; ?>>Evaluar</button>
						</div>
						
						<?php echo isset($alert523) ? $alert523 : ''; ?>
					</div>
				
                    <form action="5MedioAmbiente.php" method="post" enctype="multipart/form-data">

                        <input type="file" name="pdf_file" id="pdf_file">
                        <br>
                        <label for="nuevo_nombre">Nuevo nombre:</label>
                        <input type="text" name="nuevo_nombre" placeholder="No. Indicador_Año">
                        <br>
                        <input type="submit" value="Subir PDF" name="subirpdf">
                    </form>
                    </br>
				</form>
				<form method="POST" enctype="multipart/form-data" >
					<p>
						<h6 class="display-15">5.2.4 Edificaciones</h6></p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels524 = [
								'a) Actualización al Reglamento de Construcción Municipal en los últimos cinco años, a partir de su publicación.',
								'b) Reglamento de Construcción Municipal que considere la NOM-008-ENER-2001 Eficiencia energética en edificaciones, envolvente de edificios no residenciales',
								'c) Reglamento de Construcción Municipal que considere la NOM-020-ENER-2011. Eficiencia energética en edificaciones, envolvente de edificios para su uso habitacional',
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames524[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check524']; $i++) {
									${"opcion{$i}_form{$valueCheckNames524[$i]}"} = $_SESSION[$valueCheckNames524[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check524']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames524[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames524[$i] ?>" value="<?= $valueCheckNames524[$i] ?>" <?php if ($checkboxesDeshabilitadosForm6) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels524[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="524" value="" class="btn btn-success" <?php if ($botonDeshabilitado6) echo "disabled"; ?>>Evaluar</button>
						</div>
						
						<?php echo isset($alert524) ? $alert524 : ''; ?>
					</div>
				
                    <form action="5MedioAmbiente.php" method="post" enctype="multipart/form-data">

                        <input type="file" name="pdf_file" id="pdf_file">
                        <br>
                        <label for="nuevo_nombre">Nuevo nombre:</label>
                        <input type="text" name="nuevo_nombre" placeholder="No. Indicador_Año">
                        <br>
                        <input type="submit" value="Subir PDF" name="subirpdf">
                    </form>
                    </br>
				</form>
			</div>
		</div>
	</div>
	</div>
	</div>
</br>
	

        
		<!--Tema 3 -- Contraloría-->

		<div class="jumbotron">
			<p>
				<h2 class="display-7">5.3 Servicios públicos
sustentables</h2></p>
			<hr class="my-2">
			<br>
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
						<h6 class="display-15">5.3.1. Eficiencia en servicio de agua potable</h6></p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels531 = [
								'a) Consumo de energía (kWh) y presupuesto erogado (monto) para mantener el servicio de agua potable y tratamiento de aguas residuales en los últimos dos años.',
								'b) Diagnóstico energético del sistema de bombeo de agua potable y planta de aguas residuales.',
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames531[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check531']; $i++) {
									${"opcion{$i}_form{$valueCheckNames531[$i]}"} = $_SESSION[$valueCheckNames531[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check531']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames531[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames531[$i] ?>" value="<?= $valueCheckNames531[$i] ?>" <?php if ($checkboxesDeshabilitadosForm7) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels531[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="531" value="" class="btn btn-success" <?php if ($botonDeshabilitado7) echo "disabled"; ?>>Evaluar</button>
						</div>
						
						<?php echo isset($alert531) ? $alert531 : ''; ?>
					</div>
				
                    <form action="5MedioAmbiente.php" method="post" enctype="multipart/form-data">

                        <input type="file" name="pdf_file" id="pdf_file">
                        <br>
                        <label for="nuevo_nombre">Nuevo nombre:</label>
                        <input type="text" name="nuevo_nombre" placeholder="No. Indicador_Año">
                        <br>
                        <input type="submit" value="Subir PDF" name="subirpdf">
                    </form>
                    </br>
				</form>
				<form method="POST" enctype="multipart/form-data" >
					<p>
						<h6 class="display-15">5.3.2. Eficiencia en Alumbrado público</h6></p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels532 = [
								'a) Diagnóstico del alumbrado público en el que identifique cobertura y tipo de energía utilizada.',
								'b) Lista de acciones de sustitución de equipos existentes por tecnologías eficientes.',
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames532[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check532']; $i++) {
									${"opcion{$i}_form{$valueCheckNames532[$i]}"} = $_SESSION[$valueCheckNames532[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check532']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames532[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames532[$i] ?>" value="<?= $valueCheckNames532[$i] ?>" <?php if ($checkboxesDeshabilitadosForm8) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels532[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="532" value="" class="btn btn-success" <?php if ($botonDeshabilitado8) echo "disabled"; ?>>Evaluar</button>
						</div>
						
						<?php echo isset($alert532) ? $alert532 : ''; ?>
					</div>
				
                    <form action="5MedioAmbiente.php" method="post" enctype="multipart/form-data">

                        <input type="file" name="pdf_file" id="pdf_file">
                        <br>
                        <label for="nuevo_nombre">Nuevo nombre:</label>
                        <input type="text" name="nuevo_nombre" placeholder="No. Indicador_Año">
                        <br>
                        <input type="submit" value="Subir PDF" name="subirpdf">
                    </form>
                    </br>
				</form>
				<form method="POST" enctype="multipart/form-data" >
					<p>
						<h6 class="display-15">5.3.3 Mejora en el uso de la flota vehicular del municipio</h6></p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels533 = [
								'a) Padrón de los vehículos que integran la flota vehicular del municipio.',
							'b) Consumo de combustible (litros) y presupuesto erogado (gasolinas) para mantener la flota vehicular del municipio en los últimos doce meses.',
							'c) Acciones de capacitación en temas de ahorro de combustibles dirigida a los operadores de las unidades que integran la flota vehicular del municipio.',
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames533[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check533']; $i++) {
									${"opcion{$i}_form{$valueCheckNames533[$i]}"} = $_SESSION[$valueCheckNames533[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check533']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames533[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames533[$i] ?>" value="<?= $valueCheckNames533[$i] ?>" <?php if ($checkboxesDeshabilitadosForm9) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels533[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="533" value="" class="btn btn-success" <?php if ($botonDeshabilitado9) echo "disabled"; ?>>Evaluar</button>
						</div>
						
						<?php echo isset($alert533) ? $alert533 : ''; ?>
					</div>
				
                    <form action="5MedioAmbiente.php" method="post" enctype="multipart/form-data">

                        <input type="file" name="pdf_file" id="pdf_file">
                        <br>
                        <label for="nuevo_nombre">Nuevo nombre:</label>
                        <input type="text" name="nuevo_nombre" placeholder="No. Indicador_Año">
                        <br>
                        <input type="submit" value="Subir PDF" name="subirpdf">
                    </form>
                    </br>
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

					<h6 class="display-15">5.3.4. Abatimiento del costo promedio por luminaria</h6>
					<hr class="my-2">
					<p>Método de cálculo:
							((Costo promedio por luminaria del año evaluado – costo promedio por luminaria en el año previo al
							evaluado) / costo promedio por luminaria en el año previo al evaluado) * -100</p>
						<?php

							$labels534 = [
								'Costo promedio por luminaria en el año previo al evaluado.',
								'Costo promedio por luminaria en el año evaluado',
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
								<input type="number" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm1) echo "disabled"; ?> required><span><?= $labels534[$index] ?></span>
							</label>
						<?php endforeach; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="534" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado10) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert534) ? $alert534 : ''; ?>
			
					</div>
				
                    <form action="5MedioAmbiente.php" method="post" enctype="multipart/form-data">

                        <input type="file" name="pdf_file" id="pdf_file">
                        <br>
                        <label for="nuevo_nombre">Nuevo nombre:</label>
                        <input type="text" name="nuevo_nombre" placeholder="No. Indicador_Año">
                        <br>
                        <input type="submit" value="Subir PDF" name="subirpdf">
                    </form>
                    </br>
				</form>
			</div>
		</div>
	</div>
	</div>
	</div></br>
			


			
	<?php include("../Includes/footer.php"); ?>