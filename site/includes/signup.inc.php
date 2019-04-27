<?php 

if (isset($_POST['submit-signup']))  {
		
	require 'dbh.inc.php';
		
	$username = $_POST['username'];
	$email = $_POST['mail'];
	$password = $_POST['pwd'];
	$passwordRepeat = $_POST['pwd-repeat'];
	
	if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
		
		header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
		exit();
	
	
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[A-Za-z0-9]*$/", $username)) {
		
		header("Location: ../signup.php?error=invalidmailuid&uid=&mail=");
		exit();
		
	
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		
			header("Location: ../signup.php?error=invalidmail&mail=&uid=".$username);
			exit();
	}
	else if (!preg_match("/^[A-Za-z0-9]*$/", $username)) {
		
			header("Location: ../signup.php?error=invaliduid&uid=&mail=".$email);
			exit();
	}
	else if ($password !== $passwordRepeat) {
		
		header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
		exit();
		
	} 
	else {
		
		$sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../signup.php?error=sqlerror&uid=&mail=");
			exit();
			
		} else {
			
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			
			if ($resultCheck > 0) {
				header("Location: ../signup.php?error=usertaken&uid=&mail=".$email);
				exit();
				
				
			}
			else {
				$sql = "INSERT INTO users(uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt,$sql)) {
					
					header("Location: ../signup.php?error=sqlerror&uid=&mail=");
					exit();
					
					
				} else {
					
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
						
					mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
					mysqli_stmt_execute($stmt);
				
					session_start();
					
					$sql = "SELECT * FROM users WHERE uidUsers='$username'";
					$result = mysqli_query($conn,$sql);
					if ($row = mysqli_fetch_assoc($result)) {
						$_SESSION['userId'] = $row['idUsers'];
						$_SESSION['userUid'] = $row['uidUsers'];
					
					
					}
					
					
					$sql = "SELECT * FROM users WHERE uidUsers='$username'";
					$result = mysqli_query($conn, $sql);
					
					if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							$userid = $row['idUsers'];
							$sql = "INSERT INTO profileimg (userid, status) VALUES ('$userid', 1)";
							mysqli_query($conn, $sql);
							header("Location: ../index.php?signup=success");
							exit();
						}
					} else {
						header("Location: ../index.php?error=sqlerror");
						exit();
						
					}
					
					
					
				}
				
				
				
				
			}
			
		}
	
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	
	
} else {
	header("Location: ../signup.php");
	exit();
			
}

