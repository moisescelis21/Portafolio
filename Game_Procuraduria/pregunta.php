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

    <!-- <link rel="stylesheet" href="css/tablastyle.css"> -->
    
    <!-- Libraries Stylesheet -->
    <link href="lib/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/boxicons/css/boxicons.min.css" rel="stylesheet">

    <script src="lib/datatables/datatables.js"></script>
    <link href="lib/datatables/DataTables-1.11.3/css/dataTables.jqueryui.min.css" rel="stylesheet">

    
    <link rel="stylesheet" href="lib/datatables/Responsive-2.2.9/css/responsive.foundation.min.css">
    <script src="lib/datatables/Responsive-2.2.9/js/responsive.foundation.min.js"></script>

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="img/favicon.svg">
</head>
<body>
  
        <!-- Sidebar Start -->
        
        <?php require('./layout/sidebar.php') ?>
                <?php require('./layout/background.php') ?>

        <!-- Sidebar End -->

        <!-- Content Start -->
    <section class="home">
        <?php 
                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql="SELECT * FROM trabajadores WHERE cedula=18237190";
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
        <a href="javascript: history.go(-1)" class="button_back"><i class='bx bx-undo'></i>Regresar</a>

        <div class="animated wow fadeIn">
            <div class="top"> 
            </div>
            <div class="space">
            </div>
            <div class="contenido">
          <div class="container-juego" id="container-juego">
        <header class="header">
            <div class="categoria">
            <h1>Preguntas</h1>
            </div>
            <div class="data_table" style="font-size: 15px;">
               <table id="myTable" class="display nowrap" style="width: 100%; ">
                                            <!-- Añadir Registro -->
                                            <div class="datatable-header" style="margin-top: -3%;">
                                                <div class="tools">
                                                    <ul>
                                                        <li>
                                                            <a data-tooltip="Agregar Nuevo" href="preguntasadd.php" style="text-decoration: none;"><button  class="buttontable" role="button"><i class='bx bxs-plus-square' style="font-size: 20px;"></i></button></a>


                            
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                <thead style="background: none;">
                    <tr>
                        <th>Pregunta</th>
                        <th>Respuesta #1</th>
                        <th>Respuesta #2</th>
                        <th>Respuesta #3</th>
                        <th>Respuesta #4</th>
                        <th>Respuesta Correcta</th>
                        <th>Acción</th>
    
                    </tr>
                </thead>
                <tbody class="table_body">
        <?php 
                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql="SELECT * FROM pregunta";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $pregunta = $mostrar['pregunta'];
                            $respuesta1 = $mostrar['respuesta1'];
                            $respuesta2 = $mostrar['respuesta2'];
                            $respuesta3 = $mostrar['respuesta3'];
                            $respuesta4 = $mostrar['respuesta4'];
                            $respuestacorrecta = $mostrar['respuestacorrecta'];

                            
                        ?>

                    <tr style="background: none;">
                        <td style="background: none;"><?php echo $pregunta; ?></td>
                        <td><?php echo $respuesta1; ?></td>
                        <td><?php echo $respuesta2; ?></td>
                        <td><?php echo $respuesta3; ?></td>
                        <td><?php echo $respuesta4; ?></td>
                        <td><?php echo $respuestacorrecta; ?></td>
                        <td><p onclick="window.location= 'preguntaedit.php';">Editar</p> <p  onclick="window.location= 'preguntadelete.php';">Eliminar</p></td>
    
                    <?php } ?>
                    </tr>
                </tbody>
            </table>
            </div>
            </div>
            <!-- METE ITEMS AQUI -->
                <!-- TABLA DE DATOS -->


        </div>

        <!-- NO METAS MAS ITEMS AQUI -->
    </section>


        <!-- Content End -->

        <!-- Script Start -->
    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
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

    <!-- Javascript Datatables -->
    <script type="text/javascript" src="lib/datatables/Scroller-2.0.7/js/dataTables.scroller.min.js"></script>
    <script src="js/table.js"></script>
    <script src="lib/datatables/jQuery-3.6.0/jquery-3.6.0.js"></script>
    <script src="lib/datatables/DataTables-1.11.3/js/jquery.dataTables.min.js"></script>

</body>

</html>