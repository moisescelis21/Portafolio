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
  if ($roles == 1 OR $roles == 2 OR $roles == 4 OR $roles == 8) {
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
    <link rel="stylesheet" href="css/register_intranet4.css">
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
        <a href="bienesg.php" class="button_back"><i class='bx bx-undo'></i>Regresar</a>
        <div class="container animated wow fadeIn">
            <div class="top"> 
              <h1>Archivos Publicos</h1>
            </div>
            <div class="space">

            </div>

            <!-- METE ITEMS AQUI -->
          <div class="contenido">
            <form action="bienesgadd2.php" class="formulario" id="formulario" method="post" autocomplete="off" enctype="multipart/form-data">
			<!-- Grupo: Usuario -->

            <div class="formulario__grupo" id="grupo__grupo">
				<label for="grupo" class="formulario__label">Grupo</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="grupo" id="grupo" class="grupo" placeholder="Grupo...">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="form__validacion-error">Ingrese el grupo.</p>
                </div>
             <div class="formulario__grupo" id="grupo__sgrupo">
        <label for="sgrupo" class="formulario__label">Sub-Grupo</label>
        <div class="formulario__grupo-input">
          <input type="text" class="formulario__input" name="sgrupo" id="sgrupo" class="sgrupo" placeholder="Sub-Grupo...">
          <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="form__validacion-error">Ingrese el sub-grupo.</p>
                </div>
               <div class="formulario__grupo" id="grupo__año">
        <label for="año" class="formulario__label">Año</label>
        <div class="formulario__grupo-input">
          <input type="text" class="formulario__input" name="año" id="año" class="año" placeholder="Año...">
          <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="form__validacion-error">Ingrese el año.</p>
                </div>
                 <div class="formulario__grupo" id="grupo__numero">
        <label for="numero" class="formulario__label">Numero</label>
        <div class="formulario__grupo-input">
          <input type="text" class="formulario__input" name="numero" id="numero" class="numero" placeholder="Numero...">
          <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="form__validacion-error">Ingrese el numero.</p>
                </div>
                 <div class="formulario__grupo" id="grupo__cantidad">
        <label for="cantidad" class="formulario__label">Cantidad</label>
        <div class="formulario__grupo-input">
          <input type="text" class="formulario__input" name="cantidad" id="cantidad" class="cantidad" placeholder="Cantidad...">
          <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="form__validacion-error">Ingrese la cantidad.</p>
                </div>
                 <div class="formulario__grupo" id="grupo__descripcion">
        <label for="descripcion" class="formulario__label">Descripcion</label>
        <div class="formulario__grupo-input">
          <input type="text" class="formulario__input" name="descripcion" id="descripcion" class="descripcion" placeholder="Descripcion...">
          <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="form__validacion-error">Ingrese la descripcion.</p>
                </div>
                 <div class="formulario__grupo" id="grupo__ubicacion">
        <label for="ubicacion" class="formulario__label">Ubicacion</label>
        <div class="formulario__grupo-input">
          <select class="formulario__input" name="ubicacion" id="ubicacion" class="ubicacion">
            <?php 
                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql="SELECT * FROM ubicaciones";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $nombre = $mostrar['nombre'];
                         
                            
                        ?>

                        <option value="<?php echo $id ?>"><?php echo $nombre ?></option>
                      <?php
                    }
                      ?>
          </select>
          <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="form__validacion-error">Ingrese la ubicacion.</p>
                </div>
                 <div class="formulario__grupo" id="grupo__precio">
        <label for="precio" class="formulario__label">Valor Unitario</label>
        <div class="formulario__grupo-input">
          <input type="text" class="formulario__input" name="precio" id="precio" class="precio" placeholder="Valor Unitario...">
          <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="form__validacion-error">Ingrese el valor unitario.</p>
                </div>
                 <div class="formulario__grupo" id="grupo__titulo">
        <label for="observacion" class="formulario__label">Observacion</label>
        <div class="formulario__grupo-input">
          <input type="text" class="formulario__input" name="observacion" id="observacion" class="observacion" placeholder="Observacion...">
          <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="form__validacion-error">Ingrese la observacion.</p>
                </div>




			



			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>

			<div class="formulario__grupo formulario__grupo-btn-enviar" style="margin-top: 6%;">
				<button type="submit" name="login" id="login" type="button" value="Registrar" class="formulario__btn">Enviar</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			</div>
            <input type="hidden" name="cedula" id="cedula" value="<?php echo $cedula; ?>">
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
   
</body>

</html>

<?php } ?>