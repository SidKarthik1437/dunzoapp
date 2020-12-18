// This example adds a search box to a map, using the Google Place Autocomplete
// feature. People can enter geographical searches. The search box will return a
// pick list containing a mix of places and predicted search terms.
// This example requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
var search_modal = document.getElementById('locationModal');

            var search_btn = document.getElementById('location-btn');
            var continue_btn = document.getElementById('continuebutton');
            var span = document.getElementsByClassName("close")[0];
            var input = document.getElementById('continueinput');
            var header = document.getElementById('header');

            search_btn.onclick = function () {
                search_modal.style.display = "block";
                header.style.display = "none";
            }

            span.onclick = function () {
                search_modal.style.display = "none";
                header.style.display = "block";
            }

            window.onclick = function (event) {
                if (event.target == search_modal) {
                    search_modal.style.display = "none";
                    header.style.display = "block";
                }
            }


var slideIndex = 0;
showSlides();

// function showSlides() {
//   var i;
//   var slides = document.getElementsByClassName("services_card");
//   var dots = document.getElementsByClassName("dot");
//   for (i = 0; i < slides.length; i++) {
//     slides[i].style.display = "none";  
//   }
//   slideIndex++;
//   if (slideIndex > slides.length) {slideIndex = 1}    
//   for (i = 0; i < dots.length; i++) {
//     dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";  
//   dots[slideIndex-1].className += " active";
//   setTimeout(showSlides, 2000); // Change image every 2 seconds
// }

            