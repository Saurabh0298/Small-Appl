<?php
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db('moresio',$con);

	$delete_record =$_GET['del'];

	$query="delete from register where id='$delete_record'";

	if(mysql_query($query))
	{
      echo 
		"<script>window.open('principal.php?deleted=Record has been Deleted Successfully!','_self')</script>";
	}
?>