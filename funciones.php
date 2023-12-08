
<?php
// Definición de la función en funciones.php
function registrarFormularioNuevo($fechaCompleta, $fechaActual, $nuevafecha) : int {
	require "bd.php";
	$queryInsert = mysqli_query($conexion, "INSERT INTO `formulario` (`id_formulario`, `nombre`, `fecha`) VALUES (NULL, 'REGISTRO.$fechaCompleta', '$fechaActual')");
	$querySelect = mysqli_query($conexion, "SELECT `id_formulario` FROM `formulario` WHERE fecha = '$nuevafecha'");
	$dataFormulario = mysqli_fetch_assoc($querySelect);
	$idFormulario = $dataFormulario['id_formulario'];
	return $idFormulario;
}

function registrarModulo($idFormulario, $modulo): int {
	require "bd.php";
	$queryInsert = mysqli_query($conexion, "INSERT INTO `modulo` (`id_modulo`, `id_formulario`, `modulo`) VALUES (NULL, '$idFormulario', '$modulo')");
	$querySelect = mysqli_query($conexion, "SELECT `id_modulo` FROM `modulo` WHERE modulo = '$modulo'");
	$dataModulo = mysqli_fetch_assoc($querySelect);
	$idModulo = $dataModulo['id_modulo'];
	return $idModulo;
}

function registrarTema($idModulo, $tema): int {
	require "bd.php";
	$queryInsert = mysqli_query($conexion, "INSERT INTO `tema` (`id_tema`, `id_modulo`, `tema`) VALUES (NULL, $idModulo, '$tema')");
	$querySelect = mysqli_query($conexion, "SELECT `id_tema` FROM `tema` WHERE tema = '$tema'");
	$dataTema = mysqli_fetch_assoc($querySelect);
	$idTema = $dataTema['id_tema'];
	return $idTema;
}

