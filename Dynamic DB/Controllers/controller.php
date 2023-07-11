<?php
//modal is here required for sending all the viewPage details to modal(backend)
require 'Modal/model.php';

class userController{
    //here i declared a variable to get the copy of the userModal class
    public $modal;

    public function __construct()
    {
        // here i assigned the userModal class into the modal variable
        $this->modal = new userModal();
    }
    //this function is to render homepage
    public function showHomePage(){
        try {
            require 'Views/homePage.php';
        }
        catch (Exception $e){
            echo $e->getMessage();
        }
    }
    //This function is for render database page
    // fetch all the database names  from the databse
    // i stored it into the variable name called dbName
    public function dbPage(){
        try {
            $dbName =  $this->modal->showDatabases();
            require 'Views/createTablePage.php';
        }
        catch (Exception $e){
            echo $e->getMessage();
        }
    }
    //this function is to render createDBPage
    public function createDBPage(){
        try {
            require 'Views/createDbPage.php';
        }
        catch (Exception $e){
            echo $e->getMessage();
        }
    }
    // fetch all the values from the view and send it to the backend
    public function dbName($value){
        try {
            $this->modal->createDB($value);
        }
        catch (Exception $e){
            echo $e->getMessage();
        }
    }
    //fetch all the values from the table dataand send it to the db
    public function tableData($tableValue){
        try {
            $this->modal->tableData($tableValue);
        }
        catch (Exception $e){
            echo $e->getMessage();
        }
    }
    //here i fetch all the dbNames and store it to the variable name called dbName
    public function columnPage(){
        try {
            $dbName =  $this->modal->showDatabases();
            $new = $this->modal->fetchAllTables();
            require 'Views/createColumnPage.php';
        }
        catch (Exception $e){
            echo $e->getMessage();
        }

    }
    public function addColumn($tables){
        try{
            $this->modal->addColumn($tables);
        }
        catch (Exception $e){
            echo $e->getMessage();
        }
    }
    public function selectedDB($selectedDB){
        try {
            $this->modal->selectedDB($selectedDB);
        }
        catch (Exception $e){
            echo $e->getMessage();
        }
    }
}