<!DOCTYPE html>
<html>
<head anload="function()">
<title>Registration form</title>    
</head>
<?php 

include 'e_verify.php';



$nErr=$nErrr=$mnErr=$mnErrr=$snErr=$snErrr=$eErr=$eErr=$eErrr=$pwErr=$pwErrr=$cpErr=$cpErrr=$gErr=$gErrr=$uErr=$uErrr=$pErr=$pErrr=$pErrrr=$stErr=$stErrr=$Err=$pErrr="";



if(isset($_POST['r']))
{
 $n= $_POST['n'];
 $mn= $_POST['mn'];
 $sn= $_POST['sn'];
 $email= $_POST['e'];
 $p=$_POST['p'];
 $u= $_POST['u'];
 $pw= $_POST['pw'];
 $cp= $_POST['cp'];
 $g= $_POST['g'];
 $st= $_POST['st'];
  
 $reg       = "/^[a-zA-Z ]+$/";
 

 if(empty($n))
 {
  $nErr = "Name is required";
 } 
 else if(!preg_match($reg, $n))
 {
  $nErrr = "Only Characters are allowed";
  $n = "";
 }
 if(empty($mn))
 {
  $mnErr = "Middle Name is required";
 } 
 else if(!preg_match($reg, $mn))
 {
  $mnErrr = "Only Characters are allowed";
  $mn = "";
 }
 if(empty($sn))
 {
  $snErr = "Surname is required";
 } 
 else if(!preg_match($reg, $sn))
 {
  $snErrr = "Only Characters are allowed";
  $sn = "";
 }


 if(empty($email))
 {
  $eErr = "Email is required!";
 }
 else
 {
  $Email_check = $db->query("SELECT email FROM register WHERE email = '$email'");
  
  if($Email_check->num_rows == 0)
  {

  }
  else
  {
   $eErrr = "Sorry this email is already exist";
   $email = "";
  }
 }


if(empty($p))
 {
  $pErr = "Mobile no. is required!";
 }

 elseif(!preg_match("/^[0-9]{10}$/",$p)){
  $pErrrr="plz perfect num";
  
 }
 else
 {
  $Mobile_check = $db->query("SELECT phone FROM register WHERE phone= '$p'");
 }


 if(empty($u)){
  $uErr = "username is required!";
 }
 else
 {
  $Username_check = $db->query("SELECT uname FROM register WHERE uname = '$u'");
 
  if($Username_check->num_rows == 0)
  {

  }
  else
  {
   $uErrr = "Sorry this username is already exist";
   $u = "";
  }
 }



 if(empty($pw)){
  $pwErr = "Password is required";
 }else if(strlen($pw) < 4){
  $pwErrr= "Your password is too short";
  $pw= "";
 }
 if(empty($cp)){
  $cpErr = "Confirm password is required";
 }else if($cp!= $pw)
 {
  $cpErrr = "Please confirm your password!";
  $cp = "";
 }


 



if(empty($_POST['g']))
{
  $gErr="gender is required";
}
if (isset($_POST['g'])) 
$g=$_POST['g'];


if(empty($_POST['st']))
{
  $stErr="usertype is required";
}
if (isset($_POST['st'])) 
	$st=$_POST['st'];

//$code=rand();
//$status=0;

 if(!empty($n) && !empty($mn) && !empty($sn) && !empty($email) && !empty($p) && !empty($u) && !empty($pw))
 {
 	if(isset($_POST['st']))
 	{
 			$Query= $db->query("INSERT INTO register (name,mname,sname,email,phone,uname,pword,gender,staff) VALUES ('$n','$mn','$sn','$email','$p','$u','$pw','$g','$st')");
 		
  
 //sent_code($code,$email);
  if($Query)
  {
	header('Location:login.php');
  }

  else
   echo "Sorry ";
  }
 }
}
?>
<style>

	body{
			background-size : cover;
			font-family : Constantia;
			color: rgb(325,369,341);
		}
	.box{
			width: 600px;
			height: auto;  
			background: transparent;
			top: 0%;
			left :35%;
			position : absolute;
			transform : translate(-10%,0%);
			padding : 10px  50px;
	}

	h1
	{
			margin : 0;
			padding: 30px 0 20px;
			text-align: center;
			font-size: 42px;
	}

