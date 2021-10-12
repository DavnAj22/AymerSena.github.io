<?php
require("conexionBD.php");  
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/disInforVacas.css">
    <title>Informe de vacaciones</title>
</head>

<body>
    <header id="encabezado">
        <a href=""><img id="logo-header" src="https://1.bp.blogspot.com/-CRGFBvE8s8k/YT5yRhIEj8I/AAAAAAAAAHM/dplt4qgxJmcjfSP213rWRyF0EoW_BQlSACNcBGAsYHQ/s320/logoPag.png"></a>
        <img id="foto_perfil" src="https://1.bp.blogspot.com/-MeCxaLO8njU/YT5yRMu7KrI/AAAAAAAAAHI/NhoZIlmquMUWDoiVjAzF3nTF1WnwqRTSQCNcBGAsYHQ/s0/descarga.png">
        <nav>
            <ul>
                <li>
                    <a href=""><img id="notificacion" src="https://1.bp.blogspot.com/-EO10WM7B0Ig/YT5yOT5S7JI/AAAAAAAAAGw/FfqaAQ19Y709UTCC9jBUt7CW9pEv8_xjACNcBGAsYHQ/s0/IconoNotificaciones.png"></a>
                </li>
                <li>
                    <a href="Index.php"><img id="cerrarSe" src="https://1.bp.blogspot.com/-BM03tlw4TH0/YT5yOxEwdoI/AAAAAAAAAG0/LneMrf5vRD0ooVH6n92poAdrIa8balaRACNcBGAsYHQ/s0/IconoSalir.png"></a>
                </li>
            </ul>
        </nav>
        <h1> Bienvenido </h1>
        <h3> Nombre Apellido </h3><br>
        <div id="animacion"></div>
    </header>
    <br>
    <div id="Post">
    
        <form method="POST">
            <label for="empleado">Empleado</label>
            <select name="ftl" id="filtros" >
                <option value="todos">Todos</option>
                    <?php
                    $sqlfilter = "SELECT UsuCedula, UsuNombre ,UsuApellido FROM tblusuario";
                    $resultado = $conexion ->query($sqlfilter);
                    foreach($resultado as $num_rows){
                    ?>    
                      <option value="<?php print $num_rows['UsuCedula'];?>"><?php echo $num_rows['UsuNombre']." " .$num_rows['UsuApellido'];?></option>
                     <?php     
                    }
                    ?>
                </select>
            <label for="fechaSolicitud">Fecha de solicitud vacaciones</label>
            <input type="date" name="DataSolicid">
            <table id="tablaResu" border="1">
                <tr>
                    <th>Empleado</th>
                    <th>fecha solicitud</th>
                    <th>Fecha de inicio</th>
                    <th>fecha fin</th>
                    <th>Estado</th>
                </tr>
                <?php
//$documento=$_POST["ftl"];
//echo $documento;
if (empty($_POST["ftl"]) and empty($_POST["DataSolcid"])){
     $sql1="SELECT his.HisFechaSolicitud, his.HisFechaInicio, his.HisFechaRegreso, his.HisEstado, usu.UsuNombre, usu.UsuApellido FROM tblhistovaca his INNER JOIN tblusuario usu ON his.HisForUsuCed=usu.UsuCedula";
     $resultado1=$conexion ->query($sql1);     
     foreach($resultado1 as $rows){
         ?>
         <tr>
         <td><?php echo $rows['UsuNombre']. ' '.$rows['UsuApellido'];?></td>
         <td><?php echo $rows['HisFechaSolicitud'];?></td>
         <td><?php echo $rows['HisFechaInicio'];?></td>
         <td><?php echo $rows['HisFechaRegreso'];?></td>
         <td><?php echo $rows['HisEstado'];?></td>
         </tr>
         <?php
     }
     ?>
     <?php
 }else{
    $where="";
    $sql1="SELECT his.HisFechaSolicitud, his.HisFechaInicio, his.HisFechaRegreso, his.HisEstado, usu.UsuNombre, usu.UsuApellido FROM tblhistovaca his INNER JOIN tblusuario usu ON his.HisForUsuCed=usu.UsuCedula";
    $resultado1=$conexion ->query($sql1);
    
     }

?>

            </table>
            <br>
            <input type="submit" value="Consultar" id="botonEN" name="btn_consulta">
            <input type="submit" value="Imprimir" id="botonEN">
        </form>

    </div>
    </div>
</body>
</html>