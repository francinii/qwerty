<div class="row justify-content-center section_clients" >       
    <div class="col-md-4 col-10 element-zoom-in align-self-center">
        <img class="img-fluid" src="<?=$routes["img_content_clientes"]?>" alt=" <?= $vocab["clientes_titulo"] ?>">
    </div>  
    <div class="col-md-1"></div>
    <div class="col-md-4 col-10  align-self-center">
        <h2> <?= $vocab["clientes_titulo"] ?></h2>
        <p> <?= $vocab["clientes_texto_1"] ?> </p>
        <p> <?= $vocab["clientes_texto_2"] ?>  </p>
      </div>                        
</div>

<div class="row section_client_title section_clients">
    <div class="col-md-12">
        <h2 class=""> 
             <?= $vocab["clientes_titulo_2"] ?>
        </h2>
    </div>
</div>

<div class="row mx-auto justify-content-center my-auto">
    <div class="col-9 ">
        <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <div class="col-lg-4 col-md-6">
                    <a href="<?= $routes["link_cliente_1"]?>" rel="noopener" target="_blank">
                        <img data-src="<?= $routes["img_content_cliente_1"]?>" class="img-fluid lazyload "  alt = "Clientes de Qwerty">
                    </a>
                   </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-4 col-md-6">
                    <a href="<?= $routes["link_cliente_2"]?>" rel="noopener" target="_blank">
                        <img data-src="<?= $routes["img_content_cliente_2"]?>" class="img-fluid lazyload "  alt = "Clientes de Qwerty">
                    </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-4 col-md-6">
                    <a href="<?= $routes["link_cliente_3"]?>" rel="noopener" target="_blank">
                        <img data-src="<?= $routes["img_content_cliente_3"]?>" class="img-fluid lazyload "  alt = "Clientes de Qwerty">
                   </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-4 col-md-6">
                    <a href="<?= $routes["link_cliente_4"]?>" rel="noopener" target="_blank">
                        <img data-src="<?= $routes["img_content_cliente_4"]?>" class="img-fluid lazyload "  alt = "Clientes de Qwerty">
                    </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-4 col-md-6">
                    <a href="<?= $routes["link_cliente_5"]?>" rel="noopener" target="_blank">
                        <img data-src="<?= $routes["img_content_cliente_5"]?>" class="img-fluid lazyload "  alt = "Clientes de Qwerty">
                    </a>
                    </div>
                </div>              
            </div>
            <a class="carousel-control-prev  w-auto" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next w-auto" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon  bg-dark" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>