INSERT INTO `users`(`id`, `nom`, `prenom`, `date_naiss`, `phone`, `email`, `password`, `adresse`, `id_role`, `id_class`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]')
<?php 
class UserClasse{
    private $id;
    private $nom;
    private $prenom;
    private $date_naiss;
    private $phone;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

  

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getDateNaiss()
    {
        return $this->date_naiss;
    }

    /**
     * @param mixed $date_naiss
     */
    public function setDateNaiss($date_naiss)
    {
        $this->date_naiss = $date_naiss;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getIdRole()
    {
        if($this->id_role === 1){

            return 'Admin';
        }else if($this->id_role === 2){
            return 'Formateur';
        }else if($this->id_role === 3){
            return 'Apprenant';
        }
    }

    /**
     * @param mixed $id_role
     */
    public function setIdRole($id_role)
    {
       

        if($id_role === 'Admin'){
            $this->id_role = 1;
           
        } if($id_role === 'Formateur'){
            $this->id_role = 2;
           
        } if($id_role === 'Apprenant'){
            $this->id_role = 3;
           
        }
    }

    /**
     * @return mixed
     */
    public function getIdClass()
    {
        if($this->id_class === 1){

            return 'Tayeb';
        }else if($this->id_class === 2){
            return 'aziz';
        }else if($this->id_class === 3){
            return 'said';
        }else if($this->id_class === 4){
            return 'Aymen';
        }
    }

    /**
     * @param mixed $id_class
     */
    public function setIdClass($id_class)
    {
        if($id_class === 'tayeb'){
            $this->id_class = 1;
           
        }else if($id_class === 'aziz'){
            $this->id_class = 2;
           
        }else if($id_class === 'said'){
            $this->id_class = 3;
           
        }else if($id_class === 'aymen'){
            $this->id_class = 4;
           
        }
    }
    private $email;
    private $password;
    private $adresse;
    private $id_role;
    private $id_class;

  
}
