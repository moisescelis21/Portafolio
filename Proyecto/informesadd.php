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
    <title>Añadir Informe</title>
</head>

<body>
     <!-- BARRA LATERAL -->

   <?php require('./layout/sidebar.php') ?>

<!-- CONTENIDO -->

<div class="container1">

    <!-- BARRA DE NAVEGACIÓN -->
    
    <?php require('./layout/header.php') ?>

            <form class="form" id="formulario" action="php/informesadd2.php" method="POST" autocomplete="off">
                <div class="form_container">

                    <div class="back-div">
                        <a class="back" href="informes.php"><i class="icon-arrow-thick-left"></i></a>
                        <h2 class="form-h2">Ingresar Informe</h2>
                    </div>

                    <!-- DIRECCIÓN -->

                    <div class="container-inputs" id="grupo__direccion">
                        <label class="form-label" for="direccion">Dirección</label>
                        <div class="form__inputs">
                            <select rows="4" type="text" id="direccion" name="direccion" >
                                <?php 
                                    $conexion=mysqli_connect('localhost','root','','proyecto');
                                    $sql="SELECT * FROM direcciones";
                                    $result=mysqli_query($conexion,$sql);
        
                                    while($mostrar=mysqli_fetch_array($result)){
                                    $direccion = $mostrar['direccion'];
                                    ?>      
                                            <option value="none" hidden selected>Dirección</option>
                                            <option><?php echo $direccion;?></option>
                                            <?php
                                    }
                                    ?>
                            </select>
                        </div>
                        <p class="form__validacion-error">Seleccione alguna opción</p>
                    </div>

                    <!-- PROBLEMA -->

                    <div class="container-inputs" id="grupo__problema">
                        <label class="form-label" for="problema">¿Qué falla presenta?</label>
                        <div class="form__inputs">
                            <input type="text" id="problema" name="problema" placeholder="Ingrese la falla del equipo">
                            <i class="icon-close-outline form__validacion-estado"></i>
                        </div>
                        <p class="form__validacion-error">Campo obligatorio</p>
                    </div>

                    <!-- Detalles del Equipo -->

                    <div class="container-inputs" id="grupo__equipo">
                        <label class="form-label" for="equipo">Detalles del equipo</label>
                        <div class="form__inputs">
                            <input type="text" id="equipo" name="equipo" placeholder="Ingrese los datos del equipo">
                            <i class="icon-close-outline form__validacion-estado"></i>
                        </div>
                        <p class="form__validacion-error">Campo obligatorio</p>
                    </div>

                    <!-- Detalles del Equipo -->

                    <div class="container-inputs" id="grupo__accion">
                        <label class="form-label" for="accion">Acción</label>
                        <div class="form__inputs">
                            <input type="text" id="accion" name="accion" placeholder="Ingrese la accion que se realizo al equipo">
                            <i class="icon-close-outline form__validacion-estado"></i>
                        </div>
                        <p class="form__validacion-error">Campo obligatorio</p>
                    </div>
                  
                    <!-- Detalles del Equipo -->

                    <div class="container-inputs" id="grupo__observacion">
                        <label class="form-label" for="observacion">Observación</label>
                        <div class="form__inputs">
                            <input type="text" id="observacion" name="observacion" placeholder="Ingrese la observacion del equipo (si se requiere)">
                            <i class="icon-close-outline form__validacion-estado"></i>
                        </div>
                        <p class="form__validacion-error">Campo obligatorio</p>
                    </div>

                    <!-- Estatus -->

                    <div class="container-inputs" id="grupo__estatus">
                        <label class="form-label" for="problema">Estatus del equipo</label>
                        <div class="form__inputs">
                            <select name="estatus" id="estatus">
                                <option value="none" hidden selected>Estatus del equipo</option>
                                <option value="Operativo">Operativo</option>
                                <option value="Inoperativo">Inoperativo</option>
                            </select>
                        </div>
                        <p class="form__validacion-error">Seleccione alguna opción</p>
                    </div>
                    
                   

                    <!-- BOTONES -->
                     
                    <div class="container-btn">
                        <input type="submit" class="btn-submit" value="Enviar">
    
                        <input type="reset" class="btn-reset" value="Cancelar">
                    </div>
                </div>
            </form>
          
    </div>
    <div id="formulario__mensaje">
                <p> <i class="icon-close"></i> ¡Rellene todo el formulario!</p>
            </div>
    <script src="js/inicio2.js"></script>

    <script src="js/validacionesFormularios/formularioinforme.js"></script>
</body>

</html>