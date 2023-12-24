<?php 
namespace App\Core;


class View
{
 

    public function __construct($viewName, $data = []){
        $file = (__DIR__ . "/../../views/$viewName.php");
        if(file_exists($file)){
            extract($data);
            ob_start();
            require($file);
            ob_end_flush();
        }
    }
}