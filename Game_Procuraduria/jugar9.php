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
    <link rel="stylesheet" href="css/register_intranet.css">
        <link rel="stylesheet" href="css/estilo.css">
    
    <!-- Libraries Stylesheet -->
    <link href="lib/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/boxicons/css/boxicons.min.css" rel="stylesheet">


        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="img/favicon.svg">
</head>
<script>
  <?php 
  $ronda=$_POST['ronda']; 
  if ($ronda == 1) {
  ?>
  var audio = new Audio('sound/final.mp3');
      audio.play();
  <?php }elseif ($ronda == 2) {
  ?>
  var audio = new Audio('sound/final.mp3');
      audio.play();
  <?php }elseif ($ronda == 3) {
  ?>
  var audio = new Audio('sound/final.mp3');
      audio.play();
  <?php }elseif ($ronda == 4) {
  ?>
  var audio = new Audio('sound/final.mp3');
      audio.play();
  <?php }elseif ($ronda == 5) {
  ?>
  var audio = new Audio('sound/final.mp3');
      audio.play();
  <?php } ?>
      
    </script>
<body>
  
        <!-- Sidebar Start -->
        
        <?php require('./layout/sidebar.php') ?>
                <?php require('./layout/background.php') ?>

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
        <?php if ($cedula == 18237190) {
        ?>
        <div class="text animated wow fadeInRight">Bienvenido Presentador!</div>
        <?php }else{ 
        ?>
        <div class="text animated wow fadeInRight">Bienvenido <?php echo $nombres ?>!</div>
        <?php } ?>  
        <a href="jugar.php" class="button_back"><i class='bx bx-undo'></i>Seguir Jugando</a>
        <div class="animated wow fadeIn">
            <div class="top"> 
                <?php 
            $equipo=$_POST['equipo'];
            $ronda=$_POST['ronda'];
            $idanterior=$_POST['idanterior'];
                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $modificacion = ("UPDATE pregunta SET status = 'Preguntada' WHERE id = '$idanterior' ");
                        $ejecutar=mysqli_query($conexion,"SET CHARACTER SET 'utf8'");
                        $ejecutar=mysqli_query($conexion,$modificacion);

?>

<div class="contenido">
          <div class="container-juego" id="container-juego">
        <header class="header">
            <div class="categoria">
            <h1>Resultados Finales de la Ronda #<?php echo $ronda ?> del Equipo: <?php echo $equipo ?></h1>
            </div>
        </header>
            <table id="myTable" class="display nowrap" style="width: 100%;">
                <thead>
                    <tr>
                        <th>Equipo</th>
                        <th>Ronda</th>
                        <th>Correctas</th>
                        <th>Inorrectas</th>
    
                    </tr>
                </thead>
                <tbody class="table_body">
                <?php 
                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql="SELECT * FROM estadisticas WHERE equipo ='$equipo' AND ronda='$ronda'";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $correctas = round(($mostrar['correctas']/7)*100);
                            
                        ?>
                    <tr>
                        <td><?php echo $mostrar['equipo']; ?></td>
                        <td><?php echo $mostrar['ronda']; ?></td>
                        <td><?php echo $mostrar['correctas']; ?></td>
                        <td><?php echo $mostrar['incorrectas']; ?></td>
    
                    <?php } ?>
    
                    </tr>
                </tbody>
            </table>
            
            <div class="score">
                <div class="box">
                    <div class="chart" data-percent="<?php echo $correctas; ?>">
                       <?php echo $correctas; ?>%
                    </div>
                    <h2>SCORE</h2>
                </div>
            </div>


            </div>

        <!-- NO METAS MAS ITEMS AQUI -->
    </section>












        <!-- Content End -->

        <!-- Script Start -->

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js" charset="utf-8"></script>

    <!-- Javascript -->
    <script src="js/main.js"></script>
    <script src="juego.js"></script>


</body>

</html>