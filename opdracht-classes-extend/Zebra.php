<?php
  class Zebra extends Animal
  {
    protected $species;
    public function __construct($name, $gender, $health, $species)
    {
      parent::__construct($name, $gender, $health, $species);
      $this->species = $species;
    }
    public function getSpecies()
    {
      return   $this->species;
    }
  }
?>
