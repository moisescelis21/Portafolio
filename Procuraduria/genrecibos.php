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
?>
    <?php


    $total = 0;
    $total2 = 0;
    $total3 = 0;
    $correlativo = $_GET['correlativo'];
    $conexion=mysqli_connect('localhost','root','','procuraduria');
    $periodo = 0;
    $sql4="SELECT * FROM nominas WHERE correlativo='$correlativo'";
    $result4=mysqli_query($conexion,$sql4);
    while($mostrar4=mysqli_fetch_array($result4)){
      $periodo = $mostrar4['periodo'];
      $dia = date("d", strtotime($periodo));
      $mes = date("m", strtotime($periodo));
      $ano = date("Y", strtotime($periodo));
      $meses = array("ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBRE");
      $mes3 = $meses[$mes-1];

}






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
    if ($mes == "8" AND $ano == "2023"){
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








      $sueldo = number_format($sueldo,2);
      $quincena = number_format($quincena,2);
      $primantiguedad2 = number_format($primantiguedad2,2);
      $primprofesion2 = number_format($primprofesion2,2);
      $primhijos2 = number_format($primhijos2,2);
      $PH2 = number_format($PH2,2);
      $IVSS2 = number_format($IVSS2,2);
      $RPE2 = number_format($RPE2,2);
      $pensionjubilacion2 = number_format($pensionjubilacion2,2);
      $sueldototal3 = number_format($sueldototal3,2);
      $deducciones2 = number_format($deducciones2,2);
      $sueldototal4 = number_format($sueldototal4,2);
      $total2 = number_format($sueldototal4,2, "", "");
      if ($nomina == "Pension" OR $nomina == "Jubilacion") {
        if($cedula != 8874124 AND $cedula != 8878329){
          $total3 = number_format($sueldo,2, "", "");
          $total = $total + $total3;

      }}else{
        $total = $total + $total2;
      }
      
      

      if ($nomina == "Pension" OR $nomina == "Jubilacion") {
        $sql3="INSERT INTO recibos VALUES('id','$cedula','$sueldo','$primantiguedad','$primprofesion','$primhijos','$sueldo','$correlativo')";
       
      }else{
        $sql3="INSERT INTO recibos VALUES('id','$cedula','$sueldo','$primantiguedad','$primprofesion','$primhijos','$sueldototal4','$correlativo')";
      }
      
      $ejecutar=mysqli_query($conexion,"SET CHARACTER SET 'utf8'");
      $ejecutar=mysqli_query($conexion,$sql3);
      if(!$ejecutar){
        echo"Los recibos no han sido registrada correctamente.";
    }else{
        echo "<body><script>Swal.fire({
  title: 'Felicidades',
  text: 'Los Recibos han sido creados correctamente.',
  icon: 'success',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'}
  
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'nomina.php';
  }
})</script>";
    }  

     ?>  

     <?php }}}}


}

      ?>