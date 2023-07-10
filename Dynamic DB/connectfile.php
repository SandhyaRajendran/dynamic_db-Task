<?php
class DB{
    public $db;
    public $dbname="mydemo";
    public $dbpass="welcome";
    public $dbuser="admin";
    public $dbhost="localhost";
    public function __construct()
    {
        $this->db = new PDO(
            'mysql:host=127.0.0.1;dbname=.$this->dbname,
            $this->dbpass,
            $this->$dbhost,
        );
    }

        try {
           


            $con=$this->db($dbpass,$dbuser,$dbhost,$dbname) or die("error during connecting");

        }
        catch (Exception $e){
            echo $e->getMessage();
        }

    
}

$cllas = new DB();
echo $cllas;
    

//if($con){
//    echo "connected";
//}
//else{
//    echo "not found";
//}
//
//$mysqli=new mysqli($dbhost,$dbuser,$dbpass);
//$sql="CREATE DATABASE $dbname";
//$mysqli->query($sql);
//
//$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("error while choose");

//echo $con;

//echo "hi";
//
//    if($con){
//echo "connected";
//}
//else{
//  echo "not found";
//}
//
//    $mysqli=new mysqli($dbhost,$dbuser,$dbpass);
//$sql="CREATE DATABASE $dbname";
//$mysqli->query($sql);
//
//    $con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("error while choose");
//
//
//
//$dbuser = 'root';
//$dbpass = '';
//$dbname = 'onboard';
//$dbhost = 'localhost';
//
//$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("error while connecting");
//echo "checked";
//if($resource){
//echo "connected";
//}
//else{
//  echo "not found";
//  $mysqli=new mysqli($dbhost,$dbuser,$dbpass);
//$sql="CREATE DATABASE onboard";
//$mysqli->query($sql);
//$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("error while choose");
//echo "connected";
//}