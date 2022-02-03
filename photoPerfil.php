<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/disPhotoPerfil.css">
    <title>Plantilla para proyecto unix</title>
</head>

<body>
    <div class="cuerpo">
        <div class="panelLeft">
            <nav>
                <ul>
                    <li><img src="https://1.bp.blogspot.com/-MeCxaLO8njU/YT5yRMu7KrI/AAAAAAAAAHI/NhoZIlmquMUWDoiVjAzF3nTF1WnwqRTSQCNcBGAsYHQ/s0/descarga.png" id="photoPer"></li>
                    <li> <img src="https://1.bp.blogspot.com/-EO10WM7B0Ig/YT5yOT5S7JI/AAAAAAAAAGw/FfqaAQ19Y709UTCC9jBUt7CW9pEv8_xjACNcBGAsYHQ/s0/IconoNotificaciones.png" id="photoNoti"></li>
                    <li><button>Gestion contraseña</button></li>
                    <li><button>Cerrar sesión</button></li>
                </ul>
            </nav>
        </div>
        <div class="titlePag">
            <h1>Cambiar foto de perfil</h1>
        </div>
        <div class="container">
            <div class="formularioFoto">
                <form action="" method="$_POST">
                    <label for="imagen">Imagen:</label>
                    <input id="imagen" name="imagen" size="30" type="file"><br>
                    <button>Enviar</button>
                </form>
            </div>
            <img src="https://1.bp.blogspot.com/-CRGFBvE8s8k/YT5yRhIEj8I/AAAAAAAAAHM/dplt4qgxJmcjfSP213rWRyF0EoW_BQlSACNcBGAsYHQ/s332/logoPag.png" id="logoUnix">
        </div>
    </div>
    <div class="foo">
        <footer>
            <h2>Pie de página va acá</h2>
        </footer>
    </div>
<?php

require("conexionBD.php");

// Recibo los datos de la imagen
$nombre_img = $_FILES['imagen']['name'];
$tipo = $_FILES['imagen']['type'];
$tamano = $_FILES['imagen']['size'];

//Si existe imagen y tiene un tamaño correcto
if (!empty($nombreImg) && ($_FILES['imagen']['size'] <= 200000)) 
{
   //indicamos los formatos que permitimos subir a nuestro servidor
   if (($_FILES["imagen"]["type"] == "image/gif")
   || ($_FILES["imagen"]["type"] == "image/jpeg")
   || ($_FILES["imagen"]["type"] == "image/jpg")
   || ($_FILES["imagen"]["type"] == "image/png"))
   {
      // Ruta donde se guardarán las imágenes que subamos
      $directorio = $_SERVER['DOCUMENT_ROOT'].'/Imagenes/';
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);
    } 
    else 
    {
       //si no cumple con el formato
       echo "No se puede subir una imagen con ese formato ";
    }
} 
else 
{
   //si existe la variable pero se pasa del tamaño permitido
   if($nombre_img == !NULL) echo "La imagen es demasiado grande "; 
}

/* en pasos anteriores deberíamos tener una conexión abierta a nuestra base de 
datos para ejecutar nuestra sentencia SQL */

/* con la siguiente sentencia le asignamos a nuestro campo de la tabla ruta_imagen 
el nombre de nuestra imagen */

$sql = "UPDATE tblusuario SET UsuFotoPerfil = '$nombre_img' ";
$result = $conexion->query($sql);

/* volvemos a la página principal para cargar la imagen que hemos subido */
header("Location: paginaperfil.php");

/* lanzamos la consulta para traernos el nombre de la imagen, en nuestro caso 
el campo ruta_imagen se encuentra en la tabla usuarios */ 
$result2 = $conexion->query("SELECT * FROM usuarios "); 
while ($row=$conexion->mysql_fetch_array($result2))
{ 
    /*almacenamos el nombre de la ruta en la variable $ruta_img*/ 
    $ruta_img = $row["ruta_imagen"]; 
} 

?>
</body>
</html>