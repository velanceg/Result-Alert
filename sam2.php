<!DOCTYPE html>
<html>
<body>
  <?php  $con=mysql_connect("localhost","root","");
if(! $con)
{
  die('Connection Failed' . mysql_error());
}
mysql_select_db("result",$con);
   $con=mysql_connect("localhost","root","");
if(! $con)
{
  die('Connection Failed' . mysql_error());
}
mysql_select_db("result",$con);
 
//echo "Connection succeed";
$sql = "select * from result_fifthcse;";

$results=mysql_query($sql) or die("error query");

while($row = mysql_fetch_assoc($results))
{
?>
<center>
<h2 align="center">Name:<?php echo $row["Name"]; ?><br>
                   Regno:<?php  echo $row["Regno"]; ?> <br>
                   GPA:<?php echo $row["GPA"]; ?>
</h2>
<table style="width:50%" border="1">
  <caption><h2><b>Exam Results</b></h2></caption>
  <br>
   
  <tr>
    <th>Exams</th>
    <th>Grades</th>
  </tr>
  <tr>
    <td>DCCI</td>
    <td><?php echo $row["DCCI"];?></td>   
  </tr>
  <tr>
    <td>MP</td>
    <td><?php echo $row["MP"];?></td>   
  </tr>
  <tr>
    <td>SSI</td>
    <td><?php echo $row["SSI"]; ?></td>    
  </tr>
  <tr>
    <td>TOC</td>
    <td><?php echo $row["TOC"]; ?></td>    
  </tr>
  <tr>
    <td>OOAD</td>
    <td><?php echo $row["OOAD"]; ?></td>   
  </tr> 
<?php }
  ?>
</table>

</body>
</html>