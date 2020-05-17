<?php
 //include('config.php'); Por algun motivo si se agrega el config no funca

$destinatario = "info@qwerty.co.cr";
if (isset($_POST['nombre']) && isset($_POST['mensaje']) && isset($_POST['correo'])) { 
    $nombre = $_POST['nombre'];
    $mensaje = $_POST['mensaje'];
    $correo = $_POST['correo'];
    $contenidoformulario = "Detalle del Formulario:\n\n";
    $contenidoformulario .= "Nombre: ". $nombre."\n";
    $contenidoformulario .= "Correo: ". $correo."\n";
    $contenidoformulario .= "Mensaje: \n". $mensaje."\n";

    //nuevo
    header("Content-Type: application/json", true);
    header('Access-Control-Allow-Origin: *');
    /* Return JSON */
   
    try{
        $data = (@mail($destinatario,$nombre,$contenidoformulario) == true)? 1:0; 
        //echo $data;  
        echo json_encode($data);   
    }
    catch (Exception $e) {
        echo $data;
    }   
}
?>