<?php

namespace App\model;

use App\config\Connection;
use PDO;
  
class UserModel   
{
    public function getApprenants()
    {
        $con = Connection::getCon();
        $query = $con->prepare("SELECT * FROM users");
        $query->execute();

        // Fetch all results as an associative array
        $apprenants = $query->fetchAll(PDO::FETCH_ASSOC);

        return $apprenants;
    }

    public function createUser($nom,$prenom,$date_naiss,$phone,$email,$password,$adresse,$id_role,$id_class)
    {
        $con = Connection::getCon();
        $query = $con->prepare("INSERT INTO users(`nom`, `prenom`, `date_naiss`, `phone`, `email`, `password`, `adresse`, `id_role`, `id_class`) 
            VALUES(:nom, :prenom, :date_naiss, :phone, :email, :password, :adresse, :id_role, :id_class)");

        $query->bindValue(':nom', $nom);
        $query->bindValue(':prenom', $prenom);
        $query->bindValue(':date_naiss', $date_naiss);
        $query->bindValue(':phone', $phone);
        $query->bindValue(':email', $email);
        $query->bindValue(':password', $password);
        $query->bindValue(':adresse', $adresse);
        $query->bindValue(':id_role', $id_role);
        $query->bindValue(':id_class', $id_class);

        $query->execute();
    }

    public function getUserById($id)
    {
        $con = Connection::getCon();
        $query = $con->prepare("SELECT * FROM apprenants WHERE id = :id");
        $query->bindValue(':id', $id);
        $query->execute();

        // Fetch the result as an associative array
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return $result;
    }
}
