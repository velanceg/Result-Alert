<?php


$user = $_POST['email'];
$pass = $_POST['password'];

$con = mysql_connect("localhost","root","");
mysql_select_db("result",$con);
if(! $con)
{
    die('Connection Failed'.mysql_error());
}
//mysql_select_db("result",$con);

$results = mysql_query("SELECT * FROM student 
                       WHERE Email = '$user';") or die("error query");
//$results->next();

while($row = mysql_fetch_assoc($results))
{

if($row["Email"]==$user && $row["Password"]==$pass)
{
	session_start();

	$_SESSION['login_user']=$row["Name"];
	$_SESSION['login_mail']=$row["Email"];
	$_SESSION['login_no']=$row["Rollno"];
	$_SESSION['login_sem']=$row["Semester"];
	$_SESSION['login_dept']=$row["Dept"];

    //echo $_SESSION['login_user'];
    header('Location: student_section.php');    
}
else
{
    header('Location: Student_login.html');
}

}

?>
