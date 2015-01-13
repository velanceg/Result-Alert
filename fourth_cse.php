<?php

session_start();

$sem=$_SESSION['login_sem'];
$dept=$_SESSION['login_dept'];

//if($sem!="4" || $dept!="CSE")
//{
  //  header('Location: error_msg.php');
//}
if($sem=="4" && $dept=="CSE")
{
	$con=mysql_connect("localhost","root","");
	if(! $con)
	{
  		die('Connection Failed' . mysql_error());
	}
	mysql_select_db("result",$con);
	//echo "Connection succeed";

	$regno=$_SESSION['login_no'];
	$name=$_SESSION['login_user'];
	$mail=$_SESSION['login_mail'];

	$sql = "INSERT INTO fourth_cse(Regno, Name, Email) 
        	VALUES ('$regno','$name','$mail')";

	if(!mysql_query($sql))
	{
  		die('Error: ' . mysql_error());
	}
	mysql_close($con);

	header('Location: success.php');
}
else
{
	header('Location: error_msg.php');
}

?>