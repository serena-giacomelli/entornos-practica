<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $destinatario = "webmaster@tusitio.com"; // Cambia por el correo real
    $asunto = "Consulta desde el formulario de contacto";
    $mensaje = "Nombre: " . $_POST["nombre"] . "\n";
    $mensaje .= "Email: " . $_POST["email"] . "\n";
    $mensaje .= "Consulta: " . $_POST["consulta"] . "\n";
    $headers = "From: " . $_POST["email"];
    mail($destinatario, $asunto, $mensaje, $headers);
    echo "<p>¡Gracias por tu consulta!</p>";
}
?>
<form method="post" action="">
  Nombre: <input type="text" name="nombre" required><br>
  Email: <input type="email" name="email" required><br>
  Consulta:<br>
  <textarea name="consulta" required></textarea><br>
  <input type="submit" value="Enviar">
</form>