<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>
</head>
<body>
    <h2>Even or Odd Checker</h2>
    <form method="post">
        Enter a number: <input type="number" name="number">
        <input type="submit" value="Check">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $result = ($number % 2 == 0) ? "even" : "odd";
        echo "$number is $result.";
    }
    ?>
</body>
</html>
