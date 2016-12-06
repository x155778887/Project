// Navigator Functions
navOpen = 0;
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
        $('.fade').fadeOut();
    }
}
//Fading divs
function fadeClick(element) {
    $(".fade").fadeOut();
    $(element).fadeIn();
}