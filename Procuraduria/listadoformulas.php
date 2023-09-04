<?php
session_start();
if (!isset($_SESSION["cedula"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'login.php';</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>LISTADO DE FORMULAS</title>
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
     <table style="width: 100%;" border="1">
                <thead>
                    <tr>
                        <th>Apellidos y Nombres</th>
                        <th>Sueldo</th>
                        <th>15 dias</th>
                        <th>Sueldo - deducciones</th>

                        <th>Primas Mensuales</th>
                        <th>Primas 15 dias</th>

                        <th>Primas por Hijos</th>
                        <th>Primas por Hijos 15 dias</th>
                        <th>Deducciones</th>
                        <th>Monto total a Pagar</th>
    
                    </tr>
                </thead>
                <tbody>
    <?php
    $sueldo2 = 0;
    $sueldomd = 0;
    $sueldo15 = 0;
    $primas15 = 0;
    $primas30 = 0;
    $primashijos = 0;
    $primashijos30 = 0;
    $deducciones3 = 0;
    $montostotales = 0;
    $correlativo = $_GET['correlativo'];
    $conexion=mysqli_connect('localhost','root','','procuraduria');
    $sql2="SELECT * FROM nominapersonal WHERE correlativo='$correlativo'";
    $result2=mysqli_query($conexion,$sql2);

    while($mostrar2=mysqli_fetch_array($result2)){
      $cedula2 = $mostrar2['cedula'];
      $diastrabajados = $mostrar2['diastrabajados'];



   $sql="SELECT * FROM trabajadores WHERE cedula='$cedula2'";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
      $id = $mostrar['id']; 
      $nombres = $mostrar['nombres'];
      $apellidos = $mostrar['apellidos'];
      $cedula = $mostrar['cedula'];
      $nomina = $mostrar['nomina'];
      



$sql8="SELECT * FROM primaspersonal WHERE cedula='$cedula2'";
    $result8=mysqli_query($conexion,$sql8);
    while($mostrar8=mysqli_fetch_array($result8)){
      $profesion = $mostrar8['profesion'];
      $antiguedad = $mostrar8['antiguedad'];
      $hijos = $mostrar8['hijos'];

$sql9="SELECT * FROM montos WHERE cedula='$cedula2'";
    $result9=mysqli_query($conexion,$sql9);
    while($mostrar9=mysqli_fetch_array($result9)){
      $sueldo = $mostrar9['sueldo'];

                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql8="SELECT * FROM primprofesion";
                        $result8=mysqli_query($conexion,$sql8);

                        while($mostrar8=mysqli_fetch_array($result8)){
                            $id = $mostrar8['id'];
                            $profesion2 = $mostrar8['profesion'];

                            if ($profesion == $profesion2) {
                              $profesion5 = $mostrar8['porcentaje'];
                              
                            }
                            
                            
}
 
                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql9="SELECT * FROM primantiguedad";
                        $result9=mysqli_query($conexion,$sql9);

                        while($mostrar9=mysqli_fetch_array($result9)){
                            $id = $mostrar9['id'];
                            $tiempo = $mostrar9['tiempo'];
      
                            if ($tiempo == $antiguedad) {
                              $antiguedad5 = $mostrar9['porcentaje'];

                            }
                          

                        } 

     ?>
<?php

    $mesprueba = date('m');
    $anoprueba = date('Y');
    $lunes = 0;
    $dia2 = 0;
    $maximodias = cal_days_in_month(CAL_GREGORIAN,$mes,$ano);
    while ($dia2 < $maximodias) {
    $dia3 = utf8_encode(strftime("%A", strtotime($ano . '-' . $mes . '-' . $dia2)));
    $dia2++;
    if ($dia3 == "Monday") {
      $lunes++;
    }
    }
    if ($mesprueba == "8" AND $anoprueba == "2023"){
      $lunes = 4;
    }
      $quincena = ($sueldo / 30)*$diastrabajados;
      $primantiguedad = round($sueldo * ($antiguedad5/100),2);
      $primprofesion = round($sueldo * ($profesion5/100),2);
      $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql6="SELECT * FROM primhijos";
                        $result6=mysqli_query($conexion,$sql6);
                        $valor = 0;
                        while($mostrar6=mysqli_fetch_array($result6)){
                            $id = $mostrar6['id'];
                            $valor = $mostrar6['valor'];
      

                              
                        }
 
      $primhijos = $hijos * $valor;


      $asignaciones = ($primantiguedad + $primprofesion + $primhijos) / 2;
      $asignaciones2 = ($primantiguedad + $primprofesion + $primhijos);
      $asignaciones6 = ($primantiguedad + $primprofesion);
      
      $sueldototal2 = $sueldo + $asignaciones2;

      $bonovacacional = round((145/360)*($sueldototal2/30),2);
      $aguinaldo = round((120/360)*($sueldototal2/30),2);
      $salariointegral = round((($sueldototal2/30) + $bonovacacional + $aguinaldo)*30,2);
      $PH = $salariointegral * 0.01;
      $aportePH = round($salariointegral * 0.02,2);
      $IVSS = round(((($sueldo * 12)/52)*0.04)*$lunes,2);
      $aporteIVSS = round(((($sueldo * 12)/52)*0.09)*$lunes,2);
      $RPE = ((($sueldo*12)/52)*0.005)*$lunes;
      $aporteRPE = round(((($sueldo*12)/52)*0.02)*$lunes,2);
      $pensionjubilacion = round($sueldototal2 * 0.03,2);
      $aportepension = round($sueldototal2 * 0.03,2);
      $primprofesion2 = round(($primprofesion/30)*$diastrabajados,2); 
      $deducciones = round(($PH + $IVSS + $RPE + $pensionjubilacion)/2,2);
      $sueldototal = round($quincena + $asignaciones - $deducciones,2);


      $primantiguedad2 = round(($primantiguedad/30)*$diastrabajados,2);
      $primprofesion2 = round(($primprofesion/30)*$diastrabajados,2);
      $primhijos2 = round(($primhijos/30)*$diastrabajados,2);
      $asignaciones3 = round($primantiguedad2 + $primprofesion2 + $primhijos2,2);
      $asignaciones4 = round($primantiguedad2 + $primprofesion2,2);

      $PH2 = $PH/2;
      $IVSS2 = $IVSS/2;
      $RPE2 = $RPE/2;
      $pensionjubilacion2 = $pensionjubilacion/2;
      $deducciones2 = round($PH2 + $IVSS2 + $RPE2 + $pensionjubilacion2,2);




      $sueldototal3 = round($quincena + $asignaciones3,2);

    if ($nomina == "Pension" OR $nomina == "Jubilacion") {
    if ($cedula != "8874124" AND $cedula != "8878329") {
    $sueldototal4 = $sueldo;
    $sueldototal6 = 0;
    $sueldo2 = round($sueldo2 + $sueldo,2);
    $sueldomd = round($sueldomd + $sueldototal6,2);
    $sueldo15 = round($sueldo15 + 0,2);
    $primas15 = $primas15 + 0;
    $primas30 = $primas30 + 0;
    $primashijos = round($primashijos + 0,2);
    $primashijos30 = round($primashijos30 + 0,2);
    $deducciones3 = round($deducciones3 + 0,2);
    
  }}else{
  $sueldototal4 = $quincena + $asignaciones3 - $deducciones2;
    $sueldototal6 = round($quincena - $deducciones,2);
    $sueldo2 = round($sueldo2 + $sueldo,2);
    $sueldomd = round($sueldomd + $sueldototal6,2);
    $sueldo15 = round($sueldo15 + $quincena,2);
    $primas15 = $primas15 + $asignaciones4;
    $primas30 = $primas30 + $asignaciones6;
    $primashijos = round($primashijos + $primhijos2,2);
    $primashijos30 = round($primashijos30 + $primhijos,2);
    $deducciones3 = round($deducciones3 + $deducciones2,2);
    
}
if ($cedula != "8874124" AND $cedula != "8878329") {
$montostotales = round($montostotales + $sueldototal4,2);
}
    $sueldototal5 = round($quincena + $asignaciones3 - $deducciones2,2);

     ?>



                  <?php
                  if ($nomina == "Pension" OR $nomina == "Jubilacion") {
                  if ($cedula != "8874124" AND $cedula != "8878329") {
                   ?>
                    <tr>
                        <td style="" ><?php echo $apellidos; ?> <?php echo $nombres; ?></td>
                        <td style="" align="right"><?php echo number_format($sueldo,2); ?></td>
                        <td style=""align="right"><?php echo number_format(0,2) ?></td>
                        <td style=""align="right"><?php echo number_format($sueldototal6,2) ?></td>
               
                        <td style=""align="right"><?php echo number_format($asignaciones6,2) ?></td>
                        <td style="" align="right"><?php echo number_format($asignaciones4,2); ?></td>
                 
                        <td style=""align="right"><?php echo number_format($primhijos,2) ?></td>
                        <td style=""align="right"><?php echo number_format($primhijos2,2) ?></td>
                        <td style=""align="right"><?php echo number_format(0,2) ?></td>
                        <td style=""align="right"><?php echo number_format($sueldototal4,2) ?></td>
                    </tr>
                    <?php }}else{ ?>
                    <tr>
                        <td style="" ><?php echo $apellidos; ?> <?php echo $nombres; ?></td>
                        <td style="" align="right"><?php echo number_format($sueldo,2); ?></td>
                        <td style=""align="right"><?php echo number_format($quincena,2) ?></td>
                        <td style=""align="right"><?php echo number_format($sueldototal6,2) ?></td>
                    
                        <td style=""align="right"><?php echo number_format($asignaciones6,2) ?></td>
                        <td style="" align="right"><?php echo number_format($asignaciones4,2); ?></td>
                      
                        <td style=""align="right"><?php echo number_format($primhijos,2) ?></td>
                        <td style=""align="right"><?php echo number_format($primhijos2,2) ?></td>
                        <td style=""align="right"><?php echo number_format($deducciones2,2) ?></td>
                        <td style=""align="right"><?php echo number_format($sueldototal4,2) ?></td>
                    </tr>



                    <?php } ?>

                    <?php }}}} ?>
                    <tr>
                        <td style="border: none"></td>
                        <td style=""align="right"><?php echo number_format($sueldo2,2); ?></td>
                        <td style=""align="right"><?php echo number_format($sueldo15,2); ?></td>
                        <td style=""align="right"><?php echo number_format($sueldomd,2); ?></td>
                        
                        <td style=""align="right"><?php echo number_format($primas30,2) ?></td>
                        <td style=""align="right"><?php echo number_format($primas15,2) ?></td>
    
                        <td style=""align="right"><?php echo number_format($primashijos30,2) ?></td>
                        <td style=""align="right"><?php echo number_format($primashijos,2) ?></td>
                        <td style=""align="right"><?php echo number_format($deducciones3,2) ?></td>
                        <td style=""align="right"><?php echo number_format($montostotales,2) ?></td>
                    </tr>
                </tbody>
            </table>





















