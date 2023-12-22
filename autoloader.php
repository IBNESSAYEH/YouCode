<?php

spl_autoload_register(function($className) { 
    $file = __DIR__.'/classes/'.$className.'.php';
    $file2 = __DIR__.'/model/'.$className.'.php';
    $file3 = __DIR__.'/db/'.$className.'.php';
    if(file_exists($file)){ 
        require $file; 
    }
    else if(file_exists($file2)){ 
        require $file2; 
    }
    else if(file_exists($file3)){ 
        require $file3; 
    }
    else{
       echo "not found";
    }
});
?>