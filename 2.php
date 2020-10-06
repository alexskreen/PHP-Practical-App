<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		

<?php

$number1 = 10;
$number2 = 20;

echo "<h1>Number 1 is $number1</h1>";
echo "<h1>Number 2 is $number2</h1>";

echo $number1 + $number2;

$normalArray = [Alex, Skreen];

print_r($normalArray);

$assoc_Array = ["firstName" => "Alex", "lastName" => "Skreen"];
print_r($assoc_Array);
echo $assoc_Array['firstName'];


		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		 
			 */

		


		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>