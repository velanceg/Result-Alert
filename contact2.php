<?php

$sender_mail=$_POST['email'];
$message=$_POST['message'];
$sender_name=$_POST['name'];
$sender_subject=$_POST['subject'];
$admin_mail='velanceg150795@gmail.com';
$admin_name='Admin';
set_include_path('.;C:\xampp\php');

require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'velanceg150795@gmail.com';                 // SMTP username
$mail->Password = 'hihacker3592';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = $sender_mail;
$mail->FromName = $sender_name;
$mail->addAddress($admin_mail, $admin_name);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo($sender_mail, $sender_name);
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Contact Mail';
$mail->Body    = '<b>'.$message.'</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	header('Location: success2.php');
    //echo 'Message has been sent';
}

?>