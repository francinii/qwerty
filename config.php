<?php
//session_start();
$lang ='es';
//verificamos si hay cambios de lenguaje mediante POST
if(isset($_POST["lang"])){
  $lang = $_POST["lang"];
  if(!empty($lang)){
    $_SESSION["lang"] = $lang;
  }
}
if(isset($_SESSION['lang'])){
    if($_SESSION['lang'] == 'es'){
        $lang = $_SESSION["lang"];
        include('resources/lang/es/lang.php');
    }else if($_SESSION['lang'] == 'en'){
        $lang = $_SESSION["lang"];
        include('resources/lang/en/lang.php');
    }else {
        include('resources/lang/es/lang.php');
    }    
}else{
    include('resources/lang/es/lang.php');
}

//Variable para determinar el ambiente: 1 ambiente de desarrollo activado
$ambiente = 0;

$SERVER_URL = ($ambiente == 1 ) ? 'http://localhost/qwerty2/qwerty': 'https://www.qwerty.co.cr';
const TEMPLATES_PATH = 'resources/views/templates';
const PARTIALS_PATH = 'resources/views/partials';
const SECTIONS_PATH = 'resources/views/sections';

$routes["pagina_inicio"] = $SERVER_URL . '/';
$routes["pagina_acerca"] = $SERVER_URL . '/acerca';
$routes["pagina_clientes"] = $SERVER_URL . '/clientes';
$routes["pagina_servicios"] = $SERVER_URL . '/servicios';
$routes["pagina_contacto"] = $SERVER_URL . '/contacto';
$routes["pagina_home"] = TEMPLATES_PATH. '/home.php';

$routes["seccion_metodologia"] = SECTIONS_PATH. '/methodology.php';
$routes["seccion_acerca"] = SECTIONS_PATH. '/about.php';
$routes["seccion_clientes"] = SECTIONS_PATH. '/clients.php';
$routes["seccion_servicios"] = SECTIONS_PATH. '/services.php';
$routes["seccion_servicios_detalles"] = SECTIONS_PATH. '/services_details.php';

$routes["seccion_header"] = SECTIONS_PATH. '/header.php';
$routes["seccion_header_section"] = SECTIONS_PATH. '/header_section.php';
$routes["seccion_descripcion"] = SECTIONS_PATH . "/description.php";
$routes["seccion_nav"] =  PARTIALS_PATH. '/nav.php';
$routes["seccion_contacto"] =  SECTIONS_PATH. '/contact.php';
$routes["seccion_footer"] = PARTIALS_PATH. '/footer.php';
$routes["seccion_error"] = $SERVER_URL. '/error.php';
$routes["seccion_alert"] = PARTIALS_PATH. '/alert.php';
$routes["seccion_team"] = SECTIONS_PATH. '/team.php';

$routes["img_content_logo"] =  $SERVER_URL . '/img/content/logo2.svg';
$routes["img_content_logo_2"] =  $SERVER_URL . '/img/content/logo3.svg';
$routes["img_content_logo_3"] =  $SERVER_URL . '/img/content/logo.svg';
$routes["img_content_web"] =  $SERVER_URL . '/img/content/web.svg';
$routes["img_content_developer"] =  $SERVER_URL . '/img/content/developer.svg';
$routes["img_content_mobile"] =  $SERVER_URL . '/img/content/mobile.svg';
$routes["img_content_ecommerce"] =  $SERVER_URL . '/img/content/ecommerce.svg';
$routes["img_content_direccion"] =  $SERVER_URL . '/img/content/direccion.svg';
$routes["img_content_correo"] =  $SERVER_URL . '/img/content/correo.svg';
$routes["img_content_telefono"] =  $SERVER_URL . '/img/content/tel.svg';
$routes["img_content_facebook"] =  $SERVER_URL . '/img/content/facebook.svg';
$routes["img_content_linkedin"] =  $SERVER_URL . '/img/content/linkedin.svg';
$routes["img_content_waze"] =  $SERVER_URL . '/img/content/waze.svg';
$routes["img_content_cliente_1"] =  $SERVER_URL . '/img/content/cliente1.svg';
$routes["img_content_cliente_2"] =  $SERVER_URL . '/img/content/cliente2.svg';
$routes["img_content_cliente_3"] =  $SERVER_URL . '/img/content/cliente3.svg';
$routes["img_content_cliente_4"] =  $SERVER_URL . '/img/content/cliente4.svg';
$routes["img_content_cliente_5"] =  $SERVER_URL . '/img/content/cliente5.svg';
$routes["img_content_cliente_6"] =  $SERVER_URL . '/img/content/cliente6.svg';

$routes["img_content_idear"] =  $SERVER_URL . '/img/content/idear.svg';
$routes["img_content_prototipar"] =  $SERVER_URL . '/img/content/prototipar.svg';
$routes["img_content_crear"] =  $SERVER_URL . '/img/content/crear.svg';
$routes["img_content_implementar"] =  $SERVER_URL . '/img/content/implementar.svg';

$routes["img_content_compromiso"] =  $SERVER_URL . '/img/content/compromiso.svg';
$routes["img_content_confianza"] =  $SERVER_URL . '/img/content/confianza.svg';
$routes["img_content_creatividad"] =  $SERVER_URL . '/img/content/creatividad.svg';
$routes["img_content_innovacion"] =  $SERVER_URL . '/img/content/innovacion.svg';
$routes["img_content_error"] = $SERVER_URL . '/img/content/error.svg';


$routes["img_content_compu"] = $SERVER_URL . '/img/content/compu.svg';
$routes["img_content_favicon"] = $SERVER_URL . '/favicon.ico';
$routes["img_content_favicon_apple"] = $SERVER_URL . '/favicon_apple.png';
$routes["img_content_lang"] = $SERVER_URL . '/img/content/lang.svg';

