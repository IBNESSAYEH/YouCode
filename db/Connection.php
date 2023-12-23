<?php
class Connection
{
    private  $con;
    private $host = 'localhost';
    private $dbname = 'youcode';
    private $username = 'root';
    private $password = '';
    public function __construct()
    {
        try{
            $this->con = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->username,$this->password);
        }catch(PDOException $e){
            throw new Exception($e->getMessage());
        }
    }
    public function getCon()
    {
        return $this->con;
    }
   
}