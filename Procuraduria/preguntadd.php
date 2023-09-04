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
        <a href="preguntas.php" class="button_back"><i class='bx bx-undo'></i>Regresar</a>
        <div class="container animated wow fadeIn">
            <div class="top"> 
              <h1>Preguntas de Seguridad</h1>
            </div>
            <div class="space">

            </div>

            <!-- METE ITEMS AQUI -->
          <div class="contenido">
            <form action="preguntadd2.php" class="formulario" id="formulario" method="post" autocomplete="off" enctype="multipart/form-data">
			<!-- Grupo: Usuario -->

           <!-- DIRECCIÓN -->

                    <div class="container-inputs" id="grupo__pregunta1">
                        <label class="formulario__label" for="pregunta1">Pregunta #1</label>
                        <div class="form__inputs">
                            <select rows="4" type="text" id="pregunta1" name="pregunta1" >
                                <option>¿Cual es su color favorito?</option>
                                <option>¿Cual es su mes favorito?</option>
                                <option>¿Cual es su idioma favorito?</option>
                            </select>
                        </div>
                    </div>

                    <!-- PROBLEMA -->

                    <div class="container-inputs" id="grupo__respuesta1">
                        <label class="formulario__label" for="respuesta1">Respuesta #1</label>
                        <div class="form__inputs">
                            <input type="text" id="respuesta1" name="respuesta1" placeholder="Ingrese la Respuesta #1" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'>
                            <i class="icon-close-outline form__validacion-estado"></i>
                        </div>
                        <p class="form__validacion-error">¡Coloque su respuesta!</p>
                    </div>     
                      <!-- DIRECCIÓN -->

                    <div class="container-inputs" id="grupo__pregunta2">
                        <label class="formulario__label" for="pregunta2">Pregunta #2</label>
                        <div class="form__inputs">
                            <select rows="4" type="text" id="pregunta2" name="pregunta2" >
                                <option>¿Cuando es su cumpleaños?</option>
                                <option>¿Cuando es su fecha de aniversario?</option>
                                <option>¿Cuando es el cumpleaños de su madre?</option>
                            </select>
                        </div>
                    </div>

                    <!-- PROBLEMA -->

                    <div class="container-inputs" id="grupo__respuesta2">
                        <label class="formulario__label" for="respuesta2">Respuesta #2</label>
                        <div class="form__inputs">
                            <input type="date" id="respuesta2" name="respuesta2" placeholder="Ingrese la Respuesta #2">
                            <i class="icon-close-outline form__validacion-estado"></i>
                        </div>
                        <p class="form__validacion-error">¡Coloque su respuesta!</p>
                    </div>   
                      <!-- DIRECCIÓN -->

                    <div class="container-inputs" id="grupo__pregunta3">
                        <label class="formulario__label" for="pregunta3">Pregunta #3</label>
                        <div class="form__inputs">
                            <select rows="4" type="text" id="pregunta3" name="pregunta3"  >
                                <option>¿Cual es su numero favorito?</option>
                                <option>¿Cual es su numero de telefono?</option>
                                <option>¿Cual es su edad?</option>
                            </select>
                        </div>
                    </div>

                    <!-- PROBLEMA -->

                    <div class="container-inputs" id="grupo__respuesta3">
                        <label class="formulario__label" for="respuesta3">Respuesta #3</label>
                        <div class="form__inputs">
                            <input type="text" id="respuesta3" name="respuesta3" placeholder="Ingrese la Respuesta #3" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57))">
                            <i class="icon-close-outline form__validacion-estado"></i>
                        </div>
                        <p class="form__validacion-error">¡Coloque su respuesta!</p>
                    </div> 




			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>

			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" name="login" id="login" type="button" value="Registrar" class="formulario__btn">Enviar</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			</div>
		</form>
               
          </div>
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

</body>
</html>

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
    <script src="js/validacionesFormularios/formulariopreguntas.js"></script>

</body>

</html>
<?php } ?>