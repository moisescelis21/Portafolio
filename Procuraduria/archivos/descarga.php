<?php
utf8_encode($ubicacion = $_GET['ubicacion']);
header("Content-disposition: attachment; filename=$ubicacion");
readfile("$ubicacion");
?>