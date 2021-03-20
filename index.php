<?php
//This is our main to output the page
include_once "account.php";
include_once "artwork.php";
include_once "aboutUs.php";
include_once "Class.php";
include_once "config.php"; #I can move this into a util.php after this is done

connectDatabase();



$header = printHeader();
$footer = printFooter();
$title = "";
$body = "";

switch ($_GET["pg"]){
  case "account":
    $body = accountDetails();
    break;
  case "returns":
    $body = returns();
    break;
  case "premium":
    $body = premium();
    break;
  case "artworks":
    //See if the query string has an artwork ID
    #if (isset($_GET['artwork_id']))


    $artworkID = 1;
    $artwork1 = new Artwork($artworkID);
    $title = $artwork1->getTitle();//This does the HTML conversion
    $body = $artwork1->getBody();
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
      if (isset($_GET['artist_id'])){
        $artist1 = new Artist($_GET['artist_id']);
        $title = $artist1->getTitle();//This does the HTML conversion
        $body = $artist1->getBody();
      } else {
        $title = "Artists";
        $body = processArtists();
      }
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
