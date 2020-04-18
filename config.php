<?php

//Configuracion del lenguaje
$lang = locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);
($lang == 'en') ? include('resources/lang/en/lang.en') : include('resources/lang/es/lang.es');

const SERVER_URL = 'http://localhost/qwerty2/qwerty';
const TEMPLATES_PATH = 'resources/views/templates';
const PARTIALS_PATH = 'resources/views/partials';
const SECTIONS_PATH = 'resources/views/sections';

$routes["pagina_inicio"] = SERVER_URL . '/inicio';
$routes["pagina_acerca"] = SERVER_URL . '/acerca';
$routes["pagina_clientes"] = SERVER_URL . '/clientes';
$routes["pagina_servicios"] = SERVER_URL . '/servicios';
$routes["pagina_contacto"] = SERVER_URL . '/contacto';
$routes["pagina_home"] = TEMPLATES_PATH. '/home.php';

$routes["seccion_metodologia"] = SECTIONS_PATH. '/methodology.php';
$routes["seccion_acerca"] = SECTIONS_PATH. '/about.php';
$routes["seccion_clientes"] = SECTIONS_PATH. '/clients.php';
$routes["seccion_servicios"] = SECTIONS_PATH. '/services.php';
$routes["seccion_header"] = SECTIONS_PATH. '/header.php';
$routes["seccion_header_section"] = SECTIONS_PATH. '/header_section.php';
$routes["seccion_descripcion"] = SECTIONS_PATH . "/description.php";
$routes["seccion_nav"] =  PARTIALS_PATH. '/nav.php';
$routes["seccion_contacto"] =  SECTIONS_PATH. '/contact.php';
$routes["seccion_footer"] = PARTIALS_PATH. '/footer.php';

$routes["img_content_logo"] =  SERVER_URL . '/img/content/logo2.webp';
$routes["img_content_logo_2"] =  SERVER_URL . '/img/content/logo3.webp';
$routes["img_content_logo_3"] =  SERVER_URL . '/img/content/logo.svg';
$routes["img_content_web"] =  SERVER_URL . '/img/content/web.svg';
$routes["img_content_developer"] =  SERVER_URL . '/img/content/developer.svg';
$routes["img_content_mobile"] =  SERVER_URL . '/img/content/mobile.svg';
$routes["img_content_ecommerce"] =  SERVER_URL . '/img/content/ecommerce.svg';
$routes["img_content_direccion"] =  SERVER_URL . '/img/content/direccion.svg';
$routes["img_content_correo"] =  SERVER_URL . '/img/content/correo.svg';
$routes["img_content_telefono"] =  SERVER_URL . '/img/content/tel.svg';
$routes["img_content_facebook"] =  SERVER_URL . '/img/content/facebook.svg';
$routes["img_content_cliente_1"] =  SERVER_URL . '/img/content/cliente1';
$routes["img_content_cliente_2"] =  SERVER_URL . '/img/content/cliente2';
$routes["img_content_cliente_3"] =  SERVER_URL . '/img/content/cliente1';
$routes["img_layout_frame_1"] =  SERVER_URL . '/img/layout/header_section.svg';
$routes["img_layout_frame_2"] =  SERVER_URL . '/img/layout/header.svg';
$routes["img_layout_frame_3"] =  SERVER_URL . '/img/layout/frame3.svg';
$routes["img_layout_frame_4"] =  SERVER_URL . '/img/layout/frame_bottom.svg';
$routes["img_layout_frame_5"] =  SERVER_URL . '/img/layout/frame_bottom_2.svg';
$routes["img_layout_frame_6"] =  SERVER_URL . '/img/layout/frame3.svg';

$routes["link_cliente_1"] = 'http://www.desamarcr.com/';
$routes["link_cliente_2"] = 'https://www.ubrauliocarrillocr.com/';
$routes["link_cliente_3"] = 'https://www.ubrauliocarrillocr.com/';
$routes["link_cliente_4"] = 'https://www.ubrauliocarrillocr.com/';
$routes["link_cliente_5"] = 'https://www.ubrauliocarrillocr.com/';
$routes["link_cliente_6"] = 'https://www.ubrauliocarrillocr.com/';

$routes["link_facebook"] = ' https://www.facebook.com/Qwertycr/';
$routes["link_map"] = 'https://goo.gl/maps/Gir14qbqqRw27SCH6';
$routes["link_iframe_map"] ='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d463.560607490681!2d-84.13443331317113!3d10.016640706749119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0fa8f949763af%3A0x18282a97b2115af7!2sResidencial%20Puente%20Piedra%2C%20Heredia%20Province%2C%20San%20Roque!5e0!3m2!1sen!2scr!4v1586807182989!5m2!1sen!2scr';
$routes["link_normalize"] = 'https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css';
$routes["link_bootstrap"] ='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css';

$routes["librerias_bootstrap"] = SERVER_URL. '/lib/bootstrap/css/bootstrap.min.css';
$routes["css_main"] = SERVER_URL.'/resources/css/main.css';
$routes["js_jquery"] = 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js';
$routes["js_bootstrap"] =  'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js';
$routes["js_bootstrap_local"] = SERVER_URL .'/lib/bootstrap/js/bootstrap.min.js';
$routes["js_carousel"] = SERVER_URL. '/resources/js/carousel.js';
$routes["js_timeline"] = SERVER_URL. '/resources/js/timeline.js';




/*
    Creating constants for heavily used paths makes things a lot easier.
    ex. require_once(LIBRARY_PATH . "Paginator.php")
*/
/*defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));
*/
//defined("TEMPLATES_PATH")  or define("TEMPLATES_PATH", 'resources/views/templates');
//defined("PARTIALS_PATH") or define("PARTIALS_PATH", 'resources/views/partials');
//defined("SECTIONS_PATH")  or define("SECTIONS_PATH", 'resources/views/sections');
/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL| E_STRICT);
 
?>