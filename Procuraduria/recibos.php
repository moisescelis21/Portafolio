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
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/tablastyle.css">
    
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

        <div class="container animated wow fadeIn">
            <div class="top"> 
              <h1>Recibo de Pagos</h1>
            </div>
            <div class="space">
            </div>

            <div class="data_table">
               <table id="myTable" class="display nowrap" style="width: 100%;">

                <thead>
                    <tr>
                        <th>Cedula</th>
                        <th>Periodo</th>
                        <th>Total a Cobrar</th>
                        <th>Acciones</th>
    
                    </tr>
                </thead>
                <?php if ($cedula == 000000000) {
                ?>
                <tbody class="table_body">
                <?php 
                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql="SELECT * FROM recibos";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $correlativo = $mostrar['correlativo'];
                            $cedula2 = $mostrar['cedula'];
                        $sql4="SELECT * FROM nominas WHERE correlativo='$correlativo'";
                        $result4=mysqli_query($conexion,$sql4);

                        while($mostrar4=mysqli_fetch_array($result4)){

                         
                            
                        ?>
                    <tr>
                        <td><?php echo $mostrar['cedula']; ?></td>
                        <td><?php echo $mostrar4['periodo']; ?></td>
                        <td><?php echo $mostrar['totalcobra']; ?></td>
                        <td>
                            <?php echo "<button  class='buttontable delete' role='button'><a onclick='verificar()' class=''><i class='bx bx-trash'></i></button>"; ?>
                            <?php echo "<button  class='buttontable pdf' role='button'><a target='_blank' href='recibo.php?cedula=$cedula2&correlativo=$correlativo' class=''><i class='bx bxs-file-pdf'></i></button>"; ?>
                        </td>
    
                    <?php }} ?>
                    </tr>
                </tbody>

                <?php }else{ ?>
                <tbody class="table_body" style="text-align: center;">
                <?php 

                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql2="SELECT * FROM recibos WHERE cedula='$cedula'";
                        $result2=mysqli_query($conexion,$sql2);

                        while($mostrar2=mysqli_fetch_array($result2)){
                            $id = $mostrar2['id'];
                            $correlativo = $mostrar2['correlativo'];
                            $cedula2 = $mostrar2['cedula'];

                        $sql3="SELECT * FROM nominas WHERE correlativo='$correlativo'";
                        $result3=mysqli_query($conexion,$sql3);

                        while($mostrar3=mysqli_fetch_array($result3)){

                         
                            
                        ?>
                    <tr>
                        <td><?php echo $mostrar2['cedula']; ?></td>
                        <td><?php echo $mostrar3['periodo'];  ?></td>
                        <td><?php echo $mostrar2['totalcobra']; ?></td>
                        <td>
                            <?php echo "<button  class='buttontable pdf' role='button'><a target='_blank' href='recibo.php?cedula=$cedula2&correlativo=$correlativo' class=''><i class='bx bxs-file-pdf'></i></button>"; ?>
                        </td>
    
                    <?php }}}    ?>
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

    <!-- Javascript Datatables -->
    <script type="text/javascript" src="libs/datatables/Scroller-2.0.7/js/dataTables.scroller.min.js"></script>
    <script src="js/table.js"></script>
    <script src="lib/datatables/jQuery-3.6.0/jquery-3.6.0.js"></script>
    <script src="lib/datatables/DataTables-1.11.3/js/jquery.dataTables.min.js"></script>

</body>

</html>
<?php } ?>