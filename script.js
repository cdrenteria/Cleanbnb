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