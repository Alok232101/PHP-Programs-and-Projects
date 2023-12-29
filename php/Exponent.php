<!DOCTYPE html>
<html>
<head>
    <title>Exponent Number</title>
</head>
<body>
    <h2>Exponential of a Number</h2>
    <form action="" method="post">
        Enter Base Number : <input type="number" name="num1"><br>
        Enter Exponent Number : <input type="number" name="num2"><br>
        <input type="submit" value="Result">
        <input type="reset">
    </form>
    <?php
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    function Exponential($num1, $num2) 
    {
        $p = 1;
        while ($num2 > 0) 
        {
            $p = $num1 * $p;
            $num2--;
        }
        return $p;
    }

    echo "<b>$num1 to the power of $num2 is: " . Exponential($num1, $num2) . "</b>";
}
    ?>
</body>
</html>