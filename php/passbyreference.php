<!DOCTYPE html>
<html>
<head>
    <title>Exponent Number</title>
</head>
<body>
    <h2>Factorial of a Number</h2>
    <form action="" method="post">
        Enter Number : <input type="number" name="num1"><br>
        <input type="submit" value="Result">
        <input type="reset">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $num1 = $_POST["num1"];

        function byreference(&$num1) 
        {
            $num1 = $num1 + 1;
            echo "The Value of variable in function " . $num1;
        }

        byreference($num1);
        echo "the change after send data by reference = " . $num1 . "</b>";
    }
    ?>
</body>
</html>
