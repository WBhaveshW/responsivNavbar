function testingAlert() {
    alert("cool..");
}

function openSideNav() {
    let openNav = document.getElementById("sideNavbarContainer");
    openNav.style.display = "block";
    openNav.style.trasition = "all 4s";
    openNav.style.animationTimingFunction = "ease-in";


    // animation-timing-function:ease-in;
    
}
function closeSideNav() {
    let closeNav = document.getElementById("sideNavbarContainer");
    closeNav.style.display = "none";
    closeNav.style.trasition = "all 4s";
    openNav.style.animationTimingFunction = "ease-out";

}