<?php

namespace App\controller;

use App\model\UserModel;
use App\Core\View;

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
            $apprenants['apprenants'] = $this->userModel->getApprenants();
            new View("dashboard",$apprenants);
           
        } catch (\Exception $e) {
            // Handle exceptions (e.g., log the error, display a user-friendly message)
            echo "An error occurred: " . $e->getMessage();
        }
    }
    public function create()
    {
        try {
            
            new View("register");
           
        } catch (\Exception $e) {
            // Handle exceptions (e.g., log the error, display a user-friendly message)
            echo "An error occurred: " . $e->getMessage();
        }
    }
    public function add()
    {
        try {
            new View("register");
            if($_SERVER["REQUEST_METHOD"]==="POST"){

                $this->userModel->createUser($_POST['nom'],$_POST['prenom'],$_POST['date_naiss'],$_POST['phone'],$_POST['email'],$_POST['password'],$_POST['adresse'],$_POST['id_role'],$_POST['id_class']);
            }
           
        } catch (\Exception $e) {
            // Handle exceptions (e.g., log the error, display a user-friendly message)
            echo "An error occurred: " . $e->getMessage();
        }
    }
    
}








// public function index()
// {
//     try {
//         $apprenants = $this->userModel->getApprenants();
//         require(__DIR__ . "/../../views/home.php");
//     } catch (\Exception $e) {
//         // Handle exceptions (e.g., log the error, display a user-friendly message)
//         echo "An error occurred: " . $e->getMessage();
//     }
// }