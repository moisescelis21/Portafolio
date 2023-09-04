<?php
session_start();
$usuario = $_SESSION["usuario"];
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

        <form class="form" id="formulario" action="informacion2.php" method="POST" autocomplete="off" enctype="multipart/form-data">
            <div class="form_container">
                <div class="back-div">
                    <a class="back" href="shop-system.php"><i class="ri-arrow-left-s-fill"></i></a>
                    <h2 class="form-h2">Regresar</h2>
                </div>

                <!--USUARIO-->

                <div class="container-inputs">
                    <label class="form-label" for="">Nombre Completo</label>
                    <div class="form__inputs">
                        <input type="text" name="nombres" id="nombres" class=""
                            placeholder="Nombre Completo">
                    </div>
                </div>

                
                <!--CONTRASEÑA-->

                <div class="container-inputs">
                    <label class="form-label" for="">Correo</label>
                    <div class="form__inputs">
                        <input type="text" name="correo" id="correo" class=""
                            placeholder="Correo Electronico">
                    </div>
                </div>

                <div class="container-inputs">
                    <label class="form-label" for="">Telefono</label>
                    <div class="form__inputs">
                        <input type="text" name="telefono" id="telefono" class=""
                            placeholder="Numero de Telefono">
                    </div>
                </div>
                <div class="container-inputs">
                    <label class="form-label" for="">Telefono Alternativo</label>
                    <div class="form__inputs">
                        <input type="text" name="telefonoalternativo" id="telefonoalternativo" class=""
                            placeholder="Numero de Telefono Alternativo">
                    </div>
                </div>
                <div class="container-inputs">
                    <label class="form-label" for="">Direccion de Delivery</label>
                    <div class="form__inputs">
                        <input type="text" name="direccion" id="direccion" class=""
                            placeholder="Direccion de Delivery">
                    </div>
                </div>
                <input type="hidden" name="usuario" id="usuario" class=""
                            value="<?php echo $usuario ?>">

               



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