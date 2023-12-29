//create a webpage to read a number from the user check it is even or odd the passing the number to the user defined function in php
<!DOCTYPE html>
<html>
<head>
    <title>Even Odd Number Function</title>
</head>
<body>
    <h2>Even Odd Number</h2>
    <form action="" method="post">
        Enter Number : <input type="number" name="num1"><br>
        <input type="submit" value="Result">
        <input type="reset">
    </form>
    <?php
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];

    function EvenOdd($num1) 
    {
        if($num1%2==0) 
              echo "The Given number is Even ";
        else
              echo "The Given number is Odd ";
    }
    EvenOdd($num1);
}
    ?>
</body>
</html>