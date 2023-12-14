<?php include ("../Includes/header.php"); ?>

<?php 
	// Inicia la sesión
	include("../../bd.php");
	//session_unset();
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

	$querySelect = mysqli_query($conexion, "SELECT * FROM `formulario` f INNER JOIN modulo m ON f.id_formulario = m.id_formulario WHERE f.fecha = '$nuevafecha' and m.modulo = 'Gobierno Abierto'");
	
	if (!mysqli_fetch_assoc($querySelect)) {
		$alerta = '<div class="alert alert-success" role="alert">
									Nuevo	Formulario.
							</div>';
							
		//habiltar checkbox
		// Inicializar un array con los nombres de las variables
		$checkNames = ['checkDisabled1', 'checkDisabled2', 'checkDisabled3', 'checkDisabled4', 'checkDisabled5', 'checkDisabled6'];

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
		$botonNames = ['deshabilitarBoton1', 'deshabilitarBoton2', 'deshabilitarBoton3', 'deshabilitarBoton4', 'deshabilitarBoton5', 'deshabilitarBoton6', 'deshabilitarBoton7', 'deshabilitarBoton8'];
		// Recorrer el array y asignar los valores a las variables
		foreach ($botonNames as $botonName) {
			$_SESSION[$botonName] = false;
		}
	}

}

//deshabiltar checkbox
// Inicializar un array con los nombres de las variables
$checkNames = ['checkDisabled1', 'checkDisabled2', 'checkDisabled3', 'checkDisabled4', 'checkDisabled5', 'checkDisabled6'];

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
$botonNames = ['deshabilitarBoton1', 'deshabilitarBoton2', 'deshabilitarBoton3', 'deshabilitarBoton4', 'deshabilitarBoton5', 'deshabilitarBoton6', 'deshabilitarBoton7', 'deshabilitarBoton8'];
// Recorrer el array y asignar los valores a las variables
foreach ($botonNames as $index => $botonName) {
	${"botonDeshabilitado" . ($index + 1)} = $_SESSION[$botonName] ?? true;
}
// valores checkboxes
// Inicializar un array con los nombres de las variables

$opciones = [
		'check811' => 10, // Último número de cada grupo de checkboxes
		'check812' => 6,
		'check821' => 2,
		'check822' => 3,
		'check831' => 4,
		'check832' => 3,
];

$valueCheckNames811 = [
	'check8111', 'check8112', 'check8113', 'check8114', 'check8115', 'check8116', 'check8117', 'check8118', 'check8119', 'check81110',
];
$valueCheckNames812 = [
	'check8121', 'check8122', 'check8123', 'check8124', 'check8125', 'check8126',
];
$valueCheckNames821 = [
	'check8211', 'check8212', 
];
$valueCheckNames822 = [
	'check8221', 'check8222', 'check8223',
];
$valueCheckNames831 = [
	'check8311', 'check8312', 'check8313', 'check8314', 
];
$valueCheckNames832 = [
	'check8321', 'check8322', 'check8323', 
];

