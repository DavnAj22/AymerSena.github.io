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
        <br>
        <h1>Inicio de sesión</h1>
        <form method="POST">
            <input type="text" placeholder="ID" name="id" required="true"><br><br>
            <input type="password" placeholder="Password" name="passw" required="true"><br><br>
            <button id="boton" type="submit" name="Iniciarsesion">Iniciar sesión</button><br><br>
            <button id="boton1" type="submit" name="respassword">Restablecer contraseña</button><br><br>


        </form>
    </section>

</body>
<?php
require("conexionBD.php");
if (isset($_POST['Iniciarsesion'])) {
    $id = $_POST['id'];
    $pass = $_POST['passw'];
    if (isset($_POST["id"])) {
        if (!empty($_POST["id"]) && strlen($_POST["id"]) <= 15 && is_numeric($_POST["id"]) && !preg_match("/[0-9]/", $_POST["id"])) {
        }
    }
    if (!empty($_POST["passw"])) {
    }
    $sql = "SELECT * FROM tblusuario WHERE UsuCedula='$id'";
    $resulpassword = $conexion->query($sql);
    foreach ($resulpassword as $rows) {
        if ($rows['UsuContrasenaSis'] == $passw) {
            $resulperfil = $conexion->query($sql);
            foreach ($resulperfil as $rows) {
                switch ($rows["UsuForaPerfil"]) {
                    case 1:
                        header("Location: menuAdministrador.php");
                        $menu = "menuAdministrador.php";
                        break;
                    case 2:
                        header("Location: menuJefe.php");
                        $menu = "menuJefe.php";
                        break;
                    case 3:
                        header("Location: menuEmpleado.php");
                        $menu = "menuEmpleado.php";
                        break;

                    default:
                        echo "No perfil";
                        break;
                }
            }
        } else {
            echo "Credenciales incorrectas";
        }
    }
}
?>

</html>