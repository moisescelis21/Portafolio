<script src="js/dist/sweet.js"></script>
    <script src="js/dist/sweetalert2.all.min.js
"></script>
<link href="js/dist/sweetalert2.min.css
" rel="stylesheet">
<?php
session_start();
$cedula = $_SESSION['cedula'];
$privilegio = $_SESSION['privilegio'];
$roles = $_SESSION['roles'];
if ($roles != 0 OR $privilegio != 0) {
    session_unset();
    session_destroy();
    echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'Usted no tiene permiso para entrar aqui.',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'login.php';
  }
})</script>";
  }
  
if (!isset($_SESSION["cedula"])) {
    session_unset();
    session_destroy();
    echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'Debe loguearse para entrar aqui.',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'login.php';
  }
})</script>";
}else{
  ?>
<?php
//Introduzca aquí la información de su base de datos y el nombre del archivo de copia de seguridad.
$mysqlDatabaseName ='procuraduria';
$mysqlUserName ='root';
$mysqlPassword ='';
$mysqlHostName ='localhost';
$fecha = date('Y-m-d');
$mysqlExportPath ='bd/pgeb-'.$fecha.'.sql';

//Por favor, no haga ningún cambio en los siguientes puntos
//Exportación de la base de datos y salida del status
$command='C:\xampp\mysql\bin\mysqldump.exe --opt -h' .$mysqlHostName .' -u' .$mysqlUserName .' --password="' .$mysqlPassword .'" ' .$mysqlDatabaseName .' > ' .$mysqlExportPath;
exec($command,$output,$worked);
switch($worked){
case 0:
$nombre = $mysqlExportPath;
$ruta = "C:/xampp/htdocs/Procuraduria/bd";
$con = mysqli_connect($mysqlHostName,$mysqlUserName,$mysqlPassword,$mysqlDatabaseName)or die("Problemas al Conectar");
mysqli_select_db($con,$mysqlDatabaseName)or die("problemas al conectar con la base de datos");
$sql="INSERT INTO respaldos VALUES('id','$nombre','$ruta','$fecha')";
$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
$ejecutar=mysqli_query($con,$sql);
echo "<body><script>Swal.fire({
  title: 'Felicidades',
  text: 'La base de datos ha sido respaldada con exito.',
  icon: 'success',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'restaurar.php';
  }
})</script>";
break;
case 1:
echo 'Se ha producido un error al exportar <b>' .$mysqlDatabaseName .'</b> a '.getcwd().'/' .$mysqlExportPath .'</b>';
break;
case 2:
echo 'Se ha producido un error de exportación, compruebe la siguiente información: <br/><br/><table><tr><td>Nombre de la base de datos:</td><td><b>' .$mysqlDatabaseName .'</b></td></tr><tr><td>Nombre de usuario MySQL:</td><td><b>' .$mysqlUserName .'</b></td></tr><tr><td>Contraseña MySQL:</td><td><b>NOTSHOWN</b></td></tr><tr><td>Nombre de host MySQL:</td><td><b>' .$mysqlHostName .'</b></td></tr></table>';
break;
}
}
?>