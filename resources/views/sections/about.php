<div class="row section_about justify-content-center" >                
    <div class="col-md-4 col-12 col-sm-10  ">
        <img class="img-fluid" src="<?= $routes["img_content_logo"]?>" alt="Logo de Qwerty">
    </div>     
    <div  class="col-md-1"></div> 
    <div class="col-md-5 col-10 col-sm-10   ">            
        <h2><?= $vocab["acerca_subtitulo"] ?> </h2>     
        <p> <?= $vocab["acerca_texto"] ?>  </p>
    </div>                        
</div>

<div class="row justify-content-center section_about bg-principal" > 
    <div  class="col-md-1"></div>        
    <div class="col-md-3 col-10 col-sm-10 ">            
        <h2> <?= $vocab["acerca_titulo_mision"] ?></h2>            
        <p> <?= $vocab["acerca_texto_mision"] ?>  </p>
    </div>         
    <div class="col-md-6 col-10 col-sm-10 ">
        <img class="img-fluid" src="<?= $routes["img_content_mision"]?>" alt="<?= $vocab["acerca_titulo_mision"] ?>">
    </div>                      
</div>


<div class="row justify-content-center section_about" >                 
    <div class="col-md-5 col-10 col-sm-10 align-self-center">
        <img class="img-fluid" src="<?= $routes["img_content_vision"]?>" alt="<?= $vocab["acerca_titulo_vision"] ?>">
    </div>       
    <div class="col-md-3 col-10 col-sm-10 align-self-center">            
        <h2><?= $vocab["acerca_titulo_vision"] ?></h2>
        <p> <?= $vocab["acerca_texto_vision"] ?></p>
    </div> 
    <div  class="col-md-1"></div>                        
</div>


<div class ="row justify-content-center section-team">
    <div class=" section-title col-10 col-sm-10 col-md-10 justify-content-center d-flex ">
        <h2> <?= $vocab["team_title"] ?></h2>
    </div>
    <div class="col-12 col-md-8 ">
        <div class = "row justify-content-center section_team_card">
            <div class="col-md-4 col-sm-5 col-10 ">
                <figure class="card card-flip">
                    <div class="card-team card ">
                        <img class=" img-fluid"  src="<?=$routes["img_team_1"]?>"  class="lazyload" alt=" Francini Corrales">
                        <div class="card-team-text justify-content-center align-items-center">
                        <div class="card-team-text justify-content-center align-items-center">
                            <h3><?= $vocab["team_1"]?></h3>
                            <h4><?= $vocab["team_cargo_1"]?></h4>                            
                        </div>
                        </div>
                    </div>
                    <div class="card ">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <h3 class="card-text"><?= $vocab["team_redes_title"] ?></h3>
                            <a href="<?= $routes["social_linkedin_team_1"]?>">
                                <img src="<?= $routes["img_content_linkedin"] ?>" alt="LinkedIn"  class=" lazyload">
                            </a>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-md-4 col-sm-5 col-10">
                <figure class="card card-flip">
                    <div class="card-team card  ">
                        <img class=" img-fluid"  src="<?=$routes["img_team_2"]?>" alt="Andrey Corrales">
                        <div class="card-team-text justify-content-center align-items-center">
                            <div class="card-team-text justify-content-center align-items-center">
                                <h3><?= $vocab["team_2"]?></h3>
                                <h4><?= $vocab["team_cargo_2"]?></h4>                             
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <h3 class="card-text"><?= $vocab["team_redes_title"] ?></h3>
                            <a href="<?= $routes["social_linkedin_team_2"]?>">
                                <img src="<?= $routes["img_content_linkedin"] ?>" alt="LinkedIn"  class=" lazyload">
                            </a>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-md-4 col-sm-5 col-10">
                <figure class="card card-flip">
                    <div class="card-team card ">
                        <img class=" img-fluid"  src="<?=$routes["img_team_3"]?>" alt="Melber Corrales">
                        <div class="card-team-text justify-content-center align-items-center">             
                            <div class="card-team-text justify-content-center align-items-center">
                                <h3><?= $vocab["team_3"]?></h3>
                                <h4><?= $vocab["team_cargo_3"]?></h4>                              
                            </div>
                        </div>
                    </div>
                    <div class="card ">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <h3 class="card-text"><?= $vocab["team_redes_title"] ?></h3>
                            <a href="<?= $routes["social_linkedin_team_3"]?>">
                                <img src="<?= $routes["img_content_linkedin"] ?>" alt="LinkedIn"  class=" lazyload">
                            </a>
                        </div>
                    </div>
                </figure>
            </div>  
            <div class="col-md-4 col-sm-5 col-10">
                <figure class="card card-flip ">
                    <div class="card-team card ">
                        <img class=" img-fluid"  src="<?=$routes["img_team_4"]?>" alt="Steven Rodríguez">
                        <div class="card-team-text justify-content-center align-items-center">             
                            <div class="card-team-text justify-content-center align-items-center">
                                <h3><?= $vocab["team_4"]?></h3>
                                <h4><?= $vocab["team_cargo_4"]?></h4>                           
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <h3 class="card-text"><?= $vocab["team_redes_title"] ?></h3>
                            <a href="<?= $routes["social_linkedin_team_4"]?>">
                                <img src="<?= $routes["img_content_linkedin"] ?>" alt="LinkedIn"  class=" lazyload">
                            </a>
                        </div>
                    </div>
                </figure>
            </div>   
            <div class="col-md-4 col-sm-5 col-10">
                <figure class="card card-flip">
                    <div class="card-team card ">
                        <img class=" img-fluid"  src="<?=$routes["img_team_5"]?>" alt="Danny Valerio">
                        <div class="card-team-text justify-content-center align-items-center">             
                            <div class="card-team-text justify-content-center align-items-center">
                                <h3><?= $vocab["team_5"]?></h3>
                                <h4><?= $vocab["team_cargo_5"]?></h4>                                                        
                            </div>
                        </div>
                    </div>
                    <div class="card ">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <h3 class="card-text"><?= $vocab["team_redes_title"] ?></h3>
                            <a href="<?= $routes["social_linkedin_team_2"]?>">
                                <img src="<?= $routes["img_content_linkedin"] ?>" alt="LinkedIn"  class=" lazyload">
                            </a>
                        </div>
                    </div>
                </figure>
            </div>         
        </div>
    </div>
