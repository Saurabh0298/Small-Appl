

<?php
$mail_msg=$mailto=$mail_msg=$mail_msg_error="";

if(isset($_POST['submit']))
    {

    $mailto = $_POST['mailto'];
    $mailsub=$_POST['mailsub'];
    $mail_msg= $_POST['mail_msg'];

    if (empty($_POST["mail_msg"])) 
    {
   $mail_msg= "Please Enter Message";
  } else {
    $mail_msg = $_POST["msg"];
  }
    

        if(empty($mailto))
            $em="Email is required";
        else
        if(!filter_var($mailto, FILTER_VALIDATE_EMAIL))
            echo"Enter valid Email"; 
        
            else{
            
            
            require 'class/class.phpmailer.php';
        $mail = new PHPMailer;
        $mail->IsSMTP();                                //Sets Mailer to send message using SMTP
        $mail->Host = 'smtp.gmail.com';     //Sets the SMTP hosts of your Email hosting, this for Godaddy
        $mail->Port = '465';                                //Sets the default SMTP server port
        $mail->SMTPAuth = true;                         //Sets SMTP authentication. Utilizes the Username and Password variables
        $mail->Username = 'saurabhmore230@gmail.com';                 //Sets SMTP username
        $mail->Password = 'Saurabh0298';                 //Sets SMTP password
        $mail->SMTPSecure = 'ssl';                          //Sets connection prefix. Options are "", "ssl" or "tls"
        $mail->From = $_POST["mailto"];                  //Sets the From email address for the message
        
        $mail->AddAddress('saurabhmore230@gmail.com', 'saurabh more');     //Adds a "To" address
        $mail->AddCC($mailto);   //Adds a "Cc" address
        $mail->WordWrap = 50;                           //Sets word wrapping on the body of the message to a given number of characters
        $mail->IsHTML(true);                            //Sets message type to HTML             
        $mail->Subject = $mailsub;                //Sets the Subject of the message
        $mail->Body = $mail_msg ;                //An HTML or plain text message body
        if(!$mail->Send())                              //Send an Email. Return true on success or false on error
        {
            $mail_msg_error="Sorry Message Could Not Be Sent";
        }
        else
        { 

            
            $mail_msg="Sent Your Message";
            
            //header("Location:login.php");
            
            
            //echo "Thank you for contacting us";
        }
}}
?>






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
    
    
    .fram
    {
        height: 530px;
        width: 1071px;
        background-color:white;
        float:left;
        margin-top:5px;
        margin-left: 5px;
        font-family: Constantia;
        font-style: bold;
    }

    .fram s
    {
            
            margin-top: 10px;
            margin-left: 10px;

    }

    .menu
    {
        padding-left: 40px;
    }

    
        .fram input
        {
            width: 100%;
            margin-bottom: 20px;
        }

        .fram input[type="text"]
        {
            border: none;
            border-bottom: 1px solid black;
            background: transparent;
            outline: none;
            height: 30px;
            width: 300px;
            color: black;
            font-size: 16px;
            margin-left: 5px;
        }

        .fram textarea
        {
            line-height: 50px;
            width: 500px;
            font-family: Constantia;
            font-size: 16px;
        }

        .fram input[type="submit"]
        {
            border: none;
            height: 30px;
            width: 120px;
            margin-left: 500px;
            margin-top: 30px;
            background: #fb2525;
            color: black;
            font-size:20px;
            border-radius:10px;
        }
        .fram input[type="submit"]:hover
        {
            cursor: pointer;
            background: red;
            color: #000;
        }
</style>

</head>
<body>
    <div class="main">
        <?php include'title.php'; ?>
        <div class="fram">
            <form method="POST" action="">
                TO:<input type="text" name="mailto"><br><br>
                Subject:<input type="text" name="mailsub"><br><br>
                
                Message:<input type="text" name="mail_msg"><br><br>
                
            </form>
            <input type="Submit" name="submit" value="Send Email">              
        </div>
        <?php include'2.php';?>
    </div>
</body>
</html>