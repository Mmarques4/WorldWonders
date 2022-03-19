<?php
    session_start();
    $_SESSION["loggedIn"] = true;
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

    <div id=main>
        <form method= "POST" id="login">
          <?php 

          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $un=$_POST['dig3134user'];  
            $pw=$_POST['dig3134pass'];

            if ($un=='dig3134user' && $pw=='dig3134pass') {

              setcookie("user", "see", 0, "/");

              $_SESSION['username'] = $un;

              header("location: profile.php");
              error_log("user logged in",0);
            } else {
              echo '<style="color:white;"><input type="hidden"> Invalid Username/Password. Please try again!';
            }

          }

          ?>
          
            <br><br>Username <br><input type ="text" name="dig3134user" class="text" autocomplete="off" required><br>
            <br>Password<br> <input type ="password" name="dig3134pass" class="text" required><br>
            <br><input type="submit" name="submit" id="sub">
            <br><br><button><a href="create.php" id= "SignUp">Sign Up<a></button>
        </form>

        <?php 

        if(isset($_SESSION['user'])) {
            header("location: profile.php");
        } else {
            echo '<a href="index.php" id="else"> You have succesfully created an account! </a>';
        }

        ?>

    </div><br>
</body>
</html>