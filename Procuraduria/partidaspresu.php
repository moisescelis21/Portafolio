<?php
session_start();
if (!isset($_SESSION["cedula"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'login.php';</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>PARTIDAS PRESUPUESTARIAS </title>
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
  $periodo = 0;
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
                        <th colspan="3">PAGO MEDIANTE TXT</th>
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
    $suelaltofunci = 0;
    $primprofalto = 0;
    $primantalto = 0;
    $suelttotalalto = 0;
    $suelaltonivel = 0;
    $primprofaltonivel = 0;
    $primantaltonivel = 0;
    $primhijosaltonivel = 0;
    $suelttotalaltonivel = 0;
    $suelempleado = 0;
    $primprofempleado = 0;
    $primantempleado = 0;
    $primhijosempleado = 0;
    $suelttotalempleado = 0;
    $suelobrero = 0;
    $primantobrero = 0;
    $suelttotalobrero = 0;
    $suelservicio = 0;
    $suelpension = 0;
    $sueljubilacion = 0;
    $sueltotalpenjubila = 0;
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
    $montostotales = round($montostotales + $sueldototal4,2);




    if($nomina == "Alto Funcionario"){
      $suelaltofunci = $suelaltofunci + $sueldototal6;
      $primprofalto =  ($primprofalto + $primprofesion2);
      $primantalto =  ($primantalto + $primantiguedad2);
      $suelttotalalto = $suelaltofunci + $primprofalto +  $primantalto;
  }
  if($nomina == "Alto Nivel"){
  $primprofaltonivel =  ($primprofaltonivel + $primprofesion2);
      $primantaltonivel =  ($primantaltonivel + $primantiguedad2);
      $primhijosaltonivel =  ($primhijosaltonivel + $primhijos2);
  if($cedula != "18237190"){
      $suelaltonivel = ($suelaltonivel + $sueldototal6);
      
      
  }
  $suelttotalaltonivel = ($suelaltonivel + $primprofaltonivel +  $primantaltonivel + $primhijosaltonivel);
  }
  if($nomina == "Empleado"){
      $suelempleado = ($suelempleado + $sueldototal6);
      $primprofempleado =  ($primprofempleado + $primprofesion2);
      $primantempleado =  ($primantempleado + $primantiguedad2);
      $primhijosempleado =  ($primhijosempleado + $primhijos2);
      $suelttotalempleado = ($suelempleado + $primprofempleado +  $primantempleado + $primhijosempleado);

  }
  if($nomina == "Obrero"){
      $suelobrero = ($suelobrero + $sueldototal6);
      $primantobrero =  ($primantobrero + $primantiguedad2);
      $suelttotalobrero = ($suelobrero +  $primantobrero);

  }
  if($nomina == "Pension"){
      $suelpension = ($suelpension + $sueldo);


  }
  if($nomina == "Jubilacion"){
    if ($cedula != "8874124" AND $cedula != "8878329") {
      $sueljubilacion = ($sueljubilacion + $sueldo);
    }


  }
  if($cedula == "18237190"){
      $suelservicio = ($suelservicio + $sueldototal6);


  }

 

    $sueldototal5 = round($quincena + $asignaciones3 - $deducciones2,2);



     ?>

<?php }}}} ?>
<?php

$suelttotalobrero = ($suelobrero +  $primantobrero);

$suelaltonivel=$suelaltonivel;



$suelttotalempleado = ($suelempleado + $primprofempleado +  $primantempleado + $primhijosempleado);
$sueltotalpenjubila = ($suelpension + $sueljubilacion + $suelservicio);



$suelttotalaltonivel = ($suelaltonivel + $primprofaltonivel +  $primantaltonivel + $primhijosaltonivel);


