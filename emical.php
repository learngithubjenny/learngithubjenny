<?php
require("oops_conn.php");

/**
 *
 */
class emical
{
     private $db;

    function __construct($db)
    {
        $this->db = $db;
    }

	public function calculateemi($amount,$interest,$loan){
		$interest1=$interest/(12*100);
    	$loan=$loan*12;
	 //emi = (p * r * pow(1 + r, t)) / (pow(1 + r, t) - 1); 
		$emi=($amount*$interest1*pow(1+$interest1,$loan))/ (pow(1+$interest1,$loan)-1);

		echo $emi;
	}
}

$connection = new connection();
$obj = new emical($connection->getConn());
$obj->calculateemi($_POST['amount'],$_POST['interest'],$_POST['loan']);
?>