<html>
<head>
	<?php
include 'e_verify.php';
$uErr=$pwErr=$uErrr=$pwErrr=$st="";
if(isset($_POST['login']))
{
	$u = $_POST['u'];
	$pw = $_POST['pw'];
	$st=$_POST['st'];
	
 	if(empty($u) && empty($pw))
	{
 		$uErr="Please Enter Your Username ";
 		$pwErr="Please Enter Your Password";
 	}
 	else
 	{
 		$query= $db->query("SELECT * FROM register WHERE uname = '$u' AND pword='$pw' AND staff='$st'");
 		$data=$query->fetch_array();
 		$name=$data['name'];
 		$_SESSION['name']=$name;
	

  		if($query->num_rows == 0)
  		{
			$uErrr="please correct username and password";
		}
 		else
  		{	
  				
  				
  				if($st=='Principal')
  				{

  					header('location:Principal_login.php');
  				}
  				if($st=='Vice-Principal')
  				{

  					header('location:vice_login.php');
  				}
  				elseif($st=='HOD')
  				{
  					header('location:Hod_login.php');
  				}
  				elseif($st=='Teacher')
  				{
  					header('location:Teacher_login.php');
  				}
  				if($st=='Non-Teacher')
  				{

  					header('location:Non-Teacher_login.php');
  				}
  				elseif($st=='Admin')
  				{
  					header('location:admin.php');
  				}
  		}
	}
 }
 
 	
/*


 $query = $db->query("SELECT * FROM signup WHERE username = '$username'");
 if($query->num_rows == 0){
  $usernameErr = "Enter correct username";
 }else{
  $r = $query->fetch_assoc();
  $hash_password = $r['password'];
  if(!password_verify($password, $hash_password)){
         $passwordErr = "Your password is wrong";
  }else{
   $_SESSION['user_login'] = $username;
   header("location:home.php");
  }
 }
}*/

 ?>
	<style>
 
		.main
		{
			background-size : cover; 
			font-family : Microsoft Sans Serif;
			color: rgb(325,369,341);
			padding:0%;
		}
		.main img{
			width:100%;
			height:100%;
		}
		.loginbox
		{
			width : 490px;
			height : 500px;
			background: transparent;
			top: 20%;
			left :30%;
			position : absolute;
			transform : translate(-10%,0%);
			padding : 30px  50px;
		}

		.loginbox img
		{
			width : 100px;
			height : 100px;
			border-radius:100%;
			position : absolute;
			top: -50px;
			left : calc(50% - 50px);
		}	

		h1
		{
			margin : 0;
			padding: 30px 0 20px;
			text-align: center;
			font-size: 42px;
		}

		.loginbox p
		{
			margin: 0;
			padding: 0;
			font-weight : bold;
		}

		.loginbox input
		{
			width: 100%;
			margin-bottom: 20px;
		}

		.loginbox input[type="text"], input[type="password"] , select
		{
			border: none;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
			height: 40px;
			color: #fff;
			font-size: 16px;
		}

		.loginbox input[type="submit"]
		{
			border: none;
			outline: none;
			height: 40px;
			background: #fb2525;
			color: #fff
			font-size: 36px;
			border-radius: 20px;
		}

		.loginbox input[type="submit"]:hover
		{
			cursor: pointer;
			background: red;
			color: #000;
		}

		.loginbox  a
		{
			text-decoration: none;
			font-size: 16px;
			line-height: 25px;
			color: darkgrey;
			transition: 0.5s all;
		}

		.loginbox  a:hover
		{
			color: white;
		}


	</style>
<title> Login form </title>
</head>

<body >
	<div class="main"><img src="images/bg.jpg">

	<div class="loginbox" >
		<img src="images/logo.jpg" class="avatar"/>
	
	<h1> Login</h1>
	
	<form method="POST">
	
	<p>Username</p>
		<input type="text" name="u" placeholder="Enter Username"><?php echo "$uErrr";echo "$uErr"; ?>
	<p>Password</p>
		<input type="password" name="pw" placeholder="Enter Password"><?php echo "$pwErrr";echo "$pwErr"; ?><br><br>
  		
  			<th> Authority:<select name="st"></th>
                <option value="Admin">Admin</option>
             <option value="Principal">Principal</option>
             <option value="Vice-Principal">Vice-Principal</option>
             <option value="HOD">HOD</option>
             <option value="Teacher">Teacher</option>
             <option value="Non-Teacher">Non-Teacher</option></select><br><br>

       		<input type="submit" name="login" value="Login"><br><br>

		<a href="#">Forgot password ?</a><br>
		<a href="register.php"> Don't have an account ? </a>
	</form>

	</div>
	</div>

</body>
</html>