if ($periodo == "15-$mes-$ano"){
$totalnomina = $suelttotalaltonivel +  $suelttotalempleado + $suelttotalobrero + $suelservicio + $suelttotalalto;
}else{
  $totalnomina = $suelttotalaltonivel +  $suelttotalempleado + $suelttotalobrero + $sueltotalpenjubila + $suelttotalalto;
}
 ?>

  
                    <tr>
                        <td colspan="1" style="" >401 01 35 00 00</td>
                        <td colspan="1" style="">SALARIO DE ALTOS FUNCIONARIOS</td>
                        <td colspan="1" style="" align="right"><?php echo $suelaltofunci ?></td>
                    </tr>
                    <tr>
                        <td colspan="1" style="" >401 03 43 00 00</td>
                        <td colspan="1" style="">PRIMA DE PROFESIONALIZACIÓN ALTOS FUNCIONARIOS</td>
                        <td colspan="1" style="" align="right"><?php echo $primprofalto ?></td>
                    </tr>
                    <tr>
                        <td colspan="1" style="" >401 03 44 00 00</td>
                        <td colspan="1" style="">PRIMA DE ANTIGÜEDAD ALTOS FUNCIONARIOS</td>
                        <td colspan="1" style="" align="right"><?php echo $primantalto ?></td>
                    </tr>
                    <tr>
                        <td colspan="2" style=""align="right">ALTOS FUNCIONARIOS</td>
                        <td colspan="1" style="" align="right"><?php echo $suelttotalalto ?></td>
                        
                    </tr>





                    <tr>
                        <td colspan="1" style="" >401 01 36 00 00</td>
                        <td colspan="1" style="">SUELDO PERSONAL DE ALTO NIVEL Y DIRECCION</td>
                        <td colspan="1" style="" align="right"><?php echo number_format($suelaltonivel,2) ?></td>
                    </tr>
                    <tr>
                        <td colspan="1" style="" >401 03 45 00 00</td>
                        <td colspan="1" style="">PRIMA POR HIJOS ALTO NIVEL</td>
                        <td colspan="1" style="" align="right"><?php echo number_format($primhijosaltonivel,2) ?></td>
                    </tr>
                    <tr>
                        <td colspan="1" style="" >401 03 95 00 00</td>
                        <td colspan="1" style="">PRIMA POR PROFESIONALIZACIÓN ALTO NIVEL</td>
                        <td colspan="1" style=""align="right" ><?php echo number_format($primprofaltonivel,2) ?></td>
                    </tr>
                    <tr>
                        <td colspan="1" style="" >401 03 49 00 00</td>
                        <td colspan="1" style="">PRIMA DE ANTIGÜEDAD ALTO NIVEL</td>
                        <td colspan="1" style="" align="right"><?php echo number_format($primantaltonivel,2) ?></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="" align="right">ALTO NIVEL</td>
                        <td colspan="1" style="" align="right"><?php echo number_format($suelttotalaltonivel,2) ?></td>
                        
                    </tr>




                    <tr>
                        <td colspan="1" style="" >401 01 01 00 00</td>
                        <td colspan="1" style="">SUELDO A PERSONAL FIJO EMPLEADO</td>
                        <td colspan="1" style="" align="right"><?php echo number_format($suelempleado,2); ?></td>
                    </tr>
                    <tr>
                        <td colspan="1" style="" >401 03 04 00 00</td>
                        <td colspan="1" style="">PRIMA POR HIJOS</td>
                        <td colspan="1" style="" align="right"><?php echo number_format($primhijosempleado,2); ?></td>
                    </tr>
                    <tr>
                        <td colspan="1" style="" >401 03 08 00 00</td>
                        <td colspan="1" style="" >PRIMA POR PROFESIONALIZACIÓN</td>
                        <td colspan="1" style="" align="right"><?php echo number_format($primprofempleado,2); ?></td>
                    </tr>
                    <tr>
                        <td colspan="1" style="" >401 03 09 00 00</td>
                        <td colspan="1" style="">PRIMA DE ANTIGÜEDAD</td>
                        <td colspan="1" style=""align="right" ><?php echo number_format($primantempleado,2); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="" align="right">EMPLEADOS</td>
                        <td colspan="1" style="" align="right"><?php echo number_format($suelttotalempleado,2); ?></td>
                        
                    </tr>
                    <tr>
                        <td colspan="1" style="" >401 01 01 00 00</td>
                        <td colspan="1" style="" >SUELDO A PERSONAL FIJO OBREROS</td>
                        <td colspan="1" style="" align="right"><?php echo number_format($suelobrero,2); ?></td>
                    </tr>
                    <tr>
                        <td colspan="1" style="" >401 03 09 00 00</td>
                        <td colspan="1" style="">PRIMA DE ANTIGÜEDAD OBREROS</td>
                        <td colspan="1" style="" align="right"><?php echo number_format($primantobrero,2); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="" align="right">OBREROS</td>
                        <td colspan="1" style="" align="right"><?php echo number_format($suelttotalobrero,2); ?></td>
                        
                    </tr>

                    <tr>
                        <td colspan="1" style="" >401 04 49 00 00</td>
                        <td colspan="1" style="" >COMPLEMENTO AL PERSONAL DE ALTO NIVEL Y DE DIRECCIÓN POR COMISIÓN DE SERVICIO</td>
                        <td colspan="1" style="" align="right"><?php echo number_format($suelservicio,2); ?></td>
                    </tr>

                    
                    <?php if ($periodo == "15-$mes-$ano"){ ?>
                    <tr>
                        <td colspan="2" style="" align="right">COMISIÓN DE SERVICIOS</td>
                        <td colspan="1" style="" align="right"><?php echo number_format($suelservicio,2); ?></td>
                        
                    </tr>
                    
                    <?php }else{ ?>
                    <tr>
                        <td colspan="1" style="" >407 01 01 01 00</td>
                        <td colspan="1" style="" align="">PENSIONADOS</td>
                        <td colspan="1" style="" align="right"><?php echo number_format($suelpension,2); ?></td>
                        
                    </tr>
                    <tr>
                        <td colspan="1" style="" >407 01 01 02 00</td>
                        <td colspan="1" style="" align="">JUBILADOS</td>
                        <td colspan="1" style="" align="right"><?php echo number_format($sueljubilacion,2); ?></td>
                        
                    </tr>
                    <tr>
                        <td colspan="3" style="" align="right"><?php echo number_format($sueltotalpenjubila,2); ?></td>
                        
                    </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="2" style="" align="right">TOTAL NÓMINA DEPOSITADA MEDIANTE TXT Bs.</td>
                        <td colspan="1" style=""  align="right"><?php echo number_format($totalnomina,2); ?></td>
                        
                    </tr>
                    
                </tbody>
            </table>





















