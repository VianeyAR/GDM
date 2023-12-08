<?php include("../Includes/header.php"); 

// Inicia la sesión
include("../../bd.php");
session_unset();
include("../../funciones.php");
$alerta = '';



if (isset($_POST['registrarNuevoFormulario'])) {

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
	$inputNames = ['inputDisabled1', 'inputDisabled2', 'inputDisabled3', 'inputDisabled4', 'inputDisabled5', 'inputDisabled6', 'inputDisabled7', 'inputDisabled8', 'inputDisabled9', 'inputDisabled10'];
	
	// Recorrer el array y asignar los valores a las variables
	foreach ($inputNames as $inputName) {
			$_SESSION[$inputName] = false;
	}
	// habilitar boton
	// Inicializar un array con los nombres de las variables
	$botonNames = ['deshabilitarBoton1', 'deshabilitarBoton2', 'deshabilitarBoton3', 'deshabilitarBoton4', 'deshabilitarBoton5', 'deshabilitarBoton6', 'deshabilitarBoton7', 'deshabilitarBoton8', 'deshabilitarBoton9', 'deshabilitarBoton10', 'deshabilitarBoton11', 'deshabilitarBoton12', 'deshabilitarBoton13', 'deshabilitarBoton14', 'deshabilitarBoton15', 'deshabilitarBoton16', 'deshabilitarBoton17', 'deshabilitarBoton18'];
	// Recorrer el array y asignar los valores a las variables
	foreach ($botonNames as $botonName) {
		$_SESSION[$botonName] = false;
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
	$inputNames = ['inputDisabled1', 'inputDisabled2', 'inputDisabled3', 'inputDisabled4', 'inputDisabled5', 'inputDisabled6', 'inputDisabled7', 'inputDisabled8', 'inputDisabled9', 'inputDisabled10'];
	
	// Recorrer el array y asignar los valores a las variables
	foreach ($inputNames as $index => $inputName) {
	${"inputsDeshabilitadosForm" . ($index + 1)} = $_SESSION[$inputName] ?? true;
	}
	// deshabilitar boton
	// Inicializar un array con los nombres de las variables
	$botonNames = ['deshabilitarBoton1', 'deshabilitarBoton2', 'deshabilitarBoton3', 'deshabilitarBoton4', 'deshabilitarBoton5', 'deshabilitarBoton6', 'deshabilitarBoton7', 'deshabilitarBoton8', 'deshabilitarBoton9', 'deshabilitarBoton10', 'deshabilitarBoton11', 'deshabilitarBoton12', 'deshabilitarBoton13', 'deshabilitarBoton14', 'deshabilitarBoton15', 'deshabilitarBoton16', 'deshabilitarBoton17', 'deshabilitarBoton18'];
	// Recorrer el array y asignar los valores a las variables
	foreach ($botonNames as $index => $botonName) {
	${"botonDeshabilitado" . ($index + 1)} = $_SESSION[$botonName] ?? true;
	}
	// valores checkboxes
	// Inicializar un array con los nombres de las variables
	
	$opciones = [
	'check411' => 14, // Último número de cada grupo de checkboxes
	'check412' => 4,
	'check421' => 9,
	'check422' => 7,
	'check423' => 8,
	'check424' => 5,
	'check431' => 12,
	'check432' => 8,
	];
	
	$valueCheckNames411 = [
	'check4111', 'check4112', 'check4113', 'check4114', 'check4115', 'check4116', 'check4117', 'check4118', 'check4119', 'check41110', 'check41111', 'check41112', 'check41113', 'check41114',
	];
	$valueCheckNames412 = [
	'check4121', 'check4122', 'check4123', 'check4124',
	];
	$valueCheckNames421 = [
	'check4211', 'check4212', 'check4213', 'check4214', 'check4215', 'check4216', 'check4217', 'check4218', 'check4219',
	];
	$valueCheckNames422 = [
	'check4221', 'check4222', 'check4223', 'check4224', 'check4225', 'check4226', 'check4227',
	];
	$valueCheckNames423 = [
		'check4231', 'check4232', 'check4233', 'check4234', 'check4235', 'check4236', 'check4237', 'check4238'
		];
	$valueCheckNames424 = [
	'check4241', 'check4242', 'check4243', 'check4244', 'check4245', 
	];
	$valueCheckNames431 = [
	'check4311', 'check4312', 'check4313', 'check4314', 'check4315', 'check4316', 'check4317', 'check4318', 'check4319', 'check43110', 'check43111', 'check43112'
	];
	$valueCheckNames432 = [
	'check4321', 'check4322' , 'check4323', 'check4324', 'check4325', 'check4326', 'check4327', 'check4328',
	];
	// Crear variables dinámicas
	for ($i = 0; $i < $opciones['check411']; $i++) {
	${"opcion{$i}_form{$valueCheckNames411[$i]}"} = $_SESSION[$valueCheckNames411[$i]] ?? false;
	}
	// Crear variables dinámicas
	for ($i = 0; $i < $opciones['check412']; $i++) {
	${"opcion{$i}_form{$valueCheckNames412[$i]}"} = $_SESSION[$valueCheckNames412[$i]] ?? false;
	}
	// Crear variables dinámicas
	for ($i = 0; $i < $opciones['check421']; $i++) {
	${"opcion{$i}_form{$valueCheckNames421[$i]}"} = $_SESSION[$valueCheckNames421[$i]] ?? false;
	}
	// Crear variables dinámicas
	for ($i = 0; $i < $opciones['check422']; $i++) {
	${"opcion{$i}_form{$valueCheckNames422[$i]}"} = $_SESSION[$valueCheckNames422[$i]] ?? false;
	}
	// Crear variables dinámicas
	for ($i = 0; $i < $opciones['check423']; $i++) {
	${"opcion{$i}_form{$valueCheckNames423[$i]}"} = $_SESSION[$valueCheckNames423[$i]] ?? false;
	}
	// Crear variables dinámicas
	for ($i = 0; $i < $opciones['check424']; $i++) {
	${"opcion{$i}_form{$valueCheckNames424[$i]}"} = $_SESSION[$valueCheckNames424[$i]] ?? false;
	}
	// Crear variables dinámicas
	for ($i = 0; $i < $opciones['check431']; $i++) {
	${"opcion{$i}_form{$valueCheckNames431[$i]}"} = $_SESSION[$valueCheckNames431[$i]] ?? false;
	}
	// Crear variables dinámicas
	for ($i = 0; $i < $opciones['check432']; $i++) {
	${"opcion{$i}_form{$valueCheckNames432[$i]}"} = $_SESSION[$valueCheckNames432[$i]] ?? false;
	}

	// valores inputs
	$variableNames = [
	'form1' => ['txtNombre4411', 'txtNombre4412'],
	'form2' => ['txtNombre4421', 'txtNombre4422'],
	'form3' => ['txtNombre4431', 'txtNombre4432'],
	'form4' => ['txtNombre4441', 'txtNombre4442'],
	'form5' => ['txtNombre4451', 'txtNombre4452'],
	'form6' => ['txtNombre4461', 'txtNombre4462'],
	'form7' => ['txtNombre4471', 'txtNombre4472'],
	'form8' => ['txtNombre4481', 'txtNombre4482'],
	'form9' => ['txtNombre4491', 'txtNombre4492'],
	'form10' => ['txtNombre44101', 'txtNombre44102'],
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
	'alert411', 'alert412',
	'alert421', 'alert422', 'alert423', 'alert424', 
	'alert431', 'alert432',
	'alert441', 'alert442', 'alert443', 'alert444', 'alert445', 'alert446', 'alert447', 'alert448', 'alert449', 'alert4410',
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
	
		$querySelect = mysqli_query($conexion, "SELECT * FROM `formulario` f INNER JOIN modulo m ON f.id_formulario = m.id_formulario WHERE f.fecha = '$nuevafecha' and m.modulo = 'Servicios Públicos'");
		
		if (!mysqli_fetch_assoc($querySelect)) {
			$idFormulario = registrarFormularioNuevo($fechaCompleta, $fechaActual, $nuevafecha);
			$idModulo = registrarModulo($idFormulario, 'Servicios Públicos');
			$idTema1 = registrarTema($idModulo, "4.1 Marco normativo");
			$_SESSION['idTema1'] = $idTema1;
			$idTema2 = registrarTema($idModulo, "4.2 Diagnóstico");
			$_SESSION['idTema2'] = $idTema2;
			$idTema3 = registrarTema($idModulo, "4.3 Acciones");
			$_SESSION['idTema3'] = $idTema3;
			$idTema4 = registrarTema($idModulo, "4.4 Evaluación");
			$_SESSION['idTema4'] = $idTema4;
	
			$enunciados1 = $_SESSION['enunciados1'];
			$valor_checkbox1 = $_SESSION['valorcheck1'];
			registrarIndicadoresCheckboxes($valueCheckNames411, $valor_checkbox1, $enunciados1, $idTema1, '4.1.1 Reglamentación municipal para la prestación de los servicios públicos', 1);
			$enunciados2 = $_SESSION['enunciados2'];
			$valor_checkbox2 = $_SESSION['valorcheck2'];
			registrarIndicadoresCheckboxes($valueCheckNames412, $valor_checkbox2, $enunciados2, $idTema1, '4.1.2 Estructura administrativa para la prestación de los servicios públicos', 1);
			
			$enunciados3 = $_SESSION['enunciados3'];
			$valor_checkbox3 = $_SESSION['valorcheck3'];
			registrarIndicadoresCheckboxes($valueCheckNames421, $valor_checkbox3, $enunciados3, $idTema2, '4.2.1 Situación del agua potable, drenaje, alcantarillado, tratamiento y disposición de sus aguas residuales', 1);
			$enunciados4 = $_SESSION['enunciados4'];
			$valor_checkbox4 = $_SESSION['valorcheck4'];
			registrarIndicadoresCheckboxes($valueCheckNames422, $valor_checkbox4, $enunciados4, $idTema2, '4.2.2 Situación del Alumbrado público', 1);
			$enunciados5 = $_SESSION['enunciados5'];
			$valor_checkbox5 = $_SESSION['valorcheck5'];
			registrarIndicadoresCheckboxes($valueCheckNames423, $valor_checkbox5, $enunciados5, $idTema2, '4.2.3 Situación de limpia, recolección, traslado, tratamiento y disposición final de residuos', 1);
			$enunciados6 = $_SESSION['enunciados6'];
			$valor_checkbox6 = $_SESSION['valorcheck6'];
			registrarIndicadoresCheckboxes($valueCheckNames424, $valor_checkbox6, $enunciados6, $idTema2, '4.2.4 Situación de Mercados (centrales de abasto) y panteones', 1);
			
			$enunciados7 = $_SESSION['enunciados7'];
			$valor_checkbox7 = $_SESSION['valorcheck7'];
			registrarIndicadoresCheckboxes($valueCheckNames431, $valor_checkbox7, $enunciados7, $idTema3, '4.3.1 Programa operativo anual para la prestación de los servicios públicos', 1);
			$enunciados8 = $_SESSION['enunciados8'];
			$valor_checkbox8 = $_SESSION['valorcheck8'];
			registrarIndicadoresCheckboxes($valueCheckNames432, $valor_checkbox8, $enunciados8, $idTema3, '4.3.2 Cartera de proyectos para mejorar la prestación de los servicios públicos', 1);

			$enunciados9 = $_SESSION['enunciados9'];
			$valor_input1 = $_SESSION['valorinput1'];
			registrarIndicadoresInputs($valor_input1, $enunciados9, $idTema4, "4.4.1 Tasa de abatimiento de calles sin revestimiento", 2);
			$enunciados10 = $_SESSION['enunciados10'];
			$valor_input2 = $_SESSION['valorinput2'];
			registrarIndicadoresInputs($valor_input2, $enunciados10, $idTema4, "4.4.2 Tasa de abatimiento de la carencia de servicio de agua entubada en las viviendas", 2);
			$enunciados11 = $_SESSION['enunciados11'];
			$valor_input3 = $_SESSION['valorinput3'];
			registrarIndicadoresInputs($valor_input3, $enunciados11, $idTema4, "4.4.3 Tasa de abatimiento del déficit del servicio de drenaje en viviendas particulares", 2);
			$enunciados12 = $_SESSION['enunciados12'];
			$valor_input4 = $_SESSION['valorinput4'];
			registrarIndicadoresInputs($valor_input4, $enunciados12, $idTema4, "4.4.4 Tasa de abatimiento del déficit del servicio de alcantarillado en arterias viales", 2);
			$enunciados13 = $_SESSION['enunciados13'];
			$valor_input5 = $_SESSION['valorinput5'];
			registrarIndicadoresInputs($valor_input5, $enunciados13, $idTema4, "4.4.5 Porcentaje de agua tratada", 2);
			$enunciados14 = $_SESSION['enunciados14'];
			$valor_input6 = $_SESSION['valorinput6'];
			registrarIndicadoresInputs($valor_input6, $enunciados14, $idTema4, "4.4.6 Cobertura del servicio de recolección de residuos sólidos", 2);
			$enunciados15 = $_SESSION['enunciados15'];
			$valor_input7 = $_SESSION['valorinput7'];
			registrarIndicadoresInputs($valor_input7, $enunciados15, $idTema4, "4.4.7 Tasa de crecimiento anual del índice de áreas verdes y recreativas per cápita", 2);
			$enunciados16 = $_SESSION['enunciados16'];
			$valor_input8 = $_SESSION['valorinput8'];
			registrarIndicadoresInputs($valor_input8, $enunciados16, $idTema4, "4.4.8 Cobertura en el servicio de alumbrado público", 2);
			$enunciados17 = $_SESSION['enunciados17'];
			$valor_input9 = $_SESSION['valorinput9'];
			registrarIndicadoresInputs($valor_input9, $enunciados17, $idTema4, "4.4.9 Cobertura en el servicio de mercados públicos per cápita", 2);
			$enunciados18 = $_SESSION['enunciados18'];
			$valor_input10 = $_SESSION['valorinput10'];
			registrarIndicadoresInputs($valor_input10, $enunciados18, $idTema4, "4.4.10 Cobertura en el servicio de panteones", 2);
		}
	
	
	}

	// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (isset($_POST['411'])) {
		$checkboxesDeshabilitadosForm1 = true;
		$_SESSION['checkDisabled1'] = $checkboxesDeshabilitadosForm1;
		$botonDeshabilitado1 = true;
		$_SESSION['deshabilitarBoton1'] = $botonDeshabilitado1;
		$count = 0;
		$valor_checkbox1 = array();
		foreach ($valueCheckNames411 as $index => $name) {
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
			'a) Disposiciones generales (servicios que administra el municipio y sus alcances).',
			'b) Autoridades municipales encargadas de la prestación y sus facultades.',
			'c) Derechos de los usuarios respecto a los servicios públicos.',
			'd) Sanciones a las que puede hacerse acreedor un usuario.',
			'e) Medios de impugnación y órganos encargados de dirimir controversias.',
			'f) Reglamenta el servicio de agua potable, drenaje y alcantarillado.',
			'g) Reglamenta el tratamiento y disposición de aguas residuales.',
			'h) Reglamenta el servicio de alumbrado público.',
			'i) Reglamenta el servicio de limpia y recolección.',
			'j) Reglamenta el traslado, tratamiento y disposición final de residuos.',
			'k) Reglamenta el servicio de panteones.',
			'l) Reglamenta el servicio de mercados públicos.',
			'm) Reglamenta el servicio de calles, parques y jardines.',
			'n) Publicado conforme a la legislación estatal.'
		];
		$_SESSION['enunciados1'] = $enunciados;
		

		// Evaluar el estado general del formulario
		$alert411 = evaluarEstadoAlertaCheck($count, 14);
		$_SESSION['alert411'] = $alert411;

	} elseif (isset($_POST['412'])) {
    $checkboxesDeshabilitadosForm2 = true;
		$_SESSION['checkDisabled2'] = $checkboxesDeshabilitadosForm2;
		$botonDeshabilitado2 = true;
		$_SESSION['deshabilitarBoton2'] = $botonDeshabilitado2;
		$count = 0;
		$valor_checkbox2 = array();
		foreach ($valueCheckNames412 as $index  => $name) {
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
			'a) Unidad(es) administrativa(s) de servicios públicos en el organigrama de la administración pública municipal.',
			'b) Manual de organización de cada unidad administrativa responsable de la prestación de los servicios públicos.',
			'c) Nombramiento oficial del director o directores responsables.',
			'd) Presupuesto del año en curso aprobado por cabildo de la Ley de Egresos Municipal exclusivo para proyectos en servicios públicos (sin considerar gasto corriente).',
		];
		$_SESSION['enunciados2'] = $enunciados;
		$alert412 = evaluarEstadoAlertaCheck($count, 4);
		$_SESSION['alert412'] = $alert412;

  } elseif (isset($_POST['421'])) {
		$checkboxesDeshabilitadosForm3 = true;
		$_SESSION['checkDisabled3'] = $checkboxesDeshabilitadosForm3;
		$botonDeshabilitado3 = true;
		$_SESSION['deshabilitarBoton3'] = $botonDeshabilitado3;
		$count = 0;
		$valor_checkbox3 = array();
		foreach ($valueCheckNames421 as $index => $name) {
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
			'a) Número de viviendas particulares habitadas.',
			'b) Número de viviendas conectadas a un sistema de agua.',
			'c) Número de viviendas sin toma de agua potable en el año evaluado.',
			'd) Número de viviendas conectadas a un sistema de drenaje.',
			'e) Número de viviendas sin drenaje en el año evaluado.',
			'f) Número de tramos de calle.',
			'g) Número de tramos de calle sin alcantarillado en el año evaluado.',
			'h) Volumen de aguas residuales.',
			'i) Volumen de aguas tratadas.',
		];
		$_SESSION['enunciados3'] = $enunciados;
		$alert421 = evaluarEstadoAlertaCheck($count, 9);
		$_SESSION['alert421'] = $alert421;

	} elseif (isset($_POST['422'])) {
		$checkboxesDeshabilitadosForm4 = true;
		$_SESSION['checkDisabled4'] = $checkboxesDeshabilitadosForm4;
		$botonDeshabilitado4 = true;
		$_SESSION['deshabilitarBoton4'] = $botonDeshabilitado4;
		$count = 0;
		$valor_checkbox4 = array();
		foreach ($valueCheckNames422 as $index => $name) {
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
			'a) Número de tramos de calle.',
			'b) Número de tramos de calle con alumbrado público.',
			'c) Número de tramos de calle con alumbrado público funcionando.',
			'd) Número de tramos de calle sin alumbrado público.',
			'e) Número de parques y jardines en el municipio.',
			'f) Número de parques y jardines que cuentan con alumbrado público funcionando.',
			'g) Cuantificación del consumo de energía utilizada por concepto del servicio de alumbrado público.',
		];
		$_SESSION['enunciados4'] = $enunciados;
		$alert422 = evaluarEstadoAlertaCheck($count, 7);
		$_SESSION['alert422'] = $alert422;

	} elseif (isset($_POST['423'])) {
		$checkboxesDeshabilitadosForm5 = true;
		$_SESSION['checkDisabled5'] = $checkboxesDeshabilitadosForm5;
		$botonDeshabilitado5 = true;
		$_SESSION['deshabilitarBoton5'] = $botonDeshabilitado5;
		$count = 0;
		$valor_checkbox5 = array();
		foreach ($valueCheckNames423 as $index => $name) {
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
			'a) Número de tramos de calle.',
			'b) Número de tramos de calle que disponen del servicio de limpia.',
			'c) Número de parques y jardines en el municipio.',
			'd) Número de parques y jardines que carecen del servicio de limpia.',
			'e) Número de tiraderos a cielo abierto operando en el municipio.',
			'f) Número de sitios de disposición final de residuos sólidos con autorización del gobierno del estado.',
			'g) Número de toneladas de residuos sólidos que se generan en el municipio.',
			'h) Número de toneladas de residuos sólidos dispuestas en un sitio que cumple con lo establecido en la NOM-083.',
		];
		$_SESSION['enunciados5'] = $enunciados;
		$alert423 = evaluarEstadoAlertaCheck($count, 8);
		$_SESSION['alert423'] = $alert423;

	} elseif (isset($_POST['424'])) {
		$checkboxesDeshabilitadosForm6 = true;
		$_SESSION['checkDisabled6'] = $checkboxesDeshabilitadosForm6;
		$botonDeshabilitado6 = true;
		$_SESSION['deshabilitarBoton6'] = $botonDeshabilitado6;
		$count = 0;
		$valor_checkbox6 = array();
		foreach ($valueCheckNames424 as $index => $name) {
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
			'a) Número de mercados públicos municipales.',
			'b) Número de mercados ambulantes (tianguis) en el municipio.',
			'c) Número de centrales de abastos en el municipio.',
			'd) Número de panteones municipales.',
			'e) Número de espacios disponibles para depósito de restos humanos registrados por el municipio en el año evaluado.',
		];
		$_SESSION['enunciados6'] = $enunciados;
		$alert424 = evaluarEstadoAlertaCheck($count, 5);
		$_SESSION['alert424'] = $alert424;

	} elseif (isset($_POST['431'])) {
		$checkboxesDeshabilitadosForm7 = true;
		$_SESSION['checkDisabled7'] = $checkboxesDeshabilitadosForm7;
		$botonDeshabilitado7 = true;
		$_SESSION['deshabilitarBoton7'] = $botonDeshabilitado7;
		$count = 0;
		$valor_checkbox7 = array();
		foreach ($valueCheckNames431 as $index => $name) {
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
			'a) Objetivos.',
			'b) Responsables.',
			'c) Calendario de actividades.',
			'd) Resultados esperados.',
			'e) Metas del servicio de agua potable, drenaje y alcantarillado.',
			'f) Metas del servicio de tratamiento y disposición de aguas residuales.',
			'g) Metas del servicio de alumbrado público.',
			'h) Metas del servicio de limpia y recolección.',
			'i) Metas del servicio de traslado, tratamiento y disposición final de residuos.',
			'j) Metas del servicio de panteones.',
			'k) Metas del servicio de mercados públicos.',
			'l) Metas del servicio de calles, parques y jardines.',
		];
		$_SESSION['enunciados7'] = $enunciados;
		$alert431 = evaluarEstadoAlertaCheck($count, 12);
		$_SESSION['alert431'] = $alert431;

	} elseif (isset($_POST['432'])) {
		$checkboxesDeshabilitadosForm8 = true;
		$_SESSION['checkDisabled8'] = $checkboxesDeshabilitadosForm8;
		$botonDeshabilitado8 = true;
		$_SESSION['deshabilitarBoton8'] = $botonDeshabilitado8;
		$count = 0;
		$valor_checkbox8 = array();
		foreach ($valueCheckNames432 as $index => $name) {
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
			'a) Nombre (de cada proyecto).',
			'b) Objetivo (de cada proyecto).',
			'c) Unidad administrativa responsable (de cada proyecto).',
			'd) Cronograma (calendario de actividades de cada proyecto).',
			'e) Alcance (entregables o productos de cada proyecto).',
			'f) Costo (presupuesto de cada proyecto).',
			'g) Ficha de indicadores de seguimiento (de cada proyecto).',
			'h) Presenta por lo menos un proyecto de cinco servicios públicos diferentes.',
		];
		$_SESSION['enunciados8'] = $enunciados;
		$alert432 = evaluarEstadoAlertaCheck($count, 8);
		$_SESSION['alert432'] = $alert432;

	} elseif (isset($_POST['441'])) {

		//441
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form1'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form1_value"} = $_POST[$fieldName] ?? '';
		}
		$_SESSION['txtNombre4411'] = $opcion1_form1_value;
		$_SESSION['txtNombre4412'] = $opcion2_form1_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion1_form1_value != 0) {
				// Calcula el porcentaje
				$porcentaje = (($opcion2_form1_value - $opcion1_form1_value) / $opcion1_form1_value) * -100;

				// Evalúa el porcentaje y determina el estado
				if ($porcentaje >=  5) {
						$estado = 'Optimo';
				} elseif ($porcentaje < 5 && $porcentaje >= 0) {
						$estado = 'En Proceso';
				} else {
						$estado = 'Rezago';
				}
				$inputsDeshabilitadosForm1 = true;
				$_SESSION['inputDisabled1'] = $inputsDeshabilitadosForm1;
				$botonDeshabilitado9 = true;
				$_SESSION['deshabilitarBoton9'] = $botonDeshabilitado9;
				$estadoGeneral = $estado;

				$enunciados = [
					'Metros lineales de calles sin revestimiento en el año previo al evaluado.',
					'Metros lineales de calles sin revestimiento en el año evaluado.',
				];
				$_SESSION['enunciados9'] = $enunciados;
				$valor_input1 = [
					$opcion1_form1_value,
					$opcion2_form1_value,
				];
				$_SESSION['valorinput1'] = $valor_input1;
		} else {
				// Manejar el caso donde el denominador es 0 (división por 0)
				$estadoGeneral = 'Error: División por 0';
				
		}

		
		$alert441 = evaluarEstadoAlertaInputs($estadoGeneral);
		$_SESSION['alert441'] = $alert441;

	} elseif (isset($_POST['442'])) {

		//442
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form2'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form2_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre4421'] = $opcion1_form2_value;
		$_SESSION['txtNombre4422'] = $opcion2_form2_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion1_form2_value != 0) {
			// Calcula el porcentaje
			$porcentaje = (($opcion2_form2_value - $opcion1_form2_value) / $opcion1_form2_value) * - 100;
		
			// Evalúa el porcentaje y determina el estado
			if ($porcentaje >= 5) {
				$estado = 'Optimo';
			} elseif ($porcentaje < 5 && $porcentaje >= 0) {
				$estado = 'En Proceso';
			} else {
				$estado = 'Rezago';
			}

			$inputsDeshabilitadosForm2 = true;
			$_SESSION['inputDisabled2'] = $inputsDeshabilitadosForm2;
			$botonDeshabilitado10 = true;
			$_SESSION['deshabilitarBoton10'] = $botonDeshabilitado10;
			$estadoGeneral = $estado;

			$enunciados = [
				'Número de servidoras y servidores públicos municipales.',
				'Población total (INEGI, 2020).',
			];
			$_SESSION['enunciados10'] = $enunciados;
			$valor_input2 = [
				$opcion1_form2_value,
				$opcion2_form2_value,
			];
			$_SESSION['valorinput2'] = $valor_input2;
		} else {
			$estadoGeneral = 'Error: División por 0';
		}
		$alert442 = evaluarEstadoAlertaInputs($estadoGeneral);
		$_SESSION['alert442'] = $alert442;

	} elseif (isset($_POST['443'])) {

		//443
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form3'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form3_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre4431'] = $opcion1_form3_value;
		$_SESSION['txtNombre4432'] = $opcion2_form3_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion1_form3_value != 0) {
			// Calcula el porcentaje
			$porcentaje = (($opcion2_form3_value - $opcion1_form3_value) / $opcion1_form3_value) * - 100;
		
		
			// Evalúa el porcentaje y determina el estado
			if ($porcentaje >= 5) {
				$estado = 'Optimo';
			} elseif ($porcentaje < 5 && $porcentaje >= 0) {
				$estado = 'En Proceso';
			} else {
				$estado = 'Rezago';
			}
			$inputsDeshabilitadosForm3 = true;
			$_SESSION['inputDisabled3'] = $inputsDeshabilitadosForm3;
			$botonDeshabilitado11 = true;
			$_SESSION['deshabilitarBoton11'] = $botonDeshabilitado11;
			$estadoGeneral = $estado;

			$enunciados = [
				'Viviendas sin drenaje en el año previo al evaluado.',
				'Viviendas sin drenaje en el año evaluado.',
			];
			$_SESSION['enunciados11'] = $enunciados;
			$valor_input3 = [
				$opcion1_form3_value,
				$opcion2_form3_value,
			];
			$_SESSION['valorinput3'] = $valor_input3;
		} else {
			$estadoGeneral = 'Error: División por 0';
		}

		$alert443 = evaluarEstadoAlertaInputs($estadoGeneral);
		$_SESSION['alert443'] = $alert443;

	} elseif (isset($_POST['444'])) {

		//444
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form4'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form4_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre4441'] = $opcion1_form4_value;
		$_SESSION['txtNombre4442'] = $opcion2_form4_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion1_form4_value != 0) {
			// Calcula el porcentaje
			$porcentaje = (($opcion2_form4_value - $opcion1_form4_value) / $opcion1_form4_value) * - 100;
		
			// Evalúa el porcentaje y determina el estado
			if ($porcentaje >= 5) {
				$estado = 'Optimo';
			} elseif ($porcentaje < 5 && $porcentaje >= 0) {
				$estado = 'En Proceso';
			} else {
				$estado = 'Rezago';
			}
				$inputsDeshabilitadosForm4 = true;
				$_SESSION['inputDisabled4'] = $inputsDeshabilitadosForm4;
				$botonDeshabilitado12 = true;
				$_SESSION['deshabilitarBoton12'] = $botonDeshabilitado12;
				$estadoGeneral = $estado;

				$enunciados = [
					'Tramos de calle sin alcantarillado en el año previo al evaluado.',
					'Tramos de calle sin alcantarillado en el año evaluado.',
				];
				
				$_SESSION['enunciados12'] = $enunciados;
				$valor_input4 = [
					$opcion1_form4_value,
					$opcion2_form4_value,
				];
				$_SESSION['valorinput4'] = $valor_input4;
			} else {
				$estadoGeneral = 'Error: División por 0';
			}
			
			$alert444 = evaluarEstadoAlertaInputs($estadoGeneral);
			$_SESSION['alert444'] = $alert444;
	} elseif (isset($_POST['445'])) {

		//445
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form5'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form5_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre4451'] = $opcion1_form5_value;
		$_SESSION['txtNombre4452'] = $opcion2_form5_value;
		
		if ($opcion2_form5_value != 0) {
			// Calcula el porcentaje
			$porcentaje = ($opcion1_form5_value/$opcion2_form5_value) * 100;
		
		
			// Evalúa el porcentaje y determina el estado
			if ($porcentaje >= 50) {
				$estado = 'Optimo';
			} elseif ($porcentaje < 50 && $porcentaje >= 20) {
				$estado = 'En Proceso';
			} else {
				$estado = 'Rezago';
			}
				$inputsDeshabilitadosForm5 = true;
				$_SESSION['inputDisabled5'] = $inputsDeshabilitadosForm5;
				$botonDeshabilitado13 = true;
				$_SESSION['deshabilitarBoton13'] = $botonDeshabilitado13;
				$estadoGeneral = $estado;
				$enunciados = [
					'Metros cúbicos (m3) de agua tratada en el año evaluado.',
					'Metros cúbicos (m3) totales de aguas residuales en el año evaluado.',
				];

				$_SESSION['enunciados13'] = $enunciados;
				$valor_input5 = [
					$opcion1_form5_value,
					$opcion2_form5_value,
				];
				$_SESSION['valorinput5'] = $valor_input5;
			} else {
				$estadoGeneral = 'Error: División por 0';
			}
			$alert445 = evaluarEstadoAlertaInputs($estadoGeneral);
			$_SESSION['alert445'] = $alert445;
	} elseif (isset($_POST['446'])) {

		//446
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form6'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form6_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre4461'] = $opcion1_form6_value;
		$_SESSION['txtNombre4462'] = $opcion2_form6_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion2_form6_value != 0) {
			// Calcula el porcentaje
			$porcentaje = ($opcion1_form6_value / $opcion2_form6_value) * 100;
		
		
			// Evalúa el porcentaje y determina el estado
			if ($porcentaje >= 80) {
				$estado = 'Optimo';
			} elseif ($porcentaje < 80 && $porcentaje >= 50) {
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
					'Viviendas particulares habitadas que reciben el servicio de recolección de residuos en el año evaluado.',
					'Total de viviendas particulares habitadas del municipio en el año evaluado.',
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
			
			$alert446 = evaluarEstadoAlertaInputs($estadoGeneral);
			$_SESSION['alert446'] = $alert446;
	} elseif (isset($_POST['447'])) { 

		//447
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form7'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form7_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre4471'] = $opcion1_form7_value;
		$_SESSION['txtNombre4472'] = $opcion2_form7_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion1_form7_value != 0) {
			// Calcula el porcentaje
			$porcentaje = (($opcion2_form7_value - $opcion1_form7_value) / $opcion1_form7_value) * 100;
		
		
			// Evalúa el porcentaje y determina el estado
			if ($porcentaje >= 10) {
				$estado = 'Optimo';
			} elseif ($porcentaje < 10 && $porcentaje >= 0) {
				$estado = 'Rezago';
			} else {
				$estado = 'En Proceso';
			}
				$inputsDeshabilitadosForm7 = true;
				$_SESSION['inputDisabled7'] = $inputsDeshabilitadosForm7;
				$botonDeshabilitado15 = true;
				$_SESSION['deshabilitarBoton15'] = $botonDeshabilitado15;
				$estadoGeneral = $estado;
				$enunciados = [
					'Áreas verdes y recreativas per cápita en el año previo al evaluado.',
					'Áreas verdes y recreativas per cápita en el año evaluado.',
				];
				$_SESSION['enunciados15'] = $enunciados;
				$valor_input7 = [
					$opcion1_form7_value,
					$opcion2_form7_value,
				];
				$_SESSION['valorinput7'] = $valor_input7;
			} else {
				$estadoGeneral = 'Error: División por 0';
			}
			$alert447 = evaluarEstadoAlertaInputs($estadoGeneral);
			$_SESSION['alert447'] = $alert447;

	} elseif (isset($_POST['448'])) { 

		//448
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form8'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form8_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre4481'] = $opcion1_form8_value;
		$_SESSION['txtNombre4482'] = $opcion2_form8_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion2_form8_value != 0) {
			// Calcula el porcentaje
			$porcentaje = ($opcion1_form8_value / $opcion2_form8_value) * 100;
		
		
			// Evalúa el porcentaje y determina el estado
			if ($porcentaje >= 80) {
				$estado = 'Optimo';
			} elseif ($porcentaje < 80 && $porcentaje >= 50) {
				$estado = 'Rezago';
			} else {
				$estado = 'En Proceso';
			}
				$inputsDeshabilitadosForm8 = true;
				$_SESSION['inputDisabled8'] = $inputsDeshabilitadosForm8;
				$botonDeshabilitado16 = true;
				$_SESSION['deshabilitarBoton16'] = $botonDeshabilitado16;
				$estadoGeneral = $estado;
				$enunciados = [
					'Tramos de calles y espacios públicos que disponen del servicio de alumbrado público con luminarias funcionando en el año evaluado.',
					'Tramos de calles y espacios públicos del municipio en el año evaluado.',
				];
				$_SESSION['enunciados16'] = $enunciados;
				$valor_input8 = [
					$opcion1_form8_value,
					$opcion2_form8_value,
				];
				$_SESSION['valorinput8'] = $valor_input8;
			} else {
				$estadoGeneral = 'Error: División por 0';
			}
			$alert448 = evaluarEstadoAlertaInputs($estadoGeneral);
			$_SESSION['alert448'] = $alert448;

	} elseif (isset($_POST['449'])) { 

		//449
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form9'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form9_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre4491'] = $opcion1_form9_value;
		$_SESSION['txtNombre4492'] = $opcion2_form9_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion2_form9_value != 0) {
			// Calcula el porcentaje
			$porcentaje = ($opcion1_form9_value / $opcion2_form9_value) * 100000;
		
		
			// Evalúa el porcentaje y determina el estado
			if ($porcentaje >= 2) {
				$estado = 'Optimo';
			} elseif ($porcentaje < 1.5 && $porcentaje >= 1) {
				$estado = 'Rezago';
			} else {
				$estado = 'En Proceso';
			}
				$inputsDeshabilitadosForm9 = true;
				$_SESSION['inputDisabled9'] = $inputsDeshabilitadosForm9;
				$botonDeshabilitado17 = true;
				$_SESSION['deshabilitarBoton17'] = $botonDeshabilitado17;
				$estadoGeneral = $estado;
				$enunciados = [
					'Total de mercados públicos municipales en el año evaluado.',
					'Total de habitantes (INEGI 2020)',
				];
				$_SESSION['enunciados17'] = $enunciados;
				$valor_input9 = [
					$opcion1_form9_value,
					$opcion2_form9_value,
				];
				$_SESSION['valorinput9'] = $valor_input9;
			} else {
				$estadoGeneral = 'Error: División por 0';
			}
			$alert449 = evaluarEstadoAlertaInputs($estadoGeneral);
			$_SESSION['alert449'] = $alert449;

	} elseif (isset($_POST['4410'])) { 

		//4410
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form10'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form10_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre44101'] = $opcion1_form10_value;
		$_SESSION['txtNombre44102'] = $opcion2_form10_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion2_form10_value != 0) {
			// Calcula el porcentaje
			$porcentaje = $opcion1_form10_value / $opcion2_form10_value;
		
		
			// Evalúa el porcentaje y determina el estado
			if ($porcentaje >= 1) {
				$estado = 'Optimo';
			} elseif ($porcentaje < 1 && $porcentaje >= 1) {
				$estado = 'Rezago';
			} else {
				$estado = 'En Proceso';
			}
				$inputsDeshabilitadosForm10 = true;
				$_SESSION['inputDisabled10'] = $inputsDeshabilitadosForm10;
				$botonDeshabilitado18 = true;
				$_SESSION['deshabilitarBoton18'] = $botonDeshabilitado18;
				$estadoGeneral = $estado;
				$enunciados = [
					'Número de espacios disponibles para depósito de restos humanos registrados por el municipio en el año evaluado.',
					'Demanda potencial de espacios para el depósito de restos humanos*.',
				];
				$_SESSION['enunciados18'] = $enunciados;
				$valor_input10 = [
					$opcion1_form10_value,
					$opcion2_form10_value,
				];
				$_SESSION['valorinput10'] = $valor_input10;
			} else {
				$estadoGeneral = 'Error: División por 0';
			}
			$alert4410 = evaluarEstadoAlertaInputs($estadoGeneral);
			$_SESSION['alert4410'] = $alert4410;

	}
}

