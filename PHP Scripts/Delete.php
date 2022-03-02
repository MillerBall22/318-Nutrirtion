<?php
include '../PHP Functions/Functions.php';
LoginCheck();
EmployeeCheck();
$ACC_ID = $_GET['ACC_ID'];

// sql to delete a record
$sql = "DELETE FROM accounts WHERE ACC_ID=$ACC_ID";

if ($conn->query($sql) === TRUE) {
   header("Location: Manage Users.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
 ?>
