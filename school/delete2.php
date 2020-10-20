<html>
<body bgcolor="pink">
<?php

$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('school details') or die(mysql_error());

$del2=$_REQUEST['class_id'];

$query1=mysql_query("SELECT class_id from class where class_id='$del2'");
$result=mysql_fetch_array($query1);

if($result!=0)
{
$del2=$_GET['class_id'];
$query="DELETE from class where class_id='$del2'";
$query1=mysql_query($query) or die(mysql_error());
echo "  DATA   DELETED   SUCCESSFULLY !!!!";


$var=mysql_query("SELECT * FROM class");
echo"<table border size=1>";
echo"<tr><th>CLASS ID</th> <th>ROLL NO</th><th>CLASS NAME</th> </tr>";
 while ($arr=mysql_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td> </tr>";
   }
echo"</table>";
}else{
echo "    INVALID  CLASS_ID    !!!!";
}

?><br><br>
<a href="form.html"><button>GO BACK</button></a><br><br>
</body>
</html>