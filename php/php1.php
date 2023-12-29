<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLACEMENT PORTAL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
<img src="lpu image.png" align="center">
<h3>Calculate Student Placement Ranking</h3>
<fieldset>
    <form method="post" >
    
        <label for="pepAttendance">PEP Attendance (%)</label>
         <br>
         <br>
        <input type="number" name="pepAttendance" required><br>
         <br>
         <br>
        <label for="amcatScore">AMCAT Score (%)</label>
         <br>
         <br>
        <input type="number" name="amcatScore" required><br>
         <br>
         <br>
        <label for="hitbulseyeLevel">HitBullseye Level</label>
         <br>
        <select name="hitbulseyeLevel" required>
            <option value="">Select One...</option>
            <option value="NULL">NULL</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br>
         <br>
         <br>
        <button class="color-button" >Calculate Ranking</button>
        <button class="colored-button">Clear</button>
    </form>
    </fieldset>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $pepAttendance = floatval($_POST["pepAttendance"]);
        $amcatScore = floatval($_POST["amcatScore"]);
        $hitbulseyeLevel = intval($_POST["hitbulseyeLevel"]);
        
        if ($hitbulseyeLevel >= 4 && $hitbulseyeLevel <= 5 && $pepAttendance >= 90 && $amcatScore > 80) 
        {
            echo "<p>Rank: In Dean's List Category</p>";
        } elseif ($pepAttendance >= 60 && $pepAttendance <= 80) 
        {
            echo "<p>Rank: S1 Category</p>";
        } elseif ($pepAttendance < 60) 
        {
            echo "<p>Rank: S2 Category</p>";
        } else 
        {
            echo "<p>Rank: Not Eligible</p>";
        }
    }
    ?>
    
</body>
</html>
