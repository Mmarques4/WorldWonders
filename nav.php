<?php

$logged_in_nav = <<<HTML
<nav class="main-nav">
    <ul>
        <li><a href="Index.php" Id= "home">Home</a></li>
        <li><a href="contact.php" Id= "Contact us">Contact Us <br></a></li>
        <li><a href="profile.php" Id= "Profile">Profile <br></a></li>
        <li><a href="logout.php">Logout</a></li>
        <h2><img src="image/example.gif" Id="example" width="150" height="250"/></h2>
    </ul>
</nav>
HTML;

$logged_out_nav = <<<HTML
<nav class="main-nav">
    <ul>
        <li><a href="Index.php" Id= "home">Home</a></li>
        <li><a href="contact.php" Id= "Contact us">Contact Us <br></a></li>
        <li><a href="login.php" Id= "Log In"> Log In <br></a></li>
        <li><a href="create.php" Id= "create">Create Account <br></a></li>
        <h2><img src="image/example.gif" Id="example" width="150" height="250"/></h2>
    </ul>
</nav>
HTML;

if (isset($_COOKIE['user'])) {
    if ($_COOKIE['user'] == "see") {
        echo $logged_in_nav;
    } else {
        echo $logged_out_nav;
    }
} else {
    echo $logged_out_nav;
}

?>
