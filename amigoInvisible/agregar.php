<?php

$nombre = $_POST['nombre'];

session_start();
$arr = $_SESSION['arreglo'];
array_push($arr,$nombre);
$_SESSION['arreglo'] = $arr;
for($i=0; $i<sizeof($arr); $i++){
	echo $arr[$i];
	echo "</br>";
}
?>