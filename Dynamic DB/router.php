<?php

require 'Controllers/controller.php';

class Router{
    public $router = [];
    public $controller;

    public function __construct()
    {
        $this->controller = new userController();
    }

    public function get($uri,$action){
        $this->router[] = [
          'uri' => $uri,
          'action' => $action,
          'method' => "GET"
        ];
    }
    public function post($uri,$action)
    {
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => "POST"
        ];
    }

    public function routerConnection($serverUri,$serverMethod){
        foreach ($this->router as $router){
            if($router['uri'] == $serverUri && $router['method'] == $serverMethod){
                $action = $router['action'];

                switch ($action){
                    case "showHomePage":
                        $this->controller->showHomePage();
                        break;
                    case "dbPage":
                        $this->controller->dbPage();
                        break;
                    case "createDBPage":
                        $this->controller->createDBPage();
                        break;
                    case "dbName":
                        $this->controller->dbName($_POST['dbName']);
                        break;
                    case "tableData":
                        $this->controller->tableData($_POST);
                        break;
                    case "columnPage":
                        $this->controller->columnPage();
                        break;
                    case "addColumn":
                        $this->controller->addColumn($_POST);
                        break;
                }
            }
        }
    }
}