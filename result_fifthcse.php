<?php
session_start();
//if($_SESSION['admin_user']!="csadmin")
//{
  //header('Location: admin_error.php');
//}
$user=$_SESSION['admin_user'];

if($user=="csadmin")
{
$con=mysql_connect("localhost","root","");
if(! $con)
{
  die('Connection Failed' . mysql_error());
}
mysql_select_db("result",$con);
//echo "Connection succeed";
$sql = "select * from result_fifthcse order by Regno;";

$results=mysql_query($sql) or die("error query");

set_include_path('.;C:\xampp\php');

require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'velanceg150795@gmail.com';                 // SMTP username
$mail->Password = 'hihacker3592';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'velanceg150795@gmail.com';
$mail->FromName = 'Singara Velan';

while($row = mysql_fetch_assoc($results))
{

$id=$row["Email"];
$receiver=$row["Name"];

$mail->addAddress($id, $receiver);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->WordWrap = 70;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);               
$name=$row["Name"];                   // Set email format to HTML
$num=$row["Regno"];
$gpa=$row["GPA"];
$dcci=$row["DCCI"];
$mp=$row["MP"];
$ssi=$row["SSI"];
$ooad=$row["OOAD"];
$toc=$row["TOC"];
$mail->Subject = 'Result Mail';
$mail->Body    = ' 
<html>
<body>
<center>
<h2 align="center">Name:'.$name.'<br> Regno:'.$num.'<br> GPA:'.$gpa.'</h2>
<table style="width:50%" border="1">
  <caption><h2><b>Exam Results</b></h2></caption>
  <br>
   <tr>
    <th>Exams</th>
    <th>Grades</th>
  </tr>
  <tr>
  <td>DCCI</td>
    <td>'.$dcci.'</td></tr>'.'<tr>
    <td>MP</td>
    <td>'.$mp.'</td></tr>'.'<tr>
    <td>SSI</td>
    <td>'.$ssi.'</td></tr>'.'<tr>
    <td>TOC</td>
    <td>'.$toc.'</td></tr>'.' <tr>
    <td>OOAD</td>
    <td>'.$ooad.'</td></tr></table></center></body></html>';
  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  }
  $mail->ClearAddresses(); 
}
header('Location: admin_success.php');
//echo 'Message has been sent';

mysql_close($con);
}
else
{
  header('Location: admin_error.php');
}

?> 
