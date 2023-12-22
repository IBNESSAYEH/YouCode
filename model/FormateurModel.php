class FormateurModel{
    private $connection;
    private $formateurs = [];

    public function __construct()
    {
        $this->connection = new Connection();
    }

    public function getFormateurs(){
        $query = $this->connection->getCon()->query("SELECT id, first_name, last_name, email FROM formateurs");
        $formateursData = $query->fetchAll(PDO::FETCH_ASSOC);

        if(empty($formateursData)){
            return [];
        }else{
            foreach ($formateursData as $formateurData) {
                $formateur = new Formateur($formateurData['id'], $formateurData['first_name'], $formateurData['last_name'], $formateurData['email']);
                array_push($this->formateurs, $formateur);
            }
            return $this->formateurs;
        }
    }

    public function createFormateur($formateur){
        $query = $this->connection->getCon()->prepare("INSERT INTO formateurs(first_name, last_name, email) VALUES(:first_name, :last_name, :email)");
        $query->bindValue(':first_name', $formateur->getFirstName());
        $query->bindValue(':last_name', $formateur->getLastName());
        $query->bindValue(':email', $formateur->getEmail());
        $query->execute();
    }

    public function getFormateurById($id){
        $query = $this->connection->getCon()->prepare("SELECT id, first_name, last_name, email FROM formateurs WHERE id = :id");
        $query->bindValue(':id', $id);
        $query->execute();
        $formateurData = $query->fetch(PDO::FETCH_ASSOC);
        $formateur = new Formateur($formateurData['id'], $formateurData['first_name'], $formateurData['last_name'], $formateurData['email']);
        return $formateur;
    }

    public function updateFormateur($formateur){
        $query = $this->connection->getCon()->prepare("UPDATE formateurs SET first_name = :first_name, last_name = :last_name, email = :email WHERE id = :id");
        $query->bindValue(':id', $formateur->getId());
        $query->bindValue(':first_name', $formateur->getFirstName());
        $query->bindValue(':last_name', $formateur->getLastName());
        $query->bindValue(':email', $formateur->getEmail());
        $query->execute();
    }

    public function deleteFormateur($id){
        $query = $this->connection->getCon()->prepare("DELETE FROM formateurs WHERE id = :id");
        $query->bindValue(':id', $id);
        $query->execute();
    }
}
