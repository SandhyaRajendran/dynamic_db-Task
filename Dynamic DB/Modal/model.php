<?php

require 'connection.php';

class userModal extends DatabaseConnection{

    public function showDatabases(){
        $showDB = $this->db->query('SHOW DATABASES');
        $allDBName = $showDB->fetchAll();
        return $allDBName;
    }

    public function createDB($name){
        $_SESSION['dbName'] = $name;
        $dbName = $name;
        $createDB = $this->db->query("CREATE DATABASE $dbName");
        header('location:/');
    }
    public function tableData($tableData){
        $dbName = $tableData['dbName'];
        $tableName = $tableData['tableName'];
        $columnName = $tableData['columnName'];
        $dataTypes = $tableData['dataTypes'];
//        var_dump($tableData);
//        echo($dbName);
//        echo($tableName);
//        echo($dataTypes);
//        echo($columnName);
//        $createTable = $this->db->query("USE $dbName
//        CREATE TABLE $tableName($columnName $dataTypes not null AUTO_INCREMENT PRIMARY key,
//                            created_at timestamp,
//                            updated_at timestamp
//                             );");
    }

    public function addColumn($columnValues){
        var_dump($columnValues);
    }
}