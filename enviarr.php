<?php
    
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $telefono = $_POST["telefono"];
    $mail = $_POST["mail"];
    $mensaje = $_POST["mensaje"];

    
    //como me llegar el mensaje

    $mensaje = ¨Este mensaje fue enviado:¨. $nombre . ¨,\r\n¨;
    $mensaje = ¨Su apellido es:¨. $apellido. ¨,\r\n¨;
    $mensaje = ¨Su telefono es:¨. $telefono. ¨,\r\n¨;
    $mensaje = ¨Su mail es:¨. $mail. ¨,\r\n¨;
    $mensaje = ¨Su mensaje es:¨. $mensaje. ¨,\r\n¨;

    $para = ¨jpetro@uade.edu.ar¨;
    $asunto = ¨Este mensaje fue enviadeo desde tu cv.¨;
    
    //funcion mail
    mail($para, $asunto, utf8_decode($mensaje), $header);
    //redireccion
    header(¨gracias.html¨);
    
    

    

?>