?>


     <!--Enlaces de los stilo CSS -->

	<!--<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />-->
	<link rel="stylesheet" href="../../assets/css/modulos.css" />

<img class="card-img-top" src="../../assets/img/ServiciosPublicos .png"
 alt="Gobierno Abierto" 
 style="width: 100px; height: 100px; display: block; margin: auto; max-width: 100%;">

<div class="d-flex justify-content-between">
	<div class="btn-group" role="group" aria-label="">
	<form method="POST" enctype="multipart/form-data">
	<button type="submit" name="registrarNuevoFormulario" value="" class="btn btn-primary">Registro nuevo</button>
	</form>
		
</div>
	<div class="btn-group" role="group" aria-label="">
	<form method="POST" enctype="multipart/form-data">
	<button type="submit" name="guardarFormulario" value="" class="btn btn-primary">Guardar Formulario</button>
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
		<h2 class="display-7">4.1 Marco normativo</h2>
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
							<h6 class="display-15">4.1.1 Reglamentación municipal para la prestación de los servicios públicos</h6>
						</p>
						<hr class="my-2">

						<div class="form-group">
							
							<?php
								
								$labels411 = [
									'a) Disposiciones generales (servicios que administra el municipio y sus alcances).',
									'b) Autoridades municipales encargadas de la prestación y sus facultades.',
									'c) Derechos de los usuarios respecto a los servicios públicos.',
									'd) Sanciones a las que puede hacerse acreedor un usuario.',
									'e) Medios de impugnación y órganos encargados de dirimir controversias.',
									'f) Reglamenta el servicio de agua potable, drenaje y alcantarillado.',
									'g) Reglamenta el tratamiento y disposición de aguas residuales.',
									'h) Reglamenta el servicio de alumbrado público.',
									'i) Reglamenta el servicio de limpia y recolección.',
									'j) Reglamenta el traslado, tratamiento y disposición final de residuos.',
									'k) Reglamenta el servicio de panteones.',
									'l) Reglamenta el servicio de mercados públicos.',
									'm) Reglamenta el servicio de calles, parques y jardines.',
									'n) Publicado conforme a la legislación estatal.'
								];

								if (isset($_POST['submit'])) {
									$idFormulario = $_POST['opciones'];
									$valor = editarCheckBox($idFormulario);
									
									for ($i = 0; $i < count($valor); $i++) {
										${"opcion{$i}_form{$valueCheckNames411[$i]}"} = $valor[$i];
									}
								} else {
									for ($i = 0; $i < $opciones['check411']; $i++) {
										${"opcion{$i}_form{$valueCheckNames411[$i]}"} = $_SESSION[$valueCheckNames411[$i]] ?? false;
									}
								}

							?>
							<?php for ($i = 0; $i < $opciones['check411']; $i++) : ?>
								<?php 
									$valor_variable = ${"opcion{$i}_form{$valueCheckNames411[$i]}"};
								?>
									<label>
											<input type="checkbox" name="<?= $valueCheckNames411[$i] ?>" value="<?= $valueCheckNames411[$i] ?>" <?php if ($checkboxesDeshabilitadosForm1) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
											<?= $labels411[$i] ?>
									</label>
									<br>
							<?php endfor; ?>

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="411" value="" class="btn btn-success" <?php if ($botonDeshabilitado1) echo "disabled"; ?>>Evaluar</button>
							</div>
							<?php echo isset($alert411) ? $alert411 : ''; ?>
						</div>
					</form>
					<form method="POST" enctype="multipart/form-data" >
						<p>
							<h6 class="display-15">4.1.2 Estructura administrativa para la prestación de los servicios públicos</h6>
						</p>
						<hr class="my-2">

						<div class="form-group">
							
							<?php
								
								$labels412 = [
									'a) Unidad(es) administrativa(s) de servicios públicos en el organigrama de la administración pública municipal.',
									'b) Manual de organización de cada unidad administrativa responsable de la prestación de los servicios públicos.',
									'c) Nombramiento oficial del director o directores responsables.',
									'd) Presupuesto del año en curso aprobado por cabildo de la Ley de Egresos Municipal exclusivo para proyectos en servicios públicos (sin considerar gasto corriente).',
								];

								if (isset($_POST['submit'])) {
									$idFormulario = $_POST['opciones'];
									$valor = editarCheckBox($idFormulario);
									
									for ($i = 0; $i < count($valor); $i++) {
										${"opcion{$i}_form{$valueCheckNames412[$i]}"} = $valor[$i];
									}
								} else {
									for ($i = 0; $i < $opciones['check412']; $i++) {
										${"opcion{$i}_form{$valueCheckNames412[$i]}"} = $_SESSION[$valueCheckNames412[$i]] ?? false;
									}
								}

							?>
							<?php for ($i = 0; $i < $opciones['check412']; $i++) : ?>
								<?php 
									$valor_variable = ${"opcion{$i}_form{$valueCheckNames412[$i]}"};
								?>
									<label>
											<input type="checkbox" name="<?= $valueCheckNames412[$i] ?>" value="<?= $valueCheckNames412[$i] ?>" <?php if ($checkboxesDeshabilitadosForm2) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
											<?= $labels412[$i] ?>
									</label>
									<br>
							<?php endfor; ?>

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="412" value="" class="btn btn-success" <?php if ($botonDeshabilitado2) echo "disabled"; ?>>Evaluar</button>
							</div>
							<?php echo isset($alert412) ? $alert412 : ''; ?>
						</div>
					</form>
			</div>
		</div>
	</div>
