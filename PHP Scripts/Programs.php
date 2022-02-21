<?php
  include '../PHP Functions/Functions.php';
  navigation("Programs");
  $programs = array("Monthly Nutrition", "Couple Nutrition", "Adolescent Athlete Nutrition", "Team and Corporate");
  ProgramsGallery($programs, "Monthly Nutrition", "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
  $MonthlyExtra = array("Biweekly Check In Option-$130/month", "Weekly Check In Option-$175/month", "Individualized Programming", "Ongoning phone/email/text/accesss");
  $CoupleExtra = array("$230/month", "BiWeekly Check In", "Ongoning phone/email/text/accesss");
  $AdolescentExtra = array("$130/month", "BiWeekly Check In", "Individualized Programming", "Ongoning phone/email/text/accesss");
  $TeamExtra = array("Session specific to your group", "Handout packages available", "Workbook Activities", "*Inquire for price");
?>
  <div class="programsContainer">
  <?php
    ProgramButton("Monthly Nutrition", $MonthlyExtra, "hidden");
    ProgramButton("Couple Nutrition", $CoupleExtra, "");
    ProgramButton("Adolescent Athlete Nutrition", $AdolescentExtra, "");
    ProgramButton("Team and Corporate", $TeamExtra, "");
  ?>
  </div>

<?php
  Footer("Programs");
?>
