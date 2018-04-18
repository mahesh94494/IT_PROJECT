<?php

$db_host="localhost";
$db_user="root";
$db_password="tiger";
$db_name="2015cse071";
$name=$_POST['Name'];
$pd=$_POST['password'];
$sec=$_POST['section'];

$dbc=mysqli_connect($db_host,$db_user,$db_password,$db_name) or die("Error connecting to database");

$query="select * from login where name='$name' and password='$pd' and section='$sec'";
$result=mysqli_query($dbc,$query) or die("Error querying database");
$row=mysqli_fetch_array($result);
if($row['password']==$pd)
{
if($row['vote']==1)
{
echo "Already voted<br />";
echo "<a href='login.php'>Logout";
}
else 
{
header('location:voting2.html');
}
}

?>
