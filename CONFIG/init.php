<?php

session_start();


require_once 'config.php' ;
require_once 'HELPERS/system_Helper.php' ;




function __autoload($class_name) {
    require_once 'LIB/'.$class_name.'.php' ;
}


?>