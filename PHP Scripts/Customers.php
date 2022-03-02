<?php
  include '../PHP Functions/Functions.php';
  LoginCheck();
  EmployeeCheck();
  navigation("My Plan");
  $categories = array("Manage Users", "Account Details", "Messaging", "Website Editing", "Nutrition Plans", "Customers");
  SecondNavigation($categories, "Customers");
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
               </tr>';
       // Print each file
       while($row = $result->fetch_assoc()) {
         $ACC_ID=$row['ACC_ID'];
         if ($row['Employee']==="0") {
           echo "
               <tr>
                   <td>{$row['Fname']}</td>
                   <td>{$row['Lname']}</td>
                   <td><a href='Delete.php?ACC_ID=$ACC_ID'>Delete</a></td>
                   <td><a href='Update Plan.php?ACC_ID=$ACC_ID'>Update Plan</a></td>
                   <td><a href='View Journal.php?ACC_ID=$ACC_ID'>View Journal</a></td>
               <tr>";
          }

       }
       echo '</table>';
   }
 }
 ChangePageButton("Add User")
?>

<?php
  Footer("script");
?>
