
<div class="row section_contact " >   
    <div class="col-md-5 col-xs-10 col-sm-10  mx-auto ">
     <ul class="list-unstyled">  
        <h3 class="font-weight-bold text-uppercase mt-3 mb-4"><?= $vocab["contacto_titulo"] ?></h3>        
          <li>
            <a href="<?= $routes["link_map"]?>" target="_blank">
              <img src="<?= $routes["img_content_direccion"]?>"> 
              <?= $vocab["contacto_direccion"] ?>
             </a>
          </li>                  
          <li>
            <a href="mailto:<?=$routes["img_content_correo"]?>">
              <img src="<?= $routes["img_content_correo"]?>">
              <?= $vocab["contacto_correo"] ?>
            </a>
          </li>               
          <li>
            <a><img src="<?= $routes["img_content_telefono"]?>"> 
                <?= $vocab["contacto_numero"] ?>
            </a>
          </li>            
        </ul>       
        <iframe  src="<?=$routes["link_iframe_map"]?>" width="450" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>      
    <div class="col-md-5 col-xs-10 col-sm-10  mx-auto ">     
        <h3 class="font-weight-bold text-uppercase mt-3 mb-4">
             <?= $vocab["contacto_form_titulo"] ?>     
        </h3>  
       <form class="form-horizontal" action="">
              <div class="form-group">
                <label class="control-label col-sm-2" for="name"><?= $vocab["contacto_form_nombre"] ?></label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name ="nombre" placeholder="Nombre Completo">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="mail" name ="correo"><?= $vocab["contacto_form_correo"] ?></label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="mail" placeholder="Dirección de correo">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="message" name ="mensaje"><?= $vocab["contacto_form_mensaje"] ?></label>
                <div class="col-sm-10">
                  <textarea type="text" class="form-control" id="mesage" placeholder="Mensaje">
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
