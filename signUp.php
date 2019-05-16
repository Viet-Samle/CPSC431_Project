<?php
	$servername = "localhost";
	$username = "root";
	$password = "root";

	$conn = new mysqli($servername,$username,$password);

	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}

	if(isset($_POST['signup-submit'])){
		$firstname = trim($_POST['newMemberFirstName']);
		$lastname = trim($_POST['newMemberLastName']);
		$email = trim($_POST['newMemberEmail']);
		$password = trim($_POST['newMemberPassword']);
		$confirmPassword = trim($_POST['newMemberConfirmPassword']);

		if(empty($firstname) || empty($lastname) || empty($email) || empty($password)){
			header("Location: ./home.php?error=emptyfields&name");
			exit();
		}else if($password != $confirmPassword){
			header("Location: ./home.php?error=passwordsmismatch");
			exit();
		}else{
			$hashpassword = md5($password);
			$conn->query("USE boyfriendRental");
			$insertNewMember = "INSERT INTO boyfriendRental.MEMBERS (firstname,lastname,email,password) VALUES('$firstname','$lastname','$email','$hashpassword')";

			if($conn->query($insertNewMember) === TRUE){
				session_start();
				$_SESSION['userFirstName'] = $firstname;
				header("Location: ./memberHome.php?submit=signup-success");
				exit();
			}else if(mysqli_errno($conn) == 1062){
				header("Location: ./home.php?error=duplicate-email");
				exit();
			}else{
				echo mysqli_errno($conn);
			}
		}
	}else{
		header("Location: ./home.php");
		exit();
	}
 ?>
