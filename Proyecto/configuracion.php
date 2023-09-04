<?php
session_start();

if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'index.php';</script>";
  }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración</title>

    <link rel="stylesheet" href="icons/iconpack2/style.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/configuracionstyle.css">

</head>

<body>

    <!-- BARRA LATERAL -->

    <?php require('./layout/sidebar.php') ?>

    <!-- CONTENIDO -->

    <div class="container1">

        <!-- BARRA DE NAVEGACIÓN -->

        <?php require('./layout/header.php') ?>

        <!-- CONTENEDOR DE TABLA -->
        

        <div class="configuration__section">
            <header class="header-tab">
                <h2>Elija una Opción</h2>
            </header>
            
            <main class="container__section-config">
                <a href="perfil.php">
                    <div class="configuration__section-item">

                        <div class="configuration__item-img">
                            <img src="img/perfil.png">
                        </div>
                        <h2>Perfil de Usuario</h2>
                    </div>
                </a>
                <a href="trabajadores.php">
                    <div class="configuration__section-item">

                        <div class="configuration__item-img">
                            <img src="img/trabajadores.png">
                        </div>
                        <h2>TRABAJADORES</h2>

                    </div>
                </a>
                <a href="direcciones.php">
                    <div class="configuration__section-item">

                        <div class="configuration__item-img">
                            <img src="img/direcciones.png">
                        </div>
                        <h2>DIRECCIONES</h2>
                    </div>
                </a>
                <a href="restaurar.php">
                    <div class="configuration__section-item">

                        <div class="configuration__item-img">
                            <img src="img/respaldos.png">
                        </div>
                        <h2>RESPALDOS</h2>
                    </div>
                </a>
               
            </main>
        </div>
        
    </div>
    </div>

    <script src="js/inicio2.js"></script>
</body>

</html>