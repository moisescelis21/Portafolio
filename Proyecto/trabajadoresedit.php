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
    <title>Editar Trabajador</title>
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

            <form class="form" id="formulario" action="php/trabajadoresedit2.php?id=<?php echo $id;?>" method="POST" autocomplete="off">

            <?php 
                    $conexion=mysqli_connect('localhost','root','','proyecto');
                    $sql="SELECT * FROM trabajadores WHERE id='$id'";
                    $result=mysqli_query($conexion,$sql);

                    while($mostrar=mysqli_fetch_array($result)){
                    $id = $mostrar['id']; 
                    $nombre = $mostrar['nombre'];
                    $apellido = $mostrar['apellido'];
                    $cedula = $mostrar['cedula'];
                    $cargo = $mostrar['cargo'];
                ?>
                <div class="form_container">
                <div class="back-div">
                    <a class="back" href="trabajadores.php"><i class="icon-arrow-thick-left"></i></a>
                    <h2 class="form-h2">Editar Trabajador</h2>
                </div>

                    <!-- NOMBRE -->

                    <div class="container-inputs" id="grupo__nombre">
                        <label class="form-label" for="problema">Nombre del trabajador</label>
                        <div class="form__inputs">
                        <i class="icon-close-outline form__validacion-estado"></i>
                        <input type="text"  id="nombre" name="nombre" value="<?php echo $nombre;?>" placeholder="Ingrese el nombre del trabajador">
                        </div>
                        <p class="form__validacion-error">Validación</p>
                    </div>

                    <!-- APELLIDO -->

                    <div class="container-inputs" id="grupo__apellido">
                        <label class="form-label" for="problema">Apellido del Trabajador</label>
                        <div class="form__inputs">
                        <input type="text"  id="apellido" name="apellido" value="<?php echo $apellido;?>" placeholder="Ingrese el apellido del trabajador">
                            <i class="icon-close-outline form__validacion-estado"></i>
                        </div>
                        <p class="form__validacion-error">Validación</p>
                    </div>

                    <!-- Detalles del Equipo -->

                    <div class="container-inputs" id="grupo__cedula">
                        <label class="form-label" for="problema">Cédula del trabajador</label>
                        <div class="form__inputs">
                        <input type="text" id="cedula" name="cedula" value="<?php echo $cedula;?>" placeholder="Ingrese la cedula del trabajador">
                            <i class="icon-close-outline form__validacion-estado"></i>
                        </div>
                        <p class="form__validacion-error">Validación</p>
                    </div>

                    <!-- Detalles del Equipo -->

                    <div class="container-inputs" id="grupo__cargo">
                        <label class="form-label" for="problema">Cargo del  trabajador</label>
                        <div class="form__inputs">
                        <input type="text" id="cargo" name="cargo" value="<?php echo $cargo;?>" placeholder="Ingrese el cargo del trabajador">
                            <i class="icon-close-outline form__validacion-estado"></i>
                        </div>
                        <p class="form__validacion-error">Validación</p>
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