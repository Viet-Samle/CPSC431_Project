<?php
	require('header.php');
	$servername = "localhost";
	$username = "root";
	$password = "root";

	$conn = new mysqli($servername, $username, $password);

	if($conn->connect_error){
		die("Connection failed: ". $conn->connect_error);
	}

	if(isset($_POST['apply-submit'])) {
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$height = $_POST['height'];
		$gender = $_POST['gender'];
		$message = trim($_POST['message']);

		$conn->query("USE boyfriendRental");
		$insertApplication = "INSERT INTO boyfriendRental.APPLICATIONS (name, email, height, gender, message) VALUES('$name', '$email', '$height', '$gender','$message')";

		if($conn->query($insertApplication) === TRUE){
			// <div class="alert alert-success" role="alert">Thank you for reaching out to us.  We will get back to you soon.</div>
			$conn->close();
			header('Location: home.php?submit=application-success');
			exit;

		} else if(mysqli_errno($conn) == 1062) {
			header("Location: ./home.php?error=duplicate-email");
			exit();
		} else{
			$conn->close();
			echo "ERROR " . $insertApplication . "<br>" . $conn->error;
		}
	} else {
		header("Location: ./application.php");
		exit();
	}


?>


 <?php
	require('footer.php');
	?>
