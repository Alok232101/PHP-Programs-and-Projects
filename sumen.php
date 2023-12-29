<!DOCTYPE html>
<html>
<head>
    <title>Sum of Even Natural Numbers</title>
</head>
<body>
    <h2>Sum of Even Natural Numbers</h2>
    <form method="post">
        Enter a number: <input type="number" name="number">
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $sum = 0;
        
        for ($i = 2; $i <= $number; $i += 2) {
            $sum += $i;
        }
        
        echo "The sum of even natural numbers up to $number is: $sum";
    }
    ?>
</body>
</html>
