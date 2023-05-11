<?php

//Error Reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once ('vendor/autoload.php');

//Initialize F3
$f3 = Base::instance();

//Routing

//Default Route
$f3->route('GET /', function() {
    $view = new Template();
    echo $view->render('views/home.html');
});

//Run f3
$f3->run();