<?php
$empleado= $_GET['empleados'];
$areas=$_GET['areas'];

$date=$_GET['date'];


echo "el empleado ".$empleado." le han sido asignadas sus vacaciones"."</br>";

echo "le corresponden 15 dias acumulados"."</br>";

echo "Su fecha de regreso es: ".$date."</br>";


echo "area filtrada: ".$areas;

?>  