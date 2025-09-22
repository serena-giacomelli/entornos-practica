<?php
session_start();
$conn = mysqli_connect("localhost","root","","base2");
$mail = $_POST["mail"];
$res = mysqli_query($conn,"SELECT nombre FROM alumnos WHERE mail='$mail'");
if($row = mysqli_fetch_assoc($res)){
    $_SESSION["nombre"] = $row["nombre"];
    echo "Bienvenido ".$row["nombre"]."<br>";
    echo "<a href='bienvenida.php'>Ir a bienvenida</a>";
} else {
    echo "Mail no encontrado.";
}
?>
