<?php
/*$username="janki_janki";

$password="maskoid";

$servername="localhost";

$dbname="janki_janki";

$conn= new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die('connection fail');
}else{
    echo "connection successfully.";
}*/

class connection {

    private $host = 'localhost';
    private $username = 'janki_janki';
    private $password = 'maskoid';
    private $database = 'janki_janki';
    private $conn;

    public function __construct(){

        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database) or die("MySQL Error");

    }

    public function getConn(){
        return $this->conn;
    }

}
?>
