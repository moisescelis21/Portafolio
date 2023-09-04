<?php
session_start();
$usuario = $_SESSION['usuario'];
$cedula = $_SESSION['cedula'];
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
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="css/userprofile.css">

    <link rel="stylesheet" href="icons/iconpack2/style.css">
    <link rel="stylesheet" href="css/sidebar.css">

</head>

<body>

    <!-- BARRA LATERAL -->

    <?php require('./layout/sidebar.php') ?>

    <!-- CONTENIDO -->

    <div class="container1">

        <!-- BARRA DE NAVEGACIÓN -->

        <?php require('./layout/header.php') ?>

        <!-- <header class="header-tab">
            <h2>Perfil de Usuario</h2>
        </header> -->

        <div class="container__section">


            <div class="back__div">
                <div class="back__div-item">
                    <a class="back" href="usuarios.php"><i class="icon-arrow-thick-left"></i></a>
                    <h2 class="form-h2">Ir a Usuarios</h2>
                </div>
                <div class="back__div-item">
                    <a class="back" href="preguntasver.php"><i class="icon-question"></i></a>
                    <h2 class="form-h2">Preguntas de Seguridad</h2>
                </div>
            </div>

            <!-- IMAGEN DE PERFIL -->
            <div class="container__section-avatar">

                <form class="form" id="formulario" action="php/usuarioedit2.php?usuario=<?php echo $_SESSION['usuario'];?>" method="POST" autocomplete="off">

                    <!-- AVATAR -->
                    
                    <?php 
                        
                        $conexion=mysqli_connect('localhost','root','','proyecto');
                        $sql="SELECT * FROM usuarios WHERE usuario='$usuario'";
                        $sql2="SELECT * FROM trabajadores WHERE cedula='$cedula'";
                        $result=mysqli_query($conexion,$sql);
                        $result2=mysqli_query($conexion,$sql2);

                        while($mostrar=mysqli_fetch_array($result)){
                        while($mostrar2=mysqli_fetch_array($result2)){
                            $avatar = $mostrar['avatar'];
                            $id = $mostrar['id'];
                            $nombre = $mostrar2['nombre'];
                            $apellido = $mostrar2['apellido'];
                            $cedula = $_SESSION["cedula"];
                            
                        ?>
                    <div class="avatar__div">
                        <div class="avatar-img">
                            <img class="avatar" src="img/useravatar/<?php echo $avatar?>.png" alt="">
                            <div id="select" class="avatar__select"><i class="icon-cheveron-outline-down"></i></div>
                            <div class="user-info">
                                <h2>Nombre de usuario: <?php echo $usuario; ?></h2>
                                <p>Nombre y apellido: <?php echo $nombre;?>&nbsp;<?php echo $apellido;?> </p>
                                <p>Cédula: <?php echo $cedula ?></p>
                            </div>
                        </div>


                    </div>

                    <div class="form_container">
                        <div class="avatar__selection">
                            <div id="close" class="avatar__selection-close"><i class="icon-close-outline"></i></div>

                            <!-- OPCIONES DE AVATAR -->

                            <div class="avatar__options">
                                <label for="1"><img class="avatar__option" src="img/useravatar/1.png" alt=""></label>
                                <input type="radio" name="avatar" id="1" value="1">

                                <label for="2"><img class="avatar__option" src="img/useravatar/2.png" alt=""></label>
                                <input type="radio" name="avatar" id="2" value="2">
                            
                                <label for="4"><img class="avatar__option" src="img/useravatar/4.png" alt=""></label>
                                <input type="radio" name="avatar" id="4" value="4">

                                <label for="5"><img class="avatar__option" src="img/useravatar/5.png" alt=""></label>
                                <input type="radio" name="avatar" id="5" value="5">

                                <label for="6"><img class="avatar__option" src="img/useravatar/6.png" alt=""></label>
                                <input type="radio" name="avatar" id="6" value="6">

                                <label for="7"><img class="avatar__option" src="img/useravatar/7.png" alt=""></label>
                                <input type="radio" name="avatar" id="7" value="7">

                                <label for="8"><img class="avatar__option" src="img/useravatar/8.png" alt=""></label>
                                <input type="radio" name="avatar" id="8" value="8">

                                <label for="9"><img class="avatar__option" src="img/useravatar/9.png" alt=""></label>
                                <input type="radio" name="avatar" id="9" value="9">
                            </div>
                            <div class="avatar__submit">
                                <input type="submit" class="btn-submit2" value="Guardar">
                            </div>
                        </div>
                        <div class="container-inputs" id="grupo__usuario">
                            <i class="icon-user form-icon"></i>
                            <label class="form-label" for="usuario">Usuario</label>
                            <div class="form__inputs">
                                <input type="text" name="usuario" id="usuario" class="usuario" value="<?php echo $mostrar['usuario']; ?>" disabled>
                            </div>
                        </div>

                        <!--CONTRASEÑA-->

                        <div class="container-inputs" id="grupo__password">
                            <i class="icon-key form-icon"></i>
                            <label class="form-label" for="password"> Contraseña</label>
                            <div class="form__inputs">
                                <input type="password" name="password" id="password" class="password" >
                            </div>
                        </div>

                        <div class="container-inputs" id="grupo__password2">
                            <i class="icon-key form-icon"></i>
                            <label class="form-label" for="password2">Repetir Contraseña</label>
                            <div class="form__inputs">
                                <input type="password" name="password2" id="password2" class="password2">
                            </div>
                        </div>

                        <!--Correo-->

                        <div class="container-inputs" id="grupo__correo">
                            <i class="icon-box form-icon"></i>
                            <label class="form-label" for="correo">Correo</label>
                            <div class="form__inputs">
                                <input type="email" name="correo" id="correo" class="correo" value="<?php echo $mostrar['correo']; ?>" disabled>
                            </div>
                        </div>

                        <div class="container-inputs" id="grupo__cedula">
                            <i class="icon-news-paper form-icon"></i>
                            <label class="form-label" for="cedula">Cedula</label>
                            <div class="form__inputs">
                                <input type="cedula" name="cedula" id="cedula" class="cedula" value="<?php echo $mostrar['cedula']; ?>" disabled>
                            </div>
                        </div>
                    <?php }} ?>
                        <div class="container-btn">
                            <input type="submit" class="btn-submit" value="Guardar Cambios">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>

    <script src="js/inicio2.js"></script>
    <script src="js/userprofile.js"></script>
</body>

</html>