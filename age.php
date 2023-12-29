<!DOCTYPE html>
<html>
<head>
  <title>Driving License Registration</title>
</head>
<body>

  <h1>Driving License Registration</h1>
  <form action="register.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="dob">Date of Birth:</label><br>
    <input type="date" id="dob" name="dob"><br>
    <label for="gender">Gender:</label><br>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>
    <input type="submit" value="Register">
  </form>
  <?php
$name = $POST['name'];
$dob = $POST['dob'];
$gender = $POST['gender'];

$age = date_diff(date_create($dob), date_create('today'))->y;

if ($age < 18) {
  echo "You are not eligible for a driving license.";
} else {
  echo "You are eligible for a driving license.";
}
?>
 </body>
</html>
