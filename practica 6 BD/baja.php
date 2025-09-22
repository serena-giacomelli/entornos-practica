<?php include("conexion.php"); ?>

<h2>Baja de Ciudad</h2>

<form method="post">
    ID de la ciudad a eliminar: <input type="number" name="id" required>
    <input type="submit" value="Eliminar">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST["id"];
    $sql = "DELETE FROM Ciudades WHERE id=$id";

    if(mysqli_query($conn, $sql)){
        echo "<p>Ciudad eliminada con éxito.</p>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
