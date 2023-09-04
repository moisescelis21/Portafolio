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

        <form class="form" id="formulario" action="php/usuariosadd2.php" method="POST" autocomplete="off">
            <div class="form_container">
                <div class="back-div">
                    <a class="back" href="#"><i class="ri-arrow-left-s-fill"></i></a>
                    <h2 class="form-h2">Mamalo Moises</h2>
                </div>

                <!--USUARIO-->

                <div class="container-inputs">
                    <label class="form-label" for="">Input 1</label>
                    <div class="form__inputs">
                        <input type="text" name="" id="" class=""
                            placeholder="Input 1">
                    </div>
                </div>

                 <!--Correo-->

                 <div class="container-inputs">
                    <label class="form-label" for="">Input 2</label>
                    <div class="form__inputs">
                        <input type="text" name="" id="" class=""
                            placeholder="Input 1">
                    </div>
                </div>

                <!--CONTRASEÑA-->

                <div class="container-inputs">
                    <label class="form-label" for="">Input 3</label>
                    <div class="form__inputs">
                        <input type="text" name="" id="" class=""
                            placeholder="Input 1">
                    </div>
                </div>

                <div class="container-inputs">
                    <label class="form-label" for="">Input 4</label>
                    <div class="form__inputs">
                        <input type="text" name="" id="" class=""
                            placeholder="Input 1">
                    </div>
                </div>

               <!-- CEDULA -->

               <div class="container-inputs">
                    <label class="form-label" for="">Input 5</label>
                    <div class="form__inputs">
                        <input type="text" name="" id="" class=""
                            placeholder="Input 1">
                    </div>
                </div>

                <!-- PRIVILEGIO -->
                <div class="container-inputs">
                    <label class="form-label" for="">Input 6</label>
                    <div class="form__inputs">
                        <input type="text" name="" id="" class=""
                            placeholder="Input 1">
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