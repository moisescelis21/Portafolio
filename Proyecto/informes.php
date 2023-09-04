<?php
session_start();
$privilegio = $_SESSION["privilegio"];
if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'index.php';</script>";
  }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <link rel="stylesheet" href="icons/iconpack2/style.css">
    <link rel="stylesheet" href="icons/boxicons-master/css/boxicons.min.css">
    
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/tablastyle.css">

    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />

    <script type="text/javascript" src="DataTables/datatables.min.js"></script>

    <link rel="stylesheet" href="datatables/Responsive-2.2.9/css/responsive.foundation.min.css">
    <script src="datatables/Responsive-2.2.9/js/responsive.foundation.min.js"></script>



</head>

<body>

    <!-- BARRA LATERAL -->

    <?php require('./layout/sidebar.php') ?>

    <!-- CONTENIDO -->

    <div class="container1">

        <!-- BARRA DE NAVEGACIÓN -->

        <?php require('./layout/header.php') ?>

        <!-- CONTENEDOR DE TABLA -->

        <div class="container__section">

            <header class="header-tab">
                <h2>Informes Tecnicos</h2>
            </header>
            <div class="container__section-table">

                <!-- Añadir Registro -->
                <div class="datatable-header">
                    <div class="tools">
                        <ul>
                            <li>
                                <?php
                                if ($privilegio == 1) {
                                ?>
                                <a href="informesadd.php"><button><i class="icon-add-outline"></i></button></a>
                                <?php
                                }
                                ?>
                                

                            </li>
                        </ul>
                    </div>
                </div>

                <!-- TABLA DE DATOS -->

                <table id="myTable" class="table is- striped hover datatable" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Direccion</th>
                            <th>Problema</th>
                            <th>Equipo</th>
                            <th>Accion</th>
                            <th>Observacion</th>
                            <th>Estatus</th>
                            <th>Fecha</th>
                            <?php
                                if ($privilegio == 1) {
                                ?>
                                <th>Opciones</th>
                                
                                <?php
                                }else{
                                ?>
                                  <th>Opción</th>
                                <?php
                                }
                                ?>


                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $conexion=mysqli_connect('localhost','root','','proyecto');
                        $sql="SELECT * FROM reportec";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $cedula = $mostrar['cedula'];
                            
                        ?>
                        <tr>
                            <td><?php echo $mostrar['direccion'] ?></td>
                            <td><?php echo $mostrar['problema'] ?></td>
                            <td><?php echo $mostrar['equipo'] ?></td>
                            <td><?php echo $mostrar['accion'] ?></td>
                            <td><?php echo $mostrar['observacion'] ?></td>
                            <td><?php echo $mostrar['estatus'] ?></td>
                            <td><?php echo date("d/m/Y", strtotime($mostrar['fecha'])); ?></td>
                            <?php
                                if ($privilegio == 1) {
                                ?>
                            <td>
                                <?php echo"<a target='_blank' href='pdf/crearPdf.php?id=$id&cedula=$cedula'><i class='pdfview bx bxs-file-pdf'></i></a>";?>
                                <?php echo"<a onclick='verificar()' class=''><i class='drop bx bx-window-close'></i></a>";?>
                            </td>

                            <script type="text/javascript">
                                function verificar() {      
                                var opcion = confirm("¿Estas seguro que desea borrar este registro?");
                                if (opcion) {
                                    <?php echo "window.location= 'informesdelete.php?id=$id'"; ?>
                                }
                                }
                            </script>
                                <?php
                                }else{
                                ?>
                                  <td><?php echo"<a target='_blank' href='pdf/crearPdf.php?id=$id&cedula=$cedula'><i class='pdfview bx bxs-file-pdf'></i></a>";?></td>
                                <?php
                                }
                                ?>
                            
                        </tr>
                        <?php
                            }  
                        ?>
                    </tbody>

                </table>



            </div>
        </div>
    </div>

    <script src="js/inicio2.js"></script>
    <script src="js/main.js"></script>
</body>

</html>