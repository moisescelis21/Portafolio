<?php
 session_start();
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="liceo";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");


$cedula=$_POST['cedula'];
$año=$_POST['año'];
$lapso=$_POST['lapso'];
if ($año == '1') {
 $materia1=$_POST['materia1'];
 $materia2=$_POST['materia2'];
 $materia3=$_POST['materia3'];
 $materia4=$_POST['materia4'];
 $materia5=$_POST['materia5'];
 $materia6=$_POST['materia6'];
 $materia7=$_POST['materia7'];
 $materia8=$_POST['materia8'];
 $materia9=$_POST['materia9'];
 $nota1=$_POST['nota1'];
 $nota2=$_POST['nota2'];
 $nota3=$_POST['nota3'];
 $nota4=$_POST['nota4'];
 $nota5=$_POST['nota5'];
 $nota6=$_POST['nota6'];
 $nota7=$_POST['nota7'];
 $nota8=$_POST['nota8'];
 $nota9=$_POST['nota9'];
 $materia = array("$materia1","$materia2","$materia3","$materia4","$materia5","$materia6","$materia7","$materia8","$materia9");
 $nota = array("$nota1","$nota2","$nota3","$nota4","$nota5","$nota6","$nota7","$nota8","$nota9",);
}
 
if ($año == '2') {
 $materia1=$_POST['materia1'];
 $materia2=$_POST['materia2'];
 $materia3=$_POST['materia3'];
 $materia4=$_POST['materia4'];
 $materia5=$_POST['materia5'];
 $materia6=$_POST['materia6'];
 $materia7=$_POST['materia7'];
 $materia8=$_POST['materia8'];
 $materia9=$_POST['materia9'];
 $nota1=$_POST['nota1'];
 $nota2=$_POST['nota2'];
 $nota3=$_POST['nota3'];
 $nota4=$_POST['nota4'];
 $nota5=$_POST['nota5'];
 $nota6=$_POST['nota6'];
 $nota7=$_POST['nota7'];
 $nota8=$_POST['nota8'];
 $nota9=$_POST['nota9'];
 $materia = array("$materia1","$materia2","$materia3","$materia4","$materia5","$materia6","$materia7","$materia8","$materia9");
 $nota = array("$nota1","$nota2","$nota3","$nota4","$nota5","$nota6","$nota7","$nota8","$nota9");
}

if ($año == '3') {
 $materia1=$_POST['materia1'];
 $materia2=$_POST['materia2'];
 $materia3=$_POST['materia3'];
 $materia4=$_POST['materia4'];
 $materia5=$_POST['materia5'];
 $materia6=$_POST['materia6'];
 $materia7=$_POST['materia7'];
 $materia8=$_POST['materia8'];
 $materia9=$_POST['materia9'];
 $nota1=$_POST['nota1'];
 $nota2=$_POST['nota2'];
 $nota3=$_POST['nota3'];
 $nota4=$_POST['nota4'];
 $nota5=$_POST['nota5'];
 $nota6=$_POST['nota6'];
 $nota7=$_POST['nota7'];
 $nota8=$_POST['nota8'];
 $nota9=$_POST['nota9'];
 $materia = array("$materia1","$materia2","$materia3","$materia4","$materia5","$materia6","$materia7","$materia8","$materia9");
 $nota = array("$nota1","$nota2","$nota3","$nota4","$nota5","$nota6","$nota7","$nota8","$nota9");
}

if ($año == '4') {
 $materia1=$_POST['materia1'];
 $materia2=$_POST['materia2'];
 $materia3=$_POST['materia3'];
 $materia4=$_POST['materia4'];
 $materia5=$_POST['materia5'];
 $materia6=$_POST['materia6'];
 $materia7=$_POST['materia7'];
 $materia8=$_POST['materia8'];
 $materia9=$_POST['materia9'];
 $materia10=$_POST['materia10'];
 $nota1=$_POST['nota1'];
 $nota2=$_POST['nota2'];
 $nota3=$_POST['nota3'];
 $nota4=$_POST['nota4'];
 $nota5=$_POST['nota5'];
 $nota6=$_POST['nota6'];
 $nota7=$_POST['nota7'];
 $nota8=$_POST['nota8'];
 $nota9=$_POST['nota9'];
 $nota10=$_POST['nota10'];
 $materia = array("$materia1","$materia2","$materia3","$materia4","$materia5","$materia6","$materia7","$materia8","$materia9","$materia10");
 $nota = array("$nota1","$nota2","$nota3","$nota4","$nota5","$nota6","$nota7","$nota8","$nota9","$nota10");
}

