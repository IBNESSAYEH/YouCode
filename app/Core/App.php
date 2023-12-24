<?php 

namespace App\Core;


use App\controller\HomeController;
use App\controller\UserController;
use App\controller\ClasseController;
class App{

    protected $controller = "HomeController";
    protected $method = "index";
    protected $params = [];

    public function __construct(){

        $this->prepareURL();
        $this->render();
    }


    private function prepareURL(){
        $url = $_SERVER['REQUEST_URI'];
        if(isset($url)){ 
            $url = trim($url , "/");
            $url = explode("/" , $url);
            $controllerName = !empty($url[0]) ? "App\\Controller\\" . ucwords($url[0]) . "Controller" : "App\\Controller\\HomeController";
            $this->controller = $controllerName;
            $this->method = !empty($url[1]) ? $url[1] : "index";
            unset($url[0], $url[1]);
            $this->params = !empty($url) ? $url : [];
        }
    }
    

    private function render(){
        if(class_exists($this->controller)){
            $controller = new $this->controller ;
            if(method_exists($controller,$this->method)){
                call_user_func_array([$controller,$this->method],$this->params);
            }else{
                require (__DIR__ . "/../../views/404.php");
            }
        }else{
            require (__DIR__ . "/../../views/404.php");
        }
    }



}








// namespace App\Core;

// use App\controller\UserController;

// use Exception;
// class Router {
//     private  $routes = [];
//     public function define($routes)
//     {
//         $this->routes = $routes;
//     }
//     public function direct($uri,$method)
//     {
//         if(array_key_exists($uri,$this->routes[$method])){
//             return $this->routes[$method][$uri];
//         }else{
//             header("Location: " . __DIR__ . "/../../views/404.html");
//         }
//     }
// }
// ?>