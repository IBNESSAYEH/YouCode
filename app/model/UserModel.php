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

    public function createUser($apprenant)
    {
        $con = Connection::getCon();
        $query = $con->prepare("INSERT INTO apprenants(`nom`, `prenom`, `date_naiss`, `phone`, `email`, `password`, `adresse`, `id_role`, `id_class`) 
            VALUES(:nom, :prenom, :date_naiss, :phone, :email, :password, :adresse, :id_role, :id_class)");

        $query->bindValue(':nom', $apprenant->getNom());
        $query->bindValue(':prenom', $apprenant->getPrenom());
        $query->bindValue(':date_naiss', $apprenant->getDateNaiss());
        $query->bindValue(':phone', $apprenant->getPhone());
        $query->bindValue(':email', $apprenant->getEmail());
        $query->bindValue(':password', $apprenant->getPassword());
        $query->bindValue(':adresse', $apprenant->getAdresse());
        $query->bindValue(':id_role', $apprenant->getIdRole());
        $query->bindValue(':id_class', $apprenant->getIdClass());

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
