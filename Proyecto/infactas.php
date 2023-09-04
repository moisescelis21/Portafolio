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
    <title>Informes - Actas</title>

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
                <h2>Informes / Actas</h2>
            </header>
        <main class="container__section-config">
            <a href="informes.php">
                <div class="configuration__section-item">

                    <div class="configuration__item-img">
                        <img src="img/informes.png">
                    </div>
                    <h2>INFORMES TECNICOS</h2>

                </div>
            </a>
            <a href="actas.php">
                <div class="configuration__section-item">

                    <div class="configuration__item-img">
                        <img src="img/actas.png">
                    </div>
                    <h2>ACTAS</h2>
                </div>
            </a>
            </a>
        </div>
    </div>
    </div>

    <script src="js/inicio2.js"></script>
    <script src=""></script>
</body>

</html>