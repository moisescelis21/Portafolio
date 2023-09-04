<?php
session_start();
if (!isset($_SESSION["cedula"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'login.php';</script>";
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>NOMINA PENSIONADOS</title>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/png" href="img/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div style="font-size: 10px;">
	<center><img src="img/logo.jpeg" style="height: 100px; width: 100px; "></center>


  <?php
  $dia = 0;
  $mes = 0;
  $ano = 0;
  $correlativo = $_GET['correlativo'];
    $conexion=mysqli_connect('localhost','root','','procuraduria');
    $sql4="SELECT * FROM nominas WHERE correlativo='$correlativo'";
    $result4=mysqli_query($conexion,$sql4);
    while($mostrar4=mysqli_fetch_array($result4)){
      $periodo = $mostrar4['periodo'];
      $dia = date("d", strtotime($periodo));
      $mes = date("m", strtotime($periodo));
      $ano = date("Y", strtotime($periodo));
      $meses = array("ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBREs");
      $mes3 = $meses[$mes-1];



   ?>
   
  <?php if ($periodo == "15-$mes-$ano"){ ?>
  <center><h1 style="color: red;">NOMINA PRIMERA QUINCENA <?php echo $mes3 ?>  </h1></center>
  <?php }else{ ?>
  <center><h1 style="color: red;">NOMINA SEGUNDA QUINCENA <?php echo $mes3 ?>  </h1></center>
  <?php } ?>
  <?php } ?>
 
     
<div> <?php require('./pensionados.php') ?> </div>
  <br>
  <div> <?php require('./jubilados.php') ?> </div>
  <br>

























