<?php

	require "dbconfig.php";
	
	$firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
	$reg_num=$_POST['reg'];
	$email=$_POST['email'];
	$tel=$_POST['tnum'];
	$password1=$_POST['pass1'];
	$password2=$_POST['pass2'];


	if ($password1 != $password2) {
		echo "You have re entered an incorrect password";
	}
	else{
		$query1="SELECT * FROM user WHERE id='$reg_num' OR email='$email'";
		$result=mysqli_query($con,$query1);

		if (mysqli_num_rows($result)) {
			echo "User already exist";
		}
		else{
			$query2="INSERT INTO user VALUES('$reg_num','$firstname','$lastname','$email','$tel','$password1')";

			if (mysqli_query($con,$query2)) {
				echo "Record Saved Succesfully";
			}
			else{
				echo "!Error!";
			}
		}

		$con->close();
	}
?>