</div>

<div class="row justify-content-center container-service-card">
    <div class=" section-title col-12 col-sm-12 col-md-12 justify-content-center d-flex ">
        <h2>  <?= $vocab["acerca_titulo_valores"] ?></h2>
    </div>
        <div class="row col-10">            
            <div class="col-12 col-sm-6 col-md-3 service-card">
                <img class="" src="<?= $routes["img_content_compromiso"] ?>" alt="<?= $vocab["acerca_valor_1"] ?>">
                <div class="informacion-circulo">
                    <h2> <?= $vocab["acerca_valor_1"] ?>  </h2>
                    <p> <?= $vocab["acerca_valor_texto_1"] ?></p>
                </div>
            </div>     
            <div class="col-12 col-sm-6 col-md-3 service-card">
                <img class="" src="<?= $routes["img_content_confianza"] ?>" alt="<?= $vocab["acerca_valor_2"] ?>">
                <div class="informacion-circulo">
                    <h2> <?= $vocab["acerca_valor_3"] ?></h2>
                    <p> <?= $vocab["acerca_valor_texto_2"] ?> </p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 service-card">
                <img class="" src="<?= $routes["img_content_innovacion"] ?>" alt=" <?= $vocab["acerca_valor_3"] ?>">
                <div class="informacion-circulo">
                    <h2> <?= $vocab["acerca_valor_4"] ?></h2>
                    <p> <?= $vocab["acerca_valor_texto_3"] ?>   </p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 service-card">
                <img class="" src="<?= $routes["img_content_creatividad"] ?>" alt="<?= $vocab["acerca_valor_4"] ?>">
                <div class="informacion-circulo">
                    <h2> <?= $vocab["acerca_valor_2"] ?></h2>
                    <p> <?= $vocab["acerca_valor_texto_4"] ?>  </p>
                </div>
            </div>            
        </div>
    </div>
</div>
