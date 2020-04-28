<div id ="portada_expandida" class="row"> 
    <div class="col-md-12 frame frame_header">
      <img src="<?= $routes["img_layout_frame_2"] ?>" alt = "">
      <div class="anim">
          <h1><?= $vocab["descripcion_titulo"] ?></h1> 
          <h2> <?= $vocab["descripcion_subtitulo"] ?></h2>
          <p><?= $vocab["descripcion_tu_idea"]?> </p>
          <p><?= $vocab["descripcion_tu_proyecto"]?> </p>
        <a class="btn btn-warning btn-lg" href="<?= $routes["pagina_contacto"] ?>"><?= $vocab["descripcion_empecemos"] ?></a>
      </div>
      <div class="img_header">
            <img class="floating " src="<?=$routes["img_content_compu"]?>"  alt = "Computadora flotando, Qwerty." > 
      </div>             
    </div>  
</div>

<div id ="portada_reducida" class="row" style="display: none"> 
    <div class="col-md-12 frame">
      <div class="content">
          <h1><?= $vocab["descripcion_titulo"] ?></h1> 
          <h2> <?= $vocab["descripcion_subtitulo"] ?></h2>
          <p><?= $vocab["descripcion_tu_idea"]?> </p>
          <p><?= $vocab["descripcion_tu_proyecto"]?> </p>
        <a class="btn btn-warning" href="<?= $routes["pagina_contacto"] ?>"><?= $vocab["descripcion_empecemos"] ?> </a>
      </div>  
      <div class="img_reducida">
            <img class="floating " src="<?=$routes["img_content_compu"]?>" alt = "Imagen de computadora, flotando." > 
      </div>                
    </div>  
</div>

