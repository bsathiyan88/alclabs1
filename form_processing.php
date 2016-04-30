<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Form Processing</title>
	</head>
	<body>

		<pre>
		<?php
			print_r($_POST);
		?>
		</pre>
		<br />
		<?php
			// detect form submission
			if (isset($_POST['submit'])) {
				echo "form was submitted<br />";

				// set default values
				if (isset($_POST["firstname"])) {
					$firstname = $_POST["firstname"];
				} else {
					$firstname = "";
				}
				if (isset($_POST["lastname"])) {
                                        $Lastname = $_POST["lastname"];
                                } else {
                                        $Lastname = "";
                                }
				if (isset($_POST["email"])) {
					$email = $_POST["email"];
				} else {
					$email = "";
				}
				
				// set default values using ternary operator
				//   boolean_test ? value_if_true : value_if_false
				$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : "";
				$Lastname = isset($_POST['lastname']) ? $_POST['lastname'] : "";
				$email = isset($_POST['email']) ? $_POST['email'] : "";
				
			} else {
				$firstname = "";
				$Lastname = "";
				$email = "";
			}
		?>

		<?php
			echo "{$firstname}: {$email}";
		?>
		
	</body>
</html>
