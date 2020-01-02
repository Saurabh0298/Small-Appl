<?php
	include 'Connect.php';
	
	function sent_code($code,$email)
	{
		require 'class/class.phpmailer.php';
		$mail = new PHPMailer;
		$mail->IsSMTP();								//Sets Mailer to send message using SMTP
		$mail->Host = 'smtp.gmail.com';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
		$mail->Port = '465';								//Sets the default SMTP server port
		$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
		$mail->Username = 'jkhairnar181@gmail.com';					//Sets SMTP username
		$mail->Password = 'Jayesh@@1008';					//Sets SMTP password
		$mail->SMTPSecure = 'ssl';							//Sets connection prefix. Options are "", "ssl" or "tls"
		$mail->From = $_POST['email'];					//Sets the From email address for the message
		
		$mail->AddAddress('jkhairnar181@gmail.com', 'jayesh khairnar');		//Adds a "To" address
		$mail->AddCC($email);	//Adds a "Cc" address
		$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);							//Sets message type to HTML				
		$mail->Subject = "Confirmation Code";				//Sets the Subject of the message
		$mail->Body = "Thank You For Joining Us Your Confirmation Code Is".$code;				//An HTML or plain text message body
		if(!$mail->Send())								//Send an Email. Return true on success or false on error
		{
			echo  "Message could not be sent";
		}
		else
		{ 

			$_SESSION['user_email']=$email;
			$_SESSION['account_create']="Your account is Successfully Created";
			header("Location:confirm.php");
			
			
			//echo "Thank you for contacting us";
		}
		
	}

function confirm_email()
{
GLOBAL $db;

if(isset($_POST['confirm']))
{
 $code=trim($_POST['confirm_code']);
 $user_email=$_SESSION['user_email'];
  if(empty($code))
  {

  	echo "Please Enter Code...";

  }
  else
  {
//$Query='SELECT code FROM signupp WHERE email=$email &&  code=$code';
//$result=mysqli_query($db,$Query);
//$num=mysqli_num_rows($result);
//if($num->rowCount()==1)



 $Email_check_code = $db->query("SELECT code FROM register WHERE email='$user_email' && code='$code'");
  if($Email_check_code->num_rows == 1)
  {
// $Query=$db->prepare('SELECT code FROM signupp WHERE email=$email &&  code=$code');



  // $Query->execute([$user_email,$code]);

  //if($Query->rowCount()==1)
  
  	//echo "suceesss";
  	//$statuss=1;
 $Email_status_code=$db->query("UPDATE register SET status=1  WHERE email='$user_email' && code='$code'");

 if($Email_status_code)
 {
 	$_SESSION['confirmation_success']="Your Acccount Is Successfully Confirm";
 	header("Location:login.php");
 }

else{
	echo "Query not work";
}

  }
  else{
  	echo" invalide";
  }
  }
  

}

}


function user_login()
{		GLOBAL $db;
      $con1=$con2=$username=$passwords="";
    if(isset($_POST['login']))
    {
    $username=$_POST['username'];
    $passwords=$_POST['passwords'];
    
    if(empty($username))
      echo "Enter Username...!";
    else 
    if(empty($passwords))
      echo "Enter Passward...!";
    else
      {
    
        $query = $db->query("SELECT * FROM signup WHERE username = '$username'"); 
        $data=$query->fetch_array();
         $id=$data['id'];
   $username=$data['username'];
        if(password_verify($passwords,$data['password']))
        {      
          if($data['status']==0)
            { 
              //echo "success";
            	   $_SESSION['please_confirm']="Please Confirm Your Email...";
              header("Location:confirm.php");
            }
          else
            {
                //$_SESSION['user_id']=$id;
                	$_SESSION['user_id']=$id;
       		$_SESSION['user_name']=$username;
                header("Location:phome.php");
               // echo "login";
            }
        }
        else echo "Enter valid Data..!";
      }}
  }

  
?>







