<html>
<body bgcolor="pink">
<?php

$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('school details') or die(mysql_error());

$del=$_REQUEST['rollno'];


$query1=mysql_query("SELECT rollno from test_marks where rollno='$del'");
$result=mysql_fetch_array($query1);

if($result!=0)
{
$del=$_GET['rollno'];
$query="DELETE from test_marks where rollno='$del'";
$query1=mysql_query($query) or die(mysql_error());
echo "DELETED   SUCCESSFULLY  !!!!";

$var=mysql_query("SELECT * FROM test_marks");
echo"<table border size=1>";
echo"<tr><th>ROLL NO</th> <th>SUBJECT CODE</th><th>TEST1</th><th>TEST2</th><th>TEST3</th><th>FINAL MARKS</th> </tr>";
 while ($arr=mysql_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td><td>$arr[5]</td> </tr>";
   }
echo"</table>";
}else{
echo "INVALID ROLL_NO  !!!!";
}

?><br><br>
<a href="form.html"><button>GO BACK</button></a><br><br>
</body>
</html>