<?php
  include '../PHP Functions/Functions.php';
  LoginCheck();
  EmployeeCheck();
  navigation("My Plan");
  $categories = array("Manage Users", "Account Details", "Messaging", "Website Editing", "Nutrition Plans", "Customers");
  SecondNavigation($categories, "Manage Users");

		// Taking all 5 values from the form data(input)
    $Employee = $_REQUEST['Employee'];
		$Fname = $_REQUEST['Fname'];
		$Lname = $_REQUEST['Lname'];
		$Phone = $_REQUEST['Phone'];
		$Email = $_REQUEST['Email'];
		$Password = $_REQUEST['Password'];

		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO accounts VALUES (Null, '$Employee', '$Fname',
			'$Lname','$Phone','$Email','$Password', Null)";

		if(mysqli_query($conn, $sql)){
			echo "<h1>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h1>";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

		// Close connection
		mysqli_close($conn);
    Footer("");
		?>
