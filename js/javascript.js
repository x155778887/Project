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
    }
}
//Functions of the buttons
//Mercury
function myMercuryFunc() {
    $("#myMercury").fadeToggle();
}
//Venus
function myVenusFunc() {
    $("#myVenus").fadeToggle();
}
//Earth
function myEarthFunc() {
    $("#myEarth").fadeToggle();
}
//Mars
function myMarsFunc() {
    $("#myMars").fadeToggle();
}
//Jupiter
function myJupiterFunc() {
    $("#myJupiter").fadeToggle();
}
//Saturn
function mySaturnFunc() {
    $("#mySaturn").fadeToggle();
}
//Uranus
function myUranusFunc() {
    $("#myUranus").fadeToggle();
}
//Neptune
function myNeptuneFunc() {
    $("#myNeptune").fadeToggle();
}