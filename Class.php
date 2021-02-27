<?php

include_once "page.php";

//This will display the artist page
class Artist extends data{
  private $id;
  private $values;
  function __construct($id){
    parent::__construct($id);
    $this->query($id);
  }
  function getTitle(){
    return $this->values["name"];
  }

  function getBody(){//I will take most of the artwork HTML
    return "<div><p>".$this->values['info']."</p></div>";
  }

  //Lets put the artist data information here
  function query($id){
    $this->values = array (
      "name"=>"LeBrun",
      "info"=>"Élisabeth Vigée-Lebrun, in full Marie-Louise-Élisabeth Vigée-Lebrun, Lebrun also spelled LeBrun or Le Brun, (born April 16, 1755, Paris, France—died March 30, 1842, Paris), French painter, one of the most successful women artists (unusually so for her time), particularly noted for her portraits of women."
    );
  }
  function update(){
    echo "Here is the update";
  }
  function createNew(){
    echo "Here is something new";
  }
  function deleteAbstract(){
    echo "Something got deleted";
  }
}


class Artwork extends data {
  function getTitle(){
    return "LeBrun";
  }

  function getBody(){
    $relatedArt = array(
        /* Simple Approach: artId => ArtworkName
         * Complex Approach: artID => array-of-data
         */
        293 => array(
            'name'  =>'Still Life with Flowers in a Glass Vase',
            'artist'=>'Lebrun',
        ),
        183 => array(
            'name'=>'Portrait of Alida Christina Assink',
            'artist'=>'Jan Adam Kruseman',
        ),
        820 => array(
            'name'=>'Self-portrait',
            'artist'=>'Van Gogh',
        ),
        374 => array (
          'name'=>'William II, Prince of Orange, and his Bride, Mary Stuart',
          'artist'=>'Anthony van Dyck',
        ),
        849 => array(
          'name'=>'Milkmaid',
          'artist'=>'Johannes Vermeer',
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
      </main>';
}

  //Lets put the artist data information here
  function query($id){}
  function update(){}
  function createNew(){}
  function deleteAbstract(){}


}

 ?>
