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
    <title>Preguntas de seguridad</title>

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
                <h2>Preguntas de Seguridad</h2>
            </header>
            
            <div class="container__section-table">

                <!-- Añadir Fila -->
                <div class="datatable-header">
                    <div class="tools">
                        <ul>
                            <?php 
                        $conexion=mysqli_connect('localhost','root','','proyecto');
                        $usuario = $_SESSION["usuario"];
                        $sql="SELECT * FROM preguntas WHERE usuario = '$usuario' ";
                        $result=mysqli_query($conexion,$sql);
                        $row=mysqli_num_rows($result);
                        ?>
                            <li>
                                <?php
                                if ($row == 0) {
                                ?>
                                <a href="preguntas.php"><button><i class="icon-add-outline"></i></button></a>
                                <?php
                                }
                                ?>
                                
                            </li>
                        </ul>
                    </div>
                </div>

                <table id="myTable" class="table is-striped datatable" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Pregunta #1</th>
                            <th>Pregunta #2</th>
                            <th>Pregunta #3</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $sql="SELECT * FROM preguntas WHERE usuario = '$usuario' ";
                        $result=mysqli_query($conexion,$sql);
                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $preguntas1 = $mostrar['pregunta1'];
                            $preguntas2 = $mostrar['pregunta2'];
                            $preguntas3 = $mostrar['pregunta3'];
                       
                        ?>
                        <tr>
                            <td><?php echo utf8_encode($preguntas1) ?></td>
                            <td><?php echo utf8_encode($preguntas2) ?></td>
                            <td><?php echo utf8_encode($preguntas3)?></td>
                            <td>
                                    <?php echo"<a href='preguntasedit.php?id=$id'><i class='edit bx bxs-edit'></i></a>";?>
                                    <?php echo"<a onclick = 'verificar()'><i class='drop bx bx-window-close'></i></a>";?>
                            </td>

                            <script type="text/javascript">
                                function verificar() {      
                                var opcion = confirm("¿Estas seguro que desea borrar este registro?");
                                if (opcion) {
                                    <?php echo "window.location= 'php/preguntasdelete.php?id=$id'"; ?>
                                }
                                }
                            </script>
                        </tr>
                    <?php  }  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
    <script src="js/inicio2.js"></script>
</body>

</html>