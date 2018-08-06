

<div class="containerM" align="center">
  <h1>Thank you for reaching out to us!</h1>
  <p>An email has been sent to your email address you supplied.</p>
  <br>
  <a href="contact.php">Send Another Request</a><br><br>
  <a href="home.php">Return to our Site</a>
</div>

<?php

$email = $_POST['your-email'];
$name = $_POST['name'];

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
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
    $mail->Subject = 'Booust Movie General Inquiry';
    $mail->Body    = 'Hello <b>'.$name.'</b>,<br><br>Thank you for contacting us. <br><br>We will check your request and revert soon!<br><br>Regards!';
    $mail->AltBody = 'Hello'. $name. 'Thank you for contacting us. Regards!';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}






?>

