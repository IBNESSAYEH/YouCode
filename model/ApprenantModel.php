
<?php 
class ApprenantModel{
    private $connection;
    private $apprenants = [];

    public function __construct()
    {
        $this->connection = new Connection();
    }

    public function getApprenants(){
       
    }

    public function createApprenant($apprenant){
        $query = $this->connection->getCon()->prepare("INSERT INTO apprenants(first_name, last_name, email) VALUES(:first_name, :last_name, :email)");
        $query->bindValue(':first_name', $apprenant->getFirstName());
        $query->bindValue(':last_name', $apprenant->getLastName());
        $query->bindValue(':email', $apprenant->getEmail());
        $query->execute();
    }

    public function getApprenantById($id){
        $query = $this->connection->getCon()->prepare("SELECT id, first_name, last_name, email FROM apprenants WHERE id = :id");
        $query->bindValue(':id', $id);
        $query->execute();
        $apprenantData = $query->fetch(PDO::FETCH_ASSOC);
        $apprenant = new Apprenant($apprenantData['id'], $apprenantData['first_name'], $apprenantData['last_name'], $apprenantData['email']);
        return $apprenant;
    }

    public function updateApprenant($apprenant){
        $query = $this->connection->getCon()->prepare("UPDATE apprenants SET first_name = :first_name, last_name = :last_name, email = :email WHERE id = :id");
        $query->bindValue(':id', $apprenant->getId());
        $query->bindValue(':first_name', $apprenant->getFirstName());
        $query->bindValue(':last_name', $apprenant->getLastName());
        $query->bindValue(':email', $apprenant->getEmail());
        $query->execute();
    }

    public function deleteApprenant($id){
        $query = $this->connection->getCon()->prepare("DELETE FROM apprenants WHERE id = :id");
        $query->bindValue(':id', $id);
        $query->execute();
    }
}
