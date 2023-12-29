<!DOCTYPE html>
<html>
<head>
    <title>Sum of n Natural Numbers</title>
</head>
<body>
    <h2>Sum of n Natural Numbers</h2>
    <form method="post" action="">
        Enter a value for n: <input type="number" name="n" required><br><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the input value from the form
        $n = intval($_POST["n"]);

        // Calculate the sum of first n natural numbers
        $sum = 0;
        for ($i = 1; $i <= $n; $i++) {
            $sum += $i;
        }

        // Display the result
        echo "<p>Sum of first $n natural numbers is: $sum</p>";
    }
    ?>
</body>
</html>
