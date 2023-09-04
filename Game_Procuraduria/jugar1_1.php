<?php
$equipo=$_POST['equipo'];
$ronda=$_POST['ronda'];
if ($ronda == 6) {
	echo "<script>window.location= 'desempate.php?equipo=$equipo&ronda=$ronda';</script>";
}else{
	echo "<script>window.location= 'jugar2.php?equipo=$equipo&ronda=$ronda';</script>";
}








 ?>