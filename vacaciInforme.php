<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Tabla de pruebas</h1>    
<form action="" method="POST">
    <select name="filterPeople" id="">
        <option value="all">Seleccionar todo</option>
        <?php
        require("conexionBD.php");
        $queryBdJub="SELECT UsuCedula, UsuNombre, UsuApellido FROM tblusuario;";
        $answerQueSql=$conexion->query($queryBdJub);
        foreach($answerQueSql as $rowsCol){
        ?>
        <option value="<?php echo $rowsCol['UsuCedula']; ?>"><?php echo $rowsCol['UsuNombre'].' '.$rowsCol['UsuApellido']?></option>
        <?php
        }
        ?>
    </select>
    <input type="submit" value="Consultar" name="boton">
</form><br>
<?php

if (isset($_POST['boton'])) {
    echo $_POST['filterPeople'] .' Se cumple la condición del boton';
}
?>



</body>
</html>