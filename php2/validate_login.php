<?php
// Grab User submitted information
$username= $_POST["username"];
$userpassword1 = $_POST["userpassword"];
// Connect to the database
include('connectivity.php');
//Fetching user record from database
$result=mysqli_query($con,"select username, userpassword from users 
where username='$username'");
//checking if record selected
if($result === FALSE) 
{ 
die('no record fetched'.mysql_error());
}
$row =mysqli_fetch_array($result);
//echo "$userpassword1<br>$row[userpassword]";
if(password_verify($userpassword1,$row[userpassword]) )
{
sleep(1);
header("Location:main.html");               //redirect to given page
}
else
{
sleep(1);
header("Location:error.php");               //redirect to given page
exit();
}
mysqli_close($con);
?>