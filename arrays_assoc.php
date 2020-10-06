<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

  $number = [10,20,49];

  // echo $number[2] . "<br>";

  print_r($number);
  echo "<br>";
  
  $names_assoc = ["first_name" => 'Alex', "last_name" => 'Skreen'];

  print_r($names_assoc);
  echo "<br>";

  echo $names_assoc['first_name'] . " " . $names_assoc['last_name'];

  ?>
</body>
</html>