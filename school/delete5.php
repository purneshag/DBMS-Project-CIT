<html>
<body bgcolor="pink">
<?php

$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('school details') or die(mysql_error());

$del2=$_REQUEST['teacher_id'];

$query1=mysql_query("SELECT teacher_id from teacher where teacher_id='$del2'");
$result=mysql_fetch_array($query1);

if($result!=0)
{
$del=$_GET['teacher_id'];
$query="DELETE from teacher where teacher_id='$del2'";
$query1=mysql_query($query) or die(mysql_error());
echo "  DATA   DELETED   SUCCESSFULLY  !!!!";


$var=mysql_query("SELECT * FROM teacher");
echo"<table border size=1>";
echo"<tr><th>TEACHER ID</th><th>ADDRESS</th> <th>NAME</th><th>PHONE</th> <th>SUBJECT CODE</th></tr>";
 while ($arr=mysql_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td> </tr>";
   }
echo"</table>";
}else{
echo "  INVALID  TEACHER_ID  !!!!";
}

?><br><br>
<a href="form.html"><button>GO BACK</button></a><br><br>
</body>
</html>