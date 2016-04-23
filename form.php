<?php
/**
 * Class Form
 * Permet de générer un petit formulaire.
 */
class Form{

  /**
   * @var array Données utilisées par le form
   */
  private $data;

  /**
   * @var string tag pour entourer les champs
   */
  public $surround = 'p';



  /**
   * @param array $data
   */
  public function __construct($data = array()){
    $this->data = $data;
  }

  /**
   * @param $html code html à retourner
   * @return string
   */
  private function surround($html){

    return "<{$this->surround}>{$html}</{$this->surround}>";
  }


  /**
   * $index string
   * @return string
   */

  private function getValue($index) {

    return isset($this->data[$index]) ? $this->data[$index] : null;

  }

  /**
   * $name string
   * @return string
   */
  public function input($name){
      return $this->surround('<input type="text" name="' . $name . '"value="'
      . $this->getValue($name) .
      '">');
}


  /**
   * @return string
   */
  public function submit(){
    return $this->surround('<button type="submit">Envoyer</button>');
}
}
