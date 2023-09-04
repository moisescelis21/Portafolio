
    <table style="width: 100%;" border="1">
                    <tr>
                      <th colspan="9">NOMINA OBREROS</th>
                    </tr>
                    <tr>
                        <th style="font-size: 9px">COD</th>
                        <th style="font-size: 9px">Apellidos</th>
                        <th style="font-size: 9px">Nombres</th>
                        <th style="font-size: 9px">Cedula</th>
                        <th style="font-size: 9px">Cargo</th>
                        <th style="font-size: 9px">Adscripcion</th>
                        <th style="font-size: 9px">Status</th>
                        <th style="font-size: 9px">Fecha Ingreso</th>
                        <th style="font-size: 9px">Cesta Ticket</th>
                     </tr>         
    <?php
    $cestaTT = 0;
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


     ?>
<?php
$sql3="SELECT * FROM preciobcv";
    $result3=mysqli_query($conexion,$sql3);

    while($mostrar3=mysqli_fetch_array($result3)){
      $precioactual = $mostrar3['precioactual'];
      $preciomanual = $mostrar3['preciomanual'];
      if ($preciomanual != 0) {
        $cestaT = round($preciomanual*40,2);
      }else{
        $cestaT = round($precioactual*40,2);
      }
}
     ?>
<?php
    $cestaTT = $cestaTT + $cestaT;
    $cantidad = $cantidad + 1;


     ?>   
  


                    
                    <tr>
                        <td style="font-size: 9px" align="center" ><?php echo $cantidad; ?></td>
                        <td style="font-size: 9px" align="center" ><?php echo $apellidos; ?></td>
                        <td style="font-size: 9px" align="center" ><?php echo $nombres; ?></td>
                        <td style="font-size: 9px" align="center"><?php echo $cedula; ?></td>
                        <td style="font-size: 9px " align="center"><?php echo $cargo ?></td>
                        <td style="font-size: 9px"align="center"><?php echo $adscrito ?></td>
                        <td style="font-size: 9px"align="center"><?php echo $nomina ?></td>
                        <td style="font-size: 9px"align="center"><?php echo $fechresolucion ?></td>
                        <td style="font-size: 9px" align="right"><?php echo number_format($cestaT,2); ?></td>

                        
                      </tr>

                    <?php }}}} ?>
                    <tr>
                        <td style="" align="right" colspan="8">TOTAL PERSONAL OBREROS</td>
                        <td style=""align="right"><?php echo number_format($cestaTT,2) ?></td>
                    </tr>    
            </table>
</br></br></br>