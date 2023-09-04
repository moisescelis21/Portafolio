<?php
session_start();

if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'index.php';</script>";
  }
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="proyecto";


 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 $usuario=$_SESSION["usuario"];
 $password=sha1($_POST['password']);
 $password2=sha1($_POST['password2']);
 if (isset($_POST['avatar'])) {
  $avatarcheck = 1;
 }else{
 	$avatarcheck = 0;
 }
 if ($_POST['password'] == "") {
 	$passwordcheck = 0;
 }else{
 	$passwordcheck = 1;
 }


if ($avatarcheck == 1 && $passwordcheck == 1) {
	if ($password == $password2) {
	$avatar=$_POST['avatar'];
 	$modificacion = ("UPDATE usuarios SET password = '$password', avatar = '$avatar' WHERE usuario = '$usuario'");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 	if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
 			echo "<script>alert('Su modificacion fue hecha exitosamente'); window.location= '../perfil.php';</script>";
 			}
 }else{
 	echo "<script>alert('Las contraseñas no coinciden, por favor intentelo de nuevo'); window.location= '../perfil.php';</script>";
 }



}elseif ($avatarcheck == 0 && $passwordcheck == 0) {
 	echo "<script>alert('No se ha hecho ninguna modificacion'); window.location= '../perfil.php';</script>";


}elseif ($avatarcheck == 1 && $passwordcheck == 0) {
	$avatar=$_POST['avatar'];
 	$modificacion = ("UPDATE usuarios SET  avatar = '$avatar' WHERE usuario = '$usuario'");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 	if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
 			echo "<script>alert('Su modificacion fue hecha exitosamente'); window.location= '../perfil.php';</script>";
 			}
}elseif ($avatarcheck == 0 && $passwordcheck == 1) {
	if ($password == $password2) {
 	$modificacion = ("UPDATE usuarios SET password = '$password' WHERE usuario = '$usuario'");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 	if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
 			echo "<script>alert('Su modificacion fue hecha exitosamente'); window.location= '../perfil.php';</script>";
 			}
 }else{
 	echo "<script>alert('Las contraseñas no coinciden, por favor intentelo de nuevo'); window.location= '../perfil.php';</script>";
 }
}

















 
 	
  			