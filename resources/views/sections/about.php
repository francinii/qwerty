<div class="row section_about" >                
    <div class="col-md-4 col-xs-12 col-sm-10  col-sm-offset-1 col-xs-offset-1 ">
        <img class="img-fluid" src="<?= $routes["img_content_logo"]?>" alt="Logo de Qwerty">
    </div>      
    <div class="col-md-5 col-xs-10 col-sm-10 col-sm-offset-1 col-xs-offset-1   ">            
        <h2><?= $vocab["acerca_subtitulo"] ?> </h2>     
        <p> <?= $vocab["acerca_texto"] ?>  </p>
    </div>                        
</div>
<div class="row section_about bg-principal" >   
    <div class="col-md-4 col-xs-10 col-sm-10 col-sm-offset-1 col-xs-offset-1">            
        <h2> <?= $vocab["acerca_titulo_mision"] ?></h2>            
        <p> <?= $vocab["acerca_texto_mision"] ?>  </p>
    </div>             
    <div class="col-md-5 col-xs-10 col-sm-10 col-sm-offset-1 col-xs-offset-1">
        <img class="img-fluid" src="<?= $routes["img_content_mision"]?>" alt="<?= $vocab["acerca_titulo_mision"] ?>">
    </div>                       
</div>

<div class="row section_about" style="align-items: center; display: flex;" >              
    <div class="col-md-4 col-xs-10 col-sm-10 col-sm-offset-1 col-xs-offset-1">
        <img class="img-fluid" src="<?= $routes["img_content_vision"]?>" alt="<?= $vocab["acerca_titulo_vision"] ?>">
    </div>  
    <div class="col-md-5 col-xs-10 col-sm-10 col-sm-offset-1 col-xs-offset-1">            
        <h2><?= $vocab["acerca_titulo_vision"] ?></h2>
        <p> <?= $vocab["acerca_texto_vision"] ?></p>
    </div>                        
</div>
<div class="row container-service-card">
    <div class=" section-title col-xs-12 col-sm-12 col-md-12 justify-content-center d-flex ">
        <h2>  <?= $vocab["acerca_titulo_valores"] ?></h2>
    </div>
        <div class="col-xs-10 col-sm-10 col-md-10  col-xs-offset-1 ">            
            <div class="col-xs-12 col-sm-6 col-md-3 service-card">
                <img class="" src="<?= $routes["img_content_compromiso"] ?>" alt="<?= $vocab["acerca_valor_1"] ?>">
                <div class="informacion-circulo">
                    <h2> <?= $vocab["acerca_valor_1"] ?>  </h2>
                    <p> <?= $vocab["acerca_valor_texto_1"] ?></p>
                </div>
            </div>     
            <div class="col-xs-12 col-sm-6 col-md-3 service-card">
                <img class="" src="<?= $routes["img_content_confianza"] ?>" alt="<?= $vocab["acerca_valor_2"] ?>">
                <div class="informacion-circulo">
                    <h2> <?= $vocab["acerca_valor_3"] ?></h2>
                    <p> <?= $vocab["acerca_valor_texto_2"] ?> </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 service-card">
                <img class="" src="<?= $routes["img_content_innovacion"] ?>" alt=" <?= $vocab["acerca_valor_3"] ?>">
                <div class="informacion-circulo">
                    <h2> <?= $vocab["acerca_valor_4"] ?></h2>
                    <p> <?= $vocab["acerca_valor_texto_3"] ?>   </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 service-card">
                <img class="" src="<?= $routes["img_content_creatividad"] ?>" alt="<?= $vocab["acerca_valor_4"] ?>">
                <div class="informacion-circulo">
                    <h2> <?= $vocab["acerca_valor_2"] ?></h2>
                    <p> <?= $vocab["acerca_valor_texto_4"] ?>  </p>
                </div>
            </div>            
        </div>
    </div>
</div>
