<?php

//Connexion to the DB

namespace App\model;
use \PDO;

class DB{

private $dbname= "exo_webreath";
private $host="localhost";
private $port="3306";
private $dbh;

function __construct()
{
    $dsn="mysql:host=".$this->host.";dbname=".$this->dbname.";port=".$this->port.";charset=UTF8";
    $this->dbh= new PDO($dsn, "root","");

}

public function getDBH(){
    return $this->dbh;
}

}

?>