<?php

function catalog_kuri($subdir = ''){


    $files = scandir_kuri($subdir);

    include ('views/catalog.phtml');



}