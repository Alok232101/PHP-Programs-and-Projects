<?php
$con=mysqli_connect("localhost", "root", "", "vehicle_manager");
if(!$con)
{
    echo "Connection not established ";
}
$vname=$_POST["vname"];
$vmodel=$_POST["vmodel"];
$vmilage=$_POST["vmilage"];
$sql="insert into vehicleservice VALUE ('$vname','$vmodel','$vmilage')";
if(mysqli_query($con,$sql))
{
    echo "Record Inserted successully";
}
else
{
    echo"Error in inserting record";
}
echo "<br><h3><a hreaf='insert.html'>Operation Menu</a></h3>";
mysqli_close($con);
?>