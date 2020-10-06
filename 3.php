<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

if(1===10){
	echo "no it doesn't";
} elseif(1>10){
	echo "no it isn't";
} else {
	echo "1 is less than 10";
}

for($number=0; $number<=10; $number++){
	echo $number . "<br>";
}
$name="Alexs";
switch($name){
	case "Kaitlin":
	echo "nope";
	break;

	case "Chuck":
	echo "nope";
	break;

	case "Tina":
	echo "nope";
	break;

	case "Adam":
	echo "nope";
	break;

	case "Alex":
	echo "DING DING DING!";
	break;

	case "alex":
	echo "nope";
	break;

	default:
	echo "we didn't find anything that matches";
	


}

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP

	Step 2: Make a forloop  that displays 10 numbers

	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>