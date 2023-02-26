<?php 

use App\controller\FraudController;

require_once("../autoloader.php");

if(isset($_GET["action"])){

if($_GET["action"] == "createFraud"){

    FraudController::create($_POST);

}else if($_GET["action"] == "dashboard"){

    var_dump($_POST);

    FraudController::findDate($_POST["date"]);
    FraudController::findLine($_POST["time"]);
}

}

?>