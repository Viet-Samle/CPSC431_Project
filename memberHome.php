<?php
	require('header.php');
	require('makeDB.php');
?>

 <div class="jumbotron vertical-center" id="home">

 	<h1 class="display-3">Welcome to Boyfriend Rentals</h1>
 	<p><small>We put the date in date night</small></p>
 	<hr class="m-y-2">
  <p class="lead">Welcome Back <?php echo $_SESSION['userFirstName'] ?></p>
 	<p class="lead">Unfortunately, Our available boyfriends have been reserved or deported</p>
  <p class="lead">Professor Robblee, the only thing I've implemented is the application page so please go there</p>
 </div>


 <?php
 	require('footer.php');
 ?>
