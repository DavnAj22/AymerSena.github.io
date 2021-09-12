<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Index.css">
    <title>Login</title>
</head>
<body>
    <header id="encabezado">
        <img id="logo-header" src="logoPag.png">
    </header>
    <section id="Login">
        <h1>Inicio de sesión</h1>
        <form method="POST">
            <input type="text" placeholder="Usuario" name="Usuario"><br><br><br>
            <input type="text" placeholder="Contraseña" name="Contraseña"><br><br><br>
            <button type="submit" name="Iniciar sesión">Iniciar sesión</button>
        </form>
    </section>
</body>
<?php 
$ContraseñaActual=$_POST['ContraseñaActual'];
$NuevaContraseña=$_POST['genero'];
$RepetirNuevaContraseña=$_POST['RepetirNuevaContraseña'];
?>
</html>