<?php
//here i required the connection.php to connect the model to the DB
require 'connection.php';
//here i created a class userModal to make the connection to the DB,insert values to the db and fetch values from the db
class userModal extends DatabaseConnection{
    //this function is to fetch all the databases from the DB
    public function showDatabases(){
        try {
            $showDB = $this->db->query('SHOW DATABASES');
            $allDBName = $showDB->fetchAll();
            return $allDBName;
        }
        catch (Exception $e){
            die($e->getMessage());
        }
    }
    //this function is to create the create new database
    public function createDB($name){
        try {
            $_SESSION['dbName'] = $name;
            $dbName = $name;
            $createDB = $this->db->query("CREATE DATABASE $dbName");
            header('location:/');
        }
        catch (Exception $e){
                die($e->getMessage());
            }
    }
    //this function is to create table with the column
    public function tableData($tableData)
    {
        try {
            $dbName = $tableData['dbName'];
            $tableName = $tableData['tableName'];
            $columnName = $tableData['columnName'];
            $dataTypes = $tableData['dataTypes'];
            $this->db->query("USE `$dbName`");
//        $this->db->query("CREATE TABLE `$tableName` (id INT PRIMARY KEY AUTO_INCREMENT,$columnName $dataTypes)");
            $createTableQuery = "CREATE TABLE $tableName(id INT PRIMARY KEY AUTO_INCREMENT";
            for ($i = 0; $i < count($columnName); $i++) {
                $column_name = $columnName[$i];
                $data_type = $dataTypes[$i];
                $createTableQuery .= ", $column_name $data_type";
            }
            $createTableQuery .= ")";
            $this->db->query("$createTableQuery");
            header('location:/');
        }
        catch (Exception $e){
            die($e->getMessage());
        }
    }

    public function addColumn($columnValues){
//        var_dump($columnValues['dbName']);
        $_SESSION['addColumnDbName'] = $columnValues['dbName'];
        var_dump($_SESSION['addColumnDbName']);
    }
    public function selectedDB($selectedDB){
        var_dump($selectedDB);
        $_SESSION['selectedDBName'] = $selectedDB['selectedDBName'];
    }

    public function fetchAllTables(){
        $db =   $_SESSION['selectedDBName'];
        $this->db->query("USE $db");
        $showTables =   $this->db->query('SHOW TABLES');
        $allTables = $showTables->fetchAll();
        return($allTables);
    }

}