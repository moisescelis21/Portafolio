<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="img/favicon.svg">
    <title>El Punto del Sabor | Ingresar</title>

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
    <link rel="stylesheet" href="css/login.css" type="text/css">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <div class="info">
  </div>
</div>
<div class="form">

  <div class="thumbnail"><img src="img/logo.png"/></div>

    <p class="message">¿Olvidaste tu Contraseña?</p>
  </form>
  <?php 
                $usuario=$_POST['usuario'];
                $conexion=mysqli_connect('localhost','root','','delmary');
                $sql="SELECT * FROM preguntas WHERE usuario='$usuario'";
                $sql2="SELECT * FROM usuarios WHERE usuario='$usuario'";
                $result=mysqli_query($conexion,$sql);
                $result2=mysqli_query($conexion,$sql2);
                $contador= mysqli_num_rows($result);
                $contador2= mysqli_num_rows($result2);
                if ($contador2 < 1) {
                    echo "<script>alert('El usuario que ingreso no existe, por favor verifique'); window.location= 'paso1.php';</script>";
                }
                if ($contador < 1) {
                    echo "<script>alert('El usuario que ingreso no tiene preguntas registradas, por favor verifique'); window.location= 'paso1.php';</script>";
                }
                while($mostrar=mysqli_fetch_array($result)){
                $id = $mostrar['id']; 
                $pregunta1 =   $mostrar['pregunta1'];
                $pregunta2 = $mostrar['pregunta2'];
                $pregunta3 = $mostrar['pregunta3'];
                $usuario2 = $mostrar['usuario'];
                ?>
  <form class="login-form" method="POST" action="paso2.php">
    <input type="text" placeholder="Pregunta #1" name="pregunta1" id="pregunta1" value="<?php echo $pregunta1; ?>" />
    <input type="text" placeholder="Respuesta #1" name="respuesta1" id="respuesta1" />
    <input type="text" placeholder="Pregunta #2" name="pregunta2" id="pregunta2" value="<?php echo $pregunta2; ?>" />
    <input type="text" placeholder="Respuesta #2" name="respuesta2" id="respuesta2" />
    <input type="text" placeholder="Pregunta #3" name="pregunta3" id="pregunta3" value="<?php echo $pregunta3; ?>" />
    <input type="text" placeholder="Respuesta #3" name="respuesta3" id="respuesta3" />
    <input type="hidden"  name="usuario" id="usuario" value="<?php echo $usuario2 ?>" />

    <button type="submit">Iniciar Sesión</button>
  </form>
</div>
<?php } ?>
<!-- partial -->
  <script src='js/jquery.min.js'></script>
  <script  src="js/login.js"></script>

</body>
</html>
