<?php
/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 1/18/2019
 * Time: 7:31 PM
 */
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload
require_once('vendor/autoload.php');

//Create an instance of the Base Class
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function() {
    echo '<h1>My Pets</h1>';
    echo "<a href='order'>Order a pet</a>";
    //$view = new View;
    //echo $view->render('home.html');
});

//Define a animal type route
$f3->route('GET /@animal', function($f3, $params) {
    print_r($params);

    $animal = $params['animal'];
    echo "You like $animal";


});
$f3->run();