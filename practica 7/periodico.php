<?php
if(isset($_POST["titular"])){
    setcookie("titular", $_POST["titular"], time()+3600*24*30);
    header("Location: periodico.php");
}
$titular = isset($_COOKIE["titular"]) ? $_COOKIE["titular"] : "todos";
?>
<!DOCTYPE html>
<html>
<head><title>Periódico</title></head>
<body>
<h2>Periódico Online</h2>

<form method="post">
    <input type="radio" name="titular" value="politica"> Política
    <input type="radio" name="titular" value="economia"> Economía
    <input type="radio" name="titular" value="deporte"> Deporte
    <input type="submit" value="Ver">
</form>

<?php
if($titular=="politica" || $titular=="todos") echo "<p><b>Noticia política:</b> Congreso aprueba nueva ley.</p>";
if($titular=="economia" || $titular=="todos") echo "<p><b>Noticia económica:</b> El dólar bajó 2%.</p>";
if($titular=="deporte" || $titular=="todos") echo "<p><b>Noticia deportiva:</b> Argentina gana el partido.</p>";
?>

<a href="borrar_cookie.php">Borrar preferencia</a>
</body>
</html>
