<?php
  include '../PHP Functions/Functions.php';
  LoginCheck();
  if ($_SESSION['Employee'] === "1") {
    $categories = array("Manage Users", "Account Details", "Messaging", "Website Editing", "Nutrition Plans", "Customers");
  } else {
    $categories = array("Account Details", "Messaging", "Calculator", "Journal", "Nutrition Plan");
  }
  navigation("My Plan");
  SecondNavigation($categories, "Messaging");

?>

<?php
  Footer("script");
?>
