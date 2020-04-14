<nav class=" header navbar-fixed-top navbar navbar-expand-md navbar-dark"> 
  <div class="menu_collapsed">
    <a class="navbar-brand" href="<?php echo SERVER_URL?>inicio">
      <img src="<?php echo SERVER_URL?>img/content/logo3.webp" width="100" height="30" class="d-inline-block align-top" alt="">
    </a>  
  <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
      <span class="navbar-toggler-icon"></span>
    </button>   
  </div >
  <div class="collapse navbar-collapse" id = "main_nav" >       
    <ul class="nav navbar-nav navbar-right ">    
        <!-- <img id="imgNavBar" src="../desamar/img/logo.png" height="50px">-->        
        <li class="nav-item"> <a href="<?php echo SERVER_URL?>acerca">  <?= $vocab["menu_acerca_de"] ?> &nbsp;   </a>  </li>        
        <li class="nav-item"> <a href="<?php echo SERVER_URL?>servicios"> <?= $vocab["menu_servicios"] ?> &nbsp;  </a>   </li>
        <li class="nav-item"> <a href="<?php echo SERVER_URL?>portafolio"> <?= $vocab["menu_portafolio"] ?> &nbsp;  </a></li>
        <li class="nav-item"> <a href="<?php echo SERVER_URL?>clientes"> <?= $vocab["menu_clientes"] ?> &nbsp;  </a></li>
        <li class="nav-item"> <a href="<?php echo SERVER_URL?>contacto"> <?= $vocab["menu_contactenos"] ?> &nbsp;  </a></li>
      </ul> 
  </div>   
</nav>


