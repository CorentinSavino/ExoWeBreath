<?php 

namespace App\controller;
Use App\model\Fraud;

require_once("../autoloader.php");

class FraudController{

public static function create($post){

$create= new Fraud($post["passenger"],$post["registered"],$post["time"], $post["date"], $post["line"]);

var_dump($create);

$create->createFraud();

}

public static function findDate($date){
    
Fraud::findBydate($date);

require("../view/dashboard.php");

}

public static function findLine($line){
    
    Fraud::findByline($line);

    require("../view/dashboard.php");


}


}

?>