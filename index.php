<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Qwerty</title>
        <?php 
            include('config.php');
            include('includes.php');            
        ?>        
    <link href="<?= $routes["css_animate"]?>" rel="stylesheet" type="text/css"/>
    </head>
    <body>  
    
        <?php include($routes["pagina_home"]); ?>    
        <script src="<?= $routes["js_bootstrap_local"] ?>" type="text/javascript"></script>
        <script src='<?= $routes["js_jquery"] ?>'></script>
        <script src='<?= $routes["js_bootstrap"] ?>'></script>
        <script src="<?= $routes["js_carousel"] ?>" type="text/javascript"></script>
        <script src="<?= $routes["js_timeline"] ?>" type="text/javascript"></script>   
        <script src="<?=  $routes["js_form"]  ?>" type="text/javascript"></script>
    </body>
</html>