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

$correlativo = $_GET['correlativo'];
$cedula = $_POST['cedula'];




$sql5="SELECT * FROM nominapersonal WHERE correlativo='$correlativo' AND cedula='$cedula'";
$result5=mysqli_query($con,$sql5);
$num_registros = mysqli_num_rows($result5);

if ($num_registros == 0) {
$sql2="SELECT * FROM nominas WHERE correlativo='$correlativo'";
$result2=mysqli_query($con,$sql2);
while($mostrar2=mysqli_fetch_array($result2)){
$periodo = $mostrar2['periodo'];
$tiponomina = $mostrar2['tiponomina'];
$mes = date("m", strtotime($periodo));
$ano = date("Y", strtotime($periodo));
$sql4 = "SELECT * FROM trabajadores WHERE cedula='$cedula'";
$result4 = mysqli_query($con, $sql4);
while($mostrar4=mysqli_fetch_array($result4)){
  $nomina = $mostrar4['nomina'];


 $sql="INSERT INTO nominapersonal VALUES('id','$cedula','15','$correlativo','$tiponomina','$nomina')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);

 if(!$ejecutar){
        echo"Las personas no han sido registrada correctamente.";
    }else{
      echo "<body><script>Swal.fire({
  title: 'Felicidades',
  text: 'Las personas han sido registrado correctamente.',
  icon: 'success',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'nominapersonal2.php?correlativo=$correlativo';
  }
})</script>";
    
    } 
}
}







}else{
  echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'Este trabajador ya fue registrado en la nomina correspondiente.',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'nominapersonal2.php?correlativo=$correlativo';
  }
})</script>";

}




      
}
?>