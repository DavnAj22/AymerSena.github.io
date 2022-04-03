<?php include('../template/cabecera.php');
include('../CSS/menus.css');
session_start();
if (!isset($SESSION["Admin"])) {
    header("Location: ../index.php");
}
require("conexionBD.php");
$documentoFunLoguea = 1110000001; /// Esta variable debe capturar quien se logueo por el momento se pone manual.
$query = $conexion->query("SELECT * FROM tblusuario WHERE UsuCedula='$documentoFunLoguea'");
while ($row = $query->fetch_assoc()) {
    $return = $row['UsuFotoPerfil'];
}
if ($return == NULL) {
    $return = "https://1.bp.blogspot.com/-MeCxaLO8njU/YT5yRMu7KrI/AAAAAAAAAHI/NhoZIlmquMUWDoiVjAzF3nTF1WnwqRTSQCNcBGAsYHQ/s0/descarga.png";
}
?>
<div class="titlePag">
    <h1>Titulo de la página va acá</h1>
</div>
<div class="container">
    <div class="cuerpo">

        <div class="titlePag">
            <h1>Titulo de la página va acá</h1>
        </div>
        <div class="container">
            <div id="Menu">
                <h1 id="title">¿Que deseas hacer?</h1>
                <nav id="logos">
                    <ul>
                        <li>
                            <a href=""><img class="logo" src="https://1.bp.blogspot.com/--_3Twc7jE_4/YT5yHKJ8sqI/AAAAAAAAAF0/ywykiJsi3yY8S1op1g-MyU8O072GJoeYACNcBGAsYHQ/s0/IconoAdmPerfiles.png"></a>
                        </li>
                        <li>
                            <a href=""><img class="logo" src="https://1.bp.blogspot.com/-pWbP6N_2-F0/YT5yIQZXEtI/AAAAAAAAAGA/n0-4cvp7gFYTvNkgiiwsFx1FQM-5hRWZACNcBGAsYHQ/s320/IconoCarDesArch.png"></a>
                        </li>
                        <li>
                            <a href=""><img class="logo" src="https://1.bp.blogspot.com/-yxwhRnbY8mQ/YT5yLdXGtOI/AAAAAAAAAGY/2MsyxUcL5uAVrLU0RpV2-lZvznBtNf4CgCNcBGAsYHQ/s320/IconoCrudDataSen.png"></a>
                        </li>
                        <li>
                            <a href="SolicitudEmpleado.php"><img class="logo" src="https://1.bp.blogspot.com/-CVbG8VMJUGg/YT5yP3LJHnI/AAAAAAAAAG8/oSqBcKNbMWcH6gM4eXFSKPc2TC3Mm0rJgCNcBGAsYHQ/s320/IconoSolicitarYConsuVa.png"></a>
                        </li>
                        <li>
                            <a href="datosBasicos.html"><img class="logo" src="https://1.bp.blogspot.com/-a5TanyEIRgk/YT5yHI4qFcI/AAAAAAAAAFs/mCLSeiyQ5RMHRy8tevTtSORRIaODcvaFQCNcBGAsYHQ/s320/IconoActualiData.png"></a>
                        </li>
                        <li>
                            <a href="menuInformes.php"><img class="logo" src="https://1.bp.blogspot.com/-zNm1SxTs37c/YT5yN-a4IwI/AAAAAAAAAGs/ya7hx4ayapcuP53sZUm-XyRiY27bjjnIACNcBGAsYHQ/s0/IconoInformes.png"></a>
                        </li>
                    </ul>
                </nav>
                <img src="https://1.bp.blogspot.com/-CRGFBvE8s8k/YT5yRhIEj8I/AAAAAAAAAHM/dplt4qgxJmcjfSP213rWRyF0EoW_BQlSACNcBGAsYHQ/s332/logoPag.png" id="logoUnix">
            </div>
        </div>
    </div>
    <img src="https://1.bp.blogspot.com/-CRGFBvE8s8k/YT5yRhIEj8I/AAAAAAAAAHM/dplt4qgxJmcjfSP213rWRyF0EoW_BQlSACNcBGAsYHQ/s332/logoPag.png" id="logoUnix" />
</div>
<?php include('../template/pie.php'); ?>