</div>
<br>
	
	<!--Tema 2 -- Diagnostico-->

	<div class="jumbotron">
			<h2 class="display-7">4.2 Diagnóstico</h2>
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
							<h6 class="display-15">4.2.1 Situación del agua potable, drenaje, alcantarillado, tratamiento y disposición
                                                de sus aguas residuales</h6>
						</p>
						<hr class="my-2">

						<div class="form-group">
							
							<?php
								
								$labels421 = [
									'a) Número de viviendas particulares habitadas.',
									'b) Número de viviendas conectadas a un sistema de agua.',
									'c) Número de viviendas sin toma de agua potable en el año evaluado.',
									'd) Número de viviendas conectadas a un sistema de drenaje.',
									'e) Número de viviendas sin drenaje en el año evaluado.',
									'f) Número de tramos de calle.',
									'g) Número de tramos de calle sin alcantarillado en el año evaluado.',
									'h) Volumen de aguas residuales.',
									'i) Volumen de aguas tratadas.',
								];

								if (isset($_POST['submit'])) {
									$idFormulario = $_POST['opciones'];
									$valor = editarCheckBox($idFormulario);
									
									for ($i = 0; $i < count($valor); $i++) {
										${"opcion{$i}_form{$valueCheckNames421[$i]}"} = $valor[$i];
									}
								} else {
									for ($i = 0; $i < $opciones['check421']; $i++) {
										${"opcion{$i}_form{$valueCheckNames421[$i]}"} = $_SESSION[$valueCheckNames421[$i]] ?? false;
									}
								}

							?>
							<?php for ($i = 0; $i < $opciones['check421']; $i++) : ?>
								<?php 
									$valor_variable = ${"opcion{$i}_form{$valueCheckNames421[$i]}"};
								?>
									<label>
											<input type="checkbox" name="<?= $valueCheckNames421[$i] ?>" value="<?= $valueCheckNames421[$i] ?>" <?php if ($checkboxesDeshabilitadosForm3) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
											<?= $labels421[$i] ?>
									</label>
									<br>
							<?php endfor; ?>

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="421" value="" class="btn btn-success" <?php if ($botonDeshabilitado3) echo "disabled"; ?>>Evaluar</button>
							</div>
							<?php echo isset($alert421) ? $alert421 : ''; ?>
						</div>
					</form>
					<form method="POST" enctype="multipart/form-data" >
						<p>
							<h6 class="display-15">4.2.2 Situación del Alumbrado público</h6>
						</p>
						<hr class="my-2">

						<div class="form-group">
							
							<?php
								
								$labels422 = [
									'a) Número de tramos de calle.',
									'b) Número de tramos de calle con alumbrado público.',
									'c) Número de tramos de calle con alumbrado público funcionando.',
									'd) Número de tramos de calle sin alumbrado público.',
									'e) Número de parques y jardines en el municipio.',
									'f) Número de parques y jardines que cuentan con alumbrado público funcionando.',
									'g) Cuantificación del consumo de energía utilizada por concepto del servicio de alumbrado público.',
								];

								if (isset($_POST['submit'])) {
									$idFormulario = $_POST['opciones'];
									$valor = editarCheckBox($idFormulario);
									
									for ($i = 0; $i < count($valor); $i++) {
										${"opcion{$i}_form{$valueCheckNames422[$i]}"} = $valor[$i];
									}
								} else {
									for ($i = 0; $i < $opciones['check422']; $i++) {
										${"opcion{$i}_form{$valueCheckNames422[$i]}"} = $_SESSION[$valueCheckNames422[$i]] ?? false;
									}
								}

							?>
							<?php for ($i = 0; $i < $opciones['check422']; $i++) : ?>
								<?php 
									$valor_variable = ${"opcion{$i}_form{$valueCheckNames422[$i]}"};
								?>
									<label>
											<input type="checkbox" name="<?= $valueCheckNames422[$i] ?>" value="<?= $valueCheckNames422[$i] ?>" <?php if ($checkboxesDeshabilitadosForm4) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
											<?= $labels422[$i] ?>
									</label>
									<br>
							<?php endfor; ?>

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="422" value="" class="btn btn-success" <?php if ($botonDeshabilitado4) echo "disabled"; ?>>Evaluar</button>
							</div>
							<?php echo isset($alert422) ? $alert422 : ''; ?>
						</div>
					</form>
					<form method="POST" enctype="multipart/form-data" >
						<p>
							<h6 class="display-15">4.2.3 Situación de limpia, recolección, traslado, tratamiento y disposición final de
                                               residuos</h6>
						</p>
						<hr class="my-2">

						<div class="form-group">
							
							<?php
								
								$labels423 = [
									'a) Número de tramos de calle.',
									'b) Número de tramos de calle que disponen del servicio de limpia.',
									'c) Número de parques y jardines en el municipio.',
									'd) Número de parques y jardines que carecen del servicio de limpia.',
									'e) Número de tiraderos a cielo abierto operando en el municipio.',
									'f) Número de sitios de disposición final de residuos sólidos con autorización del gobierno del estado.',
									'g) Número de toneladas de residuos sólidos que se generan en el municipio.',
									'h) Número de toneladas de residuos sólidos dispuestas en un sitio que cumple con lo establecido en la NOM-083.',
								];

								if (isset($_POST['submit'])) {
									$idFormulario = $_POST['opciones'];
									$valor = editarCheckBox($idFormulario);
									
									for ($i = 0; $i < count($valor); $i++) {
										${"opcion{$i}_form{$valueCheckNames423[$i]}"} = $valor[$i];
									}
								} else {
									for ($i = 0; $i < $opciones['check423']; $i++) {
										${"opcion{$i}_form{$valueCheckNames423[$i]}"} = $_SESSION[$valueCheckNames423[$i]] ?? false;
									}
								}

							?>
							<?php for ($i = 0; $i < $opciones['check423']; $i++) : ?>
								<?php 
									$valor_variable = ${"opcion{$i}_form{$valueCheckNames423[$i]}"};
								?>
									<label>
											<input type="checkbox" name="<?= $valueCheckNames423[$i] ?>" value="<?= $valueCheckNames423[$i] ?>" <?php if ($checkboxesDeshabilitadosForm5) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
											<?= $labels423[$i] ?>
									</label>
									<br>
							<?php endfor; ?>

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="423" value="" class="btn btn-success" <?php if ($botonDeshabilitado5) echo "disabled"; ?>>Evaluar</button>
							</div>
							<?php echo isset($alert423) ? $alert423 : ''; ?>
						</div>
					</form>
					<form method="POST" enctype="multipart/form-data" >
						<p>
							<h6 class="display-15">4.2.4 Situación de Mercados (centrales de abasto) y panteones</h6>
						</p>
						<hr class="my-2">

						<div class="form-group">
							
							<?php
								
								$labels424 = [
									'a) Número de mercados públicos municipales.',
									'b) Número de mercados ambulantes (tianguis) en el municipio.',
									'c) Número de centrales de abastos en el municipio.',
									'd) Número de panteones municipales.',
									'e) Número de espacios disponibles para depósito de restos humanos registrados por el municipio en el año evaluado.',
								];

								if (isset($_POST['submit'])) {
									$idFormulario = $_POST['opciones'];
									$valor = editarCheckBox($idFormulario);
									
									for ($i = 0; $i < count($valor); $i++) {
										${"opcion{$i}_form{$valueCheckNames424[$i]}"} = $valor[$i];
									}
								} else {
									for ($i = 0; $i < $opciones['check424']; $i++) {
										${"opcion{$i}_form{$valueCheckNames424[$i]}"} = $_SESSION[$valueCheckNames424[$i]] ?? false;
									}
								}

							?>
							<?php for ($i = 0; $i < $opciones['check424']; $i++) : ?>
								<?php 
									$valor_variable = ${"opcion{$i}_form{$valueCheckNames424[$i]}"};
								?>
									<label>
											<input type="checkbox" name="<?= $valueCheckNames424[$i] ?>" value="<?= $valueCheckNames424[$i] ?>" <?php if ($checkboxesDeshabilitadosForm6) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
											<?= $labels424[$i] ?>
									</label>
									<br>
							<?php endfor; ?>

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="424" value="" class="btn btn-success" <?php if ($botonDeshabilitado6) echo "disabled"; ?>>Evaluar</button>
							</div>
							<?php echo isset($alert424) ? $alert424 : ''; ?>
						</div>
					</form>
			</div>
		</div>
	</div>
