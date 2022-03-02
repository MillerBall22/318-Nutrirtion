<?php
include '../PHP Functions/Functions.php';
LoginCheck();
EmployeeCheck();
navigation("My Plan");
$categories = array("Manage Users", "Account Details", "Messaging", "Website Editing", "Nutrition Plans", "Customers");
SecondNavigation($categories, "Manage Users");

if (isset($_REQUEST['submit'])) {
$ACC_ID = $_GET['ACC_ID'];
$Employee = $_GET['Employee'];
$Fname = $_GET['Fname'];
$Lname = $_GET['Lname'];
$Phone = $_GET['Phone'];
$Email = $_GET['Email'];
$Password = $_GET['Password'];

// sql to delete a record
$sql = "UPDATE accounts SET Employee='$Employee', Fname='$Fname', Lname='$Lname', Phone='$Phone', Email='$Email', Password='$Password' WHERE ACC_ID=$ACC_ID";

if ($conn->query($sql) === TRUE) {
   header("Location: Manage Users.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
}
FormStart("Account Details", "Change Details");
FormInput("Employee", "number", "Employee", "");
FormInput("First Name", "Text", "Fname", "");
FormInput("Last Name", "Text", "Lname", "");
FormInput("Phone Number", "tel", "Phone", "");
FormInput("Email", "Email", "Email", "");
FormInput("New Password", "Password", "Password", "");
FormButton("Add User Page", "Save");
FormEnd();
 ?>
