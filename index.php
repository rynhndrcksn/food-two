<?php
/*
 * @author: Ryan H.
 * @version: https://github.com/rynhndrcksn/food-two
 * index.php is the controller for our F3 MVC
 */

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require autoload file
require_once ('vendor/autoload.php');

// create an instance of the base class (fat-free framework)
$f3 = Base::instance();

// turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

// define a default route (home page)
$f3->route('GET /', function() {
	// create a new view, then sends it to the client
	$view = new Template();
	echo $view->render('views/home.html');
});

// define an order route
$f3->route('GET /order', function() {
	$view = new Template();
	echo $view->render('views/order.html');
});

// define an order2 route
$f3->route('GET /order2', function() {
	$view = new Template();
	echo $view->render('views/order2.html');
});

// define an order route
$f3->route('GET /summary', function() {
	$view = new Template();
	echo $view->render('views/summary.html');
});

// run fat free HAS TO BE THE LAST THING IN FILE
$f3->run();
