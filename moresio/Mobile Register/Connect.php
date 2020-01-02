<?php 
session_start();
$db = new mysqli("localhost","root","","moresio");
if($db->connect_error)
{
	echo "Connect".$db->connect_error;
}
//session_destroy();
 ?>
