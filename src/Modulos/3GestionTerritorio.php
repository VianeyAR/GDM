<?php include("../Includes/header.php"); ?>

<?php 
	// Inicia la sesión
	include("../../bd.php");
	//session_unset();
	include("../../funciones.php");
	$alerta = '';


if (isset($_POST['registrarNuevoFormulario'])) {

		$alerta = '<div class="alert alert-success" role="alert">
									Nuevo	Formulario.
							</div>';
							
		//habiltar checkbox
		// Inicializar un array con los nombres de las variables
		$checkNames = ['checkDisabled1',
		 			'checkDisabled2',
					'checkDisabled3',
		   			'checkDisabled4',
		    		'checkDisabled5',
		    		'checkDisabled6',
			 		'checkDisabled7',
			  		'checkDisabled8',
			   		'checkDisabled9',
					'checkDisabled10',
					'checkDisabled11',
					'checkDisabled12',
					'checkDisabled13',
					'checkDisabled14'];
		// Establecer todas las variables de sesión a true
		foreach ($checkNames as $checkName) {
				$_SESSION[$checkName] = false;
		}
		// habilitar inputs
		// Inicializar un array con los nombres de las variables
		$inputNames = ['inputDisabled1', 'inputDisabled2', 'inputDisabled3'];

		// Recorrer el array y asignar los valores a las variables
		foreach ($inputNames as $inputName) {
				$_SESSION[$inputName] = false;
		}
		// habilitar boton
		// Inicializar un array con los nombres de las variables
		$botonNames = ['deshabilitarBoton1',
		'deshabilitarBoton2',
		'deshabilitarBoton3',
		'deshabilitarBoton4',
		'deshabilitarBoton5',
		'deshabilitarBoton6',
		'deshabilitarBoton7',
		'deshabilitarBoton8',
		'deshabilitarBoton9',
		'deshabilitarBoton10',
		'deshabilitarBoton11',
		'deshabilitarBoton12',
		'deshabilitarBoton13', 
		'deshabilitarBoton14', 
		'deshabilitarBoton15',
		'deshabilitarBoton16',
		'deshabilitarBoton17'];

		// Recorrer el array y asignar los valores a las variables
		foreach ($botonNames as $botonName) {
			$_SESSION[$botonName] = false;
		}


}

//deshabiltar checkbox
// Inicializar un array con los nombres de las variables
$checkNames = ['checkDisabled1',
 					'checkDisabled2',
 					'checkDisabled3',
		   			'checkDisabled4',
		    		'checkDisabled5',
		    		'checkDisabled6',
			 		'checkDisabled7',
			  		'checkDisabled8',
			   		'checkDisabled9',
					'checkDisabled10',
					'checkDisabled11',
					'checkDisabled12',
					'checkDisabled13',
					'checkDisabled14'
];

// Recorrer el array y asignar los valores a las variables
foreach ($checkNames as $index => $checkName) {
    ${"checkboxesDeshabilitadosForm" . ($index + 1)} = $_SESSION[$checkName] ?? true;
}

// deshabilitar inputs
// Inicializar un array con los nombres de las variables
$inputNames = ['inputDisabled1', 'inputDisabled2', 'inputDisabled3'];

// Recorrer el array y asignar los valores a las variables
foreach ($inputNames as $index => $inputName) {
    ${"inputsDeshabilitadosForm" . ($index + 1)} = $_SESSION[$inputName] ?? true;
}
// deshabilitar boton
// Inicializar un array con los nombres de las variables
$botonNames = ['deshabilitarBoton1',
		'deshabilitarBoton2',
		'deshabilitarBoton3',
		'deshabilitarBoton4',
		'deshabilitarBoton5',
		'deshabilitarBoton6',
		'deshabilitarBoton7',
		'deshabilitarBoton8',
		'deshabilitarBoton9',
		'deshabilitarBoton10',
		'deshabilitarBoton11',
		'deshabilitarBoton12',
		'deshabilitarBoton13', 
		'deshabilitarBoton14', 
		'deshabilitarBoton15',
		'deshabilitarBoton16',
		'deshabilitarBoton17'];
// Recorrer el array y asignar los valores a las variables
foreach ($botonNames as $index => $botonName) {
	${"botonDeshabilitado" . ($index + 1)} = $_SESSION[$botonName] ?? true;
}
// valores checkboxes
// Inicializar un array con los nombres de las variables

$opciones = [
		'check311' => 6, // Último número de cada grupo de checkboxes
		'check312' => 3,
		'check313' => 3,

		'check321' => 5,
		'check322' => 6,
		'check323' => 2,

		'check331' => 10,
		'check332' => 5,
		'check333' => 3,
		'check334' => 4,
		'check335' => 4,

		'check341' => 6,
		'check342' => 3,
		'check343' => 5
];

$valueCheckNames311 = [
	'check3111', 'check3112', 'check3113', 'check3114', 'check3115', 'check3116'
];
$valueCheckNames312 = [
	'check3121', 'check3122', 'check3123'
];
$valueCheckNames313 = [
	'check3131', 'check3132', 'check3133', 
];


$valueCheckNames321 = [
	'check3211', 'check3212', 'check3213', 'check3214', 'check3215'
];
$valueCheckNames322 = [
	'check3211', 'check3212', 'check3213', 'check3214', 'check3215', 'check3216' 
];
$valueCheckNames323 = [
	'check3231', 'check3232' 
];


$valueCheckNames331 = [
	'check3311', 'check3312', 'check3313', 'check3314', 'check3315', 'check3316', 'check3317', 'check3318', 'check3319', 'check33110'
];
$valueCheckNames332 = [
	'check3321', 'check3322', 'check3323', 'check3324', 'check3325'
];
$valueCheckNames333 = [
	'check3331', 'check3332', 'check3333' 
];
$valueCheckNames334 = [
	'check3341', 'check3342', 'check3343', 'check3344' 
];
$valueCheckNames335 = [
	'check3351', 'check3352', 'check3353', 'check3354' 
];



