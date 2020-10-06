<?php

if(isset($_POST['submit'])) {
  $minimum = 5;
  $maximum = 10;
  $name = ["Alexander", "Kaitlin", "Adam", "Chuck", "Tina"];
  $username = $_POST['username'];
  $password= $_POST['password'];
  
  if (strlen($username) < $minimum) {
    echo "User name is too short. It must be longer than 5 characters";
  } else {
    if(!in_array($username, $name)){
      echo "Sorry, you cannot login with the information provided";
    } else {
      echo "<h1>Welcome</h1>" . "<br>";
      echo "Username: " . $username . "<br>";
      echo "Password: " . $password;

    }
  }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
      <input type="text" name="username" placeholder="Enter Username">
      <input type="password" name="password" placeholder="Enter Password">
      <br>
      <input type="submit" name="submit">
    </form>
</body>
</html>