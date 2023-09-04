<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>INTRANET | ProcuBolívar</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/favicon.svg">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/bootstrap icons/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">



</head>

<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="brand-wrapper">
            <a href="javascript: history.go(-1)" class="btn btn-danger btn-sm animated wow fadeInUp" type="button" style="color: white; font-weight: bold; "><i style="color: antiquewhite ;" class="bi bi-arrow-left-circle-fill"></i> Regresar</i></a>
          </div>
          <div class="login-wrapper my-auto">
            <h1 class="login-title animated wow fadeInUp" data-wow-delay="0.5s">Ingresar al Sistema</h1>
            <form action="loguear.php" method="post" autocomplete="off">
              <div class="form-group animated wow fadeInUp">
                <label for="cedula">Cédula de Identidad</label>
                <input type="text" name="cedula" id="cedula" class="form-control animated wow fadeInUp" placeholder="Ingresa tu identificación">
              </div>
              <div class="form-group mb-4 animated wow fadeInUp">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control animated wow fadeInUp" placeholder="Ingresa tu contraseña">
              </div>
              <input type="submit" name="login" id="login" class="btn btn-block login-btn animated wow fadeInUp" type="button" value="Acceder">
            </form>
            


          </div>
        </div>
        
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="img/login.png" alt="login image" class="login-img animated wow fadeInRight">
        </div>
      </div>
    </div>
  </main>

</body>
</html>
