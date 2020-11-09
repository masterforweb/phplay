<?php


require 'vendor/autoload.php';
require 'config.php';

require 'routes/media.php';
require 'routes/files.php';

_kuri();

function index_kuri(){

    catalog_kuri();
    
   // include 'views/film.phtml';


}