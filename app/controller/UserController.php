<?php

namespace App\controller;

use App\model\UserModel;

class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        try {
            $apprenants = $this->userModel->getApprenants();
            require(__DIR__ . "/../../views/home.php");
        } catch (\Exception $e) {
            // Handle exceptions (e.g., log the error, display a user-friendly message)
            echo "An error occurred: " . $e->getMessage();
        }
    }
    
}
