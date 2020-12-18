<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Kanit&display=swap" rel="stylesheet">   

    <title>Login Page</title>
</head>
<style>
*
{
    font-family: 'Kanit', sans-serif;
}

</style>
<body style="background:#ffa1a1 !important;">
    <div class="login_container">
        <div class="logo">
            
            <img src="Images/Logo.png" alt="">
            
        </div>

    </div>

</body>
<footer>

<div class="bottomcard" id="bottomcard">
<center>
        <form action="">
        <h2 class="welcome_text" style="margin-bottom:5px;">Hello there, </h2>
        
        <div class="input">
                <input type="number" onClick="slideCard()" placeholder="Enter your number" class="number_text" id="continueinput">
                <span >+61</span>
        </input>
                </div>


        </form>
        


 <button class="continuebutton ripple" id="continuebutton" >
    Continue
</button>   
</center>

</div>
</footer>
<script>
var butt= document.getElementById("continuebutton");
var card = document.getElementById("bottomcard");
function slideCard()
{
butt.classList.add("buttondisplay");
card.classList.add("cardup");

}

</script>
</html>