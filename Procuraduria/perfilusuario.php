<?php
session_start();
$cedula = $_SESSION['cedula'];
$privilegio = $_SESSION['privilegio'];
$roles = $_SESSION['roles'];
if (!isset($_SESSION["cedula"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'login.php';</script>";
  }
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
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/perfil.css">
    <link rel="stylesheet" href="css/tablastyle.css">
    
    <!-- Libraries Stylesheet -->
    <link href="lib/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="lib/fontawesome/css/all.min.css">



        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="img/favicon.svg">
</head>
<body>
  
  
        <!-- Sidebar Start -->
        
        <?php require('./layout/sidebar.php') ?>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <?php 
                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql="SELECT * FROM trabajadores WHERE cedula=$cedula";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $cedula = $mostrar['cedula'];
                            $nombres = $mostrar['nombres'];
                            $apellidos = $mostrar['apellidos'];
                            $cargo = $mostrar['cargo'];
                            $adscrito = $mostrar['adscrito'];
                            $centpago = $mostrar['centpago'];
                            $nomina = $mostrar['nomina'];
                            $sueldo = $mostrar['sueldo'];
                        ?>
    <section class="home">

        <?php if ($cedula == 000000000) {
        ?>
        <div class="text animated wow fadeInRight">Bienvenido Administrador!</div>
        <?php }else{ 
        ?>
        <div class="text animated wow fadeInRight">Bienvenido <?php echo $nombres ?>!</div>
        <?php } ?>  



        <div class="tablediv animated wow fadeIn">
            <!-- Bloque del Perfil de Usuario -->
            <div class="item" id="item1">
                  <?php
    $foto = "";
    $sql2="SELECT * FROM usuarios WHERE cedula=$cedula";
    $result2=mysqli_query($conexion,$sql2);
    while($mostrar2=mysqli_fetch_array($result2)){
                            $foto = $mostrar2['foto'];
                            $status2 = $mostrar2['status'];

         ?>
           
                <img src="<?php echo $foto;  ?>" class="profilepic">
            <?php } ?>
                <a href="#" data-tooltip="Foto de Perfil" class="hero__cta"><i class="fas fa-id-card"></i></a>
				<label class="formulario__label">Nombre de Usuario: <?php echo $cedula ?></label>
                <label class="formulario__label1">Nombre y Apellido: <?php echo $nombres;?> <?php echo $apellidos ?></label>
                <label class="formulario__label1">Cargo: <?php echo $cargo ?></label>

                    </div>
            <!-- Bloque de la Información del Usuario -->
            <div class="item" id="item2">
            <a href="preguntas.php" data-tooltip="Preguntas de Seguridad" class="preguntas__button"><i class="fas fa-question-circle"></i></a>
                <form action="changepass.php" method="POST" id="formulario">
                <?php
                $sql="SELECT * FROM trabajadores WHERE cedula='$cedula' AND cedula !='8874124' AND cedula !='8878329'";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
      $id = $mostrar['id']; 
      $nombres = $mostrar['nombres'];
      $apellidos = $mostrar['apellidos'];
      $cedula = $mostrar['cedula'];
      $nomina = $mostrar['nomina'];
      $cargo = $mostrar['cargo'];
      $adscrito = $mostrar['adscrito'];
      $fechresolucion = $mostrar['fechresolucion'];
      $status = $mostrar['status'];


$sql9="SELECT * FROM montos WHERE cedula='$cedula'";
    $result9=mysqli_query($conexion,$sql9);
    while($mostrar9=mysqli_fetch_array($result9)){
      $sueldo = number_format($mostrar9['sueldo'],2);
      

$sql10="SELECT * FROM datosbancarios WHERE cedula='$cedula'";
    $result10=mysqli_query($conexion,$sql10);
    while($mostrar10=mysqli_fetch_array($result10)){
      $nrocuenta = $mostrar10['nrocuenta'];
      $centpago = $mostrar10['centpago'];
      $tipocuenta = $mostrar10['tipcuenta'];
                 ?>



                <?php if ($status2 == "Activo") {
                 ?>
                <label class="formulario__label2">Direccion Adscrito</label>
			    <input type="text" class="formulario__input" name="" id="" placeholder="<?php echo $adscrito ?>" disabled>
                <label class="formulario__label2">Centro de Pago</label>
			    <input type="text" class="formulario__input" name="" id="" placeholder="<?php echo $centpago ?>" disabled>
                <label class="formulario__label2">Tipo de Nomina</label>
                <input type="text" class="formulario__input" name="" id="" placeholder="<?php echo $nomina ?>" disabled>
                <label class="formulario__label2">Sueldo</label>
                <input type="text" class="formulario__input" name="" id="" placeholder="Bs. <?php echo $sueldo ?>" disabled>
                <label class="formulario__label2">Status</label>
                <input type="text" class="formulario__input" name="" id="" placeholder="<?php echo $status ?>" disabled>
                <?php }else{
                ?>
                <label class="formulario__label2">Direccion Adscrito</label>
                <input type="text" class="formulario__input" name="" id="" placeholder="N/A" disabled>
                <label class="formulario__label2">Centro de Pago</label>
                <input type="text" class="formulario__input" name="" id="" placeholder="N/A" disabled>
                <label class="formulario__label2">Tipo de Nomina</label>
                <input type="text" class="formulario__input" name="" id="" placeholder="N/A" disabled>
                <label class="formulario__label2">Sueldo</label>
                <input type="text" class="formulario__input" name="" id="" placeholder="N/A" disabled>
                <label class="formulario__label2">Status</label>
                <input type="text" class="formulario__input" name="" id="" placeholder="<?php echo $status2 ?>" disabled>

                <?php
                } ?>
                <?php }}} ?>
                <div class="container-inputs" id="grupo__password">
                    <label class="formulario__label2" for="password">Cambio de Contraseña</label>
                    <div class="form__inputs">
                        <input type="password" class="formulario__input" name="password" id="password" class="password"
                            placeholder="Introduzca su nueva contraseña...">
                        <i class="icon-close-outline form__validacion-estado"></i>
                    </div>
                    <p class="form__validacion-error">Su contraseña debe poseer de 4 a 16 caracteres.</p>
                </div>

                <input type="hidden" name="cedula" id="cedula" value="<?php echo $cedula ?>">
                <button type="submit" name="login" id="login" type="button" value="Enviar" class="formulario__btn">Enviar</button>
                </form>
        </div>
       <?php  } ?>
        


  

        <!-- NO METAS MAS ITEMS AQUI -->
    </section>

    <section class="modal">
    <div class="modal__container">
        <div class="avatar__selection">
            <form action="cambiarfoto.php" method="post" autocomplete="off" enctype="multipart/form-data">
            <img class="pic" src="img/perfil/1.png" alt="" srcset="">
            <input type="radio" name="foto" value="1">
            <img class="pic" src="img/perfil/2.png" alt="" srcset="">
            <input type="radio" name="foto" value="2">
            <img class="pic" src="img/perfil/3.png" alt="" srcset="">
            <input type="radio" name="foto" value="3">
            <img class="pic" src="img/perfil/4.png" alt="" srcset="">
            <input type="radio" name="foto" value="4">
            <img class="pic" src="img/perfil/5.png" alt="" srcset="">
            <input type="radio" name="foto" value="5">
            <img class="pic" src="img/perfil/6.png" alt="" srcset="">
            <input type="radio" name="foto" value="6">
            <img class="pic" src="img/perfil/7.png" alt="" srcset="">
            <input type="radio" name="foto" value="7">
            <img class="pic" src="img/perfil/8.png" alt="" srcset="">
            <input type="radio" name="foto" value="8">
            <input type="hidden" name="cedula" id="cedula" value="<?php echo $cedula ?>">
            <button type="submit"  class="formulario__btn">Enviar</button>
        </form>

        </div>

            <a href="#" class="modal__close"><i class="fas fa-chevron-circle-left"></i> Regresar</a>

    </div>
  
        </div>
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
    <script src="js/modal.js"></script>
    <script src="js/validacionesFormularios/formularioperfilusuario.js"></script>
</body>

</html>