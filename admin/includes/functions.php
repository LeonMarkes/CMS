<?php 

function classAutoLoader($class) {
    $class = strtolower($class);
    $the_path = "includes/{$class}.php";

    if(is_file($the_path) && !class_exists($class)) {
        include $the_path;
    }

    // if(file_exists($the_path)) {
    //     include($the_path);
    //     require_once($the_path);
    // } else {
    //     die("File named {$class}.php was not found.");
    // }


    function redirect($location) {
        header("Location: ${$location}");
    }
}

spl_autoload_register('classAutoLoader');


?>