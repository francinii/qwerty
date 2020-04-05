<?php

//Configuracion del lenguaje
$lang = locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);
($lang == 'en') ? include('resources/lang/en/lang.en') : include('resources/lang/es/lang.es');

const SERVER_URL = 'http://localhost/qwerty2/qwerty/';
const TEMPLATES_PATH = 'resources/views/templates';
const PARTIALS_PATH = 'resources/views/partials';
const SECTIONS_PATH = 'resources/views/sections';

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