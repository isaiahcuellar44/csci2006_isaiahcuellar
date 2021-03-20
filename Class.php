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
    return $this->values["artist_fullName"];
  }

  function getBody(){//I will take most of the artwork HTML
    return "<div><p>".$this->values['artist_desc']."</p></div>";
  }

  static function getAllArtists(){
      $sql = "SELECT artist_id, artist_fullName
              FROM artist
              ORDER BY artist_fullName ASC";
      $conn = connectDatabase();
      $result = $conn->query($sql);

      if ($result->num_rows > 0){
        $allArtists = array();
        while ($row = $result->fetch_assoc()){
          $allArtists[] = $row;
        }
        return $allArtists;
      }
  }

  //Lets put the artist data information here, this is going to grab a single artist details
  function query($id){
    $sql = "SELECT *
            FROM artist
            WHERE artist_id = $id";

    $conn = connectDatabase();
    $result = $conn->query($sql);

    $this->values = $result->fetch_assoc();
  }

  function update(){
    $sql = "UPDATE artist
            SET ?, ?, ?, ?, ?, ?, ? #These are just placeholders for now
            WHERE {$this->values['artist_id']}";
  }
  function createNew(){
    $sql = "INSERT INTO artist (artist_fullName, artist_desc)
            VALUES ({$this->values['artist_fullName']}, {$this->values['artist_desc']})";
    $conn = connectDatabase();
    $result = $conn->query($sql);
    if (!$result){
      echo "Query failed";
    } else {
      echo "Query successful";
    }

  }
  function deleteAbstract(){
    $sql = "DELETE FROM artist
            WHERE ?"; #Leave this alone until we know for sure what we are deleting
    $conn = connectDatabase();
    $result = $conn->query($sql);
  }
}







class Artwork extends data {
  function getTitle(){
    return $this->values["artwork_name"];
  }

  static function getAllArtwork(){
      $sql = "SELECT artwork_id, artwork_name
              FROM artwork
              ORDER BY artwork_name ASC";
      $conn = connectDatabase();
      $result = $conn->query($sql);

      if ($result->num_rows > 0){
        $allArtwork = array();
        while ($row = $result->fetch_assoc()){
          $allArtwork[] = $row;
        }
        return $allArtwork;
      }
  }

  function getBody(){ #Change array and name to something to reflect in the databse
    $relatedArt = array(
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

        $relatedArtwork .= '<div class="relatedArt">'.
            '<figure><img src="artwork/small/'.$artID.'.jpg" alt="'.$artInfo['name'].'" title="'.$artInfo['name'].'">'.
            '<figcaption>'.
            '<p><a href="#'.$artID.'">'.$artInfo['name'].'</a></p>'.
            '</figcaption>'.
            '</figure>'.
            '<div class="actions"><a href="#">View</a><a href="#">Wish</a><a href="#">Cart</a></div>'.
            '</div>';
    }



    #$artist = new artist($this->values["artwork_artist"]);

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
  function query($id){
    $sql = "SELECT *
            FROM artwork
            WHERE artwork_id = $id";

            $conn = connectDatabase();
            $result = $conn->query($sql);
  }

  function update(){
    $sql = "UPDATE artwork
            SET ?, ?, ?, ?
            WHERE {$this->values['artwork_id']}";

            $conn = connectDatabase();
            $result = $conn->query($sql);
  }

  function createNew(){
    $sql = "INSERT INTO artwork (artwork_name, artwork_reprintPrice, artwork_desc)
            VALUES ({$this->values['artwork_name']}, {$this->values['artwork_reprintPrice']}, {$this->values['artwork_desc']})";

            $conn = connectDatabase();
            $result = $conn->query($sql);
  }
  function deleteAbstract(){
    $sql = "DELETE FROM artwork
            WHERE ?";

            $conn = connectDatabase();
            $result = $conn->query($sql);
  }




    }


 ?>
