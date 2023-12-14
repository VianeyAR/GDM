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

	$querySelect = mysqli_query($conexion, "SELECT * FROM `formulario` f INNER JOIN modulo m ON f.id_formulario = m.id_formulario WHERE f.fecha = '$nuevafecha' and m.modulo = 'Desarrollo Económico'");
	
	if (!mysqli_fetch_assoc($querySelect)) {

		$alerta = '<div class="alert alert-success" role="alert">
									Nuevo	Formulario.
							</div>';
							
		//habiltar checkbox
		// Inicializar un array con los nombres de las variables
		$checkNames = ['checkDisabled1', 'checkDisabled2', 'checkDisabled3', 'checkDisabled4', 'checkDisabled5', 'checkDisabled6', 'checkDisabled7', 'checkDisabled8'];
		
		// Establecer todas las variables de sesión a true
		foreach ($checkNames as $checkName) {
				$_SESSION[$checkName] = false;
		}
		// habilitar inputs
		// Inicializar un array con los nombres de las variables
		$inputNames = ['inputDisabled1', 'inputDisabled2'];
		
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
	$checkNames = ['checkDisabled1', 'checkDisabled2', 'checkDisabled3', 'checkDisabled4', 'checkDisabled5', 'checkDisabled6', 'checkDisabled7', 'checkDisabled8'];
	
	// Recorrer el array y asignar los valores a las variables
	foreach ($checkNames as $index => $checkName) {
	${"checkboxesDeshabilitadosForm" . ($index + 1)} = $_SESSION[$checkName] ?? true;
	}
	
	// deshabilitar inputs
	// Inicializar un array con los nombres de las variables
	$inputNames = ['inputDisabled1', 'inputDisabled2'];
	
	// Recorrer el array y asignar los valores a las variables
	foreach ($inputNames as $index => $inputName) {
	${"inputsDeshabilitadosForm" . ($index + 1)} = $_SESSION[$inputName] ?? true;
	}
	// deshabilitar boton
	// Inicializar un array con los nombres de las variables
	$botonNames = ['deshabilitarBoton1', 'deshabilitarBoton2', 'deshabilitarBoton3', 'deshabilitarBoton4', 'deshabilitarBoton5', 'deshabilitarBoton6', 'deshabilitarBoton7', 'deshabilitarBoton8', 'deshabilitarBoton9', 'deshabilitarBoton10' ];
	// Recorrer el array y asignar los valores a las variables
	foreach ($botonNames as $index => $botonName) {
	${"botonDeshabilitado" . ($index + 1)} = $_SESSION[$botonName] ?? true;
	}
	// valores checkboxes
	// Inicializar un array con los nombres de las variables
	
	$opciones = [
	'check711' => 7, // Último número de cada grupo de checkboxes
	'check712' => 5,
	'check713' => 3,
	'check721' => 5,
	'check722' => 5,
	'check731' => 3,
	'check732' => 4,
	'check733' => 3,
	];
	
	$valueCheckNames711 = [
	'check7111', 'check7112', 'check7113', 'check7114', 'check7115', 'check7116', 'check7117'
	];
	$valueCheckNames712 = [
	'check7121', 'check7122', 'check7123', 'check7124', 'check7125',
	];
	$valueCheckNames713 = [
	'check7131', 'check7132', 'check7133', 
	];
	$valueCheckNames721 = [
	'check7211', 'check7212', 'check7213', 'check7214', 'check7215'
	];
	$valueCheckNames722 = [
		'check7221', 'check7222', 'check7223', 'check7224', 'check7225'
		];
	$valueCheckNames731 = [
	'check7311', 'check7312', 'check7313', 
	];
	$valueCheckNames732 = [
	'check7321', 'check7322', 'check7323', 'check7324'
	];
	$valueCheckNames733 = [
	'check7331', 'check7332' , 'check7333'
	];
	// Crear variables dinámicas
	for ($i = 0; $i < $opciones['check711']; $i++) {
	${"opcion{$i}_form{$valueCheckNames711[$i]}"} = $_SESSION[$valueCheckNames711[$i]] ?? false;
	}
	// Crear variables dinámicas
	for ($i = 0; $i < $opciones['check712']; $i++) {
	${"opcion{$i}_form{$valueCheckNames712[$i]}"} = $_SESSION[$valueCheckNames712[$i]] ?? false;
	}
	// Crear variables dinámicas
	for ($i = 0; $i < $opciones['check713']; $i++) {
	${"opcion{$i}_form{$valueCheckNames713[$i]}"} = $_SESSION[$valueCheckNames713[$i]] ?? false;
	}
	// Crear variables dinámicas
	for ($i = 0; $i < $opciones['check721']; $i++) {
	${"opcion{$i}_form{$valueCheckNames721[$i]}"} = $_SESSION[$valueCheckNames721[$i]] ?? false;
	}
	// Crear variables dinámicas
	for ($i = 0; $i < $opciones['check722']; $i++) {
	${"opcion{$i}_form{$valueCheckNames722[$i]}"} = $_SESSION[$valueCheckNames722[$i]] ?? false;
	}
	// Crear variables dinámicas
	for ($i = 0; $i < $opciones['check731']; $i++) {
	${"opcion{$i}_form{$valueCheckNames731[$i]}"} = $_SESSION[$valueCheckNames731[$i]] ?? false;
	}
	// Crear variables dinámicas
	for ($i = 0; $i < $opciones['check732']; $i++) {
	${"opcion{$i}_form{$valueCheckNames732[$i]}"} = $_SESSION[$valueCheckNames732[$i]] ?? false;
	}
	// Crear variables dinámicas
	for ($i = 0; $i < $opciones['check733']; $i++) {
	${"opcion{$i}_form{$valueCheckNames733[$i]}"} = $_SESSION[$valueCheckNames733[$i]] ?? false;
	}

	// valores inputs
	$variableNames = [
	'form1' => ['txtNombre7141', 'txtNombre7142'],
	'form2' => ['txtNombre7231', 'txtNombre7232'],
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
	'alert711', 'alert717', 'alert713','alert714',
	'alert721', 'alert722', 'alert723', 
	'alert731', 'alert732', 'alert733',
	];
	
	foreach ($alerts as $index => $alert) {
	${$alert} = $_SESSION[$alert] ?? '';
	}

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
	
		$querySelect = mysqli_query($conexion, "SELECT * FROM `formulario` f INNER JOIN modulo m ON f.id_formulario = m.id_formulario WHERE f.fecha = '$nuevafecha' and m.modulo = 'Desarrollo Económico'");
		
		if (!mysqli_fetch_assoc($querySelect)) {
			$idFormulario = registrarFormularioNuevo($fechaCompleta, $fechaActual, $nuevafecha);
			$idModulo = registrarModulo($idFormulario, 'Desarrollo Económico');
			$idTema1 = registrarTema($idModulo, "7.1 Mejora regulatoria");
			$_SESSION['idTema1'] = $idTema1;
			$idTema2 = registrarTema($idModulo, "7.2 Vocación productiva");
			$_SESSION['idTema2'] = $idTema2;
			$idTema3 = registrarTema($idModulo, "7.3 Fomento económico");
			$_SESSION['idTema3'] = $idTema3;
	
			$enunciados1 = $_SESSION['enunciados1'];
			$valor_checkbox1 = $_SESSION['valorcheck1'];
			registrarIndicadoresCheckboxes($valueCheckNames711, $valor_checkbox1, $enunciados1, $idTema1, '7.1.1 Reglamento publicado del Consejo Municipal de Mejora Regulatoria, con lasatribuciones siguientes:', 1);
			$enunciados2 = $_SESSION['enunciados2'];
			$valor_checkbox2 = $_SESSION['valorcheck2'];
			registrarIndicadoresCheckboxes($valueCheckNames712, $valor_checkbox2, $enunciados2, $idTema1, '7.1.2 Consejo Municipal de Mejora Regulatoria', 1);
			$enunciados3 = $_SESSION['enunciados3'];
			$valor_checkbox3 = $_SESSION['valorcheck3'];
			registrarIndicadoresCheckboxes($valueCheckNames713, $valor_checkbox3, $enunciados3, $idTema1, '7.1.3 Apertura de una unidad económica de bajo riesgo', 1);
			$enunciados4 = $_SESSION['enunciados4'];
			$valor_input1 = $_SESSION['valorinput1'];
			registrarIndicadoresInputs($valor_input1, $enunciados4, $idTema1, "7.1.4 Atracción y retención de inversión de todas las actividades económicas existentes", 2);
			$enunciados5 = $_SESSION['enunciados5'];
			$valor_checkbox4 = $_SESSION['valorcheck4'];
			registrarIndicadoresCheckboxes($valueCheckNames721, $valor_checkbox4, $enunciados5, $idTema2, '7.2.1 Diagnóstico del sector:', 1);
			$enunciados6 = $_SESSION['enunciados6'];
			$valor_checkbox5 = $_SESSION['valorcheck5'];
			registrarIndicadoresCheckboxes($valueCheckNames722, $valor_checkbox5, $enunciados6, $idTema2, '7.2.2 Programa de fomento del sector:', 1);
			$enunciados7 = $_SESSION['enunciados7'];
			$valor_input2 = $_SESSION['valorinput2'];
			registrarIndicadoresInputs($valor_input2, $enunciados7, $idTema2, "7.2.3 Atracción y retención de inversión en el sector:", 2);
			$enunciados8 = $_SESSION['enunciados8'];
			$valor_checkbox6 = $_SESSION['valorcheck6'];
			registrarIndicadoresCheckboxes($valueCheckNames731, $valor_checkbox6, $enunciados8, $idTema3, '7.3.1 Reglamento de desarrollo económico, con las atribuciones siguientes:', 1);
			$enunciados9 = $_SESSION['enunciados9'];
			$valor_checkbox7 = $_SESSION['valorcheck7'];
			registrarIndicadoresCheckboxes($valueCheckNames732, $valor_checkbox7, $enunciados9, $idTema3, '7.3.2 Programa municipal de fomento económico', 1);
			$enunciados10 = $_SESSION['enunciados10'];
			$valor_checkbox8 = $_SESSION['valorcheck8'];
			registrarIndicadoresCheckboxes($valueCheckNames733, $valor_checkbox8, $enunciados10, $idTema3, '7.3.3 Vinculación para el fomento económico', 1);
			
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

		if (isset($_POST['711'])) {
			$checkboxesDeshabilitadosForm1 = true;
			$_SESSION['checkDisabled1'] = $checkboxesDeshabilitadosForm1;
			$botonDeshabilitado1 = true;
			$_SESSION['deshabilitarBoton1'] = $botonDeshabilitado1;
			$count = 0;
			$valor_checkbox1 = array();
			foreach ($valueCheckNames711 as $index => $name) {
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
				'a) Establecer bases y principios para la efectiva coordinación entre órganos de gobierno municipal.',
				'b) Definir mecanismos de suministro, intercambio, sistematización y actualización de información.',
				'c) Aprobar lineamientos administrativos, a propuesta de los integrantes de la Comisión.',
				'd) Conocer los informes e indicadores.',
				'e) Promover el uso de metodologías, instrumentos, programas nacionales e internacionales.',
				'f) Identificar problemáticas regulatorias que incidan en la competitividad o el desarrollo económico y social.',
				'g) Establecer lineamientos para el diseño, fundamentación y resolución de trámites y procedimientos administrativos.'
			];
			$_SESSION['enunciados1'] = $enunciados;
			
	
			// Evaluar el estado general del formulario
			$alert711 = evaluarEstadoAlertaCheck($count, 7);
			$_SESSION['alert711'] = $alert711;
	
		} elseif (isset($_POST['712'])) {
			$checkboxesDeshabilitadosForm2 = true;
			$_SESSION['checkDisabled2'] = $checkboxesDeshabilitadosForm2;
			$botonDeshabilitado2 = true;
			$_SESSION['deshabilitarBoton2'] = $botonDeshabilitado2;
			$count = 0;
			$valor_checkbox2 = array();
			foreach ($valueCheckNames712 as $index  => $name) {
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
				'a) Acta de instalación del Consejo Municipal de Mejora Regulatoria.',
				'b) Minutas de las sesiones del Consejo, firmadas y fechadas en el año en curso (mínimo dos minutas).',
				'c) Las minutas están firmadas por un representante del sector privado.',
				'd) Las minutas están firmadas por un representante del sector social.',
				'e) Las minutas están firmadas por un representante del sector académico.'
			];
			$_SESSION['enunciados2'] = $enunciados;
			$alert712 = evaluarEstadoAlertaCheck($count, 5);
			$_SESSION['alert712'] = $alert712;
	
		} elseif (isset($_POST['713'])) {
			$checkboxesDeshabilitadosForm3 = true;
			$_SESSION['checkDisabled3'] = $checkboxesDeshabilitadosForm3;
			$botonDeshabilitado3 = true;
			$_SESSION['deshabilitarBoton3'] = $botonDeshabilitado3;
			$count = 0;
			$valor_checkbox3 = array();
			foreach ($valueCheckNames713 as $index => $name) {
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
				'a) Decreto por medio del cual se crea la “ventanilla única”.',
				'b) Procedimiento para la apertura de la unidad económica, avalada por Cabildo.',
				'c) Acciones de difusión del procedimiento entre la ciudadanía.'
			];
			$_SESSION['enunciados3'] = $enunciados;
			$alert713 = evaluarEstadoAlertaCheck($count, 3);
			$_SESSION['alert713'] = $alert713;
	
		} elseif (isset($_POST['714'])) {
	
			//714
			// Obtén los valores de los campos de texto
			foreach ($variableNames['form1'] as $index => $fieldName) {
				${"opcion" . ($index + 1) . "_form1_value"} = $_POST[$fieldName] ?? '';
			}
			$_SESSION['txtNombre7141'] = $opcion1_form1_value;
			$_SESSION['txtNombre7142'] = $opcion2_form1_value;
			// Verifica si el denominador es 0 antes de realizar la división
			if ($opcion2_form1_value != 0) {
					// Calcula el porcentaje
					$porcentaje = ($opcion1_form1_value / $opcion2_form1_value) * 100;
	
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
					$botonDeshabilitado4 = true;
					$_SESSION['deshabilitarBoton4'] = $botonDeshabilitado4;
					$estadoGeneral = $estado;
	
					$enunciados = [
						'Número de unidades de todas las actividades económicas existentes en el año previo al evaluado.',
						'Número de unidades de todas las actividades económicas existentes en el año evaluado.',
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
	
			
			$alert714 = evaluarEstadoAlertaInputs($estadoGeneral);
			$_SESSION['alert714'] = $alert714;
	
		} elseif (isset($_POST['721'])) {
			$checkboxesDeshabilitadosForm4 = true;
			$_SESSION['checkDisabled4'] = $checkboxesDeshabilitadosForm4;
			$botonDeshabilitado5 = true;
			$_SESSION['deshabilitarBoton5'] = $botonDeshabilitado5;
			$count = 0;
			$valor_checkbox4 = array();
			foreach ($valueCheckNames721 as $index => $name) {
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
				'a) Estado que presenta el sector en su entidad federativa.',
				'b) Padrón de unidades en el año evaluado.',
				'c) Padrón de unidades en el año previo al evaluado.',
				'd) Detección de las principales demandas del sector.',
				'e) Análisis de las causas del cierre y apertura de unidades de dicho sector.',
			];
			$_SESSION['enunciados5'] = $enunciados;
			$alert721 = evaluarEstadoAlertaCheck($count, 5);
			$_SESSION['alert721'] = $alert721;
	
		} elseif (isset($_POST['722'])) {
			$checkboxesDeshabilitadosForm5 = true;
			$_SESSION['checkDisabled5'] = $checkboxesDeshabilitadosForm5;
			$botonDeshabilitado6 = true;
			$_SESSION['deshabilitarBoton6'] = $botonDeshabilitado6;
			$count = 0;
			$valor_checkbox5 = array();
			foreach ($valueCheckNames722 as $index => $name) {
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
				'a) Objetivo(s).',
				'b) Metas por año.',
				'c) Líneas de acción.',
				'd) Esquema de coordinación y vinculación.',
				'e) Calendario de actividades del año en curso.',
			];
			$_SESSION['enunciados6'] = $enunciados;
			$alert722 = evaluarEstadoAlertaCheck($count, 5);
			$_SESSION['alert722'] = $alert722;
	
		} elseif (isset($_POST['723'])) {
	
			//723
			// Obtén los valores de los campos de texto
			foreach ($variableNames['form2'] as $index => $fieldName) {
				${"opcion" . ($index + 1) . "_form2_value"} = $_POST[$fieldName] ?? '';
			}
	
			$_SESSION['txtNombre7231'] = $opcion1_form2_value;
			$_SESSION['txtNombre7232'] = $opcion2_form2_value;
			// Verifica si el denominador es 0 antes de realizar la división
			if ($opcion2_form2_value != 0) {
				// Calcula el porcentaje
				$porcentaje = ($opcion1_form2_value / $opcion2_form2_value) * 100;
			
				// Evalúa el porcentaje y determina el estado
				if ($porcentaje > 0) {
					$estado = 'Optimo';
				} elseif ($porcentaje = 0) {
					$estado = 'En Proceso';
				} else {
					$estado = 'Rezago';
				}
	
				$inputsDeshabilitadosForm2 = true;
				$_SESSION['inputDisabled2'] = $inputsDeshabilitadosForm2;
				$botonDeshabilitado7 = true;
				$_SESSION['deshabilitarBoton7'] = $botonDeshabilitado7;
				$estadoGeneral = $estado;
	
				$enunciados = [
					'Número de unidades del sector en el año previo al evaluado.',
					'Número de unidades del sector en el año evaluado.',
				];
				$_SESSION['enunciados7'] = $enunciados;
				$valor_input2 = [
					$opcion1_form2_value,
					$opcion2_form2_value,
				];
				$_SESSION['valorinput2'] = $valor_input2;
			} else {
				$estadoGeneral = 'Error: División por 0';
			}
			$alert723 = evaluarEstadoAlertaInputs($estadoGeneral);
			$_SESSION['alert723'] = $alert723;
	
		} elseif (isset($_POST['731'])) {
			$checkboxesDeshabilitadosForm6 = true;
			$_SESSION['checkDisabled6'] = $checkboxesDeshabilitadosForm6;
			$botonDeshabilitado8 = true;
			$_SESSION['deshabilitarBoton8'] = $botonDeshabilitado8;
			$count = 0;
			$valor_checkbox6 = array();
			foreach ($valueCheckNames731 as $index => $name) {
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
				'a) Promover la inversión productiva en el municipio a través de programas de incentivos, apoyos, orientación o difusión.',
				'b) Generar información estadística relativa a las actividades y capacidades productivas y comerciales en el municipio.',
				'c) Promover, gestionar y evaluar, en coordinación con las autoridades estatales o federales, el financiamiento de proyectos productivos.',
			];
			$_SESSION['enunciados8'] = $enunciados;
			$alert731 = evaluarEstadoAlertaCheck($count, 3);
			$_SESSION['alert731'] = $alert731;
	
		} elseif (isset($_POST['732'])) {
			$checkboxesDeshabilitadosForm7 = true;
			$_SESSION['checkDisabled7'] = $checkboxesDeshabilitadosForm7;
			$botonDeshabilitado9 = true;
			$_SESSION['deshabilitarBoton9'] = $botonDeshabilitado9;
			$count = 0;
			$valor_checkbox7 = array();
			foreach ($valueCheckNames732 as $index => $name) {
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
				'a) Personal capacitado para brindar servicios de información y asesoría.',
				'b) Estrategia de vinculación con sectores económicos e Instituciones de Educación Superior.',
				'c) Estrategia de especialización sectorial.',
				'd) Diagnóstico por sector',
			];
			$_SESSION['enunciados9'] = $enunciados;
			$alert732 = evaluarEstadoAlertaCheck($count, 4);
			$_SESSION['alert732'] = $alert732;
	
		} elseif (isset($_POST['733'])) {
			$checkboxesDeshabilitadosForm8 = true;
			$_SESSION['checkDisabled8'] = $checkboxesDeshabilitadosForm8;
			$botonDeshabilitado10 = true;
			$_SESSION['deshabilitarBoton10'] = $botonDeshabilitado10;
			$count = 0;
			$valor_check8 = array();
			foreach ($valueCheckNames733 as $index => $name) {
				// Verificar si el checkbox está marcado
				if (isset($_POST[$name])) {
						// El checkbox está marcado, puedes hacer lo que necesites con el valor
						$valor_check8[$index] = $_POST[$name];
						$_SESSION[$name] = true;
						$count = $count + 1;
				} else {
					$valor_check8[$index] = "";
						$_SESSION[$name] = false;
				}
			}
			$_SESSION['valorcheck8'] = $valor_check8;
			$enunciados = [
				'a) Convenio de colaboración vigente con por lo menos una Cámara o consejo empresarial municipal o regional, en materia económica.',
				'b) Convenio de colaboración vigente con por lo menos una institución de educación superior del municipio, estado o región, en materia económica.',
				'c) Convenio de colaboración vigente con por lo menos un municipio o estado, en materia económica.',
			];
			$_SESSION['enunciados10'] = $enunciados;
			$alert733 = evaluarEstadoAlertaCheck($count, 3);
			$_SESSION['alert733'] = $alert733;
	
		}
	}



?>

  <!--Enlaces de los stilo CSS -->

	<!--<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />-->
	<link rel="stylesheet" href="../../assets/css/modulos.css" />

	<img class="card-img-top" src="../../assets/img/DesarrolloEconomico.png"
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
		<h2 class="display-7">7.1 Mejora regulatoria</h2>
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
							<h6 class="display-15">7.1.1 Reglamento publicado del Consejo Municipal de Mejora Regulatoria, con lasatribuciones siguientes: </h6>
						</p>
						<hr class="my-2">

						<div class="form-group">
							
							<?php
								
								$labels711 = [
									'a) Establecer bases y principios para la efectiva coordinación entre órganos de gobierno municipal.',
									'b) Definir mecanismos de suministro, intercambio, sistematización y actualización de información.',
									'c) Aprobar lineamientos administrativos, a propuesta de los integrantes de la Comisión.',
									'd) Conocer los informes e indicadores.',
									'e) Promover el uso de metodologías, instrumentos, programas nacionales e internacionales.',
									'f) Identificar problemáticas regulatorias que incidan en la competitividad o el desarrollo económico y social.',
									'g) Establecer lineamientos para el diseño, fundamentación y resolución de trámites y procedimientos administrativos.'
								];

								if (isset($_POST['submit'])) {
									$idFormulario = $_POST['opciones'];
									$valor = editarCheckBox($idFormulario);
									
									for ($i = 0; $i < count($valor); $i++) {
										${"opcion{$i}_form{$valueCheckNames711[$i]}"} = $valor[$i];
									}
								} else {
									for ($i = 0; $i < $opciones['check711']; $i++) {
										${"opcion{$i}_form{$valueCheckNames711[$i]}"} = $_SESSION[$valueCheckNames711[$i]] ?? false;
									}
								}

							?>
							<?php for ($i = 0; $i < $opciones['check711']; $i++) : ?>
								<?php 
									$valor_variable = ${"opcion{$i}_form{$valueCheckNames711[$i]}"};
								?>
									<label>
											<input type="checkbox" name="<?= $valueCheckNames711[$i] ?>" value="<?= $valueCheckNames711[$i] ?>" <?php if ($checkboxesDeshabilitadosForm1) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
											<?= $labels711[$i] ?>
									</label>
									<br>
							<?php endfor; ?>

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="711" value="" class="btn btn-success" <?php if ($botonDeshabilitado1) echo "disabled"; ?>>Evaluar</button>
							</div>
							<?php echo isset($alert711) ? $alert711 : ''; ?>
						</div>
					
                    <form action="7DesarrolloEconomico.php" method="post" enctype="multipart/form-data">

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
							<h6 class="display-15">7.1.2 Consejo Municipal de Mejora Regulatoria </h6>
						</p>
						<hr class="my-2">

						<div class="form-group">
							
							<?php
								
								$labels712 = [
									'a) Acta de instalación del Consejo Municipal de Mejora Regulatoria.',
									'b) Minutas de las sesiones del Consejo, firmadas y fechadas en el año en curso (mínimo dos minutas).',
									'c) Las minutas están firmadas por un representante del sector privado.',
									'd) Las minutas están firmadas por un representante del sector social.',
									'e) Las minutas están firmadas por un representante del sector académico.'
								];

								if (isset($_POST['submit'])) {
									$idFormulario = $_POST['opciones'];
									$valor = editarCheckBox($idFormulario);
									
									for ($i = 0; $i < count($valor); $i++) {
										${"opcion{$i}_form{$valueCheckNames712[$i]}"} = $valor[$i];
									}
								} else {
									for ($i = 0; $i < $opciones['check712']; $i++) {
										${"opcion{$i}_form{$valueCheckNames712[$i]}"} = $_SESSION[$valueCheckNames712[$i]] ?? false;
									}
								}

							?>
							<?php for ($i = 0; $i < $opciones['check712']; $i++) : ?>
								<?php 
									$valor_variable = ${"opcion{$i}_form{$valueCheckNames712[$i]}"};
								?>
									<label>
											<input type="checkbox" name="<?= $valueCheckNames712[$i] ?>" value="<?= $valueCheckNames712[$i] ?>" <?php if ($checkboxesDeshabilitadosForm2) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
											<?= $labels712[$i] ?>
									</label>
									<br>
							<?php endfor; ?>

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="712" value="" class="btn btn-success" <?php if ($botonDeshabilitado2) echo "disabled"; ?>>Evaluar</button>
							</div>
							<?php echo isset($alert712) ? $alert712 : ''; ?>
						</div>
					
                    <form action="7DesarrolloEconomico.php" method="post" enctype="multipart/form-data">

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
							<h6 class="display-15">7.1.3 Apertura de una unidad económica de bajo riesgo</h6>
						</p>
						<hr class="my-2">

						<div class="form-group">
							
							<?php
								
								$labels713 = [
									'a) Decreto por medio del cual se crea la “ventanilla única”.',
									'b) Procedimiento para la apertura de la unidad económica, avalada por Cabildo.',
									'c) Acciones de difusión del procedimiento entre la ciudadanía.'
								];

								if (isset($_POST['submit'])) {
									$idFormulario = $_POST['opciones'];
									$valor = editarCheckBox($idFormulario);
									
									for ($i = 0; $i < count($valor); $i++) {
										${"opcion{$i}_form{$valueCheckNames713[$i]}"} = $valor[$i];
									}
								} else {
									for ($i = 0; $i < $opciones['check713']; $i++) {
										${"opcion{$i}_form{$valueCheckNames713[$i]}"} = $_SESSION[$valueCheckNames713[$i]] ?? false;
									}
								}

							?>
							<?php for ($i = 0; $i < $opciones['check713']; $i++) : ?>
								<?php 
									$valor_variable = ${"opcion{$i}_form{$valueCheckNames713[$i]}"};
								?>
									<label>
											<input type="checkbox" name="<?= $valueCheckNames713[$i] ?>" value="<?= $valueCheckNames713[$i] ?>" <?php if ($checkboxesDeshabilitadosForm3) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
											<?= $labels713[$i] ?>
									</label>
									<br>
							<?php endfor; ?>

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="713" value="" class="btn btn-success" <?php if ($botonDeshabilitado3) echo "disabled"; ?>>Evaluar</button>
							</div>
							<?php echo isset($alert713) ? $alert713 : ''; ?>
						</div>
					
                    <form action="7DesarrolloEconomico.php" method="post" enctype="multipart/form-data">

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

					<h6 class="display-15">7.1.4 Atracción y retención de inversión de todas las actividades económicas existentes</h6>
					<hr class="my-2">
					<p>Método de cálculo:
							((Número de unidades de todas las actividades económicas existentes en el año evaluado - número de
							unidades de todas las actividades económicas existentes en el año previo al evaluado) / número de
							unidades de todas las actividades económicas existentes en el año previo al evaluado) * 100</p>
						<?php

							$labels714 = [
								'Número de unidades de todas las actividades económicas existentes en el año previo al evaluado.',
								'Número de unidades de todas las actividades económicas existentes en el año evaluado.',
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
								<input type="number" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm1) echo "disabled"; ?> required><span><?= $labels714[$index] ?></span>
							</label>
						<?php endforeach; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="714" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado4) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert714) ? $alert714 : ''; ?>
			
					</div>
				
                    <form action="7DesarrolloEconomico.php" method="post" enctype="multipart/form-data">

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

	<!--Tema 2 -- Planeacion-->

	<div class="jumbotron">
			<h2 class="display-7">7.2 Vocación productiva</h2>
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
						<h6 class="display-15">7.2.1 Diagnóstico del sector:</h6>
					</p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels721 = [
								'a) Estado que presenta el sector en su entidad federativa.',
								'b) Padrón de unidades en el año evaluado.',
								'c) Padrón de unidades en el año previo al evaluado.',
								'd) Detección de las principales demandas del sector.',
								'e) Análisis de las causas del cierre y apertura de unidades de dicho sector.',
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames721[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check721']; $i++) {
									${"opcion{$i}_form{$valueCheckNames721[$i]}"} = $_SESSION[$valueCheckNames721[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check721']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames721[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames721[$i] ?>" value="<?= $valueCheckNames721[$i] ?>" <?php if ($checkboxesDeshabilitadosForm4) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels721[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="721" value="" class="btn btn-success" <?php if ($botonDeshabilitado5) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert721) ? $alert721 : ''; ?>
					</div>
				
                    <form action="7DesarrolloEconomico.php" method="post" enctype="multipart/form-data">

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
						<h6 class="display-15">7.2.2 Programa de fomento del sector:</h6>
					</p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels722 = [
								'a) Objetivo(s).',
								'b) Metas por año.',
								'c) Líneas de acción.',
								'd) Esquema de coordinación y vinculación.',
								'e) Calendario de actividades del año en curso.',
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames722[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check722']; $i++) {
									${"opcion{$i}_form{$valueCheckNames722[$i]}"} = $_SESSION[$valueCheckNames722[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check722']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames722[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames722[$i] ?>" value="<?= $valueCheckNames722[$i] ?>" <?php if ($checkboxesDeshabilitadosForm5) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels722[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="722" value="" class="btn btn-success" <?php if ($botonDeshabilitado6) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert722) ? $alert722 : ''; ?>
					</div>
				
                    <form action="7DesarrolloEconomico.php" method="post" enctype="multipart/form-data">

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

					<h6 class="display-15">7.2.3 Atracción y retención de inversión en el sector: </h6>
					<hr class="my-2">
					<p>Método de cálculo:
							((Número de unidades del sector en el año evaluado - Número de unidades del sector en el año previo al
							evaluado) / Número de unidades del sector en el año previo al evaluado) * 100</p>
						<?php

							$labels723 = [
								'Número de unidades del sector en el año previo al evaluado.',
								'Número de unidades del sector en el año evaluado.',
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
								<input type="number" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm2) echo "disabled"; ?> required><span><?= $labels723[$index] ?></span>
							</label>
						<?php endforeach; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="723" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado7) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert723) ? $alert723 : ''; ?>
			
					</div>
				
                    <form action="7DesarrolloEconomico.php" method="post" enctype="multipart/form-data">

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
				<h2 class="display-7">7.3 Fomento económico</h2>
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
							<h6 class="display-15">7.3.1 Reglamento de desarrollo económico, con las atribuciones siguientes:</h6>
						</p>
						<hr class="my-2">

						<div class="form-group">
							
							<?php
								
								$labels731 = [
									'a) Promover la inversión productiva en el municipio a través de programas de incentivos, apoyos, orientación o difusión.',
									'b) Generar información estadística relativa a las actividades y capacidades productivas y comerciales en el municipio.',
									'c) Promover, gestionar y evaluar, en coordinación con las autoridades estatales o federales, el financiamiento de proyectos productivos.',
								];

								if (isset($_POST['submit'])) {
									$idFormulario = $_POST['opciones'];
									$valor = editarCheckBox($idFormulario);
									
									for ($i = 0; $i < count($valor); $i++) {
										${"opcion{$i}_form{$valueCheckNames731[$i]}"} = $valor[$i];
									}
								} else {
									for ($i = 0; $i < $opciones['check731']; $i++) {
										${"opcion{$i}_form{$valueCheckNames731[$i]}"} = $_SESSION[$valueCheckNames731[$i]] ?? false;
									}
								}

							?>
							<?php for ($i = 0; $i < $opciones['check731']; $i++) : ?>
								<?php 
									$valor_variable = ${"opcion{$i}_form{$valueCheckNames731[$i]}"};
								?>
									<label>
											<input type="checkbox" name="<?= $valueCheckNames731[$i] ?>" value="<?= $valueCheckNames731[$i] ?>" <?php if ($checkboxesDeshabilitadosForm6) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
											<?= $labels731[$i] ?>
									</label>
									<br>
							<?php endfor; ?>

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="731" value="" class="btn btn-success" <?php if ($botonDeshabilitado8) echo "disabled"; ?>>Evaluar</button>
							</div>
							<?php echo isset($alert731) ? $alert731 : ''; ?>
						</div>
					
                    <form action="7DesarrolloEconomico.php" method="post" enctype="multipart/form-data">

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
							<h6 class="display-15">7.3.2 Programa municipal de fomento económico</h6>
						</p>
						<hr class="my-2">

						<div class="form-group">
							
							<?php
								
								$labels732 = [
									'a) Personal capacitado para brindar servicios de información y asesoría.',
									'b) Estrategia de vinculación con sectores económicos e Instituciones de Educación Superior.',
									'c) Estrategia de especialización sectorial.',
									'd) Diagnóstico por sector',
								];

								if (isset($_POST['submit'])) {
									$idFormulario = $_POST['opciones'];
									$valor = editarCheckBox($idFormulario);
									
									for ($i = 0; $i < count($valor); $i++) {
										${"opcion{$i}_form{$valueCheckNames732[$i]}"} = $valor[$i];
									}
								} else {
									for ($i = 0; $i < $opciones['check732']; $i++) {
										${"opcion{$i}_form{$valueCheckNames732[$i]}"} = $_SESSION[$valueCheckNames732[$i]] ?? false;
									}
								}

							?>
							<?php for ($i = 0; $i < $opciones['check732']; $i++) : ?>
								<?php 
									$valor_variable = ${"opcion{$i}_form{$valueCheckNames732[$i]}"};
								?>
									<label>
											<input type="checkbox" name="<?= $valueCheckNames732[$i] ?>" value="<?= $valueCheckNames732[$i] ?>" <?php if ($checkboxesDeshabilitadosForm7) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
											<?= $labels732[$i] ?>
									</label>
									<br>
							<?php endfor; ?>

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="732" value="" class="btn btn-success" <?php if ($botonDeshabilitado9) echo "disabled"; ?>>Evaluar</button>
							</div>
							<?php echo isset($alert732) ? $alert732 : ''; ?>
						</div>
					
                    <form action="7DesarrolloEconomico.php" method="post" enctype="multipart/form-data">

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
							<h6 class="display-15">7.3.3 Vinculación para el fomento económico</h6>
						</p>
						<hr class="my-2">

						<div class="form-group">
							
							<?php
								
								$labels733 = [
									'a) Convenio de colaboración vigente con por lo menos una Cámara o consejo empresarial municipal o regional, en materia económica.',
									'b) Convenio de colaboración vigente con por lo menos una institución de educación superior del municipio, estado o región, en materia económica.',
									'c) Convenio de colaboración vigente con por lo menos un municipio o estado, en materia económica.',
								];

								if (isset($_POST['submit'])) {
									$idFormulario = $_POST['opciones'];
									$valor = editarCheckBox($idFormulario);
									
									for ($i = 0; $i < count($valor); $i++) {
										${"opcion{$i}_form{$valueCheckNames733[$i]}"} = $valor[$i];
									}
								} else {
									for ($i = 0; $i < $opciones['check733']; $i++) {
										${"opcion{$i}_form{$valueCheckNames733[$i]}"} = $_SESSION[$valueCheckNames733[$i]] ?? false;
									}
								}

							?>
							<?php for ($i = 0; $i < $opciones['check733']; $i++) : ?>
								<?php 
									$valor_variable = ${"opcion{$i}_form{$valueCheckNames733[$i]}"};
								?>
									<label>
											<input type="checkbox" name="<?= $valueCheckNames733[$i] ?>" value="<?= $valueCheckNames733[$i] ?>" <?php if ($checkboxesDeshabilitadosForm8) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
											<?= $labels733[$i] ?>
									</label>
									<br>
							<?php endfor; ?>

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="733" value="" class="btn btn-success" <?php if ($botonDeshabilitado10) echo "disabled"; ?>>Evaluar</button>
							</div>
							<?php echo isset($alert733) ? $alert733 : ''; ?>
						</div>
					
                    <form action="7DesarrolloEconomico.php" method="post" enctype="multipart/form-data">

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