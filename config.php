<?php
 
/*
  The important thing to realize is that the config file should be included in every
    page of your project, or at least any page you want access to these settings.
    This allows you to confidently use these settings throughout a project because
    if something changes such as your database credentials, or a path to a specific resource,
    you'll only need to update it here.
*/ 
$config = array(
    "urls" => array(
        "baseUrl" => "http://qwerty.com",
        "baseUrl2" => "localhost"
    ),
    "paths" => array(
        "resources" => "/path/to/resources",
        "inc" => array(
            "css" => $_SERVER["DOCUMENT_ROOT"] . "/inc/css",
            "js" => $_SERVER["DOCUMENT_ROOT"] . "/inc/javascript"
        ),
        "templates" => array(
            "template" => $_SERVER["DOCUMENT_ROOT"] . "/template",                      
        ),
        "img" => array(
            "contenent" => $_SERVER["DOCUMENT_ROOT"] . "/img/content",
            "layout" => $_SERVER["DOCUMENT_ROOT"] . "/img/layout",            
        ),
    ),



);
 
/*
    I will usually place the following in a bootstrap file or some type of environment
    setup file (code that is run at the start of every page request), but they work 
    just as well in your config file if it's in php (some alternatives to php are xml or ini files).
*/
 
/*
    Creating constants for heavily used paths makes things a lot easier.
    ex. require_once(LIBRARY_PATH . "Paginator.php")
*/


/*defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));
*/

defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", 'template');

/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL| E_STRICT);
 
?>