/*	.box dropdown1 
	{
			overflow: hidden;
	}

	.box dropdown1 .box dropbtn1
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

	.dropdown-content
	{
  			display: none;
  			position: absolute;
  			background-color: white;
  			min-width: 160px;
  			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  			z-index: 1;
	}

	.dropdown1:hover .dropdown-content 
	{
			display: block;
	}*/

	.box p
	{

			margin: 0;
			padding: 0;
			font-weight : bold;
	}

	.box input[type="submit"]
	{
		border: none;
		outline: none;
		width: 100px;
		height: 40px;
		background: #fb2525;
		color: #fff
		font-size: 36px;
		border-radius: 20px;
	}

	.box input[type="submit"]:hover
	{
		cursor: pointer;
		background: red;
		color: #000;
	}	

	.box input[type="text"], input[type="password"]
	{
		border: none;
		border-bottom: 1px solid #fff;
		background: transparent;
		outline: none;
		height: 40px;
		color: #fff;
		font-size: 16px;
	}


	.box a
	{
		text-decoration: none;
		font-size: 16px;
		line-height: 25px;
		color: darkblue;
		transition: 0.5s all;
	}

	.box a:hover
	{
		color: white;
	}

	#span
	{
		color: red;
	}
</style>
<body background="images/bg7.jpg">
<div class="box">
	<h1> Sign up </h1><br>
<form action="" method="POST">
<table>
	<tr><th>Name:</th><td><Input type="text" name="n" placeholder='first name'> <span id="span"><?php echo"$nErr";echo"$nErrr";?></span></td></tr>
	<tr><th>Middle Name:</th><td><Input type="text" name="mn" placeholder="father/husband"><span id="span"><?php echo"$mnErr";echo"$mnErrr";?></span></td></tr>
	<tr><th>Surname :</th><td><Input type="text" name="sn" placeholder="surname"><span id="span"><?php echo"$snErr";echo"$snErrr";?></span></td></tr>
	<tr><th> Email :</th><td><Input type="text" name="e" placeholder="example@gmail.com"><span id="span"><?php echo"$eErr";echo"$eErrr";?></span></td></tr>
	<tr><th> Phone no :</th><td><Input type="text" name="p"><span id="span"><?php echo"$pErr";echo"$pErrr"; echo"$pErrrr";?></span></td></tr>
	<tr><th>Username :</th><td><Input type="text" name="u" placeholder="Enter username"><span id="span"><?php echo"$uErr";echo"$uErrr";?></span></td></tr>
	<tr><th>Password :</th><td><Input type="password" name="pw"><span id="span"><?php echo"$pwErr";echo"$pwErrr";?></span></td></tr>
	<tr><th>Confirmed Password: </th><td><Input type="password" name="cp"><span id="span"><?php echo"$cpErr";echo"$cpErrr";?></span></td></tr>

<tr><th><span class="title">Gender:</span></th><td><input type="radio" name="g" id="male" value="Male" /> <label for="male">Male</label> <input type="radio" name="g" id="female" value="Female" /> <label for="female">Female</label><span id="span"><?php echo" $gErr";echo" $gErrr";?></span></td></tr>

<tr><th><span class="title">Staff:</span></th>
	<td><input type="radio" name="st" id="Principal" value="Principal" /><label for="Principal">Principal</label> 
		<input type="radio" name="st" id="Vice-Principal" value="Vice-Principal" /><label for="Vice-Principal">Vice-Principal</label>
		<input type="radio" name="st" id="HOD" value="HOD" /> <label for="HOD">HOD</label>
		<input type="radio" name="st" id="Teacher" value="Teacher" /><label for="Teacher">Teacher</label>
		<input type="radio" name="st" id="Non-Teacher" value="Non-Teacher" /><label for="Non-Teacher">Non-Teacher</label>
			<span id="span">
				<?php echo" $stErr";echo" $stErrr";?>	
			</span>
	</td>
</tr><br />

</table>
<br><Input type="Submit" name="r" value="Register"><br>
<a href="login.php"> Already sign up ?</a>
</form>
</div>
</body>
</html>