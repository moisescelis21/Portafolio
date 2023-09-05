<?php
//Introduzca aquí la información de su base de datos y el nombre del archivo de copia de seguridad.
$mysqlDatabaseName ='liceo';
$mysqlUserName ='root';
$mysqlPassword ='';
$mysqlHostName ='localhost';
$fecha = date('Y-m-d');
$mysqlExportPath ='liceo-'.$fecha.'.sql';

//Por favor, no haga ningún cambio en los siguientes puntos
//Exportación de la base de datos y salida del status
$command='C:\xampp\mysql\bin\mysqldump.exe --opt -h' .$mysqlHostName .' -u' .$mysqlUserName .' --password="' .$mysqlPassword .'" ' .$mysqlDatabaseName .' > ' .$mysqlExportPath;
exec($command,$output,$worked);
switch($worked){
case 0:
$nombre = $mysqlExportPath;
$ruta = "C:/xampp/htdocs/liceo";
$con = mysqli_connect($mysqlHostName,$mysqlUserName,$mysqlPassword,$mysqlDatabaseName)or die("Problemas al Conectar");
mysqli_select_db($con,$mysqlDatabaseName)or die("problemas al conectar con la base de datos");
$sql="INSERT INTO respaldos VALUES('id','$nombre','$ruta','$fecha')";
$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
$ejecutar=mysqli_query($con,$sql);
echo "<script>alert('La base de datos ha sido respaldada con exito.'); window.location= 'restaurar.php';</script>";
break;
case 1:
echo 'Se ha producido un error al exportar <b>' .$mysqlDatabaseName .'</b> a '.getcwd().'/' .$mysqlExportPath .'</b>';
break;
case 2:
echo 'Se ha producido un error de exportación, compruebe la siguiente información: <br/><br/><table><tr><td>Nombre de la base de datos:</td><td><b>' .$mysqlDatabaseName .'</b></td></tr><tr><td>Nombre de usuario MySQL:</td><td><b>' .$mysqlUserName .'</b></td></tr><tr><td>Contraseña MySQL:</td><td><b>NOTSHOWN</b></td></tr><tr><td>Nombre de host MySQL:</td><td><b>' .$mysqlHostName .'</b></td></tr></table>';
break;
}
?>