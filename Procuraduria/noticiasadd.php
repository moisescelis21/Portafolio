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
  if ($roles == 1 OR $roles == 3 OR $roles == 7 OR $roles == 8) {
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
    <link rel="stylesheet" href="css/register_intranet.css">
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
        <a href="noticias.php" class="button_back"><i class='bx bx-undo'></i>Regresar</a>
        <div class="container animated wow fadeIn">
            <div class="top"> 
              <h1>Redaccion de Noticias</h1>
            </div>
            <div class="space">

            </div>

            <!-- METE ITEMS AQUI -->
          <div class="contenido">
            <form action="noticiasadd2.php" class="formulario" id="formulario" method="post" autocomplete="off" enctype="multipart/form-data">
			<!-- Grupo: Usuario -->
			<div class="formulario__grupo" id="grupo__titulo">
				<label for="titulo" class="formulario__label">Titulo de la Noticia</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="titulo" id="titulo" class="titulo" placeholder="Titulo">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="form__validacion-error">Ingrese el título de la noticia.</p>
                </div>

			<!-- Grupo: Nombre -->
			<div class="formulario__grupo" id="grupo__imagen">
				<label for="imagen" class="formulario__label">Imagen de la Noticia</label>
				<div class="formulario__grupo-input">
					<input type="file" class="formulario__input" name="imagen" id="imagen" class="imagen" placeholder="Imagen">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="form__validacion-error">Ingrese una imagen para la noticia.</p>
                </div>

			<!-- Grupo: Contraseña -->
			<div class="formulario__grupo" id="grupo__redaccion">
				<label for="redaccion" class="formulario__label">Redaccion de la Noticia</label>
				<div class="formulario__grupo-input">
                    <input type="text" id="redaccion" name="redaccion" placeholder="Redaccion" class="formulario__input textarea redaccion">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="form__validacion-error">Redacte la noticia.</p>
                </div>

			<!-- Grupo: Contraseña 2 -->
			<div class="formulario__grupo" id="grupo__resumen">
				<label for="resumen" class="formulario__label">Resumen de la Noticia</label>
				<div class="formulario__grupo-input">
                <input type="text" id="resumen" name="resumen" placeholder="Resumen" class="formulario__input textarea resumen" s>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="form__validacion-error">De un resumen de la noticia.</p>
                </div>


			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>

			<div class="formulario__grupo formulario__grupo-btn-enviar">
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
    <script src="js/validacionesFormularios/formularionoticias.js"></script>
</body>

</html>

<?php } ?>