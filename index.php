<?php
//Inlcude some php files.
require("config.php");
require("classes/Bootstrap.php");
require("classes/Controller.php");
require("controllers/home.php");

//Create an instance of the Bootstrap class.
$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if($controller){
	$controller->executeAction();
}
?>