$routes["img_content_mision"] =  $SERVER_URL . '/img/content/mision.svg';
$routes["img_content_vision"] =  $SERVER_URL . '/img/content/vision.svg';
$routes["img_content_clientes"] =  $SERVER_URL . '/img/content/clientes.svg';

$routes["img_content_servicios_disenio"] = $SERVER_URL. '/img/content/disenio-web.svg';
$routes["img_content_servicios_desarrollo"] = $SERVER_URL. '/img/content/desarrollo-web.svg';
$routes["img_content_servicios_ecommerce"] = $SERVER_URL. '/img/content/desarrollo-ecommerce.svg';


$routes["img_team_1"] =  $SERVER_URL . '/img/content/fran.svg';
$routes["img_team_2"] =  $SERVER_URL . '/img/content/andrey.svg';
$routes["img_team_3"] =  $SERVER_URL . '/img/content/alex.svg';
$routes["img_team_4"] =  $SERVER_URL . '/img/content/steven.svg';
$routes["img_team_5"] =  $SERVER_URL . '/img/content/danny.svg';

$routes["social_linkedin_team_1"] =  'https://www.linkedin.com/in/francini-corrales-garro/';
$routes["social_linkedin_team_2"] =  'https://www.linkedin.com/in/andrey-corrales-garro-3820a1184/';
$routes["social_linkedin_team_3"] =  '/img/content/danny.svg';
$routes["social_linkedin_team_4"] =  'https://www.linkedin.com/in/steven-rodriguez-garro-487668136/';
$routes["social_linkedin_team_5"] =  'https://www.linkedin.com/in/danny-valerio-ram%C3%ADrez-816312162/';





$routes["img_layout_frame_1"] =  $SERVER_URL . '/img/layout/header_section.svg';
$routes["img_layout_frame_2"] =  $SERVER_URL . '/img/layout/header.svg';
$routes["img_layout_frame_3"] =  $SERVER_URL . '/img/layout/frame3.svg';
$routes["img_layout_frame_4"] =  $SERVER_URL . '/img/layout/frame_bottom.svg';
$routes["img_layout_frame_5"] =  $SERVER_URL . '/img/layout/frame_bottom_2.svg';
$routes["img_layout_frame_6"] =  $SERVER_URL . '/img/layout/frame3.svg';
$routes["img_layout_frame_7"] =  $SERVER_URL . '/img/layout/header_section_res.svg';

$routes["link_cliente_1"] = '';
$routes["link_cliente_2"] = 'https://catradeconsulting.com/';
$routes["link_cliente_3"] = '';
$routes["link_cliente_4"] = 'https://www.ubrauliocarrillocr.com/';
$routes["link_cliente_5"] = 'https://grupoathena.com/';

$routes["link_facebook"] = ' https://www.facebook.com/Qwertycr/';
$routes["link_map"] = 'https://goo.gl/maps/Gir14qbqqRw27SCH6';
$routes["link_iframe_map"] ='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d463.560607490681!2d-84.13443331317113!3d10.016640706749119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0fa8f949763af%3A0x18282a97b2115af7!2sResidencial%20Puente%20Piedra%2C%20Heredia%20Province%2C%20San%20Roque!5e0!3m2!1sen!2scr!4v1586807182989!5m2!1sen!2scr';
$routes["link_normalize"] = 'https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css';

//$routes["link_bootstrap"] ='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css';
$routes["link_waze"] ='https://www.waze.com/es/livemap/directions?latlng=10.0168732%2C-84.1334595';
$routes["librerias_bootstrap"] = $SERVER_URL. '/lib/bootstrap-4.4.1/css/bootstrap.min.css';
$routes["css_main"] = ($ambiente == 1 ) ?  $SERVER_URL.'/resources/css/main.css' : $SERVER_URL.'/resources/css/main.min.css';
$routes["css_timeline"] =  ($ambiente == 1 ) ?  $SERVER_URL.'/resources/css/lineaTiempo.css': $SERVER_URL.'/resources/css/lineaTiempo.min.css';
$routes["css_animate"] = $SERVER_URL.'/resources/css/animate.min.css';
$routes["css_carousel"] =  ($ambiente == 1 ) ?  $SERVER_URL.'/resources/css/carousel.css': $SERVER_URL.'/resources/css/carousel.min.css' ;
//$routes["js_jquery"] = 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js';
//$routes["js_bootstrap"] =  'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js';
$routes["js_popper"] = 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js';
$routes["js_jquery"]  = ($ambiente == 1 ) ? $SERVER_URL. '/resources/js/jquery-3.5.1.js':$SERVER_URL. '/resources/js/jquery-3.5.1.min.js';
$routes["js_bootstrap_local"] = $SERVER_URL .'/lib/bootstrap-4.4.1/js/bootstrap.min.js';
$routes["js_carousel"] =  ($ambiente == 1 ) ? $SERVER_URL. '/resources/js/carousel.js':$SERVER_URL. '/resources/js/carousel.min.js';
$routes["js_timeline"] = ($ambiente == 1 ) ?  $SERVER_URL. '/resources/js/timeline.js': $SERVER_URL. '/resources/js/timeline.min.js' ;
$routes["js_form"] = ($ambiente == 1 ) ?  $SERVER_URL. '/resources/js/form.js': $SERVER_URL. '/resources/js/form.min.js' ;
$routes["js_lazy_load"] = ($ambiente == 1 ) ?  $SERVER_URL. '/resources/js/lazy-load.min.js': $SERVER_URL. '/resources/js/lazy-load.min.js' ;


/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL| E_STRICT);
 
?>