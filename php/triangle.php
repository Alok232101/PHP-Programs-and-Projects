<!DOCTYPE html>
<html>
<head>
    <title>Triangle Validation</title>
</head>
<body>
    <h1>Triangle Validation</h1>

    <?php
    $side1 = $side2 = $side3 = "";
    $validationMessage = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $side1 = $_POST["side1"];
        $side2 = $_POST["side2"];
        $side3 = $_POST["side3"];

        // Check if the triangle is valid using the triangle inequality theorem
        if ($side1 + $side2 > $side3 && $side1 + $side3 > $side2 && $side2 + $side3 > $side1) {
            $validationMessage = "The triangle is valid.";
        } else {
            $validationMessage = "The triangle is not valid.";
        }
    }
    ?>

    <form method="post" action="">
        <label for="side1">Side 1: </label>
        <input type="number" name="side1" id="side1" required>
        <br>
        <label for="side2">Side 2: </label>
        <input type="number" name="side2" id="side2" required>
        <br>
        <label for="side3">Side 3: </label>
        <input type="number" name="side3" id="side3" required>
        <br>
        <button type="submit">Check</button>
    </form>

    <?php if (!empty($validationMessage)) : ?>
        <p><?php echo $validationMessage; ?></p>
    <?php endif; ?>
</body>
</html>

