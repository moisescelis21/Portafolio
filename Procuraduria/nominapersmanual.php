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
        <a href="javascript: history.go(-1)" class="button_back"><i class='bx bx-undo'></i>Regresar</a>
        <div class="container animated wow fadeIn">
            <div class="top"> 
              <h1>Eleccion de Trabajadores</h1>
            </div>
            <div class="space">

            </div>

            <!-- METE ITEMS AQUI -->
          <div class="contenido">
            <?php
            $correlativo = $_GET['correlativo']; 
             ?>
            <form action="nominapersmanual2.php?correlativo=<?php echo $correlativo ?>" class="formulario" id="formulario" method="POST" autocomplete="off" enctype="multipart/form-data">
			<!-- Grupo: Usuario -->
                <div class="formulario__grupo" id="grupo__periodo">
                <label for="periodo" class="formulario__label">Trabajador</label>
                <div class="formulario__grupo-input">
                    <select class="formulario__input" name="cedula" id="cedula" class="cedula">
                        <?php 
                        $tiponomina = "";
                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql3="SELECT * FROM nominas WHERE correlativo='$correlativo'";
                        $result3=mysqli_query($conexion,$sql3); 
                        while($mostrar2=mysqli_fetch_array($result3)){
                            $tiponomina = $mostrar2['tiponomina'];
                            }

                        ?>
                        <option value="none">Trabajadores</option>
                        <?php 
                        if ($tiponomina == "Contratados") {
                            $conexion=mysqli_connect('localhost','root','','procuraduria');
                            $sql="SELECT * FROM trabajadores WHERE nomina='Contratado'";
                            $result=mysqli_query($conexion,$sql);
                            
                        }else{
                            $conexion=mysqli_connect('localhost','root','','procuraduria');
                            $sql="SELECT * FROM trabajadores";
                            $result=mysqli_query($conexion,$sql);
                        }
                        
                        
                    
                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $nombres = $mostrar['nombres'];
                            $apellidos = $mostrar['apellidos'];
                            $cedula = $mostrar['cedula'];
                            $nomina = $mostrar['nomina'];
                            

                        
                        

                                                        
                        ?>
                        <option value="<?php echo $cedula ?>"><?php echo $nombres." ".$apellidos ?></option> 
                        <?php }
                        ?>


          
                    </select>
                    
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="form__validacion-error">Seleccione una opción.</p>
                </div>

			

			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>

			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit"  class="formulario__btn">Enviar</button>
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