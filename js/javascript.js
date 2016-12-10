var captchaInput = document.getElementById("captchaInput");
function weed() {
    if (captchaInput === "Earth") {
        window.alert("Sign up successful!");
    } else {
        window.alert("You failed the captcha.");
    }
}


// Navigator Functions
navOpen = 0;
function navBar() {
    if (navOpen === 0) {
        document.getElementById("mySidenav").style.width = "10%";
        document.getElementById("main").style.marginLeft = "10%";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        navOpen = 1;
    } else {
        document.getElementById("mySidenav").style.width = "0%";
        document.getElementById("main").style.marginLeft = "0%";
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