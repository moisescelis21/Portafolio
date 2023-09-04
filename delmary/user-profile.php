<?php
session_start();
$usuario = $_SESSION["usuario"];
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
    <title>El Punto del Sabor | Perfil</title>

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
    <link rel="stylesheet" href="css/modal.css" type="text/css">
</head>

<body>

    <style type="text/css">
        body {
            color: #1a202c;
            text-align: left;
            background-color: #e2e8f0;
        }

        .main-body {
            padding: 15px;
        }

        .card {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .gutters-sm {
            margin-right: -8px;
            margin-left: -8px;
        }

        .gutters-sm>.col,
        .gutters-sm>[class*=col-] {
            padding-right: 8px;
            padding-left: 8px;
        }

        .mb-3,
        .my-3 {
            margin-bottom: 1rem !important;
        }

        .bg-gray-300 {
            background-color: #e2e8f0;
        }

        .h-100 {
            height: 100% !important;
        }

        .shadow-none {
            box-shadow: none !important;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="main-body">
 <?php 
                        $conexion=mysqli_connect('localhost','root','','delmary');
                        $sql="SELECT * FROM clientes WHERE usuario='$usuario'";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $usuario = $mostrar['usuario'];
                            $nombres = $mostrar['nombres'];
                            $correo = $mostrar['correo'];
                            $telefono = $mostrar['telefono'];
                            $telefonoalternativo = $mostrar['telefonoalternativo'];
                            $direccion = $mostrar['direccion'];
                            
                        ?>

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="img/avatar.png" alt="Admin"
                                    class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4><?php echo $nombres ?></h4>
                                    <p class="text-secondary mb-1"><?php echo $nombres ?></p>
                                    <p class="text-muted font-size-sm"><?php echo $direccion ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="user-profile2.php">
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Nombre Completo</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="nombres" id="nombres" class=""
                            placeholder="Nombre Completo" value="<?php echo $nombres ?>">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Correo Electrónico</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="correo" id="correo" class=""
                            placeholder="Correo Electronico" value="<?php echo $correo ?>">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Teléfono</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="telefono" id="telefono" class=""
                            placeholder="Numero de Telefono" value="<?php echo $telefono ?>">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Teléfono Alternativo</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="telefonoalternativo" id="telefonoalternativo" class=""
                            placeholder="Telefono Alternativo" value="<?php echo $telefonoalternativo ?>">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Teléfono Alternativo</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="direccion" id="direccion" class=""
                            placeholder="Direccion de Delivery" value="<?php echo $direccion ?>">
                            <input type="hidden" name="id_cliente" id="id_cliente" class=""
                             value="<?php echo $id ?>">
                                </div>
                            </div>
                            <hr>
                        <?php } ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" class="primary-btn" style="background: #cf0c52;" href="">Editar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>


</body>

</html>