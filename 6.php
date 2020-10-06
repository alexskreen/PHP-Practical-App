
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

	<?php  

/*  Step1: Make a form that submits one value to POST super global


 */

	
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form action="form_process.php" method="post">
      <input type="text" name="height" placeholder="Enter Height">
      <input type="text" name="weight" placeholder="Enter Weight">
      <br>
      <input type="submit" name="submit">
    </form>
</body>
</html>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>