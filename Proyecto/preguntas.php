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
    <title>Preguntas de Seguridad</title>
</head>

<body>
     <!-- BARRA LATERAL -->

   <?php require('./layout/sidebar.php') ?>

<!-- CONTENIDO -->

<div class="container1">

    <!-- BARRA DE NAVEGACIÓN -->
    
    <?php require('./layout/header.php') ?>

            <form class="form" id="formulario" action="preguntasadd.php" method="POST" autocomplete="off" enctype="multipart/form-data">
                <div class="form_container">

                    <div class="back-div">
                        <a class="back" href="perfil.php"><i class="icon-arrow-thick-left"></i></a>
                        <h2 class="form-h2">Preguntas de Seguridad</h2>
                    </div>

                    <!-- DIRECCIÓN -->

                    <div class="container-inputs" id="grupo__pregunta1">
                        <label class="form-label" for="pregunta1">Pregunta #1</label>
                        <div class="form__inputs">
                            <select rows="4" type="text" id="pregunta1" name="pregunta1" >
                                <option>¿Cual es su color favorito?</option>
                                <option>¿Cual es su mes favorito?</option>
                                <option>¿Cual es su idioma favorito?</option>
                            </select>
                        </div>
                    </div>

                    <!-- PROBLEMA -->

                    <div class="container-inputs" id="grupo__respuesta1">
                        <label class="form-label" for="respuesta1">Respuesta #1</label>
                        <div class="form__inputs">
                            <input type="text" id="respuesta1" name="respuesta1" placeholder="Ingrese la Respuesta #1" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'>
                            <i class="icon-close-outline form__validacion-estado"></i>
                        </div>
                        <p class="form__validacion-error">¡Coloque su respuesta!</p>
                    </div>     
                      <!-- DIRECCIÓN -->

                    <div class="container-inputs" id="grupo__pregunta2">
                        <label class="form-label" for="pregunta2">Pregunta #2</label>
                        <div class="form__inputs">
                            <select rows="4" type="text" id="pregunta2" name="pregunta2" >
                                <option>¿Cuando es su cumpleaños?</option>
                                <option>¿Cuando es su fecha de aniversario?</option>
                                <option>¿Cuando es el cumpleaños de su madre?</option>
                            </select>
                        </div>
                    </div>

                    <!-- PROBLEMA -->

                    <div class="container-inputs" id="grupo__respuesta2">
                        <label class="form-label" for="respuesta2">Respuesta #2</label>
                        <div class="form__inputs">
                            <input type="date" id="respuesta2" name="respuesta2" placeholder="Ingrese la Respuesta #2">
                            <i class="icon-close-outline form__validacion-estado"></i>
                        </div>
                        <p class="form__validacion-error">¡Coloque su respuesta!</p>
                    </div>   
                      <!-- DIRECCIÓN -->

                    <div class="container-inputs" id="grupo__pregunta3">
                        <label class="form-label" for="pregunta3">Pregunta #3</label>
                        <div class="form__inputs">
                            <select rows="4" type="text" id="pregunta3" name="pregunta3"  >
                                <option>¿Cual es su numero favorito?</option>
                                <option>¿Cual es su numero de telefono?</option>
                                <option>¿Cual es su edad?</option>
                            </select>
                        </div>
                    </div>

                    <!-- PROBLEMA -->

                    <div class="container-inputs" id="grupo__respuesta3">
                        <label class="form-label" for="respuesta3">Respuesta #3</label>
                        <div class="form__inputs">
                            <input type="text" id="respuesta3" name="respuesta3" placeholder="Ingrese la Respuesta #3" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57))">
                            <i class="icon-close-outline form__validacion-estado"></i>
                        </div>
                        <p class="form__validacion-error">¡Coloque su respuesta!</p>
                    </div>         
                    
                   

                    <!-- BOTONES -->
                     
                    <div class="container-btn">
                        <input type="submit" class="btn-submit" value="Enviar">
    
                        <input type="reset" class="btn-reset" value="Cancelar">
                    </div>
                </div>
            </form>
            <div id="formulario__mensaje">
                <p> <i class="icon-close"></i> ¡Complete todas las preguntas!</p>
            </div>
    </div>

    <script src="js/inicio2.js"></script>
    <script src="js/validacionesFormularios/formulariopreguntas.js"></script>
</body>

</html>