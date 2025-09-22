<?php
session_start();
$_SESSION["usuario"] = $_POST["usuario"];
$_SESSION["clave"] = $_POST["clave"];
echo "Variables de sesión creadas.<br>";
echo "<a href='sesion2.php'>Ir a la siguiente página</a>";
?>
