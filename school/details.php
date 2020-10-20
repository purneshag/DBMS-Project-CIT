<body bgcolor="silver">
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('school details') or die(mysql_error());
$var=mysql_query("SELECT * FROM student");
echo"<table border size=1>";
echo"<tr><th>ROLL NO</th> <th>NAME</th><th>ADDRESS</th><th>PHONE</th><th>GENDER</th> </tr>";
 while ($arr=mysql_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td> </tr>";
   }
?>
<h1><font color="black">STUDENT TABLE:</font></h1>

<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('school details') or die(mysql_error());
$var=mysql_query("SELECT * FROM class");
echo"<table border size=1>";
echo"<tr><th>CLASS ID</th> <th>ROLL NO</th><th>CLASS NAME</th> </tr>";
 while ($arr=mysql_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td> </tr>";
   }
?><br><br>
<h1><font color="black">CLASS TABLE:</font></h1>


<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('school details') or die(mysql_error());
$var=mysql_query("SELECT * FROM subject");
echo"<table border size=1>";
echo"<tr><th>SUBJECT CODE</th> <th>TITLE</th> <th>CLASS ID</th></tr>";
 while ($arr=mysql_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td> </tr>";
   }
?><br><br>
<h1><font color="black">SUBJECT TABLE:</font></h1>



<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('school details') or die(mysql_error());
$var=mysql_query("SELECT * FROM test_marks");
echo"<table border size=1>";
echo"<tr><th>ROLL NO</th> <th>SUBJECT CODE</th><th>TEST1</th><th>TEST2</th><th>TEST3</th> <th>FINAL MARKS</th></tr>";
 while ($arr=mysql_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td><td>$arr[5]</td> </tr>";
   }
?><br><br>
<h1><font color="black">TEST_MARKS TABLE:</font></h1>



<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('school details') or die(mysql_error());
$var=mysql_query("SELECT * FROM teacher");
echo"<table border size=1>";
echo"<tr><th>TEACHER ID</th><th>ADDRESS</th> <th>NAME</th><th>PHONE</th><th>SUBJECT CODE</th> <th>SALARY</th></tr>";
 while ($arr=mysql_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td><td>$arr[5]</td> </tr>";
   }
?><br><br>
<h1><font color="black">TEACHER TABLE:</font></h1>
</body>


