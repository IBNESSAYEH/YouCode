
<?php 

class UserModel extends UserClasse{
    private $connection;    private $apprenants = [];

    public function __construct()
    {
        $this->connection = new Connection();
    }

    public function getApprenants(){
       
    }

    public function createUser($apprenant){
        $query = $this->connection->getCon()->prepare("INSERT INTO apprenants(`nom`, `prenom`, `date_naiss`, `phone`, `email`, `password`, `adresse`, `id_role`, `id_class`) VALUES(:nom, :prenom, :date_naiss, :phone, :email, :password, :adresse, :id_role, :id_class)");
        $query->bindValue(':nom', $apprenant->getNom());
        $query->bindValue(':prenom', $apprenant->getPrenom());
        $query->bindValue(':date_naiss', $apprenant->getDateNaiss());
        $query->bindValue(':phone', $apprenant->getPhone());
        $query->bindValue(':date_naiss', $apprenant->getDateNaiss());
        $query->bindValue(':email', $apprenant->getEmail());
        $query->bindValue(':pasword', $apprenant->getPassword());
        $query->bindValue(':adresse', $apprenant->getAdresse());
        $query->bindValue(':id_role', $apprenant->getIdRole());
        $query->bindValue(':id_class', $apprenant->getIdClass());
        $query->execute();
    }

    public function getUserById($id) {
        $query = $this->connection->getCon()->prepare("SELECT * FROM apprenants WHERE id = :id");
        $query->bindValue(':id', $id);
        $query->execute();
    
        // Fetch the result as an associative array
        $result = $query->fetch(PDO::FETCH_ASSOC);
    
        if ($result) {
            // Create an Apprenant object and populate its properties
            $apprenant = new UserClasse();
            $apprenant->setId($result['id']);
            $apprenant->setNom($result['nom']);
            $apprenant->setPrenom($result['prenom']);
            $apprenant->setDateNaiss($result['date_naiss']);
            $apprenant->setPhone($result['phone']);
            $apprenant->setEmail($result['email']);
            $apprenant->setPassword($result['password']);
            $apprenant->setAdresse($result['adresse']);
            $apprenant->setIdRole($result['id_role']);
            $apprenant->setIdClass($result['id_class']);
    
            return $apprenant;
        } else {
            // No matching apprenant found
            return null;
        }
    }
    

    public function editUser($apprenant) {
        $query = $this->connection->getCon()->prepare("UPDATE apprenants SET nom = :nom, prenom = :prenom, date_naiss = :date_naiss, phone = :phone, email = :email, password = :password, adresse = :adresse, id_role = :id_role, id_class = :id_class WHERE id = :id");
    
        $query->bindValue(':id', $apprenant->getId());
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
    

    public function deleteUser($id) {
        $query = $this->connection->getCon()->prepare("DELETE FROM apprenants WHERE id = :id");
        $query->bindValue(':id', $id);
        $query->execute();
    }
    
}
