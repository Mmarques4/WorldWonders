<?php

session_start();

if (isset($_COOKIE['user'])) {
  # log out
  setcookie("user", "", 1, "/");
  header("location: logout.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<!--Head section contains metadata (not displayed in page)-->
<head>
  <!--viewport scale-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--favicon-->
  <link rel="stylesheet" type="text/css" href="style/main.css">
  <link rel="shortcut icon" href="taj.png" />

  <!--Title displayed in browser tab-->
  <title>Wonders</title>
</head>

<body>
  <br><div class="wrapper">
    <header class="main-head"><image src = "image/world.png" Id="world"></image><image src = "image/title.png" Id="title"></header>
    <?php
            
    include('nav.php');

    ?>
    <article class="content">
        <h1 id= wonders> The New Seven Wonders of the World</h1>
        <p>These sites and monuments are popularly known as the new Seven Wonders of the World, modern additions to the ancient Seven Wonders laid out by Philo of Byzantium in 250 B.C., which included the hanging gardens of Babylon and the pyramids of Giza. (Of those ancient seven, only the pyramids remain.)
         <br><br>
    </article> 

    <aside class="placess"><u>About</u><br>
    <p id=parapragh> The new wonders were chosen in 2007 through an 
      online contest put on by a Swiss company, the New 7 Wonders Foundation,
      in which more than tens of millions of people voted. All are Unesco World
      Heritage sites.
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
                <image src = "image/photo1.jpg" Id="Photo1"style="width:100%">
              </div>
              <div class="flip-card-back">
                <h1>The Taj Mahal</h1> 
                <p>An immense mausoleum of white marble, built in Agra between 1631 
                  and 1648 by order of the Mughal emperor Shah Jahan in memory of 
                  his favourite wife, the Taj Mahal is the jewel of Muslim art in India </p>
                <p><image src = "image/India.jpg" Id="India" style="width:40%"></image></p> 
              </div>
            </div>
          </div>

          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <image src = "image/photo3.jpg" Id="Photo3"  style="width:100%" >
              </div>
              <div class="flip-card-back">
                <h1>Chichen Itza</h1> 
                <p>It's a ruined ancient Maya city occupying an area of 4 square miles
                    in south-central Yucatan state, Mexico. It is thought to have
                    been a religious, military, political, and commercial centre
                    that at its peak would have been home to 35,000 people.</p> 
                <p><image src = "image/mexico.jpg" Id="Mexico" style="width:40%"></image></p>
              </div>
            </div>
          </div>

          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <image src = "image/photo2.jpg" Id="Photo2"  style="width:100%" >
              </div>
              <div class="flip-card-back">
                <h1>Petra</h1> 
                <p>Petra is a famous archaeological site in Jordan's southwestern
                   desert. Dating to around 300 B.C., it was the capital of the 
                   Nabatean Kingdom.</p> 
                <p><image src = "image/jordan.jpg" Id="Jordan" style="width:40%"></image></p>
              </div>
            </div>
          </div>
      
        
        </div>
        <div class="column">
          
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <image src = "image/photo4.jpg" Id="Photo4" style="width:100%" >
              </div>
              <div class="flip-card-back">
                <h1>Machu Picchu</h1> 
                <p>It's a site of ancient Inca ruins located in the northwest of Cuzco, Peru,
                  in the Cordillera de Vilcabamba of the Andes Mountains. It is perched
                   above the Urubamba River valley in a narrow saddle between two sharp
                    peaks Machu Picchu (Old Peak) and Huayna Picchu (New Peak).<br>
                    <image src = "image/peru.jpg" Id="Peru" style="width:40%"></image></p>
              </div>
            </div>
          </div>

          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <image src = "image/photo7.jpg" Id="Photo7" style="width:100%" >
              </div>
              <div class="flip-card-back">
                <h1>Great Wall of China</h1> 
                <p>The longest wall in the world, an awe-inspiring feat of ancient
                   defensive architecture.The Great Wall actually consists of numerous
                  walls, many of them parallel to each other built over some two millennia
                   across northern China and southern Mongolia. <br>
                    <image src = "image/china.jpg" Id="China" style="width:40%"></image></p>
              </div>
            </div>
          </div>

          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <image src = "image/photo6.jpg" Id="Photo6" style="width:100%" >
              </div>
              <div class="flip-card-back">
                <h1>The Colosseum</h1> 
                <p>The Colosseum or Coliseum, also known as the Flavian Amphitheatre is
                   an oval amphitheatre in the centre of the city of Rome, Italy. It was
                    the largest amphitheatre ever built at the time and held 50,000 to
                    80,000 spectators. The Colosseum is just east of the Roman Forum.   <br>
                    <image src = "image/italy.jpg" Id="italy" style="width:40%"></image></p>
              </div>
            </div>
          </div>

        </div> 

      <div class="footer">

        <div class="flip-card2">
          <div class="flip-card-inner2">
            <div class="flip-card-front2">
              <image src = "image/photo5.jpg" Id="Photo5">
            </div>
            <div class="flip-card-back2">
              <h1>Christ the Redeemer</h1> 
              <p>Christ the Redeemer, Portuguese Cristo Redentor, colossal statue of Jesus 
                Christ at the summit of Mount Corcovado, Rio de Janeiro, southeastern Brazil.
                The statue has become emblematic of both the city of Rio de Janeiro and the whole nation of Brazil.   <br>
                 <p> <image src = "image/brazil.jpg" Id="brazil" style="width:40%"></image></p>
            </div>
          </div>
        </div>
        </div> 

    </footer> 

</div>

</body>

</html>
