<script src="js/dist/sweet.js"></script>
    <script src="js/dist/sweetalert2.all.min.js
"></script>
<link href="js/dist/sweetalert2.min.css
" rel="stylesheet">
<?php
session_start();
 
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



$fecha2 = date('Y');
$correlativo = 1;
$correlativo = $correlativo."-".$fecha2;
$sql2="SELECT * FROM nominas WHERE id in (select MAX(id) from nominas)";
 $result2=mysqli_query($con,$sql2);
 while($mostrar2=mysqli_fetch_array($result2)){
 	$fecha3 = date("Y", strtotime($mostrar2['fecha']));
 if ($fecha2 == $fecha3) {
 	$correlativo = $mostrar2['correlativo'];
$partes = explode('-', $correlativo);
$valor = $partes[0];
$valor = intval($valor) + 1;
$correlativo = $valor.'-'.$partes[1];

 }else{
 	$correlativo = 1;
 	$correlativo = $correlativo."-".$fecha2;
 }



}


 $periodo=$_POST['periodo'];
 $tiponomina=$_POST['tiponomina'];
 $personal=$_POST['personal'];
 $fecha = date('Y-m-d');
 $correlativo = $correlativo;
 $realizado = $_SESSION["cedula"];
 if ($periodo == "none" OR $tiponomina == "none" OR $personal == "none") {
  echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'No puede dejar los campos vacios, por favor verifique y prosiga',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'nomina2.php';
  }
})</script>";

 }else{
 $sql="INSERT INTO nominas VALUES('id','$periodo','$fecha', '$realizado', '$correlativo', '$tiponomina', '$personal')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 }
 	if(!$ejecutar){
 		echo"Su nomina no ha sido registrada correctamente.";
 	}else{
    echo "<body><script>Swal.fire({
  title: 'Felicidades',
  text: 'Su nomina ha sido registrado correctamente.',
  icon: 'success',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'nomina.php';
  }
})</script>";
  	
 	}	
}
?>