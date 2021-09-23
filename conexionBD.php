<?php
//Select a la base de datos
$conexion = mysqli_connect("localhost","root","","sgdrrhhbd");

if ($conexion -> connect_error) {
    die("Fallo la conexión a la base de datos.");
}else{
    echo "conexion establecida";
    /*
    $sql="select * from alumnos";
    $resultado = $conexion ->query($sql);

    if($resultado ->num_rows){
        while ($fila=$resultado -> fetch_assoc()) {
            echo $fila['codigo']. '-'.$fila['nombre'].'-'.$fila['mail'].'-'.$fila['codigocurso'].'<br>';
        }
            echo "No hay mas registros para leer.";
    }
    */
}

?>