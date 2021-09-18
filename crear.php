<?php
if (isset($_POST["boton"])){
    if (!empty($_POST["No_pregunta"]) && strlen($_POST["No_pregunta"]) <=2 && is_numeric($_POST["No_pregunta"]) && preg_match("/[0-9]/" , $_POST["No_pregunta"])){
        echo $_POST["No_pregunta"] . "<br/>";
    }
    if (!empty($_POST["pregunta1"]) && strlen($_POST["pregunta1"]) <=200 && !is_numeric($_POST["pregunta1"]) && !preg_match("/[0-9]/" , $_POST["pregunta1"])){
        echo $_POST["pregunta1"] . "<br/>";
    }
    if (!empty($_POST["pregunta2"]) && strlen($_POST["pregunta2"]) <=200 && !is_numeric($_POST["pregunta2"]) && !preg_match("/[0-9]/" , $_POST["pregunta2"])){
        echo $_POST["pregunta2"] . "<br/>";
    }    
    if (!empty($_POST["pregunta3"]) && strlen($_POST["pregunta3"]) <=200 && !is_numeric($_POST["pregunta3"]) && !preg_match("/[0-9]/" , $_POST["pregunta3"])){
        echo $_POST["pregunta3"] . "<br/>";
    }
    if (!empty($_POST["pregunta4"]) && strlen($_POST["pregunta4"]) <=200 && !is_numeric($_POST["pregunta4"]) && !preg_match("/[0-9]/" , $_POST["pregunta4"])){
        echo $_POST["pregunta4"] . "<br/>";
    }
    if (!empty($_POST["pregunta5"]) && strlen($_POST["pregunta5"]) <=200 && !is_numeric($_POST["pregunta5"]) && !preg_match("/[0-9]/" , $_POST["pregunta5"])){
        echo $_POST["pregunta5"] . "<br/>";
    }
    if (!empty($_POST["pregunta6"]) && strlen($_POST["pregunta6"]) <=200 && !is_numeric($_POST["pregunta6"]) && !preg_match("/[0-9]/" , $_POST["pregunta6"])){
        echo $_POST["pregunta6"] . "<br/>";
    }
}
?>
