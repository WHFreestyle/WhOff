<?php 
	session_start();
	require 'includes/dbh.inc.php';
?>


<!DOCTYPE html>
<html>
	<head>
	
		<meta charset="UTG-8">
		<title>OfficialWHF</title>
		<meta name="author" content="Vedran Ivanković">
		<meta name="keywords" content="personal,webpage,tutorial,how,to,become,a,programmer,entertainment">
		<meta name="description" content="This is my personal webpage, this is where i learn and progressively get better at html and other web languages">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		
		<style>
			body
			{
			  overflow-x:hidden;
			}
			button:focus {outline:0;}
			html {
				scroll-behavior: smooth;
			}
			html, body {
				margin: 0;
				width: 100%;
			}
			
		
			.mainIntro {
				
				background-image: url("img/codeWebsite.png");
				background-size: cover;
				height: 100vh;
			}
			
			#titleM{
				position: absolute;
				left: 15%;
				top: calc(40% - 20px);
				color: white;
				z-index: 1;
				font-family: 'Raleway', sans-serif;
				font-size: 40px;
			}
			#titleU{
				position: absolute;
				left: 15%;
				top: calc(40% - 20px);
				color: white;
				z-index: 1;
				margin-top: 75px;
				font-family: 'Raleway', sans-serif;
			}
			.readMore {	
				
				font-size: 20px;
				position: absolute;
				padding: 0;
				border: none;
				background: none;
				top: 90%;
				left: calc(50% - 50px);
				font-family: 'Raleway', sans-serif;
				color: white;
				transition: 0.3s;
				border-radius: 40px;
				padding: 0 10px 0 10px;
			
			}
			.readMore:hover {
				cursor: pointer;
				background-color: rgba(255, 255, 255, 0.4);
				padding: 0 10px 0 10px;
				transition: 0.3s;
				border-radius: 40px;
			}
			.desc {
				overflow:hidden;
				font-size: 15px;
				background-color: rgb(30,30,30);
				padding-bottom: 80px;
				
			}
			#titleDesc {
				padding-top: 60px;
				padding-left: 100px;
				color: white;
				font-family: 'Raleway', sans-serif;
				
				
			}
			#descMain {
				padding-right: 100px;
				color: white;
				font-family: 'Raleway', sans-serif;
				font-size: 20px;
				padding-left: 100px;
				
				
			}
			.descSub {
				padding-top: 100px;
				
				
			
			}
			#descSubQ {
				
				float: left;
				display: inline;
				color: white;
				font-family: 'Raleway', sans-serif;
				
				padding-left: 100px;
				
			}
			#descSubW {
			
				float: left;
				display: inline;
				color: white;
				font-family: 'Raleway', sans-serif;
				padding-left: 100px;
				
			}
			#descSubE {
			
				float: left;
				display: inline;
				color: white;
				font-family: 'Raleway', sans-serif;
				padding-left: 100px;
				
			}
			#navbar {
				background-color: black;
				
				position: fixed;
				width: 100%;
				top: -150px;
				
			    font-family: 'Raleway', sans-serif;
				padding: 15px;
				font-size: 20px;
				z-index: 4; 
				transition: top 0.3s;
			}
			#navbar a {
				text-decoration: none;
				color: white;
				transition: 1s;
				
			}
			#navbar a:hover {
				background-color: rgb(255, 255 , 255, 0.6);
				color: rgb(30, 30, 30);
				transition: 0.3s;
				padding: 0 15px;
				font-size: 24px;
			}
			.midC {
				font-size: 17px;
				
				font-family: 'Raleway', sans-serif;
				
			
			}
			table {
				width: 100%;
				
			
			}
			#tableA {
				padding-left: 10%;
				padding-right: 10%;
				font-size: 17px;
				position: middle;
				font-family: 'Raleway', sans-serif;
				
				

				
			}
			#tableA, tr, th {
				margin-top: 30px;
				padding-bottom: 30px;
				padding-top: 30px;
				
			}
			
			#titleMidM {
				padding-left: 100px;
				
			}
			#mainL {
				padding-top: 20px;
				padding-left: 120px;
				padding-bottom: 50px;
				font-size: 20px;
			}
			hr {
				color: grey;
			}
			.bottomM {
				background-color: rgb(10,10,10);
				color: white;
				font-family: 'Raleway', sans-serif;
				
				padding-top: 10px;
				padding-bottom: 10px;
				
			
			}
			thead {
				background-color: rgb(240,240,240);
				
			}
			#buttonL {
				position: relative;
				right: 30px;
				float:right;
				padding: 0;
				border: none;
				background: none;
				
			}
			button:hover {
				cursor: pointer;
			
			}
			
			.downA {
				
				height: 20px;
				
				
			
			}
			.downB {
				position: relative;
				margin-right: 10px;
				height: 25px;
				float:right;
				right: 30px;
			
			}
			#rB {
				position:fixed;
				right: -150px;
				width: 150px;
				height: 100%;
				background-color: white;
				transition: 0.3s
			
			}
			.poorA {
				text-align: center;
				font-family: 'Raleway', sans-serif;
				
				
			}
			.socialM {
				background-color: rgb(30,30,30);
				padding: 100px 0 100px 0; 
				text-align: center;
				font-family: 'Raleway', sans-serif;
				color: white;	
				
			}
			.socialY {
				background: none;
				
				
				height: 50px;
			
			}
			.socialY a {
				text-decoration: none;
				
				transition: 0.3s;
				
			}
			.bottomM {
				text-align: center;
			
			}
			.bottomT {
				position: relative;
				
				display: inline;
				font-size: 13px;
				padding: 0 30px 0 30px;
				text-decoration: none;
			}
			.bottomS {
				
			}	
			.midT {
				display: block;
				margin-left: auto;
			    margin-right: auto;
				
			}
			#bottomID {
				text-decoration: none;
				color: white;
			}
			#bottomID:hover {
				color: rgb(30,30,30);
				transition: 0.3s;
			
			}
			#bottomIW {
				text-align: middle;
				text-decoration: none;
				color: black;
				font-family: 'Raleway', sans-serif;
			}
			#bottomIW:hover {
				color: rgb(230,230,230);
				transition: 0.3s;
				
			}
			.mainSubmit {
					border: none;
					
					background: rgb(240,240,240);
					text-align: center;
					font-family: 'Raleway', sans-serif;
					font-size: 20px;
					
				
			}
			.mainSubmitImage {
					border: none;
					
					background: rgb(240,240,240);
					text-align: center;
					font-family: 'Raleway', sans-serif;
					font-size: 20px;
					color: black;
					
				
			}
			.inactiveLink {
				pointer-events: none;
				cursor: default;
			}
		</style>
	</head>
	<body>
		<div id="rB">
			
			<?php
				if (isset($_SESSION['userUid'])) {
			
			
				echo '<br /><br /><br />
			<a href="WHT-P.php" id="bottomIW"><h5 class="poorA" >Languages</h5></a>
			<hr />
			<a href="WHF-L.php" id="bottomIW"><h5 class="poorA" >More About the Projects</h5></a>
			<hr />
			<a href="index.php" id="bottomIW"><h5 class="poorA" >Home</h5></a>';
				}
				else {
					echo '<br /><br /><br />
					<a href="signup.php?mail=&uid=" id="bottomIW"><h5 class="poorA" >Signup for more info.</h5></a>';
					
				}
				
			
			?>
		
		
		</div>
	
		
		<div id="navbar">
			<a href="https://www.youtube.com/channel/UCJFYCeXTIc8VeRnFQbSPpUw" target="_blank" >Channel</a>
			<button id="buttonL" onclick="rB()"><img class="downA" src="https://cdn4.iconfinder.com/data/icons/basic-ui-elements/700/01_arrow_down-512.png"></button>	
			<?php 
			
			if (!isset($_SESSION['userUid'])) {
			echo '<a href="signup.php?mail=&uid=" style="float: right; margin-right: 40px;">SignUp</a>
			<a href="login.php" style="float: right; margin-right: 20px;">LogIn</a>';
			} else if(isset($_SESSION['userUid'])) {
				$idBefore = $_SESSION['userUid'];
				$sql = "SELECT * FROM users WHERE uidUsers='$idBefore'";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)){
						$id = $row['idUsers'];
						$sqlImg = "SELECT * FROM profileimg WHERE userid ='$id'"; 
						$resultImg = mysqli_query($conn, $sqlImg);
						while ($rowImg = mysqli_fetch_assoc($resultImg)) {
							if ($rowImg['status'] == 0) {
								echo "<img src='uploads/profile".$id.".jpg'".mt_rand()." class='downB'>";
								
							} else {
								
								echo "<img src='uploads/profiledefault.jpg'  class='downB'>";
							}
							
							
						}
					}
				}
				
				echo '<a href="" style="float: right; margin-right: 40px;" class="inactiveLink">'.$_SESSION['userUid'].'</a>';
				
			}
				
			
			?>
			
		</div>
		
		
		
		<script type="text/javascript">
			var outR = 0;
			function rB() {
				if (Boolean(outR) === false) {
					document.getElementById("rB").style.right = "0px";
					outR = 1;
				} else  {
					document.getElementById("rB").style.right = "-150px";
					outR = 0;
				}
			
			}
		
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				document.getElementById("navbar").style.top = "0";
			  } else {
				document.getElementById("navbar").style.top = "-50px";
			  }
			}
			
		</script>
		
		
		<div class="mainIntro">
			<h1 id="titleM">WHFreestyle</h1>
			<h2 id="titleU">Upcoming Programmer and Entertainer</h2>
			<button onclick="window.scrollTo(0, 1000)" class="readMore"> 
										<h5>READ MORE</h5>
										
		</div>
		<div class="desc">
			<div id="titleDesc">
				<h1>MY PROGRAMMING</h1>
			</div>
			<div id="descMain">
				<p>I started programming about 2.5 years ago and i learned
				5 languages in that time. Of course i don't know them very well
				but I'm improving every single day with practicing. I hope i will
				learn a lot more languages and do a lot more projects like this one.
				I made this website with only one month of learning HTML, CSS, JavaScript and PHP.</p>
			</div>
			<div class="descSub">
				<div id="descSubQ">
					<h1>
						Software Development
					</h1>
					<ul>
						<li>Java/C# Automation.</li>
						<li>Unity 2 years of experience.</li>
						<li>Python Beginner level programming.</li>
					</ul>
				</div>
				<div id="descSubW">
					<h1>
						Game Development
					</h1>
					<ul>
						<li>Multi Device Connection.</li>
						<li>C# 2.5 Years of programming.</li>
						<li>Experience with Global and fixed Variables.</li>
					</ul>
				</div>
				<div id="descSubE">
					<h1>
						Other
					</h1>
					<ul>
						<li>Web/Site Control.</li>
						<li>WebSite creation.</li>
						<li>Python simple AI recognition and Programming</li>
					</ul>
				</div>
			</div>
			
		</div>
		<div class="midC">
			<h2 id="titleMidM">My Projects</h2>
			<table id="tableA">
				<thead>
					<tr>
						<th>Title</th>
						<th>Description</th>
						<th>Language</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>GameMaking</th>
						<th>Simple Score Based Game</th>
						<th>C#</th>
					</tr>
					<tr>
						<th>AutoLogLike</th>
						<th>Program that automatically logs into your account and likes pictures.</th>
						<th>Python</th>
					</tr>
					<tr>
						<th>This Website</th>
						<th>Using some of the basic concepts for website building.</th>
						<th>HTML,CSS,JS</th>
					</tr>
					<?php
			
	
			
			if (isset($_SESSION['userUid'])) {
			
			
				echo '<tr>
						<th>This Websites Login System</th>
						<th>Using some of the basic concepts for PHP.</th>
						<th>PHP</th>
					</tr>';
				
				
			} 
			?>
					
				</tbody>
			</table>
			<hr />
			<h2 id="titleMidM">My Future Projects of 2019</h2>
			<ul id="mainL">
				<li>Connecting Devices over WiFi.</li>
				<li>Machine Learning</li>
				<li>Image/Video processing</li>
				<li>AI</li>
				<li>Online Data Containers</li>
				
				<?php
				if (isset($_SESSION['userUid'])) {
			
			
				echo '<li>LogIn and SignUp system.(This)</li>
				<li>Face Recognition</li>
				<li>Hacking</li>
				<li>My Personal Website(this)</li>
				<li>Working with 3D objects and Chips (this is for far future)</li>';
				
				
			} 
			?>
			</ul>
		</div>
		<div class="socialM">
			<h2>MY SOCIALS</h2>
			<div class="midT">
				<a href="https://www.youtube.com/channel/UCJFYCeXTIc8VeRnFQbSPpUw" target="_blank" ><img class="socialY" src="https://s3.amazonaws.com/peoplepng/wp-content/uploads/2018/06/27144333/youtube-png-transparent-1024x768.png"></a>
			</div>
			<?php
			
	
			
			if (isset($_SESSION['userUid'])) {
			
			
				echo '<form action="includes/logout.inc.php" method="post">
				<button class="mainSubmit" type="submit" name="logout-submit" >Logout</button>
				</form>';
				echo '<br>';
				echo '<form action="includes/upload.php" method="POST" enctype="multipart/form-data">
				<input class="mainSubmitImage" type="file" name="file"> <br>
				<br>
				<button class="mainSubmit" type="submit" name="submit">UPLOAD PROFILE IMAGE</button>
				</form>';
				
			} 
			?>
			
			
		</div>
		
		<div class="bottomM">
		<?php
				if (isset($_SESSION['userUid'])) {
			
			
				echo '<h6 class="bottomT"><a href="index.php" id="bottomID">Home</a></h6>
			
			
			
			<h6 class="bottomT"><a href="WHF-L.php" id="bottomID"> More Abot the Projects</a> </h6>
			
			
			
			<h6 class="bottomT"><a href="WHT-P.php" id="bottomID">  Languages</a></h6>';
				} else {
					echo '<h6 class="bottomT"><a href="signup.php?mail=&uid=" id="bottomID">Sigup for more info.</a></h6>';
					
				}
				
			
			?>
			
			
		</div>
		
		<script>
			var w = screen.width;
			
			if (w < 1040) {
				document.getElementById('bottomIW').style.text-align = "none";
				
				
			} else {
				document.getElementById('bottomIW').style.text-align = "middle";
				
			}
		
		</script>
	
	</body>
</html>