<?php

require_once 'model/UserModel.php';

$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'error';

switch ($url) {
    case 'hello':
    case 'hallo':
        require_once 'controller/ViewController.php';
        $viewController = new ViewController();
        $viewController->show($url);
        break;
    default:
        require_once 'controller/ErrorController.php';
        $errorController = new ErrorController();
        $errorController->show();
        break;
}


