<?php
$name = $_POST['name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];

$age = date_diff(date_create($dob), date_create('today'))->y;

if ($age < 18) {
  echo "You are not eligible for a driving license.";
} else {
  echo "You are eligible for a driving license.";
}
?>