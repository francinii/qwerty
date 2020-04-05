<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Qwerty</title>
        <?php 
            include('config.php');
            include('includes.php'); 
           
        ?>
    </head>
    <body>    
        <?php include(TEMPLATES_PATH. '/home.php'); ?>    

        <script src="<?php echo SERVERURL?>lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
        <script src="<?php echo SERVERURL?>resources/js/carousel.js" type="text/javascript"></script>
    </body>
</html>