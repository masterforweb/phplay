<?php

function catalog_kuri($subdir = ''){


    $files = scandir_kuri($subdir);

    include ('views/catalog.phtml');



}


function mu3_kuri($subdir = ''){


    $files = scandir_kuri($subdir);

    include ('views/mu3.phtml');



}