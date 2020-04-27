<!-- Footer -->
<div class="row">
  <div class="col-md-12 frame">
        <img src="<?= $routes["img_layout_frame_4"];?>">        
    </div>
</div>
<footer class="page-footer font-small stylish-color-dark row">
    <div class= "conocer_proyecto col-md-12 text-center ">
          <h2 class="element-fade-in"><?= $vocab["footer_titulo"] ?></h2>  
          <a href = "<?= $routes["pagina_contacto"] ?>"class="btn btn-warning btn-lg element-fade-in"> <?= $vocab["contacto_titulo"] ?></a> 
    </div>   
    <div class="footer-body col-md-12">
      <div class="row">
        <div class="footer-col col-md-5 mx-1">
          
          <ul class="list-unstyled">
            <li style="padding: 5% 0 3% 0">
              <img src="<?= $routes["img_content_logo_3"]?>">               
            </li> 
            <li>
              <a href="<?=$routes["link_map"]?>" target="_blank">
              <img src="<?= $routes["img_content_direccion"]?>"> 
              <?= $vocab["contacto_direccion"] ?></a>
            </li>                  
            <li><a href="mailto:<?=$vocab["contacto_correo"]?>">
              <img src="<?= $routes["img_content_correo"]?>">
              <?= $vocab["contacto_correo"] ?>
              </a>
            </li>               
            <li>
              <a ><img src="<?= $routes["img_content_telefono"]?>"> 
              <?= $vocab["contacto_numero"] ?> </a>
            </li>            
          </ul> 
          <ul class="list-unstyled">
           <li>
              <a href="<?= $vocab["footer_facebook"]  ?>" target="_blank">
                <img  src="<?= $routes["img_content_facebook"]  ?>" alt="">
                <?= $vocab["footer_facebook"] ?>  
              </a> 
            </li>  
           </ul>      
        </div>
      
        <div class="col-md-5 mx-auto">
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4"><?= $vocab["contacto_titulo"] ?></h5>
        
            <form class="form-horizontal" action="<?= $routes["pagina_inicio"]?>" method= 'POST'>
              <div class="form-group">
                <label class="control-label col-sm-2" for="nombre"><?= $vocab["contacto_form_nombre"] ?></label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nombre" name= "nombre" placeholder="Nombre Completo"  required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="correo"><?= $vocab["contacto_form_correo"] ?></label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="correo" placeholder="Dirección de correo" name= "correo"  required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="mensaje"><?= $vocab["contacto_form_mensaje"] ?></label>
                <div class="col-sm-10">
                  <textarea type="text" class="form-control" id="mensaje" placeholder="Mensaje" name= "mensaje"  required>
                  </textarea>
                </div>
              </div>              
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-info"><?= $vocab["contacto_titulo"] ?></button>
                </div>
              </div>
            </form> 
        </div>
      </div>   
    </div>
    <div class="footer-copyright text-center py-3 col-md-12">
        <?= $vocab["footer_derechos"] ?>       
    </div>
</footer>

<?php


$destinatario = $vocab["contacto_correo"] ;
if (isset($_POST['nombre']) && isset($_POST['mensaje']) && isset($_POST['correo'])) { 
    $nombre = $_POST['nombre'];
    $mensaje = $_POST['mensaje'];
    $correo = $_POST['correo'];
      $contenidoformulario = "Detalle del Formulario:\n\n";
    $contenidoformulario .= "Nombre: ". $nombre."\n";
    $contenidoformulario .= "Correo: ". $correo."\n";
    $contenidoformulario .= "Mensaje: \n". $mensaje."\n";
    mail($destinatario,$nombre,$contenidoformulario);
}

?>



