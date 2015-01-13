<?php

session_start();

$user = $_POST['username'];
$pass = $_POST['password'];

if($user=="csadmin" && $pass=="cse")
{
	$_SESSION['admin_user']="csadmin";
	header('Location: admin_section.php');

}
else if($user=="itadmin" && $pass=="itadmin")
{
	$_SESSION['admin_user']="ITadmin";
	header('Location: admin_section.php'); 
}
else
	header('Location: login_admin.html');

?>
