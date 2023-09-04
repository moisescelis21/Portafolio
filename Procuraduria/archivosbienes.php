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
    <meta charset="UTF-8">
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
        
        <?php $id14 = $_GET['id']; ?>
        <?php $id2 = $_GET['id2']; ?>
        <a href="parroquias.php?id=<?php echo $id2 ?>" class="button_back"><i class='bx bx-undo'></i>Regresar</a>
        <div class="container animated wow fadeIn">
            <div class="top"> 
              <h1>Listado de Referencias</h1>
            </div>
            <div class="space">
            </div>

            <div class="data_table">
               <table id="myTable" class="display nowrap" style="width: 100%;">
                                            <!-- Añadir Registro -->
                                            <div class="datatable-header" style="margin-top: -3%;">
                                                <div class="tools">
                                                    <ul>
                                                        <li>
                                                           
                                                            <a data-tooltip="Agregar Nuevo" href="archivosbienes2.php?id=<?php echo $id14 ?>&id2=<?php echo $id2 ?>" style="text-decoration: none;"><button  class="buttontable" role="button"><i class='bx bxs-plus-square' style="font-size: 20px;"></i></button></a>


                            
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                <thead>
                    <tr>
                        <th>COD</th>
                        <th>Localizacion</th>
                        <th>Municipio</th>
                        <th>Parroquia</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody class="table_body" style="text-align: center;">
                <?php 
                        $parroquia = "";
                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql2="SELECT * FROM parroquias WHERE id=$id14";
                        $result2=mysqli_query($conexion,$sql2);

                        while($mostrar2=mysqli_fetch_array($result2)){
                            $parroquia = $mostrar2['parroquia'];
                 }
                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql="SELECT * FROM referencias WHERE parroquia = '$parroquia'";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $archivo = $mostrar['archivo'];
                           
                            
                        ?>
                    <tr>
                        <td><?php echo $mostrar['COD']; ?></td>
                        <td><?php echo $mostrar['localizacion']; ?></td>
                        <td><?php echo $mostrar['municipio']; ?></td>
                        <td><?php echo $mostrar['parroquia']; ?></td>
                        <td>
                             <?php if ($privilegio == "1" OR $privilegio == "0") {
                            ?>
                            <?php echo "<button  class='buttontable edit' role='button'><a href='archivosbienesedit.php?id=$id&id2=$id2&id3=$id14' class=''><i class='bx bx-edit-alt'></i></button>"; ?>
                            <?php echo "<button  class='buttontable delete' role='button'><a href='archivosbienesdelete.php?id=$id&id2=$id2&id3=$id14' class=''><i class='bx bx-trash'></i></button>"; ?>
                            <?php echo "<button  class='buttontable edit' role='button'><a href='referencias/descarga.php?ubicacion=$archivo' class=''><i class='bx bxs-download'></i></button>"; ?>

                            
                        <?php }else{ ?>
                            <?php echo "<button  class='buttontable edit' role='button'><a href='archivosbienes.php?id=$id' class=''><i class='bx bx-refresh'></i></button>"; ?>
                            <?php echo "<button  class='buttontable edit' role='button'><a href='parroquiaedit.php?id=$id' class=''><i class='bx bx-edit-alt'></i></button>"; ?>

                        <?php } ?>

                        </td>
    
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