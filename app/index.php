<?php


require 'vendor/autoload.php';
require 'config.php';

require 'routes/media.php';
require 'api/files.php';

_kuri();

function index_kuri(){
    
    include 'views/film.phtml';


}