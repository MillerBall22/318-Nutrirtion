<?php
  include '../PHP Functions/Functions.php';
  navigation("My Plan");
  FormStart("Login Confirm", "Login Page");
  FormInput("Email", "Email", "Email", "");
  FormInput("Password", "Password", "Password", "");
  FormButton("Login Confirm", "Login");
  FormButton("Sign Up", "Sign Up");
  FormEnd();

?>

<?php
  Footer("script");
?>
