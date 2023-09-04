<?php

if (!isset($_SESSION["cedula"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'login.php';</script>";
  }
?>
     
    <table style="width: 100%;" border="1">
                    <tr>
                      <th colspan="8">NOMINA OBREROS</th>
                      <th colspan="11">SUELDOS Y SALARIOS</th>
                      <th colspan="1">MONTO</th>
                    </tr>
                    <tr>
                        <th style="font-size: 9px">COD</th>
                        <th style="font-size: 9px">Apellidos y Nombres</th>
                        <th style="font-size: 9px">Cedula</th>
                        <th style="font-size: 9px">Cargo</th>
                        <th style="font-size: 9px">Adscripcion</th>
                        <th style="font-size: 9px">Status</th>
                        <th style="font-size: 9px">Fecha Ingreso</th>
                        <th style="font-size: 9px">Sueldo Basico</th>
                        <th style="font-size: 9px">% Profes</th>
                        <th style="font-size: 9px">Prim Profes</th>
                        <th style="font-size: 9px">N° Hijos</th>
                        <th style="font-size: 9px">Primas Hijos</th>
                        <th style="font-size: 9px">% Antiguedad</th>
                        <th style="font-size: 9px">Prima Antig</th>
                        <th style="font-size: 9px">Salario Normal</th>
                        <th style="font-size: 9px">BONO VACAC.</th>
                        <th style="font-size: 9px">ALIC. AGUIN.</th>
                        <th style="font-size: 9px">SALARIO INTEGRAL </th>
                        <th style="font-size: 9px">DIAS LABORA</th>
                        <th style="font-size: 9px">SUELDO QUINCENAL</th>
                     </tr>   

    <?php
    $sueldobasicototal = 0;
    $primaprofesiontotales = 0;
    $primaprofesiontotales2 = 0;
    $hijostotales = 0;
    $primahijostotales = 0;
    $primantiguedadtotales = 0;
    $primantiguedadtotales2 = 0;
    $salarionormaltotales = 0;
    $vacacionestotales = 0;
    $aguinaldototales = 0;
    $salariointegraltotales = 0;
    $quincenatotales = 0;
    $cantidad = 0;
    $correlativo = $_GET['correlativo'];
    $conexion=mysqli_connect('localhost','root','','procuraduria');
    $sql2="SELECT * FROM nominapersonal WHERE correlativo='$correlativo'";
    $result2=mysqli_query($conexion,$sql2);

    while($mostrar2=mysqli_fetch_array($result2)){
      $cedula2 = $mostrar2['cedula'];
      $diastrabajados = $mostrar2['diastrabajados'];



    $sql="SELECT * FROM trabajadores WHERE cedula='$cedula2' AND nomina ='Obrero'";
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


    $sueldobasicototal = $sueldobasicototal + $sueldo;
    $primaprofesiontotales = $primaprofesiontotales + $profesion5;
    $primaprofesiontotales2 = $primaprofesiontotales2 + $primprofesion;
    $hijostotales = $hijostotales + $hijos;
    $primahijostotales = $primahijostotales + $primhijos;
    $primantiguedadtotales = $primantiguedadtotales + $antiguedad5;
    $primantiguedadtotales2 = $primantiguedadtotales2 + $primantiguedad;
    $salarionormaltotales = $salarionormaltotales + $sueldototal2;
    $vacacionestotales = $vacacionestotales + $bonovacacional;
    $aguinaldototales = $aguinaldototales + $aguinaldo;
    $salariointegraltotales = $salariointegraltotales + $salariointegral;
    $quincenatotales = $quincenatotales + $quincena;

    $cantidad = $cantidad + 1;


     ?> 

                    
                    <tr>
                        <td style="font-size: 9px" ><?php echo $cantidad; ?></td>
                        <td style="font-size: 9px" align="center" ><?php echo $apellidos; ?> <?php echo $nombres; ?></td>
                        <td style="font-size: 9px" align="right"><?php echo $cedula; ?></td>
                        <td style="font-size: 9px " align="center"><?php echo $cargo ?></td>
                        <td style="font-size: 9px"align="center"><?php echo $adscrito ?></td>
                        <td style="font-size: 9px"align="right"><?php echo $nomina ?></td>
                        <td style="font-size: 9px"align="right"><?php echo $fechresolucion ?></td>
                        <td style="font-size: 9px" align="right"><?php echo number_format($sueldo,2); ?></td>
                        <td style="font-size: 9px"align="right"><?php echo $profesion5 ?></td>
                        <td style="font-size: 9px"align="right"><?php echo number_format($primprofesion,2) ?></td>
                        <td style="font-size: 9px"align="right"><?php echo $hijos ?></td>
                        <td style="font-size: 9px"align="right"><?php echo number_format($primhijos,2) ?></td>
                        <td style="font-size: 9px"align="right"><?php echo $antiguedad5 ?></td>
                        <td style="font-size: 9px" ><?php echo number_format($primantiguedad,2); ?></td>
                        <td style="font-size: 9px" ><?php echo number_format($sueldototal2,2); ?></td>
                        <td style="font-size: 9px" ><?php echo number_format($bonovacacional,2); ?></td>
                        <td style="font-size: 9px" align="right"><?php echo number_format($aguinaldo,2); ?></td>
                        <td style="font-size: 9px"align="right"><?php echo number_format($salariointegral,2) ?></td>
                        <td style="font-size: 9px"align="right"><?php echo $diastrabajados ?></td>
                        <td style="font-size: 9px"align="right"><?php echo number_format($quincena,2) ?></td>
                        
                      </tr>
                       
                    <?php }}}} ?>
                    <tr>
                        <td style="border: none"></td>
                        <td style="border: none"></td>
                        <td style="border: none"></td>
                        <td style="border: none"></td>
                        <td style="border: none"></td>
                        <td style="border: none"></td>
                        <td style="border: none"></td>
                        <td style=""align="right"><?php echo number_format($sueldobasicototal,2); ?></td>
                        <td style=""align="right"><?php echo number_format($primaprofesiontotales,2); ?></td>
                        <td style=""align="right"><?php echo number_format($primaprofesiontotales2,2); ?></td>
                        <td style=""align="right"><?php echo number_format($hijostotales,2); ?></td>
                        <td style=""align="right"><?php echo number_format($primahijostotales,2) ?></td>
                        <td style=""align="right"><?php echo number_format($primantiguedadtotales,2) ?></td>
                        <td style=""align="right"><?php echo number_format($primantiguedadtotales2,2) ?></td>
                        <td style=""align="right"><?php echo number_format($salarionormaltotales,2) ?></td>
                        <td style=""align="right"><?php echo number_format($vacacionestotales,2) ?></td>
                        <td style=""align="right"><?php echo number_format($aguinaldototales,2) ?></td>
                        <td style=""align="right"><?php echo number_format($salariointegraltotales,2) ?></td>
                        <td style="border: none"></td>
                        <td style=""align="right"><?php echo number_format($quincenatotales,2) ?></td>
                    </tr>    
            </table>
</br></br></br>