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
							
							Venus is the second farthest planet from the sun.<br /><br />
							The planet go its name from the Roman goddess of love.<br /><br />
							The planet has the hotest surface in all the solar system. 
							Temperatures can reach up to 465 degrees Celsius, its dense atmosphere traps in heat like a greenhouse.<br /><br />
							Venus and Earth are sometimes called twins because they are similar, mass, density and gravity however the similarites end there.<br /><br />
							Venus does not have any moons.
							<br />
						</div>
						
						<div class="Title"><br /> Significant Information </div>
						<div class="Content">
								Venus has a hellish atmosphere as well, consisting mainly of carbon dioxide with clouds of sulfuric acid, and scientists have only detected trace amounts of water in the atmosphere. 
								The atmosphere is heavier than that of any other planet, leading to a surface pressure 90 times that of Earth.<br /><br />
								The surface of Venus is extremely dry. During its evolution, ultraviolet rays from the sun evaporated water quickly, keeping it in a prolonged molten state.
								There is not more water left today due to the heat boiling any water away.<br /><br />
								Six mountainous regions make up about one-third of the Venusian surface. One mountain range, called Maxwell, is about 540 miles (870 km) long and reaches up to some 7 miles (11.3 km) high, making it the highest feature on the planet.
							
							<br />
						</div>
						
						<div class="Title"><br /> Current Missions </div>
						<div class="Content">
	
						Akatsuki, formerly known as the Venus Climate Orbiter (VCO) and Planet-C, is a Japanese space probe which was intended to explore Venus.<br /><br />
						It was Launched in May 20 of 2010 and went into orbit in December 7 of 2015.
						

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

							Earth is the third farthest planet from the sun, its the only planet known to have an atmosphere containing free oxygen, oceans of liquid water on its surface, and life. <br /><br />
							Earth is the only planet not name after a Greek/Roman God. 
							The name Earth is an English/German name which simply means "The ground".<br /><br />
							Earth is the fifth largest planet in the solor system, smaller than all the gass planets, but bigger than the other rocky planets.<br /><br />
							Earth only has one moon called luna, it takes 27.3 days to orbit the Earth.
						</div>

						<div class="Title"><br /> Significant Information </div>
						<div class="Content">

							Earth has a diameter of roughly 8,000 miles (13,000 kilometers), and is round because gravity pulls matter into a ball, although it is not perfectly round, instead being more of an "oblate spheroid".<br /><br />
							Roughly 71 percent of Earth's surface is covered by water, most of it in the oceans. About a fifth of Earth's atmosphereis made up of oxygen, produced by plants
							<br />
						</div>

						<div class="Title"><br /> Current Missions </div>
						<div class="Content">
							Aqua is a major international Earth Science satellite mission centered at NASA. Launched on May 4, 2002, the satellite has six differrent Earth-observing instruments on board and is named for the large amount of information it collects about water in the Earth system.<br /><br />
							Aura's four instruments study the atmosphere's chemistry and dynamics. Aura's measurements enable us to investigate questions about ozone trends, air-quality changes and their linkage to climate change.<br /><br />
							The Cloud-Aerosol Lidar and Infrared Pathfinder Satellite Observation (CALIPSO) spacecraft is a joint U.S. (NASA) / French (Centre National d’Etudes Spatiales/CNES) mission. Observations from spaceborne lidar, combined with passive imagery, will lead to improved understanding of the role aerosols and clouds play in regulating the Earth’s climate, in particular, how aerosols and clouds interact with one another.
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
							
							Mars is the fourth farthest planet from the sun.<br /><br />
							The planet go its name from the Roman god of war.<br /><br /> 
							Mars can't retain any heat energy. On average, the temperature on Mars is about  minus 60 degrees celsius during winter and 20 degrees Celsius during the summer .<br /><br />
							Compared the Earth, mars mass is 10 times less than Earth.<br /><br />
							mars has two moons, Phobos and Deimos but they hold more resemblance to asteroids.
							
							<br />
						</div>
						
						<div class="Title"><br /> Significant Information </div>
						<div class="Content">
							The bright rust color Mars is known for is due to iron-rich minerals in its regolith, the iron minerals oxidize, or rust, causing the soil to look red.<br /><br />
							The red planet is home to both the highest mountain and the deepest, longest valley in the solar system. Olympus Mons is roughly 17 miles (27 kilometers) high, about three times as tall as Mount Everest.<br /><br />
							Mars has the largest volcanoes in the solar system, including Olympus Mons, which is about 370 miles (600 km) in diameter, wide enough to cover the entire state of New Mexico.
							<br />
						</div>

						<div class="Title"><br /> Current Missions </div>
						<div class="Content">
							Mars Reconnaissance Orbiter, NASA's Mars Reconnaissance Orbiter is capturing unique views of Mars with the most powerful telescopic camera ever to another planet. Its five other scientific instruments are collecting data about the Red Planet.<br /><br />
							Spirit and Opportunity,Two powerful Mars rovers are on the red planet. They have far greater mobility than the 1997 Mars Pathfinder rover. Each rover carries a sophisticated set of instruments to search for evidence of liquid water that may have been present in the planet's past.
							The rovers are identical to each other, but are exploring different regions of Mars.<br /><br />
							NASA is participating in Mars Express, a mission planned by the European Space Agency (ESA) and the Italian Space Agency. The mission is exploring the atmosphere and surface of Mars from polar orbit.
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
