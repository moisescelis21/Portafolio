
    <!-- Sidebar Start -->
        <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <?php
                    $status = "";
    $conexion=mysqli_connect('localhost','root','','procuraduria');                
    $sql2="SELECT * FROM usuarios WHERE cedula=$cedula";
    $result2=mysqli_query($conexion,$sql2);
    while($mostrar2=mysqli_fetch_array($result2)){
                            $foto = $mostrar2['foto'];
                            $status = $mostrar2['status'];

         ?>
                    <img src="<?php echo $foto ?>" alt="">
                <?php } ?>
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


                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="intranet_start.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>
                    <?php if ($status == 'Activo') {
                    ?>
                    <li class="nav-link">
                        <a href="documentos.php">
                        <i class='bx bx-receipt icon'></i>
                            <span class="text nav-text">Documentos</span>
                        </a>
                    </li>
                    <?php
                    }else{
                    ?>
                    <li class="nav-link">
                        <a href="recibos.php">
                        <i class='bx bx-money-withdraw icon'></i>
                            <span class="text nav-text">Recibos de Pago</span>
                        </a>
                    </li>
                    <?php
                    } ?>
                    
                    

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
<?php }elseif ($roles == "7") {
        ?>
        <div class="menu-bar">
            <div class="menu">


                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="intranet_start.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                   <li class="nav-link">
                        <a href="documentos.php">
                        <i class='bx bx-receipt icon'></i>
                            <span class="text nav-text">Documentos</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="TH.php">
                          <i class='bx bx-food-menu icon'></i>
                            <span class="text nav-text">Talento Humano</span>
                        </a>
                    </li>
                    
                     <li class="nav-link">
                        <a href="bienes.php">
                        <i class='bx bx-archive-in icon'></i>
                            <span class="text nav-text">Archivos - Bienes</span>
                        </a>
                    </li>
                  <li class="nav-link">
                        <a href="prensa.php">
                        <i class='bx bx-news icon'></i>
                            <span class="text nav-text">Relaciones Publicas</span>
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
<?php }elseif ($roles == "6") {
        ?>
        <div class="menu-bar">
            <div class="menu">


                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="intranet_start.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="documentos.php">
                        <i class='bx bx-receipt icon'></i>
                            <span class="text nav-text">Documentos</span>
                        </a>
                    </li>

                     <li class="nav-link">
                        <a href="bienes.php">
                        <i class='bx bx-archive-in icon'></i>
                            <span class="text nav-text">Archivos - Bienes</span>
                        </a>
                    </li>
                   <li class="nav-link">
                        <a href="prensa.php">
                        <i class='bx bx-news icon'></i>
                            <span class="text nav-text">Relaciones Publicas</span>
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
<?php }elseif ($roles == "5") {
        ?>
        <div class="menu-bar">
     

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="intranet_start.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="documentos.php">
                        <i class='bx bx-receipt icon'></i>
                            <span class="text nav-text">Documentos</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="TH.php">
                          <i class='bx bx-food-menu icon'></i>
                            <span class="text nav-text">Talento Humano</span>
                        </a>
                    </li>
                    
                
                     <li class="nav-link">
                        <a href="bienes.php">
                        <i class='bx bx-archive-in icon'></i>
                            <span class="text nav-text">Archivos - Bienes</span>
                        </a>
                    </li>
                   <li class="nav-link">
                        <a href="prensa.php">
                        <i class='bx bx-news icon'></i>
                            <span class="text nav-text">Relaciones Publicas</span>
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
<?php }elseif ($roles == "4") {
        ?>
        <div class="menu-bar">
            <div class="menu">
       

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="intranet_start.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="documentos.php">
                        <i class='bx bx-receipt icon'></i>
                            <span class="text nav-text">Documentos</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="TH.php">
                          <i class='bx bx-food-menu icon'></i>
                            <span class="text nav-text">Talento Humano</span>
                        </a>
                    </li>
                    
                    <li class="nav-link">
                        <a href="prensa.php">
                        <i class='bx bx-news icon'></i>
                            <span class="text nav-text">Relaciones Publicas</span>
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
<?php }elseif ($roles == "3") {
        ?>
        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="intranet_start.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                   <li class="nav-link">
                        <a href="documentos.php">
                        <i class='bx bx-receipt icon'></i>
                            <span class="text nav-text">Documentos</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="bienes.php">
                        <i class='bx bx-archive-in icon'></i>
                            <span class="text nav-text">Archivos - Bienes</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="prensa.php">
                        <i class='bx bx-news icon'></i>
                            <span class="text nav-text">Relaciones Publicas</span>
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
<?php }elseif ($roles == "2") {
        ?>
        <div class="menu-bar">
            <div class="menu">
        
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="intranet_start.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="documentos.php">
                        <i class='bx bx-receipt icon'></i>
                            <span class="text nav-text">Documentos</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="prensa.php">
                        <i class='bx bx-news icon'></i>
                            <span class="text nav-text">Relaciones Publicas</span>
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
<?php }elseif ($roles == "1") {
        ?>
        <div class="menu-bar">
            <div class="menu">
        

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="intranet_start.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                   <li class="nav-link">
                        <a href="documentos.php">
                        <i class='bx bx-receipt icon'></i>
                            <span class="text nav-text">Documentos</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="TH.php">
                          <i class='bx bx-food-menu icon'></i>
                            <span class="text nav-text">Talento Humano</span>
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
<?php }elseif($privilegio == "0" OR $roles == "0"){
        ?>
        <div class="menu-bar">
            <div class="menu">
                

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="intranet_start.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="TH.php">
                          <i class='bx bx-food-menu icon'></i>
                            <span class="text nav-text">Talento Humano</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="bienes.php">
                        <i class='bx bx-archive-in icon'></i>
                            <span class="text nav-text">Archivos - Bienes</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="prensa.php">
                        <i class='bx bx-news icon'></i>
                            <span class="text nav-text">Relaciones Publicas</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="documentos.php">
                        <i class='bx bx-receipt icon'></i>
                            <span class="text nav-text">Documentos</span>
                        </a>
                    </li>
                

                    <li class="nav-link">
                        <a href="administrativos.php">
                          <i class='bx bx-data icon'></i>
                            <span class="text nav-text">Administrativos</span>
                        </a>
                    </li>

                    
                

                    
                </ul>

            </div>
            

            <div class="bottom-content">
                <li class="">
                        <a href="perfilusuario.php">
                        <i class='bx bx-user-circle icon'></i>
                            <span class="text nav-text">Perfil de Usuario</span>
                        </a>
                    </li>
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


        