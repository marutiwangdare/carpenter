 
<?php

if($_POST)

{
//Change your configurations here.
//---------------------------------
$priority="2";// 1-Normal,2-Priority,3-Marketing
$method="POST";

require_once('class.phpmailer.php');
$message = '<table border="1" width="100%"><tr><td colspan="2">Enquiry sent through visitor</td></tr>';
		
		$message .= "<tr><td>Name</td><td>".$_POST["txtname"]."</td></tr>";
		$message .= "<tr><td>Email</td><td>".$_POST["txtEmail"]."</td></tr>";
		$message .= "<tr><td>Contact Number (Mobile)</td><td>".$_POST['phone']."</td></tr>";
		$message .= "<tr><td>Contact Number(phone)</td><td>".$_POST['phone1']."</td></tr>";
		$message .= "<tr><td>Comment</td><td>".$_POST["comment"]."</td></tr>";
		
		
$message = $message ."</table>"	;
$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch

//$mail->IsSMTP(); // telling the class to use SMTP

try {
 
  $mail->Host       = "webmail.gltechnocraft.com"; // SMTP server
  $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->Host       = "webmail.gltechnocraft.com"; // sets the SMTP server
  $mail->Port       = 587; //465,587;     
  $mail->Username   = "rahul.malewar@gltechnocraft.com"; // SMTP account username
  $mail->Password   = "Learnwell@123";        // SMTP account password
  $mail->SMTPSecure = "ssl";
  $mail->AddAddress('rahul.malewar@gltechnocraft.com', 'info');
  
  $mail->SetFrom('rahul.malewar@gltechnocraft.com', 'Website Enquiry');

  $mail->Subject = 'Request sent through Micronet';
  $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  $mail->MsgHTML($message);
  
 
  
 $mail->Send();
header('location:after_contact.html');
  //$result = "<span style='font-size:16px'>Your message has been received, We will get back to you shortly.</span>";
// mobile send code  

  	
} catch (phpmailerException $e) {
  $result= $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  $result=$e->getMessage(); //Boring error messages from anything else!
}

}
?>
