<?php

include_once "account.php";


function printFooter(){
  return '<footer>
            <p>All images are copyright to their owners. This is just a hypothetical site ©2020 Copyright Art Store</p>
          </footer>';
};

function printHeader(){
  $firstNav = array(
    array ('name' => 'My account', 'link' => "?pg=account"),
    array ('name' => 'Wish List', 'link' => "#"),
    array ('name' => 'Shopping Cart', 'link' => "#"),
    array ('name' => 'Returns?', 'link' => "?pg=returns"),
    array ('name' => 'Premium', 'link' => "?pg=premium")
  );

  $navStr = '<ul>';
  foreach ($firstNav as $linkInfo) {
      $navStr .= '<li><a href="'.$linkInfo['link'].'">'.$linkInfo['name'].'</a></li>';
  }
  $navStr .= '</ul>';

  $secondNav = array(
    array ('name' => 'Home', 'link' => "?pg=home"),
    array ('name' => 'About Us', 'link' => "?pg=aboutUs"),
    array ('name' => 'Artworks', 'link' => "?pg=artworks"),
    array ('name' => 'Artists', 'link' => "?pg=artists")
  );

  $navStr2 = '<ul>';
  foreach ($secondNav as $linkInfo) {
      $navStr2 .= '<li><a href="'.$linkInfo['link'].'">'.$linkInfo['name'].'</a></li>';
  }
  $navStr2 .= '</ul>';

  return '<header>
            <nav class="user">'.$navStr.'</nav>
            <h1>Art Store</h1>
            <nav>'.$navStr2.'
            </nav>
        </header>';
}

function printTitle(){
    return 'Lebrun - Self-portrait in a Straw Hat';
}


?>
