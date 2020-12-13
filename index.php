<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Kanit&display=swap" rel="stylesheet">   
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


        <link rel="stylesheet" href="index.css">
        <link rel="manifest" href="manifest.json">
        <meta name="viewport" content="width=device-width, viewport-fit=cover" />
    
        <title>Dunzo</title>
    </head>
    <body>
        
            <nav class='header'>
                <div class='location'>
                    <div class="location-left ripple">
        
                        <i class="material-icons location_icon dcolor" >location_on</i>
                        <span class="location_text noselect">Sydney</span>
                        <i class="material-icons dcolor">keyboard_arrow_down</i>
        
                    </div>
                    
                    <div class="location-right">
                        <i class="material-icons ripple" >person</i>
                        <i class="material-icons ripple">shopping_cart</i>
                    </div>
                </div>
            </nav>
        <div class='container'>
            
            
                <div class="search noselect noref ripple"</div>
                    <i class="material-icons">search</i>
                    <input type="text" placeholder="Search for store/item" disabled />
                </div>
            

            <h5 style="font-weight:700;
                margin-top:0;">Instant delivery to your doorstep</h5>
            <div class="categorycards">
                
                <div class="cardmenu ripple" style="background:#0cb071;">
                    <span>Groceries & <br> Essentials</span>
                    <img src="Icons/groc.svg" alt=""></div>
                <div class="cardmenu ripple" style="background:#1ee348;">
                    <span>Fruits & <br>Vegetables</span>
                    <img src="Icons/fruits.svg" alt=""></div>
                <div class="cardmenu ripple" style="background:#05a0e3;">
                    <span>Pickup & <br> Drop</span>
                    <img src="Icons/pickup.svg" alt=""></div>
                <div class="cardmenu ripple" style="background:#fc4283;">
                    <span>Meat & <br> Fish  </span>
                    <img src="Icons/meat.svg" alt=""></div>
            </div>  

            <div class="services">
                <div class="cardrow">
                    <div class="services_card ripple">
                      <img src="Icons/foodel.svg" class="servicesicon" alt="" ></img>
                    <span class="servicestext">Food Delivery</span>  
                    </div>
                    <div class="services_card ripple">
                      <img src="Icons/meds.svg" class="servicesicon" alt="" ></img>
                      <br>
                    <span class="servicestext">Medicines</span>  
                    </div>
                    <div class="services_card ripple">
                    <img class="servicesicon" src="Icons/paan2.svg">
                    <br>
                    <span class="servicestext">Paan Shop</span>  
                    </div>
                    <div class="services_card ripple">
                    <img class="servicesicon" src="Icons/store.svg">
                    <span class="servicestext">Any store in the city</span>  
                    </div>
                    <div class="services_card ripple">
                    <img class="servicesicon" src="Icons/petsup.svg">
                    <span class="servicestext">Pet Supplies</span>  
                    </div>
                    <div class="services_card ripple">
                      <img src="Icons/hanw2.svg" class="servicesicon" alt="" ></img>
                    <span class="servicestext">Health and Wellness</span>  
                    </div>
                    <div class="services_card ripple">
                      <img src="Icons/gifts.svg" class="servicesicon" alt="" ></img>
                    <span class="servicestext">Gifts and Lifestyle</span>  
                    </div>
                    
                </div> 
            </div>             
           
        </div>
        <footer>
        <nav class="nav" id="navfooter">
            
            <a href="" class="nav__link nav__link--active">

                <i class="material-icons nav__icon">home</i>
                <span class="nav__text">HOME</span>

            </a>

            <a href="Pages/Search.php" class="nav__link ">

                <i class="material-icons nav__icon">search</i>
                <span class="nav__text">SEARCH</span>

            </a>
            
            <a href="Pages/Orders.php" class="nav__link">

                <i class="material-icons nav__icon">shopping_bag</i>
                <span class="nav__text">Orders</span>

            </a>

            <a href="Pages/DC.php" class="nav__link">

                <i class="material-icons nav__icon">account_balance_wallet</i>
                <span class="nav__text">DunzoCash</span>

            </a>
 
        </nav>
        </footer>
    </body>
    <script src="main.js">
//         var btnContainer = document.getElementById("navfooter");

// // Get all buttons with class="btn" inside the container
// var btns = btnContainer.getElementsByClassName("nav__link");

// // Loop through the buttons and add the active class to the current/clicked button
// for (var i = 0; i < btns.length; i++) {
//   btns[i].addEventListener("click", function() {
//     var current = document.getElementsByClassName("nav__link--active");
//     current[0].className = current[0].className.replace(" nav__link--active", "");
//     this.className += " nav__link--active";
//   });
// }
    </script>
</html>