<!DOCTYPE html>
<html>
<head>
<title>SMS</title>

<style>
	.main{
		background-color:green;
		width:100%;
		height:620px;
		}
	
	.nav{
		height: 80px;
		width: 100%;
		background-color:white;
		}

	.nav img{
		height: 75px;
		width: 300px;
		}
	
	.name{
       	margin-top:0px;
       	padding:-8px;
		font-size:20px; 
		}

	
	
	.navbar{
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

	.fram
	{
		height: 530px;
		width: 1071px;
		background-color:white;
		float:left;
		margin-top:5px;
		margin-left: 5px;
	}

	.fram img{
		height: 530px;
		width: 1071px;
			}
	.menu
	{
		padding-left: 40px;
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

.dropdown2 .dropbtn2 {
  font-size: 20px;  
  border: none;
  outline: none;
  color: black;
  padding: 10px 100px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown2:hover .dropbtn2 {
  background-color:lightgreen;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 10px 50px;
  text-decoration: none;
  display: block;
  text-align: center;
}

.dropdown-content a:hover {
  background-color: lightgreen;
}

.dropdown1:hover .dropdown-content {
  display: block;
}

.dropdown2:hover .dropdown-content {
  display: block;
}
</style>

</head>
<body>
	<div class="main">
		<div class="nav">
			<img src="images/logo1.png" alt="logo">
		</div>
		<div class="fram">
					
		</div>
		<div class="navbar">
			<img src="images/logo2.png" alt="logo">
			<p align="center"><?php echo " SMS Point";?></p>
			<a href="#">Home</a><br><br><br>
			<a href="gallery.php">Gallery</a><br><br><br>
			<a href="SMS.php">SMS</a><br><br><br>
			<a href="login.php">Logout</a>
		</div>
	</div>
</body>
</html>