
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Procuraduría General del Estado Bolívar</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/favicon.svg">

    <!-- Google Web Fonts -->

    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

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
<?php 
                        $id = $_GET['id'];
                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql="SELECT * FROM noticias WHERE id=$id";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $titulo = $mostrar['titulo'];
                            $fecha = date("d/m/Y", strtotime($mostrar['fecha']));
                            $redaccion = $mostrar['redaccion'];
                            $ubicacion = $mostrar['ubicacion'];
                            
                        ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Seccion de Noticias</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="">Paginas</a></li>
                    <li class="breadcrumb-item"><a href="service.php">Noticias</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo ?></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
<!-- Features Start -->
<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-5">
                        <img class="img-fluid w-100" src="<?php echo $ubicacion ?>" alt="" style="width: 600px; height: 700px;">
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.5s" style="margin-top: 0%;">
                    <p class="fw-medium text-uppercase text-primary mb-2"><?php echo $fecha ?><p>
                    <h1 class="display-5 mb-4"><?php $titulo ?></h1>
                    <p class="mb-4" style="text-align: justify;"><?php echo $redaccion ?></p>
                    <div class="row gy-4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- Features End -->



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
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>



    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>