<?php
session_start();

if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'login.php';</script>";
  }
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="delmary";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 $cantidad_productos=$_POST['cantidad_productos'];
 $usuario = $_SESSION["usuario"];
 $productos= "";
 if ($cantidad_productos == 1) {
 $producto1=$_POST['producto1'];
 $precio1=$_POST['precio1'];
 $cantidad1 = $_POST['cantidad1'];
 $productos = $cantidad1." ".$producto1;

 	
 }elseif($cantidad_productos == 2){
 	$producto1=$_POST['producto1'];
 	$precio1=$_POST['precio1'];
 	$cantidad1 = $_POST['cantidad1'];
 	$producto2=$_POST['producto2'];
 	$precio2=$_POST['precio2'];
 	$cantidad2 = $_POST['cantidad2'];
 	$productos =  $cantidad1." ".$producto1.",".$cantidad2." ".$producto2;
 }
 elseif($cantidad_productos == 3){
 	$producto1=$_POST['producto1'];
 	$precio1=$_POST['precio1'];
 	$cantidad1 = $_POST['cantidad1'];
 	$producto2=$_POST['producto2'];
 	$precio2=$_POST['precio2'];
 	$cantidad2 = $_POST['cantidad2'];
 	$producto3=$_POST['producto3'];
 	$precio3=$_POST['precio3'];
 	$cantidad3 = $_POST['cantidad3'];
 	$productos =  $cantidad1." ".$producto1.",".$cantidad2." ".$producto2.",".$cantidad3." ".$producto3;

 }
 elseif($cantidad_productos == 4){
 	 	$producto1=$_POST['producto1'];
 	$precio1=$_POST['precio1'];
 	$cantidad1 = $_POST['cantidad1'];
 	$producto2=$_POST['producto2'];
 	$precio2=$_POST['precio2'];
 	$cantidad2 = $_POST['cantidad2'];
 	$producto3=$_POST['producto3'];
 	$precio3=$_POST['precio3'];
 	$cantidad3 = $_POST['cantidad3'];
 	$producto4=$_POST['producto4'];
 	$precio4=$_POST['precio4'];
 	$cantidad4 = $_POST['cantidad4'];
 	$productos =  $cantidad1." ".$producto1.",".$cantidad2." ".$producto2.",".$cantidad3." ".$producto3.",".$cantidad4." ".$producto4;

 }
 elseif($cantidad_productos == 5){
 	$producto1=$_POST['producto1'];
 	$precio1=$_POST['precio1'];
 	$cantidad1 = $_POST['cantidad1'];
 	$producto2=$_POST['producto2'];
 	$precio2=$_POST['precio2'];
 	$cantidad2 = $_POST['cantidad2'];
 	$producto3=$_POST['producto3'];
 	$precio3=$_POST['precio3'];
 	$cantidad3 = $_POST['cantidad3'];
 	$producto4=$_POST['producto4'];
 	$precio4=$_POST['precio4'];
 	$cantidad4 = $_POST['cantidad4'];
 	$producto5=$_POST['producto5'];
 	$precio5=$_POST['precio5'];
 	$cantidad5 = $_POST['cantidad5'];
 	$productos =  $cantidad1." ".$producto1.",".$cantidad2." ".$producto2.",".$cantidad3." ".$producto3.",".$cantidad4." ".$producto4.",".$cantidad5." ".$producto5;



 }
 
 $subtotal = $_POST['subtotal'];


 $sql2="SELECT * FROM clientes WHERE usuario='$usuario'";
$result=mysqli_query($con,$sql2);
                        $direccion = "";
                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $direccion = $mostrar['direccion'];
                            
}
 $sql="INSERT INTO pedidos VALUES('id','$usuario','$productos','$subtotal','En Espera','$direccion')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 if ($cantidad_productos == 1) {
  $contador = 0;
  $carrito_id1 = $_POST['carrito_id1'];
  $carrito_id = array("$carrito_id1");
  while ($contador < 1) {
    
 $eliminar = ("DELETE FROM carrito WHERE id = '$carrito_id[$contador]' ");
 $ejecutar2=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar2=mysqli_query($con,$eliminar);
 $contador++;
  }
  
 }elseif($cantidad_productos == 2){
  $contador = 0;
  $carrito_id1 = $_POST['carrito_id1'];
  $carrito_id2 = $_POST['carrito_id2'];
  $carrito_id = array("$carrito_id1", "$carrito_id2");
 while ($contador < 2) {
    
 $eliminar = ("DELETE FROM carrito WHERE id = '$carrito_id[$contador]' ");
 $ejecutar2=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar2=mysqli_query($con,$eliminar);
 $contador++;

 }}elseif($cantidad_productos == 3){
  $contador = 0;
  $carrito_id1 = $_POST['carrito_id1'];
  $carrito_id2 = $_POST['carrito_id2'];
  $carrito_id3 = $_POST['carrito_id3'];
  $carrito_id = array("$carrito_id1", "$carrito_id2","$carrito_id3");
   while ($contador < 3) {
    
 $eliminar = ("DELETE FROM carrito WHERE id = '$carrito_id[$contador]' ");
 $ejecutar2=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar2=mysqli_query($con,$eliminar);
 $contador++;
  
 }}elseif($cantidad_productos == 4){
  $contador = 0;
   $carrito_id1 = $_POST['carrito_id1'];
  $carrito_id2 = $_POST['carrito_id2'];
  $carrito_id3 = $_POST['carrito_id3'];
  $carrito_id4 = $_POST['carrito_id4'];
  $carrito_id = array("$carrito_id1", "$carrito_id2","$carrito_id3","$carrito_id4");
   while ($contador < 4) {
    
 $eliminar = ("DELETE FROM carrito WHERE id = '$carrito_id[$contador]' ");
 $ejecutar2=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar2=mysqli_query($con,$eliminar);
 $contador++;
  
 }}elseif($cantidad_productos == 5){
  $contador = 0;
  $carrito_id1 = $_POST['carrito_id1'];
  $carrito_id2 = $_POST['carrito_id2'];
  $carrito_id3 = $_POST['carrito_id3'];
  $carrito_id4 = $_POST['carrito_id4'];
  $carrito_id5 = $_POST['carrito_id5'];
  $carrito_id = array("$carrito_id1","$carrito_id2","$carrito_id3","$carrito_id4","$carrito_id5");
   while ($contador < 5) {
    
 $eliminar = ("DELETE FROM carrito WHERE id = '$carrito_id[$contador]' ");
 $ejecutar2=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar2=mysqli_query($con,$eliminar);
 $contador++;
  
 }}
 
 	if(!$ejecutar){
 		echo"Su pedido no ha sido registrado correctamente.";
 	}else{
  		echo "<script>alert('Su pedido ha sido registrado correctamente.'); window.location= 'index.php';</script>";
 	}	

?>