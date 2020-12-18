<link rel="stylesheet" href="css/index.css"  />

<footer>



                    <nav class="nav" id="navfooter">

                        <a href="index.php" class="nav__link active ripple">

                            <i class="material-icons nav__icon ">home</i>
                            <span class="nav__text ">HOME</span>

                        </a>

                        <a href="Search.php" class="nav__link ripple">

                            <i class="material-icons nav__icon ">search</i>
                            <span class="nav__text ">SEARCH</span>

                        </a>

                        <a href="Orders.php" class="nav__link ripple">

                            <i class="material-icons nav__icon">shopping_bag</i>
                            <span class="nav__text">ORDERS</span>

                        </a>

                        <a href="DC.php" class="nav__link ripple">

                            <i class="material-icons nav__icon">account_balance_wallet</i>
                            <span class="nav__text">AUSPIKCASH</span>

                        </a>

                    </nav>
                </footer>

                <script> 
        $(document).ready(function () { 
  
            $('navlink') 
                    .click(function (e) { 
                $('nav_link') 
                    .removeClass('active'); 
                $(this).addClass('active'); 
            }); 
        }); 
    </script> 