<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
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
    <div class="navbar">
          <img src="images/logo2.png" alt="logo">
      <p align="center"><?php if(isset( $_SESSION['name']))?> <?php echo 'Welcome  '.$_SESSION['name'].'....!'; ?></p>

          <a href="admin.php">Home</a><br><br>
        
          <div class="dropdown1">
            <button class="dropbtn1">Account 
                <i class="fa fa-caret-down"></i>
              </button>
        
              <div class="dropdown-content">
                <a href="principal.php">Principal</a>
                <a href="vice.php">Vice-Principal</a>
                <a href="hod.php">HOD</a>
                <a href="teacher.php">Teacher</a>
                <a href="non-teacher.php">Non-Teacher</a>
              </div>    
        <br>
          </div>

          <a href="record.php">Record</a><br><br><br>

      <a href="gallery.php">Gallery</a><br><br><br>     

          <br><br><a href="logout.php">Logout</a> 
      
      </div>
</body>
</html>