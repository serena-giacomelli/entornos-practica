<?php
if(isset($_COOKIE["contador"])){
    $visitas = $_COOKIE["contador"] + 1;
    setcookie("contador", $visitas, time()+3600*24*365);
    echo "Has visitado esta página $visitas veces.";
} else {
    setcookie("contador", 1, time()+3600*24*365);
    echo "Bienvenido, es tu primera visita.";
}
?>
