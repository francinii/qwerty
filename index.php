<? session_start(); ?>
<!DOCTYPE html>
<html  lang="es">
    <head>   
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165121308-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-165121308-1');
        </script>
     
        <title>Qwerty Costa Rica | Empresa de desarrollo de software</title>
        <?php 
            include('config.php');
            include('includes.php');            
        ?>        
        <link href="<?= $routes["css_animate"]?>" rel="stylesheet" type="text/css"/>
    </head>
    <body>      
        <?php include($routes["pagina_home"]); ?>    
        <script src="<?= $routes["js_jquery"] ?>"></script>
       <!-- <script src="  //$routes["js_popper"]" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
        <script src="<?= $routes["js_bootstrap_local"] ?>" type="text/javascript"></script>       
        <script src="<?= $routes["js_carousel"] ?>" type="text/javascript"></script>
        <script src="<?= $routes["js_timeline"] ?>" type="text/javascript"></script>   
        <script src="<?=  $routes["js_form"]  ?>" type="text/javascript"></script>
        <script src="<?=  $routes["js_lazy_load"]  ?>" async=""></script>
        <noscript>
            <div class="noscript alert alert-warning fixed-bottom show " role="alert">                
                <strong>¡Advertencia!</strong>
                Este sitio requiere el uso de JavaScript. Por favor, habilita JavaScript
                en tu navegador y recarga la página.
            </div>        
        </noscript>
    
    </body>
    
</html>