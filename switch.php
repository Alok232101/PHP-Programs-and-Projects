<!DOCTYPE html>
<html>
<head>
    <title>Switch Case Example</title>
</head>
<body>
    <h1>Switch Case Example</h1>

    <?php
    $userInput = ""; // Initialize the user input variable

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the user input from the form
        $userInput = $_POST["user_input"];

        // Process the user input using a switch case
        $message = "";
        switch ($userInput) {
            case "hello":
                $message = "Hello there!";
                break;
            case "goodbye":
                $message = "Goodbye, have a nice day!";
                break;
            default:
                $message = "I'm not sure how to respond to that.";
        }
    }
    ?>

    <form method="post" action="">
        <label for="user_input">Enter a command: </label>
        <input type="text" name="user_input" id="user_input" required>
        <button type="submit">Submit</button>
    </form>

    <?php if (!empty($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
</body>
</html>
