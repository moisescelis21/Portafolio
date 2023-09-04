<?php
session_start();

if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'index.php';</script>";
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Document</title>
    <style>
        * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.container {
    display: flex;
    flex-direction: column;
    font-family: sans-serif;
    align-items: center;
    width: auto;
    margin: 0 50px;
 
}

.header-container {
    border: 3px solid rgb(118, 117, 117);
    border-radius: 20px;
    gap: 5px;
    width: 100%;
    text-align: center;
    font-size: 15px;
    position: absolute;
    top: 20px;
    background-color: #fff;
    padding: 10px;
    margin:0 50px;
}

.header__container-text p {
    font-size: 14px;
    line-height: 1.5;
}

.header__container-text h2 {
    font-size: 14px;
    line-height: 1.5;
}

.header-img {
    width: 120px;
    background-color: #fff;
    height: 60px;
    
    position: absolute;
}

.img2{
    top: 12px;
    left:460px;
}

.info-container {
    margin-top: 100px;
    border: 3px solid rgb(118, 117, 117);
    border-radius: 30px;
    padding: 20px;
    height: 21cm;
}

.info__container-p1,
.info__container-p2,
.info__container-p3,
.info__container-p4 {
    margin-bottom: 40px;
}

.info__container-p1 {
    
    margin: 30px 40px 20px 40px;
    font-weight: bold;
}
.info__container-p1 p{
    display: inline;
}

.info__container-p1 .fecha{
 margin-left:350px;
}



.info__container-p2 p {
    border: 1px solid black;
    padding: 10px;
}

.info__container-p2 p:first-child {
    border-bottom: none;
}



.info__container-p3 h2 {
    font-size: 15px;
    border: 1px solid black;
    text-align: center;
    padding: 5px;
    margin-bottom: 20px;
}

.info__container-p4 {
    border: 1px solid black;

}

.info__container-p4 h2 {
    font-size: 15px;
    border-bottom: 1px solid black;
    text-align: center;
    padding: 2px;
    margin-bottom: 20px;
}

.info__container-p4 p {
    margin-left: 10px;
    margin-bottom: 15px;
}

.firmas {
    width: 100%;
    margin-left: 50px;
}

.firmas hr {
    margin: 40px 0 20px 0;
    width: 200px;
}

/* FOOTER */

.footer {
    position: relative;
    top: 25cm;
    color: rgb(99, 99, 99);
    text-align: center;
    margin: 0 50px; 
    font-size: 14px;
}
    </style>
</head>

<body>

    <div class="container">
        <?php 
        $id=$_GET['id'];
        $conexion=mysqli_connect('localhost','root','','proyecto');
        $sql="SELECT * FROM reportec WHERE id='$id'";
        $result=mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
            $direccion = $mostrar['direccion'];
            $equipo = $mostrar['equipo'];
            $problema = $mostrar['problema'];
            $accion = $mostrar['accion'];
            $estatus = $mostrar['estatus'];
            $observacion = $mostrar['observacion'];
            $fecha = date("d/m/Y", strtotime($mostrar['fecha']));
            $codigo = sprintf("%'.05d", $mostrar['id']); 
            
         ?>
         
        <!-- 1ra PARTE -->
        <header class="header-container">
            <img class="header-img img1" src="img/gob.jpg" alt="">
            <div class="header__container-text">
                <h2>INFOME TÉCNICO DE COMPUTADORAS</h2>
                <p>ALCALDÍA ANGOSTURA DEL ORINOCO</p>
                <p>DIRECCIÓN DE SISTEMAS Y TECNOLOGÍA</p>
            </div>
            <img class="header-img img2" src="img/alcal.jpg" alt="">
        </header>
        <br>
        <!-- 2da PARTE -->
        <section class="info-container">
            <div class="info__container-p1">
                <p>N°<?php echo $codigo; ?></p>
                <p class="fecha">FECHA: <?php echo $fecha; ?></p>
            </div>

            <div class="info__container-p2">
                <p><b>Para: <?php echo $direccion; ?></b></p>
                <p><b>De: Direccion de Sistemas y Tecnologia</b></p>
            </div>


            <div class="info__container-p3">
                <h2>INFORMACIÓN DEL EQUIPO</h2>
                <p><?php echo $equipo; ?></p>
            </div>

            <div class="info__container-p4">
                <h2>INFORMACIÓN DEL EQUIPO</h2>
                <p><b>Caso N°: <?php echo $codigo; ?></b> </p>
                <p><b>Falla: <?php echo $problema; ?></b> </p>
                <p><b>Acción: <?php echo $accion; ?></b> </p>
                <br>
                <p><b>Estatus: <?php echo $estatus; ?></b> </p>
                <br>
                <p><b>Observación: <?php echo $observacion; ?></b> </p>

            </div>
            <?php
            }
         ?>
         <?php
          $cedula=$_GET['cedula'];
         $conexion=mysqli_connect('localhost','root','','proyecto');
        $sql="SELECT * FROM trabajadores WHERE cedula='$cedula'";
        $result=mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
            $nombre = $mostrar['nombre'];
            $apellido = $mostrar['apellido'];
            $cedula = $mostrar['cedula'];
            $cargo = $mostrar['cargo'];
            
            
         ?>
            <div class="firmas">
                <p><b>Preparado por:</b></p>
                <hr>
                <p><b><?php echo $nombre;?>&nbsp;<?php echo $apellido; ?> </b></p>
                <p>C.I: <?php echo $cedula; ?></p>
                <p>Cargo: <?php echo $cargo; ?></p>
            </div>
        <?php
        }
        ?>

        
        </section>

        <div class="footer">
            <p>Calle Igualdad c/c Concordia, Casco Histórico Palacio Municipal Ciudad Bolívar, Estado Bolívar</p>
            
            <p>Telf. (0285) 6170469</p>
        </div>
    </div>

</body>

</html>