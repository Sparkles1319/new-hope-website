<?php
/**
 * Created by PhpStorm.
 * User: ijeoma
 * Date: 9/3/16
 * Time: 9:13 PM
 */

$directory = realpath(dirname(__FILE__));
//echo $directory.'<br>';
$document_root = realpath($_SERVER['DOCUMENT_ROOT']);
//echo $document_root;
$base_url = ( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on' ? 'https' : 'http' ) . '://' .
    $_SERVER['HTTP_HOST'];

if(strpos($directory, $document_root)===0) {
    //echo DIRECTORY_SEPARATOR;
    $base_url .= str_replace(DIRECTORY_SEPARATOR, '/', substr($directory, strlen($document_root)));
    echo $base_url;
}

defined("APP_URL") ? null : define("APP_URL", str_replace("/lib", "", $base_url));
//Assets URL, location of your css, img, js, etc. files
defined("ASSETS_URL") ? null : define("ASSETS_URL", APP_URL);