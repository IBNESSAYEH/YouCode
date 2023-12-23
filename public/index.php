<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\controller\UserController;
use App\Controllers\HomeController;
use App\Controllers\LoginController;

$route = isset($_GET['url']) ? $_GET['url'] : 'home';

// Instantiate the controller based on the route
switch ($route) {
    case 'home':
        $controller = new UserController();
        $controller->index();
        break;
    // case 'fetchMoreUsers':
    //     $homeController = new HomeController();
    //     $homeController->fetchMoreUsers();
    //     break;
    // case 'login':
    //     $loginController = new LoginController();
    //     $loginController->login();
    //     break;
    // case 'create':
    //     $loginController = new LoginController();
    //     $loginController->create();
    //     break;
    // Add more cases for other routes as needed
    default:
        // Handle 404 or redirect to the default route
        header('HTTP/1.0 404 Not Found');
        exit('Page not found');
}