if ($año == '5') {
 $materia1=$_POST['materia1'];
 $materia2=$_POST['materia2'];
 $materia3=$_POST['materia3'];
 $materia4=$_POST['materia4'];
 $materia5=$_POST['materia5'];
 $materia6=$_POST['materia6'];
 $materia7=$_POST['materia7'];
 $materia8=$_POST['materia8'];
 $materia9=$_POST['materia9'];
 $materia10=$_POST['materia10'];
 $nota1=$_POST['nota1'];
 $nota2=$_POST['nota2'];
 $nota3=$_POST['nota3'];
 $nota4=$_POST['nota4'];
 $nota5=$_POST['nota5'];
 $nota6=$_POST['nota6'];
 $nota7=$_POST['nota7'];
 $nota8=$_POST['nota8'];
 $nota9=$_POST['nota9'];
 $nota10=$_POST['nota10'];
 $materia = array("$materia1","$materia2","$materia3","$materia4","$materia5","$materia6","$materia7","$materia8","$materia9","$materia10");
 $nota = array("$nota1","$nota2","$nota3","$nota4","$nota5","$nota6","$nota7","$nota8","$nota9","$nota10");
}
if ($lapso == "1") {

 if ($año == '1' OR $año == '2' OR $año == '3') {
 	$contador = 0;
    while ($contador < 9) {
    $modificacion = ("UPDATE notas SET nota1 = '$nota[$contador]' WHERE materia = '$materia[$contador]' ");
    $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
    $ejecutar=mysqli_query($con,$modificacion);
    $contador = $contador + 1;
    if(!$ejecutar){
        echo "La nota no ha sido modificada correctamente.";
    }else{
        echo "<script>alert('La nota ha sido modificada correctamente.'); window.location= 'inicio.php';</script>";
    }
 }
}
 if ($año == '4' OR $año == '5') {
 	$contador = 0;
    while ($contador < 10) {
    $modificacion = ("UPDATE notas SET nota1 = '$nota[$contador]' WHERE materia = '$materia[$contador]' ");
    $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
    $ejecutar=mysqli_query($con,$modificacion);
    $contador = $contador + 1;
    if(!$ejecutar){
        echo "La nota no ha sido modificada correctamente.";
    }else{
        echo "<script>alert('La nota ha sido modificada correctamente.'); window.location= 'inicio.php';</script>";
    }
 }

}

}elseif ($lapso == "2") {
 if ($año == '1' OR $año == '2' OR $año == '3') {
 	$contador = 0;
 	while ($contador < 9) {
 	$modificacion = ("UPDATE notas SET nota2 = '$nota[$contador]' WHERE materia = '$materia[$contador]' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 	$contador = $contador + 1;
 	if(!$ejecutar){
 		echo "La nota no ha sido modificada correctamente.";
 	}else{
  		echo "<script>alert('La nota ha sido modificada correctamente.'); window.location= 'inicio.php';</script>";
 	}
 }
}
 if ($año == '4' OR $año == '5') {
 	$contador = 0;
 	while ($contador < 10) {
 	$modificacion = ("UPDATE notas SET nota2 = '$nota[$contador]' WHERE materia = '$materia[$contador]' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 	$contador = $contador + 1;
 	if(!$ejecutar){
 		echo "La nota no ha sido modificada correctamente.";
 	}else{
  		echo "<script>alert('La nota ha sido modificada correctamente.'); window.location= 'inicio.php';</script>";
 	}
 }

}




}elseif ($lapso == "3") {
 if ($año == '1' OR $año == '2' OR $año == '3') {
 	$contador = 0;
 	while ($contador < 9) {
 	$modificacion = ("UPDATE notas SET nota3 = '$nota[$contador]' WHERE materia = '$materia[$contador]' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 	$contador = $contador + 1;
 	if(!$ejecutar){
 		echo "La nota no ha sido modificada correctamente.";
 	}else{
  		echo "<script>alert('La nota ha sido modificada correctamente.'); window.location= 'inicio.php';</script>";
 	}
 }
}
 if ($año == '4' OR $año == '5') {
 	$contador = 0;
 	while ($contador < 10) {
 	$modificacion = ("UPDATE notas SET nota3 = '$nota[$contador]' WHERE materia = '$materia[$contador]' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 	$contador = $contador + 1;
 	if(!$ejecutar){
 		echo "La nota no ha sido modificada correctamente.";
 	}else{
  		echo "<script>alert('La nota ha sido modificada correctamente.'); window.location= 'inicio.php';</script>";
 	}
 }



}
}







 
 	

?>