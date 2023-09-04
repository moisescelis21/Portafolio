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
  var audio = new Audio('sound/ganador.mp3');
      audio.play();
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
        <a href="resultados.php" class="button_back"><i class='bx bx-undo'></i>Ver Otros Resultados</a>
        <div class="animated wow fadeIn">
            <div class="top"> 
            <?php 
            $ronda=$_POST['ronda'];
            ?>
            <?php if ($ronda != "Ganador") {
            ?>
            <div class="contenido">
          <div class="container-juego" id="container-juego">
        <header class="header">
            <div class="categoria">
            <h1>Resultados Finales de la ronda <?php echo $ronda; ?></h1>
            </div>
        </header>
            <table id="myTable" class="display nowrap" style="width: 100%;">
                
            
                <?php 
                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql="SELECT * FROM estadisticas WHERE ronda='$ronda'";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $equipo = $mostrar['equipo'];
                            if ($equipo == "A") {
                                $equipoA = $mostrar['equipo'];
                                $rondaA = $mostrar['ronda'];
                                $correctasA  = $mostrar['correctas'];
                                $incorrectasA =  $mostrar['incorrectas'];
                                $porcentajeA = round(($mostrar['correctas']/7)*100);
                            }
                            if ($equipo == "B") {
                                $equipoB = $mostrar['equipo'];
                                $rondaB = $mostrar['ronda'];
                                $correctasB  = $mostrar['correctas'];
                                $incorrectasB = $mostrar['incorrectas'];
                                $porcentajeB = round(($mostrar['correctas']/7)*100);
                            }
                            if ($equipo == "C") {
                                $equipoC = $mostrar['equipo'];
                                $rondaC = $mostrar['ronda'];
                                $correctasC  = $mostrar['correctas'];
                                $incorrectasC = $mostrar['incorrectas'];
                                $porcentajeC = round(($mostrar['correctas']/7)*100);

                            }
                            
                        ?>
                        <?php } ?>
                    <tr>
                        <th>Equipo</th>
                        <th>Equipo</th>
                        <th>Equipo</th>
                    </tr>
                    <tr>
                        <td><?php echo $equipoA; ?></td>
                        <td><?php echo $equipoB; ?></td>
                        <td><?php echo $equipoC; ?></td> 
                    </tr>
                    <tr>
                        <th>Correctas</th>
                        <th>Correctas</th>
                        <th>Correctas</th>
                    </tr>
                     <tr>
                        <td><?php echo $correctasA; ?></td>
                        <td><?php echo $correctasB; ?></td>
                        <td><?php echo $correctasC; ?></td> 
                    </tr>
                    <tr>
                        <th>Incorrectas</th>
                        <th>Incorrectas</th>
                        <th>Incorrectas</th>
                    </tr>
                    <tr>
                        <td><?php echo $incorrectasA; ?></td>
                        <td><?php echo $incorrectasB; ?></td>
                        <td><?php echo $incorrectasC; ?></td> 
                    </tr>
                    <tr>
                        <th>Porcentaje</th>
                        <th>Porcentaje</th>
                        <th>Porcentaje</th>
                    </tr>
                    <tr>
                        <td>
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $porcentajeA; ?>">
                            <?php echo $porcentajeA; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                        <td>
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $porcentajeB; ?>">
                            <?php echo $porcentajeB; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                        <td>
                            <div class="score">
                            <div class="box">
                            <div class="chart" id="chart" data-percent="<?php echo $porcentajeC; ?>">
                            <?php echo $porcentajeC; ?>%
                            </div>
                        </div>
                    </div>
                        </td> 
                    </tr>


    
                    
    
                    

            </table>



            <?php }else{
            ?>
<div class="contenido">
          <div class="container-juego" id="container-juego">
        <header class="header">
            <div class="categoria">
            <h1>Ganador del juego</h1>
            </div>
        </header>                <?php 
                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql="SELECT * FROM estadisticas";
                        $result=mysqli_query($conexion,$sql);
                        $correctatotales1 = 0;
                        $correctatotales2 = 0;
                        $correctatotales3 = 0;

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $equipo = $mostrar['equipo'];

                            if ($equipo == "A") {
                                $correctatotales1 = $correctatotales1 + $mostrar['correctas'];
                                $correctatotalesporcen1 = round(($correctatotales1/21)*100);

                            }
                            if ($equipo == "B") {
                                $correctatotales2 = $correctatotales2 + $mostrar['correctas'];
                                $correctatotalesporcen2 = round(($correctatotales2/21)*100);
                            }
                            if ($equipo == "C") {
                                $correctatotales3 = $correctatotales3 + $mostrar['correctas'];
                                $correctatotalesporcen3 = round(($correctatotales3/21)*100);
                            }
                            
                        ?>
   <?php } ?>            
    <table id="myTable" class="display nowrap" style="width: 100%;">   

                    <tr>
                        <?php if ($correctatotales1 > $correctatotales2 AND $correctatotales1 > $correctatotales3 AND $correctatotales2 > $correctatotales3) {
                        ?>
                        <thead>
                    <tr>
                        <th style="color: green;">Equipo</th>
                        <th style="color: yellow;">Equipo</th>
                        <th style="color: red;">Equipo</th>
    
                    </tr>
                    <tr>
                        <th style="color: green;">A</th>
                        <th style="color: yellow;">B</th>
                        <th style="color: red;">C</th>
    
                    </tr>
                </thead>
                <tbody class="table_body"> 
                <tr> 
                        <td style="color: green;"><?php echo $correctatotales1 ?></td>
                        <td style="color: yellow;"><?php echo $correctatotales2 ?></td>
                        <td style="color: red;"><?php echo $correctatotales3 ?></td>
                        </td>
                </tr>
                <tr>
                        <td style="color: green;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen1; ?>">
                            <?php echo $correctatotalesporcen1; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                        <td style="color: yellow;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen2; ?>">
                            <?php echo $correctatotalesporcen2; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                        <td style="color: red;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen3; ?>">
                            <?php echo $correctatotalesporcen3; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                       
                        
                    </tr>
                    <?php }elseif ($correctatotales1 > $correctatotales2 AND $correctatotales1 > $correctatotales3 AND $correctatotales3 > $correctatotales2) {
                        ?>
                        <thead>
                    <tr>
                        <th style="color: green;">Equipo</th>
                        <th style="color: yellow;">Equipo</th>
                        <th style="color: red;">Equipo</th>
    
                    </tr>
                    <tr>
                        <th style="color: green;">A</th>
                        <th style="color: yellow;">C</th>
                        <th style="color: red;">B</th>
    
                    </tr>
                </thead>
                <tbody class="table_body"> 
                <tr> 
                        <td style="color: green;"><?php echo $correctatotales1 ?></td>
                        <td style="color: yellow;"><?php echo $correctatotales3 ?></td>
                        <td style="color: red;"><?php echo $correctatotales2 ?></td>
                        </td>
                </tr>
                <tr>
                        <td style="color: green;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen1; ?>">
                            <?php echo $correctatotalesporcen1; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                        <td style="color: yellow;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen3; ?>">
                            <?php echo $correctatotalesporcen3; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                        <td style="color: red;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen2; ?>">
                            <?php echo $correctatotalesporcen2; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                       
                        
                    </tr>
                       <?php }elseif ($correctatotales2 > $correctatotales1 AND $correctatotales2 > $correctatotales3 AND $correctatotales1 > $correctatotales3) { ?>
                         <thead>
                    <tr>
                        <th style="color: green;">Equipo</th>
                        <th style="color: yellow;">Equipo</th>
                        <th style="color: red;">Equipo</th>
    
                    </tr>
                    <tr>
                        <th style="color: green;">B</th>
                        <th style="color: yellow;">A</th>
                        <th style="color: red;">C</th>
                        
    
                    </tr>
                </thead>
                <tbody class="table_body">  
                    <tr>
                        <td style="color: green;"><?php echo $correctatotales2 ?></td>
                        <td style="color: yellow;"><?php echo $correctatotales1 ?></td>
                        <td style="color: red;"><?php echo $correctatotales3 ?></td>
                        
                    </tr>
                    <tr>
                        <td style="color: green;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen2; ?>">
                            <?php echo $correctatotalesporcen2; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                        <td style="color: yellow;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen1; ?>">
                            <?php echo $correctatotalesporcen1; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                        <td style="color: red;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen3; ?>">
                            <?php echo $correctatotalesporcen3; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                       
                        
                    </tr>


                        <?php
                    } elseif ($correctatotales2 > $correctatotales1 AND $correctatotales2 > $correctatotales3 AND $correctatotales3 > $correctatotales1) { ?>
                        <thead>
                    <tr>
                        <th style="color: green;">Equipo</th>
                        <th style="color: yellow;">Equipo</th>
                        <th style="color: red;">Equipo</th>
    
                    </tr>
                    <tr>
                        <th style="color: green;">B</th>
                        <th style="color: yellow;">C</th>
                        <th style="color: red;">A</th>
    
                    </tr>
                </thead>
                <tbody class="table_body">  
                    <tr>
                        <td style="color: green;"><?php echo $correctatotales2 ?></td>
                        <td style="color: yellow;"><?php echo $correctatotales3 ?></td>
                        <td style="color: red;"><?php echo $correctatotales1 ?></td>
                    </tr>
                    <tr>
                        <td style="color: green;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen2; ?>">
                            <?php echo $correctatotalesporcen2; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                        <td style="color: yellow;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen3; ?>">
                            <?php echo $correctatotalesporcen3; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                        <td style="color: red;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen1; ?>">
                            <?php echo $correctatotalesporcen1; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                       
                        
                    </tr>

                       <?php}elseif ($correctatotales3 > $correctatotales1 AND $correctatotales3 > $correctatotales2 AND $correctatotales1 > $correctatotales2) { ?>
                        <thead>
                    <tr>
                        <th style="color: green;">Equipo</th>
                        <th style="color: yellow;">Equipo</th>
                        <th style="color: red;">Equipo</th>
    
                    </tr>
                    <tr>
                        <th style="color: green;">C</th>
                        <th style="color: yellow;">A</th>
                        <th style="color: red;">B</th>
    
                    </tr>
                </thead>
                <tbody class="table_body">  
                    <tr>
                        <td style="color: green;"><?php echo $correctatotales3 ?></td>
                        <td style="color: yellow;"><?php echo $correctatotales1 ?></td>
                        <td style="color: red;"><?php echo $correctatotales12 ?></td>
                    </tr>
                    <tr>
                        <td style="color: green;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen3; ?>">
                            <?php echo $correctatotalesporcen3; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                        <td style="color: yellow;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen1; ?>">
                            <?php echo $correctatotalesporcen1; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                        <td style="color: red;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen2; ?>">
                            <?php echo $correctatotalesporcen2; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                       
                        
                    </tr>

                       <?php }elseif ($correctatotales3 > $correctatotales1 AND $correctatotales3 > $correctatotales2 AND $correctatotales2 > $correctatotales1) { ?>
                        <thead>
                    <tr>
                        <th style="color: green;">Equipo</th>
                        <th style="color: yellow;">Equipo</th>
                        <th style="color: red;">Equipo</th>
    
                    </tr>
                    <tr>
                        <th style="color: green;">C</th>
                        <th style="color: yellow;">B</th>
                        <th style="color: red;">A</th>
    
                    </tr>
                </thead>
                <tbody class="table_body">  
                <tr>
                        <td style="color: green;"><?php echo $correctatotales3 ?></td>
                        <td style="color: yellow;"><?php echo $correctatotales2 ?></td>
                        <td style="color: red;"><?php echo $correctatotales1 ?></td>
                      
                        
                    </tr>
                    <tr>
                        <td style="color: green;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen3; ?>">
                            <?php echo $correctatotalesporcen3; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                        <td style="color: yellow;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen2; ?>">
                            <?php echo $correctatotalesporcen2; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                        <td style="color: red;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen1; ?>">
                            <?php echo $correctatotalesporcen1; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                       
                        
                    </tr>
                    <?php }elseif ($correctatotales1 == $correctatotales2 AND $correctatotales2 == $correctatotales3 AND $correctatotales1 == $correctatotales3 ) { ?>
                        <thead>
                    <tr>
                        <th style="color: green;">Equipo</th>
                        <th style="color: green;">Equipo</th>
                        <th style="color: green;">Equipo</th>
    
                    </tr>
                    <tr>
                        <th style="color: green;">A</th>
                        <th style="color: green;">B</th>
                        <th style="color: green;">C</th>
    
                    </tr>
                </thead>
                <tbody class="table_body">  
                <tr>
                        <td style="color: green;"><?php echo $correctatotales1 ?></td>
                        <td style="color: green;"><?php echo $correctatotales2 ?></td>
                        <td style="color: green;"><?php echo $correctatotales3 ?></td>
                      
                        
                    </tr>
                    <tr>
                        <td style="color: green;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen1; ?>">
                            <?php echo $correctatotalesporcen1; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                        <td style="color: green;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen2; ?>">
                            <?php echo $correctatotalesporcen2; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                        <td style="color: green;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen3; ?>">
                            <?php echo $correctatotalesporcen3; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                       
                        
                    </tr>
                    <?php }elseif ($correctatotales3 == $correctatotales1 AND $correctatotales1 == $correctatotales3) { ?>
                        <thead>
                    <tr>
                        <th style="color: green;">Equipo</th>
                        <th style="color: red;">Equipo</th>
                        <th style="color: green;">Equipo</th>
    
                    </tr>
                    <tr>
                        <th style="color: green;">A</th>
                        <th style="color: red;">B</th>
                        <th style="color: green;">C</th>
    
                    </tr>
                </thead>
                <tbody class="table_body">  
                <tr>
                        <td style="color: green;"><?php echo $correctatotales1 ?></td>
                        <td style="color: red;"><?php echo $correctatotales2 ?></td>
                        <td style="color: green;"><?php echo $correctatotales3 ?></td>
                      
                        
                    </tr>
                    <tr>
                        <td style="color: green;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen1; ?>">
                            <?php echo $correctatotalesporcen1; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                        <td style="color: red;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen1; ?>">
                            <?php echo $correctatotalesporcen2; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                        <td style="color: green;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen1; ?>">
                            <?php echo $correctatotalesporcen3; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                       
                        
                    </tr>
                    <?php } elseif ($correctatotales2 == $correctatotales1 AND $correctatotales1 == $correctatotales2) { ?>
                        <thead>
                    <tr>
                        <th style="color: green;">Equipo</th>
                        <th style="color: green;">Equipo</th>
                        <th style="color: red;">Equipo</th>
    
                    </tr>
                    <tr>
                        <th style="color: green;">A</th>
                        <th style="color: green;">B</th>
                        <th style="color: red;">C</th>
    
                    </tr>
                </thead>
                <tbody class="table_body">  
                <tr>
                        <td style="color: green;"><?php echo $correctatotales1 ?></td>
                        <td style="color: green;"><?php echo $correctatotales2 ?></td>
                        <td style="color: red;"><?php echo $correctatotales3 ?></td>
                      
                        
                    </tr>
                    <tr>
                        <td style="color: green;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen1; ?>">
                            <?php echo $correctatotalesporcen1; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                        <td style="color: green;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen1; ?>">
                            <?php echo $correctatotalesporcen2; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                        <td style="color: red;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen1; ?>">
                            <?php echo $correctatotalesporcen3; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                       
                        
                    </tr>
                    <?php }elseif ($correctatotales2 == $correctatotales3 AND $correctatotales3 == $correctatotales2) { ?>

                        <thead>
                    <tr>
                        <th style="color: red;">Equipo</th>
                        <th style="color: green;">Equipo</th>
                        <th style="color: green;">Equipo</th>
    
                    </tr>
                    <tr>
                        <th style="color: red;">A</th>
                        <th style="color: green;">B</th>
                        <th style="color: green;">C</th>
    
                    </tr>
                </thead>
                <tbody class="table_body">  
                <tr>
                        <td style="color: red;"><?php echo $correctatotales1 ?></td>
                        <td style="color: green;"><?php echo $correctatotales2 ?></td>
                        <td style="color: green;"><?php echo $correctatotales3 ?></td>
                      
                        
                    </tr>
                    <tr>
                        <td style="color: red;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen1; ?>">
                            <?php echo $correctatotalesporcen1; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                        <td style="color: green;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen2; ?>">
                            <?php echo $correctatotalesporcen2; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                        <td style="color: green;">
                            <div class="score">
                            <div class="box">
                            <div class="chart" data-percent="<?php echo $correctatotalesporcen3; ?>">
                            <?php echo $correctatotalesporcen3; ?>%
                            </div>
                        </div>
                    </div>
                        </td>
                       
                        
                    </tr>
            <?php }  ?>
                </tbody>
            </table>




            <?php } ?>
            
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js" charset="utf-8"></script>s

    <!-- Javascript -->
    <script src="js/main.js"></script>
    <script src="juego.js"></script>


</body>

</html>