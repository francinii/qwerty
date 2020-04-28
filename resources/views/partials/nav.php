<nav class=" header navbar-fixed-top navbar navbar-expand-md navbar-dark"> 
  <div class="menu_collapsed">
    <a class="navbar-brand" href="<?=$routes["pagina_inicio"]?> ">
      <img src="<?=$routes["img_content_logo_2"]?> " width="100" height="30" class="d-inline-block align-top" alt="Logo de Qwerty">
    </a>  
 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
      <span class="navbar-toggler-icon"></span>
    </button>   
  </div >
  <div class="collapse navbar-collapse" id = "main_nav" >       
    <ul class="nav navbar-nav navbar-right ">         
        <li class="nav-item"> <a href="<?=$routes["pagina_acerca"]?>">  <?= $vocab["menu_acerca_de"] ?> &nbsp;   </a>  </li>        
        <li class="nav-item"> <a href="<?=$routes["pagina_servicios"]?>"> <?= $vocab["menu_servicios"] ?> &nbsp;  </a>   </li>
        <li class="nav-item"> <a href="<?=$routes["pagina_clientes"]?>"> <?= $vocab["menu_clientes"] ?> &nbsp;  </a></li>
        <li class="nav-item"> <a href="<?=$routes["pagina_contacto"]?>"> <?= $vocab["menu_contactenos"] ?> &nbsp;  </a></li>
      </ul> 
  </div>   
</nav>


