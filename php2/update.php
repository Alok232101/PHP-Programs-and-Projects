<?php
//include('connectivity.php');
$con=mysqli_connect("localhost","root","","managevehicle");
if (!$con)
  {
  echo "Connection not established";
  }
$vmake=$_POST["vmake"];
$vmodel=$_POST["vmodel"];
$sql="update vehicleservice set vmodel='$vmodel' WHERE vmake='$vmake'";
//$sql="update vehicleservice set vtype=10";
if(mysqli_query($con,$sql))
{
if(mysqli_affected_rows($con))
{
echo "<p>Successfully updated<b> ". mysqli_affected_rows($con) . "</b> record(s).</p>";
}
else
{
echo mysqli_affected_rows($con)." Record(s) updated";
}
}
else
{
echo "Error is there: ";
}
echo "<br><br><h3><a href='main.html'>Operation Menu</a></h3>";
mysqli_close($con);
?>