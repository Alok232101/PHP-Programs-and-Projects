<?php
//include('connectivity.php');
$con=mysqli_connect("localhost","root","","studentdata");
if (!$con)
  {
  echo "Connection not established";
  }
$sql="select * from studentmaster";
$result=mysqli_query($con,$sql); 
echo "<table border='2' bgcolor='yellow'>
<tr>
<th>Student Reg No.</th>
<th>Student Name</th>
<th>Student Prog</th>
</tr>";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['stu_reg'] . "</td>";
  echo "<td>" . $row['stu_name'] . "</td>";
  echo "<td>" . $row['stu_prog'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
//echo "<br><br><h3><a href='main.html'>Operation Menu</a></h3>";
mysqli_close($con);
?>