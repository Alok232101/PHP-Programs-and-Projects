<!DOCTYPE html>
<html>
<head>
    <title>Star Pattern</title>
</head>
<body>
    <h2>Star Pattern</h2>
    <form method="post">
        Enter the number of rows: <input type="number" name="rows">
        <input type="submit" value="Generate Pattern">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rows = $_POST["rows"];
        
        for ($i = 1; $i <= $rows; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    }
    ?>
</body>
</html>
