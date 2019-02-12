<?php
require("oops_conn.php");
//CONNECTION STARTS HERE

class register
{
     private $db;

    public function __construct($db){

        $this->db = $db;

    }

    public function insert($name,$address,$gender,$username,$password,$phone,$email){

        $sql="INSERT INTO `register` (`name`,`address`,`gender`,`username`,`password`,`phone`,`email`) VALUES('".$name."','".$address."','".$gender."','".$username."','".$password."','".$phone."','".$email."')";

        $result=$this->db->query($sql);

        if($result){
            echo "Inserted";
        }else{
            echo $conn->error;
        }
    }
}

$connection = new connection();
$obj = new register($connection->getConn());
$obj->insert($_POST['name'],$_POST['address'],$_POST['gender'],$_POST['username'],$_POST['password'],$_POST['phone'],$_POST['email']);




?>
