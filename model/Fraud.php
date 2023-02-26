<?php

//Creation of the object Fraud

namespace App\model;
use App\model\DB;
use PDOException;

require_once("../autoloader.php");

class Fraud{

private $passenger;
private $registered;
private $time;
private $date;
private $line;

public function __construct($passenger,$registered,$time,$date,$line)
{
    $this->passenger=$passenger;
    $this->registered=$registered;
    $this->time=$time;
    $this->date=$date;
    $this->line=$line;
}

//function Create Fraud -> Insert into DB

public function createFraud(){

    try{
        
    $db= new DB;
    $dbh= $db->getDBH();

    $stmt=$dbh->prepare("INSERT INTO fraud (passenger, registered, time, date, line)
    VALUES (?,?,?,?,?)");

    //date covesrion

    $stmt->bindValue(1, $this->passenger);
    $stmt->bindValue(2, $this->registered);
    $stmt->bindValue(3, $this->time);
    $stmt->bindValue(4, $this->date);
    $stmt->bindValue(5, $this->line);

    $stmt->execute();

    }catch(PDOException $errors){
        echo $errors->getMessage();
    }

}

// get all the infos from the DB

public static function findAllFraud(){
    
try{

    $db= new DB;
    $dbh= $db->getDBH();

    $stmt=$dbh->query("SELECT*FROM fraud");

    return $stmt->fetchAll();

}catch(PDOException $errors){
    echo $errors->getMessage();
}}

public static function findBydate($date){

    $db= new DB;
    $dbh= $db->getDBH();

    $stmt=$dbh->prepare("SELECT*FROM fraud WHERE `date`=?")

}

}

?>