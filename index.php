<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="css/style.css" />
	<script src="js/javascript.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<title>forgot ur title m8</title>
</head>

<body>
	<?php
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
// define variables and set to empty values
	$nameErr = $emailErr = $securityErr = "";
	$name = $email = $security = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["uName"])) {
			$nameErr = "Name is required";
		} else {
			$name = test_input($_POST["uName"]);
    // check if name only contains letters
			if (!preg_match("/^[a-zA-Z]*$/",$name)) {
				$nameErr = "Only letters allowed (no whitespace)"; 
			}
		}
		if (empty($_POST["uEmail"])) {
			$emailErr = "Email is required";
		} else {
			$email = test_input($_POST["uEmail"]);
    // check if e-mail address is well-formed
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Invalid email format"; 
			}
		}
		if (empty($_POST["security"])) {
			$securityErr = "Security question is required";
		} else {
			$security = strtoupper(test_input($_POST["security"]));
	// checking if question was answered correctly
			if($security != "EARTH") {
				$securityErr = "Please answer the security question correctly";
			}
		}
	}
	?>
	<div id="container">
		<div id="mySidenav" class="sidenav">
			<button class="closebtn" onclick="navBar()">&times;</button>
			<button onclick=fadeClick('#newsletterContainer') class='planetButton'>Newsletter</button>
			<button onclick=fadeClick('#mercuryContainer') class='planetButton'>Mercury</button>
			<button onclick=fadeClick('#venusContainer') class='planetButton'>Venus</button>
			<button onclick=fadeClick('#earthContainer') class='planetButton'>Earth</button>
			<button onclick=fadeClick('#marsContainer') class='planetButton'>Mars</button>
			<button onclick=fadeClick('#jupiterContainer') class='planetButton'>Jupiter</button>
			<button onclick=fadeClick('#saturnContainer') class='planetButton'>Saturn</button>
			<button onclick=fadeClick('#uranusContainer') class='planetButton'>Uranus</button>
			<button onclick=fadeClick('#neptuneContainer') class='planetButton'>Neptune</button>
			
		</div>

		<div id="main">
			<h2>Space Information Website</h2>
			<p>Welcome to space info site</p>
			<span style="font-size:2em;cursor:pointer;font-weight:bold" onclick="navBar()">&#9776; Explore</span>



			<div id="mercuryContainer" class='fade planet' style="background-color:black;">


				<div class="Header">Welcome to Mercury</div>

				<div class="Background">
					<img src="img/Mercury.png" alt="Murcury" Width="120%" height="120%" >
				</div>

				<div class='TextOuterDiv'>
					<div class='TextInnerDiv'>

						<div class ="Title"> Mercury Info  </div>
						<div class="Content">
							Mercury is the closest planet to the sun and in turn, circles the the sun faster than any other planet.
							It's called mercury after the Roman messenger God.
							The planets surface can reach up to 450 degrees Celsius, however, it has no atmosphere to trap any heat 
							and during the night the temperature plummets to 170 degrees Celsius.
							Mercury is the smallest planet in our solar system, as well as being slightly bigger than earths moon.
							<br />
						</div>
						
						<div class="Title"><br /> Significant Information </div>
						<div class="Content">
							4 billion years ago, Mercury was hit by an asteroid roughly 100km wide, the impact was equal to that of 1 trillion 1-megaton bombs,
							it left a crater big enough to fit the enitre state of Texas.<br /><br />
							Even tough the planet is so close to the sun, in 2012, The MESSENGER spacecraft discoverd water ice in one of the craters near its north pole.<br /> <br />
							Mercury is constantly shrinking as the planet is made up of a single conitinental plate over a cooling iron core. as the core cools and solidifies, the planets volume shrinks<br /><br />
							Mercury is also the second densest planet due to its huge metalic core.
							<br />
						</div>

						<div class="Title"><br /> Current Missions </div>
						<div class="Content">
							Mercury is the closest planet to the sun and in turn, circles the the sun faster than any other planet.
							It's called Mercury after the Roman messenger God.
							The planets surface can reach up to 450 degrees Celsius, however, it has no atmosphere to trap any heat 
							and during the night the temperature plummets to 170 degrees Celsius.
							Mercury is the smallest planet in our solar system, as well as being slightly bigger than earths moon.
							<br />
						</div>
					</div>
				</div>  

				<div class="VideoOuter">
					<div class="VideoInner">
						<video id="myVidMercury"  width="100%" height="100%" controls> <source src="vid/mercury.mp4" type="video/mp4">
						</video>

						<script>
							var myVideo=document.getElementById("myVidMercury"); 
							function pauseVid() {
								if (myVideo.play) {
									myVideo.pause(); 
								}
							}
						</script>

					</div>
				</div>

			</div>

			<div id="venusContainer" class='fade planet' style="background-color:black;">


				<div class="Header">Welcome to Venus</div>

				<div class="Background">
					<img src="IMG/Venus.png" alt="Venus" Width="120%" height="120%">
				</div>

				<div class='TextOuterDiv'>
					<div class='TextInnerDiv'>

						<div class ="Title"> Venus info  </div>
						<div class="Content">
							
							Mercry is the closest planet to the sun and in turn, circles the the sun faster than any other planet.
							I'ts called mercury after the Roman messenger God.
							The planets surface can reach up to 450 degrees Celsius, however, it has no atmosphere to trap any heat 
							and during the night the temperature plummets to 170 degrees Celsius
							Mercury is the smallest planet in our solar system, as well as being slightly bigger than earths moon
							<br />
						</div>
						
						<div class="Title"><br /> Venus Information </div>
						<div class="Content">

							4 billion years ago, mercury was hit by an asteroid roughly 100km wide, the impact was that equal to 1 trillion 1-megaton bombs,
							it left a crater big enough to fit the enitre state of texas.<br /><br />
							Even tough the planet is so close to the sun, in 2012, The MESSENGER spacecraft discoverd water ice in one of the craters near its north pole.<br /> <br />
							Mercury is consitnly shrinking as the planet is made up of a single conitinental plate over a cooling iron core. as the core cools and solidifies, the planets volume shrinks<br /><br />
							Mercury is also the second densest planet due to its huge metalic core.
							<br />
						</div>
						
						<div class="Title"><br /> Current Missions </div>
						<div class="Content">

							Mercry is the closest planet to the sun and in turn, circles the the sun faster than any other planet.
							I'ts called mercury after the Roman messenger God.
							The planets surface can reach up to 450 degrees Celsius, however, it has no atmosphere to trap any heat 
							and during the night the temperature plummets to 170 degrees Celsius
							Mercury is the smallest planet in our solar system, as well as being slightly bigger than earths moon
							<br />
						</div>
					</div>
				</div>  

				<div class="VideoOuter">
					<div class="VideoInner">
						<video  width="100%" height="100%" controls> <source src="vid/venus.mp4" type="video/mp4">
						</video>
					</div>
				</div>

			</div>

			<div id="earthContainer" class='fade planet' style="background-color:black; ">

				
				<div class="Header">Welcome to Earth</div>

				<div class="Background">
					<img src="IMG/Earth.png" alt="Venus" Width="120%" height="120%">
				</div>

				<div class='TextOuterDiv'>
					<div class='TextInnerDiv'>

						<div class ="Title"> Venus info  </div>
						<div class="Content">

							Mercry is the closest planet to the sun and in turn, circles the the sun faster than any other planet.
							I'ts called mercury after the Roman messenger God.
							The planets surface can reach up to 450 degrees Celsius, however, it has no atmosphere to trap any heat 
							and during the night the temperature plummets to 170 degrees Celsius
							Mercury is the smallest planet in our solar system, as well as being slightly bigger than earths moon
							<br />
						</div>

						<div class="Title"><br /> Venus Information </div>
						<div class="Content">

							4 billion years ago, mercury was hit by an asteroid roughly 100km wide, the impact was that equal to 1 trillion 1-megaton bombs,
							it left a crater big enough to fit the enitre state of texas.<br /><br />
							Even tough the planet is so close to the sun, in 2012, The MESSENGER spacecraft discoverd water ice in one of the craters near its north pole.<br /> <br />
							Mercury is consitnly shrinking as the planet is made up of a single conitinental plate over a cooling iron core. as the core cools and solidifies, the planets volume shrinks<br /><br />
							Mercury is also the second densest planet due to its huge metalic core.
							<br />
						</div>

						<div class="Title"><br /> Current Missions </div>
						<div class="Content">

							Mercry is the closest planet to the sun and in turn, circles the the sun faster than any other planet.
							I'ts called mercury after the Roman messenger God.
							The planets surface can reach up to 450 degrees Celsius, however, it has no atmosphere to trap any heat 
							and during the night the temperature plummets to 170 degrees Celsius
							Mercury is the smallest planet in our solar system, as well as being slightly bigger than earths moon
							<br />
						</div>
					</div>
				</div>
				<div class="VideoOuter">
					<div class="VideoInner">
						<video  width="100%" height="100%" controls> <source src="vid/earth.mp4" type="video/mp4">
						</video>
					</div>
				</div>

			</div>

			<div id="marsContainer" class='fade planet' style="background-color:black; ">

				<div class="Header">Welcome to Mercury</div>

				<div class="Background">
					<img src="img/Mars.png" alt="Murcury" Width="120%" height="120%">
				</div>

				<div class='TextOuterDiv'>
					<div class='TextInnerDiv'>

						<div class ="Title"> Mars info  </div>
						<div class="Content">
							Mercry is the closest planet to the sun and in turn, circles the the sun faster than any other planet.
							I'ts called mercury after the Roman messenger God.
							The planets surface can reach up to 450 degrees Celsius, however, it has no atmosphere to trap any heat 
							and during the night the temperature plummets to 170 degrees Celsius
							Mercury is the smallest planet in our solar system, as well as being slightly bigger than earths moon
							<br />
						</div>
						
						<div class="Title"><br /> Significant Information </div>
						<div class="Content">
							4 billion years ago, mercury was hit by an asteroid roughly 100km wide, the impact was that equal to 1 trillion 1-megaton bombs,
							it left a crater big enough to fit the enitre state of texas.<br /><br />
							Even tough the planet is so close to the sun, in 2012, The MESSENGER spacecraft discoverd water ice in one of the craters near its north pole.<br /> <br />
							Mercury is consitnly shrinking as the planet is made up of a single conitinental plate over a cooling iron core. as the core cools and solidifies, the planets volume shrinks<br /><br />
							Mercury is also the second densest planet due to its huge metalic core.
							<br />
						</div>

						<div class="Title"><br /> Current Missions </div>
						<div class="Content">
							Mercury is the closest planet to the sun and in turn, circles the the sun faster than any other planet.
							I'ts called mercury after the Roman messenger God.
							The planets surface can reach up to 450 degrees Celsius, however, it has no atmosphere to trap any heat 
							and during the night the temperature plummets to 170 degrees Celsius
							Mercury is the smallest planet in our solar system, as well as being slightly bigger than earths moon
							<br />
						</div>
					</div>
				</div>  

				<div class="VideoOuter">
					<div class="VideoInner">
						<video  width="100%" height="100%" controls> <source src="vid/mars.mp4" type="video/mp4">
						</video>
					</div>
				</div>

			</div>

			<div id="jupiterContainer" class='fade planet' style="background-color:black; ">
				<div class="Header">Welcome to Jupiter</div>

				<div class="Background">
					<img src="img/Jupiter.png" alt="Murcury" Width="120%" height="120%">
				</div>

				<div class='TextOuterDiv'>
					<div class='TextInnerDiv'>

						<div class ="Title"> Jupiter info  </div>
						<div class="Content">
							
							Mercry is the closest planet to the sun and in turn, circles the the sun faster than any other planet.
							I'ts called mercury after the Roman messenger God.
							The planets surface can reach up to 450 degrees Celsius, however, it has no atmosphere to trap any heat 
							and during the night the temperature plummets to 170 degrees Celsius
							Mercury is the smallest planet in our solar system, as well as being slightly bigger than earths moon
							<br />
						</div>
						
						<div class="Title"><br /> Significant Information </div>
						<div class="Content">

							4 billion years ago, mercury was hit by an asteroid roughly 100km wide, the impact was that equal to 1 trillion 1-megaton bombs,
							it left a crater big enough to fit the enitre state of texas.<br /><br />
							Even tough the planet is so close to the sun, in 2012, The MESSENGER spacecraft discoverd water ice in one of the craters near its north pole.<br /> <br />
							Mercury is consitnly shrinking as the planet is made up of a single conitinental plate over a cooling iron core. as the core cools and solidifies, the planets volume shrinks<br /><br />
							Mercury is also the second densest planet due to its huge metalic core.
							<br />
						</div>

						<div class="Title"><br /> Current Missions </div>
						<div class="Content">
							
							Mercry is the closest planet to the sun and in turn, circles the the sun faster than any other planet.
							I'ts called mercury after the Roman messenger God.
							The planets surface can reach up to 450 degrees Celsius, however, it has no atmosphere to trap any heat 
							and during the night the temperature plummets to 170 degrees Celsius
							Mercury is the smallest planet in our solar system, as well as being slightly bigger than earths moon
							<br />
						</div>
					</div>
				</div>  

				<div class="VideoOuter">
					<div class="VideoInner">
						<video  width="100%" height="100%" controls> <source src="vid/jupiter.mp4" type="video/mp4">
						</video>
					</div>
				</div>
			</div>

			<div id="saturnContainer" class='fade planet' style="background-color:black; ">


				<div class="Header">Welcome to Saturn</div>

				<div class="Background">
					<img src="img/Saturn.png" alt="Murcury" Width="120%" height="120%">
				</div>

				<div class='TextOuterDiv'>
					<div class='TextInnerDiv'>

						<div class ="Title"> Saturn info  </div>
						<div class="Content">
							
							Mercry is the closest planet to the sun and in turn, circles the the sun faster than any other planet.
							I'ts called mercury after the Roman messenger God.
							The planets surface can reach up to 450 degrees Celsius, however, it has no atmosphere to trap any heat 
							and during the night the temperature plummets to 170 degrees Celsius
							Mercury is the smallest planet in our solar system, as well as being slightly bigger than earths moon
							<br />
						</div>
						
						<div class="Title"><br /> Significant Information </div>
						<div class="Content">

							4 billion years ago, mercury was hit by an asteroid roughly 100km wide, the impact was that equal to 1 trillion 1-megaton bombs,
							it left a crater big enough to fit the enitre state of texas.<br /><br />
							Even tough the planet is so close to the sun, in 2012, The MESSENGER spacecraft discoverd water ice in one of the craters near its north pole.<br /> <br />
							Mercury is consitnly shrinking as the planet is made up of a single conitinental plate over a cooling iron core. as the core cools and solidifies, the planets volume shrinks<br /><br />
							Mercury is also the second densest planet due to its huge metalic core.
							<br />
						</div>

						<div class="Title"><br /> Current Missions </div>
						<div class="Content">
							
							Mercry is the closest planet to the sun and in turn, circles the the sun faster than any other planet.
							I'ts called mercury after the Roman messenger God.
							The planets surface can reach up to 450 degrees Celsius, however, it has no atmosphere to trap any heat 
							and during the night the temperature plummets to 170 degrees Celsius
							Mercury is the smallest planet in our solar system, as well as being slightly bigger than earths moon
							<br />
						</div>
					</div>
				</div>

				<div class="VideoOuter">
					<div class="VideoInner">
						<video  width="100%" height="100%" controls> <source src="vid/saturn.mp4" type="video/mp4">
						</video>
					</div>
				</div>
			</div> 

			<div id="uranusContainer" class='fade planet' style="background-color:black; ">


				<div class="Header">Welcome to Uranus</div>

				<div class="Background">
					<img src="img/Uranus.png" alt="Murcury" Width="120%" height="120%">
				</div>

				<div class='TextOuterDiv'>
					<div class='TextInnerDiv'>

						<div class ="Title"> Uranus info  </div>
						<div class="Content">
							
							Mercry is the closest planet to the sun and in turn, circles the the sun faster than any other planet.
							I'ts called mercury after the Roman messenger God.
							The planets surface can reach up to 450 degrees Celsius, however, it has no atmosphere to trap any heat 
							and during the night the temperature plummets to 170 degrees Celsius
							Mercury is the smallest planet in our solar system, as well as being slightly bigger than earths moon
							<br />
						</div>
						
						<div class="Title"><br /> Significant Information </div>
						<div class="Content">

							4 billion years ago, mercury was hit by an asteroid roughly 100km wide, the impact was that equal to 1 trillion 1-megaton bombs,
							it left a crater big enough to fit the enitre state of texas.<br /><br />
							Even tough the planet is so close to the sun, in 2012, The MESSENGER spacecraft discoverd water ice in one of the craters near its north pole.<br /> <br />
							Mercury is consitnly shrinking as the planet is made up of a single conitinental plate over a cooling iron core. as the core cools and solidifies, the planets volume shrinks<br /><br />
							Mercury is also the second densest planet due to its huge metalic core.
							<br />
						</div>

						<div class="Title"><br /> Current Missions </div>
						<div class="Content">
							
							Mercry is the closest planet to the sun and in turn, circles the the sun faster than any other planet.
							I'ts called mercury after the Roman messenger God.
							The planets surface can reach up to 450 degrees Celsius, however, it has no atmosphere to trap any heat 
							and during the night the temperature plummets to 170 degrees Celsius
							Mercury is the smallest planet in our solar system, as well as being slightly bigger than earths moon
							<br />
						</div>
					</div>
				</div>

				<div class="VideoOuter">
					<div class="VideoInner">
						<video  width="100%" height="100%" controls> <source src="vid/uranus.mp4" type="video/mp4">
						</video>
					</div>
				</div>
			</div>

			<div id="neptuneContainer" class='fade planet' style="background-color:black; ">

				<div class="Header">Welcome to Neptune</div>

				<div class="Background">
					<img src="img/Neptune.png" alt="Murcury" Width="120%" height="120%">
				</div>

				<div class='TextOuterDiv'>
					<div class='TextInnerDiv'>

						<div class ="Title"> Neptune info  </div>
						<div class="Content">
							
							Mercry is the closest planet to the sun and in turn, circles the the sun faster than any other planet.
							I'ts called mercury after the Roman messenger God.
							The planets surface can reach up to 450 degrees Celsius, however, it has no atmosphere to trap any heat 
							and during the night the temperature plummets to 170 degrees Celsius
							Mercury is the smallest planet in our solar system, as well as being slightly bigger than earths moon
							<br />
						</div>
						
						<div class="Title"><br /> Significant Information </div>
						<div class="Content">

							4 billion years ago, mercury was hit by an asteroid roughly 100km wide, the impact was that equal to 1 trillion 1-megaton bombs,
							it left a crater big enough to fit the enitre state of texas.<br /><br />
							Even tough the planet is so close to the sun, in 2012, The MESSENGER spacecraft discoverd water ice in one of the craters near its north pole.<br /> <br />
							Mercury is consitnly shrinking as the planet is made up of a single conitinental plate over a cooling iron core. as the core cools and solidifies, the planets volume shrinks<br /><br />
							Mercury is also the second densest planet due to its huge metalic core.
							<br />
						</div>

						<div class="Title"><br /> Current Missions </div>
						<div class="Content">
							
							Mercry is the closest planet to the sun and in turn, circles the the sun faster than any other planet.
							I'ts called mercury after the Roman messenger God.
							The planets surface can reach up to 450 degrees Celsius, however, it has no atmosphere to trap any heat 
							and during the night the temperature plummets to 170 degrees Celsius
							Mercury is the smallest planet in our solar system, as well as being slightly bigger than earths moon
							<br />
						</div>
					</div>
				</div>

				<div class="VideoOuter">
					<div class="VideoInner">
						<video  width="100%" height="100%" controls> <source src="vid/neptune.mp4" type="video/mp4">
						</video>
					</div>
				</div>
			</div>
		</div>
		<div id="newsletterContainer" class = 'fade planet'>
			<div id='newsletterForm'>
				<h1>Sign up for our free newsletter here for literally no reason at all.</h1>
				<form name='signup' method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
					<p>
						Name <br/>
						<input type='text' name="uName" class='formInput' value="<?php echo $name;?>" required/><br/>
						<p><span class="error"><?php echo $nameErr;?></span></p><br/>
						E-mail Address <br/>
						<input type="email" name="uEmail" class='formInput' value="<?php echo $email;?>" required/><br/>
						<p><span class="error"><?php echo $emailErr;?></span></p><br/>
						<span id='captchafordummies'>To protect ourselves from spam bots, please answer this simple question to complete your sign up.<br/>
						From which planet do humans come from?</span><br/>
						<input type='text' id="captchaInput" name="security" class='formInput'" required/><br/>
						<p><span class="error"><?php echo $securityErr;?></span></p><br/>
						<input type='submit' class='formInput' onclick=validation()/><br/>
					</p>
					</form>
				</div>
			</div>
		</div>
	</body>

</html>