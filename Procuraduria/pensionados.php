   <?php

if (!isset($_SESSION["cedula"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'login.php';</script>";
  }
?>
    <table style="width: 100%;" border="1">
                    <tr>
                      <th colspan="8">PERSONAL PENSIONADOS</th>
                    </tr>
                    <tr>
                        <th style="font-size: 9px">COD</th>
                        <th style="font-size: 9px">Cuenta Bancaria</th>
                        <th style="font-size: 9px">Apellidos</th>
                        <th style="font-size: 9px">Nombres</th>
                        <th style="font-size: 9px">Núm. De Cédula</th>
                        <th style="font-size: 9px">Cargo</th>
                        <th style="font-size: 9px">Status</th>
                        <th style="font-size: 9px">Sueldo Basico</th>
                     </tr>         
    <?php
    $sueldototal = 0;
    $cantidad = 0;
    $correlativo = $_GET['correlativo'];
    $conexion=mysqli_connect('localhost','root','','procuraduria');
    $sql2="SELECT * FROM nominapersonal WHERE correlativo='$correlativo'";
    $result2=mysqli_query($conexion,$sql2);

    while($mostrar2=mysqli_fetch_array($result2)){
      $cedula2 = $mostrar2['cedula'];
      $diastrabajados = $mostrar2['diastrabajados'];



    $sql="SELECT * FROM trabajadores WHERE cedula='$cedula2' AND nomina ='Pension'";
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

$sql10="SELECT * FROM datosbancarios WHERE cedula='$cedula2'";
    $result10=mysqli_query($conexion,$sql10);
    while($mostrar10=mysqli_fetch_array($result10)){
      $nrocuenta = $mostrar10['nrocuenta'];



    $cantidad = $cantidad + 1;
    $sueldototal = $sueldototal + $sueldo;


     ?>   


                    
                    <tr>
                        <td style="font-size: 9px" align="center"><?php echo $cantidad; ?></td>
                        <td style="font-size: 9px" align="center" ><?php echo $nrocuenta; ?></td>
                        <td style="font-size: 9px" align="center" ><?php echo $apellidos; ?></td>
                        <td style="font-size: 9px" align="center"><?php echo $nombres; ?></td>
                        <td style="font-size: 9px " align="center"><?php echo $cedula ?></td>
                        <td style="font-size: 9px"align="center"><?php echo $cargo ?></td>
                        <td style="font-size: 9px"align="center"><?php echo $nomina ?></td>
                        <td style="font-size: 9px" align="right"><?php echo number_format($sueldo,2); ?></td>

                        
                      </tr>

                    <?php }}}}} ?>
                    <tr>
                        <td style="" colspan="7" align="right">TOTAL PENSIONADOS</td>

                        <td style=""align="right"><?php echo number_format($sueldototal,2) ?></td>
                    </tr>   
            </table>
</br></br></br>