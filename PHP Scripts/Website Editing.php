<?php
  include '../PHP Functions/Functions.php';
  LoginCheck();
  EmployeeCheck();
  navigation("My Plan");
  $categories = array("Manage Users", "Account Details", "Messaging", "Website Editing", "Nutrition Plans", "Customers");
  SecondNavigation($categories, "Website Editing");

?>

<?php
  Footer("script");
?>
