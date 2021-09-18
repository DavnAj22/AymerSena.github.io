<?php
if (isset($_POST["Iniciarsesion"])) {
    if (!empty($_POST["Usuario"]) && strlen($_POST["Usuario"]) <= 10 && !is_numeric($_POST["Usuario"]) && !preg_match("/[0-9]/", $_POST["Usuario"])) {
        $_inicio = 1;
    }
}
if (isset($_POST["Contraseña"])) {
    if (!empty($_POST["Contraseña"]) && strlen($_POST["Contraseña"]) > 8 && !is_numeric($_POST["Contraseña"]) && !preg_match("/[7-20]/", $_POST["Contraseña"])) {
        $_inicio = $_inicio + 1;
    }
}
if ($inicio = 2) {
    echo "Iniciaste sesion correctamente";
} else {
    echo "Datos erroneos";
}
