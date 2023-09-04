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
    <title>Añadir más</title>
</head>

<body>
     <!-- BARRA LATERAL -->

   <?php require('./layout/sidebar.php') ?>

<!-- CONTENIDO -->

<div class="container1">

    <!-- BARRA DE NAVEGACIÓN -->
    
    <?php require('./layout/header.php') ?>

            <form class="form" id="formulario" action="actasadd4.php" method="POST" autocomplete="off" enctype="multipart/form-data">
                <div class="form_container">

                    <div class="back-div">
                        <a class="back" href="actas.php"><i class="icon-arrow-thick-left"></i></a>
                        <h2 class="form-h2">Agregar a la Acta de Entrega</h2>
                    </div>

                    <!-- PROBLEMA -->

                    <div class="container-inputs" id="grupo__equipo">
                    <label class="form-label" for="equipo">Equipo</label>
                    <div class="form__inputs">
                        <input type="text" id="equipo" name="equipo" placeholder="Ingrese el tipo de Equipo">
                        <i class="icon-cancel form__validacion-estado"></i>
                    </div>
                    <p class="form__validacion-error">Identifique el equipo</p>
                </div>

                <!-- Detalles del Equipo -->

                <div class="container-inputs" id="grupo__marca">
                    <label class="form-label" for="marca">Marca/Modelo</label>
                    <div class="form__inputs">
                        <input type="text" id="marca" name="marca" placeholder="Ingrese la marca o modelo del Equipo">
                        <i class="icon-cancel form__validacion-estado"></i>
                    </div>
                    <p class="form__validacion-error">Identifiqua el modelo del equipo</p>
                </div>

                <!-- Detalles del Equipo -->

                <div class="container-inputs" id="grupo__serial">
                    <label class="form-label" for="serial">Serial N°</label>
                    <div class="form__inputs">
                        <input type="text" id="serial" name="serial" placeholder="Ingrese el numero de Serial ">
                        <i class="icon-cancel form__validacion-estado"></i>
                    </div>
                    <p class="form__validacion-error">Identifique el serial</p>
                </div>

                <!-- Detalles del Equipo -->

                <div class="container-inputs" id="grupo__serialB">
                    <label class="form-label" for="serialB">Serial de Bienes</label>
                    <div class="form__inputs">
                        <input type="text" id="serialB" name="serialB"
                            placeholder="Ingrese el numero de Serial de bienes ">
                        <i class="icon-cancel form__validacion-estado"></i>
                    </div>
                    <p class="form__validacion-error">Identifique el serial de Bienes</p>
                </div>


                <!-- Detalles del Equipo -->

                <div class="container-inputs" id="grupo__color">
                    <label class="form-label" for="color">Color</label>
                    <div class="form__inputs">
                        <input type="text" id="color" name="color" placeholder="Ingrese el color del Equipo">
                        <i class="icon-cancel form__validacion-estado"></i>
                    </div>
                    <p class="form__validacion-error">Identifique el color del equipo</p>
                </div>
                <div class="container-inputs" id="grupo__imagen">
                    <label class="form-label" for="imagen">Ingresar Fotografía</label>
                    <div class="form__inputs-file">
                        <label class="form-label" for="imagen">Memoria Fotografica</label>
                        <input type="file" class="input-file" id="imagen" name="imagen" placeholder="">
                    </div>
                    <p class="form__validacion-error">Validación</p>
                </div>
                    
                    
                   <input type="hidden" name="id2" id="id2" value="<?php echo $_GET['id'];?>">
                   <input type="hidden" name="direccion" id="direccion" value="<?php echo $_GET['direccion'];?>">

                    <!-- BOTONES -->
                     
                    <div class="container-btn">
                        <input type="submit" class="btn-submit" value="Enviar">
    
                        <input type="reset" class="btn-reset" value="Cancelar">
                    </div>
                </div>
            </form>
    </div>

    <script src="js/validacionesFormularios/formularioactas.js"></script>
    <script src="js/inicio2.js"></script>
</body>

</html>