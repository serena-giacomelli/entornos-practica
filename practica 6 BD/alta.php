<?php
$conn = mysqli_connect("localhost", "root", "", "Capitales")
    or die("Error de conexión: " . mysqli_error($conn));

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $ciudad = $_POST["ciudad"];
    $pais = $_POST["pais"];
    $habitantes = $_POST["habitantes"];
    $superficie = $_POST["superficie"];
    $tieneMetro = isset($_POST["tieneMetro"]) ? 1 : 0;
    $codigoPostal = $_POST["codigoPostal"];

    $sql = "INSERT INTO Ciudades (ciudad, pais, habitantes, superficie, tieneMetro, codigoPostal) 
            VALUES ('$ciudad', '$pais', '$habitantes', '$superficie', '$tieneMetro', '$codigoPostal')";

    mysqli_query($conn, $sql) or die("Error: " . mysqli_error($conn));
    echo "Ciudad agregada con éxito.";
}
?>

<form method="post">
    Ciudad: <input type="text" name="ciudad"><br>
    País: <input type="text" name="pais"><br>
    Habitantes: <input type="text" name="habitantes"><br>
    Superficie: <input type="text" name="superficie"><br>
    Tiene Metro: <input type="checkbox" name="tieneMetro"><br>
    Código Postal: <input type="text" name="codigoPostal"><br>
    <input type="submit" value="Agregar">
</form>
<?php