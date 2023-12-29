<!DOCTYPE html>
<html>
<head>
    <title>Star Pattern</title>
</head>
<body>
    <h2>Star Pattern</h2>
    <form method="post">
        Enter the number of rows: <input type="number" name="rows">
        
        <br>
        Enter the number of column: <input type="number" name="column">
        <input type="submit" value="Pattern">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rows = $_POST["rows"];
        $column = $_POST["column"];
        
        for ($i = 0; $i < $rows; $i++) 
        {
            for ($j = 0; $j < $column; $j=($j+2)) 
            {
                if($j>=$i && $j<=(6-$i))
                echo "*";
                else
                echo " ";
            }
            echo "<br>";
        }
    }
    ?>
</body>
</html>