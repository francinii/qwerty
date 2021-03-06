<div class="row section_contact " >   
    <div class="col-md-5 col-10  mx-auto ">
     <ul class="list-unstyled">  
        <h3 class="font-weight-bold text-uppercase mt-3 mb-4"><?= $vocab["contacto_titulo"] ?></h3>        
          <li>
            <a href="<?= $routes["link_map"]?>" target="_blank">
              <img src="<?= $routes["img_content_direccion"]?>" alt = " <?= $vocab["contacto_direccion"] ?>"> 
              <?= $vocab["contacto_direccion"] ?>
             </a>
          </li> 
          <li>
              <a href="<?= $routes["link_waze"]?>" target="_blank">
              <img src="<?= $routes["img_content_waze"] ?>" alt = "<?=$vocab["contacto_como_llegar"] ?>"> 
              <?=$vocab["contacto_como_llegar"] ?></a>
          </li>                  
          <li>
            <a href="mailto:<?=$routes["img_content_correo"]?>">
              <img src="<?= $routes["img_content_correo"]?>" alt = "<?= $vocab["contacto_correo"] ?>">
              <?= $vocab["contacto_correo"] ?>
            </a>
          </li>               
          <li>
            <a href="tel: <?= $vocab["contacto_numero"] ?>">
            <img src="<?= $routes["img_content_telefono"]?>" alt = "<?= $vocab["contacto_numero"] ?>"> 
            <?= $vocab["contacto_numero"] ?> </a>
          </li> 
          <li>
              <a href="<?= $routes["link_facebook"] ?>" target="_blank">
                <img  src="<?= $routes["img_content_facebook"]  ?>" alt=" <?= $vocab["footer_facebook"] ?> ">
                <?= $vocab["footer_facebook"] ?>  
              </a> 
          </li>            
        </ul>       
       </div>      
    <div class="col-md-5 col-10  mx-auto ">     
        <h3 class="font-weight-bold text-uppercase mt-3 mb-4">
             <?= $vocab["contacto_form_titulo"] ?>     
        </h3>  
        <form class="form-horizontal" action="<?= $routes["pagina_inicio"]?>" method= 'POST'>
            <div class="form-group row">
              <label  class="col-sm-2 col-form-label"  for="nombre"><?= $vocab["contacto_form_nombre"] ?></label>
              <div class="col-md-10 col-12 ">
                <input type="text" class="form-control" id="nombre" name= "nombre" placeholder="<?= $vocab["contacto_form_nombre"] ?>"  required>
              </div>
            </div>
            <div class="form-group row">
              <label  class="col-sm-2 col-form-label"  for="correo"><?= $vocab["contacto_form_correo"] ?></label>
              <div class="col-md-10 col-12 ">
                <input type="email" class="form-control" id="correo" placeholder="<?= $vocab["contacto_form_correo"] ?>" name= "correo"  required>
              </div>
            </div>
            <div class="form-group row">
              <label  class="col-sm-2 col-form-label" for="mensaje"><?= $vocab["contacto_form_mensaje"] ?></label>
              <div class="col-md-10 col-12 ">
                <textarea type="text" class="form-control" id="mensaje" placeholder="<?= $vocab["contacto_form_mensaje"] ?>" name= "mensaje"  required></textarea>
              </div>
            </div>              
            <div class="form-group row">
            <label  class="col-sm-2 col-form-label" for="mensaje"></label>
            
              <div class="col-md-10">
                <button type="button" onclick ="enviarFormulario('<?=$SERVER_URL?>')" class="btn btn-info" aria-label ="<?= $vocab["contacto_titulo"] ?>" aria-label="<?= $vocab["contacto_titulo"] ?>"><?= $vocab["contacto_titulo"] ?></button>
              </div>
            </div>
        </form> 
    </div> 
    <div  class="col-12">
        <iframe  src="<?=$routes["link_iframe_map"]?>" width="100%" height="400" frameborder="0" style="border:0; padding:2%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>                       
</div>
