<?php
require "./core/database.php";
require "./models/QuestionModel.php";
require "./controllers/BaseController.php";

$controllerName = ucfirst(($_REQUEST['controller'] ?? 'Welcome') . 'Controller');
$actionName = $_REQUEST['action'] ?? 'index';

require "./controllers/${controllerName}.php";
$controllerObject = new $controllerName;

$controllerObject->$actionName();