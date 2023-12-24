<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\controller\UserController;
use App\Controllers\LoginController;


use App\Core\App; 

new App();












// session_start();
// $router = new Router();
// $router->define([
//     'GET'=>[
//         ''=>'controller/HomeController.php',
//         'home'=>'controller/HomeController.php',
//         'classe/add'=>'controller/ClasseAddController.php',
//         'classe/edit'=>'controller/ClasseEditController.php',
//         'classe/delete'=>'controller/ClasseDeleteController.php',
//         'user/delete'=>'controller/UserDeleteController.php',
//     ],
//     'POST'=>[
//         'classe/create'=>'controller/ClasseCreateController.php',
//         'classe/update'=>'controller/ClasseUpdateController.php',
//         'user/create'=>'controller/UserCreateController.php',
//         'user/update'=>'controller/UserUpdateController.php',
//     ]
// ]);

// if(isset($_SERVER['REQUEST_URI'])){
//     // remove crud_oop/ from the uri
//     $uri = trim($_SERVER['REQUEST_URI'],'/');
//     $method = $_SERVER['REQUEST_METHOD'];
    
//     try{
//          $router->direct($uri,$method);
//     }catch(Exception $e){
//         echo $e->getMessage();
//     }
// }




























// $route = isset($_GET['url']) ? $_GET['url'] : 'home';

// // Instantiate the controller based on the route
// switch ($route) {
//     case 'home':
//         $controller = new UserController();
//         $controller->index();
//         break;
//     // case 'fetchMoreUsers':
//     //     $homeController = new HomeController();
//     //     $homeController->fetchMoreUsers();
//     //     break;
//     // case 'login':
//     //     $loginController = new LoginController();
//     //     $loginController->login();
//     //     break;
//     // case 'create':
//     //     $loginController = new LoginController();
//     //     $loginController->create();
//     //     break;
//     // Add more cases for other routes as needed
//     default:
//         // Handle 404 or redirect to the default route
//         header('HTTP/1.0 404 Not Found');
//         exit('Page not found');
// }
