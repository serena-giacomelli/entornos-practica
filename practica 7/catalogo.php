<?php
session_start();
$conn = mysqli_connect("localhost","root","","Compras");
$res = mysqli_query($conn,"SELECT * FROM catalogo");
echo "<h2>Catálogo</h2><ul>";
while($row = mysqli_fetch_assoc($res)){
    echo "<li>".$row["producto"]." - $".$row["precio"]."
          <a href='carrito.php?id=".$row["id"]."'>Agregar</a></li>";
}
echo "</ul><a href='ver_carrito.php'>Ver carrito</a>";
?>
