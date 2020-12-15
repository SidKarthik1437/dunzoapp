// This example adds a search box to a map, using the Google Place Autocomplete
// feature. People can enter geographical searches. The search box will return a
// pick list containing a mix of places and predicted search terms.
// This example requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
var search_modal = document.getElementById('locationModal');

            var search_btn = document.getElementById('location-btn');

            var span = document.getElementsByClassName("close")[0];

            var header = document.getElementById('header')

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

            