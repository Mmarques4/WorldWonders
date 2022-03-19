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

    <div>

    <?php
      if(isset($_POST['contactSubmit'])){
        $message = " ";
        $fullName = $_POST["fullName"] ;
        $email = $_POST["email"];
        $formMessage = $_POST["message"];
        
        
        $message .= "Full Name: " . $fullName . "\
      "; 
        $message .= "Email Address: " . $email . "\
      "; 
        $message .= "Comment: " . $formMessage . "\
      ";
        
        $subject = "Contact Us";
        $myEmail =" user@example.com";
        

        $success = "Your message has been submitted.<br>Thank you for contacting us!";
      } 
    ?>

<?php

  if (isset($success)) {

    echo '<br>'.$success;

  } else {

    echo '

    <form method="post" action="" id="contactForm">

		<div>
			<label for="fullName"> Name: </label> <br>
			<input type="text" name="fullName" id="fullName" required="required" placeholder="Full Name"  /><br><br>
		</div>

		<div>
			<label for="Email"> Email address:</label><br>
			<input type="email" name="email" id="email" required="required" placeholder="name@example.com" /><br><br>
		</div>

		<div>
			<label for="message"> Message:</label><br>
			<textarea name="message" id="message" rows="5" cols="20"></textarea><br><br>
		</div>
	
		<div class="submit">
			<input type="submit" name="contactSubmit" id="contactSubmit" value="Submit" />
		</div>

</form>

    ';

  }

?>
</div>

</div>

</body>