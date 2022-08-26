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
    $id = htmlentities(addslashes($_POST['id']));
    $passw = htmlentities(addslashes($_POST['passw']));
    if (isset($_POST["id"])) {
        if (!empty($_POST["id"]) && strlen($_POST["id"]) <= 15 && is_numeric($_POST["id"]) && !preg_match("/[0-9]/", $_POST["id"])) {
        }
    }
    if (!empty($_POST["passw"])) {
    }
    $sqlid = "SELECT * FROM tblusuario WHERE UsuCedula='$id'";
    $resulpassword = $conexion->query($sqlid);
    foreach ($resulpassword as $rows) {
        $sqlidexist = "SELECT COUNT(*) FROM tblusuario WHERE UsuCedula= '$id'";
        $usuexist = $conexion->query($sqlidexist);
        if ($usuexist->fetch_column() > 0) {
            if ($rows['UsuContrasenaSis'] == $passw) {
                $resulperfil = $conexion->query($sqlid);
                foreach ($resulperfil as $rows) {
                    switch ($rows["UsuForaPerfil"]) {
                        case 1:
                            session_start();
                            $_SESSION["Admin"] = $_POST["id"];
                            header("Location: madmin.php");
                            break;
                        case 2:
                            session_start();
                            $_SESSION["Jefe"] = $_POST["id"];
                            header("Location: mjefe.php");
                            break;
                        case 3:
                            /**session_start();
                            $_SESSION["Emp"] = $_POST["id"];**/
                            header("Location: memple.php");
                            break;

                        default:
                            echo "No tiene un perfil asignado, comuniquese con el administrador";
                            break;
                    }
                }
            } else {
                echo "La contraseña digitada es incorrecta";
                header("Location: index.php");
            }
        } else {
            echo "El usuario no esta registrado";
            header("Location: index.php");
        }
    }
}
?>

</html>