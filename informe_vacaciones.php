<?php

if (isset($_POST["btn_consulta"])){
    if (!empty($_POST["ftl"])){
        echo $_POST["ftl"] . "<br/>";
    }
    if (!empty($_POST["IniCalVac"])){
        echo $_POST["IniCalVac"] . "<br/>";
    }
    if (!empty($_POST["ini_cal"])){
        echo $_POST["ini_cal"] . "<br/>";
    }
    if (!empty($_POST["FinCalVac"])){
        echo $_POST["FinCalVac"] . "<br/>";
    }
}
?>