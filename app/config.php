<?php

ini_set('display_errors','off');
error_reporting(E_ALL);

if (isset($_SERVER['HTTP_HOST']))
    define('SITE', 'http://'.$_SERVER['HTTP_HOST'].'/');

if (isset($_SERVER['HTTP_HOST']))
    define('APPPATH', $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR);
else
    define('APPPATH', dirname(__FILE__));     

define('MEDIADIR', '/media');
define('MEDIAURL', '/media/');   
