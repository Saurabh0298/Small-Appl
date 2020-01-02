<?php include "e_verify.php"; ?>
<?php if(!isset($_SESSION['name'])):
?>
<?php header("location:home.php");  ?>
<?php endif;?>
<?php
	error_reporting(0);
	$edit_record=$_GET['edit'];
	$query="select * from register where id='$edit_record'";

	$run=mysqli_query($db,$query);

	while ($row=mysqli_fetch_array($run))
	 {
				$id=$row[0];
				$tn=$row[1]." ".$row[3];
				$mo=$row[5];
				$e=$row[4];
				$st=$row[9];
	

	?>



<!DOCTYPE html>
<html> 
<head>

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
			background-color:white;
			float:left;
			margin-top:5px;
			margin-left: 5px;
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
		<?php include'title.php'; ?>
		
		<div class="fram"> 
            <a href="teacher.php"><button class="backbtn">Back</button></a>

<form method='post' action='teacheredit.php?edit_form=<?php echo $id;?>'>
			<table width="600" height="300" border="4" align="center">
<tr>
		<th bgcolor='lightgreen'colspan="5" >Updating Form</th>
		</tr><br>

<tr>
			<td align="right"> Name</td>
			<td><input type="text" name="tn" value='<?php echo $tn;?> '>
		
			</td> <br>
		</tr>

       <tr>
			<td align="right">Mobile No</td>
			<td><input type="text" name="mo" value='<?php echo $mo;?> '>
			
		</td>
		</tr>
<tr>
			<td align="right">Email Id</td>
			<td><input type="text" name="e" value='<?php echo $e;?> '>
			
		</td>
		</tr>
    
 
         <tr>
			<td  align="right">Staff</td>
			<td> 
				<select name="st">
				<option value='<?php echo $st;?> '><?php echo $st; ?></option>
				<option value="Principal">Principal</option>
				<option value="HOD">HOD</option>
				<option value="Teacher">Teacher</option>	
				</select>
				
				


			</td>
		</tr>



     <tr>
			<td align="center" colspan="6">
			<input type="submit" name='update' value="Update">
		</td>
		</tr>
<?php
}
?>


</table>
</form>
		</div>

		<?php include'2.php'; ?>


	</div>

	
</body>
</html>

<?php
if(isset($_POST['update']))
{
    $edit_record1=$_GET['edit_form'];
	$tn=$_POST['tn'];
	$e=$_POST['e'];
	$mo=$_POST['mo'];
	$st=$_POST['st'];

/*	$query1="update u_reg set u_name='$student_name', u_father='$student_father', u_collage='$student_collage' ,u_roll='$student_roll', u_class='$student_class' where u_id='$edit_record1' ";
							*/
	$query="update register set  name='$tn', sname='$sn',email='$e',phone='$mo' ,staff='$st' where id='$edit_record1' ";

	if(mysqli_query($db,$query)) 
	{
	echo  "<script>window.open('teacher.php?updated= Record has been updated..!','_self')</script>";

	}
	else
		echo "Record can not updated!";
}
?>