</div></br>
		<!--Tema 3 -- Contraloría-->

		<div class="jumbotron">
				<h2 class="display-7">4.3 Acciones</h2>
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
							<h6 class="display-15">4.3.1 Programa operativo anual para la prestación de los servicios públicos</h6>
						</p>
						<hr class="my-2">

						<div class="form-group">
							
							<?php
								
								$labels431 = [
									'a) Objetivos.',
									'b) Responsables.',
									'c) Calendario de actividades.',
									'd) Resultados esperados.',
									'e) Metas del servicio de agua potable, drenaje y alcantarillado.',
									'f) Metas del servicio de tratamiento y disposición de aguas residuales.',
									'g) Metas del servicio de alumbrado público.',
									'h) Metas del servicio de limpia y recolección.',
									'i) Metas del servicio de traslado, tratamiento y disposición final de residuos.',
									'j) Metas del servicio de panteones.',
									'k) Metas del servicio de mercados públicos.',
									'l) Metas del servicio de calles, parques y jardines.',
								];

								if (isset($_POST['submit'])) {
									$idFormulario = $_POST['opciones'];
									$valor = editarCheckBox($idFormulario);
									
									for ($i = 0; $i < count($valor); $i++) {
										${"opcion{$i}_form{$valueCheckNames431[$i]}"} = $valor[$i];
									}
								} else {
									for ($i = 0; $i < $opciones['check431']; $i++) {
										${"opcion{$i}_form{$valueCheckNames431[$i]}"} = $_SESSION[$valueCheckNames431[$i]] ?? false;
									}
								}

							?>
							<?php for ($i = 0; $i < $opciones['check431']; $i++) : ?>
								<?php 
									$valor_variable = ${"opcion{$i}_form{$valueCheckNames431[$i]}"};
								?>
									<label>
											<input type="checkbox" name="<?= $valueCheckNames431[$i] ?>" value="<?= $valueCheckNames431[$i] ?>" <?php if ($checkboxesDeshabilitadosForm7) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
											<?= $labels431[$i] ?>
									</label>
									<br>
							<?php endfor; ?>

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="431" value="" class="btn btn-success" <?php if ($botonDeshabilitado7) echo "disabled"; ?>>Evaluar</button>
							</div>
							<?php echo isset($alert431) ? $alert431 : ''; ?>
						</div>
					</form>
					<form method="POST" enctype="multipart/form-data" >
						<p>
							<h6 class="display-15">4.3.2 Cartera de proyectos para mejorar la prestación de los servicios públicos</h6>
						</p>
						<hr class="my-2">

						<div class="form-group">
							
							<?php
								
								$labels432 = [
									'a) Nombre (de cada proyecto).',
									'b) Objetivo (de cada proyecto).',
									'c) Unidad administrativa responsable (de cada proyecto).',
									'd) Cronograma (calendario de actividades de cada proyecto).',
									'e) Alcance (entregables o productos de cada proyecto).',
									'f) Costo (presupuesto de cada proyecto).',
									'g) Ficha de indicadores de seguimiento (de cada proyecto).',
									'h) Presenta por lo menos un proyecto de cinco servicios públicos diferentes.',
								];

								if (isset($_POST['submit'])) {
									$idFormulario = $_POST['opciones'];
									$valor = editarCheckBox($idFormulario);
									
									for ($i = 0; $i < count($valor); $i++) {
										${"opcion{$i}_form{$valueCheckNames432[$i]}"} = $valor[$i];
									}
								} else {
									for ($i = 0; $i < $opciones['check432']; $i++) {
										${"opcion{$i}_form{$valueCheckNames432[$i]}"} = $_SESSION[$valueCheckNames432[$i]] ?? false;
									}
								}

							?>
							<?php for ($i = 0; $i < $opciones['check432']; $i++) : ?>
								<?php 
									$valor_variable = ${"opcion{$i}_form{$valueCheckNames432[$i]}"};
								?>
									<label>
											<input type="checkbox" name="<?= $valueCheckNames432[$i] ?>" value="<?= $valueCheckNames432[$i] ?>" <?php if ($checkboxesDeshabilitadosForm8) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
											<?= $labels432[$i] ?>
									</label>
									<br>
							<?php endfor; ?>

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="432" value="" class="btn btn-success" <?php if ($botonDeshabilitado8) echo "disabled"; ?>>Evaluar</button>
							</div>
							<?php echo isset($alert432) ? $alert432 : ''; ?>
						</div>
					</form>

						</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
