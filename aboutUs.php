<?php
//This is the about us tab in our navigation

function aboutUs(){//I'm going to put real information here but for now this will do
  return "<div class=aboutUs>This website/ store is being created by Isaiah Cuellar and with the help of his instructor Matthew Sanders. I am using the textbook \"Fundamentals Of Web Development\" by Randy Connolly and Ricardo Hoar along with instrucor lectures to learn. As the semster continues, we will be continiously adding updates throuhout this page to make it more efficient and safe for use. Hopefully! </div>";
}

function home(){
  return "<div class=homePage><h3>Welcome to the world of art!</h3>
  Here we have a listing of feautres that cater to many who enjoy paintings from the 1600's to the 1800's. We have a few paintings and some history about the artists themselves so please take a look and browse around. Also feel free to make ana account which will make the checkout expidited and will allow us to remember you when you come back for more art!
  </div>";
}

function processArtists(){
  $allArtists = Artist::getAllArtists();
  $navStr = '<h1>Artists</h1><ul>';
  foreach ($allArtists as $linkInfo) {
      $navStr .= '<li><a href="?pg=artists&artist_id='.$linkInfo['artist_id'].'">'.$linkInfo['artist_fullName'].'</a></li>';
  }
  $navStr .= "</ul>";
  return $navStr;
}

/*function processArtwork(){
  $allArtwork = Artwork::getAllArtwork();
  $navStr = '<h1>Artwork</h1><ul>';
  foreach ($allArtwork as $linkInfo){
    $navStr .= '';
  }
}
*/
#Here we are going to process the href but am i processing a single one? Or evvery painting? 


?>
