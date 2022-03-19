<?php

session_start();
if (isset($_SESSION['user'])) {
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
</body>

</html>

<form method= "POST" id="login">

<?php 
    if(isset($_POST["password"])) {
        setcookie("user", "see", 0, "/");
        header("location: profile.php");
        error_log("user logged in",0);
    } else {
        echo '';
      }
?>

<?php

$usernameErr = $emailErr = $passwordErr = "";
$username = $email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "username is required";
  } else {
    $username = test_input($_POST["username"]);
    
    $_SESSION['username'] = $username;
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<form action="adduser.php" method= "post" > 
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  Username:<br> <input type="text" name="username" required>
  <span class="error"> <?php echo $usernameErr;?></span>
  <br><br>
  Email:<br> <input type="text" name="email" required>
  <span class="error"> <?php echo $emailErr;?></span>
  <br><br>
  Password:<br> <input type="text" name="password" required>
  <span class="error"> <?php echo $passwordErr;?></span>
  <br>
  <br><br>
  <input type="submit" id="submit" name="submit" value="Register">
</form></br>

