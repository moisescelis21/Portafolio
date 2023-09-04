<?php
session_start();


if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'index.php';</script>";
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registerstyle.css">
    <link rel="stylesheet" href="icons/iconpack2/style.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <title>Añadir Trabajador</title>
</head>

<body>
    <!-- BARRA LATERAL -->

    <?php require('./layout/sidebar.php') ?>

    <!-- CONTENIDO -->

    <div class="container1">

        <!-- BARRA DE NAVEGACIÓN -->

        <?php require('./layout/header.php') ?>

        <form class="form" id="formulario" action="php/trabajadoresadd2.php" method="POST" autocomplete="off">
            <div class="form_container">

                <div class="back-div">
                    <a class="back" href="trabajadores.php"><i class="icon-arrow-thick-left"></i></a>
                    <h2 class="form-h2">Ingresar nuevo Trabajador</h2>
                </div>



                <!-- NOMBRE -->

                <div class="container-inputs" id="grupo__nombre">
                    <label class="form-label" for="nombre">Nombre del trabajador</label>
                    <div class="form__inputs">
                        <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre del trabajador">
                        <i class="icon-cancel form__validacion-estado"></i>    
                    </div>
                    <p class="form__validacion-error">Introduzca su nombre</p>
                    
                </div>

                <!-- APELLIDO -->

                <div class="container-inputs" id="grupo__apellido">
                    <label class="form-label" for="apellido">Apellido del Trabajador</label>
                    <div class="form__inputs">
                        <input type="text" id="apellido" name="apellido"
                            placeholder="Ingrese el apellido del trabajador">
                        <i class="icon-cancel form__validacion-estado"></i>
                    </div>
                    <p class="form__validacion-error">Introduzca su apellido</p>
                </div>

                <!-- Detalles del Equipo -->

                <div class="container-inputs" id="grupo__cedula">
                    <label class="form-label" for="cedula">Cédula del trabajador</label>
                    <div class="form__inputs">
                        <input type="text" id="cedula" name="cedula" placeholder="Ingrese la cédula del trabajador">
                        <i class="icon-cancel form__validacion-estado"></i>
                    </div>
                    <p class="form__validacion-error">Introduzca una cédula válida</p>
                </div>

                <!-- Detalles del Equipo -->

                <div class="container-inputs" id="grupo__cargo">
                    <label class="form-label" for="cargo">Cargo del trabajador</label>
                    <div class="form__inputs">
                        <input type="text" id="cargo" name="cargo" placeholder="Ingrese el cargo del trabajador">
                        <i class="icon-cancel form__validacion-estado"></i>
                    </div>
                    <p class="form__validacion-error">Introduzca su cargo</p>
                </div>

                <!-- BOTONES -->

                <div class="container-btn">
                    <input type="submit" class="btn-submit" value="Enviar">

                    <input type="reset" class="btn-reset" value="Cancelar">
                </div>
            </div>
        </form>
        <div id="formulario__mensaje">
            <p> <i class="icon-close"></i> ¡Rellene todo el formulario!</p>
        </div>
    </div>

    <script src="js/validacionesFormularios/formulariotrabajadores.js"></script>
    <script src="js/inicio2.js"></script>

</body>

</html>