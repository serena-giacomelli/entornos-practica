<form method="get">
    Buscar canción: <input type="text" name="q">
    <input type="submit" value="Buscar">
</form>
<?php
if(isset($_GET["q"])){
    $q = $_GET["q"];
    $conn = mysqli_connect("localhost","root","","prueba");
    $res = mysqli_query($conn,"SELECT * FROM buscador WHERE canciones LIKE '%$q%'");
    echo "<h2>Resultados:</h2><ul>";
    while($row = mysqli_fetch_assoc($res)){
        echo "<li>".$row["canciones"]."</li>";
    }
    echo "</ul>";
}
?>
