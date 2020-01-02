<?php include "e_verify.php"; ?>
<?php if(!isset($_SESSION['name'])):
?>
<?php header("location:home.php");  ?>
<?php endif;?>

<!DOCTYPE html>
<html>
<head>
	<title>Teachers Details</title>
	<style type="text/css">
		.main
		{
			background-color:Green;
			width:100%;
			height:620px;
		}
		

		.fram
		{
			height: 530px;
			width: 1071px;
			background-color:white;
			float:left;
			margin-top:5px;
			margin-left: 5px;
		}

		.fram img
		{
			height: 530px;
			width: 1071px;
		}
		.menu
		{
			padding-left: 40px;
		}

		
		.addbtname
		{
			margin-top: 10px;
			margin-left: 10px;
			font-size: 17px;
			transition: 0.6s all;
			cursor: pointer;
		}
		.addbtname:hover
		{
			background-color: lightcoral;
		}
		.fram input[type="submit"]
		{
			border: none;
			height: 25px;
			width: 100px;
			margin-left:5px;
			margin-top: 30px;
			background: red;
			color: black;
			font-size:20px;
			border-radius:10px;
		}
		.fram input[type="submit"]:hover
		{
			cursor: pointer;
			background: lightgreen;
			color: #000;
		}
		.fram button
		{
			border: none;
			height: 25px;
			width: 100px;
			margin-left:5px;
			margin-top: 30px;
			background: red;
			color: black;
			font-size:20px;
			border-radius:10px;
		}
		.fram button:hover
		{
			cursor: pointer;
			background: lightgreen;
			color: #000;
		}
	</style>
</head>
<body>
	<div class="main">	
		<?php include'title.php';?>		
	<div class="fram">
<a href="teacher.php"><button class="backbtname">Back</button></a>


</table>
	<?php

	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db('moresio',$con);

	$record_details=@$_GET['details'];
	$query="select * from teacher WHERE id='$record_details'";
	$run=mysql_query($query);
	while($row=mysql_fetch_array($run))
	{
	$id=$row['id'];	
	$tid=$row['tid'];
	$tn=$row['tname'];
	$ph=$row['phone'];
	$e=$row['email'];
	$add=$row['address'];
	$st=$row['staff'];

	

	?>
	<br>
	<table align="center" border="4" bgcolor="lightyellow" width="950" ><br>
		<tr align="center">
			<td colspan='10' bgcolor='lightgreen' ><h2>Teacher Details Here</h2></td>
		</tr>
		<tr align="center">
        	
        	<th>No</th>
        	<th>Teacher ID</th>
        	<th>Name</th>
        	<th>phone</th>
        	<th>Email</th>
        	<th>address</th>
        	<th>staff</th>
        	
        </tr>
		 <tr align="center">
		 	<td><?php echo $id; ?></td>
		 	<td><?php echo $tid; ?></td>
		 	<td><?php echo $tn; ?></td>
		 	<td><?php echo $ph; ?></td>
		 	<td><?php echo $e; ?></td>
		 	<td><?php echo $add; ?></td>
		 	<td><?php echo $st; ?></td>
		 </tr>

		<?php } ?>


</table>
</form>


		</div>

		<?php include'2.php';?>


	</div>

	
</body>
</html>