// Crear variables dinámicas
for ($i = 0; $i < $opciones['check811']; $i++) {
	${"opcion{$i}_form{$valueCheckNames811[$i]}"} = $_SESSION[$valueCheckNames811[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check812']; $i++) {
	${"opcion{$i}_form{$valueCheckNames812[$i]}"} = $_SESSION[$valueCheckNames812[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check821']; $i++) {
	${"opcion{$i}_form{$valueCheckNames821[$i]}"} = $_SESSION[$valueCheckNames821[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check822']; $i++) {
	${"opcion{$i}_form{$valueCheckNames822[$i]}"} = $_SESSION[$valueCheckNames822[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check831']; $i++) {
	${"opcion{$i}_form{$valueCheckNames831[$i]}"} = $_SESSION[$valueCheckNames831[$i]] ?? false;
}
// Crear variables dinámicas
for ($i = 0; $i < $opciones['check832']; $i++) {
	${"opcion{$i}_form{$valueCheckNames832[$i]}"} = $_SESSION[$valueCheckNames832[$i]] ?? false;
}


// valores inputs
$variableNames = [
	'form1' => ['txtNombre8131', 'txtNombre8132'],
	'form2' => ['txtNombre8141', 'txtNombre8142']
	
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
	'alert811', 'alert812','alert813', 'alert814', 'alert821', 'alert822', 'alert831', 'alert832' 
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

	$querySelect = mysqli_query($conexion, "SELECT * FROM `formulario` f INNER JOIN modulo m ON f.id_formulario = m.id_formulario WHERE f.fecha = '$nuevafecha' and m.modulo = 'Gobierno Abierto'");
	
	if (!mysqli_fetch_assoc($querySelect)) {
		$idFormulario = registrarFormularioNuevo($fechaCompleta, $fechaActual, $nuevafecha);
		$idModulo = registrarModulo($idFormulario, 'Gobierno Abierto');
		$idTema1 = registrarTema($idModulo, "8.1 Transparencia");
		$_SESSION['idTema1'] = $idTema1;
		$idTema2 = registrarTema($idModulo, "8.2 Participación ciudadana");
		$_SESSION['idTema2'] = $idTema2;
		$idTema3 = registrarTema($idModulo, "8.3 Ética pública");
		$_SESSION['idTema3'] = $idTema3;

		$enunciados1 = $_SESSION['enunciados1'];
		$valor_checkbox1 = $_SESSION['valorcheck1'];
		registrarIndicadoresCheckboxes($valueCheckNames811, $valor_checkbox1, $enunciados1, $idTema1, '8.1.1 Reglamento municipal de transparencia y acceso a la información pública,incorpora los elementos siguientes', 1);
		$enunciados2 = $_SESSION['enunciados2'];
		$valor_checkbox2 = $_SESSION['valorcheck2'];
		registrarIndicadoresCheckboxes($valueCheckNames812, $valor_checkbox2, $enunciados2, $idTema1, '8.1.2 Programa de transparencia y acceso a la información pública', 1);
		$enunciados3 = $_SESSION['enunciados3'];
		$valor_input1 = $_SESSION['valorinput1'];
		registrarIndicadoresInputs($valor_input1, $enunciados3, $idTema1, "8.1.3 Eficacia en la atención de solicitudes de acceso a la información", 2);
		$enunciados4 = $_SESSION['enunciados4'];
		$valor_input2 = $_SESSION['valorinput2'];
		registrarIndicadoresInputs($valor_input2, $enunciados4, $idTema1, "8.1.4 Cumplimiento de obligaciones de transparencia", 2);
		

		$enunciados5 = $_SESSION['enunciados5'];
		$valor_checkbox3 = $_SESSION['valorcheck3'];
		registrarIndicadoresCheckboxes($valueCheckNames821, $valor_checkbox3, $enunciados5, $idTema2, '8.2.1 Mecanismo para atender las propuestas ciudadanas', 1);
		$enunciados6 = $_SESSION['enunciados6'];
		$valor_checkbox4 = $_SESSION['valorcheck4'];
		registrarIndicadoresCheckboxes($valueCheckNames822, $valor_checkbox4, $enunciados6, $idTema2, '8.2.2 Seguimiento y atención de las propuestas ciudadanas', 1);
		
		$enunciados7 = $_SESSION['enunciados7'];
		$valor_checkbox5 = $_SESSION['valorcheck5'];
		registrarIndicadoresCheckboxes($valueCheckNames831, $valor_checkbox5, $enunciados7, $idTema3, '8.3.1. Código de ética de los servidores públicos municipales', 1);
		$enunciados8 = $_SESSION['enunciados8'];
		$valor_checkbox6 = $_SESSION['valorcheck6'];
		registrarIndicadoresCheckboxes($valueCheckNames832, $valor_checkbox6, $enunciados8, $idTema3, "8.3.2. Difusión y capacitación sobre el Código de ética", 1);
		
		
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

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (isset($_POST['811'])) {
		$checkboxesDeshabilitadosForm1 = true;
		$_SESSION['checkDisabled1'] = $checkboxesDeshabilitadosForm1;
		$botonDeshabilitado1 = true;
		$_SESSION['deshabilitarBoton1'] = $botonDeshabilitado1;
		$count = 0;
		$valor_checkbox1 = array();
		foreach ($valueCheckNames811 as $index => $name) {
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
						 'a) Ámbito de validez.',
						 'b) Fundamentación y motivación.',												
						 'c) Objetivo de la norma (principios de máxima publicidad, gratuidad, sujetos obligados e información de oficio).',												
						 'd) Clasificación de información.',												
						 'e) Protección de datos personales',												
						 'f) Conservación de documentos. ',												
						 'g)  Sanciones administrativas.',												
						 'h) Medios de defensa (garantía de audiencia).',												
						 'i) Normas transitorias (artículos).',												
						 'j) Gaceta o medio oficial en la que se haya publicado.'
		];
		$_SESSION['enunciados1'] = $enunciados;
		

		// Evaluar el estado general del formulario
		$alert811 = evaluarEstadoAlertaCheck($count, 10);
		$_SESSION['alert811'] = $alert811;



	} elseif (isset($_POST['812'])) {
    $checkboxesDeshabilitadosForm2 = true;
		$_SESSION['checkDisabled2'] = $checkboxesDeshabilitadosForm2;
		$botonDeshabilitado2 = true;
		$_SESSION['deshabilitarBoton2'] = $botonDeshabilitado2;
		$count = 0;
		$valor_checkbox2 = array();
		foreach ($valueCheckNames812 as $index  => $name) {
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
						    'a) Objetivos, metas y líneas de acción para garantizar la transparencia y el acceso a la información pública para la ciudadanía',
							'b) Procedimiento interno para que todas las unidades de la administración pública municipal proporcionen la información solicitada.',
							'c) Portal web con una sección específica de transparencia y acceso a la información pública (ya sea del municipio o en algún servidor del gobierno estatal).',
							'd) Responsables',
							'e) Presupuesto asignado para la operación del programa.',
							'f) Informe anual, firmados por la funcionaria o funcionario responsable.'
		];
		$_SESSION['enunciados2'] = $enunciados;
		$alert812 = evaluarEstadoAlertaCheck($count, 6);
		$_SESSION['alert812'] = $alert812;

  } elseif (isset($_POST['813'])) {

		//214
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form1'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form1_value"} = $_POST[$fieldName] ?? '';
		}
		$_SESSION['txtNombre8131'] = $opcion1_form1_value;
		$_SESSION['txtNombre8132'] = $opcion2_form1_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion2_form1_value != 0) {
				// Calcula el porcentaje
				$porcentaje = ($opcion1_form1_value / $opcion2_form1_value) * 100;

				// Evalúa el porcentaje y determina el estado
				if ($porcentaje >= 50) {
						$estado = 'Optimo';
				} elseif ($porcentaje < 50 && $porcentaje >= 30) {
						$estado = 'En Proceso';
				} else {
						$estado = 'Rezago';
				}
				$inputsDeshabilitadosForm1 = true;
				$_SESSION['inputDisabled1'] = $inputsDeshabilitadosForm1;
				$botonDeshabilitado3 = true;
				$_SESSION['deshabilitarBoton3'] = $botonDeshabilitado3;
				$estadoGeneral = $estado;

				$enunciados = [
								'Total de solicitudes de acceso a las informaciones recurridas ante el órgano garante del derecho y falladas en contra del municipio.',
								'Total de solicitudes de información presentadas.',
				];
				$_SESSION['enunciados3'] = $enunciados;
				$valor_input1 = [
					$opcion1_form1_value,
					$opcion2_form1_value,
				];
				$_SESSION['valorinput1'] = $valor_input1;
		} else {
				// Manejar el caso donde el denominador es 0 (división por 0)
				$estadoGeneral = 'Error: División por 0';
				
		}
		
		$alert813 = evaluarEstadoAlertaInputs($estadoGeneral);
		$_SESSION['alert813'] = $alert813;



		
	} elseif (isset($_POST['814'])) {

		//115
		// Obtén los valores de los campos de texto
		foreach ($variableNames['form2'] as $index => $fieldName) {
			${"opcion" . ($index + 1) . "_form2_value"} = $_POST[$fieldName] ?? '';
		}

		$_SESSION['txtNombre8141'] = $opcion1_form2_value;
		$_SESSION['txtNombre8142'] = $opcion2_form2_value;
		// Verifica si el denominador es 0 antes de realizar la división
		if ($opcion2_form2_value != 0) {
			// Calcula el porcentaje
			$porcentaje = ($opcion1_form2_value / $opcion2_form2_value) * 100;
		
			// Evalúa el porcentaje y determina el estado
			if ($porcentaje > 0) {
				$estado = 'Optimo';
			} elseif ($porcentaje = 0 && $porcentaje < 0) {
				$estado = 'En Proceso';
			} else {
				$estado = 'Rezago';
			}

			$inputsDeshabilitadosForm2 = true;
			$_SESSION['inputDisabled2'] = $inputsDeshabilitadosForm2;
			$botonDeshabilitado4 = true;
			$_SESSION['deshabilitarBoton4'] = $botonDeshabilitado4;
			$estadoGeneral = $estado;

			$enunciados = [
				'Número de obligaciones de transparencia, disponibles y actualizadas',
				'Total de obligaciones de transparencia establecidas en la legislación.',
			];
			$_SESSION['enunciados4'] = $enunciados;
			$valor_input2 = [
				$opcion1_form2_value,
				$opcion2_form2_value,
			];
			$_SESSION['valorinput2'] = $valor_input2;
		} else {
			$estadoGeneral = 'Error: División por 0';
		}
		$alert814 = evaluarEstadoAlertaInputs($estadoGeneral);
		$_SESSION['alert814'] = $alert814;




	} elseif (isset($_POST['821'])) {
		$checkboxesDeshabilitadosForm3 = true;
		$_SESSION['checkDisabled3'] = $checkboxesDeshabilitadosForm3;
		$botonDeshabilitado5 = true;
		$_SESSION['deshabilitarBoton5'] = $botonDeshabilitado5;
		$count = 0;
		$valor_checkbox3 = array();
		foreach ($valueCheckNames821 as $index => $name) {
			// Verificar si el checkbox está marcado
			if (isset($_POST[$name])) {
					// El checkbox está marcado, puedes hacer lo que necesites con el valor
					$valor_checkbox3[$index] = $_POST[$name];
					$_SESSION[$name] = true;
					$count = $count + 1;
			} else {
				$valor_checkbox5[$index] = "";
					$_SESSION[$name] = false;
			}
		}
		$_SESSION['valorcheck3'] = $valor_checkbox3;
		$enunciados = [
						'a) Mecanismos de contacto (procedimiento o instrumento) publicado y documentado que funcione para que la ciudadanía incida en las acciones municipales.',
						'b) Medio de difusión de los mecanismos, avalado por la Administración en turno para atender las propuestas ciudadanas.'
		];
		$_SESSION['enunciados5'] = $enunciados;
		$alert821 = evaluarEstadoAlertaCheck($count, 2);
		$_SESSION['alert821'] = $alert821;
	} elseif (isset($_POST['822'])) {
		$checkboxesDeshabilitadosForm4 = true;
		$_SESSION['checkDisabled4'] = $checkboxesDeshabilitadosForm4;
		$botonDeshabilitado6 = true;
		$_SESSION['deshabilitarBoton6'] = $botonDeshabilitado6;
		$count = 0;
		$valor_checkbox6 = array();
		foreach ($valueCheckNames822 as $index => $name) {
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
			'a) Esquema para que la propuesta sea considerada por el equipo directivo del municipio.',
			'b) Mecanismo o procedimiento para que la propuesta sea considerada en un proceso institucional.',
			'c) Informe de resultados, que señale el número de propuestas atendidas en el año en curso.'
		];
		$_SESSION['enunciados6'] = $enunciados;
		$alert822 = evaluarEstadoAlertaCheck($count, 3);
		$_SESSION['alert822'] = $alert822;

	} elseif (isset($_POST['831'])) {
		$checkboxesDeshabilitadosForm5 = true;
		$_SESSION['checkDisabled5'] = $checkboxesDeshabilitadosForm5;
		$botonDeshabilitado7 = true;
		$_SESSION['deshabilitarBoton7'] = $botonDeshabilitado7;
		$count = 0;
		$valor_checkbox6 = array();
		foreach ($valueCheckNames831 as $index => $name) {
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
			'a) Disposiciones generales.',
			'b) Principios y valores del servicio público.',
			'c) Compromisos con el servicio público.',
			'd) Publicado conforme a la legislación estatal',
		];
		$_SESSION['enunciados7'] = $enunciados;
		$alert831 = evaluarEstadoAlertaCheck($count, 4);
		$_SESSION['alert831'] = $alert831;

	} elseif (isset($_POST['832'])) {
		$checkboxesDeshabilitadosForm6 = true;
		$_SESSION['checkDisabled6'] = $checkboxesDeshabilitadosForm6;
		$botonDeshabilitado8 = true;
		$_SESSION['deshabilitarBoton8'] = $botonDeshabilitado8;
		$count = 0;
		$valor_checkbox6 = array();
		foreach ($valueCheckNames832 as $index => $name) {
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
			'a) Acciones de capacitación a sus servidores públicos sobre el Código de Ética.',
			'b) Mecanismos para la difusión del Código de Ética entre su personal.',
			'c) Informe de evaluación de su cumplimiento de las acciones del año en curso.'
		];
		$_SESSION['enunciados8'] = $enunciados;
		$alert832 = evaluarEstadoAlertaCheck($count, 3);
		$_SESSION['alert832'] = $alert832;
	




		}
}
?>


<!--Enlaces de los stilo CSS -->

<!--<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />-->
<link rel="stylesheet" href="../../assets/css/modulos.css" />

<img class="card-img-top" src="../../assets/img/GobiernoAbierto.png" alt="Gobierno Abierto"
    style="width: 100px; height: 100px; display: block; margin: auto; max-width: 100%;">

<div class="d-flex justify-content-between">
    <div class="btn-group" role="group" aria-label="">
        <form method="POST" enctype="multipart/form-data">
            <button type="submit" name="registrarNuevoFormulario" value="" class="btn btn-primary">Registro
                nuevo</button>
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
    <h2 class="display-7">8.1 Transparencia</h2>
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
                        <h6 class="display-15">8.1.1 Reglamento municipal de transparencia y acceso a la información
                            pública,
                            incorpora los elementos siguientes:</h6>
                        </p>
                        <hr class="my-2">

                        <div class="form-group">
                            <?php
						

						$labels811 = [
						 'a) Ámbito de validez.',
						 'b) Fundamentación y motivación.',												
						 'c) Objetivo de la norma (principios de máxima publicidad, gratuidad, sujetos obligados e información de oficio).',												
						 'd) Clasificación de información.',												
						 'e) Protección de datos personales',												
						 'f) Conservación de documentos. ',												
						 'g)  Sanciones administrativas.',												
						 'h) Medios de defensa (garantía de audiencia).',												
						 'i) Normas transitorias (artículos).',												
						 'j) Gaceta o medio oficial en la que se haya publicado.'

						];
							// Crear variables dinámicas
							for ($i = 0; $i < $opciones['check811']; $i++) {
								${"opcion{$i}_form{$valueCheckNames811[$i]}"} = $_SESSION[$valueCheckNames811[$i]] ?? false;
							}
						?>
                            <?php for ($i = 0; $i < $opciones['check811']; $i++) : ?>
                            <?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames811[$i]}"};
							?>
                            <label>
                                <input type="checkbox" name="<?= $valueCheckNames811[$i] ?>"
                                    value="<?= $valueCheckNames811[$i] ?>"
                                    <?php if ($checkboxesDeshabilitadosForm1) echo "disabled"; ?>
                                    <?php if ($valor_variable) echo "checked"; ?>>
                                <?= $labels811[$i] ?>
                            </label><br>
                            <?php endfor; ?>

                            <div class="btn-group" role="group" aria-label="">
                                <button type="submit" name="811" value="" class="btn btn-success"
                                    <?php if ($botonDeshabilitado1) echo "disabled"; ?>>Evaluar</button>
                            </div>
                            <?php echo isset($alert811) ? $alert811 : ''; ?>
                            <!--Salto de parrafo 2.1.2-->
                        </div>
                    </form>

                    <form action="8GobiernoAbierto.php" method="post" enctype="multipart/form-data">

                        <input type="file" name="pdf_file" id="pdf_file">
                        <br>
                        <label for="nuevo_nombre">Nuevo nombre:</label>
                        <input type="text" name="nuevo_nombre" placeholder="No. Indicador_Año">
                        <br>
                        <input type="submit" value="Subir PDF" name="subirpdf">
                    </form>
                    </br>





                    <form method="POST" enctype="multipart/form-data">
                        <h6 class="display-15">8.1.2 Programa de transparencia y acceso a la información pública</h6>
                        </p>
                        <hr class="my-2">
                        <div class="form-group">
                            <?php
						
						$labels812 = [
							'a) Objetivos, metas y líneas de acción para garantizar la transparencia y el acceso a la información pública para la ciudadanía',
							'b) Procedimiento interno para que todas las unidades de la administración pública municipal proporcionen la información solicitada.',
							'c) Portal web con una sección específica de transparencia y acceso a la información pública (ya sea del municipio o en algún servidor del gobierno estatal).',
							'd) Responsables',
							'e) Presupuesto asignado para la operación del programa.',
							'f) Informe anual, firmados por la funcionaria o funcionario responsable.'
						];
							// Crear variables dinámicas
							for ($i = 0; $i < $opciones['check812']; $i++) {
								${"opcion{$i}_form{$valueCheckNames812[$i]}"} = $_SESSION[$valueCheckNames812[$i]] ?? false;
							}
						?>
                            <?php for ($i = 0; $i < $opciones['check812']; $i++) : ?>
                            <?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames812[$i]}"};
							?>
                            <label>
                                <input type="checkbox" name="<?= $valueCheckNames812[$i] ?>"
                                    value="<?= $valueCheckNames812[$i] ?>"
                                    <?php if ($checkboxesDeshabilitadosForm2) echo "disabled"; ?>
                                    <?php if ($valor_variable) echo "checked"; ?>>
                                <?= $labels812[$i] ?>
                            </label><br>
                            <?php endfor; ?>

                            <div class="btn-group" role="group" aria-label="">
                                <button type="submit" name="812" value="" class="btn btn-success"
                                    <?php if ($botonDeshabilitado2) echo "disabled"; ?>>Evaluar</button>
                            </div>
                            <?php echo isset($alert812) ? $alert812 : ''; ?>
                            <!--Salto de parrafo 2.1.2-->
                        </div>
                    </form>
                    <div>
                        <form action="8GobiernoAbierto.php" method="post" enctype="multipart/form-data">

                            <input type="file" name="pdf_file" id="pdf_file">
                            <br>
                            <label for="nuevo_nombre">Nuevo nombre:</label>
                            <input type="text" name="nuevo_nombre" placeholder="No. Indicador_Año">
                            <br>
                            <input type="submit" value="Subir PDF" name="subirpdf">
                        </form>
                    </div></br>

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
                            <p>
                            <h6 class="display-15">8.1.3 Eficacia en la atención de solicitudes de acceso a la
                                información</h6>
                            </p>
                            <hr class="my-2">
                            <p>Método de cálculo: (Solicitudes de acceso a la información recurridas ante el órgano
                                garante del derecho y falladas en contra del municipio / total de solicitudes de
                                información presentadas) * 100</p>

                            <?php
							$labels813 = [
								'Total de solicitudes de acceso a las informaciones recurridas ante el órgano garante del derecho y falladas en contra del municipio.',
								'Total de solicitudes de información presentadas.',
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
                                <input type="number" class="form-control" name="<?= $fieldName ?>" id="txtNombre"
                                    placeholder="" value="<?= $valor_variable ?>"
                                    <?php if ($inputsDeshabilitadosForm1) echo "disabled"; ?> required>
                                <span><?= $labels813[$index] ?></span>
                            </label>
                            <?php endforeach; ?>

                            <div class="btn-group" role="group" aria-label="">
                                <button type="submit" name="813" value="Agregar" class="btn btn-success"
                                    <?php if ($botonDeshabilitado3) echo "disabled"; ?>>Evaluar</button>
                            </div>
                            <?php echo isset($alert813) ? $alert813 : ''; ?>
                        </div>
                    </form>

                    <form action="8GobiernoAbierto.php" method="post" enctype="multipart/form-data">

                        <input type="file" name="pdf_file" id="pdf_file">
                        <br>
                        <label for="nuevo_nombre">Nuevo nombre:</label>
                        <input type="text" name="nuevo_nombre" placeholder="No. Indicador_Año">
                        <br>
                        <input type="submit" value="Subir PDF" name="subirpdf">
                    </form>
                    </br>





                    <form method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <p>
                            <h6 class="display-15">8.1.4 Cumplimiento de obligaciones de transparencia</h6>
                            </p>
                            <hr class="my-2">
                            <p>Método de cálculo: (Número de obligaciones de transparencia disponibles y actualizadas /
                                total de obligaciones de transparencia establecidas en la legislación) * 100.</p>

                            <?php
								$labels814 = [
									'Número de obligaciones de transparencia, disponibles y actualizadas',
									'Total de obligaciones de transparencia establecidas en la legislación.',
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
                            <label for="txtNombre" class="text2">
                                <input type="number" class="form-control" name="<?= $fieldName ?>" id="txtNombre"
                                    placeholder="" value="<?= $valor_variable ?>"
                                    <?php if ($inputsDeshabilitadosForm2) echo "disabled"; ?> required>
                                <span><?= $labels814[$index] ?></span>
                            </label>
                            <?php endforeach; ?>

                            <div class="btn-group" role="group" aria-label="">
                                <button type="submit" name="814" value="Agregar" class="btn btn-success"
                                    <?php if ($botonDeshabilitado4) echo "disabled"; ?>>Evaluar</button>
                            </div>
                            <?php echo isset($alert814) ? $alert814 : ''; ?>
                        </div>
                    </form>

                    <form action="8GobiernoAbierto.php" method="post" enctype="multipart/form-data">

                        <input type="file" name="pdf_file" id="pdf_file">
                        <br>
                        <label for="nuevo_nombre">Nuevo nombre:</label>
                        <input type="text" name="nuevo_nombre" placeholder="No. Indicador_Año">
                        <br>
                        <input type="submit" value="Subir PDF" name="subirpdf">
                    </form>
                    </br>
                </div>
            </div>
        </div>
    </div>
</div></br>

<!--Tema 2 -- Planeacion-->

<div class="jumbotron">
    <h2 class="display-7">8.2 Participación ciudadana</h2>
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
                        <h6 class="display-15">8.2.1 Mecanismo para atender las propuestas ciudadanas</h6>
                        </p>
                        <hr class="my-2">

                        <div class="form-group">
                            <?php
					
					$labels821= [
						'a) Mecanismos de contacto (procedimiento o instrumento) publicado y documentado que funcione para que la ciudadanía incida en las acciones municipales.',
						'b) Medio de difusión de los mecanismos, avalado por la Administración en turno para atender las propuestas ciudadanas.',
					];
						// Crear variables dinámicas
						for ($i = 0; $i < $opciones['check821']; $i++) {
							${"opcion{$i}_form{$valueCheckNames821[$i]}"} = $_SESSION[$valueCheckNames821[$i]] ?? false;
						}
					?>
                            <?php for ($i = 0; $i < $opciones['check821']; $i++) : ?>
                            <?php 
							$valor_variable = ${"opcion{$i}_form{$valueCheckNames821[$i]}"};
						?>
                            <label>
                                <input type="checkbox" name="<?= $valueCheckNames821[$i] ?>"
                                    value="<?= $valueCheckNames821[$i] ?>"
                                    <?php if ($checkboxesDeshabilitadosForm3) echo "disabled"; ?>
                                    <?php if ($valor_variable) echo "checked"; ?>>
                                <?= $labels821[$i] ?>
                            </label><br>
                            <?php endfor; ?>

                            <div class="btn-group" role="group" aria-label="">
                                <button type="submit" name="821" value="" class="btn btn-success"
                                    <?php if ($botonDeshabilitado5) echo "disabled"; ?>>Evaluar</button>
                            </div>
                            <?php echo isset($alert821) ? $alert821 : ''; ?>
                            <!--Salto de parrafo 2.1.2-->
                        </div>
                    </form>

                    <form action="8GobiernoAbierto.php" method="post" enctype="multipart/form-data">

                        <input type="file" name="pdf_file" id="pdf_file">
                        <br>
                        <label for="nuevo_nombre">Nuevo nombre:</label>
                        <input type="text" name="nuevo_nombre" placeholder="No. Indicador_Año">
                        <br>
                        <input type="submit" value="Subir PDF" name="subirpdf">
                    </form>
                    </br>

                    <form method="POST" enctype="multipart/form-data">
                        <h6 class="display-15">8.2.2 Seguimiento y atención de las propuestas ciudadanas</h6>
                        </p>
                        <hr class="my-2">
                        <div class="form-group">
                            <?php

						$labels822= [
							'a) Esquema para que la propuesta sea considerada por el equipo directivo del municipio.',
							'b) Mecanismo o procedimiento para que la propuesta sea considerada en un proceso institucional.',
							'c) Informe de resultados, que señale el número de propuestas atendidas en el año en curso.',
						];
							// Crear variables dinámicas
							for ($i = 0; $i < $opciones['check822']; $i++) {
								${"opcion{$i}_form{$valueCheckNames822[$i]}"} = $_SESSION[$valueCheckNames822[$i]] ?? false;
							}
						?>
                            <?php for ($i = 0; $i < $opciones['check822']; $i++) : ?>
                            <?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames822[$i]}"};
							?>
                            <label>
                                <input type="checkbox" name="<?= $valueCheckNames822[$i] ?>"
                                    value="<?= $valueCheckNames822[$i] ?>"
                                    <?php if ($checkboxesDeshabilitadosForm4) echo "disabled"; ?>
                                    <?php if ($valor_variable) echo "checked"; ?>>
                                <?= $labels822[$i] ?>
                            </label><br>
                            <?php endfor; ?>

                            <div class="btn-group" role="group" aria-label="">
                                <button type="submit" name="822" value="" class="btn btn-success"
                                    <?php if ($botonDeshabilitado6) echo "disabled"; ?>>Evaluar</button>
                            </div>
                            <?php echo isset($alert822) ? $alert822 : ''; ?>
                            <!--Salto de parrafo 2.1.2-->
                        </div>
                    </form>

                    <form action="8GobiernoAbierto.php" method="post" enctype="multipart/form-data">

                        <input type="file" name="pdf_file" id="pdf_file">
                        <br>
                        <label for="nuevo_nombre">Nuevo nombre:</label>
                        <input type="text" name="nuevo_nombre" placeholder="No. Indicador_Año">
                        <br>
                        <input type="submit" value="Subir PDF" name="subirpdf">
                    </form>
                    </br>

                </div>
            </div>
        </div>
    </div>
</div></br>




<!--Tema 3 -- Contraloría-->

<div class="jumbotron">
    <h2 class="display-7">8.3 Ética pública</h2>
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
                        <h6 class="display-15">8.3.1. Código de ética de los servidores públicos municipales</h6>
                        </p>
                        <hr class="my-2">

                        <div class="form-group">
                            <?php
					
					$labels831 = [
						'a) Disposiciones generales.',
						'b) Principios y valores del servicio público.',
						'c) Compromisos con el servicio público.',
						'd) Publicado conforme a la legislación estatal'
					];
						// Crear variables dinámicas
						for ($i = 0; $i < $opciones['check831']; $i++) {
							${"opcion{$i}_form{$valueCheckNames831[$i]}"} = $_SESSION[$valueCheckNames831[$i]] ?? false;
						}
					?>
                            <?php for ($i = 0; $i < $opciones['check831']; $i++) : ?>
                            <?php 
							$valor_variable = ${"opcion{$i}_form{$valueCheckNames831[$i]}"};
						?>
                            <label>
                                <input type="checkbox" name="<?= $valueCheckNames831[$i] ?>"
                                    value="<?= $valueCheckNames831[$i] ?>"
                                    <?php if ($checkboxesDeshabilitadosForm5) echo "disabled"; ?>
                                    <?php if ($valor_variable) echo "checked"; ?>>
                                <?= $labels831  [$i] ?>
                            </label><br>
                            <?php endfor; ?>

                            <div class="btn-group" role="group" aria-label="">
                                <button type="submit" name="831" value="" class="btn btn-success"
                                    <?php if ($botonDeshabilitado7) echo "disabled"; ?>>Evaluar</button>
                            </div>
                            <?php echo isset($alert831) ? $alert831 : ''; ?>
                            <!--Salto de parrafo 2.1.2-->
                        </div>
                    </form>

                    <form action="8GobiernoAbierto.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="pdf_file" id="pdf_file">
                        <br>
                        <label for="nuevo_nombre">Nuevo nombre:</label>
                        <input type="text" name="nuevo_nombre" placeholder="No. Indicador_Año">
                        <br>
                        <input type="submit" value="Subir PDF" name="subirpdf">
                    </form>
                    </br>

                    <form method="POST" enctype="multipart/form-data">
                        <h6 class="display-15">8.3.2. Difusión y capacitación sobre el Código de ética </h6>
                        </p>
                        <hr class="my-2">
                        <div class="form-group">
                            <?php
						
						$labels832= [
							'a) Acciones de capacitación a sus servidores públicos sobre el Código de Ética.',
							'b) Mecanismos para la difusión del Código de Ética entre su personal.',
							'c) Informe de evaluación de su cumplimiento de las acciones del año en curso.',
						];
							// Crear variables dinámicas
							for ($i = 0; $i < $opciones['check832']; $i++) {
								${"opcion{$i}_form{$valueCheckNames832[$i]}"} = $_SESSION[$valueCheckNames832[$i]] ?? false;
							}
						?>
                            <?php for ($i = 0; $i < $opciones['check832']; $i++) : ?>
                            <?php 
								$valor_variable = ${"opcion{$i}_form{$valueCheckNames832[$i]}"};
							?>
                            <label>
                                <input type="checkbox" name="<?= $valueCheckNames832[$i] ?>"
                                    value="<?= $valueCheckNames832[$i] ?>"
                                    <?php if ($checkboxesDeshabilitadosForm6) echo "disabled"; ?>
                                    <?php if ($valor_variable) echo "checked"; ?>>
                                <?= $labels832[$i] ?>
                            </label><br>
                            <?php endfor; ?>

                            <div class="btn-group" role="group" aria-label="">
                                <button type="submit" name="832" value="" class="btn btn-success"
                                    <?php if ($botonDeshabilitado8) echo "disabled"; ?>>Evaluar</button>
                            </div>
                            <?php echo isset($alert832) ? $alert832 : ''; ?>
                            <!--Salto de parrafo 2.1.2-->
                        </div>
                    </form>

                    <form action="8GobiernoAbierto.php" method="post" enctype="multipart/form-data">

                        <input type="file" name="pdf_file" id="pdf_file">
                        <br>
                        <label for="nuevo_nombre">Nuevo nombre:</label>
                        <input type="text" name="nuevo_nombre" placeholder="No. Indicador_Año">
                        <br>
                        <input type="submit" value="Subir PDF" name="subirpdf">
                    </form>
                    </br>
                </div>
            </div>
        </div>
    </div>
</div></br>





<?php include("../Includes/footer.php"); ?>