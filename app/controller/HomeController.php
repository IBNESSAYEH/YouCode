<?php 

namespace App\controller;

use App\model\UserModel;
use App\Core\View;
class HomeController {

    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        try {
            $apprenants['apprenants'] = $this->userModel->getApprenants();
            new View("home",$apprenants);
           
        } catch (\Exception $e) {
            // Handle exceptions (e.g., log the error, display a user-friendly message)
            echo "An error occurred: " . $e->getMessage();
        }
    }
}