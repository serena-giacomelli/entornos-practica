<?php
include("conexion.php");

$result = mysqli_query($conn, "SELECT * FROM Ciudades");

echo "<h2>Listado de Ciudades</h2>";
echo "<table border='1'>
<tr>
<th>ID</th><th>Ciudad</th><th>País</th><th>Habitantes</th><th>Superficie</th><th>Tiene Metro</th><th>Código Postal</th>
</tr>";

while($row = mysqli_fetch_assoc($result)){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['ciudad']}</td>
    <td>{$row['pais']}</td>
    <td>{$row['habitantes']}</td>
    <td>{$row['superficie']}</td>
    <td>" . ($row['tieneMetro'] ? "Sí" : "No") . "</td>
    <td>{$row['codigoPostal']}</td>
    </tr>";
}
echo "</table>";
?>
