<?php
session_start();
$conn = mysqli_connect("localhost","root","","Compras");
if(!isset($_SESSION["carrito"])) { echo "Carrito vacío."; exit; }
echo "<h2>Carrito</h2><ul>";
foreach($_SESSION["carrito"] as $id){
    $res = mysqli_query($conn,"SELECT * FROM catalogo WHERE id=$id");
    if($row = mysqli_fetch_assoc($res)){
        echo "<li>".$row["producto"]." - $".$row["precio"]."</li>";
    }
}
echo "</ul><a href='catalogo.php'>Volver al catálogo</a>";
?>
