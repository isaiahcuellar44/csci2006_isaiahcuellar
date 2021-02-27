<?php


//To use these abstract features it needs to be extenede via another class, so view next Comment. this abstract function requires us to extend it in order to use it. If im correct on this
//class create extends data {}
abstract class data {

private $id;
  function __construct($id){
    $this->id;
  }

  abstract public function getTitle(); //To make the new title for that page
  abstract public function getBody(); //To get new body for this page
  //Three more functions


  public function saveChanges(){}//I will add function bodies it will check if it is null and decide which abstract function to call


  public function delete(){}




  abstract public function query($id); //This is how ill get information from the database

  abstract public function update(); //This will update

  abstract public function createNew(); //

  abstract public function deleteAbstract(); //delete from db or simply return

}


?>