function registrarIndicadoresCheckboxes($valueCheckNames, $arrayValores, $enunciados, $idTema, $indicador, $idIndicador) {
	require "bd.php";
	$queryInsert = mysqli_query($conexion, "INSERT INTO `indicadores` (`id`, `id_tema`, `indicador`,`idindicador`) VALUES (NULL, $idTema, '$indicador', $idIndicador)");
	$querySelect = mysqli_query($conexion, "SELECT `id` FROM `indicadores` WHERE indicador = '$indicador'");
	$dataIndicadores = mysqli_fetch_assoc($querySelect);
	$idIndicadores = $dataIndicadores['id'];

	// Iterar sobre los enunciados e insertar los datos en la base de datos
	foreach ($valueCheckNames as $index => $name) {
		$enunciado = $enunciados[$index];
		// echo $arrayValores[$index];
		if ($arrayValores[$index] != "") {
		$queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_indicadores`, `enunciado`, `valor`) VALUES (NULL, '$idIndicadores', '$enunciado', 1)");
		} else {
			$queryInsert = mysqli_query($conexion, "INSERT INTO `checkbox` (`id_checkbox`, `id_indicadores`, `enunciado`, `valor`) VALUES (NULL, '$idIndicadores', '$enunciado', 0)");
		}
	}
}

function registrarIndicadoresInputs($valores, $enunciados, $idTema, $indicador, $idIndicador) {
	require "bd.php";
	$queryInsert = mysqli_query($conexion, "INSERT INTO `indicadores` (`id`, `id_tema`, `indicador`, `idindicador`) VALUES (NULL, $idTema, '$indicador', '$idIndicador')");
	$querySelect = mysqli_query($conexion, "SELECT `id` FROM `indicadores` WHERE indicador = '$indicador'");
	$dataIndicadores = mysqli_fetch_assoc($querySelect);
	$idIndicadores = $dataIndicadores['id'];

	// Iterar sobre los enunciados e insertar los datos en la base de datos
	foreach ($enunciados as $indice => $enunciado) {
		$valor = $valores[$indice];
		$queryInsert = mysqli_query($conexion, "INSERT INTO `input_entero` (`id_input_entero`, `id_indicadores`, `enunciado`, `valor`) VALUES (NULL, '$idIndicadores', '$enunciado', $valor)");
		
		// Verificar si la consulta fue exitosa
		if (!$queryInsert) {
				echo "Error al insertar: " . mysqli_error($conexion);
				// Puedes manejar el error de alguna manera
		}
	}
}

function registrarIndicadoresInputSelect($valor, $enunciado, $idTema, $indicador, $idIndicador) {
	require "bd.php";
	$queryInsert = mysqli_query($conexion, "INSERT INTO `indicadores` (`id`, `id_tema`, `indicador`, `idindicador`) VALUES (NULL, $idTema, '$indicador', '$idIndicador')");
	$querySelect = mysqli_query($conexion, "SELECT `id` FROM `indicadores` WHERE indicador = '$indicador'");
	$dataIndicadores = mysqli_fetch_assoc($querySelect);
	$idIndicadores = $dataIndicadores['id'];

	$queryInsert = mysqli_query($conexion, "INSERT INTO `input_string` (`id_input_string`, `id_indicadores`, `enunciado`, `valor`) VALUES (NULL, $idIndicadores, '$enunciado', '$valor')");
		
	// Verificar si la consulta fue exitosa
	if (!$queryInsert) {
			echo "Error al insertar: " . mysqli_error($conexion);
			// Puedes manejar el error de alguna manera
	}
}

function obtenerIDIndicador($tema, $idModulo) : int {
	require "bd.php";
	$querySelect = mysqli_query($conexion, "SELECT `id_tema` FROM `tema` WHERE tema = '$tema' && id_modulo = $idModulo");
	$dataTema = mysqli_fetch_assoc($querySelect);
	$idTema = $dataTema['id_tema'];
	return $idTema;
}

function evaluarEstadoAlertaCheck($count, $max) : string {
	$estadoGeneral = 'rezago';  // Inicialmente, asume que no hay checkboxes seleccionados

		if ($count === $max) {
			$estadoGeneral = 'optimo';  // Todos los checkboxes del conjunto 1 están seleccionados
		} elseif ($count > 0) {
			$estadoGeneral = 'proceso';  // Al menos 1 checkbox del conjunto 1 está seleccionado
		}

		if ($estadoGeneral === "optimo") { 
			$alerta ='<div class="alert alert-success" role="alert">
				¡Óptimo!
				</div>';
		} elseif ($estadoGeneral === "proceso") {
			$alerta='<div class="alert alert-warning" role="alert">
				En proceso
			</div>';
		} elseif ($estadoGeneral === "rezago") {
			$alerta='<div class="alert alert-danger" role="alert">
				¡Rezago!
			</div>';
		} elseif ($estadoGeneral === "") {

		} 

		return $alerta;
}
function evaluarEstadoAlertaInputs($estadoGeneral) : string {
	if ($estadoGeneral === 'Optimo') {

		$alerta = '<div class="alert alert-success" role="alert">
										¡Optimo! El porcentaje es menor a 100.
								</div>';
	} elseif ($estadoGeneral === 'En Proceso')  {
			$alerta = '<div class="alert alert-warning" role="alert">
											En proceso. El porcentaje es mayor a 100 pero menor o igual a 115.
									</div>';
	} elseif ($estadoGeneral === 'Error: División por 0') {
			$alerta = '<div class="alert alert-danger" role="alert">
											Error: Se ha ingresado 0 en la división.
									</div>';
	} elseif ($estadoGeneral === '') {
	} else {
			$alerta = '<div class="alert alert-danger" role="alert">
											¡Rezago! El porcentaje es mayor a 115.
									</div>';
	}
	return $alerta;
}

function evaluarEstadoAlertaInputSelect($estadoGeneral) : string {
	if ($estadoGeneral === 'Optimo') {

		$alerta = '<div class="alert alert-success" role="alert">
										¡Optimo!
								</div>';
	} elseif ($estadoGeneral === 'En Proceso')  {
			$alerta = '<div class="alert alert-warning" role="alert">
											En proceso.
									</div>';
	} elseif ($estadoGeneral === 'Error: Sin Selección') {
			$alerta = '<div class="alert alert-danger" role="alert">
										Error: Campo Vacio.
									</div>';
	} elseif ($estadoGeneral === '') {
	} else {
			$alerta = '<div class="alert alert-danger" role="alert">
											¡Rezago!
									</div>';
	}
	return $alerta;
}

function editarCheckBox($idFormulario) : array {
	require "bd.php";
	$querySelect = mysqli_query($conexion, "SELECT c.valor FROM `formulario` f INNER JOIN `modulo` m ON f.id_formulario = m.id_formulario INNER JOIN `tema` t ON m.id_modulo = t.id_modulo INNER JOIN `indicadores` i ON t.id_tema = i.id_tema INNER JOIN `checkbox` c ON c.id_indicadores = i.id WHERE f.id_formulario = $idFormulario and id_indicadores = 1");
	$result = mysqli_num_rows($querySelect);
	$valor = [];
	if ($result > 0) {
		$i = 0;
		while ($data = mysqli_fetch_assoc($querySelect)) {
			
			if ($data['valor'] == 1) {
				$valor[$i] = true;
			} else {
				$valor[$i] = false;
			}
			$i++;
		}
	}
	return $valor;
}

?>
