<?php
print ("1st");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

 require 'vendor/autoload.php';
print ("2nd");
$mail = new PHPMailer(true);
print ("3rd");
try {
	$mail->SMTPDebug = true;									
	$mail->isSMTP();											
	$mail->Host	 = 'smtp.gmail.com;';					
	$mail->SMTPAuth = true;							
	$mail->Username = 'doniksingh@gmail.com';				
	$mail->Password = 'PaSS@1234';						
	$mail->SMTPSecure = 'ssl';							
	$mail->Port	 = 465;

	$mail->setFrom('baap@tera.com', 'Name');		
	$mail->addAddress('1829099@kiit.ac.in');
	// $mail->addAddress('receiver2@gfg.com', 'Name');
	
	$mail->isHTML(true);								
	$mail->Subject = 'Mail aaya kya?';
	$mail->Body = 'Bta de bhai <b>aaya</b> ';
	$mail->AltBody = 'baap se bkchodi nhi';
	$mail->send();
	echo "Mail has been sent successfully!";
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
