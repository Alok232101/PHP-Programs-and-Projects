<?php
$con=mysqli_connect("localhost", "root", "", "vehicle_manager");
if(!$con)
{
    echo "Connection not established ";
}
$vname=$_POST["vname"];
$vmodel=$_POST["vmodel"];
$vmilage=$_POST["vmilage"];
$sql="select*from vehicle_manager by vehiclename desc";
$result = mysqli_query($con,$sql);
echo "<table border='2' bgcolor='yellow'
<tr> <th>Vehicle Name</th><th>Model No.</th><th>Millage </th></tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<tr>";