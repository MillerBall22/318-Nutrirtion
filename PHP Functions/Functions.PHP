<?php
  $servername = "localhost";
  $username = "root";
  $password = "@onevoiceO2TFK";
  $dbname = "318Nutrition";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  session_start();

  function LoginCheck() {
    if ($_SESSION['loggedIn'] === NULL) {
      header('Location: http://localhost/318 Nutrirtion/PHP Scripts/Login.php');
      exit();
    }
  }

  function EmployeeCheck() {
    if ($_SESSION['Employee'] != "1") {
      header('Location: http://localhost/318%20Nutrirtion/PHP%20Scripts/Restricted%20Page.php');
      exit();
    }
  }

  function FormStart($action, $header) {
    echo '<div class="form">';
    echo '<form action="', $action, '.php" method="post">';
    echo '<h1>', $header,'</h1>';
  }

  function FormEnd() {
    echo '</form>';
    echo '</div>';
  }

  function FormInput($label, $type, $name, $value) {
      echo '<label>', $label, ': </label>';
      echo '<input required type="', $type, '" name="', $name, '" value="', $value, '">';
      echo "<br>";
  }

  function FormButton($action, $value) {
    echo '<input type="submit" formaction="', $action, '.php" value = "', $value, '">';
  }

  function navigation($page) {
    $categories = array("My Plan", "Contact", "Programs", "Home");
    if(isset($_SESSION['loggedIn'])) {
      $categories = array("Sign Out", "My Plan", "Contact", "Programs", "Home");
    }
    echo '
      <!Doctype html>
        <html lang="en">
          <head>
            <title>318 Nutrition</title>
            <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="../CSS/style.css">
          </head>

            <body>
            <div class="topnav">
              <div class="top-left">
              <a>318 Nutrition</a>
              </div>
      ';

      echo'<div class="topnav" id = "mylinks">';
      foreach ($categories as $category) {
        if ($category === $page) {
          echo '<a class="active" href="', $category, '.php">', $category, '</a>';
        } else {
          echo '<a href="', $category, '.php">', $category, '</a>';
        }
      }
      echo '</div>';
      echo '</div>';
  }

  function GalleryNavigation($categories, $page) {
    //$categories = array("My Plan", "Contact", "Programs", "Home");

    echo '
            <div class="secondnav">
      ';

      echo'<div class="secondnav" id = "mylinks">';
      foreach ($categories as $category) {
        if ($category === $page) {
          echo '<button class="active" href="', $category, '.php">', $category, '</button>';
        } else {
          echo '<button href="', $category, '.php">', $category, '</button>';
        }
      }
      echo '</div>';
      echo '</div>';
  }

  function Gallery($categories, $page, $information) {
    GalleryNavigation($categories, $page);
    echo '<div class="gallery">';
      echo '<div class="contents">';
        echo '<div id="back-btn" class="back-button"><button>&#10094;</button></div>';
          foreach ($categories as $category) {
            if ($category === $page) {
              echo '<div class="information active"><div><h1>', $category, '</h1></div></div>';
            } else {
              echo '<div class="information hidden"><div><h1>', $category, '</h1></div></div>';
            }
          }
          echo '<div id="forward-btn" class="forward-button"><button>&#10095;</button></div>';
        echo '</div>';
    echo '</div>';
  }

  function ProgramsGallery($Programs, $page, $information) {
      echo '<div class="contents">';
        foreach ($Programs as $program) {
          if ($program === $page) {
            echo '<div class="information active"><div><h1>', $program,'</h1><p>', $information, '</p></div></div>';
          } else {
            echo '<div class="information hidden"><div><h1>', $program, '</h1><p>', $information, '</p></div></div>';
          }
        }
      echo '</div>';
  }

  function ProgramButton($heading, $extra, $class){
    echo '<button class="', $class, ' programButton"><h3>', $heading, '</h3>';
      foreach ($extra as $info) {
        echo '<p>', $info, '</p>';
      }
    echo '</button>';
  }

  function Reference($photo, $refHeading, $refInfo, $direction) {
    echo '<div class="refContainer ', $direction, '">';
      echo '<img src="../Photos/', $photo, '">';
      echo '<div><h1 class="refHeading">', $refHeading, '</h1><p class="refInfo">', $refInfo, '</p></div>';
    echo '</div>';
  }

  function SecondNavigation($categories, $page) {
    //$categories = array("My Plan", "Contact", "Programs", "Home");

    echo '
            <div class="secondnav">
      ';

      echo'<div class="secondnav" id = "mylinks">';
      foreach ($categories as $category) {
        if ($category === $page) {
          echo '<a class="active" href="', $category, '.php">', $category, '</a>';
        } else {
          echo '<a href="', $category, '.php">', $category, '</a>';
        }
      }
      echo '</div>';
      echo '</div>';
  }

  function ChangePageButton($page) {
    echo '<a href="', $page, '.php">', $page, '</a>';
  }

  function Footer($script)
  {
    echo '
      <div class="details">
        <a href=Contact.php>Contact Me!</a>
        <p>Copyright © 318 Nutrition<br></p>
      </div>
    ';
    echo '<script type="text/javascript" src="../javascript/', $script, '.js">';
    echo '</script>';
    echo '</body>';
  }
?>
