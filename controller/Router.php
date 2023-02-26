<?php 

use App\controller\FraudController;

require_once("../autoloader.php");

if(isset($_GET["action"])){

if($_GET["action"] == "createFraud"){

    FraudController::create($_POST);
}

}

?>