</br>

	

			<!--Tema 4 -- Capacitación-->

			<div class="jumbotron">
				
					<h2 class="display-7">4.4 Evaluación</h2>
				<hr class="my-2">
</div>

	<!--Indicadores de desempeño -->
	<div class="container">
	<div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				Indicadores de Desempeño
			</div>
			<div class="card-body">
				<form method="POST" enctype="multipart/form-data">

					<div class="form-group" >

					<h6 class="display-15">4.4.1 Tasa de abatimiento de calles sin revestimiento</h6>
					<hr class="my-2">
							
						<?php

							$labels441 = [
								'Metros lineales de calles sin revestimiento en el año previo al evaluado.',
								'Metros lineales de calles sin revestimiento en el año evaluado.',
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
								<input type="text" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm1) echo "disabled"; ?> required><span><?= $labels441[$index] ?></span>
							</label>
						<?php endforeach; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="441" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado9) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert441) ? $alert441 : ''; ?>
			
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data">

					<div class="form-group" >

					<h6 class="display-15">4.4.2 Tasa de abatimiento de la carencia de servicio de agua entubada en las viviendas</h6>
					<hr class="my-2">
							
						<?php

							$labels442 = [
								'Viviendas sin toma de agua entubada en el año previo al evaluado.',
								'Viviendas sin toma de agua entubada en el año evaluado.',
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
								<input type="text" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm2) echo "disabled"; ?> required><span><?= $labels442[$index] ?></span>
							</label>
						<?php endforeach; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="442" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado10) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert442) ? $alert442 : ''; ?>
			
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data">

					<div class="form-group" >

					<h6 class="display-15">4.4.3 Tasa de abatimiento del déficit del servicio de drenaje en viviendas particulares</h6>
					<hr class="my-2">
					<p>Método de cálculo:
							((Viviendas sin drenaje en el año evaluado – viviendas sin drenaje en el año previo al evaluado) / Viviendas
							sin drenaje en el año previo al evaluado) * - 100
					</p>
						<?php

							$labels443 = [
								'Viviendas sin drenaje en el año previo al evaluado.',
								'Viviendas sin drenaje en el año evaluado.',
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
								<input type="text" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm3) echo "disabled"; ?> required><span><?= $labels443[$index] ?></span>
							</label>
						<?php endforeach; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="443" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado11) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert443) ? $alert443 : ''; ?>
			
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data">

					<div class="form-group" >

					<h6 class="display-15">4.4.4 Tasa de abatimiento del déficit del servicio de alcantarillado en arterias viales</h6>
					<hr class="my-2">
					<p>Método de cálculo:
							((Tramos de calle sin alcantarillado en el año evaluado – tramos de calle sin alcantarillado en el año previo
							al evaluado) / tramos de calle sin alcantarillado en el año previo al evaluado) * - 100</p>
						<?php

							$labels444 = [
								'Tramos de calle sin alcantarillado en el año previo al evaluado.',
								'Tramos de calle sin alcantarillado en el año evaluado.',
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
								<input type="text" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm4) echo "disabled"; ?> required><span><?= $labels444[$index] ?></span>
							</label>
						<?php endforeach; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="444" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado12) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert444) ? $alert444 : ''; ?>
			
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data">

					<div class="form-group" >

					<h6 class="display-15">4.4.5 Porcentaje de agua tratada </h6>
					<hr class="my-2">
					<p>Método de cálculo:
							(Metros cúbicos (m3) de agua tratada en el año evaluado / metros cúbicos (m3) totales de aguas residuales
							en el año evaluado) * 100</p>
						<?php

							$labels445 = [
								'Metros cúbicos (m3) de agua tratada en el año evaluado.',
								'Metros cúbicos (m3) totales de aguas residuales en el año evaluado.',
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
								<input type="text" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm5) echo "disabled"; ?> required><span><?= $labels445[$index] ?></span>
							</label>
						<?php endforeach; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="445" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado13) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert445) ? $alert445 : ''; ?>
			
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data">

					<div class="form-group" >

					<h6 class="display-15">4.4.6 Cobertura del servicio de recolección de residuos sólidos  </h6>
					<hr class="my-2">
					<p>Método de cálculo:
							(Viviendas particulares habitadas que reciben el servicio de recolección de residuos en el año evaluado /
							total de viviendas particulares habitadas del municipio en el año evaluado) * 100</p>
						<?php

							$labels446 = [
								'Viviendas particulares habitadas que reciben el servicio de recolección de residuos en el año evaluado.',
								'Total de viviendas particulares habitadas del municipio en el año evaluado.',
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
								<input type="text" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm6) echo "disabled"; ?> required><span><?= $labels446[$index] ?></span>
							</label>
						<?php endforeach; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="446" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado14) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert446) ? $alert446 : ''; ?>
			
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data">

					<div class="form-group" >

					<h6 class="display-15">4.4.7 Tasa de crecimiento anual del índice de áreas verdes y recreativas per cápita  </h6>
					<hr class="my-2">
					<p>Método de cálculo:
							((Áreas verdes y recreativas per cápita en el año evaluado - áreas verdes y recreativas per cápita en el año
							previo al evaluado) / áreas verdes y recreativas per cápita en el año previo al evaluado) * 100</p>
						<?php

							$labels447 = [
								'Áreas verdes y recreativas per cápita en el año previo al evaluado.',
								'Áreas verdes y recreativas per cápita en el año evaluado.',
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
								<input type="text" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm7) echo "disabled"; ?> required><span><?= $labels447[$index] ?></span>
							</label>
						<?php endforeach; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="447" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado15) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert447) ? $alert447 : ''; ?>
						<p>¿Cómo obtener el área verde y recreativa per cápita?</p>
						<p>La fórmula es la siguiente:</p>
						<p>(total de m² de áreas verdes y recreativas / número de habitantes).</p>
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data">

					<div class="form-group" >

					<h6 class="display-15">4.4.8 Cobertura en el servicio de alumbrado público </h6>
					<hr class="my-2">
					<p>Método de cálculo:
							(Tramos de calles y espacios públicos que disponen del servicio de alumbrado público con luminarias
							funcionando en el año evaluado / tramos de calles y espacios públicos del municipio en el año evaluado)
							* 100</p>
						<?php

							$labels448 = [
								'Tramos de calles y espacios públicos que disponen del servicio de alumbrado público con luminarias funcionando en el año evaluado.',
								'Tramos de calles y espacios públicos del municipio en el año evaluado.',
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
								<input type="text" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm8) echo "disabled"; ?> required><span><?= $labels448[$index] ?></span>
							</label>
						<?php endforeach; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="448" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado16) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert448) ? $alert448 : ''; ?>
			
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data">

					<div class="form-group" >

					<h6 class="display-15">4.4.9 Cobertura en el servicio de mercados públicos per cápita </h6>
					<hr class="my-2">
					<p>Método de cálculo:
							(Total de mercados públicos municipales en el año evaluado / total de habitantes en el año evaluado)*
							100,000</p>
						<?php

							$labels449 = [
								'Total de mercados públicos municipales en el año evaluado.',
								'Total de habitantes (INEGI 2020)',
							];

							$valoresForm9 = [
								$opcion1_form9_value ?? '',
								$opcion2_form9_value ?? ''
							];
							foreach ($variableNames['form9'] as $index => $fieldName) {
								${"opcion" . ($index + 1) . "_form9_value"} = $_SESSION[$fieldName] ?? '';
							}			
						?>
						<?php foreach($variableNames['form9'] as  $index => $fieldName) : ?>
							<?php 
								$valor_variable = ${"opcion" . ($index + 1) . "_form9_value"};
							?>
							<label for="txtNombre" class="text1">
								<input type="text" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm9) echo "disabled"; ?> required><span><?= $labels449[$index] ?></span>
							</label>
						<?php endforeach; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="449" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado17) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert449) ? $alert449 : ''; ?>
			
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data">

					<div class="form-group" >

					<h6 class="display-15">4.4.10 Cobertura en el servicio de panteones </h6>
					<hr class="my-2">
					<p>Método de cálculo:
							Número de espacios disponibles para depósito de restos humanos registrados por el municipio en el año
							evaluado / demanda potencial de espacios para el depósito de restos humanos.</p>
						<?php

							$labels4410 = [
								'Número de espacios disponibles para depósito de restos humanos registrados por el municipio en el año evaluado.',
								'Demanda potencial de espacios para el depósito de restos humanos*.',
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
								<input type="text" class="form-control" name="<?= $fieldName?>" id="txtNombre" placeholder="" value="<?= $valor_variable ?>" <?php if ($inputsDeshabilitadosForm10) echo "disabled"; ?> required><span><?= $labels4410[$index] ?></span>
							</label>
						<?php endforeach; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="4410" value="Agregar" class="btn btn-success" <?php if ($botonDeshabilitado18) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert4410) ? $alert4410 : ''; ?>
			
					</div>
				</form>		
			</div>
		</div>
	</div>
	</div>
	</div></br>

		
	<?php include("../Includes/footer.php"); ?>