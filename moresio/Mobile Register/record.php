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

		.dropdown1 .dropbtn1 
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

		.navbar a:hover, .dropdown1:hover .dropbtn1 
		{
			background-color:lightgreen;
		}

		.dropdown2
		{
			overflow: hidden;
		}

		.dropdown2 .dropbtn2 
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

		.navbar a:hover, .dropdown2:hover .dropbtn2 
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
				
			</font></center>


<form action="record.php" method="get">
	<br>Search Records<input type="text" name="search" placeholder="type name"><br>
	<input type="submit" name="submit" value="search">	
</form>
<?php
	if(isset($_GET['search']))
	{
		$search_record=$_GET['search'];
		$query="select * from register where name ='$search_record'";
		$run=mysqli_query($db,$query);
		echo"<br>";
		while($row=mysqli_fetch_assoc($run))
		 {		
				$id=$row[0];
				$to=$row[1];
				$name=$row[2];
				$at=$row[3];
			
	?>
<table align="center" border="2" bgcolor="white" width="950
	 <tr align="center">
		 	<td><?php echo $id; ?></td>
		 	<td><?php echo $to; ?></td>
		 	<td><?php echo $name; ?></td>
		 	<td><?php echo $at;?></td>
		 </tr>
</table>
<?php } }
?>
		<table width="950" border="4" align="center"><br>

		<tr>
			<th align="center" bgcolor="lightgreen" colspan="20"> <h2> Mobile Register </h2></th>
		</tr>
        <tr align="center">
        	<th>No</th>
        	<th>Reciver Name</th>
        	<th>Name</th>
        	<th>Authority</th>
       		<th>Details</th>
        </tr>

		<tr align="center">
		<?php
			
			$que="select * from register";
			$run=mysqli_query($db, $que);
			$i=1;
			while($row=mysqli_fetch_assoc($run))
			{
				$id=$row[0];
				$to=$row[1];
				$name=$row[2];
				$at=$row[4];
		?>
		<tr align="center">
        	<td><?php echo $id/*$i*/; ?></td>
        	<td><?php echo $to; ?></td>
        	<td><?php echo $name; ?></td>
        	<td><?php echo $at;?></td>
        	
        	<td><a href="recorddetails.php?details=<?php echo $name; ?>">Details</a></td>
 		</tr>
        

<?php } ?>

</form>
</table>	


		</div>

		<?php include'1.php';?>
	</div>
</body>
</html>