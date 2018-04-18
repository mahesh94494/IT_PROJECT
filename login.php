<?php
include("connect.php");
session_start();
$ID=$_POST['username'];
$password=$_POST['password'];
$db=mysqli_connect('localhost','root','tiger','2015cse071') or die("error connecting to database".mysqli_error($db));

$query="select name,password from login where name='$ID' and password='$password'";
$result=mysqli_query($db,$query) or die("error querying database");
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
if($row['password']==$password)
{
header('location:vote.html');
}
else
{
echo "incorrect username or password";
}
}
?>

/aaaaaefsegsdgdhaaaaaaaaaaaa/

