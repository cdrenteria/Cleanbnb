navBar = document.querySelector(".navbar-nav");
navTabs = document.querySelectorAll(".nav-link");

for (let x = 0; x < navTabs.length; x++){
    navTabs[x].addEventListener("click", function(){
        for (let y = 0; y < navTabs.length; y++){
        navTabs[y].classList.remove("active");
        };
        navTabs[x].classList.add("active");
    })
}

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("carouselslide");
  showIndex = slideIndex -1
  if (n > 2) {slideIndex = 0}
  if (n < 0) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[showIndex].style.display = "flex";  
}