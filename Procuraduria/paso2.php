<script src="js/dist/sweet.js"></script>
    <script src="js/dist/sweetalert2.all.min.js
"></script>
<link href="js/dist/sweetalert2.min.css
" rel="stylesheet">
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
            <h1 class="login-title animated wow fadeInUp" data-wow-delay="0.5s">Olvide mi Contraseña</h1>
            <?php 
                $cedula=$_POST['cedula'];
                $conexion=mysqli_connect('localhost','root','','procuraduria');
                $sql="SELECT * FROM preguntas WHERE cedula='$cedula'";
                $sql2="SELECT * FROM usuarios WHERE cedula='$cedula'";
                $result=mysqli_query($conexion,$sql);
                $result2=mysqli_query($conexion,$sql2);
                $contador= mysqli_num_rows($result);
                $contador2= mysqli_num_rows($result2);
                if ($contador2 < 1) {
                  echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'El usuario que ingreso no existe, por favor verifique.',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'paso1.php';
  }
})</script>";
                    
                }
                if ($contador < 1) {
                  echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'El usuario que ingreso no tiene preguntas registradas, por favor verifique.',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'paso1.php';
  }
})</script>";
                }
                while($mostrar=mysqli_fetch_array($result)){
                $id = $mostrar['id']; 
                $pregunta1 =   $mostrar['pregunta1'];
                $pregunta2 = $mostrar['pregunta2'];
                $pregunta3 = $mostrar['pregunta3'];
                $cedula2 = $mostrar['cedula'];
                ?>
            <form action="paso3.php" method="post" autocomplete="off">
              <div class="form-group animated wow fadeInUp">
                <label for="cedula">Pregunta #1</label>
                <input rows="4" type="text" id="pregunta1" name="pregunta1" class="form-control animated wow fadeInUp" value="<?php echo $pregunta1 ?>"  disabled >
              </div>
              <div class="form-group animated wow fadeInUp">
                <label for="cedula">Respuesta #1</label>
                <input type="text" id="respuesta1" name="respuesta1" class="form-control animated wow fadeInUp" placeholder="Ingrese la Respuesta #1" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'>
              </div>
              <div class="form-group animated wow fadeInUp">
                <label for="cedula">Pregunta #2</label>
                <input rows="4" type="text" id="pregunta2" name="pregunta2" class="form-control animated wow fadeInUp" value="<?php echo $pregunta2 ?>"  disabled >
              </div>
              <div class="form-group animated wow fadeInUp">
                <label for="cedula">Respuesta #2</label>
                <input type="date" id="respuesta2" name="respuesta2" class="form-control animated wow fadeInUp" placeholder="Ingrese la Respuesta #2">
              </div>
              <div class="form-group animated wow fadeInUp">
                <label for="cedula">Pregunta #3</label>
                <input rows="4" type="text" id="pregunta3" name="pregunta3" class="form-control animated wow fadeInUp" value="<?php echo $pregunta3 ?>"  disabled >
              </div>
              <div class="form-group animated wow fadeInUp">
                <label for="cedula">Respuesta #3</label>
                <input type="text" id="respuesta3" name="respuesta3" class="form-control animated wow fadeInUp" placeholder="Ingrese la Respuesta #3" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57))">
              </div>
              <input type="hidden" name="cedula" id="cedula" value="<?php echo $cedula2 ?>">
<?php } ?>
              <input type="submit" name="login" id="login" class="btn btn-block login-btn animated wow fadeInUp" type="button" value="Verificar">
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
