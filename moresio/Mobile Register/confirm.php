<?php include 'e_verify.php';
  ?>
		
<!DOCTYPE html>
<html>
<head>
	<title>Confirm </title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
	


<?php

if(isset($_SESSION['account_create'])):?>
<div class="bs-example">
    <div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
         	<?php echo $_SESSION['account_create'];
//echo $_SESSION['account_create'];?>

    </div>

<?php endif;?>
<?php unset($_SESSION['account_create']); ///refresh the does not show again account is created
?>
<?php
if(isset($_SESSION['please_confirm'])):?>
<div class="bs-example">
    <div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert">&times;</a>

	<?php echo $_SESSION['please_confirm'];
//echo $_SESSION['account_create'];
?>
</div>
<?php endif;?>
<?php unset($_SESSION['please_confirm']); ///refresh the does not show again account is created
?>

<form action="" method="POST">
	<center><h2>Please Confirm Your Email</h2>
	<input type="text" name="confirm_code" placeholder="Enter confirm code....">
	<input type="submit" name="confirm" value="Confirm">
	</center>
	<?php
confirm_email();
?>
</form>

</body>
</html>