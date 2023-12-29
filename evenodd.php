<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Number Checker</title>
</head>
<body>
    <h2>Even or Odd Number Checker</h2>
    <form method="post">
        Enter a number: <input type="number" name="number">
        <input type="submit" value="Check">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        if ($number % 2 == 0) {
            echo "$number is even.";
        } else {
            echo "$number is odd.";
        }
    }
    ?>
</body>
</html>
