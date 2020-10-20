<html>
<body bgcolor="pink">
<?php

$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('school details') or die(mysql_error());

$del=$_REQUEST['rollno'];

$query1=mysql_query("SELECT rollno from student where rollno='$del'");
$result=mysql_fetch_array($query1);

if($result!=0)
{
$del=$_GET['rollno'];
$query="DELETE from student where rollno='$del'";
$query1=mysql_query($query) or die(mysql_error());
echo "  DATA   DELETED   SUCCESSFULLY !!!!";

$var=mysql_query("SELECT * FROM student");
echo"<table border size=1>";
echo"<tr><th>ROLLNO</th> <th>NAME</th><th>ADDRESS</th><th>PHONE</th><th>GENDER</th> </tr>";
 while ($arr=mysql_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td> </tr>";
   }
echo"</table>";
}else{
echo "     INVALID  ROLL_NO  !!!!";
}

?>
<br><br>
<a href="form.html"><button>GO BACK</button></a><br><br>
</body>
</html>