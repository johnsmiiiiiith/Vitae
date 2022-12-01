<?php
    $destino= "consultas@algogenial.com";
    $nombre= $_POST["Nombre"];
    $apellido= $_POST["Apellido"];
    $teléfono= $_POST["Teléfono"];
    $mail= $_POST["Mail"];
    $mensaje= $_POST["Mensaje"];
    $contenido= "Nombre:".$nNombre."\nApellido:".$Apellido."\nTelefono:".$Telefono."\nMail:".$Mail."\nMensaje:".$Mensaje;
    mail($destino, "Contacto", $contenido);
    header("Location:gracias.html");


?>