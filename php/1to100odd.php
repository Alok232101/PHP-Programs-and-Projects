<!DOCTYPE html>
<html>
<head>
    <title>Odd Numbers Finder</title>
</head>
<body>
    <h2>Odd Numbers Finder</h2>
    <form method="post">
        <input type="submit" value="Find Odd Numbers">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Odd numbers between 1 and 100: ";
        
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 2 != 0) {
                echo "$i ";
            }
        }
    }
    ?>
</body>
</html>
