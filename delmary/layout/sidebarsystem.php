
<div class="layout has-sidebar fixed-sidebar fixed-header">
      <aside id="sidebar" class="sidebar collapsed break-point-lg has-bg-image">
        <a id="btn-collapse" class="sidebar-collapser"><i class="ri-arrow-left-s-line"></i></a>
        <div class="sidebar-layout">
          <div class="sidebar-header">
            <div class="pro-sidebar-logo">
            <img src="./img/logo.png" alt="" srcset="" style="width: 60px; margin-left: -10px">

              <h5 style="margin-left: 5px">El Punto del<br>Sabor</h5>
            </div>
          </div>
          <div class="sidebar-content">
            <?php
            $privilegio = $_SESSION['privilegio'];
             if ($privilegio == "1") {
            ?>
            <nav class="menu close-current-submenu">
              <ul>
                <li class="menu-header"><span> GENERAL </span></li>
                <li class="menu-item">
                  <a href="shop-system.php">
                    <span class="menu-icon">
                    <i class="ri-home-4-line"></i>
                    </span>
                    <span class="menu-title">Inicio</span>
                  </a>
                </li>

                <li class="menu-item sub-menu">
                  <a href="#">
                    <span class="menu-icon">
                      <i class="ri-shopping-cart-fill"></i>
                    </span>
                    <span class="menu-title">Ventas</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item">
                        <a href="pedidos.php">
                          <span class="menu-title">Todos los Pedidos</span>
                        </a>
                      </li>

                    </ul>
                  </div>
                </li>
                <li class="menu-item sub-menu">
                  <a href="#">
                    <span class="menu-icon">
                    <i class="ri-store-3-fill"></i>
                    </span>
                    <span class="menu-title">Productos</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item">
                        <a href="productos.php">
                          <span class="menu-title">Visualizar Productos</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="productos2.php">
                          <span class="menu-title">Agregar Productos</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="menu-item sub-menu">
                  <a href="#">
                    <span class="menu-icon">
                    <i class="ri-settings-5-line"></i>
                    </span>
                    <span class="menu-title">Configuraciones</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item">
                        <a href="restaurar.php">
                          <span class="menu-title">Base de Datos</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="clientes.php">
                          <span class="menu-title">Clientes</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="menu-item sub-menu">
                  <a href="#">
                    <span class="menu-icon">
                    <i class="ri-printer-line"></i>
                    </span>
                    <span class="menu-title">Reportes</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item">
                        <a href="ventas1.php">
                          <span class="menu-title">Visualizar Ventas</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="ordenes1.php">
                          <span class="menu-title">Visualizar Ordenes</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>



                <li class="menu-header" style="padding-top: 20px"><span> SESIÓN </span></li>
                <li class="menu-item">
                  <a href="shop-system-profile.php">
                    <span class="menu-icon">
                    <i class="ri-user-line"></i>
                    </span>
                    <span class="menu-title">Mi Pefil</span>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="usuarios3.php">
                    <span class="menu-icon">
                    <i class="ri-user-add-line"></i>
                    </span>
                    <span class="menu-title">Agregar Usuarios</span>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="preguntas.php">
                    <span class="menu-icon">
                    <i class="ri-survey-line"></i>
                    </span>
                    <span class="menu-title">Preguntas de Seguridad</span>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="logout.php">
                    <span class="menu-icon">
                    <i class="ri-logout-box-line"></i>
                    </span>
                    <span class="menu-title">Cerrar Sesión</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </aside>
      <a id="btn-toggle" href="#" class="sidebar-toggler break-point-lg ">
              <i class="ri-menu-line ri-xl"></i>
            </a>
            <?php }else{
            ?>
            <nav class="menu close-current-submenu">
              <ul>
                <li class="menu-header"><span> GENERAL </span></li>
                <li class="menu-item">
                  <a href="shop-system.php">
                    <span class="menu-icon">
                    <i class="ri-home-4-line"></i>
                    </span>
                    <span class="menu-title">Inicio</span>
                  </a>
                </li>

               <li class="menu-item sub-menu">
                  <a href="#">
                    <span class="menu-icon">
                      <i class="ri-shopping-cart-fill"></i>
                    </span>
                    <span class="menu-title">Mis Pedidos</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item">
                        <a href="pedidos4.php">
                          <span class="menu-title">Todos los Pedidos</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="menu-item sub-menu">
                  <a href="#">
                    <span class="menu-icon">
                    <i class="ri-settings-5-line"></i>
                    </span>
                    <span class="menu-title">Configuraciones</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item">
                        <a href="informacion.php">
                          <span class="menu-title">Informacion General</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>

                



                <li class="menu-header" style="padding-top: 20px"><span> SESIÓN </span></li>
                <li class="menu-item">
                  <a href="shop-system-profile3.php">
                    <span class="menu-icon">
                    <i class="ri-user-line"></i>
                    </span>
                    <span class="menu-title">Mi Pefil</span>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="preguntas.php">
                    <span class="menu-icon">
                    <i class="ri-survey-line"></i>
                    </span>
                    <span class="menu-title">Preguntas de Seguridad</span>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="logout.php">
                    <span class="menu-icon">
                    <i class="ri-logout-box-line"></i>
                    </span>
                    <span class="menu-title">Cerrar Sesión</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </aside>
      <a id="btn-toggle" href="#" class="sidebar-toggler break-point-lg ">
              <i class="ri-menu-line ri-xl"></i>
            </a>



            <?php } ?>
            

<!-- partial -->
  <script src="./js/popper.min.js"></script>

</body>
</html>
