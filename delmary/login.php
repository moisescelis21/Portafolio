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

  <form class="register-form" method="POST" action="register.php">
    <input type="text" placeholder="Usuario" name="usuario" id="usuario" />
    <input type="password" placeholder="Contraseña" name="password" id="password" />
    <input type="text" placeholder="Cédula de Identidad" name="cedula" id="cedula" />
    <input type="text" placeholder="Correo Electronico" name="correo" id="correo" />
    
    <button type="submit">Crear Cuenta</button>
    <p class="message">Ya estás registrado?? <a href="#">Inicia Sesión</a></p>
  </form>
  <form class="login-form" method="POST" action="loguear.php">
    <input type="text" placeholder="Usuario" name="usuario" id="usuario" />
    <input type="password" placeholder="Contraseña" name="password" id="password" />
    <button type="submit">Iniciar Sesión</button>
    <p class="message">No estás registrado? <a href="#">Crea una cuenta</a></p>
    <p class="message">Olvidaste tu cuenta? <a href="paso1.php">Recuperar Usuario</a></p>
  </form>
</div>
<!-- partial -->
  <script src='js/jquery.min.js'></script>
  <script  src="js/login.js"></script>

</body>
</html>
