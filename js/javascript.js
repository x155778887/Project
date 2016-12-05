    mercuryOpacity = 0;
    venusOpacity = 0;
    earthOpacity = 0;
    marsOpacity = 0;
    jupiterOpacity = 0;
    saturnOpacity = 0;
    uranusOpacity = 0;
    neptuneOpacity = 0;
    navOpen = 0;
    // Navigator Functions
    function navBar() {
        if (navOpen === 0) {
            document.getElementById("mySidenav").style.width = "15%";
            document.getElementById("main").style.marginLeft = "15%";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
            navOpen = 1;
        } else {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";
            navOpen = 0;
            document.getElementById("myMercury").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myVenus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myEarth").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myMars").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myJupiter").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("mySaturn").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myUranus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myNeptune").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            mercuryOpacity = 0;
            venusOpacity = 0;
            earthOpacity = 0;
            marsOpacity = 0;
            jupiterOpacity = 0;
            saturnOpacity = 0;
            uranusOpacity = 0;
            neptuneOpacity = 0;
        }
    }
    //Functions of the buttons
    //Mercury
    function myMercuryFunc() {
        if (mercuryOpacity === 0) {
            document.getElementById("myMercury").setAttribute("style", "opacity:1; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myVenus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myEarth").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myMars").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myJupiter").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("mySaturn").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myUranus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myNeptune").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");

            mercuryOpacity = 1;
        } else {
            document.getElementById("myMercury").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myVenus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myEarth").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myMars").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myJupiter").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("mySaturn").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myUranus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myNeptune").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            mercuryOpacity = 0;
            venusOpacity = 0;
            earthOpacity = 0;
            marsOpacity = 0;
            jupiterOpacity = 0;
            saturnOpacity = 0;
            uranusOpacity = 0;
            neptuneOpacity = 0;
        }
    }
    //Venus
    function myVenusFunc() {
        if (venusOpacity === 0) {
            document.getElementById("myMercury").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myVenus").setAttribute("style", "opacity:1; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myEarth").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myMars").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myJupiter").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("mySaturn").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myUranus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myNeptune").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            venusOpacity = 1;
        } else {
            document.getElementById("myMercury").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myVenus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myEarth").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myMars").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myJupiter").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("mySaturn").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myUranus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myNeptune").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            mercuryOpacity = 0;
            venusOpacity = 0;
            earthOpacity = 0;
            marsOpacity = 0;
            jupiterOpacity = 0;
            saturnOpacity = 0;
            uranusOpacity = 0;
            neptuneOpacity = 0;
        }
    }
    //Earth
    function myEarthFunc() {
        if (earthOpacity === 0) {
            document.getElementById("myMercury").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myVenus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myEarth").setAttribute("style", "opacity:1; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myMars").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myJupiter").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("mySaturn").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myUranus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myNeptune").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            earthOpacity = 1;
        } else {
            document.getElementById("myMercury").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myVenus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myEarth").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myMars").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myJupiter").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("mySaturn").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myUranus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myNeptune").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            mercuryOpacity = 0;
            venusOpacity = 0;
            earthOpacity = 0;
            marsOpacity = 0;
            jupiterOpacity = 0;
            saturnOpacity = 0;
            uranusOpacity = 0;
            neptuneOpacity = 0;
        }
    }
    //Mars
    function myMarsFunc() {
        if (marsOpacity === 0) {
            document.getElementById("myMercury").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myVenus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myEarth").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myMars").setAttribute("style", "opacity:1; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myJupiter").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("mySaturn").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myUranus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myNeptune").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            marsOpacity = 1;
        } else {
            document.getElementById("myMercury").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myVenus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myEarth").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myMars").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myJupiter").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("mySaturn").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myUranus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myNeptune").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            mercuryOpacity = 0;
            venusOpacity = 0;
            earthOpacity = 0;
            marsOpacity = 0;
            jupiterOpacity = 0;
            saturnOpacity = 0;
            uranusOpacity = 0;
            neptuneOpacity = 0;
        }
    }
    //Jupiter
    function myJupiterFunc() {
        if (jupiterOpacity === 0) {
            document.getElementById("myMercury").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myVenus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myEarth").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myMars").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myJupiter").setAttribute("style", "opacity:1; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("mySaturn").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myUranus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myNeptune").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            jupiterOpacity = 1;
        } else {
            document.getElementById("myMercury").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myVenus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myEarth").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myMars").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myJupiter").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("mySaturn").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myUranus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myNeptune").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            mercuryOpacity = 0;
            venusOpacity = 0;
            earthOpacity = 0;
            marsOpacity = 0;
            jupiterOpacity = 0;
            saturnOpacity = 0;
            uranusOpacity = 0;
            neptuneOpacity = 0;
        }
    }
    //Saturn
    function mySaturnFunc() {
        if (saturnOpacity === 0) {
            document.getElementById("myMercury").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myVenus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myEarth").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myMars").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myJupiter").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("mySaturn").setAttribute("style", "opacity:1; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myUranus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myNeptune").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            saturnOpacity = 1;
        } else {
            document.getElementById("myMercury").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myVenus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myEarth").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myMars").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myJupiter").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("mySaturn").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myUranus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myNeptune").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            mercuryOpacity = 0;
            venusOpacity = 0;
            earthOpacity = 0;
            marsOpacity = 0;
            jupiterOpacity = 0;
            saturnOpacity = 0;
            uranusOpacity = 0;
            neptuneOpacity = 0;
        }
    }
    //Uranus
    function myUranusFunc() {
        if (uranusOpacity === 0) {
            document.getElementById("myMercury").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myVenus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myEarth").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myMars").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myJupiter").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("mySaturn").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myUranus").setAttribute("style", "opacity:1; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myNeptune").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            uranusOpacity = 1;
        } else {
            document.getElementById("myMercury").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myVenus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myEarth").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myMars").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myJupiter").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("mySaturn").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myUranus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myNeptune").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            mercuryOpacity = 0;
            venusOpacity = 0;
            earthOpacity = 0;
            marsOpacity = 0;
            jupiterOpacity = 0;
            saturnOpacity = 0;
            uranusOpacity = 0;
            neptuneOpacity = 0;
        }
    }
    //Neptune
    function myNeptuneFunc() {
        if (neptuneOpacity === 0) {
            document.getElementById("myMercury").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myVenus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myEarth").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myMars").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myJupiter").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("mySaturn").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myUranus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myNeptune").setAttribute("style", "opacity:1; -moz-opacity:0.5; filter:alpha(opacity=50)");
            neptuneOpacity = 1;
        } else {
            document.getElementById("myMercury").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myVenus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myEarth").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myMars").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myJupiter").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("mySaturn").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myUranus").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            document.getElementById("myNeptune").setAttribute("style", "opacity:0; -moz-opacity:0.5; filter:alpha(opacity=50)");
            mercuryOpacity = 0;
            venusOpacity = 0;
            earthOpacity = 0;
            marsOpacity = 0;
            jupiterOpacity = 0;
            saturnOpacity = 0;
            uranusOpacity = 0;
            neptuneOpacity = 0;
        }
    }