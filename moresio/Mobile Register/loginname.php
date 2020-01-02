<?php
	include'Connect.php';

	$que="select * from register";
	$run=mysqli_query($db,$que);
	while($row=mysqli_fetch_array($run))
	{
		$n=$row['name'];
	}
?>