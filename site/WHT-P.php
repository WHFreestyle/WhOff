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
			#navbar {
				background-color: black;
				
				position: fixed;
				width: 100%;
				top: 0px;
				
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
		</style>
		
	</head>
	<body>
		<div id="rB">
			<br /><br /><br />
			<a href="WHT-P.php" id="bottomIW"><h5 class="poorA" >Languages</h5></a>
			<hr />
			<a href="WHF-L.php" id="bottomIW"><h5 class="poorA" >More About the Projects</h5></a>
			<hr />
			<a href="index.php" id="bottomIW"><h5 class="poorA" >Home</h5></a>
			
			 
		
		
		</div>
		
		<div id="navbar">
			<a href="https://www.youtube.com/channel/UCJFYCeXTIc8VeRnFQbSPpUw" target="_blank" >Channel</a>
			<button id="buttonL" onclick="rB()"><img class="downA" src="https://cdn4.iconfinder.com/data/icons/basic-ui-elements/700/01_arrow_down-512.png"></button>	
			
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
		
			
			
		</script>
		</br></br></br>
		<div class="midC">
			<h1 id="titleMidM">Languages</h1>
			<ul id="mainL">
				<li>Python (interpreted, high-level, general-purpose programming language)</li>
				<li>C# (a general-purpose, multi-paradigm programming language encompassing strong typing, lexically scoped, imperative, declarative, functional, generic, object-oriented (class-based), and component-oriented programming disciplines)</li>
				<li>HTML (Visual WebSite)</li>
				<li>CSS (Styling)</li>
				<li>JavaScript (Functionality of the website)</li>
				
			</ul>
			<h2 id="titleMidM">Python</h2>
			<ul id="mainL">
				<li>Learning for 2 months.</li>
				<li>Using library's easy.</li>
				<li>2 projects finished.</li>
				
				
			</ul>
			<h2 id="titleMidM">C#</h2>
			<ul id="mainL">
				<li>Learning for 2.5 years.</li>
				
				<li>8 projects finished (mostly games)</li>
				
				
				
			</ul>
			<h2 id="titleMidM">Web Languages</h2>
			<ul id="mainL">
				<li>Learning for 1 month.</li>
				<li>Using basic concepts and JS.</li>
				<li>This is my first full project! It has more then 1000 lines of code!</li>
				
				
			</ul>
		</div>
		
		
		
		<div class="socialM">
			<h2>MY SOCIALS</h2>
			<div class="midT">
				<a href="https://www.youtube.com/channel/UCJFYCeXTIc8VeRnFQbSPpUw" target="_blank" ><img class="socialY" src="https://s3.amazonaws.com/peoplepng/wp-content/uploads/2018/06/27144333/youtube-png-transparent-1024x768.png"></a>
			</div>
		</div>
		
		<div class="bottomM">
			<h6 class="bottomT"><a href="index.php" id="bottomID">Home</a></h6>
			
			
			
			<h6 class="bottomT"><a href="WHF-L.php" id="bottomID"> More Abot the Projects</a> </h6>
			
			
			
			<h6 class="bottomT"><a href="WHT-P.php" id="bottomID">  Languages</a></h6>
			
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