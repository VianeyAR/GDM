<!DOCTYPE html>
<html lang="en">
<?php
session_start();  // Asegúrate de tener esto al inicio de tu script

// Resto de tu código...
// Puedes utilizar $_SESSION sin que aparezca el mensaje de aviso
?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Bienvenidos</title>
    <link href="./assets/css/styles.css" rel="stylesheet" />
    <script src="assets/js/all.min.js" crossorigin="anonymous"></script>
    <style>
        /* Agregar estilos CSS */
        .container-fluid {
    display: flex;
    justify-content: space-between;
}
        .INAFE, .INAFES {
            max-width: 15%; 
        }
    </style>

</head>

<body class="bg-success">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header text-center">
                                    <h2 class="font-weight-light my-4" style="color: green;"><strong>¡Bienvenid@s!</strong></h2>
                                   


                                </div>
                                <div class="card-body text-center">
                                    <img src="./assets/img/LogoTuxtepec.png" class="LogoTuxtepec" alt="" align="center" style="width: 100%; height: auto;" />
                                        </br></br>
                                    <p><b>Ayuntamiento San Juan Bautista Tuxtepec</b></p>
                                    <h3 class="font-weight-light my-4" style="color: green;"><strong>Guía Consultiva de Desempeño Municipal 2022-2024</strong></h3>
                                    <a href="./src/Modulos/Inicio.php" class="btn btn-success">Acceder</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                <img src="./assets/img/INAFE.jpeg" class="INAFE" alt="" style="width: 100%; height: auto;" />
               <h2 style="color: #8d0d49;"> <?php
                                    date_default_timezone_set('America/Mexico_City');

                                    $fechaActual = date("d/M/Y");
                                    echo "" . $fechaActual;
                                    ?></h2>
                <img src="./assets/img/INAFE.jpeg" class="INAFES" alt="" style="width: 100%; height: auto;" />
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
