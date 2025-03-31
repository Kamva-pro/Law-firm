// Add scroll listener to change navbar background on scroll
window.onscroll = function() {
    var navbar = document.getElementById("navbar");
    if (window.scrollY > 50) { // Change background after scrolling down 50px
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
};
