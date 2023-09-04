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
    <title>Editar Dirección</title>
</head>

<body>
    <!-- BARRA LATERAL -->

    <?php require('./layout/sidebar.php') ?>

    <!-- CONTENIDO -->

    <div class="container1">

        <!-- BARRA DE NAVEGACIÓN -->

        <?php require('./layout/header.php') ?>

        <div class="container">
            <?php 
        $id=$_GET['id'];
        ?>
            <form class="form" action="php/direccionesedit2.php?id=<?php echo $id;?>" method="POST">

                <div class="form_container-direccion form_container">

                    <div class="back-div">
                        <a class="back" href="direcciones.php"><i class="icon-arrow-thick-left"></i></a>
                        <h2 class="form-h2">Editar dirección</h2>
                    </div>

                    <!-- DIRECCION -->
                    <?php 
                    $conexion=mysqli_connect('localhost','root','','proyecto');
                    $sql="SELECT * FROM direcciones WHERE id='$id'";
                    $result=mysqli_query($conexion,$sql);

                    while($mostrar=mysqli_fetch_array($result)){
                    $id = $mostrar['id']; 
                    $direccion = $mostrar['direccion'];
                ?>
                    <div class="container-inputs" id="grupo__direccion">
                        <label class="form-label" for="direccion">Añadir nueva dirección</label>
                        <div class="form__inputs">
                            <i class="icon-close-outline form__validacion-estado"></i>
                            <input type="text" id="direccion" name="direccion" value="<?php echo $direccion;?>"
                                placeholder="Ingrese el nombre de la direccion" autofocus>
                        </div>
                        <p class="form__validacion-error">¡Introduzca una dirección!</p>
                    </div>
                    <?php
                }
                ?>

                    <div class="container-btn">
                        <input type="submit" class="btn-submit" value="Enviar">

                        <input type="reset" class="btn-reset" value="Cancelar">
                    </div>
            </form>
            <div id="formulario__mensaje">
                <p> <i class="icon-close"></i> ¡Rellene los campos!</p>
            </div>
        </div>
</body>

</html>