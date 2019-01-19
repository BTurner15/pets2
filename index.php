<?php
/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 1/18/2019
 * Time: 7:31 PM
 */


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

    $animal = $params['animal'];
    switch($animal) {
        case 'chicken':
        echo 'Cluck!';
            break;
        case 'dog':
            echo 'Woof!';
            break;
        case 'lion':
            echo 'Roar!';
            break;
        case 'pig':
            echo 'Onik!';
            break;
        case 'goose':
            echo 'Honk!';
            break;
        default:
            $f3->error(404);
    }

});
$f3->run();