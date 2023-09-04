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
  if ($roles == 1 OR $roles == 2 OR $roles == 4 OR $roles == 8) {
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
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $parroquia=$_POST['parroquia'];
 $id14 = $_GET['id'];

 
if ($parroquia == "") {
  echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'No puede dejar los campos vacios, por favor verifique y prosiga',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'municipio2.php';
  }
})</script>";
 	
 }else{
  $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $municipio = "";
                        $sql="SELECT * FROM municipios WHERE id=$id14";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $municipio = $mostrar['municipio'];
                        }

 $sql="INSERT INTO parroquias VALUES('id','$parroquia','$municipio')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);

}
 	if(!$ejecutar){
 		echo"Su parroquia no ha sido registrado correctamente.";
 	}else{
    echo "<body><script>
    Swal.fire({
  title: 'Felicidades',
  text: 'Su parroquia ha sido registrado correctamente.',
  icon: 'success',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'parroquias.php?id=$id14';
  }
})</script>";
  		
 	}	
}
?>