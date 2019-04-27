<?php 
session_start();
require 'dbh.inc.php';
$id = $_SESSION['userId'];

if (isset($_POST['submit'])) {
	$file = $_FILES['file'];
	
	$fileName = $file['name'];
	$fileTmpName = $file['tmp_name'];
	$fileSize = $file['size'];
	$fileError = $file['error'];
	$fileType = $file['type'];
	
	
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	
	$allowed = array('jpg','jpeg','png');
	
	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 1000000) {
				$fileNameNew = "profile".$id.".jpg";
				$fileDestination = '../uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				$sql = "UPDATE profileimg SET status=0 WHERE userid='$id';";
				$result = mysqli_query($conn, $sql);
				
				header("Location: ../index.php?upload=success");
				
				
			} else {
				
				echo "File is too big.";
				
			}
			
			
		} else {
			echo "Error";
			
		}
		
	} else {
		echo "You cannot upload files of this type!";
		
	}
	
	
}