$valueCheckNames341 = [
	'check3411', 'check3412', 'check3413', 'check3414', 'check3415', 'check3416'
];
$valueCheckNames342 = [
	'check3421', 'check3422', 'check3423' 
];
$valueCheckNames343 = [
	'check3431', 'check3432', 'check3433', 'check3434', 'check3435' 
];


// Crear variables dinámicas
for ($i = 0; $i < $opciones['check311']; $i++) {
	${"opcion{$i}_form{$valueCheckNames311[$i]}"} = $_SESSION[$valueCheckNames311[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check312']; $i++) {
	${"opcion{$i}_form{$valueCheckNames312[$i]}"} = $_SESSION[$valueCheckNames312[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check313']; $i++) {
	${"opcion{$i}_form{$valueCheckNames313[$i]}"} = $_SESSION[$valueCheckNames313[$i]] ?? false;
}


// Crear variables dinámicas
for ($i = 0; $i < $opciones['check321']; $i++) {
	${"opcion{$i}_form{$valueCheckNames321[$i]}"} = $_SESSION[$valueCheckNames321[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check322']; $i++) {
	${"opcion{$i}_form{$valueCheckNames322[$i]}"} = $_SESSION[$valueCheckNames322[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check323']; $i++) {
	${"opcion{$i}_form{$valueCheckNames323[$i]}"} = $_SESSION[$valueCheckNames323[$i]] ?? false;
}


// Crear variables dinámicas
for ($i = 0; $i < $opciones['check331']; $i++) {
	${"opcion{$i}_form{$valueCheckNames331[$i]}"} = $_SESSION[$valueCheckNames331[$i]] ?? false;
}
for ($i = 0; $i < $opciones['check332']; $i++) {
	${"opcion{$i}_form{$valueCheckNames332[$i]}"} = $_SESSION[$valueCheckNames332[$i]] ?? false;
}
for ($i = 0; $i < $opciones['check333']; $i++) {
	${"opcion{$i}_form{$valueCheckNames333[$i]}"} = $_SESSION[$valueCheckNames333[$i]] ?? false;
}
for ($i = 0; $i < $opciones['check334']; $i++) {
	${"opcion{$i}_form{$valueCheckNames334[$i]}"} = $_SESSION[$valueCheckNames334[$i]] ?? false;
}
for ($i = 0; $i < $opciones['check335']; $i++) {
	${"opcion{$i}_form{$valueCheckNames335[$i]}"} = $_SESSION[$valueCheckNames335[$i]] ?? false;
}



// Crear variables dinámicas
for ($i = 0; $i < $opciones['check341']; $i++) {
	${"opcion{$i}_form{$valueCheckNames341[$i]}"} = $_SESSION[$valueCheckNames341[$i]] ?? false;
}
for ($i = 0; $i < $opciones['check342']; $i++) {
	${"opcion{$i}_form{$valueCheckNames342[$i]}"} = $_SESSION[$valueCheckNames342[$i]] ?? false;
}
for ($i = 0; $i < $opciones['check343']; $i++) {
	${"opcion{$i}_form{$valueCheckNames343[$i]}"} = $_SESSION[$valueCheckNames343[$i]] ?? false;
}

// valores inputs
$variableNames = [
	'form1' => ['txtNombre3141', 'txtNombre3142', 'txtNombre3143', 'txtNombre3144', 'txtNombre3145', 'txtNombre3146', 'txtNombre3147'],
	'form2' => ['txtNombre3241', 'txtNombre3242', 'txtNombre3243', 'txtNombre3244', 'txtNombre3245'],
	'form3' => ['txtNombre3361', 'txtNombre3362']

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
	'alert311', 'alert312', 'alert313', 'alert314', 'alert215',
	'alert321', 'alert322', 'alert323', 'alert324', 
	'alert331', 'alert332', 'alert333', 'alert334', 'alert335', 'alert336',
	'alert341', 'alert342', 'alert343'
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

	$querySelect = mysqli_query($conexion, "SELECT * FROM `formulario` f INNER JOIN modulo m ON f.id_formulario = m.id_formulario WHERE f.fecha = '$nuevafecha' and m.modulo = 'Hacienda'");
	
	if (!mysqli_fetch_assoc($querySelect)) {
		$idFormulario = registrarFormularioNuevo($fechaCompleta, $fechaActual, $nuevafecha);
		$idModulo = registrarModulo($idFormulario, 'Gestión del Territorio');
		$idTema1 = registrarTema($idModulo, "3.1 Planeación urbana");
		$_SESSION['idTema1'] = $idTema1;
		$idTema2 = registrarTema($idModulo, "3.2 Ordenamiento ecológico");
		$_SESSION['idTema2'] = $idTema2;
		$idTema3 = registrarTema($idModulo, "3.3 Protección civil");
		$_SESSION['idTema3'] = $idTema3;
		$idTema4 = registrarTema($idModulo, "3.4 Coordinación urbana");
		$_SESSION['idTema4'] = $idTema4;

		$enunciados1 = $_SESSION['enunciados1'];
		$valor_checkbox1 = $_SESSION['valorcheck1'];
		registrarIndicadoresCheckboxes($valueCheckNames311, $valor_checkbox1, $enunciados1, $idTema1, '3.1.1 Plan o Programa de Desarrollo Urbano Municipal (PDU).', 1);
		$enunciados2 = $_SESSION['enunciados2'];
		$valor_checkbox2 = $_SESSION['valorcheck2'];
		registrarIndicadoresCheckboxes($valueCheckNames312, $valor_checkbox2, $enunciados2, $idTema1, '3.1.2 Emisión de licencias de construcción', 1);
		$enunciados3 = $_SESSION['enunciados3'];
		$valor_checkbox3 = $_SESSION['valorcheck3'];
		registrarIndicadoresCheckboxes($valueCheckNames313, $valor_checkbox3, $enunciados3, $idTema1, '3.1.3 Unidad responsable de la planeación urbana', 1);
		$enunciados4 = $_SESSION['enunciados4'];
		$valor_input1 = $_SESSION['valorinput1'];
		registrarIndicadoresInputs($valor_input1, $enunciados4, $idTema1, "3.1.4 Índice de Planeación Urbana", 7);
		
		
		$enunciados5 = $_SESSION['enunciados5'];
		$valor_checkbox4 = $_SESSION['valorcheck4'];
		registrarIndicadoresCheckboxes($valueCheckNames321, $valor_checkbox4, $enunciados5, $idTema2, '3.2.1 Reglamento o lineamientos municipales del ordenamiento ecológico local.', 1);
		$enunciados6 = $_SESSION['enunciados6'];
		$valor_checkbox5 = $_SESSION['valorcheck5'];
		registrarIndicadoresCheckboxes($valueCheckNames322, $valor_checkbox4, $enunciados6, $idTema2, '3.2.2 Programa de Ordenamiento Ecológico Local', 1);
		$enunciados7 = $_SESSION['enunciados7'];
		$valor_checkbox6 = $_SESSION['valorcheck6'];
		registrarIndicadoresCheckboxes($valueCheckNames323, $valor_checkbox4, $enunciados7, $idTema2, '3.2.3 Acciones para la implementación del Ordenamiento Ecológico.', 1);
		$enunciados8 = $_SESSION['enunciados8'];
		$valor_input2 = $_SESSION['valorinput2'];
		registrarIndicadoresInputs($valor_input2, $enunciados8, $idTema2, "3.2.4 Índice de ordenamiento ecológico", 5);
		
		
		$enunciados9 = $_SESSION['enunciados9'];
		$valor_checkbox7 = $_SESSION['valorcheck7'];
		registrarIndicadoresCheckboxes($valueCheckNames331, $valor_checkbox7, $enunciados9, $idTema3, '3.3.1 Reglamento de Protección Civil', 1);
		$enunciados10 = $_SESSION['enunciados10'];
		$valor_checkbox8 = $_SESSION['valorcheck8'];
		registrarIndicadoresCheckboxes($valueCheckNames332, $valor_checkbox8, $enunciados10, $idTema3, '3.3.2 Unidad de protección civil', 1);
		$enunciados11 = $_SESSION['enunciados11'];
		$valor_checkbox9 = $_SESSION['valorcheck9'];
		registrarIndicadoresCheckboxes($valueCheckNames333, $valor_checkbox9, $enunciados11, $idTema3, '3.3.3 Consejo Municipal de Protección Civil', 1);        
		$enunciados12 = $_SESSION['enunciados12'];
		$valor_checkbox10 = $_SESSION['valorcheck10'];
		registrarIndicadoresCheckboxes($valueCheckNames334, $valor_checkbox10, $enunciados12, $idTema3, '3.3.4 Atlas municipal de riesgos', 1);
		$enunciados13 = $_SESSION['enunciados13'];
		$valor_checkbox11 = $_SESSION['valorcheck11'];
		registrarIndicadoresCheckboxes($valueCheckNames335, $valor_checkbox11, $enunciados13, $idTema3, '3.3.5 Programa Municipal de Protección Civil', 1);
		$enunciados14 = $_SESSION['enunciados14'];
		$valor_input3 = $_SESSION['valorinput3'];
		registrarIndicadoresInputs($valor_input3, $enunciados14, $idTema3, "3.3.6 Tasa de crecimiento de asentamientos humanos en zonas de riesgo.)", 2);
		
		
		$enunciados15 = $_SESSION['enunciados15'];
		$valor_checkbox12 = $_SESSION['valorcheck12'];
		registrarIndicadoresCheckboxes($valueCheckNames341, $valor_checkbox12, $enunciados15, $idTema4, '3.4.1 Diagnóstico de la zona metropolitan', 1);
		$enunciados16 = $_SESSION['enunciados16'];
		$valor_checkbox13 = $_SESSION['valorcheck13'];
		registrarIndicadoresCheckboxes($valueCheckNames342, $valor_checkbox13, $enunciados16, $idTema4, '3.4.2 Gobernanza metropolitana', 1);
		$enunciados17 = $_SESSION['enunciados17'];
		$valor_checkbox14 = $_SESSION['valorcheck14'];
		registrarIndicadoresCheckboxes($valueCheckNames343, $valor_checkbox14, $enunciados17, $idTema4, '3.4.3 Programa de la zona metropolitana', 1);
		
		 
	}


}

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (isset($_POST['311'])) {
		$checkboxesDeshabilitadosForm1 = true;
		$_SESSION['checkDisabled1'] = $checkboxesDeshabilitadosForm1;
		$botonDeshabilitado1 = true;
		$_SESSION['deshabilitarBoton1'] = $botonDeshabilitado1;
		$count = 0;
		$valor_checkbox1 = array();
		foreach ($valueCheckNames311 as $index => $name) {
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
			'a) Zonificación de los centros de población ubicados en todo el territorio municipal, cabecera municipal y localidades.',
			'b) Estrategias de conservación, mejoramiento y crecimiento de centros de población.',
			'c) Mencione sanciones administrativas a los infractores del marco normativo en la materia.',
			'd) Gaceta estatal en la que fue publicado el PDU o su actualización, con fecha no mayor a cinco años de antigüedad.',
			'e) Comprobante de inscripción del PDU o su actualización en el Registro Público de la Propiedad, con fecha no mayor a cinco años y medio de antigüedad.',
			'f) Documento que valide la congruencia del PDU o su actualización con la planeación urbana estatal; ejemplo: dictamen de congruencia emitido por la dependencia responsable de la planeación urbana del gobierno estatal.',
		];
		$_SESSION['enunciados1'] = $enunciados;
		

		// Evaluar el estado general del formulario
		$alert311 = evaluarEstadoAlertaCheck($count, 6);
		$_SESSION['alert311'] = $alert311;

	
	} elseif (isset($_POST['312'])) {
    $checkboxesDeshabilitadosForm2 = true;
		$_SESSION['checkDisabled2'] = $checkboxesDeshabilitadosForm2;
		$botonDeshabilitado2 = true;
		$_SESSION['deshabilitarBoton2'] = $botonDeshabilitado2;
		$count = 0;
		$valor_checkbox2 = array();
		foreach ($valueCheckNames312 as $index  => $name) {
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
			'a) Documento que describa el procedimiento para la emisión de licencias de construcción, que señale claramente responsables y tiempos.',
			'b) Documento que describa el procedimiento de solicitud y conexión al servicio de agua potable y drenaje o equivalente.',
			'c) Esquema de verificación del uso del inmueble, respecto a la licencia emitida.',
		];
		$_SESSION['enunciados2'] = $enunciados;
		$alert312 = evaluarEstadoAlertaCheck($count, 3);
		$_SESSION['alert312'] = $alert312;

 
	} elseif (isset($_POST['313'])) {
		$checkboxesDeshabilitadosForm3 = true;
		$_SESSION['checkDisabled3'] = $checkboxesDeshabilitadosForm3;
		$botonDeshabilitado3 = true;
		$_SESSION['deshabilitarBoton3'] = $botonDeshabilitado3;
		$count = 0;
		$valor_checkbox3 = array();
		foreach ($valueCheckNames313 as $index => $name) {
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
			'a) Comprobante de estudios, que muestre el perfil profesional del titular de la unidad de planeación urbana municipal.',
			'b) Constancia de experiencia laboral del titular de la Unidad responsable de la planeación urbana municipal.',
			'c) Constancia de capacitación del titular de la Unidad Administrativa de la planeación urbana municipal (con una fecha de antigüedad no mayor a 12 meses).',
		];
		$_SESSION['enunciados3'] = $enunciados;
		$alert313 = evaluarEstadoAlertaCheck($count, 3);
		$_SESSION['alert313'] = $alert313;

	
	} elseif (isset($_POST['314'])) {

		//314
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form1'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form1_value"} = $_POST[$fieldName] ?? '';
		}
		$_SESSION['txtNombre3141'] = $opcion1_form1_value;
		$_SESSION['txtNombre3142'] = $opcion2_form1_value;
		$_SESSION['txtNombre3143'] = $opcion3_form1_value;
		$_SESSION['txtNombre3144'] = $opcion4_form1_value;
		$_SESSION['txtNombre3145'] = $opcion5_form1_value;
		$_SESSION['txtNombre3146'] = $opcion6_form1_value;
		$_SESSION['txtNombre3147'] = $opcion7_form1_value;
		
		// Verifica si el denominador es 0 antes de realizar la división
		
				// Calcula el porcentaje
				$porcentaje = 
				($opcion1_form1_value * 20)+
				($opcion2_form1_value * 10)+
				($opcion3_form1_value * 20)+
				($opcion4_form1_value * 20)+
				($opcion5_form1_value * 10)+
				($opcion6_form1_value * 10)+
				($opcion7_form1_value * 10);

				// Evalúa el porcentaje y determina el estado
				if ($porcentaje >= 80) {
						$estado = 'Optimo';
				} elseif ($porcentaje < 80 && $porcentaje >= 50) {
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
							'X1= Zonificación de la cabecera municipal y localidades.',
							'X2= Estrategias de conservación, mejoramiento y crecimiento',
							'X3= Gaceta estatal con publicación del PDU o su actualización.',
							'X4= Comprobante de inscripción del PDU o actualización en el RPP.',
							'X5= Esquema de verificación del uso del inmueble, respecto a la licencia emitida.',
							'X6= Constancia de experiencia laboral del titular',
							'X7= Constancia de capacitación del titular'
				];
				$_SESSION['enunciados4'] = $enunciados;
				$valor_input1 = [
					$opcion1_form1_value,
					$opcion2_form1_value,
					$opcion3_form1_value,
					$opcion4_form1_value,
					$opcion5_form1_value,
					$opcion6_form1_value,
					$opcion7_form1_value
				];
				$_SESSION['valorinput1'] = $valor_input1;
	

		
		$alert314 = evaluarEstadoAlertaInputs($estadoGeneral);
		$_SESSION['alert314'] = $alert314;

	
	
	
	
	
	


	} elseif (isset($_POST['321'])) {
		$checkboxesDeshabilitadosForm4 = true;
		$_SESSION['checkDisabled4'] = $checkboxesDeshabilitadosForm4;
		$botonDeshabilitado5 = true;
		$_SESSION['deshabilitarBoton5'] = $botonDeshabilitado5;
		$count = 0;
		$valor_checkbox4 = array();
		foreach ($valueCheckNames321 as $index => $name) {
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
			'a) Verificar la constitución y el funcionamiento del órgano ejecutivo y técnico de los comités de POEL.',
			'b) Verificar que la bitácora ambiental incluye las minutas del comité ejecutivo y técnico y los resultados de las evaluaciones de la ejecución del Programa.',
			'c) Revisar que los resultados cumplan con el reglamento de la LGEEPA en materia de ordenamiento.',
			'd) Modificar el Programa de Ordenamiento Ecológico.',
			'e) Gaceta estatal o municipal en la que fue publicado el reglamento o lineamientos municipales del ordenamiento ecológico local.',
		];
		$_SESSION['enunciados5'] = $enunciados;
		$alert321 = evaluarEstadoAlertaCheck($count, 5);
		$_SESSION['alert321'] = $alert321;

	
	} elseif (isset($_POST['322'])) {
		$checkboxesDeshabilitadosForm5 = true;
		$_SESSION['checkDisabled5'] = $checkboxesDeshabilitadosForm5;
		$botonDeshabilitado6 = true;
		$_SESSION['deshabilitarBoton6'] = $botonDeshabilitado6;
		$count = 0;
		$valor_checkbox5 = array();
		foreach ($valueCheckNames322 as $index => $name) {
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
			'a) Caracterización del territorio de ordenamiento ecológico local.',
			'b) Identificación de problemas ambientales en el diagnóstico del territorio de ordenamiento.',
			'c) Formulación del pronóstico del ordenamiento ecológico local.',
			'd) Evidencia de la participación ciudadana en su proceso de elaboración (listas de asistencia, minutas con acuerdos o relación de compromisos).',
			'e) Gaceta municipal o estatal con la publicación o actualización del “Programa de Ordenamiento Ecológico Local” con una antigüedad no mayor a cinco años.',
			'f) Documento en donde se encuentre el reporte y evaluación para el seguimiento al ordenamiento ecológico con información del año en curso.'
		];
		$_SESSION['enunciados6'] = $enunciados;
		$alert322 = evaluarEstadoAlertaCheck($count, 6);
		$_SESSION['alert322'] = $alert322;




	} elseif (isset($_POST['323'])) {
		$checkboxesDeshabilitadosForm6 = true;
		$_SESSION['checkDisabled6'] = $checkboxesDeshabilitadosForm6;
		$botonDeshabilitado7 = true;
		$_SESSION['deshabilitarBoton7'] = $botonDeshabilitado7;
		$count = 0;
		$valor_checkbox6 = array();
		foreach ($valueCheckNames323 as $index => $name) {
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
			'a) Bitácora Ambiental (local) con información correspondiente al año en curso.',
			'b) Informe de actividades, firmado por el titular de la instancia responsable y con información del año en curso.'
		];
		$_SESSION['enunciados7'] = $enunciados;
		$alert323 = evaluarEstadoAlertaCheck($count, 2);
		$_SESSION['alert323'] = $alert323;



	} elseif (isset($_POST['324'])) {

		//324
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form2'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form2_value"} = $_POST[$fieldName] ?? '';
		}
		$_SESSION['txtNombre3241'] = $opcion1_form2_value;
		$_SESSION['txtNombre3242'] = $opcion2_form2_value;
		$_SESSION['txtNombre3243'] = $opcion3_form2_value;
		$_SESSION['txtNombre3244'] = $opcion4_form2_value;
		$_SESSION['txtNombre3245'] = $opcion5_form2_value;
	
		
		// Verifica si el denominador es 0 antes de realizar la división
		
				// Calcula el porcentaje
				$porcentaje = 
				($opcion1_form2_value * 20)+
				($opcion2_form2_value * 20)+
				($opcion3_form2_value * 20)+
				($opcion4_form2_value * 20)+
				($opcion5_form2_value * 20);
				

				// Evalúa el porcentaje y determina el estado
				if ($porcentaje >= 80) {
						$estado = 'Optimo';
				} elseif ($porcentaje < 80 && $porcentaje >= 40) {
						$estado = 'En Proceso';
				} else {
						$estado = 'Rezago';
				}
				$inputsDeshabilitadosForm2 = true;
				$_SESSION['inputDisabled2'] = $inputsDeshabilitadosForm2;
				$botonDeshabilitado8 = true;
				$_SESSION['deshabilitarBoton8'] = $botonDeshabilitado8;
				$estadoGeneral = $estado;

				$enunciados = [
					'X1= Reglamento o lineamientos de ordenamiento ecológico local.',
					'X2= Identificación de problemas ambientales.',
					'X3= Formulación del pronóstico del ordenamiento ecológico local.',
					'X4= Bitácora Ambiental.',
					'X5= Informe de actividades.'
				];
				$_SESSION['enunciados8'] = $enunciados;
				$valor_input2 = [
					$opcion1_form2_value,
					$opcion2_form2_value,
					$opcion3_form2_value,
					$opcion4_form2_value,
					$opcion5_form2_value,
					
				];
				$_SESSION['valorinput1'] = $valor_input2;
	

		
		$alert324 = evaluarEstadoAlertaInputs($estadoGeneral);
		$_SESSION['alert324'] = $alert324;





	} elseif (isset($_POST['331'])) {
		$checkboxesDeshabilitadosForm7 = true;
		$_SESSION['checkDisabled7'] = $checkboxesDeshabilitadosForm7;
		$botonDeshabilitado9 = true;
		$_SESSION['deshabilitarBoton9'] = $botonDeshabilitado9;
		$count = 0;
		$valor_checkbox7 = array();
		foreach ($valueCheckNames331 as $index => $name) {
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
		$_SESSION['enunciados9'] = $enunciados;
		$alert331 = evaluarEstadoAlertaCheck($count, 10);
		$_SESSION['alert331'] = $alert331;


	} elseif (isset($_POST['332'])) {
		$checkboxesDeshabilitadosForm8 = true;
		$_SESSION['checkDisabled8'] = $checkboxesDeshabilitadosForm8;
		$botonDeshabilitado10 = true;
		$_SESSION['deshabilitarBoton10'] = $botonDeshabilitado10;
		$count = 0;
		$valor_checkbox8 = array();
		foreach ($valueCheckNames332 as $index => $name) {
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
			'a) Organigrama de la administración en funciones',
			'b) Manual de organización de la unidad de protección civil.',
			'c) Nombramiento oficial del titular de la unidad de protección civil.',
			'd) Constancia(s) de experiencia laboral del titular de la unidad de protección civil con mínimo tres
			años de experiencia.',
			'e) Constancia de capacitación del titular de la unidad de protección civil (con una fecha de
			antigüedad no mayor a 12 meses)',
		
		];
		$_SESSION['enunciados10'] = $enunciados;
		$alert332 = evaluarEstadoAlertaCheck($count, 5);
		$_SESSION['alert332'] = $alert332;



	} elseif (isset($_POST['333'])) {
		$checkboxesDeshabilitadosForm9 = true;
		$_SESSION['checkDisabled9'] = $checkboxesDeshabilitadosForm9;
		$botonDeshabilitado11 = true;
		$_SESSION['deshabilitarBoton11'] = $botonDeshabilitado11;
		$count = 0;
		$valor_checkbox9 = array();
		foreach ($valueCheckNames333 as $index => $name) {
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
			'a) Acta de instalación del Consejo Municipal de Protección Civil, firmada por todos los miembros que integran dicho consejo.',
			'b) Acta(s) de reunión(es) del año en curso, firmadas por los asistentes.',
			'c) Acta del año en curso con acciones que disminuyen el riesgo ante el cambio climático.'
		];
		$_SESSION['enunciados11'] = $enunciados;
		$alert333 = evaluarEstadoAlertaCheck($count, 3);
		$_SESSION['alert333'] = $alert333;

	
	
	} elseif (isset($_POST['334'])) {
		$checkboxesDeshabilitadosForm10 = true;
		$_SESSION['checkDisabled10'] = $checkboxesDeshabilitadosForm10;
		$botonDeshabilitado12 = true;
		$_SESSION['deshabilitarBoton12'] = $botonDeshabilitado12;
		$count = 0;
		$valor_checkbox10 = array();
		foreach ($valueCheckNames334 as $index => $name) {
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
			'a) Mapa que identifique por fenómeno las zonas en donde hay riesgo respecto a un fenómeno con intensidad máxima, media o mínima.',
			'b) Georreferenciado en los sistemas de información geográfica (SIG).',
			'c) Documento que señale que fue elaborado conforme a las normas cromáticas para su elaboración por el Centro Nacional de Prevención de Desastres (CENAPRED).',
			'd) Publicado conforme lo establezca la normatividad estatal o municipal.'
		];
		$_SESSION['enunciados12'] = $enunciados;
		$alert334 = evaluarEstadoAlertaCheck($count, 4);
		$_SESSION['alert334'] = $alert334;

	
	
	} elseif (isset($_POST['335'])) {
		$checkboxesDeshabilitadosForm11 = true;
		$_SESSION['checkDisabled11'] = $checkboxesDeshabilitadosForm11;
		$botonDeshabilitado13 = true;
		$_SESSION['deshabilitarBoton13'] = $botonDeshabilitado13;
		$count = 0;
		$valor_checkbox11 = array();
		foreach ($valueCheckNames335 as $index => $name) {
			// Verificar si el checkbox está marcado
			if (isset($_POST[$name])) {
					// El checkbox está marcado, puedes hacer lo que necesites con el valor
					$valor_checkbox11[$index] = $_POST[$name];
					$_SESSION[$name] = true;
					$count = $count + 1;
			} else {
				$valor_checkbox11[$index] = "";
					$_SESSION[$name] = false;
			}
		}
		$_SESSION['valorcheck11'] = $valor_checkbox11;
		$enunciados = [
			'a) Alineación con los objetivos del Plan Estatal y Municipal de Desarrollo',
			'b) Objetivos, estrategias, líneas de acción, acciones y metas',
			'c) Acciones para disminuir la ocupación de suelo en zonas de riesgo',
			'd) Lista de obras para la reducción y mitigación de riesgos.'
		];
		$_SESSION['enunciados13'] = $enunciados;
		$alert335 = evaluarEstadoAlertaCheck($count, 4);
		$_SESSION['alert335'] = $alert335;


	} elseif (isset($_POST['336'])) {

		//116
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form3'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form3_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre3361'] = $opcion1_form3_value;
		$_SESSION['txtNombre3362'] = $opcion2_form3_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion2_form3_value != 0) {
			// Calcula el porcentaje
			$porcentaje = ($opcion1_form3_value / $opcion2_form3_value) * 100;
		
		
			// Evalúa el porcentaje y determina el estado
			if ($porcentaje > 0) {
				$estado = 'Optimo';
			} elseif ($porcentaje = 0 && $porcentaje < 0) {
				$estado = 'En Proceso';
			} else {
				$estado = 'Rezago';
			}
			$inputsDeshabilitadosForm3 = true;
			$_SESSION['inputDisabled3'] = $inputsDeshabilitadosForm3;
			$botonDeshabilitado14 = true;
			$_SESSION['deshabilitarBoton14'] = $botonDeshabilitado14;
			$estadoGeneral = $estado;

			$enunciados = [
				'Extensión territorial (km2) de zonas de riesgo ocupadas por asentamientos humanos en el año previo al evaluado.',
				'Extensión territorial (km2) de zonas de riesgo ocupadas por asentamientos humanos en el año evaluado.',
			];
			$_SESSION['enunciados14'] = $enunciados;
			$valor_input3 = [
				$opcion1_form3_value,
				$opcion2_form3_value,
			];
			$_SESSION['valorinput3'] = $valor_input3;
		} else {
			$estadoGeneral = 'Error: División por 0';
		}

		$alert336 = evaluarEstadoAlertaInputs($estadoGeneral);
		$_SESSION['alert336'] = $alert336;








	} elseif (isset($_POST['341'])) {
		$checkboxesDeshabilitadosForm12 = true;
		$_SESSION['checkDisabled12'] = $checkboxesDeshabilitadosForm12;
		$botonDeshabilitado15 = true;
		$_SESSION['deshabilitarBoton15'] = $botonDeshabilitado15;
		$count = 0;
		$valor_checkbox12 = array();
		foreach ($valueCheckNames341 as $index => $name) {
			// Verificar si el checkbox está marcado
			if (isset($_POST[$name])) {
					// El checkbox está marcado, puedes hacer lo que necesites con el valor
					$valor_checkbox12[$index] = $_POST[$name];
					$_SESSION[$name] = true;
					$count = $count + 1;
			} else {
				$valor_checkbox12[$index] = "";
					$_SESSION[$name] = false;
			}
		}
		$_SESSION['valorcheck12'] = $valor_checkbox12;
		$enunciados = [
			'a) Identificación de los municipios que conforman la zona metropolitana donde se localiza el municipio, de acuerdo con el Sistema Urbano Nacional (SUN).',
			'b) Principales características demográficas de la zona metropolitana donde se localiza el municipio.',
			'c) Documento con una reseña del marco normativo de las zonas metropolitanas, que integre mínimo: Ley general de Asentamientos Humanos, Ordenamiento Territorial y Desarrollo Urbano; Ley de Desarrollo Urbano Estatal y Plan o Programa de Desarrollo Urbano Municipal.',
			'd) Estudio que señale qué servicios públicos se ofrecerían de manera más eficiente si se contara con una estrategia metropolitana.',
			'e) Identificación de la cuenca hidrológica en donde se localiza el municipio y la zona metropolitana.',
			'f) Lista de espacios públicos con infraestructura verde instalados en el municipio.'
		];
		$_SESSION['enunciados15'] = $enunciados;
		$alert341 = evaluarEstadoAlertaCheck($count, 6);
		$_SESSION['alert341'] = $alert341;





	} elseif (isset($_POST['342'])) {
		$checkboxesDeshabilitadosForm13 = true;
		$_SESSION['checkDisabled13'] = $checkboxesDeshabilitadosForm13;
		$botonDeshabilitado16 = true;
		$_SESSION['deshabilitarBoton16'] = $botonDeshabilitado16;
		$count = 0;
		$valor_checkbox13 = array();
		foreach ($valueCheckNames342 as $index => $name) {
			// Verificar si el checkbox está marcado
			if (isset($_POST[$name])) {
					// El checkbox está marcado, puedes hacer lo que necesites con el valor
					$valor_checkbox13[$index] = $_POST[$name];
					$_SESSION[$name] = true;
					$count = $count + 1;
			} else {
				$valor_checkbox13[$index] = "";
					$_SESSION[$name] = false;
			}
		}
		$_SESSION['valorcheck13'] = $valor_checkbox13;
		$enunciados = [
			'a) Documento que formalice la participación del municipio en un consejo o comisión con los municipios de la zona metropolitana.',
			'b) Reglamento o Lineamientos de consejo o comisión de la zona metropolitana.',
			'c) Convenio de colaboración en materia ambiental con al menos un municipio de la zona metropolitana.'
		
		];
		$_SESSION['enunciados16'] = $enunciados;
		$alert342 = evaluarEstadoAlertaCheck($count, 3);
		$_SESSION['alert342'] = $alert342;



	} elseif (isset($_POST['343'])) {
		$checkboxesDeshabilitadosForm14 = true;
		$_SESSION['checkDisabled14'] = $checkboxesDeshabilitadosForm14;
		$botonDeshabilitado17 = true;
		$_SESSION['deshabilitarBoton17'] = $botonDeshabilitado17;
		$count = 0;
		$valor_checkbox14 = array();
		foreach ($valueCheckNames343 as $index => $name) {
			// Verificar si el checkbox está marcado
			if (isset($_POST[$name])) {
					// El checkbox está marcado, puedes hacer lo que necesites con el valor
					$valor_checkbox14[$index] = $_POST[$name];
					$_SESSION[$name] = true;
					$count = $count + 1;
			} else {
				$valor_checkbox14[$index] = "";
					$_SESSION[$name] = false;
			}
		}
		$_SESSION['valorcheck14'] = $valor_checkbox14;
		$enunciados = [
			'a) Estrategia para el desarrollo integral de la Zona Metropolitana.',
			'b) Delimitación de los centros de población con espacios geográficos de reserva para una expansión ordenada a largo plazo, que considere estimaciones técnicas del crecimiento',
			'c) Políticas e instrumentos para la reestructuración, localización, mejoramiento de la infraestructura y los equipamientos del ámbito metropolitano.',
			'd) Previsiones y acciones prioritarias para conservar, proteger, acrecentar y mejorar el espacio público',
			'e) Metodología o indicadores para dar seguimiento y evaluar la aplicación y el cumplimiento de los objetivos del programa de la Zona Metropolitana.'
		];
		$_SESSION['enunciados17'] = $enunciados;
		$alert343 = evaluarEstadoAlertaCheck($count, 5);
		$_SESSION['alert343'] = $alert343;



	
	
	}
}
?>


    <!--Enlaces de los stilo CSS -->

	<!--<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />-->
	<link rel="stylesheet" href="../../assets/css/modulos.css" />

	<div class="d-flex justify-content-between">
		<div class="btn-group" role="group" aria-label="">
		<form method="POST" enctype="multipart/form-data">
        <button type="submit" name="registrarNuevoFormulario" value="" class="btn btn-success">Registro nuevo</button>
		</form>
			
    </div>
		<div class="btn-group" role="group" aria-label="">
		<form method="POST" enctype="multipart/form-data">
        <button type="submit" name="guardarFormulario" value="" class="btn btn-success">Guardar</button>
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
								<button type="submit" name="312" value="" class="btn btn-success" <?php if ($botonDeshabilitado2) echo "disabled"; ?>>Guardar</button>
							</div>
							<?php echo isset($alert312) ? $alert312 : ''; ?>
							<!--Salto de parrafo 2.1.2-->
						</div>

						<h6 class="display-15">3.1.3 Unidad responsable de la planeación urbana</h6></p>
						<hr class="my-2">
						<div class="form-group">
						<?php
				
						$labels313 = [
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
							'X7= Constancia de capacitación del titular'
						];

						$valoresForm1 = [
							$opcion1_form1_value ?? '',
							$opcion2_form1_value ?? '',
							$opcion3_form1_value ?? '',
							$opcion4_form1_value ?? '',
							$opcion5_form1_value ?? '',
							$opcion6_form1_value ?? '',
							$opcion7_form1_value ?? ''
							
							
						];

						foreach ($variableNames['form1'] as $index => $fieldName) {
							${"opcion" . ($index + 1) . "_form1_value"} = $_SESSION[$fieldName] ?? '';
						}
						?>

						<?php foreach($variableNames['form1'] as $index => $fieldName) : ?>
							<?php $valor_variable = ${"opcion" . ($index + 1) . "_form1_value"}; ?>
							<label for="<?= $fieldName ?>" class="text1">
								<input type="number" class="form-control" name="<?= $fieldName ?>" id="<?= $fieldName ?>" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm1) echo "disabled"; ?> required>
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
							<button type="submit" name="321" value="" class="btn btn-success" <?php if ($botonDeshabilitado5) echo "disabled"; ?>>Guardar</button>
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
							<button type="submit" name="322" value="" class="btn btn-success" <?php if ($botonDeshabilitado6) echo "disabled"; ?>>Guardar</button>
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
								<button type="submit" name="323" value="" class="btn btn-success" <?php if ($botonDeshabilitado7) echo "disabled"; ?>>Guardar</button>
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
							
						];

						foreach ($variableNames['form2'] as $index => $fieldName) {
							${"opcion" . ($index + 1) . "_form2_value"} = $_SESSION[$fieldName] ?? '';
						}
						?>

						<?php foreach($variableNames['form2'] as $index => $fieldName) : ?>
							<?php $valor_variable = ${"opcion" . ($index + 1) . "_form2_value"}; ?>
							<label for="<?= $fieldName ?>" class="text1">
								<input type="number" class="form-control" name="<?= $fieldName ?>" id="<?= $fieldName ?>" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm2) echo "disabled"; ?> required>
								<span><?= $labels324[$index] ?></span>
							</label>
						<?php endforeach; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="324" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado8) echo "disabled"; ?>>Guardar</button>
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
								<button type="submit" name="331" value="" class="btn btn-success" <?php if ($botonDeshabilitado9) echo "disabled"; ?>>Guardar</button>
							</div>
							<?php echo isset($alert331) ? $alert331 : ''; ?>
							<!--Salto de parrafo 2.1.2-->
						</div>


						<h6 class="display-15">3.3.2 Unidad de protección civil</h6></p>
						<hr class="my-2">
						<div class="form-group">
						<?php
						
						$labels332 = [
							'a) Organigrama de la administración en funciones',
							'b) Manual de organización de la unidad de protección civil.',
							'c) Nombramiento oficial del titular de la unidad de protección civil.',
							'd) Constancia(s) de experiencia laboral del titular de la unidad de protección civil con mínimo tres
							años de experiencia.',
							'e) Constancia de capacitación del titular de la unidad de protección civil (con una fecha de
							antigüedad no mayor a 12 meses)',
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
								<button type="submit" name="332" value="" class="btn btn-success" <?php if ($botonDeshabilitado10) echo "disabled"; ?>>Guardar</button>
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
								<button type="submit" name="333" value="" class="btn btn-success" <?php if ($botonDeshabilitado11) echo "disabled"; ?>>Guardar</button>
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
											<input type="checkbox" name="<?= $valueCheckNames334[$i] ?>" value="<?= $valueCheckNames334[$i] ?>" <?php if ($checkboxesDeshabilitadosForm10) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
											<?= $labels334[$i] ?>
									</label><br>
							<?php endfor; ?>
	
							<div class="btn-group" role="group" aria-label="">
									<button type="submit" name="334" value="" class="btn btn-success" <?php if ($botonDeshabilitado12) echo "disabled"; ?>>Guardar</button>
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
										<input type="checkbox" name="<?= $valueCheckNames335[$i] ?>" value="<?= $valueCheckNames335[$i] ?>" <?php if ($checkboxesDeshabilitadosForm11) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels335[$i] ?>
								</label><br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="335" value="" class="btn btn-success" <?php if ($botonDeshabilitado13) echo "disabled"; ?>>Guardar</button>
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

							$valoresForm3 = [
								$opcion1_form3_value ?? '',
								$opcion2_form3_value ?? '',
							];

							foreach ($variableNames['form3'] as $index => $fieldName) {
								${"opcion" . ($index + 1) . "_form3_value"} = $_SESSION[$fieldName] ?? '';
							}
							?>

							<?php foreach($variableNames['form3'] as $index => $fieldName) : ?>
								<?php $valor_variable = ${"opcion" . ($index + 1) . "_form3_value"}; ?>
								<label for="<?= $fieldName ?>" class="text1">
									<input type="text" class="form-control" name="<?= $fieldName ?>" id="<?= $fieldName ?>" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm3) echo "disabled"; ?> required>
									<span><?= $labels336[$index] ?></span>
								</label>
							<?php endforeach; ?>

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="336" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado14) echo "disabled"; ?>>Guardar</button>
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
											<input type="checkbox" name="<?= $valueCheckNames341[$i] ?>" value="<?= $valueCheckNames341[$i] ?>" <?php if ($checkboxesDeshabilitadosForm12) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
											<?= $labels341[$i] ?>
									</label><br>
							<?php endfor; ?>
	
							<div class="btn-group" role="group" aria-label="">
									<button type="submit" name="341" value="" class="btn btn-success" <?php if ($botonDeshabilitado15) echo "disabled"; ?>>Guardar</button>
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
									<input type="checkbox" name="<?= $valueCheckNames342[$i] ?>" value="<?= $valueCheckNames342[$i] ?>" <?php if ($checkboxesDeshabilitadosForm13) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
									<?= $labels342[$i] ?>
							</label><br>
					<?php endfor; ?>

					<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="342" value="" class="btn btn-success" <?php if ($botonDeshabilitado16) echo "disabled"; ?>>Guardar</button>
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
									<input type="checkbox" name="<?= $valueCheckNames343[$i] ?>" value="<?= $valueCheckNames343[$i] ?>" <?php if ($checkboxesDeshabilitadosForm14) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
									<?= $labels343[$i] ?>
							</label><br>
					<?php endfor; ?>

					<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="343" value="" class="btn btn-success" <?php if ($botonDeshabilitado17) echo "disabled"; ?>>Guardar</button>
						</div>
						<?php echo isset($alert343) ? $alert343 : ''; ?>
						<!--Salto de parrafo 2.1.2-->
					</div>

				</form>
			
			</div>
		</div>
	</div>
	</div>
	</div></br>




		
	<?php include("../Includes/footer.php"); ?>