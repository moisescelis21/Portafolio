<script src="js/dist/sweet.js"></script>
    <script src="js/dist/sweetalert2.all.min.js
"></script>
<link href="js/dist/sweetalert2.min.css
" rel="stylesheet">
<?php
session_start();
$cedula = $_SESSION['cedula'];
$privilegio = $_SESSION['privilegio'];
$roles = $_SESSION['roles'];
if ($roles != 0 OR $privilegio != 0) {
    session_unset();
    session_destroy();
    echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'Usted no tiene permiso para entrar aqui.',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'login.php';
  }
})</script>";
  }
  
if (!isset($_SESSION["cedula"])) {
    session_unset();
    session_destroy();
    echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'Debe loguearse para entrar aqui.',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'login.php';
  }
})</script>";
}else{
  ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>INTRANET | Inicio</title> 
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css/register_intranet3.css">
    <link rel="stylesheet" href="icons/iconpack2/style.css">
    <link rel="stylesheet" href="css/tablastyle.css">

    
    <!-- Libraries Stylesheet -->
    <link href="lib/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/boxicons/css/boxicons.min.css" rel="stylesheet">


        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="img/favicon.svg">
</head>
<body>
  
        <!-- Sidebar Start -->
        
        <?php require('./layout/sidebar.php') ?>
        <!-- Sidebar End -->

        <!-- Content Start -->

        
    <section class="home">

        <?php 
                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql="SELECT * FROM trabajadores WHERE cedula=$cedula";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $nombres = $mostrar['nombres'];

                            
                        ?>
            <?php } ?>
        <?php if ($cedula == 000000000) {
        ?>
        <div class="text animated wow fadeInRight">Bienvenido Administrador!</div>
        <?php }else{ 
        ?>
        <div class="text animated wow fadeInRight">Bienvenido <?php echo $nombres ?>!</div>
        <?php } ?>  
        <a href="usuarios.php" class="button_back"><i class='bx bx-undo'></i>Regresar</a>
        <div class="container animated wow fadeIn">
            <div class="top"> 
              <h1>Usuarios</h1>
            </div>
            <div class="space">

            </div>
            <!-- METE ITEMS AQUI -->
          <div class="contenido">
            <form action="usuarios3.php" class="formulario" id="formulario" method="post" autocomplete="off">
			<!-- Grupo: Teléfono -->
			<div class="container-inputs" id="grupo__cedula">
                    <label class="formulario__label" for="cedula">Cedula</label>
                    <div class="form__inputs">
                        <input type="cedula" name="cedula" id="cedula" class="cedula"
                            placeholder="Introduzca Cedula...">
                        <i class="icon-close-outline form__validacion-estado"></i>
                    </div>
                    <p class="form__validacion-error">Escriba una cedula válido.</p>
                </div>
            
            <div class="container-inputs" id="grupo__password">
                    <label class="formulario__label" for="password">Contraseña</label>
                    <div class="form__inputs">
                        <input type="password" name="password" id="password" class="password"
                            placeholder="Introduzca su contraseña...">
                        <i class="icon-close-outline form__validacion-estado"></i>
                    </div>
                    <p class="form__validacion-error">Su contraseña debe poseer de 4 a 16 caracteres.</p>
                </div>

            <?php 
                        $sql="SELECT * FROM usuarios WHERE privilegio='0'";
                        $result=mysqli_query($conexion,$sql);
                        $row=mysqli_num_rows($result);            
            ?>
            <?php
            if ($row == 0) {
            ?>
            <div class="container-inputs" id="grupo__privilegio">
                    <label class="formulario__label" for="privilegio">Privilegio</label>
                    <div class="form__inputs">
                        <select name="privilegio" id="privilegio" class="privilegio">
                            <option value="none" hidden selected>Nivel de Usuario</option>
                            <option value="0">SuperUsuario</option>
                            <option value="1">Administrador</option>
                            <option value="2">Usuario</option>
                        </select>
                    </div>
                    <p class="form__validacion-error">Seleccione alguna opción</p>
                </div>
            <?php
            }else{
             ?>
             <div class="container-inputs" id="grupo__privilegio">
                    <label class="formulario__label" for="privilegio">Privilegio</label>
                    <div class="form__inputs">
                        <select name="privilegio" id="privilegio" class="privilegio">
                            <option value="none" hidden selected>Nivel de Usuario</option>
                            <option value="1">Administrador</option>
                            <option value="2">Usuario</option>
                        </select>
                    </div>
                    <p class="form__validacion-error">Seleccione alguna opción</p>
                </div>
            <?php
            }
             ?>


                <div class="container-inputs" id="grupo__roles">
                    <label class="formulario__label" for="roles">Roles</label>
                    <div class="form__inputs">
                    <select class="formulario__input" name="roles" id="roles">
                        <option value="none" hidden selected>Roles</option>
						<option value="0">Todos los  permisos</option>
						<option value="1">Nomina</option>
						<option value="2">Noticias</option>
						<option value="3">Archivos Importantes</option>
						<option value="4">Nomina y Noticias</option>
						<option value="5">Nomina, Noticias y Archivos</option>
						<option value="6">Noticias y Archivos</option>
						<option value="7">Nomina y Archivos</option>
                        <option value="9">Bienes y Archivos</option>
						<option value="8">Recibos y Constancia</option>

					</select>
                    </div>
                    <p class="form__validacion-error">Seleccione alguna opción</p>
                </div>




			</div>

			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>

			<div class="formulario__grupo formulario__grupo-btn-enviar" style="margin-top: -3%;">
				<button type="submit" name="login" id="login" type="button" value="Registrar" class="formulario__btn">Enviar</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			</div>
		</form>
               
          </div>

        </div>

        <!-- NO METAS MAS ITEMS AQUI -->
    </section>


        <!-- Content End -->

        <!-- Script Start -->
    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})


modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Modo Claro";
    }else{
        modeText.innerText = "Modo Oscuro";
        
    }
});
    </script>
        <!-- Script End -->

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
    <script src="js/validacionesFormularios/formulariousuario.js"></script>

</body>

</html>
<?php } ?>