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
    <title>El Punto del Sabor | Tienda</title>

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
         <?php 
                        $id=$_GET['id'];
                        $conexion=mysqli_connect('localhost','root','','delmary');
                        $sql="SELECT * FROM productos WHERE id='$id'";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $producto = $mostrar['producto'];
                            $tipo_producto = $mostrar['tipo_producto'];
                            $precio = number_format($mostrar['precio'],2);
                            $ubicacion = $mostrar['ubicacion'];
                            $disponibilidad = $mostrar['disponibilidad'];
                            
                        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2><?php echo $producto ?></h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Inicio</a>
                            <a href="./shop-grid.php">Tienda</a>
                            <span><?php echo $producto ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="<?php echo $ubicacion ?>" alt="">
                        </div>
                        
                    </div>
                </div>
                <form action="carrito.php" method="POST">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?php echo $producto ?></h3>
                        <input type="hidden" name="producto" id="producto" value="<?php echo $producto ?>">
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <!-- <i class="fa fa-star-half-o"></i> -->
                            <span>(5 opiniones)</span>
                        </div>
                        <div class="product__details__price">$<?php echo $precio ?></div>
                        <input type="hidden" name="precio" id="precio" value="<?php echo $precio ?>">
                        <input type="hidden" name="ubicacion" id="ubicacion" value="<?php echo $ubicacion ?>">
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input id="cantidad" name="cantidad" type="text" value="1">
                                </div>
                            </div>
                        </div>
                        </form>
                        <button type="submit" class="primary-btn">Comprar</button>
                        <ul>
                            <li><b>Disponibilidad</b> <span><?php echo $disponibilidad ?></span></li>
                            <li><b>Anticipación</b><span>3-4 Dias de Antipacion.</span></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php } ?>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Otros Productos</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/p-vainilla.png">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                             <div class="product__item__text">
                                 <h6><a href="#">Torta de Vainilla</a></h6>
                                <h5>$30.00</h5>
                             </div>
                         </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/p-vainilla.png">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                             <div class="product__item__text">
                                 <h6><a href="#">Torta de Vainilla</a></h6>
                                <h5>$30.00</h5>
                             </div>
                         </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/p-vainilla.png">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                             <div class="product__item__text">
                                 <h6><a href="#">Torta de Vainilla</a></h6>
                                <h5>$30.00</h5>
                             </div>
                         </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/p-vainilla.png">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                             <div class="product__item__text">
                                 <h6><a href="#">Torta de Vainilla</a></h6>
                                <h5>$30.00</h5>
                             </div>
                         </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->

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