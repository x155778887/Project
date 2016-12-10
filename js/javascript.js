function validation() {
    var nameValidation=document.forms["Signup"]["security"].value;
    if (nameValidation.toUpperCase()==="Earth".toUpperCase()) {
        alert("Sign up successful!");
        return true;
    } else {
        alert("Please enter the securiy question correctly.");
        return false;
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