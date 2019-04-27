<?php 
	session_start();

?>

<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>The HTML5 Herald</title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="css/styles.css?v=1.0">
	<style>
		.mainStringTitle {
			text-align: center;
			font-family: 'Raleway', sans-serif;
			positon: middle;
			margin-top: 10px;
			
		}
		.mainString {
			text-align: center;
			font-family: 'Raleway', sans-serif;
			positon: middle;
			margin-top: 10px;
			font-size: 20px;
		}
		.mainSubmit {
			border: none;
			
			background: rgb(240,240,240);
			text-align: center;
			font-family: 'Raleway', sans-serif;
			font-size: 20px;
		
		}
		#inputMain {
			text-align: center;
			
		}
		#submitMain {
			text-align: center;
			margin-top: 20px;
			
			
		
		}
	</style>
</head>

<body>

	<H1 class="mainStringTitle">SIGN UP</H1>
	<?php
		if(isset($_GET['error'])) {
			if ($_GET['error'] == "emptyfields") {
				echo '<h5 class="mainString">You did not fill in all forms.</h5>';
				
			} else if ($_GET['error'] == "usertaken") {
				echo '<h5 class="mainString">Username is already taken.</h5>';
				
			}
			 else if ($_GET['error'] == "passwordcheck") {
				echo '<h5 class="mainString">Passwords do not match.</h5>';
				
			}
			else if ($_GET['error'] == "invalidmailuid") {
				echo '<h5 class="mainString">Invalid email and username.</h5>';
				
			}
			else if ($_GET['error'] == "invalidmail") {
				echo '<h5 class="mainString">Invalid email.</h5>';
				
			}
			else if ($_GET['error'] == "invaliduid") {
				echo '<h5 class="mainString">Invalid username.</h5>';
				
			}
			
			
		} 
	
	?>
	<form action="includes/signup.inc.php" method="post">
	<div id="inputMain">
		<input class="mainString" type="text" name="username" placeholder="Username" value="<?php echo $_GET['uid']; ?>"><br>
		<input class="mainString" type="text" name="mail" placeholder="Email" value="<?php echo $_GET['mail']; ?>"><br>
		<input class="mainString" type="password" name="pwd" placeholder="Password"><br>
		<input class="mainString" type="password" name="pwd-repeat" placeholder="Repeat password"><br>
	</div>
	<div id="submitMain">
		<button type="submit" name="submit-signup" class="mainSubmit">Signup</button>
	</div>
	
	</form>
	
	
	
</body>
</html>