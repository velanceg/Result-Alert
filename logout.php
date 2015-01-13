<?php

$_SESSION['login_user']="";
$_SESSION['login_mail']="";
$_SESSION['login_no']="";
$_SESSION['login_sem']="";
$_SESSION['login_dept']="";

session_destroy();

header('Location: student_login.html');

?>