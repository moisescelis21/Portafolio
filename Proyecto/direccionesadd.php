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
    <title>Añadir Dirección</title>
</head>

<body>
    <!-- BARRA LATERAL -->

    <?php require('./layout/sidebar.php') ?>

    <!-- CONTENIDO -->

    <div class="container1">

        <!-- BARRA DE NAVEGACIÓN -->

        <?php require('./layout/header.php') ?>

        <div class="container">
            <form class="form" id="formulario" action="php/direccionesadd2.php" method="POST" autocomplete="off">
                <div class="form_container-direccion form_container">

                    <div class="back-div">
                        <a class="back" href="direcciones.php"><i class="icon-arrow-thick-left"></i></a>
                        <h2 class="form-h2">Ingresar nueva dirección</h2>
                    </div>

                    <!-- DIRECCIÓN -->

                    <div class="container-inputs" id="grupo__direccion">
                        <label class="form-label" for="direccion">Añadir nueva dirección</label>
                        <div class="form__inputs">
                            <i class="icon-close-outline form__validacion-estado"></i>
                            <input type="text" id="direccion" name="direccion"
                                placeholder="Ingrese el nombre de la direccion">
                        </div>
                        <p class="form__validacion-error">¡Introduzca una dirección!</p>
                    </div>

                    <div class="container-btn">
                        <input type="submit" class="btn-submit" value="Enviar">

                        <input type="reset" class="btn-reset" value="Cancelar">
                    </div>
            </form>
            <div id="formulario__mensaje">
                <p> <i class="icon-close"></i> ¡Rellene los campos!</p>
            </div>
        </div>
        <script src="js/inicio2.js"></script>
        <script src="js/validacionesFormularios/formulariodirecciones.js"></script>
</body>

</html>