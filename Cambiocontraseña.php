<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/cambiocontraseña.css">
    <title>Cambio de contraseña</title>
</head>
<body>
    <header id="encabezado">
        <a href=""><img id="logo-header" src="logoPag.png"></a>
        <img id="foto_perfil" src="descarga.png">
        <nav>
            <ul>
                <li>
                    <a href=""><img class="logito" src="IconoNotificaciones.png"></a>
                </li>
                <li>
                    <a href="index.html"><img class="logito" src="IconoSalir.png"></a>
                </li>
            </ul>
        </nav>
        <h3>  Nombre Apellido  </h3>
    </header>
    <section id="cambiocontraseña">
        <h1>Cambio de contraseña</h1>
        <form method="POST">
            <input type="text" placeholder="Contraseña Actual" name="ContraseñaActual"><br><br><br>
            <input type="text" placeholder="Nueva Contraseña" name="NuevaContraseña"><br><br><br>
            <input type="text" placeholder="Repetir nueva contraseña" name="RepetirNuevaContraseña"><br><br><br>
            <button type="submit" name="CambiarContraseña">Cambiar contraseña</button>
        </form>
    </section>
</body>
<?php 
$ContraseñaActual=$_POST['ContraseñaActual'];
$NuevaContraseña=$_POST['NuevaContraseña'];
$RepetirNuevaContraseña=$_POST['RepetirNuevaContraseña'];
echo "Contraseña fue cambiada con exito", $NuevaContraseña;
?>
</html>