<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="style.css" />
</head>


<style>

button {
  width: 60px; height: 60px;
  text-align: left;
}

button.playing {
  background: url(http://i.imgur.com/kHz4ihY.png) no-repeat;
  background-size: cover;
}

button.paused {
  background: url(http://i.imgur.com/DKCYmP2.png) no-repeat;
  background-size: cover;
}

</style>
<body>

    <div id="playbtn">              
       <button id="play_btn" onclick="playPause()" class="playing"> </button>
       <p><b>Click me! 
       
       <?php 
        $imgUrl = "new.gif"; ?> 
        <img src="<?= $imgUrl;  ?>"/>  
        </b> </p>

       <audio id="listenworld">
           <source src="music/world.mp3">
        </audio>
    </div>
    
<script>


initAudioPlayer();

function initAudioPlayer(){
    var audio = new Audio();
        
    // store this in case you need it later in the script
    var aContainer = document.getElementById('listenworld');
    // assign the audio src
    audio.src = aContainer.querySelectorAll('source')[0].getAttribute('src');
    audio.load();
    audio.loop = true;
    audio.play();

    // Set object references
    var playbtn = document.getElementById("play_btn");

    // Add Event Handling
    playbtn.addEventListener("click", playPause(audio, playbtn));
}
    
    // Functions
function playPause(audio, playbtn){
    return function () {
        if(audio.paused){
          audio.play();
          playbtn.className = "playing";
        } else {
          audio.pause();
          playbtn.className = "paused";
        } 
    }
}

</script>
</body>
</html>