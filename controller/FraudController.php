<?php 

namespace App\controller;
Use App\model\Fraud;

require_once("../autoloader.php");

class FraudController{

public static function create($post){

$create= new Fraud($post["passenger"],$post["registered"],$post["time"], $post["date"], $post["line"]);
$create->createFraud();
}


}

?>