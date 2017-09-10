<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$username = $_POST["username"];
		$password = $_POST["password"];
		$emailaddress = $_POST["email"];
	?>
	
	<?php 
		function testInput ($usernameVal , $passwordVal , $emailAddVal) {
			// check for inputs
			if (!isset($usernameVal) or $usernameVal == true) {
				echo "<p>" . "your name is" . htmlspecialchars($usernameVal) . "</p>" . "<br>";
			} else {
				echo "please enter your name" . "<br>";
			}

			if (!isset($passwordVal) or $passwordVal == true) {
				echo "<p>" . "your password is" . htmlspecialchars($passwordVal) . "</p>" ."<br>";
			} else {
				echo  "password not found" . "<br>";
			}

			if (!isset($emailAddVal) or $emailAddVal == true) {
				echo "your email is" . htmlspecialchars($emailAddVal) ."<br>";
			} else {
				echo  "email not found" . "<br>";
			}
		}
		testInput($username , $password , $emailaddress); 
	?>

	<?php 
		// class Person {
		// 	public $fname = "Dave";
		// 	public $mname = "baylon";
		// 	public $Lname = "Withmore";

		// 	public function getInfo() {
		// 		echo "your firstname is " . $this -> $fname . "<br>";
		// 		echo "your middlename is" . $this -> $mname . "<br>";
		// 		echo "your lastname is" . $this -> $Lname;
		// 	}
		// }

		// $DaveFullname = new Person();

		// $DaveFullname -> getInfo();


		function create_table($data, $header=NULL, $caption=NULL) {
			 echo '<table>';
			 if ($caption) {
			 	echo "<caption>$caption</caption>";
			 }
			 if ($header) {
			 	echo "<tr><th>$header</th></tr>";
			 }
			 reset($data);
			 $value = current($data);
			 while ($value) {
				echo "<tr><td>$value</td></tr>\n";
				$value = next($data);
			 }
			 echo '</table>';
		}
		$my_data = ['First piece of data','Second piece of data','And the third'];
		$my_header = 'Data';
		$my_caption = 'Data about something';
		create_table($my_data, $my_header, $my_caption);
	 ?>
</body>
</html>