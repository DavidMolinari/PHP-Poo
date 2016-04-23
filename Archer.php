<?php

class Archer extends Personnage{

  public $vie = 40;

  public function attack($cible)
  {
    $cible->vie -= 2 * $this->atk;
    $cible->empecherNegatif();
  }
}
