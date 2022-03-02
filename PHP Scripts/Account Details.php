<?php
  include '../PHP Functions/Functions.php';
  LoginCheck();
  if ($_SESSION['Employee'] === "1") {
    $categories = array("Manage Users", "Account Details", "Messaging", "Website Editing", "Nutrition Plans", "Customers");
  } else {
    $categories = array("Account Details", "Messaging", "Calculator", "Journal", "Nutrition Plan");
  }
  navigation("My Plan");
  SecondNavigation($categories, "Account Details");
  FormStart("Account Details", "Change Details");
  FormInput("First Name", "Text", "Fname", $_SESSION['Fname']);
  FormInput("Last Name", "Text", "Lname", $_SESSION['Lname']);
  FormInput("Phone Number", "tel", "Phone", $_SESSION['Phone']);
  FormInput("Email", "Email", "Email", $_SESSION['Email']);
  FormInput("New Password", "Password", "Password", $_SESSION['Password']);
  FormButton("Add User Page", "Save");
  FormEnd();
?>

<?php
  Footer("script");
?>
