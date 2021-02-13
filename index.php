<?php

//include "util.php";
include_once "account.php";
include_once "artwork.php";
$header = printHeader();
$footer = printFooter();
$title = "";
$body = "";

switch ($_GET["pg"]){
  case "account":
    $body = accountDetails();
    break;
  case "artwork":
  default:
    $title = printTitle();

    $body = printBody();
    break;
}


 echo "<!DOCTYPE html>".
       "<html lang=\"en\">".
         "<head>".
           "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">".
           "<title>{$title}</title>".
           "<link rel=\"stylesheet\" href=\"aux/default.css\">".
         "</head>".
         "<body>{$header}{$body}{$footer}</body></html>";


?>
