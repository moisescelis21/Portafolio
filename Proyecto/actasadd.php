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
    <title>Añadir Acta</title>
</head>

<body>
    <!-- BARRA LATERAL -->

    <?php require('./layout/sidebar.php') ?>

    <!-- CONTENIDO -->

    <div class="container1">

        <!-- BARRA DE NAVEGACIÓN -->

        <?php require('./layout/header.php') ?>

        <form class="form" id="formulario" action="actasadd2.php" method="POST" autocomplete="off"
            enctype="multipart/form-data">
            <div class="form_container">

                <div class="back-div">
                    <a class="back" href="actas.php"><i class="icon-arrow-thick-left"></i></a>
                    <h2 class="form-h2">Nueva Acta de Entrega</h2>
                </div>

                <!-- DIRECCIÓN -->

                <div class="container-inputs" id="grupo__problema">
                    <label class="form-label" for="problema">Dirección</label>
                    <div class="form__inputs">
                        <select rows="4" type="text" id="direccion" name="direccion">
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
                    <p class="form__validacion-error">Elija una dirección</p>
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

                <!-- BOTONES -->

                <div class="container-btn">
                    <input type="submit" class="btn-submit" value="Enviar">

                    <input type="reset" class="btn-reset" value="Cancelar">
                </div>
            </div>
        </form>
    </form>
    <div id="formulario__mensaje">
        <p> <i class="icon-close"></i> ¡Rellene todo el formulario!</p>
    </div>
</div>


<script src="js/inicio2.js"></script>

<script src="js/validacionesFormularios/formularioactas.js"></script>
</body>

</html>