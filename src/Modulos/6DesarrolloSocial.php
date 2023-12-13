<?php include("../Includes/header.php"); 

// Inicia la sesión
include("../../bd.php");
// session_unset();
include("../../funciones.php");
$alerta = '';


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

	$querySelect = mysqli_query($conexion, "SELECT * FROM `formulario` f INNER JOIN modulo m ON f.id_formulario = m.id_formulario WHERE f.fecha = '$nuevafecha' and m.modulo = 'Desarrollo Social'");
	
	if (!mysqli_fetch_assoc($querySelect)) {

		$alerta = '<div class="alert alert-success" role="alert">
									Nuevo	Formulario.
							</div>';
							
		//habiltar checkbox
		// Inicializar un array con los nombres de las variables
		$checkNames = ['checkDisabled1', 'checkDisabled2', 'checkDisabled3', 'checkDisabled4', 'checkDisabled5', 'checkDisabled6', 'checkDisabled7', 'checkDisabled8', 'checkDisabled9', 'checkDisabled10', 'checkDisabled11', 'checkDisabled12','checkDisabled13', 'checkDisabled14', 'checkDisabled15', 'checkDisabled16'];

		// Establecer todas las variables de sesión a true
		foreach ($checkNames as $checkName) {
				$_SESSION[$checkName] = false;
		}

		// habilitar boton
		// Inicializar un array con los nombres de las variables
		$botonNames = ['deshabilitarBoton1', 'deshabilitarBoton2', 'deshabilitarBoton3', 'deshabilitarBoton4', 'deshabilitarBoton5', 'deshabilitarBoton6', 'deshabilitarBoton7', 'deshabilitarBoton8', 'deshabilitarBoton9', 'deshabilitarBoton10','deshabilitarBoton11', 'deshabilitarBoton12', 'deshabilitarBoton13','deshabilitarBoton14', 'deshabilitarBoton15', 'deshabilitarBoton16'];
		// Recorrer el array y asignar los valores a las variables
		foreach ($botonNames as $botonName) {
			$_SESSION[$botonName] = false;
		}
	}

}

//deshabiltar checkbox
// Inicializar un array con los nombres de las variables
$checkNames = ['checkDisabled1', 'checkDisabled2', 'checkDisabled3', 'checkDisabled4', 'checkDisabled5', 'checkDisabled6', 'checkDisabled7', 'checkDisabled8', 'checkDisabled9', 'checkDisabled10', 'checkDisabled11', 'checkDisabled12','checkDisabled13', 'checkDisabled14', 'checkDisabled15', 'checkDisabled16'];

// Recorrer el array y asignar los valores a las variables
foreach ($checkNames as $index => $checkName) {
	${"checkboxesDeshabilitadosForm" . ($index + 1)} = $_SESSION[$checkName] ?? true;
}

// deshabilitar boton
// Inicializar un array con los nombres de las variables
$botonNames = ['deshabilitarBoton1', 'deshabilitarBoton2', 'deshabilitarBoton3', 'deshabilitarBoton4', 'deshabilitarBoton5', 'deshabilitarBoton6', 'deshabilitarBoton7', 'deshabilitarBoton8', 'deshabilitarBoton9', 'deshabilitarBoton10', 'deshabilitarBoton11', 'deshabilitarBoton12', 'deshabilitarBoton13','deshabilitarBoton14', 'deshabilitarBoton15', 'deshabilitarBoton16'];
// Recorrer el array y asignar los valores a las variables
foreach ($botonNames as $index => $botonName) {
${"botonDeshabilitado" . ($index + 1)} = $_SESSION[$botonName] ?? true;
}
// valores checkboxes
// Inicializar un array con los nombres de las variables

$opciones = [
	'check611' => 6, // Último número de cada grupo de checkboxes
	'check612' => 5,
	'check613' => 3,
	'check621' => 5,
	'check622' => 7,
	'check623' => 2,
	'check631' => 7,
	'check632' => 5,
	'check641' => 3,
	'check642' => 11,
	'check643' => 9,
	'check644' => 2,
	'check651' => 7,
	'check652' => 8,
	'check661' => 7,
	'check662' => 6,
];

$valueCheckNames611 = [
'check6111', 'check6112', 'check6113', 'check6114', 'check6115', 'check6116',
];
$valueCheckNames612 = [
'check6121', 'check6122', 'check6123', 'check6124', 'check6125',
];
$valueCheckNames613 = [
'check6131', 'check6132', 'check6133',
];
$valueCheckNames621 = [
'check6211', 'check6212', 'check6213', 'check6214', 'check6215',
];
$valueCheckNames622 = [
'check6221', 'check6222', 'check6223', 'check6224', 'check6225', 'check6226', 'check6227', 
];
$valueCheckNames623 = [
'check6231', 'check6232',
];
$valueCheckNames631 = [
	'check6311', 'check6312', 'check6313', 'check6314', 'check6315', 'check6316', 'check6317',
];
$valueCheckNames632 = [
	'check6321', 'check6322', 'check6323', 'check6324', 'check6325',
];
$valueCheckNames641 = [
	'check6411', 'check6412', 'check6413',
];
$valueCheckNames642 = [
	'check6421', 'check6422', 'check6423', 'check6424', 'check6425', 'check6426', 'check6427', 'check6428', 'check6429', 'check642110', 'check64211',
];
$valueCheckNames643 = [
	'check6431', 'check6432', 'check6433', 'check6434', 'check6435', 'check6436', 'check6437', 'check6438', 'check6439',
];
$valueCheckNames644 = [
	'check6441', 'check6442',
];
$valueCheckNames651 = [
	'check6511', 'check6512', 'check6513', 'check6514', 'check6515', 'check6516', 'check6517', 
];
$valueCheckNames652 = [
	'check6521', 'check6522', 'check6523', 'check6524', 'check6525', 'check6526', 'check6527', 'check6528',
];
$valueCheckNames661 = [
	'check6611', 'check6612', 'check6613', 'check6614', 'check6615', 'check6616', 'check6617', 
];
$valueCheckNames662 = [
	'check6621', 'check6622', 'check6623', 'check6624', 'check6625', 'check6626',
];

