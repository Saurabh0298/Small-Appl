<?php include "e_verify.php"; ?>
<?php if(!isset($_SESSION['name'])):
?>
<?php header("location:home.php");  ?>
<?php endif;?>

<!DOCTYPE html>
<html>
<head>
<title>HOD	Profile	
</title>

<style>
	.main{
		background-color:green;
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

	.fram a
	{
		height:100%;
		width: 100%;
		background-color:white;
		float:left;
		margin-top:5px;
		margin-left: 5px;
		font-family: Constantia;
	}

	.fram img{
		height: 530px;
		width: 1071px;
			}
	.menu
	{
		padding-left: 40px;
	}

</style>
</head>
<body>
	<div class="main">	
		<?php include'title.php'; ?>
		
		<div class="fram">
			<img src="images/bg6.jpg">
		</div>

    	<?php include'1.php';?>
    
  	</div>
  	
	
</body>
</html>