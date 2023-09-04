
<header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li style="color: #cf0c52; font-weight: bolder;"><i class="fa fa-birthday-cake" style="color: #cf0c52;"></i> El Punto del Sabor</li>
                                <li><marquee>Bienvenido a el Punto del Sabor</marquee></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></i></a>
                                <a href="#"><i class="fa fa-whatsapp"></i></a>
                            </div>
                            <div class="header__top__right__auth">
                                <?php
                                if (!isset($_SESSION["usuario"])) {
                                ?>
                                <a href="login.php"><i class="fa fa-user"></i> Iniciar Sesión</a>
                                <?php
                                }else{
                                ?>
                                <a href="shop-system.php"><i class="fa fa-user"></i> Bienvenido <?php echo $_SESSION["usuario"] ?></a>
                                <a href="logout.php">Cerrar Sesion</a>
                                <?php
                                }
                                ?> 
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.php"><i class="fa fa-home"></i> Inicio</a></li>
                            <li><a href="./shop-grid.php"><i class="fa fa-shopping-cart"></i> Tienda</a></li>
                            <li><a href="#">Páginas <i class="fa fa-caret-down"></i></a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shopping-cart.php">Carrito de Compras</a></li>
                                </ul>
                            </li>
                            <li><a href="./contact.php"><i class="fa fa-phone"></i>Contacto</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div> -->
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>