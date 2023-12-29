<?php
//include('connectivity.php');
$con=mysqli_connect("localhost","root","","managevehicle");
if (!$con)
  {
  echo "Connection not established";
  }
$sql="select * from vehicleservice order by vmake desc";
//$sql="select * from vehicleservice";
$result=mysqli_query($con,$sql); 
echo "<table border='2' bgcolor='yellow'>
<tr>
<th>Vehicle Make</th>
<th>Vehicle Model</th>
<th>Vehicle Milage</th>
</tr>";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['vmake'] . "</td>";
  echo "<td>" . $row['vmodel'] . "</td>";
  echo "<td>" . $row['vtype'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
echo "<br><br><h3><a href='main.html'>Operation Menu</a></h3>";
mysqli_close($con);
?>