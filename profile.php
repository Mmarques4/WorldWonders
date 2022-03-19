<?php
    session_start();
    $_SESSION["loggedIn"] = true;
?>

<?php

    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'sessions';
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    if (mysqli_connect_errno()) {
        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }
    // We don't have the password or email info stored in sessions so instead we can get the results from the database.
    $stmt = $con->prepare('SELECT password, email FROM users WHERE id = ?');
    // In this case we can use the account ID to get the account info.
    $stmt->bind_param('i', $_SESSION['id']);
    $stmt->execute();
    $stmt->bind_result($password, $email);
    $stmt->fetch();
    $stmt->close();

?>

<!DOCTYPE html>
<html lang="en">

    <!--Head section contains metadata (not displayed in page)-->
    <head>
    <!--viewport scale-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--favicon-->
    <link rel="stylesheet" type="text/css" href="style/profile.css">
    <link rel="shortcut icon" href="taj.png" />

    <!--Title displayed in browser tab-->
    <title>Wonders</title>
    </head>

    <body class="loggedin">
        <br><div class="wrapper">
            <header class="main-head"><image src = "image/world.png" Id="world"></image><image src = "image/title.png" Id="title"></header>
            <?php
            
            include('nav.php');

            ?>

            <article class="content">
                <h1 id= wonders> 
                <?php
                if (isset($_SESSION['username'])) {
                
                    $username = $_SESSION['username'];

                    $block_of_html = <<< HTML
                    <h1>Welcome $username, you are now logged in to the Secret Planner!</h1>
                    <p> This Secret Planner is created for your future adventures.
                    You will find a calendar function that will allow you to plan your
                    future trips to see the Wonders of the World.</p>

                    <p> <br> You will be able to find resources in this virtual planner
                    to make these trips more achievable at an afforable price.
                    <br><br> <b>Lets plan your future adventures!</b> 
                    HTML;
                    
                    echo $block_of_html;
                }
                 include ("music.php")
                ?>
            </article> 

    <aside class="placess"><u>Calendar</u><br>
    <p id=parapragh> <div align="center"><iframe src="//widget.calendarlabs.com/v1/calendar.php?cid=1001&ver=1.2&uid=5365000223&c=8&l=en&cbg=C3D9FF&cfg=000000&hfg=000000&hfg1=000000&ct=1&cb=1&cbc=000000&cf=verdana&cp=bottom&sw=0&hp=t&ib=0&ibc=&i=" width="170" height="155" marginwidth=0 marginheight=0 frameborder=no scrolling=no allowtransparency='true'>Loading...</iframe>
    <div align="center" style="width:140px;font-size:10px;color:#333;"></a><?php date_default_timezone_set("America/New_York"); echo date("l jS \of F Y h:i:s A") . "<br>"; ?></div></div>
    </aside>

    <div class="ad"> <u>Seven Wonders of the World</u>
      <ul class="a" id= "adw"> 
        <li>The Great Wall, China</li>
        <li>Chichen Itza, Mexico</li>
        <li>Petra, Jordan</li>
        <li>Machu Picchu, Peru</li>
        <li>Christ the Redeemer, Brazil</li>
        <li>The Colosseum, Italy</li>
        <li>The Taj Mahal, India</li><br>
      </ul>
    </div>
      
    <footer class="main-footer">
    <!-- Photo Grid -->
        <div class="row"> 
            <div class="column">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src = "image/flights.jpg" Id="Photo1"style="width:100%">
                        </div>
                        <div class="flip-card-back">
                            <h1> <i>Cheap Flights</i></h1> 
                                <a href="https://www.google.com/flights" id="website"> 1. Google Flights</a><br>
                                <a href="https://www.skyscanner.com/" id="website"> 2. Skyscanner</a></li><br>
                                <a href="https://www.cheapflights.com/" id="website"> 3. Cheapflights</a></li><br>
                                <img src = "image/vacation.jpg" Id="vacation" style="width:60%"/></p>
                            </ul>  
                    </div>
                </div>
            </div>
        </div>
        
            <div class="column">
                <div class="flip-card"> 
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src = "image/hotels2.jpg" style="width: 65%" >
                            </div>
                            <div class="flip-card-back">
                            <h1> <i>Cheap Hotels</i></h1> 
                                <a href="https://www.hotels.com/" id="website"> 1. Hotels</a><br>
                                <a href="https://www.booking.com/" id="website"> 2.Booking</a><br>
                                <a href="https://www.expedia.com/" id="website"> 3. Expedia</a><br>
                            <img src = "image/vacation2.jpg" Id="vacation" style="width:60%"/></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer><br>
    </div>

</body>
</html>