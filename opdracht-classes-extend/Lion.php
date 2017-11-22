<?php
  class Lion extends Animal {
    protected $species;
    protected $go = "roar";
    public function __construct($name, $gender, $health, $species) {
      parent::__construct($name, $gender, $health, $species);
      $this->species = $species;
    }
    public function getSpecies() {
      return $this->species;
    }
    public function doSpecialMove() {
      return $this->go;
    }
  }
?>
