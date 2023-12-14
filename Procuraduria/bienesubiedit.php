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
        <a href="bienesubi.php" class="button_back"><i class='bx bx-undo'></i>Regresar</a>
        <div class="container animated wow fadeIn">
            <div class="top"> 
              <h1>Ubicaciones</h1>
            </div>
            <div class="space">

            </div>

            <!-- METE ITEMS AQUI -->
          <div class="contenido">
            <?php
            $id = $_GET['id'];
             ?>
            
            <form action="bienesubiedit2.php?id=<?php echo $id ?>" class="formulario" id="formulario" method="post" autocomplete="off" enctype="multipart/form-data">
			<!-- Grupo: Usuario -->
      <?php 
                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql2="SELECT * FROM ubicaciones WHERE id='$id'";
                        $result2=mysqli_query($conexion,$sql2);

                        while($mostrar2=mysqli_fetch_array($result2)){
                            $id2 = $mostrar2['id'];
                            $nombre2 = $mostrar2['nombre'];
                            $pertenece2 = $mostrar2['pertenece'];
                         
                            
                        ?>

            <div class="formulario__grupo" id="grupo__nombre">
				<label for="nombre" class="formulario__label">Direccion/Coordinacion o Ubicacion</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="nombre" id="nombre" class="nombre" placeholder="Direccion/Coordinacion o Ubicacion..." value="<?php  echo $nombre2 ?>">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="form__validacion-error">Ingrese la codificacion del archivo.</p>
                </div>
                <div class="formulario__grupo" id="grupo__pertenece">
        <label for="pertenece" class="formulario__label">Lugar Perteneciente</label>
        <div class="formulario__grupo-input">
          <select class="formulario__input" name="pertenece" id="pertenece" class="pertenece">
            <option value="0">N/A</option>
            <?php 
                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql="SELECT * FROM ubicaciones";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $nombre = $mostrar['nombre'];
                            $pertenece = $mostrar['pertenece'];
                         
                            
                        ?>
                        <?php
                        if ($pertenece2 == $id) {
                        ?>
                        <option selected="" value="<?php echo $id ?>"><?php echo $nombre ?></option>
                        <?php
                        }else{
                        ?>
                        <option value="<?php echo $id ?>"><?php echo $nombre ?></option>
                        <?php
                        }
                        ?>

                        
                      <?php
                    }
                      ?>
          </select>
          <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="form__validacion-error">Ingrese el lugar al que pertecene la referencia.</p>
                </div>

<?php } ?>

			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>

			<div class="formulario__grupo formulario__grupo-btn-enviar" style="margin-top: 6%;">
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

    
</body>

</html>

<?php } ?>