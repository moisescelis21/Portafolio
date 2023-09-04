<?php
session_start();

if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'login.php';</script>";
  }
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="img/favicon.svg">
    <title>El Punto del Sabor | Sistema</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/sidebarsystem.css" type="text/css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/remixicon.css">


    <link rel="stylesheet" href="css/tablastyle.css">

<!-- DATATABLES -->
<link rel="stylesheet" type="text/css" href="DataTables/Bulma-0.9.2/css/bulma.min.css"/>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<!-- RESPONSIVE TABLES -->
<link rel="stylesheet" href="datatables/Responsive-2.2.9/css/responsive.foundation.min.css">
<script src="datatables/Responsive-2.2.9/js/responsive.foundation.min.js"></script>
</head>
<body>
    
     <!-- Sidebar Section Begin -->
     <?php require('./layout/sidebarsystem.php')  ?>
    <!-- Sidebar Section End -->


    <div id="overlay" class="overlay"></div>
      <div class="layout">
        <main class="content">
          <!-- CONTENIDO AQUI -->
          <div class="contenedor2">
          <div class="container__section">


<p class="header__title">Registro de Usuarios </p>
<div class="container__section-table">

    <!-- Añadir Fila -->
    <div class="datatable-header">
                    <div class="tools">
                        <ul>
                            <li>
                                <a href="usuarios.php"><button><i class="ri-add-box-line"></i></button></a>
                            </li>
                        </ul>
                    </div>
                </div>


    <table id="myTable" class="table is-striped datatable" style="width: 100%;">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Correo</th>
                <th>Cedula</th>
                <th>Privilegio</th>
                <th>Acciones</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
                <?php 
                        $conexion=mysqli_connect('localhost','root','','delmary');
                        $sql="SELECT * FROM usuarios WHERE privilegio='1'";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $usuario = $mostrar['usuario'];
                            $correo = $mostrar['correo'];
                            $cedula = $mostrar['cedula'];
                            $privilegio = $mostrar['privilegio'];
                            
                        ?>
            <tr>
                <td><?php echo $usuario ?></td>
                <td><?php echo $correo ?></td>
                <td><?php echo $cedula ?></td>
                <td><?php echo $privilegio ?></td>
                <?php echo "<td><a href='usuariosedit.php?id=$id' class='edit'><i class='ri-edit-box-line'></i> Editar</a></td>";?>
                <?php echo "<td><a href='usuariosdelete.php?id=$id' class='drop'><i class='ri-delete-back-2-line'></i> Eliminar</a></td>";?>
            </tr>
<?php } ?>
        </tbody>
    </table>
</div>
</div>
</div>
            </div>
        </div>
          </div>
        </main>
      </div>
    </div>

</body>
</html>

<script src="js/sidebarsystem.js"></script>
<script src="js/table.js"></script>