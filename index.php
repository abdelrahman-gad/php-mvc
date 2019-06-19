<?php
// the entry point file the website starts from

// define constants
// define the directory separatin [\] 

define('DS',DIRECTORY_SEPARATOR);

// define the root path which is in this case [c/xampp/MVC]
define('ROOT',dirname(__FILE__));
// convet the url string into an array

//load configuration and helper functions
//require confige file manually
require_once(ROOT.DS.'config'.DS.'config.php');
//require confige file app/lib/helpers/functions.php manuallly
require_once(ROOT.DS.'app'.DS.'lib'.DS.'helpers'.DS.'functions.php');


// Auto load classes
function autoload( $className ){
    if(file_exists(ROOT.DS.'core'.DS.$className.'.php')){
        require_once(ROOT.DS.'core'.DS.$className.'.php');
    }elseif(file_exists(ROOT.DS.'app'.DS.'controllers'.DS.$className.'.php')){
        require_once(ROOT.DS.'app'.DS.'controllers'.DS.$className.'.php');
    }else if(file_exists(ROOT.DS.'app'.DS.'models'.DS.$className.'.php')){
        require_once(ROOT.DS.'app'.DS.'models'.DS.$className.'.php');
    }elseif(file_exists(ROOT.DS.'app'.DS.'views'.DS.$className.'.php')){
        require_once(ROOT.DS.'app'.DS.'views'.DS.$className.'.php');
    }
}
spl_autoload_register('autoload');

session_start();

//convert any path into an indexed array 

$url=isset($_SERVER['PATH_INFO'])?explode('/',ltrim($_SERVER['PATH_INFO'],'/')):[];

// Route the request
$db=DB::getInstance();
 

Router::route($url);

