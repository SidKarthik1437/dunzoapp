<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Kanit&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.css' rel='stylesheet' />
    <script
        src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.min.js'></script>
    <link rel='stylesheet'
        href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.css'
        type='text/css' />

    <script
        src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDzUFSB9R2QnSPNr7-zVUxZr4eCfiGH5fY"></script>

    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="css/offer.css">
    <link rel="manifest" href="manifest.json">
    <meta name="viewport" content="width=device-width, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-status-bar-style" content="white ">

    <title>Dunzo</title>
</head>

<body>
    <div id="locationModal" class="modal">

        <div class="modal-content">
            <span class="close">&times;</span>
            <div id='map' style='width: 100%; height: 700px !important;'></div>
            <script>
                mapboxgl.accessToken = 'pk.eyJ1Ijoic2lka2FydGhpayIsImEiOiJja2lweDRkbGkwOGQyMzBsMzB1djBiemhkIn0._Gpz07Y4hPcMftrO_SFNCw';
                var map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location
                    center: [77.594566, 12.971599], // starting position [lng, lat]
                    zoom: 8 // starting zoom
                });
               
                  var geolocate =  new mapboxgl.GeolocateControl({
                        positionOptions: {
                            enableHighAccuracy: true
                        },
                        trackUserLocation: true
                    })
                
                    map.addControl(geolocate);
                    geolocate.on('geolocate', function(e) {
      const lon = e.coords.longitude;
      const lat = e.coords.latitude
      var position = [lon, lat];
      console.log(position);
});    


                var marker = new mapboxgl.Marker() // initialize a new marker
                    .setLngLat([-122.25948, 37.87221]) // Marker [lng, lat] coordinates
                    .addTo(map); // Add the marker to the map

                var geocoder = new MapboxGeocoder({ // Initialize the geocoder
                    accessToken: mapboxgl.accessToken, // Set the access token
    mapboxgl: mapboxgl, // Set the mapbox-gl instance
    marker: false, // Do not use the default marker style
    placeholder: 'Search for places in Bangalore', // Placeholder text for the search bar
    bbox: [77.47481093574571,13.081873540074154,  77.69481093574571,13.081873540074154,], // Boundary for Berkeley
    proximity: {
      longitude: 77.594566,
      latitude: 12.971599
    } // Coordinates of UC Berkeley
                });

                // Add the geocoder to the map
                map.addControl(geocoder);
                geocoder.mapboxClient
  .geocodeReverse({
    latitude: lon, 
    longitude: lat
  }, function(err, res) {
    console.log(err, res)
  });



                map.on('load', function() {
    map.addSource('single-point', {
      type: 'geojson',
      data: {
        type: 'FeatureCollection',
        features: []
      }
    });

    map.addLayer({
      id: 'point',
      source: 'single-point',
      type: 'circle',
      paint: {
        'circle-radius': 10,
        'circle-color': '#448ee4'
      }
    });

    // Listen for the `result` event from the Geocoder
    // `result` event is triggered when a user makes a selection
    // Add a marker at the result's coordinates
    geocoder.on('result', function(ev) {
      map.getSource('single-point').setData(ev.result.geometry);
    });
  });
            </script>
        </div>
        </div>







            <nav class='header' id="header">
                <div class='location'>

                    <div class="location-left ripple" class="btn" id="location-btn">
                        <span class="location_text noselect">Sydney</span>
                        <i class="material-icons dcolor noselect locationarrow">keyboard_arrow_down</i>
                    </div>

                    <div class="location-right">
                        <i class="material-icons ripple noselect">person</i>
                        <i class="material-icons ripple noselect">shopping_cart</i>
                    </div>
                </div>
            </nav>
            <div class='container'>
                <div class="container_top">
                    <div class="search noselect noref ripple" id="search-btn" onclick="window.location.href = 'Pages/Search.php'">
                        <!-- <button type="button" class="btn" id="search-btn"> -->
                        <i class="material-icons">search</i>
                        <input type="text" placeholder="Search for store/item" disabled />
                        <!-- </button> -->
                    </div>


                    <h5 class="noselect" style="font-weight:700; margin-top:0;">
                        Instant delivery to your doorstep</h5>
                    <div class="categorycards">

                        <div class="cardmenu ripple noselect" style="background:#0cb071;">
                            <span>Groceries & <br> Essentials</span>
                            <img src="Icons/groc.svg" alt="">
                        </div>
                        <div class="cardmenu ripple noselect" style="background:#1ee348;">
                            <span>Fruits & <br>Vegetables</span>
                            <img src="Icons/fruits.svg" alt="">
                        </div>
                        <div class="cardmenu ripple noselect" style="background:#05a0e3;">
                            <span>Pickup & <br> Drop</span>
                            <img src="Icons/pickup.svg" alt="">
                        </div>
                        <div class="cardmenu ripple noselect" style="background:#fc4283;">
                            <span>Meat & <br> Fish </span>
                            <img src="Icons/meat.svg" alt="">
                        </div>
                    </div>
                </div>

                <div class="services">
                    <div class="cardrow">
                        <div class="services_card ripple">
                            <img src="Icons/foodel.svg" class="servicesicon" alt="" />
                            <span class="servicestext noselect">Food Delivery</span>
                        </div>
                        <div class="services_card ripple">
                            <img src="Icons/meds.svg" class="servicesicon" alt="" />
                            <br>
                            <span class="servicestext noselect">Medicines</span>
                        </div>
                        <div class="services_card ripple">
                            <img class="servicesicon" src="Icons/store.svg" />
                            <span class="servicestext noselect">Any store in the city</span>
                        </div>
                        <div class="services_card ripple">
                            <img class="servicesicon" src="Icons/petsup.svg" />
                            <span class="servicestext noselect">Pet Supplies</span>
                        </div>
                        <div class="services_card ripple">
                            <img src="Icons/hanw2.svg" class="servicesicon" alt="" />
                            <span class="servicestext noselect">Health and Wellness</span>
                        </div>
                        <div class="services_card ripple">
                            <img src="Icons/gifts.svg" class="servicesicon" alt="" />
                            <span class="servicestext noselect">Gifts and Lifestyle</span>
                        </div>

                    </div>
                </div>
                <div class="container_bottom">
                    <div class="toppicks">
                        <h5 style="font-weight:700; margin-top:0;">Top picks for you</h5>
                        <div class="extracards">
                            <div class="cardrow">
                                <div class="each_card">
                                    <img src="Images/pizza.jpg" alt="" />
                                </div>
                                <div class="each_card">
                                    <img src="Images/chicken.jpg" alt="" />
                                </div>
                                <div class="each_card">
                                    <img src="Images/pasta.jpg" alt="" />
                                </div>
                                <div class="each_card">
                                    <img src="Images/bakery.jpg" alt="" />
                                </div>
                                <div class="each_card">
                                    <img src="Images/vegetables.jpg" alt="" />
                                </div>
                                <div class="each_card">
                                    <img src="Images/pizza.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offers">
                        <h5 style="font-weight:700; margin-top:0;">Offers</h5>
                        <div class="extracards">
                            <div class="cardrow">
                                <div class="each_card">
                                    <img src="Images/pizza.jpg" alt="" />
                                </div>
                                <div class="each_card">
                                    <img src="Images/chicken.jpg" alt="" />
                                </div>
                                <div class="each_card">
                                    <img src="Images/pasta.jpg" alt="" />
                                </div>
                                <div class="each_card">
                                    <img src="Images/bakery.jpg" alt="" />
                                </div>
                                <div class="each_card">
                                    <img src="Images/vegetables.jpg" alt="" />
                                </div>
                                <div class="each_card">
                                    <img src="Images/pizza.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>





                </div>


                <?php include 'footer.php'; ?>
                <script src="main.js"></script>

</body>


</html>