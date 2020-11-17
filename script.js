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
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  if (n > 3) {
    slideIndex = 1;
    showDivs(slideIndex);
    return;
  };
  if (showIndex < 0) {
    slideIndex = x.length;
    showDivs(slideIndex);
    return;
  };
  x[showIndex].style.display = "flex";  
}

Dropzone.options.myAwesomeDropzone = { // The camelized version of the ID of the form element

  // The configuration we've talked about above
  autoProcessQueue: false,
  uploadMultiple: true,
  parallelUploads: 100,
  maxFiles: 100,

  // The setting up of the dropzone
  init: function() {
    var myDropzone = this;

    // First change the button to actually tell Dropzone to process the queue.
    this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
      // Make sure that the form isn't actually being sent.
      e.preventDefault();
      e.stopPropagation();
      myDropzone.processQueue();
    });

    // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
    // of the sending event because uploadMultiple is set to true.
    this.on("sendingmultiple", function() {
      // Gets triggered when the form is actually being sent.
      // Hide the success button or the complete form.
    });
    this.on("successmultiple", function(files, response) {
      // Gets triggered when the files have successfully been sent.
      // Redirect user or notify of success.
    });
    this.on("errormultiple", function(files, response) {
      // Gets triggered when there was an error sending the files.
      // Maybe show form again, and notify user of error
    });
  }
}