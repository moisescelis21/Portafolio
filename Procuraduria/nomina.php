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
  if ($roles == 2 OR $roles == 3 OR $roles == 6 OR $roles == 8) {
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
    <link rel="stylesheet" href="css/sidebar-1.css">
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
              <h1>Nominas</h1>
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
                                                            <a data-tooltip="Agregar Nuevo" href="nomina2.php" style="text-decoration: none;"><button  class="buttontable" role="button"><i class='bx bxs-plus-square' style="font-size: 20px;"></i></button></a>


                            
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                <thead>
                    <tr>
                        <th>Correlativo</th>
                        <th>Periodo</th>
                        <th>Fecha</th>
                        <th>Realizado</th>
                        <th>Tipo de Nomina</th>
                        <th>Tipo de Personal</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody class="table_body">
                <?php 
                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql="SELECT * FROM nominas";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $correlativo = $mostrar['correlativo'];
                            $periodo = $mostrar['periodo'];
                            $mes = date("m", strtotime($periodo));
                            $ano = date("Y", strtotime($periodo));
                            $meses = array("ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBRE");
                            $mes3 = $meses[$mes-1];
                            $tiponomina = $mostrar['tiponomina'];
                           
                        ?>
                         
                    <tr>
                        <?php if ($tiponomina == "Nomina"){ ?>
                        <td><?php echo $mostrar['correlativo']; ?></td>
                        <td><?php echo $mostrar['periodo']; ?></td>
                        <td><?php echo $mes3; ?></td>
                        <td><?php echo $mostrar['realizado']; ?></td>
                        <td><?php echo $mostrar['tiponomina']; ?></td>
                        <td><?php echo $mostrar['personal']; ?></td>
                       
                            <?php if ($periodo == "15-$mes-$ano"){ ?>
                        <td>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="nominapersonal.php?correlativo=<?php echo $correlativo ?>">Agregar Personal</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="listadomontos2.php?correlativo=<?php echo $correlativo ?>">Listado de Nominas</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="listadoformulas2.php?correlativo=<?php echo $correlativo ?>">Listado de Formulas de nomina</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="partidaspresu2.php?correlativo=<?php echo $correlativo ?>">Partidas Presupuestarias</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="nominatotal2.php?correlativo=<?php echo $correlativo ?>">Nomina Total 1</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="nominatotal4.php?correlativo=<?php echo $correlativo ?>">Nomina Total 2</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="genrecibos.php?correlativo=<?php echo $correlativo ?>">Generar Recibos de Pagos</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="txt.php?correlativo=<?php echo $correlativo ?>">Generar TXT</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="descargartxt2.php?correlativo=<?php echo $correlativo ?>">Descargar TXT</a></button>
                            <?php echo "<button  class='buttontable delete' role='button'><a href='nominadelete.php?correlativo=$correlativo' class=''><i class='bx bx-trash'></i></button>"; ?>
                        </td>
                            <?php }else{ ?>
                            <td>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="nominapersonal.php?correlativo=<?php echo $correlativo ?>">Agregar Personal</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="listadomontos2.php?correlativo=<?php echo $correlativo ?>">Listado de Nominas</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="listadoformulas2.php?correlativo=<?php echo $correlativo ?>">Listado de Formulas de nomina</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="partidaspresu2.php?correlativo=<?php echo $correlativo ?>">Partidas Presupuestarias</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="nominatotal2.php?correlativo=<?php echo $correlativo ?>">Nomina Total 1</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="nominatotal4.php?correlativo=<?php echo $correlativo ?>">Nomina Total 2</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="nominapensionados2.php?correlativo=<?php echo $correlativo ?>">Nomina Pensionados</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="genrecibos.php?correlativo=<?php echo $correlativo ?>">Generar Recibos de Pagos</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="txt.php?correlativo=<?php echo $correlativo ?>">Generar TXT</a></button>
                             <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="descargartxt2.php?correlativo=<?php echo $correlativo ?>">Descargar TXT</a></button>
                            <?php echo "<button  class='buttontable delete' role='button'><a href='nominadelete.php?correlativo=$correlativo' class=''><i class='bx bx-trash'></i></button>"; ?>
                        </td>


                    <?php } ?>
                   
       <?php }elseif($tiponomina == "CestaTicket"){
        ?>
        <td><?php echo $mostrar['correlativo']; ?></td>
        <td><?php echo $mostrar['periodo']; ?></td>
        <td><?php echo $mes3; ?></td>
        <td><?php echo $mostrar['realizado']; ?></td>
        <td><?php echo $mostrar['tiponomina']; ?></td>
        <td><?php echo $mostrar['personal']; ?></td>
        <td>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="nominapersonal.php?correlativo=<?php echo $correlativo ?>">Agregar Personal</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="nominacestat2.php?correlativo=<?php echo $correlativo ?>">Nomina CestaTicket</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="bonocestat2.php?correlativo=<?php echo $correlativo ?>">Bono CestaTicket</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="txt3.php?correlativo=<?php echo $correlativo ?>">Generar TXT</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="descargartxt4.php?correlativo=<?php echo $correlativo ?>">Descargar TXT</a></button>
                            <?php echo "<button  class='buttontable delete' role='button'><a href='nominadelete.php?correlativo=$correlativo' class=''><i class='bx bx-trash'></i></button>"; ?>
                        </td>


       <?php }elseif($tiponomina == "Compensacion"){
        ?>
        <td><?php echo $mostrar['correlativo']; ?></td>
        <td><?php echo $mostrar['periodo']; ?></td>
        <td><?php echo $mes3; ?></td>
        <td><?php echo $mostrar['realizado']; ?></td>
        <td><?php echo $mostrar['tiponomina']; ?></td>
        <td><?php echo $mostrar['personal']; ?></td>
        <td>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="nominapersonal.php?correlativo=<?php echo $correlativo ?>">Agregar Personal</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="nominacompensacion2.php?correlativo=<?php echo $correlativo ?>">Nomina Compensacion</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="txt5.php?correlativo=<?php echo $correlativo ?>">Generar TXT</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="descargartxt6.php?correlativo=<?php echo $correlativo ?>">Descargar TXT</a></button>
                            <?php echo "<button  class='buttontable delete' role='button'><a href='nominadelete.php?correlativo=$correlativo' class=''><i class='bx bx-trash'></i></button>"; ?>
                        </td>



    <?php }elseif($tiponomina == "Vacaciones"){
        ?>
        <td><?php echo $mostrar['correlativo']; ?></td>
        <td><?php echo $mostrar['periodo']; ?></td>
        <td><?php echo $mes3; ?></td>
        <td><?php echo $mostrar['realizado']; ?></td>
        <td><?php echo $mostrar['tiponomina']; ?></td>
        <td><?php echo $mostrar['personal']; ?></td>
        <td>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="nominapersonal2.php?correlativo=<?php echo $correlativo ?>">Agregar Personal</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="vacaciones2.php?correlativo=<?php echo $correlativo ?>">Liquidacion de Vacaciones</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="fechas.php?correlativo=<?php echo $correlativo ?>">Fechas de Vacaciones</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="txt7.php?correlativo=<?php echo $correlativo ?>">Generar TXT</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="descargartxt8.php?correlativo=<?php echo $correlativo ?>">Descargar TXT</a></button>
                            <?php echo "<button  class='buttontable delete' role='button'><a href='nominadelete.php?correlativo=$correlativo' class=''><i class='bx bx-trash'></i></button>"; ?>
                        </td>



    <?php }elseif($tiponomina == "Cumpleaños"){
        ?>
        <td><?php echo $mostrar['correlativo']; ?></td>
        <td><?php echo $mostrar['periodo']; ?></td>
        <td><?php echo $mes3; ?></td>
        <td><?php echo $mostrar['realizado']; ?></td>
        <td><?php echo $mostrar['tiponomina']; ?></td>
        <td><?php echo $mostrar['personal']; ?></td>
        <td>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="nominapersonal2.php?correlativo=<?php echo $correlativo ?>">Agregar Personal</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="nominacumpleaños2.php?correlativo=<?php echo $correlativo ?>">Nomina Cumpleaños</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="txt9.php?correlativo=<?php echo $correlativo ?>">Generar TXT</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="descargartxt10.php?correlativo=<?php echo $correlativo ?>">Descargar TXT</a></button>
                            <?php echo "<button  class='buttontable delete' role='button'><a href='nominadelete.php?correlativo=$correlativo' class=''><i class='bx bx-trash'></i></button>"; ?>
                        </td>



    <?php }elseif($tiponomina == "Contratados"){
        ?>
        <td><?php echo $mostrar['correlativo']; ?></td>
        <td><?php echo $mostrar['periodo']; ?></td>
        <td><?php echo $mes3; ?></td>
        <td><?php echo $mostrar['realizado']; ?></td>
        <td><?php echo $mostrar['tiponomina']; ?></td>
        <td><?php echo $mostrar['personal']; ?></td>
        <td>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="nominapersonal2.php?correlativo=<?php echo $correlativo ?>">Agregar Personal</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="nominacontratados2.php?correlativo=<?php echo $correlativo ?>">Nomina Contratados</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="txt11.php?correlativo=<?php echo $correlativo ?>">Generar TXT</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="descargartxt12.php?correlativo=<?php echo $correlativo ?>">Descargar TXT</a></button>
                            <?php echo "<button  class='buttontable delete' role='button'><a href='nominadelete.php?correlativo=$correlativo' class=''><i class='bx bx-trash'></i></button>"; ?>
                        </td>



    <?php }elseif($tiponomina == "Liquidacion"){
        ?>
        <td><?php echo $mostrar['correlativo']; ?></td>
        <td><?php echo $mostrar['periodo']; ?></td>
        <td><?php echo $mes3; ?></td>
        <td><?php echo $mostrar['realizado']; ?></td>
        <td><?php echo $mostrar['tiponomina']; ?></td>
        <td><?php echo $mostrar['personal']; ?></td>
        <td>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="nominapersonal2.php?correlativo=<?php echo $correlativo ?>">Agregar Personal</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="nominaliquidacion2.php?correlativo=<?php echo $correlativo ?>">Nomina Liquidacion</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="txt13.php?correlativo=<?php echo $correlativo ?>">Generar TXT</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="descargartxt14.php?correlativo=<?php echo $correlativo ?>">Descargar TXT</a></button>
                            <?php echo "<button  class='buttontable delete' role='button'><a href='nominadelete.php?correlativo=$correlativo' class=''><i class='bx bx-trash'></i></button>"; ?>
                        </td>



    <?php }elseif($tiponomina == "Bono Especial"){
        ?>
        <td><?php echo $mostrar['correlativo']; ?></td>
        <td><?php echo $mostrar['periodo']; ?></td>
        <td><?php echo $mes3; ?></td>
        <td><?php echo $mostrar['realizado']; ?></td>
        <td><?php echo $mostrar['tiponomina']; ?></td>
        <td><?php echo $mostrar['personal']; ?></td>
        <td>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="nominapersonal3.php?correlativo=<?php echo $correlativo ?>">Agregar Personal</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="nominabonoespecial2.php?correlativo=<?php echo $correlativo ?>">Nomina Bono Especial</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="txt15.php?correlativo=<?php echo $correlativo ?>">Generar TXT</a></button>
                            <button  class='buttontable edit' role='button'><a style="text-decoration: none" href="descargartxt16.php?correlativo=<?php echo $correlativo ?>">Descargar TXT</a></button>
                            <?php echo "<button  class='buttontable delete' role='button'><a href='nominadelete.php?correlativo=$correlativo' class=''><i class='bx bx-trash'></i></button>"; ?>
                        </td>



    <?php } ?>
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