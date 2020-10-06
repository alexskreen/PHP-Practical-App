<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    function say_Something($name){
      echo "Hello $name" . "<br>";
    }

// say_Something("Alex");
// say_Something("Kaitlin");
// say_Something("Adam");

    function check_In(){
      say_Something("Alex");
      echo "How is your day going?";
    }

    check_In();

  ?>
</body>
</html>