<?php
//include('connectivity.php');
$con=mysqli_connect("localhost","root","","vehiclemanager");
if (!$con)
  {
  echo "Connection not established";
  }
$sql="delete from vehiclemaster WHERE vehiclemake='$_POST[vmake]'";
if(mysqli_query($con,$sql))
{
if(mysqli_affected_rows($con))
{
echo "<p>Successfully Deleted <b> ". mysqli_affected_rows($con) . "</b> Record(s).</p>";
}
else
{
echo "No Record Deleted, <b> ". mysqli_affected_rows($con) . "</b> Row(s) Affected.</p>";
}
}
else
{
echo "Error is there";
}
echo "<br><br><h3><a href='main.html'>Operation Menu</a></h3>";
mysqli_close($con);
?>