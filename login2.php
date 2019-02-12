<?php
require("oops_conn.php");

/**
 *
 */
class login
{
     private $db;

    function __construct($db)
    {
        $this->db = $db;
    }

	public function verifylogin($uname,$pwd){
		$sql="SELECT * FROM `register` WHERE `username`='".$uname."' AND `password`='".$pwd."'";

		//echo $sql;die;
        $result=$this->db->query($sql);
    	if($result->num_rows > 0){
			session_start();
			$_SESSION['username']=$uname;
			$_SESSION['msg']="Login Successfully";
			header('location:oops_emicalulater.php');
		}else{
			$_SESSION['msg']="Username or password incorrect";
			header('location:login.php');
		}
	}
}

$connection = new connection();
$obj = new login($connection->getConn());
$obj->verifylogin($_POST['username'],$_POST['password']);
?>
