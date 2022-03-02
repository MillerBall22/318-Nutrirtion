<?php
  include '../PHP Functions/Functions.php';
  LoginCheck();
  EmployeeCheck();
  navigation("My Plan");
  $categories = array("Manage Users", "Account Details", "Messaging", "Website Editing", "Nutrition Plans", "Customers");
  SecondNavigation($categories, "Manage Users");
  if($result = $conn->query("SELECT * FROM accounts")) {
   // Make sure there are some files in there
   if($conn->query("SELECT * FROM accounts")->num_rows == 0) {
       echo '<p>There are no files in the database</p>';
   }
   else {
       // Print the top of a table
       echo '<table width="100%">
               <tr>
                   <td><b>First Name</b></td>
                   <td><b>Last Name</b></td>
                   <td><b>Employee</b></td>
               </tr>';
       // Print each file
       while($row = $result->fetch_assoc()) {
         $ACC_ID=$row['ACC_ID'];
           echo "
               <tr>
                   <td>{$row['Fname']}</td>
                   <td>{$row['Lname']}</td>";
                   if ($row['Employee']==="1") {
                     echo "<td>Yes</td>";
                   } else {
                     echo "<td>No</td>";
                   }
                   echo "<td><a href='Delete.php?ACC_ID=$ACC_ID'>Delete</a></td>
                   <td><a href='Update.php?ACC_ID=$ACC_ID'>Update</a></td>
               <tr>";
       }
       echo '</table>';
   }
 }
 ChangePageButton("Add User")
?>

<?php
  Footer("script");
?>
