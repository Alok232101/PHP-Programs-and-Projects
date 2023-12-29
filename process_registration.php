<html>
  <head>
    <title>Thank You</title>
  </head>
  <body>
    Thank You

    <p>Thank you for registering. Here is the information you submitted:</p>

    <dl>
      <dt>First name</dt><dd><?php echo $_POST["firstName"]?></dd>
      <dt>Last name</dt><dd><?php echo $_POST["lastName"]?></dd>
      <dt>Password</dt><dd><?php echo $_POST["password1"]?></dd>
      <dt>Retyped password</dt><dd><?php echo $_POST["password2"]?></dd>
      <dt>Gender</dt><dd><?php echo $_POST["gender"]?></dd>
      <dt>Favorite widget</dt><dd><?php echo $_POST["favoriteWidget"]?></dd>
      <dt>Do you want to receive our newsletter?</dt><dd><?php echo $_POST["newsletter"]?></dd>
      <dt>Comments</dt><dd><?php echo $_POST["comments"]?></dd>
    </dl>
  </body>
</html>
