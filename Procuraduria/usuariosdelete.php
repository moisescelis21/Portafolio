<script src="js/dist/sweet.js"></script>
    <script src="js/dist/sweetalert2.all.min.js
"></script>
<link href="js/dist/sweetalert2.min.css
" rel="stylesheet">
<?php
session_start();
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
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="procuraduria";

 $cedulaverifi = $_SESSION["cedula"];
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 $id2 = "";
 $cedula2 = "";
 $privilegio = "";
 $privilegio2 = "";
 $id = $_GET['id'];
                        $sql="SELECT * FROM usuarios WHERE cedula=$cedulaverifi";
                        $result=mysqli_query($con,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id2 = $mostrar['id'];
                            $privilegio = $mostrar['privilegio'];
                       }

                       $sql2="SELECT * FROM usuarios WHERE id=$id";
                        $result2=mysqli_query($con,$sql2);

                        while($mostrar2=mysqli_fetch_array($result2)){
                            $privilegio2 = $mostrar2['privilegio'];
                       }
  





if ($id == $id2) {
  	echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'Usted no puede eliminar su propio usuario',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'usuarios.php';
  }
})</script>";
  }elseif ($privilegio == $privilegio2) {
    echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'Usted no puede eliminar el usuario de otro superusuario',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'usuarios.php';
  }
})</script>";

  }else{
  $eliminar = ("DELETE FROM usuarios WHERE id = '$id' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$eliminar);
  if(!$ejecutar){
    echo"Hubo Algun Error";
    }else{
      echo "<body><script>Swal.fire({
  title: 'Felicidades',
  text: 'Usted ha eliminado correctamente al usuario',
  icon: 'success',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'usuarios.php';
  }
})</script>";
      }
  }
 
}
                            
 



 
 
 
  			