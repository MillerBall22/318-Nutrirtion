<?php
  include '../PHP Functions/Functions.php';
  $email = $_POST["Email"];
  $password = $_POST["Password"];
  $sqllogin = "SELECT * FROM accounts WHERE Email='$email' AND Password = '$password'";
  $result = mysqli_query($conn, $sqllogin);

  if ($conn->query($sqllogin)->num_rows == 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['Email'] === $email && $row['Password'] === $password) {
      // cstart session
      $_SESSION['Fname'] = $row['Fname'];
      $_SESSION['Lname'] = $row['Lname'];
      $_SESSION['Email'] = $row['Email'];
      $_SESSION['Password'] = $row['Password'];
      $_SESSION['ACC_ID'] = $row['ACC_ID'];
      $_SESSION['Phone'] = $row['Phone'];
      $_SESSION['NutritionPlan'] = $row['NutritionPlan'];
      $_SESSION['Employee'] = $row['Employee'];
      $_SESSION['loggedIn'] = TRUE;
    }
  } else {
    header('Location: http://localhost/318%20Nutrirtion/PHP%20Scripts/Login.php');
    exit();
  }

  if ($_SESSION['Employee'] === "1") {
    header('Location: http://localhost/318 Nutrirtion/PHP Scripts/Customers.php');
    exit();
  } else {
    header('location: http://localhost/318 Nutrirtion/PHP Scripts/Nutrirtion Plan.php');
  }
?>
