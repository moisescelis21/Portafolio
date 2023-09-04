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

$correlativo = $_GET['correlativo'];
$sql2="SELECT * FROM nominas WHERE correlativo='$correlativo'";
$result2=mysqli_query($con,$sql2);
while($mostrar2=mysqli_fetch_array($result2)){
$periodo = $mostrar2['periodo'];
$tiponomina = $mostrar2['tiponomina'];
$personal = $mostrar2['personal'];
$personal2 = "";
if ($personal == "Alto Funcionario y Alto Nivel") {
  $personal = "Alto Funcionario";
  $personal2 = "Alto Nivel";
}elseif ($personal == "Empleados") {
  $personal = "Empleado";
  $personal2 = "";
}elseif ($personal == "Obreros") {
  $personal = "Obrero";
  $personal2 = "";
}elseif ($personal == "Pensionados") {
  $personal = "Pension";
  $personal2 = "";
}elseif ($personal == "Jubilados") {
  $personal = "Jubilacion";
  $personal2 = "";
}
$mes = date("m", strtotime($periodo));
$ano = date("Y", strtotime($periodo));

if ($tiponomina == "Nomina") {

if ($periodo == "15-$mes-$ano"){
$sql="SELECT * FROM trabajadores WHERE nomina = '$personal' OR nomina = '$personal2' AND status != 'Inactivo'";
$result=mysqli_query($con,$sql);
while($mostrar=mysqli_fetch_array($result)){
    $cedula = $mostrar['cedula'];
    $nomina = $mostrar['nomina'];

 $sql="INSERT INTO nominapersonal VALUES('id','$cedula','15','$correlativo','$tiponomina','$nomina')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
}
}else{

$sql="SELECT * FROM trabajadores WHERE nomina = '$personal' OR nomina = '$personal2' AND status != 'Inactivo'";
$result=mysqli_query($con,$sql);
while($mostrar=mysqli_fetch_array($result)){
    $cedula = $mostrar['cedula'];
    $nomina = $mostrar['nomina'];

 $sql="INSERT INTO nominapersonal VALUES('id','$cedula','15','$correlativo','$tiponomina','$nomina')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);

}
}
}elseif ($tiponomina == "CestaTicket") {
 $sql="SELECT * FROM trabajadores WHERE nomina != 'Jubilacion' AND nomina != 'Pension' AND cedula != '18237190' AND status != 'Inactivo' AND cedula != '8856323'";
$result=mysqli_query($con,$sql);
while($mostrar=mysqli_fetch_array($result)){
    $cedula = $mostrar['cedula'];
    $nomina = $mostrar['nomina'];

 $sql="INSERT INTO nominapersonal VALUES('id','$cedula','15','$correlativo','$tiponomina','$nomina')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);

}     
}elseif($tiponomina == "Compensacion"){
	$sql="SELECT * FROM trabajadores WHERE nomina != 'Pension' AND nomina != 'Jubilacion' AND nomina != 'Contratado' AND status != 'Inactivo'";
$result=mysqli_query($con,$sql);
while($mostrar=mysqli_fetch_array($result)){
    $cedula = $mostrar['cedula'];
    $nomina = $mostrar['nomina'];

 $sql="INSERT INTO nominapersonal VALUES('id','$cedula','15','$correlativo','$tiponomina','$nomina')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);

}

}



}



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
    window.location= 'nominapersonal.php?correlativo=$correlativo';
  }
})</script>";

    }   
}
?>