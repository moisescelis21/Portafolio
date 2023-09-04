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
    <title>Añadir Usuario</title>
</head>

<body>
    <!-- BARRA LATERAL -->

    <?php require('./layout/sidebar.php') ?>

    <!-- CONTENIDO -->

    <div class="container1">

        <!-- BARRA DE NAVEGACIÓN -->

        <?php require('./layout/header.php') ?>

        <form class="form" id="formulario" action="php/usuariosadd2.php" method="POST" autocomplete="off">
            <div class="form_container">
                <div class="back-div">
                    <a class="back" href="usuarios.php"><i class="icon-arrow-thick-left"></i></a>
                    <h2 class="form-h2">Agregar Usuario</h2>
                </div>

                <!--USUARIO-->

                <div class="container-inputs" id="grupo__usuario">
                    <label class="form-label" for="usuario">Usuario</label>
                    <div class="form__inputs">
                        <input type="text" name="usuario" id="usuario" class="usuario"
                            placeholder="Introduzca su nombre de usuario...">
                        <i class="icon-close-outline form__validacion-estado"></i>
                    </div>
                    <p class="form__validacion-error">Su usuario debe contener de 4 a 16 caracteres</p>
                </div>

                 <!--Correo-->

                 <div class="container-inputs" id="grupo__correo">
                    <label class="form-label" for="correo">Correo</label>
                    <div class="form__inputs">
                        <input type="email" name="correo" id="correo" class="correo"
                            placeholder="Introduzca correo electrónico...">
                        <i class="icon-close-outline form__validacion-estado"></i>
                    </div>
                    <p class="form__validacion-error">Escriba un correo electrónico válido.</p>
                </div>

                <!--CONTRASEÑA-->

                <div class="container-inputs" id="grupo__password">
                    <label class="form-label" for="password">Contraseña</label>
                    <div class="form__inputs">
                        <input type="password" name="password" id="password" class="password"
                            placeholder="Introduzca su contraseña...">
                        <i class="icon-close-outline form__validacion-estado"></i>
                    </div>
                    <p class="form__validacion-error">Su contraseña debe poseer de 4 a 16 caracteres.</p>
                </div>

                <div class="container-inputs" id="grupo__password2">
                    <label class="form-label" for="password2">Repetir Contraseña</label>
                    <div class="form__inputs">
                        <input type="password" name="password2" id="password2" class="password2"
                            placeholder="Repita su contraseña...">
                        <i class="icon-close-outline form__validacion-estado"></i>
                    </div>
                    <p class="form__validacion-error">Escriba su contraseña correctamente.</p>
                </div>

               <!-- CEDULA -->

                <div class="container-inputs" id="grupo__cedula">
                    <label class="form-label" for="cedula">Cedula</label>
                    <div class="form__inputs">
                        <input type="cedula" name="cedula" id="cedula" class="cedula"
                            placeholder="Introduzca Cedula...">
                        <i class="icon-close-outline form__validacion-estado"></i>
                    </div>
                    <p class="form__validacion-error">Escriba una cedula válido.</p>
                </div>

                <!-- PRIVILEGIO -->
                <div class="container-inputs" id="grupo__privilegio">
                    <label class="form-label" for="privilegio">Tipo de usuario</label>
                    <div class="form__inputs">
                        <select name="privilegio" id="privilegio" class="privilegio">
                            <option value="none" hidden selected>Nivel de Usuario</option>
                            <option value="0">Usuario</option>
                            <option value="1">Administrador</option>
                        </select>
                    </div>
                    <p class="form__validacion-error">Seleccione alguna opción</p>
                </div>

                <div class="container-btn">
                    <input type="submit" class="btn-submit" value="Enviar">

                    <input type="reset" class="btn-reset" value="Cancelar">
                </div>
        </form>
        
    </div>
    <div id="formulario__mensaje">
            <p> <i class="icon-close"></i> ¡Rellené todo el formulario!</p>
        </div>
    <script src="js/validacionesFormularios/formulariousuario.js"></script>
    <script src="js/inicio2.js"></script>
</body>

</html>