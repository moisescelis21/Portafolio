<?php
session_start();
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
    <title>El Punto del Sabor | Inicio</title>

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
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Responsive Burger Begin -->
    <?php require('./layout/burger.php')  ?>
    <!-- Responsive Burger End -->

    <!-- Header Section Begin -->
    <?php require('./layout/header.php')  ?>
    <!-- Header Section End -->

    <!-- Sidebar Section Begin -->
    <?php require('./layout/sidebar2.php')  ?>
    <!-- Sidebar Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/puntosaborbanner.png" style="margin-top: -3%">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Contáctanos</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Inicio</a>
                            <span>Contacto</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Teléfono</h4>
                        <p>0412 879 0532</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Dirección</h4>
                        <p>Calle principal del Barrio Libertador 1, Casa N°22. A una cuadra de Granitos Bolívar.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Horario</h4>
                        <p>07:00 AM a 07:00 PM</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="social_instagram"></span>
                        <h4>Instagram</h4>
                        <p>@elpuntodelsaborcbo</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3950.077530657198!2d-63.55057116931153!3d8.093576219723504!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sve!4v1675733273798!5m2!1ses-419!2sve"
            height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="map-inside">
            <i class="icon_pin" ></i>
            <div class="inside-widget" style="margin-top: -18%">
                <h4>Ciudad Bolívar</h4>
                <ul>
                    <li>Teléfono: 0412 879 0532</li>
                    <li>Dirección: Calle principal del Barrio Libertador 1, Casa N°22.</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Map End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Déjanos un mensaje!</h2>
                    </div>
                </div>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Tu Nombre">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Tu Correo Electrónico">
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea placeholder="Tu Mensaje"></textarea>
                        <button type="submit" class="site-btn">ENVIAR MENSAJE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

    <!-- Footer Section Begin -->
    <?php require('./layout/footer.php')  ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>