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
    <link rel="stylesheet" href="css/modal.css" type="text/css">
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
    <?php require('./layout/sidebar.php')  ?>
    <!-- Sidebar Section End -->

    <!-- Categories Section Begin -->
    <?php require('./layout/categories.php')  ?>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Nuestros Productos</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Todo</li>
                            <li data-filter=".pan">Panadería</li>
                            <li data-filter=".pasteleria">Pastelería</li>
                            <li data-filter=".desayuno">Desayunos</li>
                            <li data-filter=".arreglo">Arreglos</li>
                        </ul>
                    </div>
                </div>
            </div>
             
            <!-- PAN -->
            <div class="row featured__filter">
            <?php 
                        $conexion=mysqli_connect('localhost','root','','delmary');
                        $sql="SELECT * FROM productos WHERE tipo_producto='Panaderia'";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $producto = $mostrar['producto'];
                            $tipo_producto = $mostrar['tipo_producto'];
                            $precio = number_format($mostrar['precio'],2);
                            $ubicacion = $mostrar['ubicacion'];
                            
                        ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix pan">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo $ubicacion ?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="shop-details.php?id=<?php echo $id; ?>"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#"><?php echo $producto ?></a></h6>
                            <h5>$<?php echo $precio ?></h5>
                        </div>
                    </div>
                </div>
            <?php } ?>
            

                <!-- FIN PAN -->
                <?php 
                        $conexion=mysqli_connect('localhost','root','','delmary');
                        $sql="SELECT * FROM productos WHERE tipo_producto='Pastelería'";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $producto = $mostrar['producto'];
                            $tipo_producto = $mostrar['tipo_producto'];
                            $precio = number_format($mostrar['precio'],2);
                            $ubicacion = $mostrar['ubicacion'];
                            
                        ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix pasteleria">
                    <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="<?php echo $ubicacion ?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="shop-details.php?id=<?php echo $id; ?>"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#"><?php echo $producto ?></a></h6>
                            <h5>$<?php echo $precio ?></h5>
                        </div>
                    </div>
                </div>
                 <?php } ?>
                <!-- DESAYUNOS -->
                <?php 
                        $conexion=mysqli_connect('localhost','root','','delmary');
                        $sql="SELECT * FROM productos WHERE tipo_producto='Desayunos'";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $producto = $mostrar['producto'];
                            $tipo_producto = $mostrar['tipo_producto'];
                            $precio = number_format($mostrar['precio'],2);
                            $ubicacion = $mostrar['ubicacion'];
                            
                        ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix desayuno">
                    <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="<?php echo $ubicacion ?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="shop-details.php?id=<?php echo $id; ?>"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#"><?php echo $producto ?></a></h6>
                            <h5>$<?php echo $precio ?></h5>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- ARREGLOS -->
                <?php 
                        $conexion=mysqli_connect('localhost','root','','delmary');
                        $sql="SELECT * FROM productos WHERE tipo_producto='Arreglos'";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $producto = $mostrar['producto'];
                            $tipo_producto = $mostrar['tipo_producto'];
                            $precio = number_format($mostrar['precio'],2);
                            $ubicacion = $mostrar['ubicacion'];
                            
                        ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix arreglo">
                    <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="<?php echo $ubicacion ?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="shop-details.php?id=<?php echo $id; ?>"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#"><?php echo $producto ?></a></h6>
                            <h5>$<?php echo $precio ?></h5>
                        </div>
                    </div>
                </div>             
                <?php } ?>      
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Productos Nuevos</h4>
                        <div class="latest-product__slider owl-carousel">
                        <?php 
                        $conexion=mysqli_connect('localhost','root','','delmary');
                        $sql="SELECT * FROM productos WHERE estado='Nuevo'";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $producto = $mostrar['producto'];
                            $tipo_producto = $mostrar['tipo_producto'];
                            $precio = number_format($mostrar['precio'],2);
                            $ubicacion = $mostrar['ubicacion'];
                            
                        ?>
                            <div class="latest-product__slider__item">
 
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="<?php echo $ubicacion ?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?php echo $producto ?></h6>
                                        <span>$<?php echo $precio ?></span>
                                    </div>
                                </a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Más Vendidos</h4>
                        <div class="latest-product__slider owl-carousel">
                        <?php 
                        $conexion=mysqli_connect('localhost','root','','delmary');
                        $sql="SELECT * FROM productos WHERE estado='Mas Vendidos'";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $producto = $mostrar['producto'];
                            $tipo_producto = $mostrar['tipo_producto'];
                            $precio = number_format($mostrar['precio'],2);
                            $ubicacion = $mostrar['ubicacion'];
                            
                        ?>
                            <div class="latest-product__slider__item">  
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="<?php echo $ubicacion ?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?php echo $producto ?></h6>
                                        <span>$<?php echo $precio ?></span>
                                    </div>
                                </a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Combos</h4>
                        <div class="latest-product__slider owl-carousel">
                        <?php 
                        $conexion=mysqli_connect('localhost','root','','delmary');
                        $sql="SELECT * FROM productos WHERE tipo_producto='Combos'";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $producto = $mostrar['producto'];
                            $tipo_producto = $mostrar['tipo_producto'];
                            $precio = number_format($mostrar['precio'],2);
                            $ubicacion = $mostrar['ubicacion'];
                            
                        ?>
                            <div class="latest-product__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="<?php echo $ubicacion ?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?php echo $producto ?></h6>
                                        <span>$<?php echo $precio ?></span>
                                    </div>
                                </a>
                                
                             
                          </div>
                        <?php } ?> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->


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
    <script src="js/modal.js"></script>



</body>

</html>