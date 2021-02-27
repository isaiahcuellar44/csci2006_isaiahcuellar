<?php
//This is our main to output the page
//include "util.php"; we do include once because every time tht page is loaded it will load once
include_once "account.php";
include_once "artwork.php";
include_once "aboutUs.php";
include_once "Class.php";


$header = printHeader();
$footer = printFooter();
$title = "";
$body = "";

switch ($_GET["pg"]){
  case "account":
    $body = accountDetails();
    break;
  case "artworks":
    //See if the query string has an artwork ID
    $artworkID = 5;
    $test = new Artwork($artworkID);
    $title = $test->getTitle();//This does the HTML conversion
    $body = $test->getBody();
    break;
//Okay this is how im suppose to go about this i think
  case "home":
    $title = "Home";
    $body = home();
    break;
  case "aboutUs":
    $title = "About Us";
    $body = aboutUs();
    break;
    default:
    case "artists":
      //See if the query string has an artwork ID
      $artistID = 1000000;
      $test = new Artist($artistID);
      $title = $test->getTitle();//This does the HTML conversion
      $body = $test->getBody();
      break;
}



 echo "<!DOCTYPE html>".
       "<html lang=\"en\">".
         "<head>".
           "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">".
           "<title>{$title}</title>".
           "<link rel=\"stylesheet\" href=\"_aux/default.css\">".
         "</head>".
         "<body>{$header}{$body}{$footer}</body></html>";
//Okay so i think this is where i need to put in the work to choose between the artists
?>
