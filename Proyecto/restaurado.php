<?php
//Tragen Sie hier Ihre Datenbankinformationen ein und den Namen der Backup-Datei
$mysqlDatabaseName ='proyecto';
$mysqlUserName ='root';
$mysqlPassword ='';
$mysqlHostName ='localhost';
$nombre=$_GET['nombre'];
$mysqlImportFilename =$nombre;

//Por favor, no haga ningún cambio en los siguientes puntos
//Importación de la base de datos y salida del status
$command='C:\xampp\mysql\bin\mysql.exe -h' .$mysqlHostName .' -u' .$mysqlUserName .' --password="' .$mysqlPassword .'" ' .$mysqlDatabaseName .' < ' .$mysqlImportFilename;
exec($command,$output,$worked);
switch($worked){
case 0:
echo "<script>alert('La base de datos ha sido restaurada con exito.'); window.location= 'restaurar.php';</script>";
break;
case 1:
echo 'Se ha producido un error durante la importación. Por favor, compruebe si el archivo está en la misma carpeta que este script. Compruebe también los siguientes datos de nuevo: <br/><br/><table><tr><td>Nombre de la base de datos MySQL:</td><td><b>' .$mysqlDatabaseName .'</b></td></tr><tr><td>Nombre de usuario MySQL:</td><td><b>' .$mysqlUserName .'</b></td></tr><tr><td>Contraseña MySQL:</td><td><b>NOTSHOWN</b></td></tr><tr><td>Nombre de host MySQL:</td><td><b>' .$mysqlHostName .'</b></td></tr><tr><td>Nombre de archivo de la importación de MySQL:</td><td><b>' .$mysqlImportFilename .'</b></td></tr></table>';
break;
}
?>