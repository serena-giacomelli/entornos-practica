<?php
session_start();
if(isset($_SESSION["contador"])){
    $_SESSION["contador"]++;
} else {
    $_SESSION["contador"] = 1;
}
echo "Has visitado esta página " . $_SESSION["contador"] . " veces durante esta sesión.";
?>