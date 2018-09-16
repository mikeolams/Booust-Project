<?php

/**
 * 
 */
class Request 
{
	public static function process($parem)
	{
		# code...
		date_default_timezone_set("African/Lagos");
		// Open or Create contact.csv if not available
		$file = fopen("RequestForm.csv", "a+");

		// Create csv columns (RUN THIS ONCE)
		// fputcsv($file, $arrayName = array('' => , ); fields)
		fputcsv($file, array('First Name',"Last Name", "Email","State","Movie Title","Date"));

		// Add Contact details to csv file
		fputcsv($file,array($parem['firstName'],$parem["lastName"],$parem["email"],$parem["state"],$parem["movieTitle"],date('Y-m-d h:i:sa')));

		// close file
		fclose($file);

		// Email message to be sent to submitted request
		$message = "Hello" .$parem['name'].',\n\n Thank you for contacting us. \n\n Regards';
		$headers = "Reply-To: Movie Admin <md@flamerentals.com>\r\n";
		$headers .= "Return-Path:Movie Admin <md@flamerentals.com>\r\n";
		$headers .= "From: Movie Admin <md@flamerentals.com>\r\n";

		// send mail
		mail($parem['email'],"Booust Movie request",$message,$headers);

		// access Information from CSV file
		$csv = array_map("str_getcsv", file(RequestForm.csv));
		echo $csv[sizeof($csv)-1][0] . '<br>';
		echo $csv[sizeof($csv)-1][1] . '<br>';
		echo $csv[sizeof($csv)-1][2] . '<br>';
		echo $csv[sizeof($csv)-1][3] . '<br>';


	}
}


$email = $_POST['email'];
$name = $_POST['firstName'];

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // disable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com'; //smtp.mailgun.org;smtp2.example.com;  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'developer4me@gmail.com';                 // SMTP username
    $mail->Password = 'mike@123';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    // $mail->SMTPSecure = 'ssl';
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('MovieAdmin@flamerentals.com', 'Movie Admin');
    $mail->addAddress($email, $name);     // Add a recipient
    $mail->addAddress('MovieAdmin@flamerentals.com');               // Name is optional
    $mail->addReplyTo('md@flamerentals.com', 'Information');
    $mail->addCC('mikeolams@yahoo.com');
    $mail->addBCC('mikeolams@yahoo.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Booust Movie request';
    $mail->Body    = 'Hello <b>'.$name.'</b>,<br><br>Thank you for contacting us. <br><br>We will check your request and revert soon!<br><br>Regards!';
    $mail->AltBody = 'Hello'. $name. 'Thank you for contacting us. Regards!';

    $mail->send();

    // header('location:info.php');
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}




?>
