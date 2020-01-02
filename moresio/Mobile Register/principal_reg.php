<?php include "e_verify.php"; ?>
<?php if(!isset($_SESSION['name'])):
?>
<?php header("location:home.php");  ?>
<?php endif;?>

<!DOCTYPE html>
<html>
<head>
<title>	Principal
</title>
<style>
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
			background-color:lightyellow;
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
            <a href="principal.php"><button class="backbtn">Back</button></a>

			<form method="POST" action="principal_reg.php">
			<table width="600" height="300" border="4" align="center">
<tr>
		<th bgcolor='lightgreen'colspan="20" > Principal Registration</th>
		</tr><br>


    <tr>
			<td align="right">Principal ID</td>
			<td><input type="text" name="pid">
			<font color="red"><?php echo @$_POST['pid'];?></font>

		</td>
		</tr>



<tr>
			<td align="right"> Full Name</td>
			<td><input type="text" name="pn">
			<font color="red"><?php echo @$_['pname'];?></font>
			</td> <br>
		</tr>

       <tr>
			<td align="right">Mobile No</td>
			<td><input type="text" name="mo">
			<font color="red"><?php echo @$_GET['mobile'];?></font>
		</td>
		</tr>


    <tr>
			<td align="right">Email Id</td>
			<td><input type="text" name="e">
			<font color="red"><?php echo @$_GET['email'];?></font>

		</td>
		</tr>



    <tr>
			<td align="right">Address</td>
			<td><input type="text" name="add">
			<font color="red"><?php echo @$_GET['address'];?></font>

		</td>
		</tr>
 
         <tr>
			<td  align="right"> Staff</td>
			<td>
				<select name="st">
					<option value="null"> </option>
					<option value="Principal">Principal</option>
					<option value="Vice Principal">Vice Principal</option>
				</select>
				<font color="red"><?php echo @$_POST['staff'];?></font>
				


			</td>
		</tr>



     <tr>
			<td align="center" colspan="6">
			<input type="submit" name="submit" value="Submit">
		</td>
		</tr>



</table>
</form>




<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db('moresio',$con);

  $pid=$pn=$mo=$e=$add=$st="";

 if(isset($_POST['submit']))
{
 
    $pid=$_POST['pid'];
	$pn=$_POST['pn'];
	$mo=$_POST['mo'];
	$e=$_POST['e'];
	$add=$_POST['add'];
	$st=$_POST['st'];


if($pid=='')
{
	echo 
		"<script>window.open('principal_reg.php?id= Enter id No','_self')</script>";
		exit();

}

if($pn=='')
{
	echo 
		"<script>window.open('principal_reg.php?pname=Name is Required','_self')</script>";
		exit();
	}

if($mo=='')
{
	echo 
		"<script>window.open('principal_reg.php?mobile=Mobile No. is Required','_self')</script>";
		exit();
	}

if($e=='')
{
	echo 
		"<script>window.open('principal_reg.php?email=Email Id is Required','_self')</script>";
		exit();
}
if($add=='')
{
	echo 
		"<script>window.open('principal_reg.php?address=Address is Required','_self')</script>";
		exit();
}

	
	
	if($st=='null')
{
	echo 
		"<script>window.open('principal_reg.php?staff=Select Your Dsignation','_self')</script>";
		exit();
	}

	/*$que="insert into u_reg(u_name,u_father,u_collage,u_roll,u_class) values('$student_name','$student_father','$student_collage','$student_roll','$student_class')";
*/
	$que="insert into principal(pid,pname,mobile,email,address,staff) values(' $pid','$pn','$mo','$e','$add','$st')";



	if(mysql_query($que))
	{
		echo "<center><b> The Following Data has been inserted into database:</b></center>";
		echo "<table align='center' border='4'>
		<tr>
				<td>$pid</td>
				<td>$pn</td>
				<td>$mo</td>
				<td>$e</td>
				<td>$add</td>
				<td>$st</td>
		<tr></table>";


	}
	else
		echo "Data cannot saved!";
	
}

?>

		</div>

		<?php include'2.php'; ?>

	</div>

	
</body>
</html>