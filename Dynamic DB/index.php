<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//here i checked the connection is working or not
//require 'connection.php';
//$checkConnection = new DatabaseConnection();

//here i started the session to store some values in it
session_start();

//here i required the router.php file to use its all function
require 'router.php';
//here i take a copy of Router class in the name of router
$router = new Router();

$router->get('/','showHomePage');
$router->post('/dbPage','dbPage');
$router->post('/createDBPage','createDBPage');
$router->post('/dbName','dbName');
$router->post('/tableData','tableData');
$router->post('/columnPage','columnPage');
$router->post('/addColumn','addColumn');
$router->post('/selectedDB','selectedDB');
$router->routerConnection($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);