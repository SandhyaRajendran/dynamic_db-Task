<?php

class DatabaseConnection
{
    public $db;
    public $dbname;

    public function __construct()
    {
        try {
            $this->dbname = $_SESSION['dbName'];
//            echo ($this->dbname);
            $this->db = new PDO
            (
                'mysql:host=127.0.0.1;dbname='.$this->dbname,
                'admin',
                'welcome'
            );
//            echo "success";
        } catch (Exception $e) {
            die($e->getMessage()."connection error");
        }
    }
}

//$dbh = new PDO('mysql:host=localhost;user=admin;password=welcome;dbname=project_management');
//$statement = $dbh->query('SHOW DATABASES');
//$newStore[] = $statement->fetchAll();
////print_r($newStore[0][24]['Database']);
//
//foreach ($newStore[0] as $n=>$value){
//    print_r($value[0])."\n";
//}
