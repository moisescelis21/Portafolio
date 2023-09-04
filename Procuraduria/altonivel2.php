<?php

if (!isset($_SESSION["cedula"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'login.php';</script>";
  }
?>
     
    <table style="width: 100%;" border="1">
                    <tr>
                      <th colspan="3">A PAGAR</th>
                      <th colspan="2">NOMINA ALTO NIVEL</th>
                      <th colspan="10">RETENCIONES AL PERSONAL ALTO NIVEL</th>
                      <th colspan="4">ASIGNACIONES AL PERSONAL ALTO NIVEL</th>
                      
                    </tr>
                       <tr>
                        <td><strong>ASIGNAC.</strong></td>
                        <td><strong>DEDUC.</strong></td>
                        <td><strong>TOTAL PAGAR</strong></td>
                        <td><strong>Apellidos y Nombres</strong></td>
                        <td><strong>Salario Normal</strong></td>
                        <td><strong>R.P.V.H</strong></td>
                        <td><strong>Aporte R.P.V.H</strong></td>
                        <td><strong>SEM</strong></td>
                        <td><strong>SSO</strong></td>
                        <td><strong>APOR SSO</strong></td>
                        <td><strong>RPE</strong></td>
                        <td><strong>APOR RPE</strong></td>
                        <td><strong>Pen. Y Jub.</strong></td>
                        <td><strong>Apor PenJub</strong></td>
                        <td><strong>TOTAL DEDUCC.</strong></td>
                        <td><strong>PRIMA PROFES.</strong></td>
                        <td><strong>PRIMA HIJOS</strong></td>
                        <td><strong>PRIMA ANTIG.</strong></td>
                        <td><strong>TOTAL ASIGNAC.</strong></td>
    
                    </tr>        
    <?php
    $asignacionestotales = 0;
    $deduccionestotales = 0;
    $sueldototales = 0;
    $sueldototales2 = 0;
    $phtotales = 0;
    $ph2totales = 0;
    $ivsstotales = 0;
    $ivsstotales2 = 0;
    $rpetotales = 0;
    $rpetotales2 = 0;
    $pensionjubilaciontotales = 0;
    $pensionjubilaciontotales2 = 0;
    $deduccionestotales2 = 0;
    $primprofesiontotales = 0;
    $primhijostotales = 0;
    $primantiguedadtotales = 0;
    $asignacionestotales2 = 0;
    $montostotales = 0;
    $cantidad = 0;
    $correlativo = $_GET['correlativo'];
    $conexion=mysqli_connect('localhost','root','','procuraduria');
    $sql2="SELECT * FROM nominapersonal WHERE correlativo='$correlativo'";
    $result2=mysqli_query($conexion,$sql2);

    while($mostrar2=mysqli_fetch_array($result2)){
      $cedula2 = $mostrar2['cedula'];
      $diastrabajados = $mostrar2['diastrabajados'];



    $sql="SELECT * FROM trabajadores WHERE cedula='$cedula2' AND nomina ='Alto Nivel'";
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

    
$mes = date('m');
$ano = date('Y');
$lunes = 0;
$dia2 = 0;
$maximodias = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);
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


    $asignacionestotales = round($asignacionestotales + $asignaciones3,2);
    $deduccionestotales = round($deduccionestotales + $deducciones2,2);
    $sueldototales = round($sueldototales + $sueldototal4,2);
    $sueldototales2 = round($sueldototales2 + $sueldototal2,2);
    $phtotales = round($phtotales + $PH,2);
    $ph2totales = round($ph2totales + $aportePH,2);
    $ivsstotales = round($ivsstotales + $IVSS,2);
    $ivsstotales2 = round($ivsstotales2 + $aporteIVSS,2);
    $rpetotales = round($rpetotales + $RPE,2);
    $rpetotales2 = round($rpetotales2 + $aporteRPE,2);
    $pensionjubilaciontotales = round($pensionjubilaciontotales + $pensionjubilacion,2);
    $pensionjubilaciontotales2 = round($pensionjubilaciontotales2 + $aportepension,2);
    $deduccionestotales2 = round($deduccionestotales2 + $deducciones2,2);
    $primprofesiontotales = round($primprofesiontotales + $primprofesion2,2);
    $primhijostotales = round($primhijostotales + $primhijos2,2);
    $primantiguedadtotales = round($primantiguedadtotales + $primantiguedad2,2);
    $asignacionestotales2 = round($asignacionestotales2 + $asignaciones3,2);


    $montostotales = round($montostotales + $sueldototal4,2);
    $sueldototal5 = round($quincena + $asignaciones3 - $deducciones2,2);
    $cantidad = $cantidad + 1;


     ?>   


                    
                    
                      <tr>
                        <td style="font-size: 9px" align="right"><?php echo number_format($asignaciones3,2) ?></td>
                        <td style="font-size: 9px" align="right"><?php echo number_format($deducciones2,2); ?></td>
                        <td style="font-size: 9px" align="right"><?php echo number_format($sueldototal4,2) ?></td>
                        <td style="font-size: 9px" align="center"><?php echo $apellidos ?> <?php echo $nombres ?></td>
                        <td style="font-size: 9px" align="right"><?php echo number_format($sueldototal2,2) ?></td>
                        <td style="font-size: 9px" align="right"><?php echo number_format($PH,2) ?></td>
                        <td style="font-size: 9px" align="right"><?php echo number_format($aportePH,2) ?></td>
                        <td style="font-size: 9px" align="right"><?php echo $lunes ?></td>
                        <td style="font-size: 9px" align="right"><?php echo number_format($IVSS,2) ?></td>
                        <td style="font-size: 9px" align="right"><?php echo number_format($aporteIVSS,2) ?></td>
                        <td style="font-size: 9px" align="right"><?php echo number_format($RPE,2) ?></td>
                        <td style="font-size: 9px" align="right"><?php echo number_format($aporteRPE,2) ?></td>
                        <td style="font-size: 9px" align="right"><?php echo number_format($pensionjubilacion,2) ?></td>
                        <td style="font-size: 9px" align="right"><?php echo number_format($aportepension,2) ?></td>
                        <td style="font-size: 9px" align="right"><?php echo number_format($deducciones2,2) ?></td>
                        <td style="font-size: 9px" align="right"><?php echo number_format($primprofesion2,2) ?></td>
                        <td style="font-size: 9px" align="right"><?php echo number_format($primhijos2,2) ?></td>
                        <td style="font-size: 9px" align="right"><?php echo number_format($primantiguedad2,2) ?></td>
                        <td style="font-size: 9px" align="right"><?php echo number_format($asignaciones3,2) ?></td>

                    </tr>
                      
                    <?php }}}} ?>
                    <tr>
                        <td style="" align="right"><?php echo number_format($asignacionestotales,2); ?></td>
                        <td style=""align="right"><?php echo number_format($deduccionestotales,2); ?></td>
                        <td style=""align="right"><?php echo number_format($sueldototales,2); ?></td>
                        <td style=""align="right"></td>
                        <td style=""align="right"><?php echo number_format($sueldototales2,2); ?></td>
                        <td style=""align="right"><?php echo number_format($phtotales,2); ?></td>
                        <td style=""align="right"><?php echo number_format($ph2totales,2) ?></td>
                        <td style=""align="right"></td>
                        <td style=""align="right"><?php echo number_format($ivsstotales,2) ?></td>
                        <td style=""align="right"><?php echo number_format($ivsstotales2,2) ?></td>
                        <td style=""align="right"><?php echo number_format($rpetotales,2) ?></td>
                        <td style=""align="right"><?php echo number_format($rpetotales2,2) ?></td>
                        <td style=""align="right"><?php echo number_format($pensionjubilaciontotales,2) ?></td>
                        <td style=""align="right"><?php echo number_format($pensionjubilaciontotales2,2) ?></td>
                        <td style=""align="right"><?php echo number_format($deduccionestotales2,2) ?></td>
                        <td style=""align="right"><?php echo number_format($primprofesiontotales,2) ?></td>
                        <td style=""align="right"><?php echo number_format($primhijostotales,2) ?></td>
                        <td style=""align="right"><?php echo number_format($primantiguedadtotales,2) ?></td>
                        <td style=""align="right"><?php echo number_format($asignacionestotales2,2) ?></td>
                    </tr>    
            </table>
</br></br></br>