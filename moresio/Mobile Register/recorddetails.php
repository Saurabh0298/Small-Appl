<?php include "e_verify.php"; ?>
<?php if(!isset($_SESSION['name'])):
?>
<?php header("location:home.php");  ?>
<?php endif;?>

<!DOCTYPE html>
<html>
<head>
	<title>Mobile Register</title>
	<style type="text/css">
		.main
		{
			background-color:Green;
			width:100%;
			height:620px;
		}
		.nav
		{
			height: 80px;
			width: 100%;
			background-color:white;
		}

		.nav img
		{
			height: 75px;
			width: 300px;
		}	
		.name
		{
       		margin-top:0px;
       		padding:-8px;
			font-size:20px; 
		}

	
	
		.navbar
		{
			height: 530px;
			width: 252px;
			background-color: snow ;
			float:right;
			margin-top: 5px;
			margin-right: 5px;
		}

		.navbar img
		{
			height: 70px;
			width: 70px;
			margin-top:5px;
			margin-left:90px; 
			margin-bottom:10px;	
		}

		.navbar p
		{
			font-size: 20px;
		}

 		.navbar ul a 
 		{
			text-decoration:none;
			list-style: none;
			font-size: 25px;
			padding: 25px;	
		}
		.navbar
		{
			overflow: hidden;
			background-color: snow;
		}

		.navbar a 
		{
 			font-size: 20px;
  			color: black;
  			padding: 10px 100px;
  			text-decoration: none;
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

		.dropdown1
		{
  			overflow: hidden;
		}

		.dropdown1 .dropbtname1 
		{
  			font-size: 20px;  
  			border: none;
  			outline: none;
  			color: black;
  			padding: 10px 100px;
  			background-color: inherit;
  			font-family: inherit;
  			margin: 0;
		}

		.navbar a:hover, .dropdown1:hover .dropbtname1 
		{
			background-color:lightgreen;
		}

		.dropdown2
		{
			overflow: hidden;
		}

		.dropdown2 .dropbtname2 
		{
			font-size: 20px;  
  			border: none;
  			outline: none;
  			color: black;
  			padding: 10px 100px;
  			background-color: inherit;
  			font-family: inherit;
  			margin: 0;
		}

		.navbar a:hover, .dropdown2:hover .dropbtname2 
		{
  			background-color:lightgreen;
		}


		.dropdown-content
		{
  			display: none;
  			position: absolute;
  			background-color: white;
  			min-width: 160px;
  			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  			z-index: 1;
		}

		.dropdown-content a
		{
  			float: none;
  			color: black;
  			padding: 10px 50px;
  			text-decoration: none;
  			display: block;
  			text-align: center;
		}

		.dropdown-content a:hover
		{
  			background-color: lightgreen;
		}

		.dropdown1:hover .dropdown-content 
		{
  			display: block;
		}

		.dropdown2:hover .dropdown-content 
		{
  			display: block;
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
		<?php include'title.php'; ?>
		
	<div class="fram">
<a href="record.php"><button class="backbtname">Back</button></a>


</table>
	
	<br>
	<table align="center" border="4" bgcolor="lightyellow" width="950" ><br>
		<tr align="center">
			<td colspan='10' bgcolor='lightgreen' ><h2>Mobile Register</h2></td>
		</tr>
		<tr align="center">
        	
        	<th>No</th>
        	<th>Reciver Name</th>
        	<th>Name</th>
        	<th>Authority</th>
        	<th>Reason for Leave</th>
        	<th>Date</th>
        	<th>In-Time</th>
        	<th>Out-Time</th>
        	
        </tr>
        <?php

	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db('moresio',$con);

	$record_details=@$_GET['details'];
	$query="SELECT * from mobileregister WHERE name='$record_details'";
	$run=mysql_query($query);
	while($row=mysql_fetch_array($run))
	{
			$id=$row[0];
			$rn=$row[1];
			$n=$row[2];
			$at=$row[3];
			$sub=$row[4];
			$date=$row[5];
			$ot=$row[6];
			$it=$row[7];
	

	?>
		 <tr align="center">
		 	<td><?php echo $id; ?></td>
		 	<td><?php echo $rn; ?></td>
		 	<td><?php echo $n; ?></td>
		 	<td><?php echo $at; ?></td>
		 	<td><?php echo $sub; ?></td>
		 	<td><?php echo $date; ?></td>
		 	<td><?php echo $ot; ?></td>
		 	<td><?php echo $it; ?></td>
		 </tr>

		<?php } ?>


</table>
</form>


		</div>

		<?php include'1.php';?>

	</div>

	
</body>
</html>