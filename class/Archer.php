<?php

class Archer extends Personnage{

  public $vie = 40;


/**
 * Constructeur Enfant
 */
  public function __construct($nom, $vie)
  {
    parent::__construct($nom);
    $this->vie = $vie;
  }


  public function attack($cible)
  {
    $cible->vie -= $this->atk;
    parent::attack($cible);
    $cible->empecherNegatif();
  }
}
