<!-- Contenido HOME -->
 

<div class="container-fluid">
   <?php
     if(isset($_GET['pagina'])){
        $pagina = explode('/', $_GET['pagina']);
        $nombrePagina = $pagina[0];
       //var_dump($pagina);
      }else{ 
          $nombrePagina = 'inicio';
         // var_dump($pagina);
      };
      
      include(PARTIALS_PATH. '/nav.php');      
      if( $nombrePagina == 'inicio'){
         include(SECTIONS_PATH. '/header.php'); 
      }
      include(SECTIONS_PATH. '/description.php'); 
       
      if( $nombrePagina == 'inicio' || $nombrePagina == 'acerca'){
         include(SECTIONS_PATH. '/about.php'); 
      }
      if( $nombrePagina == 'inicio' || $nombrePagina == 'clients'){
         include(SECTIONS_PATH. '/clients.php');  
      }
      if( $nombrePagina == 'inicio' || $nombrePagina == 'portafolio'){
         include(SECTIONS_PATH. '/portafolio.php');  
      }                
      include(PARTIALS_PATH. '/footer.php');
  
   ?>   
</div>