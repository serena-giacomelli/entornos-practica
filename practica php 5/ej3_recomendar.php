<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $amigo = $_POST["amigo"];
    $tu_nombre = $_POST["tu_nombre"];
    $asunto = "Te recomiendo este sitio";
    $mensaje = "$tu_nombre te recomienda visitar el sitio: http://tusitio.com";
    $headers = "From: webmaster@tusitio.com";
    mail($amigo, $asunto, $mensaje, $headers);
    echo "<p>¡Recomendación enviada!</p>";
}
?>
<form method="post" action="">
  Tu nombre: <input type="text" name="tu_nombre" required><br>
  Email de tu amigo: <input type="email" name="amigo" required><br>
  <input type="submit" value="Recomendar">
</form>