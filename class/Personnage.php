<?php

class Personnage {


  protected $max_vie = 120;
  protected $vie = 80;
  protected $atk = 20;
  protected $nom;

  public function __construct($nom){
    $this->nom = $nom;
  }

  public function getVie()
    {
    return $this->vie;
  }
  public function setVie($vie)
    {
    $this->vie = $vie;
  }

  public function getNom()
    {
    return $this->nom;
  }
  public function setNom($nom)
    {
    $this->nom = $nom;

    }

  public function getAtk()
    {
      return $this->atk;
    }
  public function setAtk($atk)
    {
      $this->atk = $atk;
    }

  public function regenerer($vie = null)
    {
    if(is_null($vie)) $this->vie = self::$max_vie;
    else $this->vie += $vie;
  }

  public function isMort()
    {
    return $this->vie <= 0;
  }

  protected function empecherNegatif()
    {
      if ($this->vie < 0) $this->vie = 0;
      }

  public function attack($cible)
  {
    $cible->vie -= $this->atk;
    $cible->empecherNegatif();
  }


}
 ?>
