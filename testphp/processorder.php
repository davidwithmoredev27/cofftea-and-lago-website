<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		p {
			font-style: bold;
			color:red;
		}
	</style>
</head>
<body>
	<?php print "<p style=\"color:red;\">"."order has processed" . "</p>" ; ?>
	<?php
		$tiresQuantity = $_POST["tireqty"];
		$oilQuantity = $_POST["oilqty"];
		$sparkQuantity  = $_POST["sparkqty"];
	 ?>
	 <?php 
	 	function Quantity ($tiresqty , $oilqty , $sparkqty) {
	 		print "\n\t" ." <p>". "Tire Quantity " . htmlspecialchars($tiresqty) . "</p>" ."\n";
			print "\t"."<p>"."Oil Quantity " . htmlspecialchars($oilqty) . "</p>" ."\n";
			print "\t". "<p>"."spark Quantity " . htmlspecialchars($sparkqty) . "</p>" ."\n";

			if(is_string($tiresqty)) {
				echo "tires datatype is string" . "<br>";
			} else {
				echo "tires datatype is not a string" . "<br>";
	 		}
		}
	 	Quantity($tiresQuantity , $oilQuantity , $sparkQuantity);

	 	$numone = 21;

	 	$floatone = (float)$numone;
	 	print $numone;
	 	define('numtwo', 1313);
	 	print numtwo;
	 	print "<pre>\n";
	 	print print_r($GLOBALS);
	 	print print_r($ENV);
	 	print "</pre>";

	 	$out = `dir c:`;
		print '<pre>'.$out.'</pre>';

		$num = 39;
		echo gettype($num) . "<br>";
		settype($num, 'float');
		echo gettype($num);
	 ?>
	 <?php 
	 	class Person {};
	 	$personOne = new Person();

	 	if ($personOne instanceof Person) {
	 		echo "PersonOne is instanciate from Person" . "<br>";
	 	} else {
	 		echo "PersonOne is not istanciate from Person" . "<br>";
	 	}
	 ?>

	 <?php
		for ($distance = 50; $distance <= 250; $distance += 50) 
		 echo "<p>" . $distance  . "</p><br>";

	?>
</body>
</html>