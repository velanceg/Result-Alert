<?php
//header('Location:send_mail.php');
//$receiver=$_POST['email'];
//$sender="velanceg150795@gmail.com";
//$subject="Confirmation mail";
//$message="Your registration successful.Thanks for registration.";
$con=mysql_connect("localhost","root","");
if(! $con)
{
  die('Connection Failed' . mysql_error());
}
mysql_select_db("result",$con);
//echo "Connection succeed";
$sql = "INSERT INTO student(Rollno, Name, Dept, Semester, Email, Password) 
        VALUES ('$_POST[rollno]','$_POST[name]','$_POST[dept]','$_POST[sem]','$_POST[email]','$_POST[password]')";

if(!mysql_query($sql))
{
  die('Error: ' . mysql_error());
}
mysql_close($con);
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

$mail->From = 'velanceg150795@gmail.com';
$mail->FromName = 'Singara Velan';
$mail->addAddress($_POST['email'], $_POST['name']);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Confirmation Mail';
$mail->Body    = '<b>Registration Successful!!!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	header('Location: student_login.html');
    //echo 'Message has been sent';
}

?> 
