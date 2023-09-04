<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Procuraduría General del Estado Bolívar</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap"
        rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/favicon.svg">
    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="lib/fontawesome/css/all.min.css">
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/boxicons/css/boxicons.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->



    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-white">
                    <span>Síguenos:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href="https://twitter.com/procubolivar"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
                    <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i>Contáctanos:</span>
                    <span class="fs-5 fw-bold">0285 632 3531</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->



    <!-- Navbar Start -->
    <?php require('./layout/navbar.php') ?>
    <!-- Navbar End -->



    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Nosotros</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="#">Páginas</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Nosotros</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start: MISION -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row gx-3 h-100">
                        <div class="col-6 align-self-end wow fadeInUp" data-wow-delay="0.1s">
                            <img class="img-fluid" src="img/mision.png">
                        </div>
                        <div class="col-6 align-self-start wow fadeInDown" data-wow-delay="0.1s">
                            <img class="img-fluid" src="img/mision2.png">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Nuestra Misión</h1>
                    <p class="mb-4" style="text-align: justify;">Garantizar la seguridad jurídica de la actuación del estado, 
                        la defensa y protección de los derechos e intereses patrimoniales, mediante la aplicación 
                        honorable del conocimiento jurídico vigente, en su acción de asesoramiento al poder público 
                        estadal y de representación judicial y extrajudicial, a su vez, fortalecer la inclusión social 
                        ofreciendo servicios jurídico-sociales, a través de jornadas integrales en concordancia con lo 
                        establecido en las leyes vigentes.</p>
                    <div class="d-flex align-items-center mb-4">
                        <div class="ms-4">
                            <p><i class="fa  text-primary me-2"></i></p>
                            <p><i class="fa  text-primary me-2"></i></p>
                            <p><i class="fa  text-primary me-2"></i></p>
                            <p><i class="fa  text-primary me-2"></i></p>
                            <p class="mb-0"><i class="fa text-primary me-2"></i></p>
                        </div>
                        <div style="margin-left: 3%;"></div>
                        <div class="flex-shrink-0 p-4">
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Carrusel Start -->
    <div class="container-fluid py-5 my-5 px-0">
        <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="display-5 mb-5">Nuestros Objetivos</h1>
        </div>
        <div class="owl-carousel project-carousel bg-dark wow fadeIn" data-wow-delay="0.1s">
            <a class="project-item">
                <img class="img-fluid" src="img/seguridad.png" alt="">
                <div class="project-title">
                    <h5 class="text-light mb-0">Garantizar la Seguridad</h5>
                </div>
            </a>
            <a class="project-item">
                <img class="img-fluid" src="img/inclusion-social.png" alt="">
                <div class="project-title">
                    <h5 class="text-light mb-0">Inclusión social</h5>
                </div>
            </a>
            <a class="project-item">
                <img class="img-fluid" src="img/satisfaccion.png" alt="">
                <div class="project-title">
                    <h5 class="text-light mb-0">Satisfacción de clientes</h5>
                </div>
            </a>
            <a class="project-item">
                <img class="img-fluid" src="img/gestion-calidad.png" alt="">
                <div class="project-title">
                    <h5 class="text-light mb-0">Sistema de Gestión de Calidad</h5>
                </div>
            </a>
            <a class="project-item">
                <img class="img-fluid" src="img/recurso-humano.png" alt="">
                <div class="project-title">
                    <h5 class="text-light mb-0">Desarrollar el recurso humano</h5>
                </div>
            </a>
            <a class="project-item">
                <img class="img-fluid" src="img/desempeño.png" alt="">
                <div class="project-title">
                    <h5 class="text-light mb-0">Desempeño y buen funcionamiento</h5>
                </div>
            </a>
        </div>
    </div>
    <!-- Project End -->

    <!-- About Start: VISION -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row gx-3 h-100">
                        <div class="col-6 align-self-end wow fadeInUp" data-wow-delay="0.1s">
                            <img class="img-fluid" src="img/vision.png">
                        </div>
                        <div class="col-6 align-self-start wow fadeInDown" data-wow-delay="0.1s">
                            <img class="img-fluid" src="img/vision2.png">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Nuestra Visión</h1>
                    <p class="mb-4" style="text-align: justify;">Ser el Órgano procurador de mayor reconocimiento, prestigio y credibilidad 
                        por su capacidad asesora al poder público estadal, y su eficiente acción en defensa y representación 
                        de los bienes e intereses patrimoniales del Estado Bolívar, mediante la aplicación del conocimiento 
                        científico de las ciencias jurídicas y la utilización objetiva y honorable del ordenamiento jurídico 
                        venezolano; además de alcanzar la mayor inclusión social logrando la participación de todos los ciudadanos.</p>
                    <div class="d-flex align-items-center mb-4">
                        <div class="ms-4">
                            <p><i class="fa  text-primary me-2"></i></p>
                            <p><i class="fa  text-primary me-2"></i></p>
                            <p><i class="fa  text-primary me-2"></i></p>
                            <p><i class="fa  text-primary me-2"></i></p>
                            <p class="mb-0"><i class="fa text-primary me-2"></i></p>
                        </div>
                        <div style="margin-left: 3%;"></div>
                        <div class="flex-shrink-0 p-4">
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Footer Start -->
    <?php require('./layout/footer.php') ?>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container text-center">
            <p class="mb-2">Copyright &copy; <a class="fw-semi-bold" href="#">Procuraduría General del Estado Bolívar</a>, Todos los derechos reservados    .
            </p>
       
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Javascript -->
    <script src="js/main.js"></script>
</body>

</html>