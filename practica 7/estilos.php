<?php
// Guardar preferencia de estilo en cookie
if(isset($_POST["estilo"])){
    setcookie("estilo", $_POST["estilo"], time()+86400*30); // dura 30 días
    header("Location: estilos.php");
}
$estilo = isset($_COOKIE["estilo"]) ? $_COOKIE["estilo"] : "default";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Página con estilos</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $estilo; ?>.css">
</head>
<body>
<h2>Página con estilo recordado</h2>
<form method="post">
    <select name="estilo">
        <option value="default">Default</option>
        <option value="oscuro">Oscuro</option>
        <option value="claro">Claro</option>
    </select>
    <input type="submit" value="Cambiar estilo">
</form>
</body>
</html>
