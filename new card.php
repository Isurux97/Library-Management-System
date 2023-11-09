<?php

	require "dbconfig2.php";
	
	$firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
	$reg_num=$_POST['regnum'];
	$email=$_POST['email'];

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
	}

	$query3="INSERT INTO user VALUES('$firstname','$lastname','$reg_num','$email')";

        if (mysqli_query($con, $query3)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query3 . "<br>" . mysqli_error($con);
        }
    mysqli_close($con);
    }
    $con->close();
}
?>