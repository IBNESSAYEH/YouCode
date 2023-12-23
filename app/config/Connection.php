<?php
namespace App\config;
use PDO;
use PDOException;
use Exception;
class Connection
{


   
    public static function getCon()
    {
        try{
         $host = 'localhost';
         $dbname = 'youcode';
         $username = 'root';
         $password = '';
            $con = new PDO('mysql:host='.$host.';dbname='.$dbname,$username,$password);
        }catch(PDOException $e){
            throw new Exception($e->getMessage());
        }
        return $con;
    }
   
}