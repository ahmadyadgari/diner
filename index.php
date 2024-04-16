<?php

// 328/Week2/diner/index.php
// This is my CONTROLLER!

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once ('vendor/autoload.php');

// Instantiate the F3 Base class
$f3 = Base::instance();

// Define a default route to home page
// https://ayadgari.greenriverdev.com/328/Week2/diner/

$f3->route('GET /', function() {
    //echo '<h1>Hello Diner!</h1>';

    // Render a view page
    $view = new Template();
    echo $view->render('views/home-page.html');
});

// define 2nd Route to breakfast menu
$f3->route('GET /menus/breakfast', function() {
    // echo '<h1>Welcome, This is Menu!</h1>';

    // Render a view page
    $view = new Template();
    echo $view->render('views/breakfast-menu.html');
});

// define 3rd Route to Lunch menu
$f3->route('GET /menus/lunch', function() {
    // echo '<h1>Welcome, This is Menu!</h1>';

    // Render a view page
    $view = new Template();
    echo $view->render('views/lunch-menu.html');
});

// define 4th Route to dinner menu
$f3->route('GET /menus/dinner', function() {
    // echo '<h1>Welcome, This is Menu!</h1>';

    // Render a view page
    $view = new Template();
    echo $view->render('views/dinner-menu.html');
});

// Run Fat-Free
$f3->run();