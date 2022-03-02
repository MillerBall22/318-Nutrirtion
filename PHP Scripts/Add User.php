<?php
  include '../PHP Functions/Functions.php';
  LoginCheck();
  EmployeeCheck();
  navigation("My Plan");
  $categories = array("Manage Users", "Account Details", "Messaging", "Website Editing", "Nutrition Plans", "Customers");
  SecondNavigation($categories, "Manage Users");
  FormStart("Add User Page", "Add User");
  FormInput("Is Employee", "number", "Employee", "");
  FormInput("First Name", "Text", "Fname", "");
  FormInput("Last Name", "Text", "Lname", "");
  FormInput("Phone Number", "tel", "Phone", "");
  FormInput("Email", "Email", "Email", "");
  FormInput("Password", "Password", "Password", "");
  FormButton("Add User Page", "Save");
  FormEnd();
?>

<?php
  Footer("script");
?>
