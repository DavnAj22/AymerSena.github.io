
<?php
$filtro_empl = $_POST ['ftl_empl'];
$filtro_eval = $_POST ['ftl_eval'];
$ini_cal = $_POST ['ini_cal'];
$fin_cal = $_POST ['fin_cal'];

echo "Los datos ingresados se cargaron con exito,   Filtro por empleado: " .$filtro_empl.'<br>';
echo "Filtro por evaluación: " .$filtro_eval.'<br>';
echo "Fecha de Inicio: " .$ini_cal.'<br>';
echo "Fecha de Finalización: " .$fin_cal.'<br>';

?>
