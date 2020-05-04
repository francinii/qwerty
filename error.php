<!DOCTYPE html>
<html style="width:100%; background-color:#24A6EC; color:white;" >
    <head>
        <meta charset="UTF-8">
        <title>Qwerty</title>       
        <?php include('config.php'); ?>
    </head>
    <body>   
        <h1 style= "text-align:center;">
            <a  style = "text-decoration:none"href= '<?= $SERVER_URL?>'>
            Parece que andas perdido. :( Ven, regresemos a la página :)
            </a>
        </h1>   
    <img alt="Error" style ="display:block;margin:0 auto; text-align:center" src="<?=$routes["img_content_error"]  ?>">    
    </body>
</html>