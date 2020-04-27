<div class="row section_clients" >                   
    <div class="col-md-4 col-xs-10 col-sm-10 mx-auto element-zoom-in">
        <img class="img-fluid" src="<?=$routes["img_content_logo"]?>" alt="">
    </div>          
    <div class="col-md-5 col-xs-10 col-sm-10 mx-auto element-fade-in">            
        <h2> <?= $vocab["clientes_titulo"] ?></h2>
        <p> <?= $vocab["clientes_texto_1"] ?> </p>
        <p> <?= $vocab["clientes_texto_2"] ?>  </p>
    </div>                        
</div>
<div class="row section_client_title section_clients">
    <div class="col-md-12">
        <h2 class="element-zoom-in"> 
             <?= $vocab["clientes_titulo_2"] ?>
        </h2>
    </div>
</div>
<div class="row ">
    <div class="col-md-8 col-sm-10 col-xs-10 col-md-offset-2 col-sm-offset-2 col-xs-offset-1">
        <div class="carousel slide multi-item-carousel" id="theCarousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="col-xs-4">
                        <a href="<?= $routes["link_cliente_1"]?>">
                            <img src="<?= $routes["img_content_cliente_1"]?>" class="img-responsive">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="col-xs-4">
                        <a href="<?=$routes["link_cliente_2"]?>">
                            <img src="<?= $routes["img_content_cliente_2"]?>" class="img-responsive">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="col-xs-4">
                        <a href="<?=$routes["link_cliente_3"]?>">
                            <img src="<?= $routes["img_content_cliente_3"]?>" class="img-responsive">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="col-xs-4">
                        <a href="<?=$routes["link_cliente_4"]?>">
                            <img src="<?= $routes["img_content_cliente_4"]?>" class="img-responsive">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="col-xs-4">
                        <a href="<?=$routes["link_cliente_5"]?>">
                            <img src="<?= $routes["img_content_cliente_5"]?>" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
    </div>
</div>