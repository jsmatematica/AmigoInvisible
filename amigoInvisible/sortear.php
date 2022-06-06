<?php
session_start();

$info = $_SESSION['arreglo'];
$orig = $info;
shuffle($info);
$iguales = 1;
while($iguales ==1){

	$count = 0;
	for($j = 0; $j<sizeof($info); $j++){
	if($info[$j]==$orig[$j]){
	$count++;
}
}
	if($count==0){
	$iguales =0;
}else{
shuffle($info);
}
}
for($i = 0; $i<sizeof($info); $i++){
	echo $orig[$i];
	echo "->";
	$nombre = $i.date("H-i-s");
        $archivo = fopen($nombre,'a');
	fputs($archivo,"Le debes regalar a ".$info[$i]); 
	fclose($archivo); 
	echo "http://raspberrypijulio.ddns.net/amigoInvisible/".$nombre;
	echo "</br>";
}