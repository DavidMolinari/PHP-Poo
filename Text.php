<?php
class Text{

  public static function withZero($chiffre) {
    if($chiffre < 9) {
      return '0' . $chiffre;
    }else return $chiffre;
  }
}
