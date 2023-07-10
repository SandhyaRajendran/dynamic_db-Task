<?php
require 'Modal/model.php';

class userController{
    public $modal;

    public function __construct()
    {
        $this->modal = new userModal();
    }

    public function showHomePage(){
        require 'Views/homePage.php';
    }
    public function dbPage(){
        $dbName =  $this->modal->showDatabases();
        require 'Views/createTablePage.php';
    }

    public function createDBPage(){
        require 'Views/createDbPage.php';
    }
    public function dbName($value){
        $this->modal->createDB($value);
    }
    public function tableData($tableValue){
        $this->modal->tableData($tableValue);
    }
    public function columnPage(){
        $dbName =  $this->modal->showDatabases();
        require 'Views/createColumnPage.php';
    }
    public function addColumn($tables){
        $this->modal->addColumn($tables);
    }

}