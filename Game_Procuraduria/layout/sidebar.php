
    <!-- Sidebar Start -->
       
    
    <nav class="sidebar close animated wow fadeInLeft">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="img/logo.png" alt="">
                </span>

                <div class="text logo-text">

                    <span class="name">Usuario: <?php echo $cedula ?></span>
                </div>
            
            </div>

            <i class='bx bx-chevron-right toggle' style="background: #ff1414;"></i>
        </header>
        <?php if ($roles == "8") {
        ?>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Buscar...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="intranet_start.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="constancias.php">
                        <i class='bx bx-receipt icon'></i>
                            <span class="text nav-text">Constancias <br>de Trabajo</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="recibos.php">
                        <i class='bx bx-money-withdraw icon'></i>
                            <span class="text nav-text">Recibos de Pago</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="perfilusuario.php">
                        <i class='bx bx-user-circle icon'></i>
                            <span class="text nav-text">Perfil de Usuario</span>
                        </a>
                    </li>
                </ul>

            </div>
            

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Cerrar Sesión</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text" style="font-size: 15px;">Modo Oscuro</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>
        <!-- Sidebar End -->
<?php } ?>
<?php if ($roles == "7") {
        ?>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box" style="">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Buscar...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="intranet_start.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="constancias.php">
                        <i class='bx bx-receipt icon'></i>
                            <span class="text nav-text">Constancias <br>de Trabajo</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="recibos.php">
                        <i class='bx bx-money-withdraw icon'></i>
                            <span class="text nav-text">Recibos de Pago</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="nomina.php">
                          <i class='bx bx-food-menu icon'></i>
                            <span class="text nav-text">Nominas</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="archivos.php">
                          <i class='bx bx-file icon'></i>
                            <span class="text nav-text">Archivos Publicos</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="perfilusuario.php">
                        <i class='bx bx-user-circle icon'></i>
                            <span class="text nav-text">Perfil de Usuario</span>
                        </a>
                    </li>
                </ul>

            </div>
            

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Cerrar Sesión</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text" style="font-size: 15px;">Modo Oscuro</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>
        <!-- Sidebar End -->
<?php } ?>
<?php if ($roles == "6") {
        ?>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Buscar...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="intranet_start.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="constancias.php">
                        <i class='bx bx-receipt icon'></i>
                            <span class="text nav-text">Constancias <br>de Trabajo</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="recibos.php">
                        <i class='bx bx-money-withdraw icon'></i>
                            <span class="text nav-text">Recibos de Pago</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="noticias.php">
                        <i class='bx bx-news icon'></i>
                            <span class="text nav-text">Noticias</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="archivos.php">
                          <i class='bx bx-file icon'></i>
                            <span class="text nav-text">Archivos Publicos</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="perfilusuario.php">
                        <i class='bx bx-user-circle icon'></i>
                            <span class="text nav-text">Perfil de Usuario</span>
                        </a>
                    </li>
                </ul>

            </div>
            

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Cerrar Sesión</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text" style="font-size: 15px;">Modo Oscuro</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>
        <!-- Sidebar End -->
<?php } ?>
<?php if ($roles == "5") {
        ?>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Buscar...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="intranet_start.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="constancias.php">
                        <i class='bx bx-receipt icon'></i>
                            <span class="text nav-text">Constancias <br>de Trabajo</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="recibos.php">
                        <i class='bx bx-money-withdraw icon'></i>
                            <span class="text nav-text">Recibos de Pago</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="nomina.php">
                          <i class='bx bx-food-menu icon'></i>
                            <span class="text nav-text">Nominas</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="noticias.php">
                        <i class='bx bx-news icon'></i>
                            <span class="text nav-text">Noticias</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="archivos.php">
                          <i class='bx bx-file icon'></i>
                            <span class="text nav-text">Archivos Publicos</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="perfilusuario.php">
                        <i class='bx bx-user-circle icon'></i>
                            <span class="text nav-text">Perfil de Usuario</span>
                        </a>
                    </li>
                </ul>

            </div>
            

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Cerrar Sesión</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text" style="font-size: 15px;">Modo Oscuro</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>
        <!-- Sidebar End -->
<?php } ?>
<?php if ($roles == "4") {
        ?>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Buscar...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="intranet_start.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="constancias.php">
                        <i class='bx bx-receipt icon'></i>
                            <span class="text nav-text">Constancias <br>de Trabajo</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="recibos.php">
                        <i class='bx bx-money-withdraw icon'></i>
                            <span class="text nav-text">Recibos de Pago</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="nomina.php">
                          <i class='bx bx-food-menu icon'></i>
                            <span class="text nav-text">Nominas</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="noticias.php">
                        <i class='bx bx-news icon'></i>
                            <span class="text nav-text">Noticias</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="perfilusuario.php">
                        <i class='bx bx-user-circle icon'></i>
                            <span class="text nav-text">Perfil de Usuario</span>
                        </a>
                    </li>
                </ul>

            </div>
            

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Cerrar Sesión</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text" style="font-size: 15px;">Modo Oscuro</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>
        <!-- Sidebar End -->
<?php } ?>
<?php if ($roles == "3") {
        ?>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Buscar...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="intranet_start.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="constancias.php">
                        <i class='bx bx-receipt icon'></i>
                            <span class="text nav-text">Constancias <br>de Trabajo</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="recibos.php">
                        <i class='bx bx-money-withdraw icon'></i>
                            <span class="text nav-text">Recibos de Pago</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="archivos.php">
                          <i class='bx bx-file icon'></i>
                            <span class="text nav-text">Archivos Publicos</span>
                        </a>
                    </li>


                    <li class="nav-link">
                        <a href="perfilusuario.php">
                        <i class='bx bx-user-circle icon'></i>
                            <span class="text nav-text">Perfil de Usuario</span>
                        </a>
                    </li>
                </ul>

            </div>
            

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Cerrar Sesión</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text" style="font-size: 15px;">Modo Oscuro</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>
        <!-- Sidebar End -->
<?php } ?>
<?php if ($roles == "2") {
        ?>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Buscar...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="intranet_start.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="constancias.php">
                        <i class='bx bx-receipt icon'></i>
                            <span class="text nav-text">Constancias <br>de Trabajo</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="recibos.php">
                        <i class='bx bx-money-withdraw icon'></i>
                            <span class="text nav-text">Recibos de Pago</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="noticias.php">
                        <i class='bx bx-news icon'></i>
                            <span class="text nav-text">Noticias</span>
                        </a>
                    </li>


                    <li class="nav-link">
                        <a href="perfilusuario.php">
                        <i class='bx bx-user-circle icon'></i>
                            <span class="text nav-text">Perfil de Usuario</span>
                        </a>
                    </li>
                </ul>

            </div>
            

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Cerrar Sesión</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text" style="font-size: 15px;">Modo Oscuro</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>
        <!-- Sidebar End -->
<?php } ?>
<?php if ($roles == "1") {
        ?>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Buscar...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="intranet_start.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="constancias.php">
                        <i class='bx bx-receipt icon'></i>
                            <span class="text nav-text">Constancias <br>de Trabajo</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="recibos.php">
                        <i class='bx bx-money-withdraw icon'></i>
                            <span class="text nav-text">Recibos de Pago</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="nomina.php">
                          <i class='bx bx-food-menu icon'></i>
                            <span class="text nav-text">Nominas</span>
                        </a>
                    </li>


                    <li class="nav-link">
                        <a href="perfilusuario.php">
                        <i class='bx bx-user-circle icon'></i>
                            <span class="text nav-text">Perfil de Usuario</span>
                        </a>
                    </li>
                </ul>

            </div>
            

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Cerrar Sesión</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text" style="font-size: 15px;">Modo Oscuro</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>
        <!-- Sidebar End -->
<?php } ?>
<?php if ($roles == "9") {
        ?>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Buscar...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="intranet_start.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="jugar.php">
                        <i class='bx bx-receipt icon'></i>
                            <span class="text nav-text">Jugar</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="pregunta.php">
                        <i class='bx bx-receipt icon'></i>
                            <span class="text nav-text">Preguntas</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="resultados.php">
                        <i class='bx bx-receipt icon'></i>
                            <span class="text nav-text">Resultados</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="participantes.php">
                        <i class='bx bx-receipt icon'></i>
                            <span class="text nav-text">Participantes</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="puntajes.php">
                        <i class='bx bx-receipt icon'></i>
                            <span class="text nav-text">Puntajes</span>
                        </a>
                    </li>


                </ul>

            </div>
            

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Cerrar Sesión</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text" style="font-size: 15px;">Modo Oscuro</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>
        <!-- Sidebar End -->
<?php } ?>


        <?php 
        if($privilegio == "0"){
        ?>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Buscar...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="intranet_start.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="trabajadores.php">
                          <i class='bx bx-hard-hat icon'></i>
                            <span class="text nav-text">Trabajadores</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="constancias.php">
                        <i class='bx bx-receipt icon'></i>
                            <span class="text nav-text">Constancias <br>de Trabajo</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="noticias.php">
                        <i class='bx bx-news icon'></i>
                            <span class="text nav-text">Noticias</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="nomina.php">
                          <i class='bx bx-food-menu icon'></i>
                            <span class="text nav-text">Nominas</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="recibos.php">
                        <i class='bx bx-money-withdraw icon'></i>
                            <span class="text nav-text">Recibos de Pago</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="archivos.php">
                          <i class='bx bx-file icon'></i>
                            <span class="text nav-text">Archivos Publicos</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="restaurar.php">
                          <i class='bx bx-data icon'></i>
                            <span class="text nav-text">Respaldos</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="configuraciones.php">
                          <i class='bx bx-wrench icon'></i>
                            <span class="text nav-text">Configuraciones <br> de Primas</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="usuarios.php">
                          <i class='bx bx-user icon'></i>
                            <span class="text nav-text">Usuarios</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="perfilusuario.php">
                        <i class='bx bx-user-circle icon'></i>
                            <span class="text nav-text">Perfil de Usuario</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="iniciojuego.php">
                        <i class='bx bx-user-circle icon'></i>
                            <span class="text nav-text">Juego PGEB</span>
                        </a>
                    </li>
                </ul>

            </div>
            

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Cerrar Sesión</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text" style="font-size: 15px;">Modo Oscuro</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>
        <!-- Sidebar End -->


        <?php } ?>


        