<!DOCTYPE html>
<html>
<head>
    <title>Number Swapper</title>
</head>
<body>
    <h2>Number Swapper</h2>
    <form method="post">
        Enter Number 1: <input type="number" name="num1"><br>
        Enter Number 2: <input type="number" name="num2"><br>
        <input type="submit" value="Swap Numbers">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        echo "Before swapping: Number 1 = $num1, Number 2 = $num2<br>";

        // Swapping logic
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;

        echo "After swapping: Number 1 = $num1, Number 2 = $num2";
    }
    ?>
</body>
</html>
