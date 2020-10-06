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