<?php
    $liquidaciontotal = 0;
    $correlativo = $_GET['correlativo'];
    $conexion=mysqli_connect('localhost','root','','procuraduria');
    $sql2="SELECT * FROM nominapersonal WHERE correlativo='$correlativo' AND nomina='Trabajador'";
    $result2=mysqli_query($conexion,$sql2);

    while($mostrar2=mysqli_fetch_array($result2)){
      $cedula2 = $mostrar2['cedula'];




    $sql="SELECT * FROM trabajadores WHERE cedula='$cedula2'";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
      $id = $mostrar['id']; 
      $nombres = $mostrar['nombres'];
      $apellidos = $mostrar['apellidos'];
      $cedula = $mostrar['cedula'];
      $liquidacion = $mostrar['liquidacion'];
      $liquidaciontotal = $liquidaciontotal + $liquidacion;
     ?>

         
                    <tr>
                        <td style="" ><?php echo $apellidos; ?> <?php echo $nombres; ?></td>
                        <td style="" align="right"><?php echo $cedula; ?></td>
                        <td style=""align="right"><?php echo number_format($liquidacion,2) ?></td>

                    </tr>
                    <?php }} ?>
                    
                  