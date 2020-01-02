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

		
		.addbtn
		{
			margin-top: 10px;
			margin-left: 10px;
			font-size: 17px;
			transition: 0.6s all;
			cursor: pointer;
		}
		.addbtn:hover
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
			<center><font color='red' size='5'>
				<?php echo @$_GET['deleted'];?>
				<?php echo @$_GET['updated'];?>
			</font></center>
		<table width="950" border="4" align="center"><br>

		<tr>
			<th align="center" bgcolor="lightgreen" colspan="20"> <h2> Teacher Records </h2></th>
		</tr>
        <tr align="center">
        	<th>No</th>
        	<th>Name</th>
        	<th>Mobile No.</th>
        	<th>Email</th>
        	<th>Delete</th>
        	<th>Edit</th>
        	<th>Details</th>
        </tr>

		<tr align="center">
		<?php
			
			$que="select * from register where staff='Teacher'";
			$run=mysqli_query($db, $que);
			$i=1;
			while($row=mysqli_fetch_array($run))
			{
				$id=$row[0];
				$tn=$row[1]." ".$row[3];
				$ph=$row[5];
				$e=$row[4];
			
			
		?>
		<tr align="center">
        	<td><?php echo $id/*$i*/; ?></td>
           	<td><?php echo $tn; ?></td>
        	<td><?php echo $ph; ?></td>
        	<td><?php echo $e; ?></td>
        	<td><a href="teachdele.php?del=<?php echo $id; ?>"> Delete</a></td>
        	<td><a href="teacheredit.php?edit=<?php echo $id; ?>"> Edit</a></td>
 			<td><a href="teachdetails.php?details=<?php echo $id; ?>">Details</a></td>
 		</tr>
        

<?php } ?>

</form>
</table>	

<form action="teacher.php" method="get">
	<br>Search Records<input type="text" name="search" placeholder="Enter name"><br>
	<input type="submit" name="submit" value="search">	
</form>
<?php
	if(isset($_GET['search']))
	{
		$search_record=$_GET['search'];
		$query="select * from register where name ='$search_record'";
		$run=mysqli_query($db, $query);

		while($row=mysqli_fetch_array($run))
		 {		
			$id=$row[0];
				$hn=$row[1]." ".$row[3];
				$mo=$row[5];
				$e=$row[4];
				$st=$row[9];
			
			echo"<br>";
	?>
<table align="center" border="2" bgcolor="white" width="950
	 <tr align="center">
		 	<td><?php echo $id; ?></td>
		 	<td><?php echo $tn; ?></td>
		 	<td><?php echo $ph; ?></td>
		 	<td><?php echo $e; ?></td>
		 	<td><?php echo $st;?></td>
		 </tr>
</table>
<?php } }
?>




		</div>

		<?php include'2.php';?>

	</div>

</body>
</html>
