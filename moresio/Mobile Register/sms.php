<?php
 include "e_verify.php"; ?>
<?php if(!isset($_SESSION['name'])):
?>
<?php header("location:login.php");  ?>
<?php endif;?>

<!DOCTYPE html>
<html>
<head>
<?php
$to=$toErr=$name=$nameErr=$at=$atErr=$sub=$subErr=$date=$dateErr=$ot=$otErr=$it=$itErr="";
if(isset($_POST['submit']))
{
  $to=$_POST['to'];
  $name=$_POST['name'];
  $at=$_POST['at'];
  $sub=$_POST['sub'];
  $date=$_POST['date'];
  $ot=$_POST['ot'];
  $it=$_POST['it'];

if(empty($to))
 {
    $toErr="Reciver Name is Required";
 }
 if(empty($name))
 {
    $nameErr="Name is Required";
 }

  if(empty($at))
 {
  $atErr = "Please insert Authority";
 } 

  if(empty($sub))
 {
  $subErr = "Subject is required";
 } 

 if(empty($date))
 {
  $dateErr="Insert the date";
 }

 if(empty($ot))
 {
  $otErr="Insert Out-Time";
 }

 if(empty($it))
 {
  $itErr="Insert In-Time";
 }

 if((!empty($to)) && (!empty($name)) && (!empty($at)) && (!empty($sub)) && (!empty($date)) && (!empty($ot)) && (!empty($it)))
 {
    if(isset($at))
    {
    $query= $db->query("INSERT INTO mobileregister (rname,name,authority,subject,date,outtime,intime) VALUES ('$to','$name','$at','$sub','$date','$ot','$it')");

  if($query)
  {
      $query1=$db->query("SELECT email FROM register WHERE name='$to'");
      $data=$query1->fetch_array();
      $email=$data['email'];



   require 'class/class.phpmailer.php';
    $mail = new PHPMailer;
    $mail->IsSMTP();                //Sets Mailer to send message using SMTP
    $mail->Host = 'smtp.gmail.com';   //Sets the SMTP hosts of your Email hosting, this for Godaddy
    $mail->Port = '465';                //Sets the default SMTP server port
    $mail->SMTPAuth = true;             //Sets SMTP authentication. Utilizes the Username and Password variables
    $mail->Username = 'moresaurabh490@gmail.com';         //Sets SMTP username
    $mail->Password = '$@Ur@b#0298';          //Sets SMTP password
    $mail->SMTPSecure = 'ssl';              //Sets connection prefix. Options are "", "ssl" or "tls"
    $mail->From =$email;          //Sets the From email address for the message
    
    $mail->AddAddress('moresaurabh490@gmail.com', 'Admin');    //Adds a "To" address
    $mail->AddCC($email); //Adds a "Cc" address
    $mail->WordWrap = 50;             //Sets word wrapping on the body of the message to a given number of characters
    $mail->IsHTML(true);              //Sets message type to HTML       
    $mail->Subject = "You have message about Mobile Register";        //Sets the Subject of the message
    $mail->Body = "Name: ".$name."<br><br>"."Authority: ".$at."<br><br>Subject: ".$sub."<br><br>Date: ".$date."<br><br>Out-Time: ".$ot."<br><br>In-Time: ".$it;
    if(!$mail->Send())                //Send an Email. Return true on success or false on error
    {
      $msg_error="Sorry Message Could Not Be Sent";
    }
    else
    { 

      
      $msg="Sent Your Message";
      echo $msg;
    }
  }
  else
    echo"record not inserted";
  }
 }
}
?>

<title>     
</title>
<style>
    .main{
        background-color:green;
        width:100%;
        height:620px;
        }
    
   
    .fram
    {
      font-family: Constantia;
      font-size: 20px;
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
      margin-left:950px;
      margin-top: 50px;
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
    .fram input
    {
      width: 100%;
      margin-bottom: 5px;
    }

    .fram input[type="text"] , input[type="date"] , input[type="time"] , input[type="textarea"] ,select
    {
      font-family: Constantia;
      font-color:black;
      border: none;
      border-bottom: 1px solid black;
      background: transparent;
      outline: none;
      height: 40px;
      width:600px;
      margin-left: 10px;
      font-size: 16px;
    }

    .fram a:hover
    {
      color:lightgreen;
    }
    #span
    {
      color: red;
    }

</style>
</head>
<body>
    <div class="main">
      
      <?php include'title.php'; ?>

        <div class="fram">
          <div class="p">
            <form action="" method="POST">

              <tr><th>To:</th><td><Input type="text" name="to" placeholder='Name of Recipient'><span id="span"><?php echo"$toErr";?></span></td></tr><br><br>
             
               <tr><th>Applicant Name:</th><td><Input type="text" name="name" placeholder='Enter full Name'><span id="span"><?php echo"$nameErr";?></span></td></tr><br><br>

              <tr><th>Applicant Designation:<select name="at"> </th>
                <option value="">Authority</option>
                <option value="Principal">Principal</option>
                <option value="Vice-Principal">Vice-Principal</option>
                <option value="HOD">HOD</option>
                <option value="Teacher">Teacher</option>
                <option value="Non-Teacher">Non-Teacher</option><span id="span"><?php echo"$atErr"?></span></select>
              </tr><br><br>

              <tr><th>Subject in Detail:</th><td><input type=textarea name="sub"></td></tr><br><br>

              <tr><th>Date:</th><td><Input type="date" name="date"> <span id="span"><?php echo"$dateErr";?></span></td></tr><br>

              <tr><th>Out-Time:</th><td><Input type="time" name="ot"> <span id="span"><?php echo"$otErr";?></span></td></tr><br>

              <tr><th>In-Time:</th><td><Input type="time" name="it"> <span id="span"><?php echo"$itErr";?></span></td></tr><br>

              <input type="submit" name="submit" value="Send">
          
            </form>
          </div>
      </div>

        <?php include '1.php'; ?>

    </div>

    
</body>
</html>