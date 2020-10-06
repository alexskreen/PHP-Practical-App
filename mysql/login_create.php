<?php

if(isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');
  if($connection) {
    echo "we are connected";
  } else {
    die("Database connection failed");
  }

  $query = "INSERT INTO users(username,password) ";
  $query .= "VALUES ('$username', '$password')";

  $result = mysqli_query($connection, $query);
    if(!result) {
      die('Query Failed' . mysqli_error());
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
  <div class="container">

    <div class="col-sm-6">
      <form action="login_create.php" method="post">
      <div class="form-group">
      <label for="username">Username</label>
      <input type="text" name="username" class="form-control">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control">
      <button class="btn btn-primary"type="submit" name="submit" value="submit">Submit</button>
      </div>
      </form>
    </div>

  </div>
</body>
</html>