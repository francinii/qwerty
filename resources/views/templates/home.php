<!-- Contenido HOME -->
<div class="container-fluid">
   <?php
     if(isset($_GET['pagina'])){
        $pagina = explode('/', $_GET['pagina']);
        $nombrePagina = $pagina[0];  
      }else{ 
          $nombrePagina = 'inicio';      
      };   
      
       

      if( $nombrePagina != 'inicio' &&$nombrePagina != 'contacto' && $nombrePagina != 'clientes' && $nombrePagina != 'servicios' && $nombrePagina != 'acerca'){     
         //  include($routes["seccion_error"]);  
           header('Location:'.$routes["seccion_error"]); 
      } 

      include($routes["seccion_nav"]);      
      //Agregando una seccion de encabezado
      if( $nombrePagina == 'inicio'){         
         include($routes["seccion_header"] ); 
         include($routes["seccion_descripcion"] );
      }else {
          include($routes["seccion_header_section"] ); 
      }
      if( $nombrePagina == 'acerca'){         
        // include(SECTIONS_PATH. '/description.php');
         include($routes["seccion_acerca"]);
     
      }     
      if($nombrePagina == 'servicios'){
         include($routes["seccion_servicios_detalles"]); 
      } 
       //Agregando la seccion de servicios de la empresa
      if( $nombrePagina == 'inicio' ){          
         include($routes["seccion_servicios"]); 
      }
      //Agregando la seccion de acerca de la empresa
      if( $nombrePagina == 'inicio' ){          
         include($routes["seccion_metodologia"]);  
      }
      if( $nombrePagina == 'inicio' || $nombrePagina == 'clientes'){         
         include($routes["seccion_clientes"]);  
      }           
      if($nombrePagina == 'contacto'){     
           include($routes["seccion_contacto"]);  
      }     

       include($routes["seccion_footer"]);
       include($routes["seccion_alert"]);
  
   ?>   
</div>