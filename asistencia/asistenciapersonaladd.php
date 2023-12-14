<?php
 session_start();
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="asistencia";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $fecha=date("Y-m-d");
 $id2=$_GET["id2"];
 $sql2="SELECT * FROM trabajadores WHERE status='Activo'";
        $result=mysqli_query($con,$sql2);

        while($mostrar=mysqli_fetch_array($result)){
            $id = $mostrar['id'];
            $cedula = $mostrar['cedula'];

            
  
 $sql="INSERT INTO asistenciapersonal VALUES('id','$id2','$cedula','8:00','2:00')";
}
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 	if(!$ejecutar){
 		echo"La asistencia no ha sido registrada correctamente.";
 	}else{
  		echo "<script>alert('La asistencia ha sido registrada correctamente.'); window.location= 'diciembre.php';</script>";
 	}	


?>