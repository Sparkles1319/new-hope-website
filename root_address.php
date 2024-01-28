<?php
/**
 * Created by PhpStorm.
 * User: ijeoma
 * Date: 9/3/16
 * Time: 11:42 PM
 */
if(!defined(ABSPATH)){
    define('ABSPATH', dirname(__FILE__));
}

$docRoot = rtrim($_SERVER['DOCUMENT_ROOT'], '/');
if(!defined(RELADDR)){
    define('RELADDR', substr(ABSPATH, strlen($docRoot)));
   // echo RELADDR;
}


?>

