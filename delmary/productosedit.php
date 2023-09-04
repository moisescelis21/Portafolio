<?php
session_start();

if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'login.php';</script>";
  }
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="img/favicon.svg">
    <title>El Punto del Sabor | Sistema</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/sidebarsystem.css" type="text/css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/remixicon.css">

</head>
<body>
    
     <!-- Sidebar Section Begin -->
     <?php require('./layout/sidebarsystem.php')  ?>
    <!-- Sidebar Section End -->


    <div id="overlay" class="overlay"></div>
      <div class="layout">
        <main class="content">
          <!-- CONTENIDO AQUI -->
          <div class="contenedor">
            <?php 
                        $id=$_GET['id'];
                        $conexion=mysqli_connect('localhost','root','','delmary');
                        $sql="SELECT * FROM productos WHERE id='$id'";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $producto = $mostrar['producto'];
                            $tipo_producto = $mostrar['tipo_producto'];
                            $precio = $mostrar['precio'];
                            $estado = $mostrar['estado'];
                            
                        ?>

        <form class="form" id="formulario" action="productosedit2.php?id=<?php echo $id ?>" method="POST" autocomplete="off" enctype="multipart/form-data">
            <div class="form_container">
                <div class="back-div">
                    <a class="back" href="shop-system.php"><i class="ri-arrow-left-s-fill"></i></a>
                    <h2 class="form-h2">Regresar</h2>
                </div>

                <!--USUARIO-->

                <div class="container-inputs">
                    <label class="form-label" for="">Producto</label>
                    <div class="form__inputs">
                        <input type="text" name="producto" id="producto" class=""
                            placeholder="Producto" value="<?php echo $producto ?>">
                    </div>
                </div>

                 <!--Correo-->

                 <div class="container-inputs">
                    <label class="form-label" for="">Tipo de Producto</label>
                    <div class="form__inputs">
                        <input type="text" name="tipo_producto" id="tipo_producto" class=""
                            placeholder="Tipo de Producto" value="<?php echo $tipo_producto ?>">
                    </div>
                </div>

                <!--CONTRASEÑA-->

                <div class="container-inputs">
                    <label class="form-label" for="">Precio</label>
                    <div class="form__inputs">
                        <input type="text" name="precio" id="precio" class=""
                            placeholder="Precio" value="<?php echo $precio ?>">
                    </div>
                </div>
                <div class="container-inputs">
                    <label class="form-label" for="">Disponibilidad</label>
                    <div class="form__inputs">
                        <input type="text" name="disponibilidad" id="disponibilidad" class=""
                            placeholder="Disponibilidad" value="<?php echo $disponibilidad ?>">
                    </div>
                </div>


                 <div class="container-inputs">
                    <label class="form-label" for="">Estado</label>
                    <div class="form__inputs">
                        <select name="estado" id="estado">
                            <?php if ($estado == "Nuevo") {
                            ?>
                            <option selected="">Nuevo</option>
                            <option>Mas Vendido</option>
                            <?php }elseif($estado == "Mas Vendidos"){ ?>
                            <option>Nuevo</option>
                            <option selected="">Mas Vendido</option>
                            <?php }else{ ?>
                            <option>Nuevo</option>
                            <option>Mas Vendido</option>
                            <?php } ?>
                        </select>
                        
                    </div>
                </div>
<?php } ?>


                <div class="container-btn">
                    <input type="submit" class="btn-submit" value="Enviar">

                    <input type="reset" class="btn-reset" value="Cancelar">
                </div>
        </form>

          </div>
        </main>
      </div>
    </div>

</body>
</html>

<script src="js/sidebarsystem.js"></script>