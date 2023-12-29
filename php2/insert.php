<?php
$con=mysqli_connect("localhost","root","","managevehicle");
if (!$con)
  {
  echo "Connection not established";
  }
$vmake=$_POST["vmake"];
$vmodel=$_POST["vmodel"];
$vmilage=$_POST["vmilage"];
$sql="insert into vehicleservice VALUES ('$vmake', '$vmodel','$vmilage')";
if (mysqli_query($con, $sql)) 
{ 
    echo "Record inserted successfully";
} 
else
{
    echo "Recod not inserted";
}
echo "<br><br><h3><a href='main.html'>Operation Menu</a></h3>";
mysqli_close($con);
?>