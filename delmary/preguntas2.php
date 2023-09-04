<?php
session_start();
$usuario = $_SESSION["usuario"];
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

        <form class="form" id="formulario" action="preguntas3.php" method="POST" autocomplete="off">
            <div class="form_container">
                <div class="back-div">
                    <a class="back" href="shop-system.php"><i class="ri-arrow-left-s-fill"></i></a>
                    <h2 class="form-h2">Regresar</h2>
                </div>

                <!-- PRIVILEGIO -->
                <div class="container-inputs">
                    <label class="form-label" for="">Pregunta #1</label>
                    <div class="form__inputs">
                        <select name="pregunta1" id="pregunta1">
                            <option>¿Color Favorito?</option>
                            <option>¿Dulce Favorito?</option>
                            <option>¿Dia Favorito?</option>
                        </select>
                    </div>
                </div>
                <!--USUARIO-->

                <div class="container-inputs">
                    <label class="form-label" for="">Respuesta #1</label>
                    <div class="form__inputs">
                        <input type="text" name="respuesta1" id="respuesta1" class=""
                            placeholder="Respuesta #1">
                    </div>
                </div>
                <!-- PRIVILEGIO -->
                <div class="container-inputs">
                    <label class="form-label" for="">Pregunta #2</label>
                    <div class="form__inputs">
                        <select name="pregunta2" id="pregunta2">
                            <option>¿Que edad tienes?</option>
                            <option>¿Talla de zapatos?</option>
                            <option>¿Mes de Cumpleaños?</option>
                        </select>
                    </div>
                </div>
                <!--USUARIO-->

                <div class="container-inputs">
                    <label class="form-label" for="">Respuesta #2</label>
                    <div class="form__inputs">
                        <input type="text" name="respuesta2" id="respuesta2" class=""
                            placeholder="Respuesta #2">
                    </div>
                </div>
                 <!-- PRIVILEGIO -->
                <div class="container-inputs">
                    <label class="form-label" for="">Pregunta #3</label>
                    <div class="form__inputs">
                        <select name="pregunta3" id="pregunta3">
                            <option>¿Profesion?</option>
                            <option>¿Hobby?</option>
                            <option>¿Cualidad?</option>
                        </select>
                    </div>
                </div>
                <!--USUARIO-->

                <div class="container-inputs">
                    <label class="form-label" for="">Respuesta #3</label>
                    <div class="form__inputs">
                        <input type="text" name="respuesta3" id="respuesta3" class=""
                            placeholder="Respuesta #3">
                        <input type="hidden" name="usuario" id="usuario" value="<?php echo $usuario ?>">
                    </div>
                </div>

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