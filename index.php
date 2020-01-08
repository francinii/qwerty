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
    //include(TEMPLATES_PATH . '/header.php');
    include(TEMPLATES_PATH . '/home.php');
   // include(TEMPLATES_PATH . '/footer.php');
     ?>
</body>

</html>