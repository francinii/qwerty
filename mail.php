<?php
 include('config.php');

$destinatario = $vocab["contacto_correo"];
if (isset($_POST['nombre']) && isset($_POST['mensaje']) && isset($_POST['correo'])) { 
    $nombre = $_POST['nombre'];
    $mensaje = $_POST['mensaje'];
    $correo = $_POST['correo'];
    $contenidoformulario = "Detalle del Formulario:\n\n";
    $contenidoformulario .= "Nombre: ". $nombre."\n";
    $contenidoformulario .= "Correo: ". $correo."\n";
    $contenidoformulario .= "Mensaje: \n". $mensaje."\n";
    try{
        $data = (@mail($destinatario,$nombre,$contenidoformulario) == true)? 1:0; 
        echo $data;      
    }
    catch (Exception $e) {
        echo $data;
    }   
}
?>