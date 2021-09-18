<?php
if (isset($_POST["btn_guardar"]))
{
    if (!empty($_POST["nameEva"]) && strlen($_POST["nameEva"]) <=20 && !is_numeric($_POST["nameEva"]) && !preg_match("/[0-9]/" , $_POST["nameEva"])){
        echo $_POST["nameEva"] . "<br/>";
    }
    if (!empty($_POST["descriEva"]) && strlen($_POST["descriEva"]) <=200 && !is_numeric($_POST["descriEva"]) && !preg_match("/[0-9]/" , $_POST["descriEva"])){
        echo $_POST["descriEva"] . "<br/>";
    }
}
?>