<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Index.css">
    <title>Login</title>
</head>
<body>
    <header id="encabezado">
        <img id="logo-header" src="https://1.bp.blogspot.com/-CRGFBvE8s8k/YT5yRhIEj8I/AAAAAAAAAHM/dplt4qgxJmcjfSP213rWRyF0EoW_BQlSACNcBGAsYHQ/s320/logoPag.png">
    </header>
    <section id="Login">
        <h1>Inicio de sesión</h1>
        <form method="POST">
            <input type="text" placeholder="Usuario" name="Usuario"><br><br><br>
            <input type="text" placeholder="Contraseña" name="Contraseña"><br><br><br>
            <button type="submit" name="Iniciar sesión">Iniciar sesión</button>
        </form>
    </section><br><br>
    <div id="Enlaces">
        <ul>
            <li><a href="menuAdministrador.html">Login como administrador</a></li>
            <li><a href="menuEmpleado.html">Login como empleado</a></li>
            <li><a href="menuJefe.html">Login como jefe</a></li>
        </ul>
    </div>
</body>
<?php 
/*$ContraseñaActual=$_POST['ContraseñaActual'];
$NuevaContraseña=$_POST['genero'];
$RepetirNuevaContraseña=$_POST['RepetirNuevaContraseña'];
*/
?>
</html>