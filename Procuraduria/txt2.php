<?php

// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "procuraduria");

$correlativo = $_GET['correlativo'];
$partes = explode('-', $correlativo);
$correlativo3 = $partes[0];


$sql5="SELECT * FROM nominas WHERE correlativo='$correlativo'";
$result5=mysqli_query($conexion,$sql5);
while($mostrar5=mysqli_fetch_array($result5)){
   $periodo = $mostrar5['periodo'];
   $dia = date("d", strtotime($periodo));
   $mes = date("m", strtotime($periodo));
   $ano = date("Y", strtotime($periodo));
   $meses = array("ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBREs");
      $mes3 = $meses[$mes-1];
      if ($periodo == "15-$mes-$ano"){ 
         $nombre = "PRIMERA QUINCENA";
      }else{
         $nombre = "SEGUNDA QUINCENA";
      }
   $archivo = fopen("txt/"."C".$correlativo3.$nombre." ".$mes3.$ano.".txt", "w");





}



$sql3="SELECT * FROM txt WHERE correlativo='$correlativo'";
$result3=mysqli_query($conexion,$sql3);
while($mostrar3=mysqli_fetch_array($result3)){
   $total = $mostrar3['total'];
   $dia = date('d');
   $mes = date('m');
   $ano = date('y');
   if ($correlativo3 < 10) {
      $correlativo2 = "0".$correlativo3;
   }elseif($correlativo3 > 100){
      $correlativo2 = intval(substr($correlativo3, 0, 2));
   }else{
      $correlativo2 = $correlativo3;
   }
   if (strlen($total) == 1) {
         fwrite($archivo, "HPROCURADURIA GENERAL DEL ESTADO BOLIVAR 01020635910000310813".$correlativo2.$dia."/".$mes."/".$ano."000000000000".$total."03291". "\n");
      }elseif(strlen($total) == 2) {
         fwrite($archivo, "HPROCURADURIA GENERAL DEL ESTADO BOLIVAR 01020635910000310813".$correlativo2.$dia."/".$mes."/".$ano."00000000000".$total."03291". "\n");
      }elseif(strlen($total) == 3) {
         fwrite($archivo, "HPROCURADURIA GENERAL DEL ESTADO BOLIVAR 01020635910000310813".$correlativo2.$dia."/".$mes."/".$ano."0000000000".$total."03291". "\n");
      }elseif(strlen($total) == 4) {
         fwrite($archivo, "HPROCURADURIA GENERAL DEL ESTADO BOLIVAR 01020635910000310813".$correlativo2.$dia."/".$mes."/".$ano."000000000".$total."03291". "\n");
      }elseif(strlen($total) == 5) {
         fwrite($archivo, "HPROCURADURIA GENERAL DEL ESTADO BOLIVAR 01020635910000310813".$correlativo2.$dia."/".$mes."/".$ano."00000000".$total."03291". "\n");
      }elseif(strlen($total) == 6) {
         fwrite($archivo, "HPROCURADURIA GENERAL DEL ESTADO BOLIVAR 01020635910000310813".$correlativo2.$dia."/".$mes."/".$ano."0000000".$total."03291". "\n");
      }elseif(strlen($total) == 7) {
         fwrite($archivo, "HPROCURADURIA GENERAL DEL ESTADO BOLIVAR 01020635910000310813".$correlativo2.$dia."/".$mes."/".$ano."000000".$total."03291". "\n");
      }elseif(strlen($total) == 8) {
         fwrite($archivo, "HPROCURADURIA GENERAL DEL ESTADO BOLIVAR 01020635910000310813".$correlativo2.$dia."/".$mes."/".$ano."00000".$total."03291". "\n");
      }elseif(strlen($total) == 9) {
         fwrite($archivo, "HPROCURADURIA GENERAL DEL ESTADO BOLIVAR 01020635910000310813".$correlativo2.$dia."/".$mes."/".$ano."0000".$total."03291". "\n");
      }elseif(strlen($total) == 10) {
         fwrite($archivo, "HPROCURADURIA GENERAL DEL ESTADO BOLIVAR 01020635910000310813".$correlativo2.$dia."/".$mes."/".$ano."000".$total."03291". "\n");
      }elseif(strlen($total) == 11) {
         fwrite($archivo, "HPROCURADURIA GENERAL DEL ESTADO BOLIVAR 01020635910000310813".$correlativo2.$dia."/".$mes."/".$ano."00".$total."03291". "\n");
      }elseif(strlen($total) == 12) {
         fwrite($archivo, "HPROCURADURIA GENERAL DEL ESTADO BOLIVAR 01020635910000310813".$correlativo2.$dia."/".$mes."/".$ano."0".$total."03291". "\n");
      }elseif(strlen($total) == 13) {
         fwrite($archivo, "HPROCURADURIA GENERAL DEL ESTADO BOLIVAR 01020635910000310813".$correlativo2.$dia."/".$mes."/".$ano."".$total."03291". "\n");
      }
 
}
$sql2="SELECT * FROM recibos WHERE correlativo='$correlativo'";
$result2=mysqli_query($conexion,$sql2);
while($mostrar2=mysqli_fetch_array($result2)){
   $cedula = $mostrar2['cedula'];
   


      $totalcobra = number_format($mostrar2['totalcobra'],2, "", "");

      
$sql="SELECT * FROM trabajadores WHERE cedula='$cedula' AND cedula !='8874124' AND cedula !='8878329'";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
      $id = $mostrar['id']; 
      $nombres = $mostrar['nombres'];
      $apellidos = $mostrar['apellidos'];
      $cedula = $mostrar['cedula'];
      $nomina = $mostrar['nomina'];
      $cargo = $mostrar['cargo'];
      $adscrito = $mostrar['adscrito'];
      $fechresolucion = $mostrar['fechresolucion'];
      $prueba = substr($apellidos. " ". $nombres, 0,30);
      $prueba = str_pad($prueba, 39, " ");
      



$sql8="SELECT * FROM primaspersonal WHERE cedula='$cedula'";
    $result8=mysqli_query($conexion,$sql8);
    while($mostrar8=mysqli_fetch_array($result8)){
      $profesion = $mostrar8['profesion'];
      $antiguedad = $mostrar8['antiguedad'];
      $hijos = $mostrar8['hijos'];

$sql9="SELECT * FROM montos WHERE cedula='$cedula'";
    $result9=mysqli_query($conexion,$sql9);
    while($mostrar9=mysqli_fetch_array($result9)){
      $sueldo = $mostrar9['sueldo'];

$sql10="SELECT * FROM datosbancarios WHERE cedula='$cedula'";
    $result10=mysqli_query($conexion,$sql10);
    while($mostrar10=mysqli_fetch_array($result10)){
      $nrocuenta = $mostrar10['nrocuenta'];
      $tipocuenta = $mostrar10['tipcuenta'];


      

    
if(strlen($cedula) == 7 AND $tipocuenta == 1){
      if (strlen($totalcobra) == 1) {
         fwrite($archivo,"1". $nrocuenta. "0000000000". $totalcobra . $tipocuenta . "770" . $prueba." "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 2) {
         fwrite($archivo,"1". $nrocuenta. "000000000". $totalcobra . $tipocuenta . "770" . $prueba." "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 3) {
         fwrite($archivo,"1". $nrocuenta. "00000000". $totalcobra . $tipocuenta . "770" . $prueba." "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 4) {
         fwrite($archivo,"1". $nrocuenta. "0000000". $totalcobra . $tipocuenta . "770" . $prueba." "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 5) {
         fwrite($archivo,"1". $nrocuenta. "000000". $totalcobra . $tipocuenta . "770" . $prueba." "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 6) {
         fwrite($archivo,"1". $nrocuenta. "00000". $totalcobra . $tipocuenta . "770" . $prueba." "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 7) {
         fwrite($archivo,"1". $nrocuenta. "0000". $totalcobra . $tipocuenta . "770" . $prueba." "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 8) {
         fwrite($archivo,"1". $nrocuenta. "000". $totalcobra . $tipocuenta . "770" . $prueba." "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 9) {
         fwrite($archivo,"1". $nrocuenta. "00". $totalcobra . $tipocuenta . "770" . $prueba." "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 10) {
         fwrite($archivo,"1". $nrocuenta. "0". $totalcobra . $tipocuenta . "770" . $prueba." "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 11) {
         fwrite($archivo,"0". $nrocuenta. "". $totalcobra . $tipocuenta . "770" . $prueba." "."00". $cedula."003291" . "\n"); 
      }  
   }elseif(strlen($cedula) == 8 AND $tipocuenta == 1){
      if (strlen($totalcobra) == 1) {
         fwrite($archivo,"1". $nrocuenta. "0000000000". $totalcobra . $tipocuenta . "770" . $prueba." "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 2) {
         fwrite($archivo,"1". $nrocuenta. "000000000". $totalcobra . $tipocuenta . "770" . $prueba." "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 3) {
         fwrite($archivo,"1". $nrocuenta. "00000000". $totalcobra . $tipocuenta . "770" . $prueba." "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 4) {
         fwrite($archivo,"1". $nrocuenta. "0000000". $totalcobra . $tipocuenta . "770" . $prueba." "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 5) {
         fwrite($archivo,"1". $nrocuenta. "000000". $totalcobra . $tipocuenta . "770" . $prueba." "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 6) {
         fwrite($archivo,"1". $nrocuenta. "00000". $totalcobra . $tipocuenta . "770" . $prueba." "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 7) {
         fwrite($archivo,"1". $nrocuenta. "0000". $totalcobra . $tipocuenta . "770" . $prueba." "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 8) {
         fwrite($archivo,"1". $nrocuenta. "000". $totalcobra . $tipocuenta . "770" . $prueba." "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 9) {
         fwrite($archivo,"1". $nrocuenta. "00". $totalcobra . $tipocuenta . "770" . $prueba." "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 10) {
         fwrite($archivo,"1". $nrocuenta. "0". $totalcobra . $tipocuenta . "770" . $prueba." "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 11) {
         fwrite($archivo,"0". $nrocuenta. "". $totalcobra . $tipocuenta . "770" . $prueba." "."00". $cedula."003291" . "\n");
      }
   }elseif(strlen($cedula) == 7 AND $tipocuenta == 0){
      if ($cedula == 7877725) {
      if (strlen($totalcobra) == 1) {
         fwrite($archivo,"0". $nrocuenta."0000000000". $totalcobra . $tipocuenta . "770" . $prueba."  "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 2) {
         fwrite($archivo,"0". $nrocuenta."000000000". $totalcobra . $tipocuenta . "770" . $prueba."  "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 3) {
         fwrite($archivo,"0". $nrocuenta."00000000". $totalcobra . $tipocuenta . "770" . $prueba."  "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 4) {
         fwrite($archivo,"0". $nrocuenta."0000000". $totalcobra . $tipocuenta . "770" . $prueba."  "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 5) {
         fwrite($archivo,"0". $nrocuenta."000000". $totalcobra . $tipocuenta . "770" . $prueba."  "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 6) {
         fwrite($archivo,"0". $nrocuenta."00000". $totalcobra . $tipocuenta . "770" . $prueba."  "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 7) {
         fwrite($archivo,"0". $nrocuenta."0000". $totalcobra . $tipocuenta . "770" . $prueba."  "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 8) {
         fwrite($archivo,"0". $nrocuenta."000". $totalcobra . $tipocuenta . "770" . $prueba."  "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 9) {
         fwrite($archivo,"0". $nrocuenta."00". $totalcobra . $tipocuenta . "770" . $prueba."  "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 10) {
         fwrite($archivo,"0". $nrocuenta."0". $totalcobra . $tipocuenta . "770" . $prueba."  "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 11) {
         fwrite($archivo,"0". $nrocuenta."". $totalcobra . $tipocuenta . "770" . $prueba."  "."000". $cedula."003291" . "\n");
      }
   }else{
      if (strlen($totalcobra) == 1) {
         fwrite($archivo,"0". $nrocuenta."0000000000". $totalcobra . $tipocuenta . "770" . $prueba." "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 2) {
         fwrite($archivo,"0". $nrocuenta."000000000". $totalcobra . $tipocuenta . "770" . $prueba." "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 3) {
         fwrite($archivo,"0". $nrocuenta."00000000". $totalcobra . $tipocuenta . "770" . $prueba." "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 4) {
         fwrite($archivo,"0". $nrocuenta."0000000". $totalcobra . $tipocuenta . "770" . $prueba." "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 5) {
         fwrite($archivo,"0". $nrocuenta."000000". $totalcobra . $tipocuenta . "770" . $prueba." "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 6) {
         fwrite($archivo,"0". $nrocuenta."00000". $totalcobra . $tipocuenta . "770" . $prueba." "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 7) {
         fwrite($archivo,"0". $nrocuenta."0000". $totalcobra . $tipocuenta . "770" . $prueba." "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 8) {
         fwrite($archivo,"0". $nrocuenta."000". $totalcobra . $tipocuenta . "770" . $prueba." "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 9) {
         fwrite($archivo,"0". $nrocuenta."00". $totalcobra . $tipocuenta . "770" . $prueba." "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 10) {
         fwrite($archivo,"0". $nrocuenta."0". $totalcobra . $tipocuenta . "770" . $prueba." "."000". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 11) {
         fwrite($archivo,"0". $nrocuenta."". $totalcobra . $tipocuenta . "770" . $prueba." "."000". $cedula."003291" . "\n");
      }
   }
   }elseif(strlen($cedula) == 8 AND $tipocuenta == 0){
      if ($cedula == 13920259 OR $cedula == 11202458 or $cedula == 10049489 OR  $cedula == 30385423 OR $cedula == 17633481 OR $cedula == 13657269) {
         if (strlen($totalcobra) == 1) {
         fwrite($archivo,"0". $nrocuenta."0000000000". $totalcobra . $tipocuenta . "770" . $prueba."  "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 2) {
         fwrite($archivo,"0". $nrocuenta."000000000". $totalcobra . $tipocuenta . "770" . $prueba."  "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 3) {
         fwrite($archivo,"0". $nrocuenta."00000000". $totalcobra . $tipocuenta . "770" . $prueba."  "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 4) { 
         fwrite($archivo,"0". $nrocuenta."0000000". $totalcobra . $tipocuenta . "770" . $prueba."  "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 5) {
         fwrite($archivo,"0". $nrocuenta."000000". $totalcobra . $tipocuenta . "770" . $prueba."  "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 6) {
         fwrite($archivo,"0". $nrocuenta."00000". $totalcobra . $tipocuenta . "770" . $prueba."  "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 7) {
         fwrite($archivo,"0". $nrocuenta."0000". $totalcobra . $tipocuenta . "770" . $prueba."  "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 8) {
         fwrite($archivo,"0". $nrocuenta."000". $totalcobra . $tipocuenta . "770" . $prueba."  "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 9) {
         fwrite($archivo,"0". $nrocuenta."00". $totalcobra . $tipocuenta . "770" . $prueba."  "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 10) {
         fwrite($archivo,"0". $nrocuenta."0". $totalcobra . $tipocuenta . "770" . $prueba."  "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 11) {
         fwrite($archivo,"0". $nrocuenta."". $totalcobra . $tipocuenta . "770" . $prueba."  "."00". $cedula."003291" . "\n");
      }

   }else{
      if (strlen($totalcobra) == 1) {
         fwrite($archivo,"0". $nrocuenta."0000000000". $totalcobra . $tipocuenta . "770" . $prueba." "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 2) {
         fwrite($archivo,"0". $nrocuenta."000000000". $totalcobra . $tipocuenta . "770" . $prueba." "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 3) {
         fwrite($archivo,"0". $nrocuenta."00000000". $totalcobra . $tipocuenta . "770" . $prueba." "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 4) {
         fwrite($archivo,"0". $nrocuenta."0000000". $totalcobra . $tipocuenta . "770" . $prueba." "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 5) {
         fwrite($archivo,"0". $nrocuenta."000000". $totalcobra . $tipocuenta . "770" . $prueba." "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 6) {
         fwrite($archivo,"0". $nrocuenta."00000". $totalcobra . $tipocuenta . "770" . $prueba." "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 7) {
         fwrite($archivo,"0". $nrocuenta."0000". $totalcobra . $tipocuenta . "770" . $prueba." "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 8) {
         fwrite($archivo,"0". $nrocuenta."000". $totalcobra . $tipocuenta . "770" . $prueba." "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 9) {
         fwrite($archivo,"0". $nrocuenta."00". $totalcobra . $tipocuenta . "770" . $prueba." "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 10) {
         fwrite($archivo,"0". $nrocuenta."0". $totalcobra . $tipocuenta . "770" . $prueba." "."00". $cedula."003291" . "\n");
      }elseif(strlen($totalcobra) == 11) {
         fwrite($archivo,"0". $nrocuenta."". $totalcobra . $tipocuenta . "770" . $prueba." "."00". $cedula."003291" . "\n");
      }
   }
   }


   } 

 }}}}
 



fclose($archivo);

mysqli_close($conexion);
echo "<script>alert('El archivo txt ha sido generado con exito.'); window.location= 'nomina.php';</script>";






