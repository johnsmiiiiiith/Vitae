<?php
    $destino= "jpetro@uade.edu.ar";
    $nombre= $_POST["nombre"];
    $apellido= $_POST["apellido"];
    $telefono= $_POST["telefono"];
    $mail= $_POST["mail"];
    $mensaje= $_POST["mensaje"];
    

    $header = "Enviado desde la página de contacto:CV";
    $mensajeCompleto = $nombre . "\nnombre:" . $apellido."\napellido:" . $telefono . "\ntelefono:" . $mail. "\nmail:" . $mensaje. "\nmensaje:";

    mail($destinatario, $asunto, $mensajeCompleto, $header)
    echo "<script>alert("Enviado exitosamente.")</script>";
    echo "<script> setTimeout(\"location.href="gracias.html"\",1000)</script>"


?>
