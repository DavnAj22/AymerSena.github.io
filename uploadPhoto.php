<?php include('Template/cabecera.php');
/**style type="text/css">
 * {
    font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif
}

.main {
    margin: auto;
    border: 1px solid #7C7A7A;
    width: 50%;
    text-align: left;
    padding: 30px;
    background: #85c587
}

input[type=submit] {
    background: #6ca16e;
    width: 100%;
    padding: 5px 15px;
    background: #ccc;
    cursor: pointer;
    font-size: 16px;

}

table td {
    padding: 5px;
}
</style> **/ ?>
<div class="main">
    <h1>Subir archivo con PHP:</h1>
    <?php
    $directorio = 'Imagenes/';
    $subir_archivo = $directorio . basename($_FILES['subir_archivo']['name']);
    echo "<div>";
    if (move_uploaded_file($_FILES['subir_archivo']['tmp_name'], $subir_archivo)) {
        echo "El archivo es válido y se cargó correctamente.<br><br>";
        echo "<a href='" . $subir_archivo . "' target='_blank'><img src='" . $subir_archivo . "' width='150'></a>";
    } else {
        echo "La subida ha fallado";
    }
    echo "</div>";
    require("conexionBD.php");
    $docuFuncioLogueado = 1110000001; ///Esta variable le hace falta capturar el documento del funcionario logueado por el momento se pone manual.
    $query = $conexion->query("UPDATE tblusuario SET UsuFotoPerfil ='$subir_archivo' WHERE UsuCedula ='$docuFuncioLogueado'");
    ?>
    <br>
    <div style="border:1px solid #000000; text-transform:uppercase">
        <h3 align="center">
            <div align="center"><a href="photoPerfil.php">Volver </a></div>
        </h3>
    </div>
</div>
<?php include('Template/pie.php');
