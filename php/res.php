<!DOCTYPE html>
<html>
<head>
  <title>Generate Student Result</title>
</head>
<body>
  <h1>Enter Student Marks</h1>
  <form  method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="subject1">Subject 1:</label><br>
    <input type="number" id="subject1" name="subject1"><br>
    <label for="subject2">Subject 2:</label><br>
    <input type="number" id="subject2" name="subject2"><br>
    <label for="subject3">Subject 3:</label><br>
    <input type="number" id="subject3" name="subject3"><br><br>
    <input type="submit" value="Submit">
  </form>
  <?php

$name = $_POST['name'];
$subject1 = $_POST['subject1'];
$subject2 = $_POST['subject2'];
$subject3 = $_POST['subject3'];


$total_marks = $subject1 + $subject2 + $subject3;
$percentage = $total_marks / 300 * 100;

if ($percentage > 90) {
  $grade = "A";
} elseif ($percentage > 70) {
  $grade = "B";
} elseif ($percentage > 40) {
  $grade = "C";
} else {
  $grade = "F";
}

echo "<h1>Student Result</h1>";
echo "<ul>";
echo "<li>Name: $name</li>";
echo "<li>Subject 1 Marks: $subject1</li>";
echo "<li>Subject 2 Marks: $subject2</li>";
echo "<li>Subject 3 Marks: $subject3</li>";
echo "<li>Total Marks: $total_marks</li>";
echo "<li>Percentage: $percentage%</li>";
echo "<li>Grade: $grade";
   ?>
</body>
</html>