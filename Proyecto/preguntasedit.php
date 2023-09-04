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
    <title>Editar Preguntas</title>
</head>

<body>
     <!-- BARRA LATERAL -->

   <?php require('./layout/sidebar.php') ?>

<!-- CONTENIDO -->

<div class="container1">

    <!-- BARRA DE NAVEGACIÓN -->
    
    <?php require('./layout/header.php') ?>

            <?php 
            $id=$_GET['id'];
            ?>

            <form class="form" id="formulario" action="php/preguntasedit.php?id=<?php echo $id;?>" method="POST" autocomplete="off">

            <?php 
                    $conexion=mysqli_connect('localhost','root','','proyecto');
                    $sql="SELECT * FROM preguntas WHERE id='$id'";
                    $result=mysqli_query($conexion,$sql);

                    while($mostrar=mysqli_fetch_array($result)){
                    $id = $mostrar['id']; 
                    $preguntas1 = $mostrar['pregunta1'];
                    $preguntas2 = $mostrar['pregunta2'];
                    $preguntas3 = $mostrar['pregunta3'];
                    $respuesta1 = $mostrar['respuesta1'];
                    $respuesta2 = $mostrar['respuesta2'];
                    $respuesta3 = $mostrar['respuesta3'];
                ?>

       <div class="form_container">

                    <div class="back-div">
                        <a class="back" href="perfil.php"><i class="icon-arrow-thick-left"></i></a>
                        <h2 class="form-h2">Preguntas de Seguridad</h2>
                    </div>

                    <!-- DIRECCIÓN -->

                    <div class="container-inputs" id="grupo__pregunta1">
                        <label class="form-label" for="pregunta1">Pregunta #1</label>
                        <div class="form__inputs">
                            <input type="text" id="pregunta1" name="pregunta1" placeholder="Pregunta #1" disabled value="<?php echo utf8_encode($preguntas1); ?>">
                            <i class="icon-close-outline form__validacion-estado"></i>
                        </div>
                    </div>

                    <!-- PROBLEMA -->

                    <div class="container-inputs" id="grupo__respuesta1">
                        <label class="form-label" for="respuesta1">Respuesta #1</label>
                        <div class="form__inputs">
                            <input type="text" id="respuesta1" name="respuesta1" placeholder="Ingrese la Respuesta #1" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' value="<?php echo utf8_encode($respuesta1); ?>">
                            <i class="icon-close-outline form__validacion-estado"></i>
                        </div>
                        <p class="form__validacion-error">¡Coloque su respuesta!</p>
                    </div>     
                      <!-- DIRECCIÓN -->

                    <div class="container-inputs" id="grupo__pregunta2">
                        <label class="form-label" for="pregunta2">Pregunta #2</label>
                        <div class="form__inputs">
                            <input type="text" id="pregunta2" name="pregunta2" placeholder="Pregunta #2" disabled value="<?php echo utf8_encode($preguntas2); ?>">
                            <i class="icon-close-outline form__validacion-estado"></i>
                        </div>
                    </div>

                    <!-- PROBLEMA -->

                    <div class="container-inputs" id="grupo__respuesta2">
                        <label class="form-label" for="respuesta2">Respuesta #2</label>
                        <div class="form__inputs">
                            <input type="date" id="respuesta2" name="respuesta2" placeholder="Ingrese la Respuesta #2" value="<?php echo utf8_encode($respuesta2); ?>">
                            <i class="icon-close-outline form__validacion-estado"></i>
                        </div>
                        <p class="form__validacion-error">¡Coloque su respuesta!</p>
                    </div>   
                      <!-- DIRECCIÓN -->

                    <div class="container-inputs" id="grupo__pregunta3">
                        <label class="form-label" for="pregunta3">Pregunta #3</label>
                        <div class="form__inputs">
                            <input type="text" id="pregunta3" name="pregunta3" placeholder="Pregunta #3" disabled value="<?php echo utf8_encode($preguntas3); ?>">
                            <i class="icon-close-outline form__validacion-estado"></i>
                        </div>
                    </div>

                    <!-- PROBLEMA -->

                    <div class="container-inputs" id="grupo__respuesta3">
                        <label class="form-label" for="respuesta3">Respuesta #3</label>
                        <div class="form__inputs">
                            <input type="text" id="respuesta3" name="respuesta3" placeholder="Ingrese la Respuesta #3" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57))" value="<?php echo utf8_encode($respuesta3); ?>">
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
                <?php
                    }
                ?>
            </form>
            <div id="formulario__mensaje">
            <p> <i class="icon-close"></i> ¡Rellene todo el formulario!</p>
        </div>
    </div>

    <script src="js/inicio2.js"></script>
    <script src="js/validacionesFormularios/formulariotrabajadoresedit.js"></script>
</body>

</html>