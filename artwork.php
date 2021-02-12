<?php

include "account.php";

function printTitle(){
    return 'Lebrun - Self-portrait in a Straw Hat';
    echo "<!DOCTYPE html>".
          "<html lang=\"en\">".
            "<head>".
              "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">".
              "<title>Lebrun - Self-portrait in a Straw Hat</title>".
              "<link rel=\"stylesheet\" href=\"aux/default.css\">".
            "</head>";
}

function printBody(){
    $firstNav = array('My Account','Wish List', 'Shopping Cart');
    $navStr = '<ul>';
    foreach ($firstName as $linkInfo) {
        $navStr .= '<li><a href="#">'.$linkInfo.'</a></li>'; //I know we need to add the url link to the account portion here but how when its in a array liek this? Do i just modify that single one by calling $firstNav[0] and modifying the html like that?
    }
    $navStr .= '</ul>';

    $relatedArt = array(
        /* Simple Approach: artId => ArtworkName
         * Complex Approach: artID => array-of-data
         */
        293 => array(
            'name'  =>'Still Life with Flowers in a Glass Vase'
            'artist'=>'Lebrun',
        ),
        183 => array(
            'name'=>'Portrait of Alida Christina Assink'
            'artist'=>'...',
        ),
        820 => array(
            'name'=>'Self-portrait'
            'artist'=>'van Gogh',
        ),
        374 => array (
          'name'=>'William II, Prince of Orange, and his Bride, Mary Stuart'
          'artist'=>'...',
        ),
        849 => array(
          'name'=>'Milkmaid'
          'artist'=>'...',
        )
    );
    $relatedArtwork = '';
    foreach ($relatedArt as $artID => $artInfo) {
        /*
              <div class="relatedArt">
                  <figure><img src="artwork/small/849.jpg" alt="Milkmaid" title="Milkmaid">
                      <figcaption>
                          <p><a href="#849">Milkmaid</a></p>
                      </figcaption>
                  </figure>
                  <div class="actions"><a href="#">View</a><a href="#">Wish</a><a href="#">Cart</a></div>
              </div>
        */
        $relatedArtwork .= '<div class="relatedArt">'.
            '<figure><img src="artwork/small/'.$artID.'.jpg" alt="'.$artInfo['name'].'" title="'.$artInfo['name'].'">'.
            '<figcaption>'.
            '<p><a href="#'.$artID.'">'.$artInfo['name'].'</a></p>'.
            '</figcaption>'.
            '</figure>'.
            '<div class="actions"><a href="#">View</a><a href="#">Wish</a><a href="#">Cart</a></div>'.
            '</div>';
    }


    return '
        <header>
          <nav class="user">'.$navStr.'</nav>
          <h1>Art Store</h1>
          <nav>
              <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Art Works</a></li>
                  <li><a href="#">Artists</a></li>
              </ul>
          </nav>
      </header>
      <main>
          <article class="artwork">
              <h2 class="art_title">Self-portrait in a Straw Hat</h2>
              <p class="artist">By <a href="#">Louise Elisabeth Lebrun</a></p>
              <figure><img src="artwork/medium/13.jpg" alt="Self-portrait in a Straw Hat" title="Self-portrait in a Straw Hat">
                  <figcaption>
                      <p>The painting appears, after cleaning, to be an autograph replica of a picture, the original of which was painted in Brussels in 1782 in free imitation of Rubens’s ’Chapeau de Paille’, which LeBrun had seen in Antwerp. It was
                          exhibited in Paris in 1782 at the Salon de la Correspondance. LeBrun’s original is recorded in a private collection in France.</p>
                      <p class="list_price">$700</p>
                      <div class="actions"><a href="#">Add to Wish List</a><a href="#">Add to Shopping Cart</a></div>
                      <table class="artwork_info">
                          <caption>Product Details</caption>
                          <tbody>
                              <tr>
                                  <td class="facet">Date:</td>
                                  <td class="value">1782</td>
                              </tr>
                              <tr>
                                  <td class="facet">Medium:</td>
                                  <td class="value">Oil on canvas</td>
                              </tr>
                              <tr>
                                  <td class="facet">Dimension:</td>
                                  <td class="value">98cm x 71cm</td>
                              </tr>
                              <tr>
                                  <td class="facet">Home:</td>
                                  <td class="value"><a href="#">National Gallery, London</a></td>
                              </tr>
                              <tr>
                                  <td class="facet">Genres:</td>
                                  <td class="value"><a href="#">Realism</a>, <a href="#">Rococo</a></td>
                              </tr>
                              <tr>
                                  <td class="facet">Subjects:</td>
                                  <td class="value"><a href="#">People</a>, <a href="#">Arts</a></td>
                              </tr>
                          </tbody>
                      </table>
                  </figcaption>
              </figure>
          </article>
          <h2>Similar Artwork</h2>
          <article class="related">
              <div class="relatedArt">'.$relatedArtwork.'</div>
          </article>
      </main>
      <footer>
          <p>All images are copyright to their owners. This is just a hypothetical site ©2020 Copyright Art Store</p>
      </footer>
    ';
}

?>
