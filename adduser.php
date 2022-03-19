<?php

$conn = mysqli_connect('127.0.0.1', 'root', '');

if (!$conn)
{
  echo 'Not Connected To Server';
}

if(!mysqli_select_db($conn, 'sessions'))
{
  echo 'Database Not Selected';
}

$username = mysqli_real_escape_string($conn, $_POST['username']);
$email= mysqli_real_escape_string($conn, $_POST['email']);
$password= mysqli_real_escape_string($conn, password_hash ($_POST['password'], PASSWORD_DEFAULT));

$statement = $conn->prepare("INSERT INTO users (`username`,`email`,`password`) VALUES (?, ?, ?)");

$statement->bind_param("sss", $username, $email, $password);

$statement->execute();

if (!$statement)
{
  echo 'Not Inserted';
}
else {
  echo 'Inserted';
}

//echo mysqli_error($conn, $sql);

//header('refresh:2; Location: ./create.php');

?>

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