<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="style.css" type="text/css" rel="stylesheet">
  </div>
</head>

<header>
  <div class="container">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href=
                              <?php
                                if(!isset($_SESSION['userFirstName'])){
                                  echo "home.php";
                                }else if(isset($_SESSION['userFirstName'])){
                                  echo "memberHome.php";
                                }
                              ?>>Home
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="application.php">Applications
       </a>
     </li>
     <li class="nav-item">
        <a class="nav-link" href="logout.php">
                                            <?php
                                              if(isset($_SESSION['userFirstName'])){
                                                echo "Logout";
                                              }
                                            ?>
       </a>
     </li>
</header>
