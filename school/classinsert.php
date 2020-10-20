<html>
<body bgcolor="orange">
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('school details') or die(mysql_error());
$class=$_REQUEST['class_id'];
$rl=$_REQUEST['rollno'];
$cn=$_REQUEST['class_name'];
$query="insert into class values('$class','$rl','$cn')";
$result=mysql_query($query) or die(mysql_error());
$var=mysql_query("SELECT * FROM class");
echo"<table border size=1>";
echo"<tr><th>CLASS ID</th> <th>ROLL NO</th><th>CLASS NAME</th> </tr>";
 while ($arr=mysql_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td> </tr>";
   }
?>
<a href="form.html"><button>GO BACK</button></a><br><br>
</body>
</html>
