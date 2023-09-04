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
//Tragen Sie hier Ihre Datenbankinformationen ein und den Namen der Backup-Datei
$mysqlDatabaseName ='procuraduria';
$mysqlUserName ='root';
$mysqlPassword ='';
$mysqlHostName ='localhost';
$nombre=$_GET['nombre'];
$mysqlImportFilename =$nombre;

//Por favor, no haga ningún cambio en los siguientes puntos
//Importación de la base de datos y salida del status
$command='C:\xampp\mysql\bin\mysql.exe -h' .$mysqlHostName .' -u' .$mysqlUserName .' --password="' .$mysqlPassword .'" ' .$mysqlDatabaseName .' < ' .$mysqlImportFilename;
exec($command,$output,$worked);
switch($worked){
case 0:
echo "<body><script>Swal.fire({
  title: 'Felicidades',
  text: 'La base de datos ha sido restaurada con exito.',
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
echo 'Se ha producido un error durante la importación. Por favor, compruebe si el archivo está en la misma carpeta que este script. Compruebe también los siguientes datos de nuevo: <br/><br/><table><tr><td>Nombre de la base de datos MySQL:</td><td><b>' .$mysqlDatabaseName .'</b></td></tr><tr><td>Nombre de usuario MySQL:</td><td><b>' .$mysqlUserName .'</b></td></tr><tr><td>Contraseña MySQL:</td><td><b>NOTSHOWN</b></td></tr><tr><td>Nombre de host MySQL:</td><td><b>' .$mysqlHostName .'</b></td></tr><tr><td>Nombre de archivo de la importación de MySQL:</td><td><b>' .$mysqlImportFilename .'</b></td></tr></table>';
break;
}
}
?>