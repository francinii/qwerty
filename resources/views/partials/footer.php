<!-- Footer -->

<footer class="page-footer font-small stylish-color-dark row">
    <div class= "conocer_proyecto col-md-12 text-center  ">
        <div ><h3 class=""><?= $vocab["footer_titulo"] ?></h3>  </div>
        <a href = "<?= $routes["pagina_contacto"] ?>"class="btn btn-warning btn-lg element-fade-in"> <?= $vocab["contacto_titulo"] ?></a> 
    </div>
    <div class="col-md-12 footer-body">
      <div class= "row">
        <div class="col-md-6 col-xs-12">
          <ul class="list-unstyled">
              <li style="padding: 5% 0 3% 0">
                <img data-src="<?= $routes["img_content_logo_3"]?>" class="lazyload" alt = "Logo de Qwerty">               
              </li> 
              <li>
                <a href="<?=$routes["link_map"]?>" target="_blank" rel="noopener">
                <img data-src="<?= $routes["img_content_direccion"]?>" class="lazyload" alt = "<?= $vocab["contacto_direccion"] ?>"> 
                <?= $vocab["contacto_direccion"] ?></a>
              </li> 
              <li>
                <a href="<?= $routes["link_waze"]?>" target="_blank" rel="noopener">
                <img data-src="<?= $routes["img_content_waze"] ?>" class="lazyload" alt = "<?= $vocab["contacto_como_llegar"] ?>"> 
                <?=$vocab["contacto_como_llegar"] ?></a>
              </li> 
              
              <li><a href="mailto:<?=$vocab["contacto_correo"]?>" >
                <img data-src="<?= $routes["img_content_correo"]?>" class="lazyload"  alt = "<?= $vocab["contacto_correo"] ?>">
                <?= $vocab["contacto_correo"] ?>
                </a>
              </li>               
              <li>
                <a href="tel: <?= $vocab["contacto_numero"] ?>" >
                <img data-src="<?= $routes["img_content_telefono"]?>"  class="lazyload" alt = "<?= $vocab["contacto_numero"] ?>"> 
                <?= $vocab["contacto_numero"] ?> </a>
              </li>  
              <li>
                <a href="<?= $routes["link_facebook"] ?>" rel="noopener" target="_blank">
                  <img  data-src="<?= $routes["img_content_facebook"]  ?>" class="lazyload" alt = "<?= $vocab["footer_facebook"] ?>">
                  <?= $vocab["footer_facebook"] ?>  
                </a> 
              </li>           
            </ul> 
        </div>
        <div class="col-md-6 col-xs-12">
          <form class="form-horizontal" action="<?= $routes["pagina_inicio"]?>" method= 'POST'>
            <h2>Formulario de contacto</h2>  
                <div class="form-group">
                  <label class=" col-md-3 col-xs-12 col-sm-12" for="nombre"><?= $vocab["contacto_form_nombre"] ?></label>
                  <div class="col-md-9 col-xs-12 col-sm-12">
                    <input type="text" class="form-control" id="nombre" name= "nombre" placeholder="Nombre Completo"  required>
                  </div>
                </div>
                <div class="form-group">
                  <label class=" col-md-3 col-xs-12 col-sm-12" for="correo"><?= $vocab["contacto_form_correo"] ?></label>
                  <div class="col-md-9 col-xs-12 col-sm-12">
                    <input type="email" class="form-control" id="correo" placeholder="Dirección de correo" name= "correo"  required>
                  </div>
                </div>
                <div class="form-group">
                  <label class=" col-md-3 col-xs-12 col-sm-12" for="mensaje"><?= $vocab["contacto_form_mensaje"] ?></label>
                  <div class="col-md-9 col-xs-12 col-sm-12">
                    <textarea type="text" class="form-control" id="mensaje" placeholder="Mensaje" name= "mensaje"  required></textarea>
                  </div>
                </div>              
                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-9">
                    <button type="button" onclick ="enviarFormulario('<?=$SERVER_URL?>')" class="btn btn-info" aria-label ="<?= $vocab["contacto_titulo"] ?>" ><?= $vocab["contacto_titulo"] ?></button>
                  </div>
                </div>
            </form> 
        </div>
      </div>
    </div>
    <div class="footer-copyright text-center col-md-12">
        <?= $vocab["footer_derechos"] ?>       
    </div>
</footer>