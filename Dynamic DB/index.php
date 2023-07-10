<?php

//require 'connection.php';
//$checkConnection = new DatabaseConnection();
session_start();
require 'router.php';

$router = new Router();

$router->get('/','showHomePage');
$router->post('/dbPage','dbPage');
$router->post('/createDBPage','createDBPage');
$router->post('/dbName','dbName');
$router->post('/tableData','tableData');
$router->post('/columnPage','columnPage');
$router->post('/addColumn','addColumn');
$router->routerConnection($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);