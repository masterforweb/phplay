<?php


function scandir_kuri($subdir = ''){
    
    $result = array();
    $currdir = MEDIADIR.DIRECTORY_SEPARATOR.$subdir;

    $files = scandir($currdir);


    foreach ($files as $key => $file){

        if ($file !== "." && $file !== "..")

            $currfile = $currdir.DIRECTORY_SEPARATOR.$file;
    

            if (is_dir($currfile)) {
                $result['dir'][$key] = $file;
            }
            elseif (is_file($currfile)) {

                $result['file'][$key]['file'] = $file;
                     
                if ($subdir == '')
                    $result['file'][$key]['url'] = MEDIAURL.$file;
                else
                    $result['file'][$key]['url'] = MEDIAURL.$subdir.'/'.$file; 
                             
                
            }
    }

    return $result;

}