<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Qwerty</title>
    <?php
    include('includes.php'); // se encarga de incluir las librerías necesarias
    $lang = locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);
    ($lang == 'en') ? include('lang/lang.en') : include('lang/lang.es');
    include('config.php');
    ?>
</head>

<body>
    <?php
    include(TEMPLATES_PATH . '/header.php');
    include(TEMPLATES_PATH . '/home.php');
    include(TEMPLATES_PATH . '/footer.php');
     ?>
 

<script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<script src="inc/js/carousel.js" type="text/javascript"></script>



</body>

</html>