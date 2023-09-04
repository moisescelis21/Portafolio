<?php
session_start();

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
    <title>Direcciones</title>

    <link rel="stylesheet" href="icons/iconpack2/style.css">
    <link rel="stylesheet" href="icons/boxicons-master/css/boxicons.min.css">

    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/tablastyle.css">

    <!-- DATATABLES -->
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
    <!-- RESPONSIVE TABLES -->
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
                <h2>Direcciones</h2>
            </header>

            <div class="container__section-table">

                <!-- Añadir Fila -->
                <div class="datatable-header">
                    <div class="tools">
                        <ul>
                            <li>
                                <a href="direccionesadd.php"><button><i class="icon-add-outline"></i></button></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <table id="myTable" class="table is-striped datatable" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Direcciones</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $conexion=mysqli_connect('localhost','root','','proyecto');
                        $sql="SELECT * FROM direcciones";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            
                        ?>
                        <tr>
                            <td><?php echo $mostrar['direccion'] ?></td>
                            <td>
                                    <?php echo"<a href='direccionesedit.php?id=$id'><i class='edit bx bxs-edit'></i></a>";?>
                                    <?php echo"<a onclick = 'verificar()'><i class='drop bx bx-window-close'></i></a>";?>
                            </td>

                            <script type="text/javascript">
                                function verificar() {      
                                var opcion = confirm("¿Estas seguro que desea borrar este registro?");
                                if (opcion) {
                                    <?php echo "window.location= 'php/direccionesdelete.php?id=$id'"; ?>
                                }
                                }
                            </script>
                        </tr>
                        <?php
                            }  
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
    <script src="js/inicio2.js"></script>
</body>

</html>