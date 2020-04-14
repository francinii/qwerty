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
      //Agregando una seccion de encabezado
      if( $nombrePagina == 'inicio'){         
         include(SECTIONS_PATH. '/header.php'); 
      }else {
          include(SECTIONS_PATH. '/header_section.php'); 
      }
      //Agregando la seccion de acerca de la empresa
      if(  $nombrePagina == 'inicio' || $nombrePagina == 'acerca'){         
         include(SECTIONS_PATH. '/description.php');
      }      
       //Agregando la seccion de servicios de la empresa
      if( $nombrePagina == 'inicio' || $nombrePagina == 'servicios'){          
         include(SECTIONS_PATH. '/services.php'); 
      }
      //Agregando la seccion de acerca de la empresa
      if( $nombrePagina == 'inicio' ){          
         include(SECTIONS_PATH. '/methodology.php');  
      }

     // if( $nombrePagina == 'inicio' || $nombrePagina == 'acerca'){
        // include(SECTIONS_PATH. '/about.php'); 
     // }
      
      if( $nombrePagina == 'inicio' || $nombrePagina == 'clientes'){         
         include(SECTIONS_PATH. '/clients.php');  
      }      

      if( $nombrePagina == 'inicio' || $nombrePagina == 'portafolio'){     
        //  include(SECTIONS_PATH. '/portafolio.php');  
      }    
      if($nombrePagina == 'contacto'){     
           include(SECTIONS_PATH. '/contact.php');  
       } 
       
       
      include(PARTIALS_PATH. '/footer.php');
  
   ?>   
</div>