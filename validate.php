<?php

session_start();

/* This is where the sql portin should go but i need help on this portion
$username = $_Get["username"];
$password = $_GET["password"];
$hashedPassword = md5($username.’SECRET’.$password);

#So this will select the username from the database
$sql = "SELECT customer_id
        FROM Customer
        WHERE customer_username= $username AND cutsomer_passhash = $hashePassword";

$sql = "SELECT COUNT(*) as count
        FROM Customer
        WHERE customer_username = $username";
          */

$currentUser = $_Get["username"]; #This should be the test user
$curerntPassword = $_GET["password"]; #This should be the cutsomer_passhash
#For now i will just user the same username and password until i start using the database

if (isset($_GET["submitSignIn"])){
  $thisUser = $_Get["username"];
  $thisPass = $_GET["password"];
  if ($thisUser == $currentUser && $thisPass == $curerntPassword){
    setcookie('user', $thisUser, time()+60+60+24);
    $_SESSION['user'] = $thisUser;
    header("Location: http://127.0.0.1/project/index.php?pg=home"); #Why isnt it force directing? I think because i didn't set the aciton in the form to validate
    echo "You have signed in!";
  } else {
    echo "Username already exists."
  }
} else {
  header("Location: http://127.0.0.1/project/index.php?pg=home");
}



if (isset($_GET["newUser"])){
  $thisUser = $_GET["newUser"];
  $thisPass = $_GET["newPass"];
  if ($thisUser == $currentUser){
    return "This username already exists, please try again."
    header("Location: index.php");
  } else {
    setcookie('username', $thisUser, time()+60+60+24);
    $_SESSION['user'] = $thisUser;
    header ("Location: http://127.0.0.1/project/index.php?pg=home"); #This should just return them to the home page but we would need to indicate who tht use is
    #We could edit the navigation bar or something above it to indicate who is here or not
  }
}

?>