// Crear variables dinámicas
for ($i = 0; $i < $opciones['check611']; $i++) {
${"opcion{$i}_form{$valueCheckNames611[$i]}"} = $_SESSION[$valueCheckNames611[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check612']; $i++) {
${"opcion{$i}_form{$valueCheckNames612[$i]}"} = $_SESSION[$valueCheckNames612[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check613']; $i++) {
${"opcion{$i}_form{$valueCheckNames613[$i]}"} = $_SESSION[$valueCheckNames613[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check621']; $i++) {
${"opcion{$i}_form{$valueCheckNames621[$i]}"} = $_SESSION[$valueCheckNames621[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check622']; $i++) {
${"opcion{$i}_form{$valueCheckNames622[$i]}"} = $_SESSION[$valueCheckNames622[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check623']; $i++) {
${"opcion{$i}_form{$valueCheckNames623[$i]}"} = $_SESSION[$valueCheckNames623[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check631']; $i++) {
${"opcion{$i}_form{$valueCheckNames631[$i]}"} = $_SESSION[$valueCheckNames631[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check632']; $i++) {
${"opcion{$i}_form{$valueCheckNames632[$i]}"} = $_SESSION[$valueCheckNames632[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check641']; $i++) {
${"opcion{$i}_form{$valueCheckNames641[$i]}"} = $_SESSION[$valueCheckNames641[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check642']; $i++) {
${"opcion{$i}_form{$valueCheckNames642[$i]}"} = $_SESSION[$valueCheckNames642[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check643']; $i++) {
${"opcion{$i}_form{$valueCheckNames643[$i]}"} = $_SESSION[$valueCheckNames643[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check644']; $i++) {
${"opcion{$i}_form{$valueCheckNames644[$i]}"} = $_SESSION[$valueCheckNames644[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check651']; $i++) {
${"opcion{$i}_form{$valueCheckNames651[$i]}"} = $_SESSION[$valueCheckNames651[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check652']; $i++) {
${"opcion{$i}_form{$valueCheckNames652[$i]}"} = $_SESSION[$valueCheckNames652[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check661']; $i++) {
${"opcion{$i}_form{$valueCheckNames661[$i]}"} = $_SESSION[$valueCheckNames661[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check662']; $i++) {
${"opcion{$i}_form{$valueCheckNames662[$i]}"} = $_SESSION[$valueCheckNames662[$i]] ?? false;
}


// Alerta para cada subtema
$alerts = [
'alert611', 'alert612','alert613',
'alert621', 'alert622','alert623',
'alert631', 'alert632',
'alert641', 'alert642','alert643','alert644',
'alert651', 'alert652',
'alert661', 'alert662',
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

	$querySelect = mysqli_query($conexion, "SELECT * FROM `formulario` f INNER JOIN modulo m ON f.id_formulario = m.id_formulario WHERE f.fecha = '$nuevafecha' and m.modulo = 'Desarrollo Social'");
	
	if (!mysqli_fetch_assoc($querySelect)) {
		$idFormulario = registrarFormularioNuevo($fechaCompleta, $fechaActual, $nuevafecha);
		$idModulo = registrarModulo($idFormulario, 'Desarrollo Social');
		$idTema1 = registrarTema($idModulo, "6.1 Educación");
		$_SESSION['idTema1'] = $idTema1;
		$idTema2 = registrarTema($idModulo, "6.2 Salud");
		$_SESSION['idTema2'] = $idTema2;
		$idTema3 = registrarTema($idModulo, "6.3 Grupos Vulnerables");
		$_SESSION['idTema3'] = $idTema3;
		$idTema4 = registrarTema($idModulo, "6.4 Igualdad de Género");
		$_SESSION['idTema4'] = $idTema4;
		$idTema5 = registrarTema($idModulo, "6.5 Juventud");
		$_SESSION['idTema5'] = $idTema5;
		$idTema6 = registrarTema($idModulo, "6.6 Deporte y Recreación");
		$_SESSION['idTema6'] = $idTema6;

		$enunciados1 = $_SESSION['enunciados1'];
		$valor_checkbox1 = $_SESSION['valorcheck1'];
		registrarIndicadoresCheckboxes($valueCheckNames611, $valor_checkbox1, $enunciados1, $idTema1, '6.1.1 Diagnóstico de educación básica', 1);
		$enunciados2 = $_SESSION['enunciados2'];
		$valor_checkbox2 = $_SESSION['valorcheck2'];
		registrarIndicadoresCheckboxes($valueCheckNames612, $valor_checkbox2, $enunciados2, $idTema1, '6.1.2 Acciones anuales de apoyo a la educación básica', 1);
		$enunciados3 = $_SESSION['enunciados3'];
		$valor_checkbox3 = $_SESSION['valorcheck3'];
		registrarIndicadoresCheckboxes($valueCheckNames613, $valor_checkbox3, $enunciados3, $idTema1, '6.1.3 Coordinación para promover la educación básica en el municipio', 1);
		$enunciados4 = $_SESSION['enunciados4'];
		$valor_checkbox4 = $_SESSION['valorcheck4'];
		registrarIndicadoresCheckboxes($valueCheckNames621, $valor_checkbox4, $enunciados4, $idTema2, '6.2.1 Diagnóstico en materia de salud', 1);
		$enunciados5 = $_SESSION['enunciados5'];
		$valor_checkbox5 = $_SESSION['valorcheck5'];
		registrarIndicadoresCheckboxes($valueCheckNames622, $valor_checkbox5, $enunciados5, $idTema2, '6.2.2 Acciones anuales de fomento y cuidado de la salud', 1);
		$enunciados6 = $_SESSION['enunciados6'];
		$valor_checkbox6 = $_SESSION['valorcheck6'];
		registrarIndicadoresCheckboxes($valueCheckNames623, $valor_checkbox6, $enunciados6, $idTema2, "6.2.3 Coordinación en materia de salud", 1);
		$enunciados7 = $_SESSION['enunciados7'];
		$valor_checkbox7 = $_SESSION['valorcheck7'];
		registrarIndicadoresCheckboxes($valueCheckNames631, $valor_checkbox7, $enunciados7, $idTema3, '6.3.1 Diagnóstico de grupos vulnerables', 1);
		$enunciados8 = $_SESSION['enunciados8'];
		$valor_checkbox8 = $_SESSION['valorcheck8'];
		registrarIndicadoresCheckboxes($valueCheckNames632, $valor_checkbox8, $enunciados8, $idTema3, '6.3.2 Acciones anuales para la atención de grupos vulnerables', 1);
		$enunciados9 = $_SESSION['enunciados9'];
		$valor_checkbox9 = $_SESSION['valorcheck9'];
		registrarIndicadoresCheckboxes($valueCheckNames641, $valor_checkbox9, $enunciados9, $idTema4, '6.4.1 Instancia municipal responsable de promover la igualdad de género', 1);
		$enunciados10 = $_SESSION['enunciados10'];
		$valor_checkbox10 = $_SESSION['valorcheck10'];
		registrarIndicadoresCheckboxes($valueCheckNames642, $valor_checkbox10, $enunciados10, $idTema4, '6.4.2 Diagnóstico de igualdad de género', 1);
		$enunciados11 = $_SESSION['enunciados11'];
		$valor_checkbox11 = $_SESSION['valorcheck11'];
		registrarIndicadoresCheckboxes($valueCheckNames643, $valor_checkbox11, $enunciados11, $idTema4, '6.4.3 Acciones anuales para la promoción de la igualdad de género', 1);
		$enunciados12 = $_SESSION['enunciados12'];
		$valor_checkbox12 = $_SESSION['valorcheck12'];
		registrarIndicadoresCheckboxes($valueCheckNames644, $valor_checkbox12, $enunciados12, $idTema4, "6.4.4 Coordinación para la promoción de igualdad de género", 1);
		$enunciados13 = $_SESSION['enunciados13'];
		$valor_checkbox13 = $_SESSION['valorcheck13'];
		registrarIndicadoresCheckboxes($valueCheckNames651, $valor_checkbox13, $enunciados13, $idTema5, '6.5.1 Diagnóstico de juventud', 1);
		$enunciados14 = $_SESSION['enunciados14'];
		$valor_checkbox14 = $_SESSION['valorcheck14'];
		registrarIndicadoresCheckboxes($valueCheckNames652, $valor_checkbox14, $enunciados14, $idTema5, "6.5.2 Acciones anuales orientadas a la juventud", 1);
		$enunciados15 = $_SESSION['enunciados15'];
		$valor_checkbox15 = $_SESSION['valorcheck15'];
		registrarIndicadoresCheckboxes($valueCheckNames661, $valor_checkbox15, $enunciados15, $idTema6, '6.6.1 Diagnóstico de deporte y recreación', 1);
		$enunciados16 = $_SESSION['enunciados16'];
		$valor_checkbox16 = $_SESSION['valorcheck16'];
		registrarIndicadoresCheckboxes($valueCheckNames662, $valor_checkbox16, $enunciados16, $idTema6, "6.6.2 Acciones anuales para promover el deporte y recreación", 1);
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

  if (isset($_POST['611'])) {
		$checkboxesDeshabilitadosForm1 = true;
		$_SESSION['checkDisabled1'] = $checkboxesDeshabilitadosForm1;
		$botonDeshabilitado1 = true;
		$_SESSION['deshabilitarBoton1'] = $botonDeshabilitado1;
		$count = 0;
		$valor_checkbox1 = array();
		foreach ($valueCheckNames611 as $index => $name) {
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
			'a) Matrícula escolar en nivel básico (preescolar, primaria y secundaria).',
			'b) Infraestructura (número de escuelas de educación básica)',
			'c) Inventario de escuelas de nivel básico (preescolar, primaria y secundaria) que cuentan con sanitarios en funcionamiento.',
			'd) Inventario de escuelas de nivel básico (preescolar, primaria y secundaria) que no cuentan con sanitarios en funcionamiento.',
			'e) Análisis de las condiciones y necesidades de las escuelas públicas.',
			'f) Listado de escuelas públicas de educación básica que tienen acceso a internet.'
		];
		$_SESSION['enunciados1'] = $enunciados;
		

		// Evaluar el estado general del formulario
		$alert611 = evaluarEstadoAlertaCheck($count, 6);
		$_SESSION['alert611'] = $alert611;

	} elseif (isset($_POST['612'])) {
    $checkboxesDeshabilitadosForm2 = true;
		$_SESSION['checkDisabled2'] = $checkboxesDeshabilitadosForm2;
		$botonDeshabilitado2 = true;
		$_SESSION['deshabilitarBoton2'] = $botonDeshabilitado2;
		$count = 0;
		$valor_checkbox2 = array();
		foreach ($valueCheckNames612 as $index  => $name) {
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
			'a) Actividades de promoción de la educación básica (preescolar, primaria y secundaria).',
			'b) Acciones que contribuyan a abatir el analfabetismo.',
			'c) Proyectos y programas que apoyen la permanencia escolar de niñas, niños y adolescentes.',
			'd) Lista de acciones de mantenimiento en escuelas de educación básica (preescolar, primaria y secundaria).',
			'e) Informe de resultados, firmados por la funcionaria o funcionario responsable.'
		];
		$_SESSION['enunciados2'] = $enunciados;
		$alert612 = evaluarEstadoAlertaCheck($count, 5);
		$_SESSION['alert612'] = $alert612;

  } elseif (isset($_POST['613'])) {
		$checkboxesDeshabilitadosForm3 = true;
		$_SESSION['checkDisabled3'] = $checkboxesDeshabilitadosForm3;
		$botonDeshabilitado3 = true;
		$_SESSION['deshabilitarBoton3'] = $botonDeshabilitado3;
		$count = 0;
		$valor_checkbox3 = array();
		foreach ($valueCheckNames613 as $index => $name) {
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
			'a) Listado de escuelas de educación básica (preescolar, primaria y secundaria) que cuentan con Comités Escolares de Administración Participativa o Consejos Municipales de Participación.',
			'b) Convenio vigente con organizaciones de la sociedad civil, escuelas o iniciativa privada, cuyo propósito sea apoyar la educación básica.',
			'c) Convenio vigente y/o acuerdos de colaboración, con alguna instancia del gobierno federal, estatal u otro municipio, con el propósito de apoyar la educación básica.'
		];
		$_SESSION['enunciados3'] = $enunciados;
		$alert613 = evaluarEstadoAlertaCheck($count, 3);
		$_SESSION['alert613'] = $alert613;

	} elseif (isset($_POST['621'])) {
		$checkboxesDeshabilitadosForm4 = true;
		$_SESSION['checkDisabled4'] = $checkboxesDeshabilitadosForm4;
		$botonDeshabilitado4 = true;
		$_SESSION['deshabilitarBoton4'] = $botonDeshabilitado4;
		$count = 0;
		$valor_checkbox4 = array();
		foreach ($valueCheckNames621 as $index => $name) {
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
			'a) Infraestructura en materia de salud.',
			'b) Principales causas de morbilidad en mujeres y hombres.',
			'c) Principales causas de mortalidad en mujeres y hombres.',
			'd) Principales problemas de adicción en la población.',
			'e) Número de casos de enfermedades de transmisión sexual.',
		];
		$_SESSION['enunciados4'] = $enunciados;
		$alert621 = evaluarEstadoAlertaCheck($count, 5);
		$_SESSION['alert621'] = $alert621;

	} elseif (isset($_POST['622'])) {
		$checkboxesDeshabilitadosForm5 = true;
		$_SESSION['checkDisabled5'] = $checkboxesDeshabilitadosForm5;
		$botonDeshabilitado5 = true;
		$_SESSION['deshabilitarBoton5'] = $botonDeshabilitado5;
		$count = 0;
		$valor_checkbox5 = array();
		foreach ($valueCheckNames622 as $index => $name) {
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
			'a) Campaña de difusión hacia la población sobre problemas prioritarios de salud.',
			'b) Acciones en temas de salud sexual y reproductiva.',
			'c) Acciones para promover hábitos alimenticios saludables (nutrición).',
			'd) Acciones de prevención de mortalidad materna y perinatal.',
			'e) Actividades para la prevención y combate de adicciones.',
			'f) Acciones encaminadas a la prevención de enfermedades de transmisión sexual.',
			'g) Informe de resultados, firmados por la funcionaria o funcionario responsable.',
		];
		$_SESSION['enunciados5'] = $enunciados;
		$alert622 = evaluarEstadoAlertaCheck($count, 7);
		$_SESSION['alert622'] = $alert622;

	} elseif (isset($_POST['623'])) {
		$checkboxesDeshabilitadosForm6 = true;
		$_SESSION['checkDisabled6'] = $checkboxesDeshabilitadosForm6;
		$botonDeshabilitado6 = true;
		$_SESSION['deshabilitarBoton6'] = $botonDeshabilitado6;
		$count = 0;
		$valor_checkbox6 = array();
		foreach ($valueCheckNames623 as $index => $name) {
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
			'a) Convenio vigente con organizaciones de la sociedad civil, centros de salud, hospitales o 
			instancias privadas, cuyo propósito sea promover el cuidado de la salud.',
			'b) Convenio vigente y/o acuerdos de colaboración, con alguna instancia del gobierno federal, 
			estatal u otro municipio, con el propósito de promover el cuidado de la salud.'
		];
		$_SESSION['enunciados6'] = $enunciados;
		$alert623 = evaluarEstadoAlertaCheck($count, 2);
		$_SESSION['alert623'] = $alert623;

	} elseif (isset($_POST['631'])) {
		$checkboxesDeshabilitadosForm7 = true;
		$_SESSION['checkDisabled7'] = $checkboxesDeshabilitadosForm7;
		$botonDeshabilitado7 = true;
		$_SESSION['deshabilitarBoton7'] = $botonDeshabilitado7;
		$count = 0;
		$valor_checkbox7 = array();
		foreach ($valueCheckNames631 as $index => $name) {
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
			'a) Situación de niñas, niños y adolescentes.',
			'b) Situación de personas en condición de calle.',
			'c) Situación de personas con discapacidad',
			'd) Situación de personas adultas mayores.',
			'e) Situación de pueblos indígenas y afromexicanos.',
			'f) Situación de personas migrantes.',
			'g) Situación de madres solteras y mujeres embarazadas.',
		];
		$_SESSION['enunciados7'] = $enunciados;
		$alert631 = evaluarEstadoAlertaCheck($count, 7);
		$_SESSION['alert631'] = $alert631;

	} elseif (isset($_POST['632'])) {
		$checkboxesDeshabilitadosForm8 = true;
		$_SESSION['checkDisabled8'] = $checkboxesDeshabilitadosForm8;
		$botonDeshabilitado8 = true;
		$_SESSION['deshabilitarBoton8'] = $botonDeshabilitado8;
		$count = 0;
		$valor_checkbox8 = array();
		foreach ($valueCheckNames632 as $index => $name) {
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
			'a) Objetivos.',
			'b) Metas.',
			'c) Estrategias y líneas de acción.',
			'd) Proyectos o programas específicos que atiendan a grupos vulnerables.',
			'e) Informes de avances y resultados, firmados por la funcionaria o funcionario responsable.'
		];
		$_SESSION['enunciados8'] = $enunciados;
		$alert632 = evaluarEstadoAlertaCheck($count, 5);
		$_SESSION['alert632'] = $alert632;

	} elseif (isset($_POST['641'])) {
		$checkboxesDeshabilitadosForm9 = true;
		$_SESSION['checkDisabled9'] = $checkboxesDeshabilitadosForm9;
		$botonDeshabilitado9 = true;
		$_SESSION['deshabilitarBoton9'] = $botonDeshabilitado9;
		$count = 0;
		$valor_checkbox9 = array();
		foreach ($valueCheckNames641 as $index => $name) {
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
			'a) Organigrama de la administración municipal, con la unidad administrativa responsable de promover la igualdad de género',
			'b) Manual de organización de la unidad administrativa responsable de promover la igualdad de género que especifique objetivo, puestos y funciones.',
			'c) Programa Operativo Anual con objetivos, metas y resultados esperados.'
		];
		$_SESSION['enunciados9'] = $enunciados;
		$alert641 = evaluarEstadoAlertaCheck($count, 3);
		$_SESSION['alert641'] = $alert641;

	} elseif (isset($_POST['642'])) {
		$checkboxesDeshabilitadosForm10 = true;
		$_SESSION['checkDisabled10'] = $checkboxesDeshabilitadosForm10;
		$botonDeshabilitado10 = true;
		$_SESSION['deshabilitarBoton10'] = $botonDeshabilitado10;
		$count = 0;
		$valor_checkbox10 = array();
		foreach ($valueCheckNames642 as $index => $name) {
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
			'a) Análisis de las disposiciones normativas federales, estatales y municipales en materia de igualdad de género.',
			'b) Situación del acceso de las mujeres y niñas a la educación',
			'c) Situación del acceso de las mujeres y adolescentes a la salud sexual y reproductiva',
			'd) Situación del acceso de las mujeres y niñas a la seguridad social.',
			'e) Situación del acceso de las mujeres al trabajo remunerado.',
			'f) Situación del acceso de las mujeres a la participación política.',
			'g) Número de mujeres jefa de hogar y en condición de pobreza.',
			'h) Número de mujeres adolescentes embarazadas.',
			'i) Situación de violencia contra las mujeres, niñas y adolescentes en todos los ámbitos de convivencia (público, familiar, escolar, laboral, comunitario e institucional).',
			'j) Situación de programas para el cuidado de infantes y otros familiares que requieren atención.',
			'k) Recursos humanos, materiales y financieros con los que cuenta la unidad responsable en el municipio para la promoción de la igualdad de género'
		];
		$_SESSION['enunciados10'] = $enunciados;
		$alert642 = evaluarEstadoAlertaCheck($count, 11);
		$_SESSION['alert642'] = $alert642;

	} elseif (isset($_POST['643'])) {
		$checkboxesDeshabilitadosForm11 = true;
		$_SESSION['checkDisabled11'] = $checkboxesDeshabilitadosForm11;
		$botonDeshabilitado11 = true;
		$_SESSION['deshabilitarBoton11'] = $botonDeshabilitado11;
		$count = 0;
		$valor_checkbox11 = array();
		foreach ($valueCheckNames643 as $index => $name) {
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
			'a) Capacitaciones en materia de igualdad entre mujeres y hombres, dirigida a funcionarias y funcionarios de la administración pública municipal.',
			'b) Acciones de promoción para mujeres dentro de la administración pública municipal, en puestos de alto nivel y responsabilidad.',
			'c) Apoyo para financiamiento de proyectos productivos de mujeres, ya sea en forma individual o colectiva, del municipio o en coordinación con el gobierno estatal o federal.',
			'd) Protocolo de atención de casos de violencia contra las mujeres.',
			'e) Campaña para fomentar el acceso y permanencia de mujeres, niñas y adolescentes en el sistema educativo.',
			'f) Vinculación con programas para el cuidado de infantes y otros familiares que requieren atención.',
			'g) Acciones para asistir a que las mujeres cuenten con acceso a la seguridad social.',
			'h) Acciones de inclusión de la perspectiva de género en la elaboración de presupuestos.',
			'i) Informes de avances y resultados, firmados por la funcionaria o funcionario responsable.'
		];
		$_SESSION['enunciados11'] = $enunciados;
		$alert643 = evaluarEstadoAlertaCheck($count, 9);
		$_SESSION['alert643'] = $alert643;

	} elseif (isset($_POST['644'])) {
		$checkboxesDeshabilitadosForm12 = true;
		$_SESSION['checkDisabled12'] = $checkboxesDeshabilitadosForm12;
		$botonDeshabilitado12 = true;
		$_SESSION['deshabilitarBoton12'] = $botonDeshabilitado12;
		$count = 0;
		$valor_checkbox12 = array();
		foreach ($valueCheckNames644 as $index => $name) {
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
			'a) Convenio vigente con organizaciones de la sociedad civil, centros de asistencia o instancias privadas, cuyo propósito sea promover la igualdad de género.',
			'b) Convenio vigente y/o acuerdos de colaboración, con alguna instancia del gobierno federal, estatal u otro municipio, cuyo propósito sea promover la igualdad de género.'
		];
		$_SESSION['enunciados12'] = $enunciados;
		$alert644 = evaluarEstadoAlertaCheck($count, 2);
		$_SESSION['alert644'] = $alert644;

	} elseif (isset($_POST['651'])) {
		$checkboxesDeshabilitadosForm13 = true;
		$_SESSION['checkDisabled13'] = $checkboxesDeshabilitadosForm13;
		$botonDeshabilitado13 = true;
		$_SESSION['deshabilitarBoton13'] = $botonDeshabilitado13;
		$count = 0;
		$valor_checkbox13 = array();
		foreach ($valueCheckNames651 as $index => $name) {
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
			'a) Análisis de las disposiciones normativas federales, estatales y municipales en materia de juventud.',
			'b) Número de mujeres y hombres en edad joven (12 a 29 años).',
			'c) Esquemas de participación de la juventud en salud y educación.',
			'd) Mecanismos de participación de las personas jóvenes en actividades políticas, cívicas, culturales y deportivas.',
			'e) Número de personas en edad joven sin ocupación laboral formal.',
			'f) Jóvenes en situación de adicción.',
			'g) Recursos humanos, materiales y financieros con los que cuenta la unidad responsable del municipio para la atención de la juventud.'
		];
		$_SESSION['enunciados13'] = $enunciados;
		$alert651 = evaluarEstadoAlertaCheck($count, 7);
		$_SESSION['alert651'] = $alert651;

	} elseif (isset($_POST['652'])) {
		$checkboxesDeshabilitadosForm14 = true;
		$_SESSION['checkDisabled14'] = $checkboxesDeshabilitadosForm14;
		$botonDeshabilitado14 = true;
		$_SESSION['deshabilitarBoton14'] = $botonDeshabilitado14;
		$count = 0;
		$valor_checkbox14 = array();
		foreach ($valueCheckNames652 as $index => $name) {
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
			'a) Acciones para fomentar la participación social de la juventud.',
			'b) Acciones para promover el acceso y permanencia de las y los jóvenes en la educación, por medio de estímulos y apoyos para la población en situación de vulnerabilidad.',
			'c) Campañas de orientación vocacional de la juventud.',
			'd) Acciones orientadas a capacitación o acceso al empleo formal de las personas jóvenes.',
			'e) Campañas de difusión de información sobre salud sexual y reproductiva, nutrición, adicciones y prevención de enfermedades.',
			'f) Acciones para fomentar la participación de la juventud en temas de ciencia y tecnología.',
			'g) Programas o proyectos para apoyo a la juventud emprendedora.',
			'h) Informes de avances y resultados, firmados por la funcionaria o funcionario responsable.'
		];
		$_SESSION['enunciados14'] = $enunciados;
		$alert652 = evaluarEstadoAlertaCheck($count, 8);
		$_SESSION['alert652'] = $alert652;

	} elseif (isset($_POST['661'])) {
		$checkboxesDeshabilitadosForm15 = true;
		$_SESSION['checkDisabled15'] = $checkboxesDeshabilitadosForm15;
		$botonDeshabilitado15 = true;
		$_SESSION['deshabilitarBoton15'] = $botonDeshabilitado15;
		$count = 0;
		$valor_checkbox15 = array();
		foreach ($valueCheckNames661 as $index => $name) {
			// Verificar si el checkbox está marcado
			if (isset($_POST[$name])) {
					// El checkbox está marcado, puedes hacer lo que necesites con el valor
					$valor_checkbox15[$index] = $_POST[$name];
					$_SESSION[$name] = true;
					$count = $count + 1;
			} else {
				$valor_checkbox15[$index] = "";
					$_SESSION[$name] = false;
			}
		}
		$_SESSION['valorcheck15'] = $valor_checkbox15;
		$enunciados = [
			'a) Análisis de las disposiciones normativas federales, estatales y municipales en materia de juventud.',
			'b) Número de espacios diseñados para deporte y recreación.',
			'c) Número de actividades deportivas.',
			'd) Número de actividades recreativas.',
			'e) Situación y requerimientos de mantenimiento de la infraestructura utilizada para realizar actividades deportivas y recreativas.',
			'f) Personal capacitado para el fomento del deporte y la recreación.',
			'g) Recursos humanos, materiales y financieros con los que se cuenta para la promoción del deporte y la recreación.'
		];
		$_SESSION['enunciados15'] = $enunciados;
		$alert661 = evaluarEstadoAlertaCheck($count, 7);
		$_SESSION['alert661'] = $alert661;

	} elseif (isset($_POST['662'])) {
		$checkboxesDeshabilitadosForm16 = true;
		$_SESSION['checkDisabled16'] = $checkboxesDeshabilitadosForm16;
		$botonDeshabilitado16 = true;
		$_SESSION['deshabilitarBoton16'] = $botonDeshabilitado16;
		$count = 0;
		$valor_checkbox16 = array();
		foreach ($valueCheckNames662 as $index => $name) {
			// Verificar si el checkbox está marcado
			if (isset($_POST[$name])) {
					// El checkbox está marcado, puedes hacer lo que necesites con el valor
					$valor_checkbox16[$index] = $_POST[$name];
					$_SESSION[$name] = true;
					$count = $count + 1;
			} else {
				$valor_checkbox16[$index] = "";
					$_SESSION[$name] = false;
			}
		}
		$_SESSION['valorcheck16'] = $valor_checkbox16;
		$enunciados = [
			'a) Acciones para promover el deporte y la recreación de manera incluyente.',
			'b) Programas de actividad física y deporte, diferenciados para atender a los distintos grupos de población.',
			'c) Programa de mantenimiento de instalaciones y espacios públicos destinados al deporte y la recreación.',
			'd) Acciones para fomentar la recreación en todos los grupos de población.',
			'e) Capacitación del personal dedicado a promover el deporte y la recreación.',
			'f) Informes de avances y resultados, firmados por la funcionaria o funcionario responsable.'
		];
		$_SESSION['enunciados16'] = $enunciados;
		$alert662 = evaluarEstadoAlertaCheck($count, 6);
		$_SESSION['alert662'] = $alert662;

	}
}


?>



     <!--Enlaces de los stilo CSS -->

	<!--<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />-->
	<link rel="stylesheet" href="../../assets/css/modulos.css" />

<img class="card-img-top" src="../../assets/img/DesarrolloSocial.png"
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
    <!-- Modulo 1 Organizacion -->

    <!--Tema 1 -- Estructura -->
	<div class="jumbotron">
	<h2 class="display-7">6.1 Educación<h2>
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
						<h6 class="display-15">6.1.1 Diagnóstico de educación básica</h6>
					</p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels611 = [
								'a) Matrícula escolar en nivel básico (preescolar, primaria y secundaria).',
								'b) Infraestructura (número de escuelas de educación básica)',
								'c) Inventario de escuelas de nivel básico (preescolar, primaria y secundaria) que cuentan con sanitarios en funcionamiento.',
								'd) Inventario de escuelas de nivel básico (preescolar, primaria y secundaria) que no cuentan con sanitarios en funcionamiento.',
								'e) Análisis de las condiciones y necesidades de las escuelas públicas.',
								'f) Listado de escuelas públicas de educación básica que tienen acceso a internet.'
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames611[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check611']; $i++) {
									${"opcion{$i}_form{$valueCheckNames611[$i]}"} = $_SESSION[$valueCheckNames611[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check611']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames611[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames611[$i] ?>" value="<?= $valueCheckNames611[$i] ?>" <?php if ($checkboxesDeshabilitadosForm1) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels611[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="611" value="" class="btn btn-success" <?php if ($botonDeshabilitado1) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert611) ? $alert611 : ''; ?>
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data" >
					<p>
						<h6 class="display-15">6.1.2 Acciones anuales de apoyo a la educación básica</h6>
					</p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels612 = [
								'a) Actividades de promoción de la educación básica (preescolar, primaria y secundaria).',
								'b) Acciones que contribuyan a abatir el analfabetismo.',
								'c) Proyectos y programas que apoyen la permanencia escolar de niñas, niños y adolescentes.',
								'd) Lista de acciones de mantenimiento en escuelas de educación básica (preescolar, primaria y secundaria).',
								'e) Informe de resultados, firmados por la funcionaria o funcionario responsable.'
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames612[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check612']; $i++) {
									${"opcion{$i}_form{$valueCheckNames612[$i]}"} = $_SESSION[$valueCheckNames612[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check612']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames612[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames612[$i] ?>" value="<?= $valueCheckNames612[$i] ?>" <?php if ($checkboxesDeshabilitadosForm2) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels612[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="612" value="" class="btn btn-success" <?php if ($botonDeshabilitado2) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert612) ? $alert612 : ''; ?>
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data" >
					<p>
						<h6 class="display-15">6.1.3 Coordinación para promover la educación básica en el municipio</h6>
					</p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels613 = [
								'a) Listado de escuelas de educación básica (preescolar, primaria y secundaria) que cuentan con Comités Escolares de Administración Participativa o Consejos Municipales de Participación.',
								'b) Convenio vigente con organizaciones de la sociedad civil, escuelas o iniciativa privada, cuyo propósito sea apoyar la educación básica.',
								'c) Convenio vigente y/o acuerdos de colaboración, con alguna instancia del gobierno federal, estatal u otro municipio, con el propósito de apoyar la educación básica.'
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames613[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check613']; $i++) {
									${"opcion{$i}_form{$valueCheckNames613[$i]}"} = $_SESSION[$valueCheckNames613[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check613']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames613[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames613[$i] ?>" value="<?= $valueCheckNames613[$i] ?>" <?php if ($checkboxesDeshabilitadosForm3) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels613[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="613" value="" class="btn btn-success" <?php if ($botonDeshabilitado3) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert613) ? $alert613 : ''; ?>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
	</div></br>


	<!--Tema 2 -- Planeacion-->

	<div class="jumbotron">
			<h2 class="display-7">6.2 Salud</h2>
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
						<h6 class="display-15">6.2.1 Diagnóstico en materia de salud</h6>
					</p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels621 = [
								'a) Infraestructura en materia de salud.',
								'b) Principales causas de morbilidad en mujeres y hombres.',
								'c) Principales causas de mortalidad en mujeres y hombres.',
								'd) Principales problemas de adicción en la población.',
								'e) Número de casos de enfermedades de transmisión sexual.',
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames621[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check621']; $i++) {
									${"opcion{$i}_form{$valueCheckNames621[$i]}"} = $_SESSION[$valueCheckNames621[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check621']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames621[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames621[$i] ?>" value="<?= $valueCheckNames621[$i] ?>" <?php if ($checkboxesDeshabilitadosForm4) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels621[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="621" value="" class="btn btn-success" <?php if ($botonDeshabilitado4) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert621) ? $alert621 : ''; ?>
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data" >
					<p>
						<h6 class="display-15">6.2.2 Acciones anuales de fomento y cuidado de la salud</h6>
					</p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels622 = [
								'a) Campaña de difusión hacia la población sobre problemas prioritarios de salud.',
								'b) Acciones en temas de salud sexual y reproductiva.',
								'c) Acciones para promover hábitos alimenticios saludables (nutrición).',
								'd) Acciones de prevención de mortalidad materna y perinatal.',
								'e) Actividades para la prevención y combate de adicciones.',
								'f) Acciones encaminadas a la prevención de enfermedades de transmisión sexual.',
								'g) Informe de resultados, firmados por la funcionaria o funcionario responsable.',
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames622[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check622']; $i++) {
									${"opcion{$i}_form{$valueCheckNames622[$i]}"} = $_SESSION[$valueCheckNames622[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check622']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames622[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames622[$i] ?>" value="<?= $valueCheckNames622[$i] ?>" <?php if ($checkboxesDeshabilitadosForm5) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels622[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="622" value="" class="btn btn-success" <?php if ($botonDeshabilitado5) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert622) ? $alert622 : ''; ?>
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data" >
					<p>
						<h6 class="display-15">6.2.3 Coordinación en materia de salud</h6>
					</p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels623 = [
								'a) Convenio vigente con organizaciones de la sociedad civil, centros de salud, hospitales o 
								instancias privadas, cuyo propósito sea promover el cuidado de la salud.',
								'b) Convenio vigente y/o acuerdos de colaboración, con alguna instancia del gobierno federal, 
								estatal u otro municipio, con el propósito de promover el cuidado de la salud.'
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames623[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check623']; $i++) {
									${"opcion{$i}_form{$valueCheckNames623[$i]}"} = $_SESSION[$valueCheckNames623[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check623']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames623[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames623[$i] ?>" value="<?= $valueCheckNames623[$i] ?>" <?php if ($checkboxesDeshabilitadosForm6) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels623[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="623" value="" class="btn btn-success" <?php if ($botonDeshabilitado6) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert623) ? $alert623 : ''; ?>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
	</div></br>

	
        
		<!--Tema 3 -- Contraloría-->

		<div class="jumbotron">
		<h2 class="display-7">6.3 Grupos Vulnerables</h2></p>
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
						<h6 class="display-15">6.3.1 Diagnóstico de grupos vulnerables</h6>
					</p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels631 = [
								'a) Situación de niñas, niños y adolescentes.',
								'b) Situación de personas en condición de calle.',
								'c) Situación de personas con discapacidad',
								'd) Situación de personas adultas mayores.',
								'e) Situación de pueblos indígenas y afromexicanos.',
								'f) Situación de personas migrantes.',
								'g) Situación de madres solteras y mujeres embarazadas.',
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames631[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check631']; $i++) {
									${"opcion{$i}_form{$valueCheckNames631[$i]}"} = $_SESSION[$valueCheckNames631[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check631']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames631[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames631[$i] ?>" value="<?= $valueCheckNames631[$i] ?>" <?php if ($checkboxesDeshabilitadosForm7) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels631[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="631" value="" class="btn btn-success" <?php if ($botonDeshabilitado7) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert631) ? $alert631 : ''; ?>
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data" >
					<p>
						<h6 class="display-15">6.3.2 Acciones anuales para la atención de grupos vulnerables</h6>
					</p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels632 = [
								'a) Objetivos.',
								'b) Metas.',
								'c) Estrategias y líneas de acción.',
								'd) Proyectos o programas específicos que atiendan a grupos vulnerables.',
								'e) Informes de avances y resultados, firmados por la funcionaria o funcionario responsable.'
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames632[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check632']; $i++) {
									${"opcion{$i}_form{$valueCheckNames632[$i]}"} = $_SESSION[$valueCheckNames632[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check632']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames632[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames632[$i] ?>" value="<?= $valueCheckNames632[$i] ?>" <?php if ($checkboxesDeshabilitadosForm8) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels632[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="632" value="" class="btn btn-success" <?php if ($botonDeshabilitado8) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert632) ? $alert632 : ''; ?>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
	</div></br>

			<!--Tema 4 -- Capacitación-->

			<div class="jumbotron">
			<h2 class="display-7">6.4 Igualdad de Género</h2>
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
						<h6 class="display-15">6.4.1 Instancia municipal responsable de promover la igualdad de género</h6>
					</p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels641 = [
								'a) Organigrama de la administración municipal, con la unidad administrativa responsable de promover la igualdad de género',
								'b) Manual de organización de la unidad administrativa responsable de promover la igualdad de género que especifique objetivo, puestos y funciones.',
								'c) Programa Operativo Anual con objetivos, metas y resultados esperados.'
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames641[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check641']; $i++) {
									${"opcion{$i}_form{$valueCheckNames641[$i]}"} = $_SESSION[$valueCheckNames641[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check641']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames641[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames641[$i] ?>" value="<?= $valueCheckNames641[$i] ?>" <?php if ($checkboxesDeshabilitadosForm9) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels641[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="641" value="" class="btn btn-success" <?php if ($botonDeshabilitado9) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert641) ? $alert641 : ''; ?>
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data" >
					<p>
						<h6 class="display-15">6.4.2 Diagnóstico de igualdad de género</h6>
					</p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels642 = [
								'a) Análisis de las disposiciones normativas federales, estatales y municipales en materia de igualdad de género.',
								'b) Situación del acceso de las mujeres y niñas a la educación',
								'c) Situación del acceso de las mujeres y adolescentes a la salud sexual y reproductiva',
								'd) Situación del acceso de las mujeres y niñas a la seguridad social.',
								'e) Situación del acceso de las mujeres al trabajo remunerado.',
								'f) Situación del acceso de las mujeres a la participación política.',
								'g) Número de mujeres jefa de hogar y en condición de pobreza.',
								'h) Número de mujeres adolescentes embarazadas.',
								'i) Situación de violencia contra las mujeres, niñas y adolescentes en todos los ámbitos de convivencia (público, familiar, escolar, laboral, comunitario e institucional).',
								'j) Situación de programas para el cuidado de infantes y otros familiares que requieren atención.',
								'k) Recursos humanos, materiales y financieros con los que cuenta la unidad responsable en el municipio para la promoción de la igualdad de género'
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames642[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check642']; $i++) {
									${"opcion{$i}_form{$valueCheckNames642[$i]}"} = $_SESSION[$valueCheckNames642[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check642']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames642[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames642[$i] ?>" value="<?= $valueCheckNames642[$i] ?>" <?php if ($checkboxesDeshabilitadosForm10) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels642[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="642" value="" class="btn btn-success" <?php if ($botonDeshabilitado10) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert642) ? $alert642 : ''; ?>
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data" >
					<p>
						<h6 class="display-15">6.4.3 Acciones anuales para la promoción de la igualdad de género</h6>
					</p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels643 = [
								'a) Capacitaciones en materia de igualdad entre mujeres y hombres, dirigida a funcionarias y funcionarios de la administración pública municipal.',
								'b) Acciones de promoción para mujeres dentro de la administración pública municipal, en puestos de alto nivel y responsabilidad.',
								'c) Apoyo para financiamiento de proyectos productivos de mujeres, ya sea en forma individual o colectiva, del municipio o en coordinación con el gobierno estatal o federal.',
								'd) Protocolo de atención de casos de violencia contra las mujeres.',
								'e) Campaña para fomentar el acceso y permanencia de mujeres, niñas y adolescentes en el sistema educativo.',
								'f) Vinculación con programas para el cuidado de infantes y otros familiares que requieren atención.',
								'g) Acciones para asistir a que las mujeres cuenten con acceso a la seguridad social.',
								'h) Acciones de inclusión de la perspectiva de género en la elaboración de presupuestos.',
								'i) Informes de avances y resultados, firmados por la funcionaria o funcionario responsable.'
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames643[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check643']; $i++) {
									${"opcion{$i}_form{$valueCheckNames643[$i]}"} = $_SESSION[$valueCheckNames643[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check643']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames643[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames643[$i] ?>" value="<?= $valueCheckNames643[$i] ?>" <?php if ($checkboxesDeshabilitadosForm11) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels643[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="643" value="" class="btn btn-success" <?php if ($botonDeshabilitado11) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert643) ? $alert643 : ''; ?>
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data" >
					<p>
						<h6 class="display-15">6.4.4 Coordinación para la promoción de igualdad de género</h6>
					</p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels644 = [
								'a) Convenio vigente con organizaciones de la sociedad civil, centros de asistencia o instancias privadas, cuyo propósito sea promover la igualdad de género.',
								'b) Convenio vigente y/o acuerdos de colaboración, con alguna instancia del gobierno federal, estatal u otro municipio, cuyo propósito sea promover la igualdad de género.'
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames644[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check644']; $i++) {
									${"opcion{$i}_form{$valueCheckNames644[$i]}"} = $_SESSION[$valueCheckNames644[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check644']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames644[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames644[$i] ?>" value="<?= $valueCheckNames644[$i] ?>" <?php if ($checkboxesDeshabilitadosForm12) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels644[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="644" value="" class="btn btn-success" <?php if ($botonDeshabilitado12) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert644) ? $alert644 : ''; ?>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
	</div></br>



	<!--Tema 5 -- Capacitación-->

	<div class="jumbotron">
					<h2 class="display-7">6.5 Juventud</h2>
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
						<h6 class="display-15">6.5.1 Diagnóstico de juventud</h6>
					</p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels651 = [
								'a) Análisis de las disposiciones normativas federales, estatales y municipales en materia de juventud.',
								'b) Número de mujeres y hombres en edad joven (12 a 29 años).',
								'c) Esquemas de participación de la juventud en salud y educación.',
								'd) Mecanismos de participación de las personas jóvenes en actividades políticas, cívicas, culturales y deportivas.',
								'e) Número de personas en edad joven sin ocupación laboral formal.',
								'f) Jóvenes en situación de adicción.',
								'g) Recursos humanos, materiales y financieros con los que cuenta la unidad responsable del municipio para la atención de la juventud.'
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames651[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check651']; $i++) {
									${"opcion{$i}_form{$valueCheckNames651[$i]}"} = $_SESSION[$valueCheckNames651[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check651']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames651[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames651[$i] ?>" value="<?= $valueCheckNames651[$i] ?>" <?php if ($checkboxesDeshabilitadosForm13) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels651[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="651" value="" class="btn btn-success" <?php if ($botonDeshabilitado13) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert651) ? $alert651 : ''; ?>
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data" >
					<p>
						<h6 class="display-15">6.5.2 Acciones anuales orientadas a la juventud</h6>
					</p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels652 = [
								'a) Acciones para fomentar la participación social de la juventud.',
								'b) Acciones para promover el acceso y permanencia de las y los jóvenes en la educación, por medio de estímulos y apoyos para la población en situación de vulnerabilidad.',
								'c) Campañas de orientación vocacional de la juventud.',
								'd) Acciones orientadas a capacitación o acceso al empleo formal de las personas jóvenes.',
								'e) Campañas de difusión de información sobre salud sexual y reproductiva, nutrición, adicciones y prevención de enfermedades.',
								'f) Acciones para fomentar la participación de la juventud en temas de ciencia y tecnología.',
								'g) Programas o proyectos para apoyo a la juventud emprendedora.',
								'h) Informes de avances y resultados, firmados por la funcionaria o funcionario responsable.'
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames652[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check652']; $i++) {
									${"opcion{$i}_form{$valueCheckNames652[$i]}"} = $_SESSION[$valueCheckNames652[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check652']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames652[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames652[$i] ?>" value="<?= $valueCheckNames652[$i] ?>" <?php if ($checkboxesDeshabilitadosForm14) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels652[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="652" value="" class="btn btn-success" <?php if ($botonDeshabilitado14) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert652) ? $alert652 : ''; ?>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
	</div></br>


	<!--Tema 6 -- Capacitación-->

	<div class="jumbotron">
	<h2 class="display-7">6.6 Deporte y Recreación</h2>
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
						<h6 class="display-15">6.6.1 Diagnóstico de deporte y recreación</h6>
					</p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels661 = [
								'a) Análisis de las disposiciones normativas federales, estatales y municipales en materia de juventud.',
								'b) Número de espacios diseñados para deporte y recreación.',
								'c) Número de actividades deportivas.',
								'd) Número de actividades recreativas.',
								'e) Situación y requerimientos de mantenimiento de la infraestructura utilizada para realizar actividades deportivas y recreativas.',
								'f) Personal capacitado para el fomento del deporte y la recreación.',
								'g) Recursos humanos, materiales y financieros con los que se cuenta para la promoción del deporte y la recreación.'
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames661[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check661']; $i++) {
									${"opcion{$i}_form{$valueCheckNames661[$i]}"} = $_SESSION[$valueCheckNames661[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check661']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames661[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames661[$i] ?>" value="<?= $valueCheckNames661[$i] ?>" <?php if ($checkboxesDeshabilitadosForm15) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels661[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="661" value="" class="btn btn-success" <?php if ($botonDeshabilitado15) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert661) ? $alert661 : ''; ?>
					</div>
				</form>
				<form method="POST" enctype="multipart/form-data" >
					<p>
						<h6 class="display-15">6.6.2 Acciones anuales para promover el deporte y recreación</h6>
					</p>
					<hr class="my-2">

					<div class="form-group">
						
						<?php
							
							$labels662 = [
								'a) Acciones para promover el deporte y la recreación de manera incluyente.',
								'b) Programas de actividad física y deporte, diferenciados para atender a los distintos grupos de población.',
								'c) Programa de mantenimiento de instalaciones y espacios públicos destinados al deporte y la recreación.',
								'd) Acciones para fomentar la recreación en todos los grupos de población.',
								'e) Capacitación del personal dedicado a promover el deporte y la recreación.',
								'f) Informes de avances y resultados, firmados por la funcionaria o funcionario responsable.'
							];

							if (isset($_POST['submit'])) {
								$idFormulario = $_POST['opciones'];
								$valor = editarCheckBox($idFormulario);
								
								for ($i = 0; $i < count($valor); $i++) {
									${"opcion{$i}_form{$valueCheckNames662[$i]}"} = $valor[$i];
								}
							} else {
								for ($i = 0; $i < $opciones['check662']; $i++) {
									${"opcion{$i}_form{$valueCheckNames662[$i]}"} = $_SESSION[$valueCheckNames662[$i]] ?? false;
								}
							}

						?>
						<?php for ($i = 0; $i < $opciones['check662']; $i++) : ?>
							<?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames662[$i]}"};
							?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames662[$i] ?>" value="<?= $valueCheckNames662[$i] ?>" <?php if ($checkboxesDeshabilitadosForm16) echo "disabled"; ?> <?php if ($valor_variable) echo "checked"; ?>>
										<?= $labels662[$i] ?>
								</label>
								<br>
						<?php endfor; ?>

						<div class="btn-group" role="group" aria-label="">
							<button type="submit" name="662" value="" class="btn btn-success" <?php if ($botonDeshabilitado16) echo "disabled"; ?>>Evaluar</button>
						</div>
						<?php echo isset($alert662) ? $alert662 : ''; ?>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
	</div></br>



			
	<?php include("../Includes/footer.php"); ?>
