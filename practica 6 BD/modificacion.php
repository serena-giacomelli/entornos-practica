<?php include("conexion.php"); ?>

<h2>Modificación de Ciudad</h2>

<form method="post">
    ID: <input type="number" name="id" required><br>
    Nueva Ciudad: <input type="text" name="ciudad"><br>
    Nuevo País: <input type="text" name="pais"><br>
    Nuevos Habitantes: <input type="number" step="0.01" name="habitantes"><br>
    Nueva Superficie: <input type="number" step="0.01" name="superficie"><br>
    Tiene Metro: <input type="checkbox" name="tieneMetro"><br>
    Nuevo Código Postal: <input type="number" name="codigoPostal"><br>
    <input type="submit" value="Modificar">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST["id"];
    $ciudad = $_POST["ciudad"];
    $pais = $_POST["pais"];
    $habitantes = $_POST["habitantes"];
    $superficie = $_POST["superficie"];
    $tieneMetro = isset($_POST["tieneMetro"]) ? 1 : 0;
    $codigoPostal = $_POST["codigoPostal"];

    $sql = "UPDATE Ciudades SET 
            ciudad='$ciudad', pais='$pais', habitantes='$habitantes', 
            superficie='$superficie', tieneMetro='$tieneMetro', 
            codigoPostal='$codigoPostal'
            WHERE id=$id";

    if(mysqli_query($conn, $sql)){
        echo "<p>Ciudad modificada con éxito.</p>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
