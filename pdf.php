<?php
// Verificar si se envió el formulario
if(isset($_POST['subirpdf'])) {
    // Carpeta donde se almacenarán los archivos PDF
    $carpeta_destino = "archivos_pdf/";

    // Verificar si la carpeta de destino existe, si no, crearla
    if (!file_exists($carpeta_destino)) {
        mkdir($carpeta_destino, 0777, true);
    }

    // Obtener detalles del archivo
    $nombre_archivo = $_FILES['pdf_file']['name'];
    $tipo_archivo = $_FILES['pdf_file']['type'];
    $archivo_temporal = $_FILES['pdf_file']['tmp_name'];

    // Verificar el tipo de archivo
    if ($tipo_archivo != 'application/pdf') {
        // Utiliza SweetAlert para mostrar un mensaje de error
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Solo se permiten archivos en formato PDF.',
                });
             </script>";
         // Termina la ejecución del script
    }else{
        // Nuevo nombre proporcionado por el usuario
        $nuevo_nombre = $_POST['nuevo_nombre'];

        // Validar y limpiar el nuevo nombre (puedes personalizar esta función según tus necesidades)
        $nuevo_nombre = preg_replace("/[^a-zA-Z0-9_-]/", "", $nuevo_nombre);

        // Construir la ruta de destino con el nuevo nombre
        $ruta_destino = $carpeta_destino . $nuevo_nombre . ".pdf";

        // Mover el archivo a la carpeta de destino
        if(move_uploaded_file($archivo_temporal, $ruta_destino)) {
            include("bd.php");

            if($conexion->connect_error) {
                die("Error de conexión: " . $conexion->connect_error);
            }

            $consulta = $conexion->prepare("INSERT INTO archivos_pdf (nombre_archivo, tipo_archivo, ruta_archivo) VALUES (?, ?, ?)");
            $consulta->bind_param("sss", $nombre_archivo, $tipo_archivo, $ruta_destino);

            if($consulta->execute()) {
                // Utiliza SweetAlert para mostrar un mensaje de éxito
                echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: '¡Éxito!',
                            text: 'Archivo PDF subido correctamente.',
                        });
                    </script>";
            } else {
                // Utiliza SweetAlert para mostrar un mensaje de error
                echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error al subir el archivo PDF: " . $consulta->error . "',
                        });
                    </script>";
            }

            $consulta->close();
            $conexion->close();
        } else {
            // Utiliza SweetAlert para mostrar un mensaje de error
            echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Error al mover el archivo a la carpeta de destino.',
                    });
                </script>";
        }
    }

    
}
?>